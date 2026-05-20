<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Course;
use App\Models\User;
use Carbon\Carbon;
class EnrollmentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | SUBMIT ENROLLMENT
    |--------------------------------------------------------------------------
    */
    public function submit(Request $request, $courseId)
{
    $course = \App\Models\Course::findOrFail($courseId);

    // Prevent duplicate enrollment
    $existing = Enrollment::where('user_id', auth()->id())
        ->where('course_id', $courseId)
        ->first();

    if ($existing) {
        return redirect()->route('courses.reserve', $courseId)
            ->with('enrolled', true);
    }

    // ===============================
    // 🟢 FREE COURSE → AUTO APPROVED
    // ===============================
    if ($course->type === 'free') {

        Enrollment::create([
            'user_id' => auth()->id(),
            'course_id' => $courseId,
            'user_name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'status' => 'approved'
        ]);

        return redirect()->route('user.course.enrollments')
            ->with('success', 'Enrolled successfully');
    }

    // ===============================
    // 🟣 SPECIALIZED COURSE
    // ===============================
    if ($course->type === 'specialized') {

        // If QR NOT required → auto approve
        if (!$course->qr_enabled) {

            Enrollment::create([
                'user_id' => auth()->id(),
                'course_id' => $courseId,
                'user_name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'status' => 'approved'
            ]);

            return redirect()->route('user.course.enrollments')
                ->with('success', 'Enrolled successfully');
        }

        // If QR required → go payment flow
    }

    // ===============================
    // 🔴 PREMIUM / QR FLOW
    // ===============================

    $request->validate([
        'payment_screenshot' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $path = $request->file('payment_screenshot')
        ->store('payments', 'public');

    Enrollment::create([
        'user_id' => auth()->id(),
        'course_id' => $courseId,
        'user_name' => auth()->user()->name,
        'email' => auth()->user()->email,
        'payment_screenshot' => $path,
        'status' => 'pending'
    ]);

    return redirect()->route('courses.reserve', $courseId)
        ->with('enrolled', true);
}

    /*
    |--------------------------------------------------------------------------
    | USER DASHBOARD (ENROLLMENTS LIST)
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        // ✅ Ensure logged in
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        

        // ✅ Fetch enrollments correctly
        $enrollments = Enrollment::with(['course.mentors'])
            ->where('user_id', auth()->id()) // 🔥 FIXED FILTER
            ->latest()
            ->get();

        return view('pages.dasboard.users.course_enrollment', compact('enrollments'));
    }

    public function handleEnrollment($courseId)
{
      // 🔒 Force login for ALL enrollments
    if (!auth()->check()) {
        return redirect()->route('login')
            ->with('error', 'Please login to enroll');
    }

    $course = \App\Models\Course::findOrFail($courseId);

    $existing = Enrollment::where('user_id', auth()->id())
        ->where('course_id', $courseId)
        ->first();

    // ✅ Already enrolled → go dashboard
    if ($existing) {
        return redirect()->route('user.course.enrollments');
    }

    // =========================
    // 🟢 FREE COURSE
    // =========================
    if ($course->course_type === 'free') {

        Enrollment::create([
            'user_id' => auth()->id(),
            'course_id' => $courseId,
            'user_name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'status' => 'approved'
        ]);

        return redirect()->route('user.course.enrollments')
            ->with('success', 'Enrolled successfully');
    }

    // =========================
    // 🟣 SPECIALIZED COURSE
    // =========================
    if ($course->course_type === 'specialized') {

        // ❌ No QR → direct entry (but pending as you requested)
        if (!$course->qr_enabled) {

            Enrollment::create([
                'user_id' => auth()->id(),
                'course_id' => $courseId,
                'user_name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'status' => 'pending' // 👈 as you requested
            ]);

            return redirect()->route('user.course.enrollments')
                ->with('success', 'Enrollment submitted');
        }

        // ✅ QR exists → go payment page
        return redirect()->route('courses.reserve', $courseId);
    }

    // =========================
    // 🔴 PREMIUM COURSE
    // =========================
    return redirect()->route('courses.reserve', $courseId);
}

public function paymentVerifications()
{
    $pendingPayments = Enrollment::with(['course', 'user'])
        ->where('status', 'pending')
        ->latest()
        ->get();

    $approvedPayments = Enrollment::with(['course', 'user'])
        ->where('status', 'approved')
        ->latest()
        ->get();

    $rejectedPayments = Enrollment::with(['course', 'user'])
        ->where('status', 'rejected')
        ->latest()
        ->get();

    // 💰 totals from course fee
    $totalVerified = $approvedPayments->sum(fn($p) => $p->course->fee ?? 0);
    $totalPending  = $pendingPayments->sum(fn($p) => $p->course->fee ?? 0);

    $totalRevenue = $totalVerified + $totalPending;

    // 📊 success rate
    $totalProcessed = $approvedPayments->count() + $rejectedPayments->count();
    $successRate = $totalProcessed > 0
        ? round(($approvedPayments->count() / $totalProcessed) * 100, 1)
        : 0;

    return view('pages.dasboard.admin.payments', compact(
        'pendingPayments',
        'approvedPayments',
        'rejectedPayments',
        'totalVerified',
        'totalPending',
        'totalRevenue',
        'successRate'
    ));
}

public function revert($id)
{
    $enrollment = Enrollment::findOrFail($id);
    $enrollment->status = 'pending';
    $enrollment->save();

    return back()->with('info', 'Status moved back to pending');
}

public function approve($id)
{
    $enrollment = Enrollment::findOrFail($id);
    $enrollment->status = 'approved';
    $enrollment->save();

    return back()->with('success', 'Payment approved');
}

public function reject($id)
{
    $enrollment = Enrollment::findOrFail($id);
    $enrollment->status = 'rejected';
    $enrollment->save();

    return back()->with('error', 'Payment rejected');
}


public function attendanceInsights()
{
    $date = request('date')
        ? Carbon::parse(request('date'), 'Asia/Kolkata')->startOfMonth()
        : now('Asia/Kolkata')->startOfMonth();

    $month = $date->month;
    $year  = $date->year;

    /*
    |--------------------------------------------------------------------------
    | CALENDAR RANGE
    |--------------------------------------------------------------------------
    */
    $startOfCalendar = $date->copy()
        ->startOfMonth()
        ->startOfWeek(Carbon::SUNDAY);

    $endOfCalendar = $date->copy()
        ->endOfMonth()
        ->endOfWeek(Carbon::SATURDAY);

    $days = [];

    $current = $startOfCalendar->copy();

    while ($current <= $endOfCalendar) {
        $days[] = $current->copy();
        $current->addDay();
    }

    /*
    |--------------------------------------------------------------------------
    | TODAY
    |--------------------------------------------------------------------------
    */
    $today = now('Asia/Kolkata')->startOfDay();

    /*
    |--------------------------------------------------------------------------
    | STATS
    |--------------------------------------------------------------------------
    */
    $totalUsers = User::count();

    $totalEnrollments = Enrollment::count();

    $enrollmentRate = $totalUsers > 0
        ? round(($totalEnrollments / $totalUsers) * 100)
        : 0;

    $totalCapacity = Course::sum('capacity');

    $capacityUtil = $totalCapacity > 0
        ? round(($totalEnrollments / $totalCapacity) * 100)
        : 0;

    /*
    |--------------------------------------------------------------------------
    | MONTH FILTER RANGE
    |--------------------------------------------------------------------------
    */
    $monthStart = $date->copy()->startOfMonth();

    $monthEnd = $date->copy()->endOfMonth();

    /*
    |--------------------------------------------------------------------------
    | COURSES FOR SELECTED MONTH
    |--------------------------------------------------------------------------
    */
    $monthlyCourses = Course::withCount('enrollments')
        ->get()
        ->filter(function ($course) use ($monthStart, $monthEnd) {

            $start = $course->effective_date;

            $end = $course->effective_end_date ?? $start;

            if (!$start) {
                return false;
            }

            /*
            |--------------------------------------------------------------------------
            | RANGE OVERLAP CHECK
            |--------------------------------------------------------------------------
            */
            return $start->lte($monthEnd)
                && $end->gte($monthStart);
        })
        ->values();

    /*
    |--------------------------------------------------------------------------
    | ACTIVE COURSES
    |--------------------------------------------------------------------------
    */
    $activeCourses = Course::get()
        ->filter(function ($course) use ($today) {

            $start = $course->effective_date;

            $end = $course->effective_end_date ?? $start;

            if (!$start) {
                return false;
            }

            return $start->lte($today)
                && $end->gte($today);
        })
        ->count();

    /*
    |--------------------------------------------------------------------------
    | COMPLETED COURSES
    |--------------------------------------------------------------------------
    */
    $completedCourses = $monthlyCourses
        ->filter(function ($course) use ($today) {

            $end = $course->effective_end_date
                ?? $course->effective_date;

            return $end && $end->lt($today);
        })
        ->values();

    /*
    |--------------------------------------------------------------------------
    | UPCOMING / ONGOING COURSES
    |--------------------------------------------------------------------------
    */
    $upcomingCourses = $monthlyCourses
    ->filter(function ($course) use ($today) {

        $start = $course->effective_date;

        $end = $course->effective_end_date ?? $start;

        if (!$start || !$end) {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | WEEKEND RANGE COURSES
        |--------------------------------------------------------------------------
        */
        if ($course->schedule_type === 'weekend_range') {

            $weekendDays = is_array($course->weekend_days)
                ? $course->weekend_days
                : json_decode($course->weekend_days, true);

            $current = $today->copy();

            while ($current->lte($end)) {

                // skip before actual course start
                if ($current->lt($start)) {
                    $current->addDay();
                    continue;
                }

                if (
                    in_array(
                        $current->format('l'),
                        $weekendDays ?? []
                    )
                ) {
                    return true;
                }

                $current->addDay();
            }

            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | NORMAL COURSES
        |--------------------------------------------------------------------------
        */
        return $end->gte($today);
    })
    ->values();
    /*
    |--------------------------------------------------------------------------
    | CALENDAR COURSES
    |--------------------------------------------------------------------------
    */
   $calendarCourses = collect();

foreach ($monthlyCourses as $course) {

    /*
    |--------------------------------------------------------------------------
    | IRREGULAR MULTIPLE DATES
    |--------------------------------------------------------------------------
    */
    if ($course->schedule_type === 'dates') {

        $dates = is_array($course->course_dates)
            ? $course->course_dates
            : json_decode($course->course_dates, true);

        foreach ($dates ?? [] as $dateValue) {

            if (!$dateValue) {
                continue;
            }

            $current = Carbon::parse($dateValue, 'Asia/Kolkata');

            if (
                $current->month !== $month ||
                $current->year !== $year
            ) {
                continue;
            }

            $dateKey = $current->toDateString();

            if (!$calendarCourses->has($dateKey)) {
                $calendarCourses[$dateKey] = collect();
            }

            $calendarCourses[$dateKey]->push($course);
        }

        continue;
    }

    /*
    |--------------------------------------------------------------------------
    | NORMAL / RANGE COURSES
    |--------------------------------------------------------------------------
    */
    $start = $course->effective_date;

    $end = $course->effective_end_date ?? $start;

    if (!$start || !$end) {
        continue;
    }

    /*
    |--------------------------------------------------------------------------
    | WEEKEND RANGE
    |--------------------------------------------------------------------------
    */
    if ($course->schedule_type === 'weekend_range') {

        $weekendDays = is_array($course->weekend_days)
            ? $course->weekend_days
            : json_decode($course->weekend_days, true);

        $current = $start->copy();

        while ($current->lte($end)) {

            if (
                in_array(
                    $current->format('l'),
                    $weekendDays ?? []
                )
            ) {

                if (
                    $current->month === $month &&
                    $current->year === $year
                ) {

                    $dateKey = $current->toDateString();

                    if (!$calendarCourses->has($dateKey)) {
                        $calendarCourses[$dateKey] = collect();
                    }

                    $calendarCourses[$dateKey]->push($course);
                }
            }

            $current->addDay();
        }

        continue;
    }

    /*
    |--------------------------------------------------------------------------
    | MONTH / YEAR / SINGLE DATE
    |--------------------------------------------------------------------------
    */
    $current = $start->copy();

    while ($current->lte($end)) {

        if (
            $current->month === $month &&
            $current->year === $year
        ) {

            $dateKey = $current->toDateString();

            if (!$calendarCourses->has($dateKey)) {
                $calendarCourses[$dateKey] = collect();
            }

            $calendarCourses[$dateKey]->push($course);
        }

        $current->addDay();
    }
}

    return view(
        'pages.dasboard.admin.attendance',
        compact(
            'days',
            'date',
            'month',
            'year',
            'calendarCourses',
            'activeCourses',
            'completedCourses',
            'upcomingCourses',
            'totalUsers',
            'totalEnrollments',
            'enrollmentRate',
            'capacityUtil'
        )
    );
}
}