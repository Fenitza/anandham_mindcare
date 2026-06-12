<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class AppointmentController extends Controller
{  
    public function adminIndex(Request $request)
{
$query = Appointment::with('reviewAppointments');

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

         
public function adminSlots(Request $request)
{
    $selectedDate = $request->date 
    ?? Carbon::now('Asia/Kolkata')->toDateString();

    // ✅ Generate slots (4PM → 9PM, 30 mins)
    $start = Carbon::parse($selectedDate . ' 17:00');
    $end = Carbon::parse($selectedDate . ' 20:30');

    $slots = [];

    while ($start < $end) {
        $slotStart = $start->format('H:i');
        $slotEnd = $start->copy()->addMinutes(30)->format('H:i:s');

        $slots[] = [
            'start' => $slotStart,
            'end' => $slotEnd,
            'label' => $start->format('h:i A') . ' - ' . $start->copy()->addMinutes(30)->format('h:i A')
        ];

        $start->addMinutes(30);
    }

    // ✅ Fetch appointments for that day
    $appointments = Appointment::with('reviewAppointments')
    ->whereDate('date', $selectedDate)
    ->get()
    ->groupBy(function ($item) {
        return \Carbon\Carbon::parse($item->start_time)->format('H:i');
    });

    return view('pages.dasboard.admin.appointments_slots', compact('slots', 'appointments', 'selectedDate'));
}
         
public function destroy($id)
{
    Appointment::findOrFail($id)->delete();

    return back()->with('success', 'Appointment deleted');
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
           
            // 'end_time' => 'required',
        ]);

        Appointment::create([
        ...$request->all(),
        'user_id' => auth()->id(), 
        // ✅ attach user
        'review_of' => $request->review_of,
    ]);

        return redirect()->route('user.appointments.list')->with('success', 'Appointment created');
    }

    public function adminStore(Request $request)
    {
        // dd($request->all(), auth()->id());
        $request->validate([
            'first_name' => 'required',
            'phone' => 'required',
            'date' => 'required|date',
            'start_time' => 'required',
            // 'end_time' => 'required',
        ]);

        Appointment::create([
        ...$request->all(),
        'review_of' => $request->review_of,
        // 'user_id' => auth()->id(), // ✅ attach user
    ]);

        return redirect()->route('admin.appointments.slots')->with('success', 'Appointment created');
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
        'start_time' => Carbon::parse($request->start_time)->format('H:i:s'),
        // 'end_time'     => $request->end_time,
        'service'      => $request->service,
        'doctor_name'  => $request->doctor_name, // ✅ TEXT FIELD
        'status'       => $request->status,
        'notes'        => $request->notes,
        'urgency'      => $request->urgency,
    ]);

    return redirect()->route('admin.appointments.slots')->with('success', 'Appointment updated');
}

public function create(Request $request)
{
    $appointment = null;

    if ($request->review_of) {

        $appointment = Appointment::findOrFail(
            $request->review_of
        );
    }

    return view(
        'pages.dasboard.admin.appointments_edit',
        [
            'appointment' => $appointment,
            'date' => $request->date,
            'time' => $request->time,
            'review_of' => $request->review_of,
        ]
    );
}
public function storeGuest(Request $request)
{
    $request->validate([
        'first_name' => 'required',
        'phone' => 'required',
        'date' => 'required|date',
        'start_time' => 'required',
        // 'end_time' => 'required',
    ]);

    Appointment::create([
        ...$request->all(),
        'user_id' => null, // ❗ important
        'status' => 'pending', // optional but useful
    ]);

    return redirect()->back()->with('success', 'Appointment request submitted. We will contact you.');
}

}

