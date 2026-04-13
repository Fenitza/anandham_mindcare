@extends('layouts.hosp')

@section('content')

<header class="relative min-h-[716px] flex items-center overflow-hidden bg-surface py-20 px-8">
<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-7 z-10 reveal">
<div class="inline-flex items-center gap-2 mb-6 text-secondary font-medium tracking-wide uppercase text-xs">
<span class="w-8 h-[1px] bg-secondary"></span>
Excellence in Mental Health Education
</div>

<h1 class="serif-text text-3xl sm:text-4xl md:text-6xl lg:text-7xl xl:text-8xl text-primary leading-tight mb-8 reveal">
Empowering the Next Generation.
</h1>

<p class="text-xl md:text-2xl text-on-surface-variant font-light max-w-xl mb-10 leading-relaxed reveal">
Empowering the Next Generation of Mental Health Professionals through evidence-based clinical training and innovative research.
</p>

<div class="flex flex-wrap gap-4 reveal">
<button class="bg-primary text-white px-8 py-4 rounded-lg font-medium hover:bg-primary-container transition-colors shadow-lg shadow-primary/10">
Explore More
</button>
</div>
</div>

<div class="lg:col-span-5 relative z-10 reveal">
<div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl relative z-0">
<img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1dGG54lj6HBhBA7yT6pvSVoVDKkZnPKDTZKX3qZUYydcTc9kJj-fCbwXep-OkW49UIUfLXl4ojas2AhRXm5NRbdQp2YgB0wi7R-TvT1drbk_I0_wYdIIhliEGdOQeYXYO11hOpq6IqWPIsnRovBv93DZoqAgEDoYEyL2mb1EbJhsF9Br9_6871LjUNGTcDO24Q5sVp72wlVjvaPNjlzQp7NXA4HDiEtQN7rLgaTjjSQIknjxLWM90S7lZbqz90TeqEIUVxsKR65wh"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
</div>

<div class="absolute -bottom-8 -left-8 bg-white/90 backdrop-blur-md p-8 rounded-xl shadow-xl max-w-xs z-20 border-l-4 border-tertiary-fixed-dim reveal">
<p class="serif-text text-xl italic text-primary">“Healing begins when you allow yourself to be heard.”</p>
<p class="mt-4 text-sm font-bold text-on-surface-variant uppercase tracking-widest">— Director</p>
</div>
</div>
</div>
<div class="absolute right-0 top-0 w-1/3 h-full bg-surface-container-low -z-10 opacity-50"></div>
</header>


<!-- Upcoming -->
<section class="py-24 px-8 bg-surface-container-low">
<div class="max-w-7xl mx-auto">

<div class="text-center max-w-2xl mx-auto mb-20 reveal">
<h2 class="serif-text text-4xl text-primary mb-4">Upcoming Webinars & Workshops</h2>
<p class="text-on-surface-variant">Stay updated with the latest clinical trends.</p>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

@forelse($upcoming ?? [] as $item)
<div class="bg-surface-container-lowest p-8 rounded-xl flex gap-8 items-start hover:bg-white transition-colors border-l-4 border-secondary shadow-sm reveal">

<div class="hidden sm:flex flex-col items-center bg-surface-container p-4 rounded-lg min-w-[100px]">
<span class="text-secondary font-bold text-2xl">
{{ \Carbon\Carbon::parse($item->course_date)->format('d') }}
</span>
<span class="text-on-surface-variant text-xs uppercase font-semibold">
{{ \Carbon\Carbon::parse($item->course_date)->format('M Y') }}
</span>
</div>

<div>

<!-- ✅ Course Type Added Here -->
<div class="flex items-center gap-2 mb-2">
<span class="material-symbols-outlined text-secondary text-lg">
{{ $item->course_type == 'webinar' ? 'videocam' : 'groups' }}
</span>
<span class="text-xs font-bold text-secondary uppercase tracking-widest">
{{ ucfirst($item->course_type) }}
</span>
</div>

<h4 class="serif-text text-2xl text-primary mb-3">
{{ $item->title }}
</h4>

<p class="text-on-surface-variant text-sm mb-6">
{{ $item->description }}
</p>

<div class="flex items-center gap-6">
<span class="text-xs font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">schedule</span>
{{ \Carbon\Carbon::parse($item->course_time)->format('h:i A') }}
</span>

<a class="text-secondary text-sm font-bold underline"
href="{{ route('courses.detail', $item->id) }}">
Reserve Seat
</a>
</div>

</div>

</div>

@empty
<p class="text-center text-on-surface-variant col-span-2">No upcoming sessions found.</p>
@endforelse

</div>
</div>
</section>



<!-- Featured -->
<section class="py-24 px-8 max-w-7xl mx-auto">

<div class="flex justify-between items-end mb-16 reveal">
<div>
<h2 class="serif-text text-4xl md:text-5xl text-primary mb-4">Featured Programs</h2>
<div class="h-1.5 w-24 bg-tertiary-fixed-dim"></div>
</div>

<a class="text-secondary font-semibold flex items-center gap-2 hover:underline"
href="{{ route('courses.list') }}">
View All Courses →
</a>
</div>


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

@forelse($courses ?? [] as $course)
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col reveal">

<div class="relative h-64 overflow-hidden">
<img src="{{ asset('storage/' . $course->course_image) }}"
class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">

@if($course->status == 'active')
<a href="{{ route('courses.detail', $course->id) }}"
class="absolute top-4 right-4 bg-white/90 px-3 py-1 rounded text-xs font-bold">
Enrolling Now
</a>
@endif
</div>

<div class="p-8 flex flex-col flex-grow">

<div class="flex items-center gap-4 text-xs font-semibold text-secondary mb-4 uppercase tracking-widest">
<span>{{ $course->specialisation ?? 'Clinical' }}</span>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span>{{ $course->duration }}</span>
</div>

<h3 class="serif-text text-2xl text-primary mb-4">
{{ $course->title }}
</h3>

<p class="text-on-surface-variant text-sm mb-8">
{{ Str::limit($course->description, 100) }}
</p>

<div class="mt-auto flex items-center justify-between pt-6 border-t">
<span class="text-sm text-on-surface/60">
Duration: {{ $course->duration }}
</span>

<a href="{{ route('courses.detail', $course->id) }}"
class="text-primary font-bold text-sm">
Register →
</a>
</div>

</div>
</div>
@empty
<p class="text-center col-span-3 text-on-surface-variant">No courses available</p>
@endforelse

</div>
</section>

@endsection