<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Appointment;

class DashboardController extends Controller
{
public function userDashboard()
{
    $user = auth()->user();

    // Active courses
    $activeCourses = $user->enrollments()
        ->where('status', 'approved')
        ->with('course')
        ->get();

    // Completed courses
    $completedCourses = $user->enrollments()
        ->where('status', 'completed')
        ->count();

    // Live sessions (today)
    $todaySessions = \App\Models\Course::whereDate('course_date', now())
        ->count();

    // Upcoming sessions
    $upcomingSessions = \App\Models\Course::whereDate('course_date', '>', now())
        ->orderBy('course_date')
        ->take(3)
        ->get();

    return view('pages.dasboard.users.dashboard', compact(
        'user',
        'activeCourses',
        'completedCourses',
        'todaySessions',
        'upcomingSessions'
    ));
}
}