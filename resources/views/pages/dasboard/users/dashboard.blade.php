@extends('layouts.user')
@section('title', 'User Dashboard - Anandham Mindcare')

@section('content')

<!-- 🔷 Welcome Header -->
<section class="mb-10 md:mb-14">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">

        <div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-headline font-medium text-primary mb-2 leading-tight">
                Welcome back, {{ $user->name }}
            </h2>

            <p class="text-sm sm:text-base text-on-surface-variant max-w-xl italic">
                "The art of healing comes from nature, not from the physician."
            </p>
        </div>

        <div class="hidden md:block">
            <span class="text-xs sm:text-sm uppercase tracking-widest text-secondary font-bold">
                Academic Session
            </span>
        </div>

    </div>
</section>

<!-- 🔷 Stats -->
<section class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-12 md:mb-16">

    <div class="bg-surface-container-lowest p-4 md:p-6 rounded-xl">
        <p class="text-2xl md:text-3xl font-bold text-primary">
            {{ $activeCourses->count() }}
        </p>
        <p class="text-xs md:text-sm text-on-surface-variant">Courses in Progress</p>
    </div>

    <div class="bg-surface-container-lowest p-4 md:p-6 rounded-xl">
        <p class="text-2xl md:text-3xl font-bold text-primary">
            {{ $todaySessions }}
        </p>
        <p class="text-xs md:text-sm text-on-surface-variant">Live Sessions Today</p>
    </div>

    <div class="bg-surface-container-lowest p-4 md:p-6 rounded-xl">
        <p class="text-2xl md:text-3xl font-bold text-primary">
            {{ $completedCourses }}
        </p>
        <p class="text-xs md:text-sm text-on-surface-variant">Courses Completed</p>
    </div>

    <div class="bg-surface-container-lowest p-4 md:p-6 rounded-xl">
        <p class="text-2xl md:text-3xl font-bold text-primary">18.5 / 30</p>
        <p class="text-xs md:text-sm text-on-surface-variant">CME Credits</p>
    </div>

</section>

<!-- 🔷 Active Learning -->
<section class="mb-16 md:mb-24">

    <h3 class="text-xl sm:text-2xl md:text-3xl font-bold text-primary mb-6 md:mb-10">
        Active Learning
    </h3>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8">

        @php $featured = $activeCourses->first(); @endphp

        <!-- ⭐ Featured -->
        <div class="lg:col-span-8 bg-primary text-white rounded-2xl overflow-hidden relative">

            @if($featured && $featured->course)

                <div class="absolute inset-0">
                    <img src="{{ asset('storage/' . $featured->course->course_image) }}"
                         class="w-full h-full object-cover opacity-40">
                </div>

                <div class="relative p-6 md:p-8 lg:p-10 flex flex-col justify-end min-h-[220px] md:min-h-[300px] lg:min-h-[400px]">

                    <h4 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold mb-3">
                        {{ $featured->course->title }}
                    </h4>

                    <p class="text-xs sm:text-sm text-white/80">
                        {{ \Carbon\Carbon::parse($featured->course->course_date)->format('M d, Y') }}
                    </p>

                    <p class="text-xs sm:text-sm text-white/70">
                        {{ \Carbon\Carbon::parse($featured->course->course_date)->format('h:i A') }}
                    </p>

                </div>

            @else
                <div class="p-6 md:p-10">
                    <p>No active courses yet</p>
                </div>
            @endif

        </div>

        <!-- 📅 Upcoming -->
        <div class="lg:col-span-4 space-y-3 md:space-y-4">

            @forelse($upcomingSessions as $session)

                <div class="p-3 md:p-4 bg-surface-container-low rounded-lg border-l-4 border-secondary">

                    <span class="text-xs text-primary/60">
                        {{ \Carbon\Carbon::parse($session->course_date)->format('M d, h:i A') }}
                    </span>

                    <p class="font-bold text-primary mt-1 text-sm md:text-base">
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

    <!-- 🔷 Course Cards -->
    <div class="mt-10 md:mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8">

        @forelse($activeCourses as $enrollment)

        <div class="bg-surface-container-lowest rounded-xl p-4 md:p-6 shadow hover:shadow-lg transition">

            <span class="text-xs text-secondary uppercase">
                {{ $enrollment->course->category ?? 'General' }}
            </span>

            <h6 class="text-base md:text-lg font-bold text-primary mt-2">
                {{ $enrollment->course->title }}
            </h6>

            <p class="text-xs md:text-sm text-on-surface-variant mt-2">
                {{ Str::limit($enrollment->course->description, 80) }}
            </p>

            <div class="mt-4 flex justify-between items-center">
                <span class="text-xs text-outline">
                    {{ $enrollment->course->credits ?? 0 }} CME
                </span>

                <a href="{{ route('courses.detail', $enrollment->course->id) }}"
                   class="text-primary text-xs md:text-sm font-bold">
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