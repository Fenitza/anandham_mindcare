@extends('layouts.admin')
@section('title', 'Academic Curriculum courses - Anandham Mindcare')
@section('content')
<div class="pt-28 px-8 pb-12 space-y-12">
<!-- Page Title Section -->
<section class="mb-16">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-4">
        <h2 class="text-5xl font-bold text-primary leading-tight">Curriculum Management</h2>
        <a href="{{ route('admin.courses.add') }}"
         class="flex flex-row items-center gap-2 px-4 py-2 bg-gradient-to-r from-primary to-primary-container text-white rounded-xl text-sm font-medium shadow-lg shadow-primary/10 hover:scale-[1.02] transition-all active:opacity-80">
            <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
            <span>Create New Course</span>
        </a>
    </div>
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
        <p class="text-on-surface-variant text-lg leading-relaxed font-body mb-2 md:mb-0">
            Refine the academic excellence of Anandham Mindcare. Organize restorative mindfulness paths and advanced clinical foundations with editorial precision.
        </p>
        <div class="flex gap-4">
            <div class="flex bg-surface-container-high rounded-xl p-1">
                <button class="px-4 py-2 bg-white shadow-sm rounded-lg text-primary">
                    <span class="material-symbols-outlined" data-icon="grid_view">grid_view</span>
                </button>
                <button class="px-4 py-2 text-outline hover:text-primary transition-colors">
                    <span class="material-symbols-outlined" data-icon="list">list</span>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Perspective Quote Component -->
<div class="mb-16 perspective-quote bg-surface-container-lowest p-8 rounded-xl max-w-4xl">
<p class="text-2xl font-headline text-tertiary italic">
                    "The integration of cognitive behavioral frameworks with ancient mindfulness is the bridge to modern restorative care."
                </p>
<p class="mt-4 text-secondary font-bold tracking-widest text-xs uppercase">Restorative Care Philosophy</p>
</div>
<!-- Bento-Style Course Grid -->
<!-- Bento-Style Course Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

@forelse($courses as $course)

<article class="group relative bg-surface-container-lowest rounded-xl p-6 border border-outline-variant/15 hover:border-outline-variant/40 transition-all duration-300 flex flex-col justify-between">

<div>
    <div class="flex justify-between items-start mb-6">

        <!-- LEVEL = COURSE TYPE -->
        <span class="px-3 py-1 bg-secondary-fixed text-on-secondary-fixed text-[10px] font-bold tracking-widest uppercase rounded-full">
            Level: {{ ucfirst($course->course_type) }}
        </span>

        <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">

            <!-- EDIT -->
            <a href="{{ route('courses.edit', $course->id) }}"
               class="p-2 hover:bg-surface-container text-primary rounded-lg transition-colors">
                <span class="material-symbols-outlined text-lg">edit</span>
            </a>

            <!-- DELETE -->
            <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                  onsubmit="return confirm('Delete this course?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="p-2 hover:bg-error-container text-error rounded-lg transition-colors">
                    <span class="material-symbols-outlined text-lg">delete</span>
                </button>
            </form>

        </div>
    </div>

    <!-- TITLE -->
    <h3 class="text-2xl font-bold text-primary mb-3 leading-snug">
        {{ $course->title }}
    </h3>

    <!-- DESCRIPTION -->
    <p class="text-on-surface-variant text-sm line-clamp-2 mb-6">
        {{ \Illuminate\Support\Str::limit($course->description, 120) }}
    </p>

</div>

<div class="pt-6 border-t border-surface-container-low flex justify-between items-center">

    <div>
        <p class="text-[10px] text-outline uppercase tracking-wider font-bold">
            Last Modified
        </p>
        <p class="text-sm font-medium text-on-surface">
            {{ $course->updated_at->format('M d, Y') }}
        </p>
    </div>

    <!-- STATUS ICON -->
    @if($course->enrollment_status === 'active')
        <span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">
            verified
        </span>
    @elseif($course->enrollment_status === 'waitlist')
        <span class="material-symbols-outlined text-yellow-500">schedule</span>
    @else
        <span class="material-symbols-outlined text-red-500">block</span>
    @endif

</div>

</article>

@empty

<!-- EMPTY STATE -->
<div class="col-span-3 text-center py-20">
    <h3 class="text-xl font-bold text-primary mb-2">No Courses Found</h3>
    <p class="text-on-surface-variant mb-6">Start by creating your first course.</p>

    <a href="{{ route('admin.courses.add') }}"
       class="px-6 py-3 bg-primary text-white rounded-lg font-bold">
        Create Course
    </a>
</div>

@endforelse


<!-- CREATE NEW COURSE CARD -->
<a href="{{ route('admin.courses.add') }}"
   class="group relative border-2 border-dashed border-outline-variant rounded-xl p-6 flex flex-col items-center justify-center text-center hover:bg-surface-container-low transition-all duration-300 hover:border-secondary">

    <div class="w-16 h-16 rounded-full bg-surface-container-high flex items-center justify-center mb-4 group-hover:bg-secondary-container transition-colors">
        <span class="material-symbols-outlined text-3xl text-primary">add_circle</span>
    </div>

    <h3 class="text-xl font-bold text-primary mb-1">Expand Academy</h3>
    <p class="text-on-surface-variant text-sm px-8">
        Draft a new clinical curriculum or foundational mindful path.
    </p>

</a>

</div>
</div>
</div>
@endsection
