@extends('layouts.admin')
@section('title', 'Attendance Insights - Anandham Mindcare')
@section('content')

<div class="pt-28 px-8 pb-12 space-y-12">
    <section class="grid grid-cols-1 md:grid-cols-12 gap-6">
<!-- Main Stats Card -->
<div class="md:col-span-8 bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 flex flex-col justify-between">
<div class="flex justify-between items-start mb-8">
<div>
<p class="text-sm font-medium text-secondary tracking-wider uppercase">Institutional Performance</p>
<h3 class="text-4xl font-headline mt-2 text-primary">Attendance Insights</h3>
</div>
<div class="flex gap-2">
<span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed text-xs font-bold rounded-full">Weekly +4.2%</span>
</div>
</div>
<div class="grid grid-cols-3 gap-8">
<div class="space-y-2">
<p class="text-sm text-on-surface-variant">Enrollment Rate</p>
<p class="text-5xl font-headline text-primary">
    {{ $enrollmentRate }}<span class="text-2xl">%</span>
</p>
<div class="h-1 w-full bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-primary w-[92%]" style="width: {{ $enrollmentRate }}%"></div>
</div>
</div>
<div class="space-y-2">
<p class="text-sm text-on-surface-variant">Active Courses</p>
<p class="text-5xl font-headline text-primary">
    {{ $activeCourses }}
</p>
<p class="text-xs text-secondary-fixed-dim font-semibold italic">Clinical &amp; Theory</p>
</div>
<div class="space-y-2">
<p class="text-sm text-on-surface-variant">Capacity Util.</p>
<p class="text-5xl font-headline text-primary">
    {{ $capacityUtil }}<span class="text-2xl">%</span>
</p>
<div class="h-1 w-full bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-secondary w-[78%]" style="width: {{ $capacityUtil }}%"></div>
</div>
</div>
</div>
</div>
<!-- Mini Chart Card -->
<div class="md:col-span-4 bg-primary text-white p-8 rounded-xl relative overflow-hidden group">
<div class="relative z-10 flex flex-col h-full justify-between">
<h4 class="text-xl font-headline italic opacity-90">"Restorative Care requires consistent presence."</h4>
<div class="mt-8">
<p class="text-xs font-medium uppercase tracking-widest opacity-60 mb-4">Daily Attendance Volatility</p>
<div class="flex items-end gap-1 h-24">
<div class="w-full bg-on-primary-container/30 h-[40%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container/40 h-[65%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container/60 h-[50%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container h-[90%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container/50 h-[70%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container/80 h-[85%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container h-[95%] rounded-t-sm"></div>
</div>
</div>
</div>
<div class="absolute -right-12 -top-12 w-48 h-48 bg-primary-container rounded-full mix-blend-multiply filter blur-3xl opacity-50 transition-all group-hover:scale-110"></div>
</div>
</section>
<!-- Calendar & Active Sessions -->
<section class="grid grid-cols-1 lg:grid-cols-12 gap-8">


<!-- Left: Upcoming Sessions List -->
<div class="lg:col-span-7 space-y-6 min-w-0">
  <!-- HEADER -->
        <div class="flex items-center justify-between">
            <h3 class="text-2xl text-primary font-headline">
                Upcoming Clinical Sessions
            </h3>

            <div class="flex items-center gap-2">

                <a href="?date={{ $date->copy()->subMonth()->toDateString() }}"
                  class="p-1 hover:bg-surface-container rounded-md">
                    <span class="material-symbols-outlined">chevron_left</span>
                </a>

                <span class="text-sm font-medium">
                    {{ $date->format('F Y') }}
                </span>

                <a href="?date={{ $date->copy()->addMonth()->toDateString() }}"
                  class="p-1 hover:bg-surface-container rounded-md">
                    <span class="material-symbols-outlined">chevron_right</span>
                </a>

            </div>
        </div>

@forelse($upcomingCourses as $course)

<div class="group bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/10 flex items-center hover:border-secondary transition-all">

    <!-- LEFT -->
    <div class="flex items-center gap-4 flex-1">
        <div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
            <span class="material-symbols-outlined">school</span>
        </div>

        <div>
            <h4 class="font-semibold text-on-surface">
                {{ $course->title }}
            </h4>

            <p class="text-xs text-on-surface-variant">
                {{ $course->description ?? 'Course Module' }}
            </p>
        </div>
    </div>

    <!-- RIGHT -->
    <div class="flex items-center gap-6">

        <div class="text-right">
            <p class="text-xs text-on-surface-variant uppercase font-semibold">Enrolled</p>

            <p class="text-lg font-headline text-primary">
                {{ $course->enrollments_count }}
                <span class="text-xs text-outline">
                    / {{ $course->capacity ?? '—' }}
                </span>
            </p>
        </div>

        <a href="{{ route('courses.detail', $course->id) }}"
           class="whitespace-nowrap px-5 py-2.5 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary-container transition-all">
           View Course
        </a>

    </div>

</div>

@empty

<!-- EMPTY STATE -->
<div class="bg-surface-container-lowest border border-dashed border-outline-variant/30 rounded-xl p-10 text-center">

    <div class="flex flex-col items-center gap-4">

        <span class="material-symbols-outlined text-5xl text-outline-variant">
            event_busy
        </span>

        <h4 class="text-lg font-semibold text-on-surface">
            No Sessions This Month
        </h4>

        <p class="text-sm text-on-surface-variant max-w-sm">
            There are no courses scheduled for {{ $date->format('F Y') }}.
            Try switching to another month or create a new course.
        </p>

        <a href="{{ route('admin.courses.add') }}"
           class="mt-2 px-5 py-2.5 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary-container transition-all">
           + Add Course
        </a>

    </div>

</div>

@endforelse



<!-- COMPLETED SECTION -->
<div class="pt-6 border-t border-outline-variant/20 space-y-6">

    <!-- HEADER -->
    <div class="flex items-center justify-between">
        <h3 class="text-xl text-primary font-headline">
            Completed Sessions
        </h3>

       

            <div class="flex items-center gap-2">

                <a href="?date={{ $date->copy()->subMonth()->toDateString() }}"
                  class="p-1 hover:bg-surface-container rounded-md">
                    <span class="material-symbols-outlined">chevron_left</span>
                </a>

                <span class="text-sm font-medium">
                    {{ $date->format('F Y') }}
                </span>

                <a href="?date={{ $date->copy()->addMonth()->toDateString() }}"
                  class="p-1 hover:bg-surface-container rounded-md">
                    <span class="material-symbols-outlined">chevron_right</span>
                </a>

            </div>
        
    </div>

    <div class="space-y-4 max-h-[400px] overflow-y-auto pr-2">

        @forelse($completedCourses as $course)

        <div class="group bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/10 flex items-center opacity-70 hover:opacity-100 transition-all">

            <!-- LEFT -->
            <div class="flex items-center gap-4 flex-1 min-w-0">
                <div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary shrink-0">
                    <span class="material-symbols-outlined">task_alt</span>
                </div>

                <div class="min-w-0">
                    <h4 class="font-semibold text-on-surface truncate">
                        {{ $course->title }}
                    </h4>

                    <p class="text-xs text-on-surface-variant truncate">
                        Completed on {{ \Carbon\Carbon::parse($course->course_date)->format('M d, Y') }}
                    </p>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="flex items-center gap-6 shrink-0">

                <div class="text-right">
                    <p class="text-xs text-on-surface-variant uppercase font-semibold">Enrolled</p>

                    <p class="text-lg font-headline text-primary">
                        {{ $course->enrollments_count }}
                        <span class="text-xs text-outline">
                            / {{ $course->capacity ?? '—' }}
                        </span>
                    </p>
                </div>

                <a href="{{ route('courses.detail', $course->id) }}"
                   class="whitespace-nowrap px-5 py-2.5 bg-secondary text-white text-sm font-medium rounded-lg hover:opacity-90 transition-all">
                   View Summary
                </a>

            </div>

        </div>

        @empty

        <div class="text-sm text-on-surface-variant text-center py-6">
            No completed sessions this month.
        </div>

        @endforelse

</div>
</div>
</div>






<!-- Right: Calendar View -->
<div class="lg:col-span-5 bg-surface-container-low p-6 rounded-xl space-y-6">
<div class="flex items-center justify-between px-2">
    <h4 class="font-headline text-xl text-primary">Academic Calendar</h4>

    <div class="flex items-center gap-2">
        <a href="?month={{ $date->copy()->subMonth()->month }}&year={{ $date->copy()->subMonth()->year }}">
            <span class="material-symbols-outlined">chevron_left</span>
        </a>

        <span class="text-sm font-bold text-secondary">
            {{ $date->format('F Y') }} 
        </span>

        <a href="?month={{ $date->copy()->addMonth()->month }}&year={{ $date->copy()->addMonth()->year }}">
            <span class="material-symbols-outlined">chevron_right</span>
        </a>
    </div>
</div>
<div class="grid grid-cols-7 gap-1 text-sm font-medium">
@foreach($days as $day)

@php
    $isCurrentMonth = $day->month == $month;
    $isToday = $day->copy()->timezone('Asia/Kolkata')->isSameDay(now('Asia/Kolkata'));
    $hasCourse = isset($calendarCourses[$day->toDateString()]);
@endphp

@php
    $dateKey = $day->toDateString();
    $coursesForDay = $calendarCourses[$dateKey] ?? collect();
@endphp

<div class="relative group">

    <!-- Day Cell -->
    <div class="h-10 flex items-center justify-center rounded-md transition-all
        {{ !$isCurrentMonth ? 'text-outline-variant' : '' }}
        {{ $isToday ? 'bg-white ring-1 ring-primary text-primary' : '' }}
        {{ $coursesForDay->count() ? 'bg-secondary/30' : '' }}
    ">
        {{ $day->day }}
    </div>

    <!-- Hover Popup -->
    @if($coursesForDay->count())
    <div class="absolute z-50 hidden group-hover:block transition opacity-0 group-hover:opacity-100
                bottom-full mb-2 left-1/2 -translate-x-1/2
                w-56 bg-white border border-outline-variant/20
                rounded-lg shadow-lg p-3 text-xs">

        <p class="font-semibold text-primary mb-2">
            {{ $coursesForDay->count() }} Courses
        </p>

        <div class="space-y-1 max-h-32 overflow-y-auto">
            @foreach($coursesForDay as $course)
                <div class="flex justify-between gap-2">
                    <span class="truncate">{{ $course->title }}</span>
                    <span class="text-secondary text-[10px]">
                        {{ $course->enrollments_count }}
                    </span>
                </div>
            @endforeach
        </div>

    </div>
    @endif

</div>

@endforeach
</div>


<div class="mt-8 border-t border-outline-variant/20 pt-6">
<h5 class="text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-4">
    Course Enrollment Rate
</h5>

<div class="space-y-4">

@foreach($upcomingCourses as $course)
@php
    $rate = $course->capacity > 0 
        ? round(($course->enrollments_count / $course->capacity) * 100)
        : 0;
@endphp

<div class="flex items-center gap-4">
    <span class="text-xs font-medium w-32 truncate">
        {{ $course->title }}
    </span>

    <div class="flex-1 h-1.5 bg-surface-container rounded-full overflow-hidden">
        <div class="h-full bg-secondary" style="width: {{ $rate }}%"></div>
    </div>

    <span class="text-xs font-bold text-primary">
        {{ $rate }}%
    </span>
</div>

@endforeach

</div>
</div>
</div>
</div>
</div>
</section>
<!-- Asymmetric Quote Section -->
<section class="max-w-4xl mx-auto py-12">
<div class="relative bg-surface-container-lowest p-12 border-l-4 border-secondary shadow-sm">
<span class="material-symbols-outlined absolute top-4 left-4 text-secondary-fixed opacity-30 text-5xl">format_quote</span>
<p class="text-2xl font-headline text-primary italic leading-relaxed">
            "At Anandham, every session is a stepping stone toward a more conscious society. Monitoring attendance isn't just about metrics; it's about honoring the commitment each student makes to the healing arts."
          </p>
<div class="mt-6 flex items-center gap-3">
<div class="w-10 h-[1px] bg-secondary"></div>
<p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Clinical Directorate Message</p>
</div>
</div>
</section>

</div>
@endsection
