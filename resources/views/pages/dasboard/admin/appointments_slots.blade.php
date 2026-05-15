@extends('layouts.admin')
@section('title', 'Clinical Appointment Planner - Anandham Mindcare')

@section('content')

<div class="max-w-5xl mx-auto py-20 space-y-8">

    <!-- 🔷 Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-3xl font-bold text-primary">Clinical Appointment Planner</h1>
            <p class="text-sm text-gray-500 mt-1">
                Manage and schedule patient sessions efficiently
            </p>
            <p class="text-sm text-gray-500 mt-1">
            Viewing schedule for 
            <strong>
                {{ \Carbon\Carbon::parse($selectedDate)->isToday() 
                    ? 'Today' 
                    : \Carbon\Carbon::parse($selectedDate)->format('F d, Y') }}
            </strong>
        </p>
        </div>

        <!-- Date Picker -->
        <form method="GET">
            <input type="date" name="date"  value="{{ $selectedDate ?? now()->toDateString() }}"
                onchange="this.form.submit()"
                class="border px-4 py-2 rounded-lg shadow-sm text-sm">
        </form>
    </div>

    <!-- 🔷 Legend -->
    <div class="flex gap-6 text-xs text-gray-600">
        <div class="flex items-center gap-2">
            <span class="w-3 h-3 bg-green-400 rounded-full"></span> Available
        </div>
        <div class="flex items-center gap-2">
            <span class="w-3 h-3 bg-red-400 rounded-full"></span> Booked
        </div>
        <div class="flex items-center gap-2">
            <span class="w-3 h-3 bg-yellow-400 rounded-full"></span> Priority
        </div>
    </div>

    <!-- 🔷 Slots Table -->
    <div class="bg-white rounded-2xl shadow border border-gray-100 overflow-hidden">

        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-50 text-gray-600 uppercase text-xs tracking-wider">
                    <th class="p-4 text-left">Time Slot</th>
                    <th class="p-4 text-left">Patient Details</th>
                    <th class="p-4 text-left">Service</th>
                    <th class="p-4 text-left">Status</th>
                    <th class="p-4 text-right">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($slots as $slot)

                    @php
                        $slotAppointments = $appointments[$slot['start']] ?? collect();
                    @endphp

                    <tr class="border-t hover:bg-gray-50 transition">

                        <!-- ⏰ Time -->
                        <td class="p-4 font-medium text-gray-800">
                            {{ $slot['label'] }}
                        </td>

                        <!-- 👤 Patient -->
                        
<td class="p-4">
    @if($slotAppointments->count())

        @foreach($slotAppointments as $appointment)

            <div class="flex items-center gap-3 mb-2">

                <!-- Avatar -->
                <div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center text-xs font-bold">
                    {{ strtoupper(substr($appointment->first_name,0,1)) }}
                </div>

                <div>
                    <div class="font-semibold text-gray-800">
                        {{ $appointment->first_name }} {{ $appointment->last_name }}
                    </div>

                    <div class="text-xs text-gray-500">
                        #AM-{{ $appointment->id }}
                    </div>
                </div>

                @if($appointment->urgency === 'priority')
                    <span class="text-yellow-500 text-xs">★</span>
                @endif

            </div>

        @endforeach

    @else
        <span class="text-gray-400 italic">No appointment</span>
    @endif
                </td>
                
                

                        <!-- 🏥 Service -->
                        <td class="p-4 text-gray-600">
                            @if($slotAppointments->count())
                                @foreach($slotAppointments as $appointment)
                                    <div class="mb-1">{{ $appointment->service }}</div>
                                @endforeach
                            @else
                                —
                            @endif
                        </td>

                        <!-- � Status -->
                        <td class="p-4 text-gray-600">
                            @if($slotAppointments->count())
                                @foreach($slotAppointments as $appointment)
                                    <div class="mb-1 capitalize">{{ $appointment->status }}</div>
                                @endforeach
                            @else
                                scheduled
                            @endif
                        </td>

                        <!-- ⚡ Action -->
                        <td class="p-4 text-right">
                        <div class="flex flex-col items-end gap-2">

                            @if($slotAppointments->count())

                                @foreach($slotAppointments as $appointment)

                                    <div class="flex gap-2">

                                        <a href="{{ route('appointment.edit', $appointment->id) }}"
                                        class="px-2 py-1 text-xs bg-blue-100 text-blue-600 rounded">
                                            Edit
                                        </a>

                                        <form action="{{ route('appointment.destroy', $appointment->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="px-2 py-1 text-xs bg-red-100 text-red-600 rounded">
                                                Delete
                                            </button>
                                        </form>

                                    </div>

                                @endforeach

                                <!-- Add more -->
                                <a href="{{ route('appointment.create', [
                                    'date' => $selectedDate,
                                    'time' => $slot['start']
                                ]) }}"
                                class="text-xs text-purple-600 mt-1">
                                    + Add More
                                </a>

                            @else

                                <a href="{{ route('appointment.create', [
                                    'date' => $selectedDate,
                                    'time' => $slot['start']
                                ]) }}"
                                class="px-3 py-1.5 text-xs bg-green-100 text-green-600 rounded-md">
                                    + Book Slot
                                </a>

                            @endif

                        </div>
                    </td>

                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>

    <!-- 🔷 Footer Note -->
    <div class="text-xs text-gray-400 text-center">
        Showing schedule for <strong>{{ \Carbon\Carbon::parse($selectedDate)->format('F d, Y') }}</strong> |
        Time window: 4:00 PM – 9:00 PM
    </div>

</div>

@endsection