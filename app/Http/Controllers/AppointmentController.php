<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Request $request)
{
    $query = Appointment::where('user_id', auth()->id());

    // 🔍 Search (name or ID)
    if ($request->search) {
        $query->where(function ($q) use ($request) {
            $q->where('first_name', 'like', '%' . $request->search . '%')
              ->orWhere('last_name', 'like', '%' . $request->search . '%')
              ->orWhere('id', $request->search);
        });
    }

    // 🏥 Service Filter
    if ($request->service && $request->service != 'All Services') {
        $query->where('service', $request->service);
    }

    // 📅 Date Filter
if ($request->date_range) {

    if ($request->date_range == 'today') {
        $query->whereDate('date', now());
    }

    if ($request->date_range == '7') {
        $query->whereBetween('date', [now(), now()->addDays(7)]);
    }

    if ($request->date_range == '30') {
        $query->whereBetween('date', [now(), now()->addDays(30)]);
    }
}

    $appointments = $query->latest()->paginate(10);

     $services = Appointment::where('user_id', auth()->id())
                    ->select('service')
                    ->distinct()
                    ->pluck('service');

    return view('pages.dasboard.users.appointment_list', compact('appointments', 'services'));
}

    public function store(Request $request)
    {
        // dd($request->all(), auth()->id());
        $request->validate([
            'first_name' => 'required',
            'phone' => 'required',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        Appointment::create([
        ...$request->all(),
        'user_id' => auth()->id(), // ✅ attach user
    ]);

        return redirect()->back()->with('success', 'Appointment created');
    }

    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointments.form', compact('appointment'));
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->update([
        ...$request->all(),
        'user_id' => auth()->id(), // optional (keep ownership)
    ]);

        return redirect()->back()->with('success', 'Updated successfully');
    }
}

