@extends('layouts.admin')
@section('title', 'Academic Curriculum courses - Anandham Mindcare')
@section('content')
<div class="pt-28 px-8 pb-12 space-y-12">
<!-- Page Title Section -->
<section class="mb-16">
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 mb-8">

    <div>
        <h1 class="text-4xl lg:text-5xl font-black text-primary leading-tight">
            Curriculum Management
        </h1>

        <p class="mt-2 text-sm text-on-surface-variant">
            Create, organize and manage courses, pricing and offers.
        </p>
    </div>

    <div class="flex flex-wrap gap-3">

        <a href="{{ route('admin.courses.add') }}"
           class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-semibold shadow-md hover:shadow-lg transition-all">

            <span class="material-symbols-outlined">
                add
            </span>

            Create Course

        </a>

        <a href="{{ route('admin.offers.index') }}"
           class="inline-flex items-center gap-2 px-6 py-3 border-2 border-secondary text-secondary rounded-xl font-semibold hover:bg-secondary hover:text-white transition-all">

            <span class="material-symbols-outlined">
                local_offer
            </span>

            Offers

        </a>

    </div>

</div>
</section>
<!-- Perspective Quote Component
<div class="mb-16 perspective-quote bg-surface-container-lowest p-8 rounded-xl max-w-4xl">
<p class="text-2xl font-headline text-tertiary italic">
                    "The integration of cognitive behavioral frameworks with ancient mindfulness is the bridge to modern restorative care."
                </p>
<p class="mt-4 text-secondary font-bold tracking-widest text-xs uppercase">Restorative Care Philosophy</p>
</div> -->
<!-- Bento-Style Course Grid -->
<!-- Bento-Style Course Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

@forelse($courses as $course)

<article class="group relative rounded-xl overflow-hidden border border-outline-variant/15 hover:border-outline-variant/40 transition-all duration-300 flex flex-col justify-between">

    <!-- 🔥 BACKGROUND IMAGE -->
    <div class="absolute inset-0">
        <img 
            src="{{ $course->course_image ? asset('storage/'.$course->course_image) : 'https://via.placeholder.com/600x400' }}"
            class="w-full h-full object-cover"
        >
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50 group-hover:bg-black/40 transition-all"></div>
    </div>

    <!-- CONTENT -->
    <div class="relative z-10 p-6 flex flex-col justify-between h-full text-white">

        <div>

            <div class="flex justify-between items-start mb-6">

                <!-- LEVEL -->
                <span class="px-3 py-1 bg-white/20 backdrop-blur text-white text-[10px] font-bold tracking-widest uppercase rounded-full">
                    {{ ucfirst($course->course_type) }}
                </span>

                <!-- ACTIONS -->
                <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">

                    <a href="{{ route('courses.edit', $course->id) }}"
                       class="p-2 bg-white/10 hover:bg-white/20 text-white rounded-lg">
                        <span class="material-symbols-outlined text-lg">edit</span>
                    </a>

                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                          onsubmit="return confirm('Delete this course?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="p-2 bg-red-500/20 hover:bg-red-500 text-white rounded-lg">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </form>

                </div>
            </div>

            <!-- TITLE -->
            <h3 class="text-2xl font-bold mb-3 leading-snug">
                {{ $course->title }}
            </h3>

            <!-- DESCRIPTION -->
            <p class="text-white/80 text-sm line-clamp-2 mb-6">
                {{ \Illuminate\Support\Str::limit($course->description, 120) }}
            </p>

        </div>

        <!-- FOOTER -->
        <div class="pt-6 border-t border-white/20 flex justify-between items-center">

            <div>
                <p class="text-[10px] uppercase tracking-wider font-bold text-white/70">
                    Last Modified
                </p>
                <p class="text-sm font-medium">
                    {{ $course->updated_at->format('M d, Y') }}
                </p>
            </div>

            <!-- 💰 FEE -->
            <div class="text-right">
                <p class="text-[10px] uppercase text-white/70 font-bold">Fee</p>
                <p class="text-lg font-bold text-secondary-fixed">
                    ₹{{ number_format($course->fee, 0) }}
                </p>
            </div>

        </div>

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
