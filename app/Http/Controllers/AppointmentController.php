<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\User;

class AppointmentController extends Controller
{  
    public function adminIndex(Request $request)
{
    $query = Appointment::query();

    // 🔍 Search (name, ID, phone)
    if ($request->search) {
        $query->where(function ($q) use ($request) {
            $q->where('first_name', 'like', '%' . $request->search . '%')
              ->orWhere('last_name', 'like', '%' . $request->search . '%')
              ->orWhere('phone', 'like', '%' . $request->search . '%')
              ->orWhere('id', $request->search);
        });
    }

    // 🏥 Service Filter
    if ($request->service) {
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

    // 🔥 Optional: sort latest first
    $appointments = $query->latest()->paginate(15);

    // ✅ DISTINCT services (all users)
    $services = Appointment::select('service')
                    ->distinct()
                    ->pluck('service');

    return view('pages.dasboard.admin.appointments_list', compact('appointments', 'services'));
}
         
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

    // 🏥 Services (distinct from DB)
    $services = Appointment::select('service')->distinct()->pluck('service');

    // 📌 Status options
    $statuses = ['pending', 'scheduled', 'completed', 'cancelled'];

    return view('pages.dasboard.admin.appointments_edit', compact(
        'appointment',
        'services',
        'statuses'
    ));
}

    public function update(Request $request, $id)
{
    $appointment = Appointment::findOrFail($id);

    $appointment->update([
        'first_name'   => $request->first_name,
        'last_name'    => $request->last_name,
        'phone'        => $request->phone,
        'address'      => $request->address,
        'date'         => $request->date,
        'start_time'   => $request->start_time,
        'end_time'     => $request->end_time,
        'service'      => $request->service,
        'doctor_name'  => $request->doctor_name, // ✅ TEXT FIELD
        'status'       => $request->status,
        'notes'        => $request->notes,
        'urgency'      => $request->urgency,
    ]);

    return redirect()->route('admin.appointments.list')->with('success', 'Appointment updated');
}
}

