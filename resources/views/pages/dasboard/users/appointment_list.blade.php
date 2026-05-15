@extends('layouts.user')
@section('title', 'Appointments - Anandham Mindcare')

@section('content')

@include('partials.alerts')

<!-- 🔷 Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-6">

    <div>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-headline font-bold text-primary">
            My Appointments
        </h2>
    </div>

    <a href="{{ route('user.appointment.add') }}"
       class="inline-flex items-center gap-2 bg-primary text-white px-5 py-3 rounded-xl text-sm md:text-base font-semibold shadow hover:bg-primary-container transition">
        
        <span class="material-symbols-outlined text-base">add</span>
        Add Appointment
    </a>

</div>

<!-- 🔷 Filters -->
<form method="GET" action="{{ route('user.appointments.list') }}">
<div class="bg-surface-container-low rounded-xl p-4 md:p-6 mb-6 flex flex-col md:flex-row flex-wrap gap-4 md:items-end">

    <!-- Search -->
    <div class="flex-1 min-w-[200px]">
        <label class="text-xs font-bold text-primary uppercase mb-1 block">Search</label>
        <input type="text" name="search"
               value="{{ request('search') }}"
               placeholder="Name or ID..."
               class="w-full bg-white rounded-lg px-3 py-2 text-sm">
    </div>

    <!-- Service -->
    <div class="w-full md:w-48">
        <label class="text-xs font-bold text-primary uppercase mb-1 block">Service</label>
        <select name="service" class="w-full bg-white rounded-lg px-3 py-2 text-sm">
            <option value="">All</option>
            @foreach($services as $service)
                <option value="{{ $service }}" {{ request('service') == $service ? 'selected' : '' }}>
                    {{ $service }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Date -->
    <div class="w-full md:w-48">
        <label class="text-xs font-bold text-primary uppercase mb-1 block">Date</label>
        <select name="date_range" class="w-full bg-white rounded-lg px-3 py-2 text-sm">
            <option value="">All</option>
            <option value="today" {{ request('date_range') == 'today' ? 'selected' : '' }}>Today</option>
            <option value="7" {{ request('date_range') == '7' ? 'selected' : '' }}>Next 7 Days</option>
            <option value="30" {{ request('date_range') == '30' ? 'selected' : '' }}>Next 30 Days</option>
        </select>
    </div>

    <!-- Button -->
    <button class="bg-secondary text-white px-4 py-2 rounded-lg text-sm">
        Apply
    </button>

</div>
</form>

<!-- 🔷 MOBILE VIEW (Cards) -->
<div class="md:hidden space-y-4">

@forelse($appointments as $appointment)

    <div class="bg-white rounded-xl p-4 shadow">

        <div class="flex justify-between items-start">

            <div>
                <p class="font-semibold text-primary">
                    {{ $appointment->first_name }} {{ $appointment->last_name }}
                </p>
                <p class="text-xs text-gray-500">
                    #AM-{{ $appointment->id }}
                </p>
            </div>

            @php
                $colors = [
                    'pending' => 'bg-amber-100 text-amber-800',
                    'scheduled' => 'bg-emerald-100 text-emerald-800',
                    'completed' => 'bg-slate-100 text-slate-600',
                    'cancelled' => 'bg-red-100 text-red-800',
                ];
            @endphp

            <span class="px-2 py-1 text-xs rounded-full {{ $colors[$appointment->status] ?? '' }}">
                {{ ucfirst($appointment->status) }}
            </span>

        </div>

        <div class="mt-3 text-sm text-gray-600 space-y-1">
            <p><strong>Service:</strong> {{ $appointment->service }}</p>
            <p><strong>Doctor:</strong> {{ $appointment->doctor_name ?? 'Not Assigned' }}</p>
            <p>
                <strong>Date:</strong> 
                {{ \Carbon\Carbon::parse($appointment->date)->format('M d, Y') }}
            </p>
            <p>
                <strong>Time:</strong> 
                {{ $appointment->start_time }}
            </p>
        </div>

    </div>

@empty
    <p class="text-center text-gray-500 py-10">No appointments found</p>
@endforelse

</div>

<!-- 🔷 DESKTOP TABLE -->
<div class="hidden md:block bg-white rounded-xl shadow overflow-x-auto">

<table class="w-full text-sm">

    <thead class="bg-gray-50 text-xs uppercase text-gray-600">
        <tr>
            <th class="p-4 text-left">Patient</th>
            <th class="p-4 text-left">Service</th>
            <th class="p-4 text-left">Doctor</th>
            <th class="p-4 text-left">Date & Time</th>
            <th class="p-4 text-left">Status</th>
        </tr>
    </thead>

    <tbody>
    @forelse($appointments as $appointment)

        <tr class="border-t hover:bg-gray-50">

            <td class="p-4">
                <div class="font-semibold">
                    {{ $appointment->first_name }} {{ $appointment->last_name }}
                </div>
                <div class="text-xs text-gray-500">#AM-{{ $appointment->id }}</div>
            </td>

            <td class="p-4">{{ $appointment->service }}</td>

            <td class="p-4">{{ $appointment->doctor_name ?? 'Not Assigned' }}</td>

            <td class="p-4">
                {{ \Carbon\Carbon::parse($appointment->date)->format('M d, Y') }}
                <div class="text-xs text-gray-500">
                    {{ $appointment->start_time }}
                </div>
            </td>

            <td class="p-4">
                <span class="px-2 py-1 text-xs rounded-full {{ $colors[$appointment->status] ?? '' }}">
                    {{ ucfirst($appointment->status) }}
                </span>
            </td>

        </tr>

    @empty
        <tr>
            <td colspan="5" class="text-center py-10 text-gray-500">
                No appointments found
            </td>
        </tr>
    @endforelse
    </tbody>

</table>

</div>

<!-- 🔷 Pagination -->
<div class="mt-6 flex flex-col md:flex-row justify-between items-center gap-4">

    <span class="text-sm text-gray-500">
        Showing {{ $appointments->firstItem() ?? 0 }} - {{ $appointments->lastItem() ?? 0 }}
        of {{ $appointments->total() }}
    </span>

    <div class="flex gap-2">

        @if ($appointments->onFirstPage())
            <span class="px-3 py-1 border rounded text-gray-300">‹</span>
        @else
            <a href="{{ $appointments->previousPageUrl() }}" class="px-3 py-1 border rounded">‹</a>
        @endif

        @if ($appointments->hasMorePages())
            <a href="{{ $appointments->nextPageUrl() }}" class="px-3 py-1 border rounded">›</a>
        @else
            <span class="px-3 py-1 border rounded text-gray-300">›</span>
        @endif

    </div>

</div>

<!-- 🔷 Auto Search -->
<script>
document.querySelector('input[name="search"]')?.addEventListener('keyup', function () {
    clearTimeout(window.searchTimer);
    window.searchTimer = setTimeout(() => {
        this.form.submit();
    }, 500);
});
</script>

@endsection