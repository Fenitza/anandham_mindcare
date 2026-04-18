@extends('layouts.admin')
@section('title', 'Appointments - Anandham Mindcare')
@section('content')

   <div class="pt-20 px-6 pb-8 space-y-12">
    @include('partials.alerts')
<!-- <div class="flex flex-col md:flex-row md:items-end justify-between mb-2 gap-4">
<div class="max-w-2xl">
<h2 class="text-4xl font-['Newsreader'] font-bold text-primary mb-4 leading-tight"> Appointments</h2>

</div>
<div> -->
<!-- <a href="{{ route('user.appointment.add') }}">
<button class="flex items-center space-x-3 bg-primary text-white px-8 py-4 rounded-xl font-['Work_Sans'] font-semibold shadow-xl hover:bg-primary-container transition-all group">
<span class="material-symbols-outlined group-hover:rotate-90 transition-transform" data-icon="add">add</span>
<span>Add New Appointment</span>
</button>
</a> -->
<!-- </div>
</div> -->
    
<!-- Filters Section -->
<form method="GET" action="{{ route('admin.appointments.list') }}">
<div class="bg-surface-container-low rounded-xl p-6 mb-8 flex flex-wrap items-end gap-6 shadow-sm">

    <!-- Search -->
    <div class="flex-1 min-w-[240px]">
        <label class="block text-xs font-bold text-primary uppercase mb-2">Search</label>
        <input 
            type="text" 
            name="search"
            value="{{ request('search') }}"
            placeholder="Patient name or ID..."
            class="w-full bg-white rounded-lg py-2.5 px-4 text-sm"
        />
    </div>

    <!-- Service -->
    <div class="w-48">
    <label class="block text-xs font-bold text-primary uppercase mb-2">Service</label>

    <select name="service" class="w-full bg-white rounded-lg py-2.5 px-4 text-sm">
        
        <option value="">All Services</option>

        @foreach($services as $service)
            <option value="{{ $service }}" 
                {{ request('service') == $service ? 'selected' : '' }}>
                {{ $service }}
            </option>
        @endforeach

    </select>
</div>

    <!-- Date -->
    <div class="w-48">
    <label class="block text-xs font-bold text-primary uppercase mb-2">Date</label>

    <select name="date_range" class="w-full bg-white rounded-lg py-2.5 px-4 text-sm">
        <option value="">All</option>

        <option value="today" {{ request('date_range') == 'today' ? 'selected' : '' }}>
            Today
        </option>

        <option value="7" {{ request('date_range') == '7' ? 'selected' : '' }}>
            Next 7 Days
        </option>

        <option value="30" {{ request('date_range') == '30' ? 'selected' : '' }}>
            Next 30 Days
        </option>
    </select>
</div>

    <button class="bg-secondary text-white px-6 py-2.5 rounded-lg">
        Apply
    </button>

</div>
</form>
<!-- Appointments Table Container -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden ghost-border shadow-sm">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low/50">
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body">Patient Name</th>
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body">Specialized Service</th>
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body">Consulting Physician</th>
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body">Date &amp; Time</th>
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body">Status</th>
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container">
@forelse($appointments as $appointment)
<tr class="group hover:bg-surface-container-low transition-colors duration-200">

    <!-- Patient -->
    <td class="px-6 py-6">
    <div class="flex items-center gap-3">
        
        <!-- Avatar -->
        <div class="relative">
            <div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary font-bold text-sm">
                {{ strtoupper(substr($appointment->first_name,0,1) . substr($appointment->last_name,0,1)) }}
            </div>

            <!-- ⭐ Priority Badge -->
            @if($appointment->urgency === 'priority')
                <span class="absolute -top-1 -right-1 bg-yellow-400 text-white text-[10px] w-4 h-4 flex items-center justify-center rounded-full shadow">
                    ★
                </span>
            @endif
        </div>

        <!-- Name -->
        <div>
            <div class="font-semibold text-on-surface flex items-center gap-2">
                {{ $appointment->first_name }} {{ $appointment->last_name }}

                @if($appointment->urgency === 'priority')
                    <span class="text-yellow-500 text-sm">★</span>
                @endif
            </div>

            <div class="text-xs text-on-surface-variant">
                ID: #AM-{{ $appointment->id }}
            </div>
        </div>

    </div>
</td>

    <!-- Service -->
    <td class="px-6 py-6 text-sm">
        {{ $appointment->service }}
    </td>

    <!-- Doctor -->
    <td class="px-6 py-6">
        <span class="text-sm font-medium">
            {{ $appointment->doctor_name ?? 'Not Assigned' }}
        </span>
    </td>

    <!-- Date & Time -->
    <td class="px-6 py-6">
        <div class="text-sm font-semibold">
            {{ \Carbon\Carbon::parse($appointment->date)->format('M d, Y') }}
        </div>
        <div class="text-xs text-on-surface-variant">
            {{ $appointment->start_time }} — {{ $appointment->end_time }}
        </div>
    </td>

    <!-- Status -->
    <td class="px-6 py-6">
        @php
            $status = $appointment->status;

            $colors = [
                'pending' => 'bg-amber-100 text-amber-800',
                'scheduled' => 'bg-emerald-100 text-emerald-800',
                'completed' => 'bg-slate-100 text-slate-600',
                'cancelled' => 'bg-red-100 text-red-800',
            ];
        @endphp

        <span class="inline-flex px-2.5 py-0.5 rounded-full text-xs font-semibold {{ $colors[$status] ?? 'bg-gray-100' }}">
            {{ ucfirst($status) }}
        </span>
    </td>

    <!-- Actions --> 
    <td class="px-6 py-6 text-right">
        <div class="flex justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity">

            <!-- Edit -->
            <a href="{{ route('appointment.edit', $appointment->id) }}">
                <button class="p-2 text-slate-400 hover:text-primary">
                    <span class="material-symbols-outlined">edit</span>
                </button>
            </a>

            <!-- Cancel -->
            <form action="{{ route('appointment.update', $appointment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="cancelled">
                <button class="p-2 text-slate-400 hover:text-error">
                    <span class="material-symbols-outlined">cancel</span>
                </button>
            </form>

        </div>
    </td>

</tr>
@empty
<tr>
    <td colspan="6" class="text-center py-10 text-gray-500">
        No appointments found
    </td>
</tr>
@endforelse
</tbody>
</table>
 <!-- Table Footer / Pagination -->
<div class="px-6 py-4 bg-surface-container-low/30 border-t border-surface-container flex items-center justify-between">

    <!-- Showing text -->
    <span class="text-sm text-on-surface-variant">
        Showing 
        <span class="font-bold text-primary">
            {{ $appointments->firstItem() ?? 0 }} - {{ $appointments->lastItem() ?? 0 }}
        </span> 
        of {{ $appointments->total() }} appointments
    </span>

    <!-- Custom Pagination -->
    <div class="flex gap-2 items-center">

        {{-- Previous --}}
        @if ($appointments->onFirstPage())
            <span class="w-8 h-8 flex items-center justify-center text-gray-300 border rounded-lg">
                ‹
            </span>
        @else
            <a href="{{ $appointments->previousPageUrl() }}"
               class="w-8 h-8 flex items-center justify-center border rounded-lg hover:bg-white transition">
                ‹
            </a>
        @endif

        {{-- Page Numbers (LIMITED for UX) --}}
        @foreach ($appointments->getUrlRange(
            max(1, $appointments->currentPage() - 2),
            min($appointments->lastPage(), $appointments->currentPage() + 2)
        ) as $page => $url)

            <a href="{{ $url }}"
               class="w-8 h-8 flex items-center justify-center text-sm rounded-lg border transition
               {{ $appointments->currentPage() == $page 
                    ? 'bg-primary text-white border-primary' 
                    : 'text-slate-600 hover:bg-white' }}">
                {{ $page }}
            </a>

        @endforeach

        {{-- Next --}}
        @if ($appointments->hasMorePages())
            <a href="{{ $appointments->nextPageUrl() }}"
               class="w-8 h-8 flex items-center justify-center border rounded-lg hover:bg-white transition">
                ›
            </a>
        @else
            <span class="w-8 h-8 flex items-center justify-center text-gray-300 border rounded-lg">
                ›
            </span>
        @endif

    </div>
</div>
<script>
document.querySelector('input[name="search"]').addEventListener('keyup', function () {
    clearTimeout(window.searchTimer);

    window.searchTimer = setTimeout(() => {
        this.form.submit();
    }, 500); // delay typing
});
</script>
@endsection