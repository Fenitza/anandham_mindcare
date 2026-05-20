@extends('layouts.admin')
@section('title', 'Add Course Directory - Anandham Mindcare')
@section('content')


<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary-fixed": "#cae7f6",
                    "secondary-container": "#fccc38",
                    "outline-variant": "#c4c6d1",
                    "on-tertiary": "#ffffff",
                    "on-secondary-container": "#6f5600",
                    "background": "#f7f9fc",
                    "surface-container-lowest": "#ffffff",
                    "secondary-fixed": "#ffdf90",
                    "surface-container-high": "#e6e8eb",
                    "error": "#ba1a1a",
                    "on-primary": "#ffffff",
                    "outline": "#747780",
                    "surface-container-low": "#f2f4f7",
                    "on-tertiary-fixed-variant": "#2f4a57",
                    "surface-container": "#eceef1",
                    "primary-fixed": "#d8e2ff",
                    "on-secondary": "#ffffff",
                    "on-primary-container": "#8aa7e1",
                    "surface-variant": "#e0e3e6",
                    "secondary-fixed-dim": "#f0c12c",
                    "primary-fixed-dim": "#acc7ff",
                    "on-error-container": "#93000a",
                    "surface-container-highest": "#e0e3e6",
                    "on-error": "#ffffff",
                    "surface-tint": "#415e94",
                    "tertiary-fixed-dim": "#aecbda",
                    "on-primary-fixed": "#001a41",
                    "surface-bright": "#f7f9fc",
                    "surface-dim": "#d8dadd",
                    "tertiary-container": "#25404c",
                    "on-surface": "#191c1e",
                    "inverse-surface": "#2d3133",
                    "primary": "#002555",
                    "on-background": "#191c1e",
                    "surface": "#f7f9fc",
                    "secondary": "#755b00",
                    "on-secondary-fixed-variant": "#584400",
                    "inverse-primary": "#acc7ff",
                    "on-tertiary-fixed": "#001f2a",
                    "on-primary-fixed-variant": "#28467b",
                    "on-surface-variant": "#43474f",
                    "on-tertiary-container": "#8fabba",
                    "on-secondary-fixed": "#241a00",
                    "tertiary": "#0c2a35",
                    "primary-container": "#1b3b6f",
                    "inverse-on-surface": "#eff1f4",
                    "error-container": "#ffdad6"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
                    "headline": ["Newsreader", "serif"],
                    "body": ["Work Sans", "sans-serif"],
                    "label": ["Work Sans", "sans-serif"]
            }
          },
        }
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .editorial-shadow {
            box-shadow: 0 24px 40px -10px rgba(25, 28, 30, 0.05);
        }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .input-focus-ring:focus-within {
            box-shadow: 0 0 0 2px rgba(117, 91, 0, 0.2);
        }
        /* Custom styles for transitions */
        .accordion-content {
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out, padding 0.3s ease-out;
            max-height: 1000px;
            overflow: hidden;
        }
        .accordion-content.collapsed {
            max-height: 0;
            opacity: 0;
            padding-top: 0;
            padding-bottom: 0;
            pointer-events: none;
        }
        .rotate-180 {
            transform: rotate(180deg);
        }
    </style>

<form 
    action="{{ isset($course) ? route('courses.update', $course->id) : route('courses.store') }}" 
    method="POST" 
    enctype="multipart/form-data"
>
@csrf

@if(isset($course))
    @method('PUT')
@endif
<div class="pt-28  pb-12 space-y-12">
    @include('partials.alerts')
<!-- Page Header & Action Bar -->
<!-- <div class="flex justify-between items-start mb-12"> -->
  
<!-- <div class="max-w-xl">
    <span class="text-[10px] font-label tracking-wider text-secondary font-bold uppercase mb-1 block">
        Content Studio
    </span>

    <h3 class="text-3xl font-headline text-primary font-bold leading-snug">
        Course Content Enrollment
    </h3>

    <p class="text-on-surface-variant text-sm mt-2 font-light leading-relaxed">
        Craft an authoritative and high-converting landing page for our clinical excellence programs.
    </p>
</div> -->

<!-- <div class="flex gap-3 pt-3">
    <button type="button"
        class="px-4 py-2 text-sm text-primary font-medium hover:bg-surface-container transition-all rounded-lg border border-outline-variant border-opacity-30 active:scale-95">
        Preview Draft
    </button>

    <button type="submit"
        class="px-5 py-2 text-sm bg-primary text-white font-semibold rounded-lg editorial-shadow hover:bg-primary-container active:scale-95 transition-all">
        Publish Content
    </button>
</div>
</div> -->
<!-- Editor Grid -->
<div class="grid grid-cols-12 gap-8">
<!-- Left Column: Core Data -->
<div class="col-span-8 flex flex-col gap-10">
<!-- Hero Presentation Section -->
<section class="bg-surface-container-lowest rounded-2xl p-10 editorial-shadow border border-outline-variant border-opacity-10">
<div class="flex items-center gap-3 mb-10">
<div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center">
<span class="material-symbols-outlined text-secondary" data-icon="auto_awesome" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
</div>
<h4 class="text-2xl font-headline font-bold text-primary">Hero Presentation</h4>
</div>
<div class="space-y-8">
<div class="group">
<label class="block text-xs font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 transition-colors group-focus-within:text-secondary">Course Master Title</label>
<input class="w-full bg-surface-container-low border-b-2 border-outline-variant border-x-0 border-t-0 focus:border-secondary focus:ring-0 text-2xl font-headline text-primary py-4 px-0 transition-all placeholder:text-outline-variant" name="title" value="{{ old('title', $course->title ?? '') }}" placeholder="e.g., Advanced Clinical Neuropsychiatry Mastery" type="text"/>
</div>

<!-- ✅ Description Added -->
<div class="group">
<label class="block text-xs font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 transition-colors group-focus-within:text-secondary">
Course Description
</label>
<textarea 
class="w-full bg-surface-container-low border-b-2 border-outline-variant border-x-0 border-t-0 focus:border-secondary focus:ring-0 text-base text-primary py-4 px-0 transition-all placeholder:text-outline-variant resize-none"
name="description"
rows="3"
placeholder="Write a short engaging description about the course...">{{ old('description', $course->description ?? '') }}</textarea>
</div>

<!-- Organised By -->
 <div class="group">
<label class="block text-xs font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 transition-colors group-focus-within:text-secondary">
Organised By
</label>
<input class="w-full bg-surface-container-low border-b-2 border-outline-variant border-x-0 border-t-0 focus:border-secondary focus:ring-0 text-base text-primary py-4 px-0 transition-all placeholder:text-outline-variant" name="organised_by" value="{{ old('organised_by', $course->organised_by ?? '') }}" placeholder="e.g., Department of Clinical Psychology" type="text"/>
</div>


<!-- HERO IMAGE -->
<div class="flex flex-col items-center mb-10">
    
    <div class="relative group">
        <div class="w-full max-w-3xl h-64 rounded-xl border-2 border-dashed border-outline-variant overflow-hidden flex items-center justify-center bg-surface-container-low">

            <!-- Preview -->
            <img 
            id="courseImagePreview"
            src="{{ isset($course) && $course->course_image 
                    ? asset('storage/'.$course->course_image) 
                    : '' }}"
            class="w-full h-full object-cover {{ isset($course) && $course->course_image ? '' : 'hidden' }}"
            />

            <span id="coursePlaceholder"
            class="text-outline text-sm {{ isset($course) && $course->course_image ? 'hidden' : '' }}">
            Upload Course Hero Image
            </span>
        </div>

        <!-- Upload Button -->
        <button type="button"
            id="uploadCourseImageBtn"
            class="absolute bottom-3 right-3 bg-secondary text-white px-4 py-2 rounded-lg text-xs font-bold shadow-lg hover:scale-105 transition">
            Upload
        </button>

        <!-- Hidden Input -->
        <input 
            type="file" 
            name="course_image"
            value="{{ old('course_image', $course->course_image ?? '') }}"
            id="courseImageInput"
            accept="image/*"
            class="hidden"
        >
    </div>

</div>
<div class="group">
<label class=" text-xs font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 transition-colors group-focus-within:text-secondary">Specialisation</label>
<input class="w-full bg-surface-container-low border-b-2 border-outline-variant border-x-0 border-t-0 focus:border-secondary focus:ring-0 text-2xl font-headline text-primary py-4 px-0 transition-all placeholder:text-outline-variant" name="specialisation" value="{{ old('specialisation', $course->specialisation ?? '') }}" placeholder="e.g., Clinical Neuropsychiatry" type="text"/>
</div>

<div class="group">
<label class=" text-xs font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 transition-colors group-focus-within:text-secondary">Tags</label>
<input class="w-full bg-surface-container-low border-b-2 border-outline-variant border-x-0 border-t-0 focus:border-secondary focus:ring-0 text-2xl font-headline text-primary py-4 px-0 transition-all placeholder:text-outline-variant" name="tags" value="{{ old('tags', isset($course) ? $course->tags->pluck('name')->implode(', ') : '') }}" placeholder="e.g., Students" type="text"/>
</div>

<!-- COURSE TYPE -->
<div class="group mt-6">

    <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3">
        Course Type
    </label>

    <div class="flex gap-3 flex-wrap">

        <label class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition-all">
            <input
                type="radio"
                name="course_type"
                value="free"
                class="course-type-radio text-secondary focus:ring-secondary"
                {{ old('course_type', $course->course_type ?? '') == 'free' ? 'checked' : '' }}
            >
            <span class="text-sm font-body text-primary">Free</span>
        </label>

        <label class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition-all">
            <input
                type="radio"
                name="course_type"
                value="premium"
                class="course-type-radio text-secondary focus:ring-secondary"
                {{ old('course_type', $course->course_type ?? '') == 'premium' ? 'checked' : '' }}
            >
            <span class="text-sm font-body text-primary">Premium</span>
        </label>

        <label class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition-all">
            <input
                type="radio"
                name="course_type"
                value="specialised"
                class="course-type-radio text-secondary focus:ring-secondary"
                {{ old('course_type', $course->course_type ?? '') == 'specialised' ? 'checked' : '' }}
            >
            <span class="text-sm font-body text-primary">Specialised</span>
        </label>

    </div>

</div>

<!-- ========================= -->
<!-- PRICING WRAPPER -->
<!-- ========================= -->
<div id="pricing-wrapper">

    <!-- PRICING SECTION -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">

        <!-- INDIAN FEE -->
        <div class="group">

            <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 group-focus-within:text-secondary">
                Indian Registration Fee (₹)
            </label>

            <div class="relative">

                <span class="absolute left-0 top-1/2 -translate-y-1/2 text-secondary font-bold text-sm">
                    ₹
                </span>

                <input
                    class="w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 pl-4 text-sm font-bold"
                    name="price"
                    value="{{ old('price', $course->fee ?? '') }}"
                    placeholder="2500"
                    type="number"
                />

            </div>

        </div>

        <!-- EARLY BIRD -->
        <div class="group">

            <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 group-focus-within:text-secondary">
                Early Bird Offer Fee (₹)
            </label>

            <div class="relative">

                <span class="absolute left-0 top-1/2 -translate-y-1/2 text-secondary font-bold text-sm">
                    ₹
                </span>

                <input
                    class="w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 pl-4 text-sm font-bold"
                    name="early_bird_fee"
                    value="{{ old('early_bird_fee', $course->early_bird_fee ?? '') }}"
                    placeholder="1999"
                    type="number"
                />

            </div>

            <p class="text-[11px] text-outline mt-2">
                Optional discounted fee for early registrations
            </p>

        </div>

    </div>

    <!-- INTERNATIONAL FEE -->
    <!-- INTERNATIONAL PRICING -->
<div class="group mt-8">

    <div class="flex items-center justify-between mb-4">

        <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold">
            International Registration Fees
        </label>

        <button
            type="button"
            id="add-international-fee"
            class="text-xs px-3 py-2 border border-dashed border-secondary rounded-lg text-secondary hover:bg-secondary/5 transition-all"
        >
            + Add Currency
        </button>

    </div>

    <div id="international-fees-wrapper" class="space-y-6">

        
            @php

            $internationalFees = old(
                'international_fees',
                isset($course) && $course->international_pricing
                    ? (
                        is_array($course->international_pricing)
                            ? $course->international_pricing
                            : json_decode($course->international_pricing, true)
                    )
                    : [
                        [
                            'currency' => '',
                            'fee' => '',
                            'early_bird_fee' => ''
                        ]
                    ]
            );

        @endphp

        @foreach($internationalFees as $index => $fee)

        <div class="international-fee-item border border-outline-variant rounded-xl p-4">

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 items-end">

                <!-- CURRENCY -->
                <div>

                    <label class="block text-xs text-outline mb-2">
                        Currency
                    </label>

                    <select
                        name="international_fees[{{ $index }}][currency]"
                        class="w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 text-sm"
                    >

                        <option value="">Select Currency</option>

                        <option value="USD" {{ ($fee['currency'] ?? '') == 'USD' ? 'selected' : '' }}>
                            USD ($)
                        </option>

                        <option value="EUR" {{ ($fee['currency'] ?? '') == 'EUR' ? 'selected' : '' }}>
                            EUR (€)
                        </option>

                        <option value="GBP" {{ ($fee['currency'] ?? '') == 'GBP' ? 'selected' : '' }}>
                            GBP (£)
                        </option>

                        <option value="AUD" {{ ($fee['currency'] ?? '') == 'AUD' ? 'selected' : '' }}>
                            AUD (A$)
                        </option>

                        <option value="CAD" {{ ($fee['currency'] ?? '') == 'CAD' ? 'selected' : '' }}>
                            CAD (C$)
                        </option>

                        <option value="SGD" {{ ($fee['currency'] ?? '') == 'SGD' ? 'selected' : '' }}>
                            SGD (S$)
                        </option>

                        <option value="AED" {{ ($fee['currency'] ?? '') == 'AED' ? 'selected' : '' }}>
                            AED (د.إ)
                        </option>

                    </select>

                </div>

                <!-- FEE -->
                <div>

                    <label class="block text-xs text-outline mb-2">
                        Registration Fee
                    </label>

                    <input
                        type="number"
                        name="international_fees[{{ $index }}][fee]"
                        value="{{ $fee['fee'] ?? '' }}"
                        placeholder="99"
                        class="w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 text-sm font-bold"
                    />

                </div>

                <!-- EARLY BIRD -->
                <div>

                    <label class="block text-xs text-outline mb-2">
                        Early Bird Fee
                    </label>

                    <input
                        type="number"
                        name="international_fees[{{ $index }}][early_bird_fee]"
                        value="{{ $fee['early_bird_fee'] ?? '' }}"
                        placeholder="89"
                        class="w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 text-sm font-bold"
                    />

                </div>

                <!-- REMOVE -->
                <div>

                    <button
                        type="button"
                        class="remove-international-fee w-full px-4 py-3 border border-error text-error rounded-lg hover:bg-error/5 transition-all text-sm"
                    >
                        Remove
                    </button>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

<!-- TEMPLATE -->
<template id="international-fee-template">

    <div class="international-fee-item border border-outline-variant rounded-xl p-4">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 items-end">

            <!-- CURRENCY -->
            <div>

                <label class="block text-xs text-outline mb-2">
                    Currency
                </label>

                <select
                    name=""
                    class="currency-input w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 text-sm"
                >

                    <option value="">Select Currency</option>

                    <option value="USD">USD ($)</option>
                    <option value="EUR">EUR (€)</option>
                    <option value="GBP">GBP (£)</option>
                    <option value="AUD">AUD (A$)</option>
                    <option value="CAD">CAD (C$)</option>
                    <option value="SGD">SGD (S$)</option>
                    <option value="AED">AED (د.إ)</option>

                </select>

            </div>

            <!-- FEE -->
            <div>

                <label class="block text-xs text-outline mb-2">
                    Registration Fee
                </label>

                <input
                    type="number"
                    name=""
                    placeholder="99"
                    class="fee-input w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 text-sm font-bold"
                />

            </div>

            <!-- EARLY BIRD -->
            <div>

                <label class="block text-xs text-outline mb-2">
                    Early Bird Fee
                </label>

                <input
                    type="number"
                    name=""
                    placeholder="89"
                    class="earlybird-input w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 text-sm font-bold"
                />

            </div>

            <!-- REMOVE -->
            <div>

                <button
                    type="button"
                    class="remove-international-fee w-full px-4 py-3 border border-error text-error rounded-lg hover:bg-error/5 transition-all text-sm"
                >
                    Remove
                </button>

            </div>

        </div>

    </div>

</template>



    </div>

</div>

<!-- ========================= -->
<!-- SCRIPT -->
<!-- ========================= -->
<script>

    const pricingWrapper = document.getElementById('pricing-wrapper');
    const courseTypeRadios = document.querySelectorAll('.course-type-radio');

    function togglePricingSection() {

        const selectedType = document.querySelector('input[name="course_type"]:checked')?.value;

        if (selectedType === 'free') {

            pricingWrapper.classList.add('hidden');

        } else {

            pricingWrapper.classList.remove('hidden');

        }
    }

    // Initial Load
    togglePricingSection();

    // Change Event
    courseTypeRadios.forEach(radio => {
        radio.addEventListener('change', togglePricingSection);
    });

</script>

<!-- MODE OF COURSE -->
<div class="group mt-6">

    <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-4">
        Mode of Course
    </label>

    <div class="flex flex-wrap gap-3">

        <!-- ONLINE -->
        <label class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition-all">
            <input 
                type="radio"
                name="mode"
                value="online"
                class="mode-radio text-secondary focus:ring-secondary"
                {{ old('mode', $course->mode ?? '') == 'online' ? 'checked' : '' }}
            >
            <span class="text-sm font-body text-primary">
                Online
            </span>
        </label>

        <!-- OFFLINE -->
        <label class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition-all">
            <input 
                type="radio"
                name="mode"
                value="offline"
                class="mode-radio text-secondary focus:ring-secondary"
                {{ old('mode', $course->mode ?? '') == 'offline' ? 'checked' : '' }}
            >
            <span class="text-sm font-body text-primary">
                Offline
            </span>
        </label>

        <!-- HYBRID -->
        <label class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition-all">
            <input 
                type="radio"
                name="mode"
                value="online_offline"
                class="mode-radio text-secondary focus:ring-secondary"
                {{ old('mode', $course->mode ?? '') == 'online_offline' ? 'checked' : '' }}
            >
            <span class="text-sm font-body text-primary">
                Online & Offline
            </span>
        </label>

    </div>

</div>


<!-- ONLINE SECTION -->
<div id="zoom-section" class="group mt-6 hidden">

    <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3">
        Zoom Link
    </label>

    <div class="relative">

        <span class="material-symbols-outlined absolute left-0 top-1/2 -translate-y-1/2 text-outline text-lg">
            link
        </span>

        <input 
            type="url"
            name="zoom_link"
            value="{{ old('zoom_link', $course->zoom_link ?? '') }}"
            placeholder="https://zoom.us/..."
            class="w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 pl-8 text-sm"
        />

    </div>

</div>

<!-- OFFLINE SECTION -->
<div id="venue-section" class="group mt-6 hidden">

    <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3">
        Venue Link
    </label>

    <div class="relative">

        <span class="material-symbols-outlined absolute left-0 top-1/2 -translate-y-1/2 text-outline text-lg">
            location_on
        </span>

        <input 
            type="url"
            name="venue"
            value="{{ old('venue', $course->venue ?? '') }}"
            placeholder="https://maps.google.com/..."
            class="w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 pl-8 text-sm"
        />

    </div>

</div>


<!-- FIRST ROW -->
 <div class="group mt-6">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

  <!-- Duration -->
  <div class="group">
    <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 group-focus-within:text-secondary">
      Duration
    </label>
    <div class="relative">
      <span class="material-symbols-outlined absolute left-0 top-1/2 -translate-y-1/2 text-outline text-lg">schedule</span>
      <input class="w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 pl-8 text-sm"
        name="duration"
        value="{{ old('duration', $course->duration ?? '') }}"
        placeholder="4 Intensive Days"
        type="text"/>
    </div>
  </div>

  <!-- Capacity -->
  <div class="group">
    <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 group-focus-within:text-secondary">
      Cohort Capacity
    </label>
    <div class="relative">
      <span class="material-symbols-outlined absolute left-0 top-1/2 -translate-y-1/2 text-outline text-lg">groups</span>
      <input class="w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 pl-8 text-sm"
        name="capacity"
        value="{{ old('capacity', $course->capacity ?? '') }}"
        placeholder="24 Seats"
        type="text"/>
    </div>
  </div>

</div>

  

  

<!-- SECOND ROW (SEPARATE GRID) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">

  <!-- Course Date -->
  <!-- <div class="group">
    <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 group-focus-within:text-secondary">
      Course Date
    </label>
    <div class="relative">
      <span class="material-symbols-outlined absolute left-0 top-1/2 -translate-y-1/2 text-outline text-lg">calendar_month</span>
      <input class="w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 pl-8 text-sm"
        name="course_date"
        value="{{ old('course_date', isset($course) && $course->course_date ? \Carbon\Carbon::parse($course->course_date)->format('Y-m-d') : '') }}"        type="date"/>
    </div>
  </div> -->

  <!-- COURSE SCHEDULE -->
<div class="col-span-2">

    <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-4">
        Course Schedule Type
    </label>

    <!-- TYPE SELECTOR -->
    <div class="flex flex-wrap gap-3 mb-6">

        <label class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded-lg cursor-pointer">
            <input type="radio" name="schedule_type" value="dates"
                class="schedule-type"
                {{ old('schedule_type', $course->schedule_type ?? 'dates') == 'dates' ? 'checked' : '' }}>
            <span class="text-sm">Specific Dates</span>
        </label>

        <label class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded-lg cursor-pointer">
            <input type="radio" name="schedule_type" value="month_range"
                class="schedule-type"
                {{ old('schedule_type', $course->schedule_type ?? '') == 'month_range' ? 'checked' : '' }}>
            <span class="text-sm">Month Range</span>
        </label>

        <label class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded-lg cursor-pointer">
            <input type="radio" name="schedule_type" value="weekend_range"
                class="schedule-type"
                {{ old('schedule_type', $course->schedule_type ?? '') == 'weekend_range' ? 'checked' : '' }}>
            <span class="text-sm">Weekend Range</span>
        </label>

    </div>

    <!-- SPECIFIC DATES -->
    <div id="dates-section" class="schedule-section">

        <div id="dates-container" class="space-y-3">

            @php
                $dates = old('course_dates',
                    isset($course) && $course->course_dates
                        ? json_decode($course->course_dates, true)
                        : ['']
                );
            @endphp

            @foreach($dates as $i => $date)
            <div class="flex gap-3 items-center">

                <input type="date"
                    name="course_dates[]"
                    value="{{ $date }}"
                    class="flex-1 bg-transparent border-b border-outline-variant focus:border-secondary py-3 text-sm">

                <button type="button"
                    class="remove-date text-error text-xs font-bold">
                    Remove
                </button>

            </div>
            @endforeach

        </div>

        <button type="button"
            id="add-date-btn"
            class="mt-4 px-4 py-2 border border-dashed rounded-lg text-secondary text-xs font-bold">
            + Add Another Date
        </button>

    </div>

    <!-- MONTH RANGE -->
    <div id="month-range-section" class="schedule-section hidden">

        <div class="grid grid-cols-2 gap-6">

            <div>
                <label class="text-xs block mb-2">From</label>

                <input type="month"
                    name="month_start"
                    value="{{ old('month_start', $course->month_start ?? '') }}"
                    class="w-full bg-transparent border-b border-outline-variant py-3 text-sm">
            </div>

            <div>
                <label class="text-xs block mb-2">To</label>

                <input type="month"
                    name="month_end"
                    value="{{ old('month_end', $course->month_end ?? '') }}"
                    class="w-full bg-transparent border-b border-outline-variant py-3 text-sm">
            </div>

        </div>

    </div>

    <!-- WEEKEND RANGE -->
<div id="weekend-range-section" class="schedule-section hidden">

    <div class="grid grid-cols-2 gap-6">

        <!-- FROM -->
        <div>

            <label class="text-xs block mb-2">
                From Month
            </label>

            <input type="month"
                name="weekend_start"
                value="{{ old('weekend_start', $course->weekend_start ?? '') }}"
                class="w-full bg-transparent border-b border-outline-variant py-3 text-sm">

        </div>

        <!-- TO -->
        <div>

            <label class="text-xs block mb-2">
                To Month
            </label>

            <input type="month"
                name="weekend_end"
                value="{{ old('weekend_end', $course->weekend_end ?? '') }}"
                class="w-full bg-transparent border-b border-outline-variant py-3 text-sm">

        </div>

    </div>

    <!-- INFO -->
    <p class="text-xs text-outline mt-4">
        Weekend classes conducted between selected months
    </p>
    <!-- WEEKEND DAYS -->
<div class="mt-6">

    <label class="text-xs block mb-3 font-semibold">
        Weekend Days
    </label>

    <div class="flex flex-wrap gap-4">

        <!-- SATURDAY -->
        <label class="flex items-center gap-2 px-4 py-3 border border-outline-variant rounded-lg cursor-pointer">

            <input
                type="checkbox"
                name="weekend_days[]"
                value="Saturday"

                @checked(
                    in_array(
                        'Saturday',
                        old(
                            'weekend_days',
                            isset($course) && $course->weekend_days
                                ? (
                                    is_array($course->weekend_days)
                                        ? $course->weekend_days
                                        : json_decode($course->weekend_days, true)
                                )
                                : []
                        )
                    )
                )
            >

            <span class="text-sm">
                Saturday
            </span>

        </label>

        <!-- SUNDAY -->
        <label class="flex items-center gap-2 px-4 py-3 border border-outline-variant rounded-lg cursor-pointer">

            <input
                type="checkbox"
                name="weekend_days[]"
                value="Sunday"

                @checked(
                    in_array(
                        'Sunday',
                        old(
                            'weekend_days',
                            isset($course) && $course->weekend_days
                                ? (
                                    is_array($course->weekend_days)
                                        ? $course->weekend_days
                                        : json_decode($course->weekend_days, true)
                                )
                                : []
                        )
                    )
                )
            >

            <span class="text-sm">
                Sunday
            </span>

        </label>

    </div>

    <p class="text-xs text-outline mt-3">
        Select Saturday, Sunday or both
    </p>

</div>

</div>

</div>

  <!-- Course Time -->
  <div class="group">
    <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 group-focus-within:text-secondary">
      Course Time
    </label>
    <div class="relative">
      <span class="material-symbols-outlined absolute left-0 top-1/2 -translate-y-1/2 text-outline text-lg">schedule</span>
      <input class="w-full bg-transparent border-b border-outline-variant focus:border-secondary py-3 pl-8 text-sm"
        name="course_time"
        value="{{ old('course_time', $course->course_time ?? '') }}"
        type="time"/>
    </div>
  </div>

  

  

<!-- QR Enable Toggle -->
<div class="group mt-6">
  <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3">
    Payment QR Option
  </label>

  <div class="flex items-center gap-3">

    <input 
      type="checkbox"
      name="enable_qr"
      value="1"
      {{ old('enable_qr', $course->enable_qr ?? false) ? 'checked' : '' }}
      class="w-4 h-4 accent-secondary cursor-pointer"
    >

    <span class="text-sm text-on-surface-variant">
      Enable QR Payment for this course
    </span>

  </div>
</div>

<!-- Registration Contact & Details -->
<div class="group mt-6 w-full">

    <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3">
        Registration Contact & Details
    </label>

    <div class="relative w-full">

        <span class="material-symbols-outlined absolute left-4 top-4 text-outline text-lg">
            contact_phone
        </span>

        <textarea
            name="registration_contact"
            rows="5"
            placeholder="Enter registration contact details, phone numbers, coordinator info, WhatsApp details, timings, etc..."
            class="w-full min-w-full bg-transparent border border-outline-variant focus:border-secondary rounded-2xl py-4 pl-12 pr-4 text-sm resize-none focus:ring-0"
        >{{ old('registration_contact', $course->registration_contact ?? '') }}</textarea>

    </div>

    <p class="text-[11px] text-outline mt-2">
        Example: Call/WhatsApp +91 98765 43210 between 9 AM – 6 PM
    </p>

</div>
</section>
<!-- Curriculum Roadmap Builder -->
<section class="bg-surface-container-lowest rounded-2xl p-10 editorial-shadow border border-outline-variant border-opacity-10">
<div class="flex justify-between items-center mb-10">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center">
<span class="material-symbols-outlined text-tertiary" data-icon="architecture">architecture</span>
</div>
<h4 class="text-2xl font-headline font-bold text-primary">Curriculum Roadmap</h4>
</div>
<button type="button"
class="bg-surface border border-outline-variant px-4 py-2 rounded-lg text-secondary font-bold text-sm flex items-center gap-2 hover:bg-surface-container-low transition-all active:scale-95"
id="add-module-btn">Add Module
</div>
@php
$modules = old('modules', isset($course) ? $course->modules : []);
@endphp

<div class="space-y-6" id="module-container">

@forelse($modules as $index => $module)

<div class="module-item border border-outline-variant border-opacity-20 rounded-xl overflow-hidden bg-surface group">

    <!-- HEADER -->
    <div class="accordion-header flex items-stretch bg-surface-container-low border-b border-outline-variant border-opacity-10 cursor-pointer">
        
        <div class="w-12 flex flex-col items-center justify-center bg-surface-container-high text-outline cursor-grab">
            <span class="material-symbols-outlined">drag_indicator</span>
        </div>

        <div class="flex-1 p-6 flex items-center gap-6">
            <span class="module-number h-10 w-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm shrink-0">
                {{ str_pad($index+1,2,'0',STR_PAD_LEFT) }}
            </span>

            <input 
                name="modules[{{ $index }}][title]"
                class="flex-1 bg-transparent border-none text-xl font-headline font-bold text-primary focus:ring-0 p-0"
                type="text"
                placeholder="Module Title"
                value="{{ is_array($module) ? $module['title'] : $module->title }}"
            />

            <span class="material-symbols-outlined">expand_less</span>
        </div>
    </div>

    <!-- BODY -->
    <div class="accordion-content p-6 space-y-6">

        <textarea 
            name="modules[{{ $index }}][description]"
            class="w-full bg-surface-container-lowest border-none focus:ring-0 font-body text-sm text-on-surface-variant p-4 italic rounded-lg"
            rows="2"
            placeholder="Module Description"
        >{{ is_array($module) ? $module['description'] : $module->description }}</textarea>

        <div>
            <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3">
                Sub-topics & Focus Areas
            </label>

            @php
            $topics = is_array($module) ? ($module['topics'] ?? []) : $module->topics;
            @endphp

            <div class="topic-list flex flex-wrap gap-2">

                @foreach($topics as $topic)
                <input 
                    type="text" 
                    name="modules[{{ $index }}][topics][]" 
                    value="{{ is_array($topic) ? $topic['name'] : $topic->name }}"
                    class="bg-surface-container-high px-4 py-2 rounded-full text-xs"
                />
                @endforeach

                <!-- ADD TOPIC -->
                <button type="button" class="add-topic-btn inline-flex items-center gap-1 border border-dashed px-4 py-2 rounded-full text-xs text-secondary">
                    + New Topic
                </button>

            </div>
        </div>

        <div class="pt-4 flex justify-end">
            <button type="button" class="remove-module-btn text-xs font-bold text-error">
                Remove Module
            </button>
        </div>

    </div>
</div>

@empty

{{-- ✅ PERFECT DEFAULT (MATCHES EDIT DESIGN) --}}
<div class="module-item border border-outline-variant border-opacity-20 rounded-xl overflow-hidden bg-surface group">

    <!-- HEADER -->
    <div class="accordion-header flex items-stretch bg-surface-container-low border-b border-outline-variant border-opacity-10 cursor-pointer">
        
        <div class="w-12 flex items-center justify-center bg-surface-container-high text-outline">
            <span class="material-symbols-outlined">drag_indicator</span>
        </div>

        <div class="flex-1 p-6 flex items-center gap-6">
            <span class="module-number h-10 w-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm">
                01
            </span>

            <input 
                name="modules[0][title]"
                placeholder="Module Title"
                class="flex-1 bg-transparent border-none text-xl font-headline font-bold text-primary focus:ring-0 p-0"
                type="text"
            />

            <span class="material-symbols-outlined">expand_less</span>
        </div>
    </div>

    <!-- BODY -->
    <div class="accordion-content p-6 space-y-6">

        <textarea 
            name="modules[0][description]"
            placeholder="Module Description"
            class="w-full bg-surface-container-lowest border-none focus:ring-0 font-body text-sm text-on-surface-variant p-4 italic rounded-lg"
            rows="2"></textarea>

        <div>
            <label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3">
                Sub-topics & Focus Areas
            </label>

            <div class="topic-list flex flex-wrap gap-2">

                <input 
                    type="text" 
                    name="modules[0][topics][]" 
                    placeholder="Topic"
                    class="bg-surface-container-high px-4 py-2 rounded-full text-xs"
                />

                <button type="button" class="add-topic-btn border border-dashed px-4 py-2 rounded-full text-xs text-secondary">
                    + New Topic
                </button>

            </div>
        </div>

        <div class="pt-4 flex justify-end">
            <button type="button" class="remove-module-btn text-xs font-bold text-error">
                Remove Module
            </button>
        </div>

    </div>
</div>

@endforelse

</div>
</section>

<!-- High-Value Bonuses -->
<section class="bg-surface-container-lowest rounded-2xl p-10 editorial-shadow border border-outline-variant border-opacity-10">

    <div class="flex items-center gap-3 mb-10">
        <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center">
            <span class="material-symbols-outlined text-secondary">redeem</span>
        </div>
        <h4 class="text-2xl font-headline font-bold text-primary">Certifications</h4>
    </div>

    <div class="grid grid-cols-1 gap-6 mb-8" id="bonus-container">

        @php
        $bonuses = old('bonuses', isset($course) ? $course->bonuses : []);
        @endphp

        @forelse($bonuses as $index => $bonus)

        <div class="bonus-item p-6 bg-surface rounded-xl border border-outline-variant border-opacity-15 flex flex-col gap-6 hover:border-secondary/30 hover:bg-surface-bright transition-all group">

            <div class="flex items-start gap-6">

                <div class="w-12 h-12 bg-surface-container-low rounded-lg flex items-center justify-center text-secondary shrink-0">
                    <span class="material-symbols-outlined">redeem</span>
                </div>

                <!-- TITLE -->
                <div class="flex-1">
                    <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-1">
                        Certification Title
                    </label>
                    <input 
                        name="bonuses[{{ $index }}][title]"
                        value="{{ is_array($bonus) ? $bonus['title'] : $bonus->title }}"
                        class="w-full bg-transparent border-none focus:ring-0 font-headline text-xl font-bold text-primary p-0"
                        type="text"
                        placeholder="Certification Title"
                    />
                </div>

                <!-- VALUE -->
                <!-- <div class="w-40 border-l border-outline-variant border-opacity-20 pl-6">
                    <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-1">
                        Value (₹)
                    </label>
                    <div class="flex items-center gap-1">
                        <span class="text-secondary font-bold">₹</span>
                        <input 
                            name="bonuses[{{ $index }}][value]"
                            value="{{ is_array($bonus) ? $bonus['value'] : $bonus->value }}"
                            class="w-full bg-transparent border-none focus:ring-0 font-body font-bold text-secondary text-lg p-0"
                            type="number"
                            placeholder="0"
                        />
                    </div>
                </div> -->

                <!-- DELETE -->
                <button type="button" class="remove-bonus material-symbols-outlined text-outline-variant hover:text-error transition-colors p-2 hover:bg-error/5 rounded-full">
                    delete_outline
                </button>
            </div>

            <!-- DESCRIPTION -->
            <div class="pl-[72px]">
                <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-2">
                    Certification Description
                </label>
                <textarea 
                    name="bonuses[{{ $index }}][description]"
                    class="w-full bg-surface-container-low border border-outline-variant border-opacity-20 rounded-lg p-3 font-body text-sm text-on-surface-variant focus:border-secondary focus:ring-0"
                    rows="2"
                    placeholder="Certification Description"
                >{{ is_array($bonus) ? $bonus['description'] : $bonus->description }}</textarea>
            </div>

        </div>

        @empty

        {{-- ✅ PERFECT DEFAULT (MATCH EDIT DESIGN) --}}
        <div class="bonus-item p-6 bg-surface rounded-xl border border-outline-variant border-opacity-15 flex flex-col gap-6 hover:border-secondary/30 hover:bg-surface-bright transition-all group">

            <div class="flex items-start gap-6">

                <div class="w-12 h-12 bg-surface-container-low rounded-lg flex items-center justify-center text-secondary shrink-0">
                    <span class="material-symbols-outlined">redeem</span>
                </div>

                <!-- TITLE -->
                <div class="flex-1">
                    <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-1">
                        Certification Title
                    </label>
                    <input 
                        name="bonuses[0][title]"
                        class="w-full bg-transparent border-none focus:ring-0 font-headline text-xl font-bold text-primary p-0"
                        type="text"
                        placeholder="Certification Title"
                    />
                </div>

                <!-- VALUE -->
                <!-- <div class="w-40 border-l border-outline-variant border-opacity-20 pl-6">
                    <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-1">
                        Value (₹)
                    </label>
                    <div class="flex items-center gap-1">
                        <span class="text-secondary font-bold">₹</span>
                        <input 
                            name="bonuses[0][value]"
                            class="w-full bg-transparent border-none focus:ring-0 font-body font-bold text-secondary text-lg p-0"
                            type="number"
                            placeholder="0"
                        />
                    </div>
                </div> -->

                <!-- DELETE -->
                <button type="button" class="remove-bonus material-symbols-outlined text-outline-variant hover:text-error p-2 rounded-full">
                    delete_outline
                </button>
            </div>

            <!-- DESCRIPTION -->
            <div class="pl-[72px]">
                <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-2">
                    Certification Description
                </label>
                <textarea 
                    name="bonuses[0][description]"
                    class="w-full bg-surface-container-low border border-outline-variant border-opacity-20 rounded-lg p-3 font-body text-sm text-on-surface-variant"
                    rows="2"
                    placeholder="Certification Description"
                ></textarea>
            </div>

        </div>

        @endforelse

    </div>

    <!-- ADD BUTTON -->
    <button type="button" id="add-bonus-btn"
        class="w-full py-5 border-2 border-dashed border-outline-variant rounded-xl text-on-surface-variant font-bold text-sm flex items-center justify-center gap-3 hover:bg-surface-container-low hover:border-secondary transition-all">
        <span class="material-symbols-outlined">add_circle</span>
        Enroll Additional High-Value Certification
    </button>

</section>

<!-- SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const bonusContainer = document.getElementById("bonus-container");
    const addBonusBtn = document.getElementById("add-bonus-btn");

    function getIndex() {
        return bonusContainer.querySelectorAll('.bonus-item').length;
    }

    function initBonus(el) {
        const removeBtn = el.querySelector('.remove-bonus');
        if (removeBtn) {
            removeBtn.addEventListener('click', () => {
                el.remove();
            });
        }
    }

    document.querySelectorAll('.bonus-item').forEach(initBonus);

    addBonusBtn.addEventListener('click', () => {

        const index = getIndex();

        const newBonus = document.createElement('div');
        newBonus.className = "bonus-item p-6 bg-surface rounded-xl border border-outline-variant border-opacity-15 hover:border-secondary/30 hover:bg-surface-bright transition-all group flex flex-col gap-6 opacity-0 scale-95 duration-200";

        newBonus.innerHTML = `
            <div class="flex items-start gap-6">
                <div class="w-12 h-12 bg-surface-container-low rounded-lg flex items-center justify-center text-secondary shrink-0">
                    <span class="material-symbols-outlined">redeem</span>
                </div>

                <div class="flex-1">
                    <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-1">Certification Title</label>
                    <input name="bonuses[${index}][title]" 
                        class="w-full bg-transparent border-none focus:ring-0 font-headline text-xl font-bold text-primary p-0"
                        type="text" placeholder="New Certification">
                </div>

                // <div class="w-40 border-l border-outline-variant border-opacity-20 pl-6">
                //     <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-1">Value (₹)</label>
                //     <div class="flex items-center gap-1">
                //         <span class="text-secondary font-bold">₹</span>
                //         <input name="bonuses[${index}][value]" 
                //             class="w-full bg-transparent border-none focus:ring-0 font-body font-bold text-secondary text-lg p-0"
                //             type="number" value="0">
                //     </div>
                // </div>

                <button type="button" class="remove-bonus material-symbols-outlined text-outline-variant hover:text-error transition-colors p-2 hover:bg-error/5 rounded-full">
                    delete_outline
                </button>
            </div>

            <div class="pl-[72px]">
                <label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-2">Certification Description</label>
                <textarea name="bonuses[${index}][description]"
                    class="w-full bg-surface-container-low border border-outline-variant border-opacity-20 rounded-lg p-3 font-body text-sm text-on-surface-variant"
                    rows="2" placeholder="Describe the strategic advantage..."></textarea>
            </div>
        `;

        bonusContainer.appendChild(newBonus);

        setTimeout(() => {
            newBonus.classList.remove('opacity-0', 'scale-95');
            newBonus.classList.add('opacity-100', 'scale-100');
        }, 10);

        initBonus(newBonus);
    });

});
</script>
</div>
<!-- Right Column: Contextual & Urgency -->
<div class="col-span-4 flex flex-col gap-10">
    <div class="flex gap-3 pt-3">
    <button type="button"
        class="px-4 py-2 text-sm text-primary font-medium hover:bg-surface-container transition-all rounded-lg border border-outline-variant border-opacity-30 active:scale-95">
        Preview Draft
    </button>

    <button type="submit"
        class="px-5 py-2 text-sm bg-primary text-white font-semibold rounded-lg editorial-shadow hover:bg-primary-container active:scale-95 transition-all">
        Publish Content
    </button>
</div>

<!-- LEAD FACULTY -->
<section class="bg-primary text-white rounded-3xl p-5 shadow-xl">

    <!-- HEADER -->
    <div class="flex items-center justify-between mb-5">

        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-secondary-fixed text-xl">
                school
            </span>

            <h4 class="text-lg font-headline font-bold">
                Lead Faculty
            </h4>
        </div>

        <button
            type="button"
            id="add-mentor-btn"
            class="px-3 py-2 rounded-xl border border-white/20 text-xs hover:bg-white/10 transition-all"
        >
            + Add
        </button>

    </div>

    @php
        $mentors = old(
            'mentors',
            isset($course) && $course->mentors && $course->mentors->count()
                ? $course->mentors->map(function($mentor){
                    return [
                        'name' => $mentor->name,
                        'qualification' => $mentor->qualification,
                        'bio' => $mentor->bio,
                        'image' => $mentor->image,
                    ];
                })->toArray()
                : [
                    [
                        'name' => '',
                        'qualification' => '',
                        'bio' => '',
                        'image' => '',
                    ]
                ]
        );
    @endphp

    <!-- LIST -->
    <div id="mentors-wrapper" class="space-y-4">

        @foreach($mentors as $index => $mentor)

        <div class="mentor-item bg-white/5 border border-white/10 rounded-2xl p-4">

            <div class="flex gap-4">

                <!-- IMAGE -->
                
                <div class="shrink-0">

                    <div class="relative">

                        <img
                            src="{{ !empty($mentor['image']) ? asset('storage/'.$mentor['image']) : asset('images/default-avatar.png') }}"
                            class="mentor-preview w-20 h-20 rounded-xl object-cover border border-white/20"
                        >

                        <button
                            type="button"
                            class="upload-mentor-btn absolute -bottom-2 -right-2 bg-secondary text-white w-7 h-7 rounded-full flex items-center justify-center"
                        >
                            <span class="material-symbols-outlined text-xs">
                                photo_camera
                            </span>
                        </button>

                    </div>

                    <!-- OLD IMAGE -->
                    <input
                        type="hidden"
                        name="mentors[{{ $index }}][existing_image]"
                        value="{{ $mentor['image'] ?? '' }}"
                    >

                    <!-- NEW IMAGE -->
                    <input
                        type="file"
                        name="mentors[{{ $index }}][image]"
                        accept="image/*"
                        class="mentor-image-input hidden"
                    >

                </div>

                <!-- DETAILS -->
                <div class="flex-1 space-y-3">

                    <input
                        type="text"
                        name="mentors[{{ $index }}][name]"
                        value="{{ $mentor['name'] ?? '' }}"
                        placeholder="Faculty Name"
                        class="w-full bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-sm text-white focus:border-secondary"
                    >

                    <input
                        type="text"
                        name="mentors[{{ $index }}][qualification]"
                        value="{{ $mentor['qualification'] ?? '' }}"
                        placeholder="Qualification"
                        class="w-full bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-xs text-white focus:border-secondary"
                    >

                    <textarea
                        name="mentors[{{ $index }}][bio]"
                        rows="2"
                        placeholder="Short bio..."
                        class="w-full bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-xs text-white/90 resize-none focus:border-secondary"
                    >{{ $mentor['bio'] ?? '' }}</textarea>

                    <button
                        type="button"
                        class="remove-mentor-btn text-red-300 text-xs hover:text-red-200"
                    >
                        Remove
                    </button>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</section>

<!-- TEMPLATE -->
<template id="mentor-template">

    <div class="mentor-item bg-white/5 border border-white/10 rounded-2xl p-4">

        <div class="flex gap-4">

            <!-- IMAGE -->
            <div class="shrink-0">

                <div class="relative">

                    <img
                        src="{{ asset('images/default-avatar.png') }}"
                        class="mentor-preview w-20 h-20 rounded-xl object-cover border border-white/20"
                    >

                    <button
                        type="button"
                        class="upload-mentor-btn absolute -bottom-2 -right-2 bg-secondary text-white w-7 h-7 rounded-full flex items-center justify-center"
                    >
                        <span class="material-symbols-outlined text-xs">
                            photo_camera
                        </span>
                    </button>

                </div>

                <input
                    type="file"
                    accept="image/*"
                    class="mentor-image-input hidden"
                >

            </div>

            <!-- DETAILS -->
            <div class="flex-1 space-y-3">

                <input
                    type="text"
                    placeholder="Faculty Name"
                    class="mentor-name w-full bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-sm text-white focus:border-secondary"
                >

                <input
                    type="text"
                    placeholder="Qualification"
                    class="mentor-qualification w-full bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-xs text-white focus:border-secondary"
                >

                <textarea
                    rows="2"
                    placeholder="Short bio..."
                    class="mentor-bio w-full bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-xs text-white/90 resize-none focus:border-secondary"
                ></textarea>

                <button
                    type="button"
                    class="remove-mentor-btn text-red-300 text-xs hover:text-red-200"
                >
                    Remove
                </button>

            </div>

        </div>

    </div>

</template>

<script>

    const mentorWrapper = document.getElementById('mentors-wrapper');
    const mentorTemplate = document.getElementById('mentor-template');
    const addMentorBtn = document.getElementById('add-mentor-btn');

    let mentorIndex = {{ count($mentors) }};

    // ADD FACULTY
    addMentorBtn.addEventListener('click', () => {

        const clone = mentorTemplate.content.cloneNode(true);

        clone.querySelector('.mentor-name')
            .setAttribute('name', `mentors[${mentorIndex}][name]`);

        clone.querySelector('.mentor-qualification')
            .setAttribute('name', `mentors[${mentorIndex}][qualification]`);

        clone.querySelector('.mentor-bio')
            .setAttribute('name', `mentors[${mentorIndex}][bio]`);

        clone.querySelector('.mentor-image-input')
            .setAttribute('name', `mentors[${mentorIndex}][image]`);

        mentorWrapper.appendChild(clone);

        mentorIndex++;

    });

    // REMOVE
    document.addEventListener('click', function(e){

        if(e.target.closest('.remove-mentor-btn')) {

            const mentorItems = document.querySelectorAll('.mentor-item');

            if(mentorItems.length > 1){
                e.target.closest('.mentor-item').remove();
            }

        }

    });

    // OPEN FILE
    document.addEventListener('click', function(e){

        if(e.target.closest('.upload-mentor-btn')) {

            const parent = e.target.closest('.mentor-item');

            parent.querySelector('.mentor-image-input').click();

        }

    });

    // PREVIEW IMAGE
    document.addEventListener('change', function(e){

        if(e.target.classList.contains('mentor-image-input')) {

            const file = e.target.files[0];

            if(file) {

                const reader = new FileReader();

                reader.onload = function(event) {

                    e.target.closest('.mentor-item')
                        .querySelector('.mentor-preview')
                        .src = event.target.result;

                }

                reader.readAsDataURL(file);

            }

        }

    });

</script>
</section>
<!-- Marketing Urgency Controls -->
<section class="bg-surface-container-lowest rounded-2xl p-10 editorial-shadow border border-outline-variant border-opacity-10">
<div class="flex items-center gap-3 mb-8">
<div class="w-10 h-10 rounded-full bg-secondary-fixed/30 flex items-center justify-center">
<span class="material-symbols-outlined text-secondary" data-icon="sensors">sensors</span>
</div>
<h4 class="text-2xl font-headline font-bold text-primary">Live Announcements</h4>
</div>
<div class="space-y-8">
<div>
<label class="block text-xs font-label uppercase tracking-widest text-on-surface-variant font-bold mb-4">Scrolling Marquee Text</label>
<div class="relative group">
<input class="w-full bg-surface-container-low border border-outline-variant border-opacity-30 rounded-xl focus:border-secondary focus:ring-2 focus:ring-secondary/10 font-body text-xs font-bold tracking-tight p-4 pr-12 transition-all text-primary" type="text"  name="marquee_text" value="{{ old('marquee_text', $course->marquee_text ?? '') }}"/>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-outline-variant" data-icon="edit">edit</span>
</div>
</div>
<div>
<input type="hidden" name="enrollment_status" id="enrollment_status" value="{{ old('enrollment_status', $course->status ?? 'ongoing') }}">
<label class="block text-xs font-label uppercase tracking-widest text-on-surface-variant font-bold mb-4">Enrollment Status</label>
<div class="flex p-1 bg-surface-container-low rounded-xl gap-1" id="enrollment-status-toggles">
<button type="button" class="status-btn flex-1 py-3 text-on-surface-variant hover:text-primary rounded-lg text-[10px] font-bold uppercase tracking-widest transition-all active:scale-95" data-status="ongoing">Ongoing</button>

<button type="button" class="status-btn flex-1 py-3 text-on-surface-variant hover:text-primary rounded-lg text-[10px] font-bold uppercase tracking-widest transition-all active:scale-95" data-status="upcoming">Upcoming</button>

<button type="button" class="status-btn flex-1 py-3 text-on-surface-variant hover:text-primary rounded-lg text-[10px] font-bold uppercase tracking-widest transition-all active:scale-95" data-status="completed">Completed</button></div>
</div>
<div class="p-5 bg-tertiary/5 border border-tertiary/10 rounded-xl flex gap-4">
<span class="material-symbols-outlined text-tertiary mt-0.5" data-icon="tips_and_updates" style="font-variation-settings: 'FILL' 1;">tips_and_updates</span>
<p class="text-xs font-body text-tertiary font-medium leading-relaxed">
                            Announcements sync instantly to the global site header. Keep them concise and action-oriented.
                        </p>
</div>
</div>
</section>
<!-- Philosophy Block -->
<div class="relative p-10 bg-surface-container-lowest rounded-2xl editorial-shadow overflow-hidden">
<div class="absolute left-0 top-0 bottom-0 w-1.5 bg-secondary"></div>
<h5 class="font-headline text-2xl text-primary italic leading-relaxed relative z-10">
                    "We are not just building a dashboard; we are curating a sanctuary of authority and professional healing."
                </h5>
<div class="mt-6 flex items-center gap-3">
<div class="w-6 h-[1px] bg-outline-variant"></div>
<p class="text-[10px] font-label uppercase tracking-[0.2em] text-secondary font-bold">Academy Core Values</p>
</div>
</div>
</div>
</div>
</div>

<script>
const buttons = document.querySelectorAll('.status-btn');
const hiddenInput = document.getElementById('enrollment_status');

buttons.forEach(btn => {
    btn.addEventListener('click', () => {

        // remove active styles
        buttons.forEach(b => {
            b.classList.remove('bg-secondary', 'text-white', 'shadow-md');
        });

        // add active style
        btn.classList.add('bg-secondary', 'text-white', 'shadow-md');

        // set value
        hiddenInput.value = btn.dataset.status;
    });
});
</script>


<!-- <script>
let bonusIndex = {{ isset($course) && $course->bonuses ? count($course->bonuses) : 1 }};

document.getElementById('add-bonus-btn').addEventListener('click', function () {

    let html = `
    <div class="bonus-item p-6 bg-surface rounded-xl border flex flex-col gap-6">
        <div class="flex items-start gap-6">

            <div class="flex-1">
                <input name="bonuses[${bonusIndex}][title]" placeholder="Bonus Title"
                    class="w-full text-xl font-bold bg-transparent border-none"/>
            </div>

            <div class="w-40">
                <input name="bonuses[${bonusIndex}][value]" placeholder="Value"
                    class="w-full bg-transparent border-none" type="number"/>
            </div>

            <button type="button" class="remove-bonus text-red-500">✕</button>
        </div>

        <textarea name="bonuses[${bonusIndex}][description]"
            placeholder="Description"
            class="w-full border rounded p-2"></textarea>
    </div>
    `;

    document.getElementById('bonus-container').insertAdjacentHTML('beforeend', html);
    bonusIndex++;
});

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-bonus')) {
        e.target.closest('.bonus-item').remove();
    }
});
</script> -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const radios = document.querySelectorAll('.schedule-type');

    const datesSection = document.getElementById('dates-section');
    const monthSection = document.getElementById('month-range-section');
    const weekendSection = document.getElementById('weekend-range-section');

    /*
    |--------------------------------------------------------------------------
    | TOGGLE SECTIONS
    |--------------------------------------------------------------------------
    */

    function toggleScheduleSections() {

        const selected = document.querySelector('.schedule-type:checked')?.value;

        // hide all
        datesSection.classList.add('hidden');
        monthSection.classList.add('hidden');
        weekendSection.classList.add('hidden');

        // show selected
        if (selected === 'dates') {
            datesSection.classList.remove('hidden');
        }

        if (selected === 'month_range') {
            monthSection.classList.remove('hidden');
        }

        if (selected === 'weekend_range') {
            weekendSection.classList.remove('hidden');
        }
    }

    radios.forEach(radio => {
        radio.addEventListener('change', toggleScheduleSections);
    });

    toggleScheduleSections();

    /*
    |--------------------------------------------------------------------------
    | ADD DATE
    |--------------------------------------------------------------------------
    */

    const addDateBtn = document.getElementById('add-date-btn');
    const datesContainer = document.getElementById('dates-container');

    addDateBtn?.addEventListener('click', () => {

        const row = document.createElement('div');

        row.className = "flex gap-3 items-center";

        row.innerHTML = `
            <input type="date"
                name="course_dates[]"
                class="flex-1 bg-transparent border-b border-outline-variant focus:border-secondary py-3 text-sm">

            <button type="button"
                class="remove-date text-error text-xs font-bold">
                Remove
            </button>
        `;

        datesContainer.appendChild(row);
    });

    /*
    |--------------------------------------------------------------------------
    | REMOVE DATE
    |--------------------------------------------------------------------------
    */

    document.addEventListener('click', function(e) {

        if (e.target.classList.contains('remove-date')) {

            // prevent removing last date row
            const rows = document.querySelectorAll('#dates-container .flex');

            if (rows.length > 1) {
                e.target.parentElement.remove();
            }
        }
    });

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const modeRadios = document.querySelectorAll('.mode-radio');

    const zoomSection = document.getElementById('zoom-section');
    const venueSection = document.getElementById('venue-section');

    function toggleModeFields() {

        const selectedMode = document.querySelector('.mode-radio:checked')?.value;

        // Hide all first
        zoomSection.classList.add('hidden');
        venueSection.classList.add('hidden');

        // ONLINE
        if (selectedMode === 'online') {
            zoomSection.classList.remove('hidden');
        }

        // OFFLINE
        if (selectedMode === 'offline') {
            venueSection.classList.remove('hidden');
        }

        // HYBRID
        if (selectedMode === 'online_offline') {
            zoomSection.classList.remove('hidden');
            venueSection.classList.remove('hidden');
        }
    }

    modeRadios.forEach(radio => {
        radio.addEventListener('change', toggleModeFields);
    });

    // Initial load
    toggleModeFields();
});
</script>

<script>

    const addInternationalFeeBtn = document.getElementById('add-international-fee');
    const internationalFeesWrapper = document.getElementById('international-fees-wrapper');
    const internationalFeeTemplate = document.getElementById('international-fee-template');

    let internationalFeeIndex = {{ count($internationalFees) }};

    addInternationalFeeBtn.addEventListener('click', () => {

        const clone = internationalFeeTemplate.content.cloneNode(true);

        clone.querySelector('.currency-input')
            .setAttribute(
                'name',
                `international_fees[${internationalFeeIndex}][currency]`
            );

        clone.querySelector('.fee-input')
            .setAttribute(
                'name',
                `international_fees[${internationalFeeIndex}][fee]`
            );

        clone.querySelector('.earlybird-input')
            .setAttribute(
                'name',
                `international_fees[${internationalFeeIndex}][early_bird_fee]`
            );

        internationalFeesWrapper.appendChild(clone);

        internationalFeeIndex++;

    });

    document.addEventListener('click', function(e) {

        if (e.target.classList.contains('remove-international-fee')) {

            e.target.closest('.international-fee-item').remove();

        }

    });

</script>
</form>
@endsection