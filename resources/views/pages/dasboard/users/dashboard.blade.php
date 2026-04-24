@extends('layouts.user')
@section('title', 'User Dashboard - Anandham Mindcare')

@section('content')

<!-- Welcome Header -->
<section class="mb-16">
    <div class="flex items-end justify-between">
        <div>
            <h2 class="text-5xl font-headline font-medium text-primary mb-2">
                Welcome back, {{ $user->name }}
            </h2>
            <p class="text-on-surface-variant max-w-2xl text-lg italic">
                "The art of healing comes from nature, not from the physician."
            </p>
        </div>
        <div class="hidden lg:block">
            <span class="text-sm uppercase tracking-widest text-secondary font-bold">
                Academic Session 
            </span>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-16">

    <!-- Active -->
    <div class="bg-surface-container-lowest p-8 rounded-xl">
        <p class="text-4xl font-bold text-primary">
            {{ $activeCourses->count() }}
        </p>
        <p class="text-sm text-on-surface-variant">Courses in Progress</p>
    </div>

    <!-- Today -->
    <div class="bg-surface-container-lowest p-8 rounded-xl">
        <p class="text-4xl font-bold text-primary">
            {{ $todaySessions }}
        </p>
        <p class="text-sm text-on-surface-variant">Live Sessions Today</p>
    </div>

    <!-- Completed -->
    <div class="bg-surface-container-lowest p-8 rounded-xl">
        <p class="text-4xl font-bold text-primary">
            {{ $completedCourses }}
        </p>
        <p class="text-sm text-on-surface-variant">Courses Completed</p>
    </div>

    <!-- CME -->
    <div class="bg-surface-container-lowest p-8 rounded-xl">
        <p class="text-4xl font-bold text-primary">18.5 / 30</p>
        <p class="text-sm text-on-surface-variant">CME Credits</p>
    </div>

</section>

<!-- Active Learning -->
<section class="mb-24">

    <h3 class="text-3xl font-bold text-primary mb-10">Active Learning</h3>

    <!-- TOP GRID -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

        @php $featured = $activeCourses->first(); @endphp

        <!-- Featured -->
        <!-- Featured -->
<div class="lg:col-span-8 bg-primary text-white rounded-2xl overflow-hidden relative">

    @if($featured && $featured->course)

        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('storage/' . $featured->course->course_image) }}"
                 class="w-full h-full object-cover opacity-40">
        </div>

        <!-- Content -->
        <div class="relative p-10 flex flex-col justify-end min-h-[400px]">

            <h4 class="text-3xl font-bold mb-4">
                {{ $featured->course->title }}
            </h4>

            <!-- Date & Time -->
            <p class="text-sm text-white/80 mb-1">
                {{ \Carbon\Carbon::parse($featured->course->course_date)->format('M d, Y') }}
            </p>

            <p class="text-sm text-white/70">
                {{ \Carbon\Carbon::parse($featured->course->course_date)->format('h:i A') }}
            </p>

        </div>

    @else
        <div class="p-10">
            <p>No active courses yet</p>
        </div>
    @endif

</div>

        <!-- Upcoming -->
        <div class="lg:col-span-4 space-y-4">

            @forelse($upcomingSessions as $session)

                <div class="p-4 bg-surface-container-low rounded-lg border-l-4 border-secondary">

                    <span class="text-xs text-primary/60">
                        {{ \Carbon\Carbon::parse($session->course_date)->format('M d, h:i A') }}
                    </span>

                    <p class="font-bold text-primary mt-1">
                        {{ $session->title }}
                    </p>

                    @if($session->zoom_link)
                        <a href="{{ $session->zoom_link }}" target="_blank"
                           class="text-xs text-secondary font-bold">
                            Join Zoom
                        </a>
                    @endif

                </div>

            @empty
                <p class="text-sm text-outline">No sessions</p>
            @endforelse

        </div>

    </div>

    <!-- 🔥 COURSE CARDS (SEPARATE GRID) -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse($activeCourses as $enrollment)

        <div class="bg-surface-container-lowest rounded-xl p-6 shadow hover:shadow-lg transition">

            <span class="text-xs text-secondary uppercase">
                {{ $enrollment->course->category ?? 'General' }}
            </span>

            <h6 class="text-lg font-bold text-primary mt-2">
                {{ $enrollment->course->title }}
            </h6>

            <p class="text-sm text-on-surface-variant mt-2">
                {{ Str::limit($enrollment->course->description, 80) }}
            </p>

            <div class="mt-4 flex justify-between items-center">
                <span class="text-xs text-outline">
                    {{ $enrollment->course->credits ?? 0 }} CME
                </span>

                <a href="{{ route('courses.detail', $enrollment->course->id) }}"
                   class="text-primary text-sm font-bold">
                    View →
                </a>
            </div>

        </div>

        @empty
            <p>No active courses available</p>
        @endforelse

    </div>

</section>

@endsection