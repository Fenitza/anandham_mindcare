<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;

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
        $enrollments = Enrollment::with(['course.mentor'])
            ->where('user_id', auth()->id()) // 🔥 FIXED FILTER
            ->latest()
            ->get();

        return view('pages.dasboard.users.course_enrollment', compact('enrollments'));
    }

    public function handleEnrollment($courseId)
{
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
}