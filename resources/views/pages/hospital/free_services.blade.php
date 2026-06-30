@extends('layouts.hosp')

@section('content')



<!-- Featured -->
<section class="py-24 px-8 max-w-7xl mx-auto">

<div class="flex justify-between items-end mb-16 reveal">
<div>
<h2 class="serif-text text-4xl md:text-5xl text-primary mb-4">Free Services</h2>
<div class="h-1.5 w-24 bg-tertiary-fixed-dim"></div>
</div>

<a class="text-secondary font-semibold flex items-center gap-2 hover:underline"
href="{{ route('courses.list') }}">
Explore Paid Courses →
</a>
</div>


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

@forelse(($courses ?? collect())->where('course_type', 'free') as $course)
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col reveal">

<div class="relative h-64 overflow-hidden">
<a href="{{ asset('storage/' . $course->course_image) }}" class="glightbox">
    <img src="{{ asset('storage/' . $course->course_image) }}"
         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
</a>


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
<span>{{ $course->formatted_schedule }}</span>
</div>

<h3 class="serif-text text-2xl text-primary mb-4">
{{ $course->title }}
</h3>

<p class="text-on-surface-variant text-sm mb-8">
{{ Str::limit($course->description, 100) }}
</p>

<div class="mt-auto flex items-center justify-between pt-6 border-t">
<span class="text-sm text-on-surface/60">
<!-- Duration: {{ $course->duration }} -->
</span>

<a href="{{ route('free_service.detail', $course->id) }}"
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