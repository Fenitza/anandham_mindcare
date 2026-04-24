@extends('layouts.user')
@section('title', 'Appointments - Anandham Mindcare')
@section('content')

<div class="p-4 lg:p-6 max-w-7xl mx-auto w-full">
<!-- Header Section -->
<section class="mb-12">
<h2 class="text-4xl md:text-4xl font-headline font-bold text-primary mb-4 leading-tight">My Courses</h2>

</section>
<!-- Courses Grid (Bento Style) -->
<div class="grid grid-cols-1 xl:grid-cols-2 gap-8">

@forelse($enrollments as $enrollment)

@php
    $course = $enrollment->course;
    $mentor = $course->mentor ?? null;
@endphp

@php
    $now = \Carbon\Carbon::now();

    $courseDateTime = null;

    if($course->course_date && $course->course_time){
        $courseDateTime = \Carbon\Carbon::parse($course->course_date . ' ' . $course->course_time);
    }

    $courseStatus = 'upcoming';

    if($courseDateTime){
        $courseEnd = $courseDateTime->copy()->addHours(2); // adjust if needed

        if($now->gt($courseEnd)){
            $courseStatus = 'completed';
        } elseif($now->between($courseDateTime, $courseEnd)){
            $courseStatus = 'ongoing';
        }
    }
@endphp


<div class="bg-surface-container-lowest rounded-xl p-8 border border-outline-variant/15 hover:shadow-2xl transition-all duration-500 group relative overflow-hidden flex flex-col">

    <!-- STATUS BADGE -->
    <div class="flex justify-between items-start mb-6">
    <div>

        {{-- ENROLLMENT STATUS --}}
        @if($enrollment->status === 'pending')
            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-[10px] font-bold uppercase rounded-full">
                ⏳ Pending Approval
            </span>

        @elseif($enrollment->status === 'rejected')
            <span class="px-3 py-1 bg-red-100 text-red-700 text-[10px] font-bold uppercase rounded-full">
                ❌ Rejected
            </span>

        @elseif($enrollment->status === 'completed')
            <span class="px-3 py-1 bg-gray-300 text-gray-700 text-[10px] font-bold uppercase rounded-full">
                ✅ Completed
            </span>

        @elseif($enrollment->status === 'approved')

            {{-- COURSE STATUS INSIDE APPROVED --}}
            @if($courseStatus === 'ongoing')
                <span class="px-3 py-1 bg-green-600 text-white text-[10px] font-bold uppercase rounded-full animate-pulse">
                    🔴 Live Now
                </span>

            @elseif($courseStatus === 'completed')
                <span class="px-3 py-1 bg-gray-300 text-gray-700 text-[10px] font-bold uppercase rounded-full">
                    Course Completed
                </span>

            @else
                <span class="px-3 py-1 bg-blue-100 text-blue-700 text-[10px] font-bold uppercase rounded-full">
                    Approved • Upcoming
                </span>
            @endif

        @endif

        <h3 class="text-2xl md:text-3xl font-headline text-primary mt-3">
            {{ $course->title }}
        </h3>
    </div>
</div>

    <!-- MENTOR -->
    <div class="flex items-center space-x-3 mb-6">
        <div class="w-10 h-10 rounded-full overflow-hidden border">
            <img 
                src="{{ $mentor && $mentor->image ? asset('storage/'.$mentor->image) : 'https://via.placeholder.com/100' }}" 
                class="w-full h-full object-cover"
            >
        </div>

        <div>
            <p class="text-xs text-on-surface-variant uppercase">Mentor</p>
            <p class="font-medium">
                {{ $mentor->name ?? 'Expert Mentor' }}
            </p>
        </div>
    </div>

    <!-- CONTENT BASED ON STATUS -->
    <div class="bg-surface-container-low rounded-lg p-5 mb-6 flex-1">

@if($enrollment->status === 'approved')

    <div class="flex items-center gap-2 mb-3">
        <span class="material-symbols-outlined text-secondary text-sm">calendar_today</span>
        <h4 class="text-sm font-bold uppercase">Session Info</h4>
    </div>

    <p class="text-sm text-on-surface-variant mb-2">
        {{ \Carbon\Carbon::parse($course->course_date)->format('d M Y') }}
        • {{ $course->course_time }}
    </p>

    @if($courseStatus === 'ongoing')
        <p class="text-green-600 text-xs font-bold">Live session is happening now</p>

    @elseif($courseStatus === 'completed')
        <p class="text-gray-500 text-xs font-bold">This session has ended</p>

    @else
        <p class="text-blue-600 text-xs font-bold">Starts soon</p>
    @endif

@elseif($enrollment->status === 'pending')

    <div class="flex items-center gap-2 mb-3">
        <span class="material-symbols-outlined text-secondary text-sm">schedule</span>
        <h4 class="text-sm font-bold uppercase">Awaiting Approval</h4>
    </div>

    <p class="text-sm text-on-surface-variant">
        Your enrollment is under review.
    </p>

@elseif($enrollment->status === 'rejected')

    <div class="flex items-center gap-2 mb-3">
        <span class="material-symbols-outlined text-red-500 text-sm">cancel</span>
        <h4 class="text-sm font-bold uppercase text-red-600">Enrollment Rejected</h4>
    </div>

    <p class="text-sm text-on-surface-variant">
        Your payment could not be verified. Please contact support.
    </p>

@elseif($enrollment->status === 'completed')

    <div class="flex items-center gap-2 mb-3">
        <span class="material-symbols-outlined text-gray-500 text-sm">verified</span>
        <h4 class="text-sm font-bold uppercase">Course Completed</h4>
    </div>

    <p class="text-sm text-on-surface-variant">
        You have successfully completed this course.
    </p>

@endif

</div>

    <!-- FOOTER -->
    <div class="flex justify-between items-center mt-auto">

@if($enrollment->status === 'approved')

    @if($courseStatus === 'ongoing')

        @if(!empty($course->zoom_link))
            <a href="{{ $course->zoom_link }}" target="_blank"
               class="bg-green-600 text-white px-5 py-2 rounded-lg text-sm flex items-center gap-2 animate-pulse shadow-lg">
                <span class="material-symbols-outlined text-base">video_call</span>
                Join Live Now
            </a>
        @else
            <span class="text-xs text-gray-500">
                Zoom link will be shared soon
            </span>
        @endif

    @elseif($courseStatus === 'upcoming')

        @if(!empty($course->zoom_link))
            <a href="{{ $course->zoom_link }}" target="_blank"
               class="bg-primary text-white px-5 py-2 rounded-lg text-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-base">video_call</span>
                Join Session
            </a>
        @else
            <span class="text-xs text-blue-600 font-semibold">
                Zoom link not available yet
            </span>
        @endif

    @else
        <span class="text-xs text-gray-500">
            Session Completed
        </span>
    @endif

@elseif($enrollment->status === 'pending')
    <span class="text-xs text-yellow-600">Waiting for approval</span>

@elseif($enrollment->status === 'rejected')
    <span class="text-xs text-red-600">Access denied</span>

@elseif($enrollment->status === 'completed')
    <span class="text-xs text-gray-600">Completed</span>

@endif

</div>

</div>


@empty

<div class="col-span-2 text-center py-20">
    <h3 class="text-xl font-bold text-primary">No Enrollments Yet</h3>
    <p class="text-sm text-on-surface-variant mt-2">
        Start your learning journey by enrolling in a course.
    </p>

    <a href="{{ route('courses.list') }}"
       class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-lg font-bold text-sm hover:scale-105 transition-all shadow-md hover:shadow-lg">
        
        <span class="material-symbols-outlined text-base">school</span>
        Browse Courses
    </a>
</div>

@endforelse

</div>

@if($enrollments->count() > 0)
    <div class="text-center mt-16">

        <a href="{{ route('courses.list') }}"
           class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-lg font-bold text-sm hover:scale-105 transition-all shadow-md hover:shadow-lg">
            
            <span class="material-symbols-outlined text-base">school</span>
            Browse More Courses
        </a>

    </div>
@endif


@endsection