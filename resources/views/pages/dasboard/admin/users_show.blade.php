@extends('layouts.admin')
@section('title', 'User Profile')

@section('content')

<div class="pt-28 px-8 pb-12">

    <!-- HEADER -->
    <div class="flex items-center gap-6 mb-10">

        <!-- AVATAR -->
        <div class="w-20 h-20 rounded-full bg-primary/10 flex items-center justify-center text-3xl font-bold text-primary">
            {{ strtoupper(substr($user->name, 0, 1)) }}
        </div>

        <div>
            <h2 class="text-3xl font-bold text-primary">{{ $user->name }}</h2>
            <p class="text-slate-500">{{ $user->email }}</p>
            <p class="text-xs text-slate-400">ID: AM-{{ $user->id }}</p>
        </div>

    </div>

    <!-- PROFILE GRID -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- BASIC INFO -->
        <div class="bg-white p-6 rounded-xl border">
            <h3 class="font-bold text-primary mb-4">Basic Info</h3>

            <p class="text-sm"><b>Phone:</b> {{ $user->phone ?? '-' }}</p>
            <p class="text-sm mt-2"><b>Role:</b> {{ ucfirst($user->role) }}</p>
            <p class="text-sm mt-2"><b>Status:</b> 
                <span class="{{ $user->status ? 'text-green-600' : 'text-red-600' }}">
                    {{ $user->status ? 'Active' : 'Inactive' }}
                </span>
            </p>
        </div>

        <!-- PROFESSIONAL -->
        <div class="bg-white p-6 rounded-xl border">
            <h3 class="font-bold text-primary mb-4">Professional</h3>

            <p class="text-sm"><b>Specialization:</b> {{ $user->specialization ?? '-' }}</p>
            <p class="text-sm mt-2"><b>License:</b> {{ $user->license_number ?? '-' }}</p>
        </div>

        <!-- ADDRESS -->
        <div class="bg-white p-6 rounded-xl border">
            <h3 class="font-bold text-primary mb-4">Address</h3>

            <p class="text-sm">{{ $user->address ?? '-' }}</p>
            <p class="text-sm mt-2">
                {{ $user->city }}, {{ $user->state }} - {{ $user->zip }}
            </p>
        </div>

    </div>

    <!-- ACTIVITY -->
    <div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- COURSES -->
        <div class="bg-white p-6 rounded-xl border">
            <h3 class="font-bold text-primary mb-4">Enrolled Courses</h3>

            @forelse($user->courses as $course)
                <div class="border-b py-2 text-sm">
                    {{ $course->title }}
                </div>
            @empty
                <p class="text-slate-400 text-sm">No courses enrolled</p>
            @endforelse
        </div>

        <!-- APPOINTMENTS -->
        <div class="bg-white p-6 rounded-xl border">
            <h3 class="font-bold text-primary mb-4">Appointments</h3>

            @forelse($user->appointments as $appt)
                <div class="border-b py-2 text-sm">
                    {{ \Carbon\Carbon::parse($appt->date)->setTimezone('Asia/Kolkata')->format('d M Y, h:i A') }}
                </div>
            @empty
                <p class="text-slate-400 text-sm">No appointments</p>
            @endforelse
        </div>

    </div>

    <!-- BACK -->
    <div class="mt-10">
        <a href="{{ route('admin.users') }}"
           class="px-6 py-2 bg-surface-container-low rounded-lg text-sm">
            ← Back to Users
        </a>
    </div>

</div>

@endsection