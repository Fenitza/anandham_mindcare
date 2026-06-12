<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create($appointmentId)
{
    $appointment = Appointment::where('id', $appointmentId)
        ->where('user_id', auth()->id())
        ->where('status', 'completed')
        ->firstOrFail();

    if ($appointment->review) {
        return back()->with('error', 'Review already submitted.');
    }

    return view('pages.review.create', compact('appointment'));
}

public function store(Request $request)
{
    $request->validate([
        'appointment_id' => 'required|exists:appointments,id',
        'rating' => 'required|integer|min:1|max:5',
        'review' => 'nullable|string|max:1000',
    ]);

    $appointment = Appointment::where('id', $request->appointment_id)
        ->where('user_id', auth()->id())
        ->where('status', 'completed')
        ->firstOrFail();

    if ($appointment->review) {
        return back()->with('error', 'Review already submitted.');
    }

    Review::create([
        'appointment_id' => $appointment->id,
        'user_id' => auth()->id(),
        'rating' => $request->rating,
        'review' => $request->review,
    ]);

    return redirect()
        ->route('user.appointments.list')
        ->with('success', 'Review submitted successfully.');
}
}
