@extends('layouts.admin')
@section('title', 'Add User Directory - Anandham Mindcare')
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
    </style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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

<div class="pt-28  pb-12 space-y-12">
<!-- Page Header & Action Bar -->
<div class="flex justify-between items-start mb-12">
<div class="max-w-2xl">
<span class="text-xs font-label tracking-widest text-secondary font-bold uppercase mb-2 block">Content Studio</span>
<h3 class="text-5xl font-headline text-primary font-bold leading-tight">Course Content Enrollment</h3>
<p class="text-on-surface-variant text-lg mt-3 font-light leading-relaxed">Craft an authoritative and high-converting landing page for our clinical excellence programs.</p>
</div>
<div class="flex gap-4 pt-4">
<button class="px-6 py-3 text-primary font-medium hover:bg-surface-container transition-all rounded-xl border border-outline-variant border-opacity-30 active:scale-95">Preview Draft</button>
<button class="px-8 py-3 bg-primary text-white font-bold rounded-xl editorial-shadow hover:bg-primary-container active:scale-95 transition-all">Publish Content</button>
</div>
</div>
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
<input class="w-full bg-surface-container-low border-b-2 border-outline-variant border-x-0 border-t-0 focus:border-secondary focus:ring-0 text-3xl font-headline text-primary py-4 px-0 transition-all placeholder:text-outline-variant" placeholder="e.g., Advanced Clinical Neuropsychiatry Mastery" type="text"/>
</div>
<div class="grid grid-cols-3 gap-8">
<div class="group">
<label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 transition-colors group-focus-within:text-secondary">Duration</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-0 top-1/2 -translate-y-1/2 text-outline text-lg" data-icon="schedule">schedule</span>
<input class="w-full bg-transparent border-b border-outline-variant border-x-0 border-t-0 focus:border-secondary focus:ring-0 font-body py-3 pl-8 text-sm" placeholder="4 Intensive Days" type="text"/>
</div>
</div>
<div class="group">
<label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 transition-colors group-focus-within:text-secondary">Tuition Fee (USD)</label>
<div class="relative">
<span class="absolute left-0 top-1/2 -translate-y-1/2 text-secondary font-bold text-sm">$</span>
<input class="w-full bg-transparent border-b border-outline-variant border-x-0 border-t-0 focus:border-secondary focus:ring-0 font-body py-3 pl-4 text-sm font-bold" placeholder="2,500" type="number"/>
</div>
</div>
<div class="group">
<label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3 transition-colors group-focus-within:text-secondary">Cohort Capacity</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-0 top-1/2 -translate-y-1/2 text-outline text-lg" data-icon="groups">groups</span>
<input class="w-full bg-transparent border-b border-outline-variant border-x-0 border-t-0 focus:border-secondary focus:ring-0 font-body py-3 pl-8 text-sm" placeholder="24 Elite Seats" type="text"/>
</div>
</div>
</div>
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
<button class="bg-surface border border-outline-variant px-4 py-2 rounded-lg text-secondary font-bold text-sm flex items-center gap-2 hover:bg-surface-container-low transition-all active:scale-95" id="add-module-btn">
<span class="material-symbols-outlined text-lg" data-icon="add">add</span> 
                        Add Module
                    </button>
</div>
<div class="space-y-6" id="module-container">
<!-- Day 1 (Active/Expanded) -->
<div class="module-item border border-outline-variant border-opacity-20 rounded-xl overflow-hidden bg-surface group">
<div class="accordion-header flex items-stretch bg-surface-container-low border-b border-outline-variant border-opacity-10 cursor-pointer">
<div class="w-12 flex flex-col items-center justify-center bg-surface-container-high text-outline cursor-grab active:cursor-grabbing hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="drag_indicator">drag_indicator</span>
</div>
<div class="flex-1 p-6 flex items-center gap-6">
<span class="module-number h-10 w-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm shrink-0">01</span>
<input class="flex-1 bg-transparent border-none text-xl font-headline font-bold text-primary focus:ring-0 p-0" type="text" value="Foundations of Therapeutic Precision"/>
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors transform transition-transform" data-icon="expand_less">expand_less</span>
</div>
</div>
<div class="accordion-content p-6 space-y-6">
<textarea class="w-full bg-surface-container-lowest border-none focus:ring-0 font-body text-sm text-on-surface-variant p-4 italic rounded-lg" placeholder="Brief overview of the day's clinical focus..." rows="2">Establishing the academic sanctuary through peer review and core diagnostic principles.</textarea>
<div>
<label class="block text-[10px] font-label uppercase tracking-widest text-on-surface-variant font-bold mb-3">Sub-topics &amp; Focus Areas</label>
<div class="topic-list flex flex-wrap gap-2">
<span class="inline-flex items-center gap-2 bg-surface-container-high px-4 py-2 rounded-full text-xs font-medium text-primary">
                                        Case Histology
                                        <button class="remove-topic material-symbols-outlined text-sm" data-icon="close">close</button>
</span>
<span class="inline-flex items-center gap-2 bg-surface-container-high px-4 py-2 rounded-full text-xs font-medium text-primary">
                                        Ethical Alignment
                                        <button class="remove-topic material-symbols-outlined text-sm" data-icon="close">close</button>
</span>
<button class="add-topic-btn inline-flex items-center gap-1 bg-transparent border border-dashed border-outline-variant px-4 py-2 rounded-full text-xs font-bold text-secondary hover:bg-secondary-fixed/10 transition-colors">
<span class="material-symbols-outlined text-xs" data-icon="add">add</span> New Topic
                                    </button>
</div>
</div>
<div class="pt-4 flex justify-end">
<button class="remove-module-btn text-xs font-bold text-error flex items-center gap-1 hover:underline">
<span class="material-symbols-outlined text-sm" data-icon="delete">delete</span> Remove Module
                                </button>
</div>
</div>
</div>
</div>
</section>
<!-- High-Value Bonuses -->
<section class="bg-surface-container-lowest rounded-2xl p-10 editorial-shadow border border-outline-variant border-opacity-10">
<div class="flex items-center gap-3 mb-10">
<div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center">
<span class="material-symbols-outlined text-secondary" data-icon="redeem">redeem</span>
</div>
<h4 class="text-2xl font-headline font-bold text-primary">Strategic Bonuses</h4>
</div>
<div class="grid grid-cols-1 gap-6 mb-8" id="bonus-container">
<!-- Bonus Item Card -->
<div class="bonus-item p-6 bg-surface rounded-xl border border-outline-variant border-opacity-15 hover:border-secondary/30 hover:bg-surface-bright transition-all group flex flex-col gap-6">
<div class="flex items-start gap-6">
<div class="w-12 h-12 bg-surface-container-low rounded-lg flex items-center justify-center text-secondary shrink-0">
<span class="material-symbols-outlined" data-icon="verified">verified</span>
</div>
<div class="flex-1">
<label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-1">Bonus Title</label>
<input class="w-full bg-transparent border-none focus:ring-0 font-headline text-xl font-bold text-primary p-0" type="text" value="Clinical Protocol Manuals"/>
</div>
<div class="w-40 border-l border-outline-variant border-opacity-20 pl-6">
<label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-1">Value (USD)</label>
<div class="flex items-center gap-1">
<span class="text-secondary font-bold">$</span>
<input class="w-full bg-transparent border-none focus:ring-0 font-body font-bold text-secondary text-lg p-0" type="text" value="499"/>
</div>
</div>
<button class="remove-bonus material-symbols-outlined text-outline-variant hover:text-error transition-colors p-2 hover:bg-error/5 rounded-full" data-icon="delete_outline">delete_outline</button>
</div>
<div class="pl-[72px]">
<label class="block text-[10px] font-label uppercase tracking-widest text-outline font-bold mb-2">Bonus Description</label>
<textarea class="w-full bg-surface-container-low border border-outline-variant border-opacity-20 rounded-lg p-3 font-body text-sm text-on-surface-variant focus:border-secondary focus:ring-0" placeholder="Describe the strategic advantage of this bonus..." rows="2">Comprehensive clinical standard operating procedures for immediate practice implementation.</textarea>
</div>
</div>
</div>
<button class="w-full py-5 border-2 border-dashed border-outline-variant border-opacity-30 rounded-xl text-on-surface-variant font-bold text-sm flex items-center justify-center gap-3 hover:bg-surface-container-low hover:border-secondary/50 hover:text-secondary transition-all active:scale-95" id="add-bonus-btn">
<span class="material-symbols-outlined" data-icon="add_circle">add_circle</span>
                    Enroll Additional High-Value Bonus
                </button>
</section>
</div>
<!-- Right Column: Contextual & Urgency -->
<div class="col-span-4 flex flex-col gap-10">
<!-- Lead Mentor Profile -->
<section class="bg-primary text-white rounded-2xl p-10 editorial-shadow overflow-hidden relative group">
<!-- Background Pattern -->
<div class="absolute -right-20 -top-20 w-64 h-64 bg-primary-container rounded-full opacity-20 transition-transform duration-700 group-hover:scale-110"></div>
<div class="absolute -left-10 -bottom-10 w-40 h-40 bg-secondary rounded-full opacity-5 transition-transform duration-700 group-hover:scale-125"></div>
<div class="relative z-10">
<div class="flex items-center gap-3 mb-8">
<span class="material-symbols-outlined text-secondary-fixed text-3xl" data-icon="school">school</span>
<h4 class="text-xl font-headline font-bold tracking-wide">Lead Faculty</h4>
</div>
<div class="flex flex-col items-center mb-8">

    <!-- IMAGE SECTION -->
    <div class="relative mb-6">
        <div class="w-40 h-40 rounded-full border-4 border-secondary/30 p-1 group-hover:border-secondary transition-all duration-500">
            
            <!-- Preview Image -->
            <img 
                id="mentorPreview"
                name="mentor_preview"
                alt="Mentor Image"
                class="w-full h-full rounded-full object-cover grayscale-[0.3] group-hover:grayscale-0 transition-all duration-500"
                src="{{ isset($mentor) ? asset('storage/'.$mentor->image) : 'https://via.placeholder.com/150' }}"
            />

        </div>

        <!-- Upload Button -->
        <button type="button"
            id="uploadBtn"
            class="absolute bottom-2 right-2 bg-secondary text-white w-10 h-10 rounded-full flex items-center justify-center hover:scale-110 hover:bg-secondary-container transition-all shadow-xl active:scale-90">
            <span class="material-symbols-outlined text-lg">camera</span>
        </button>

        <!-- Hidden File Input -->
        <input 
            type="file" 
            name="mentor_image"
            id="mentorImageInput" 
            accept="image/*" 
            class="hidden"
        >
    </div>

    <!-- NAME -->
    <input 
        name="mentor_name"
        class="w-full bg-transparent border-none text-center font-headline text-3xl font-bold text-white focus:ring-0 p-0 mb-2"
        type="text" 
        placeholder="Enter Mentor Name"
        value="{{ $mentor->name ?? '' }}"
    />

    <!-- QUALIFICATION -->
    <input 
        name="mentor_qualification"
        class="w-full bg-transparent border-none text-center font-label text-[10px] uppercase tracking-[0.2em] text-secondary-fixed font-bold focus:ring-0 p-0"
        type="text" 
        placeholder="Qualification"
        value="{{ $mentor->qualification ?? '' }}"
    />
</div>

<!-- BIO -->
<div class="space-y-4 pt-6 border-t border-white border-opacity-10">
    <label class="block text-[10px] font-label uppercase tracking-widest text-primary-fixed font-bold opacity-80">
        Biography & Institutional Standing
    </label>

    <textarea 
        name="mentor_bio"
        class="w-full bg-primary-container/20 border border-white/5 rounded-xl font-body text-sm text-white/90 focus:border-secondary-fixed focus:ring-0 p-5 leading-relaxed"
        rows="4"
        placeholder="Enter mentor biography..."
    >{{ $mentor->bio ?? '' }}</textarea>
</div>
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
<input class="w-full bg-surface-container-low border border-outline-variant border-opacity-30 rounded-xl focus:border-secondary focus:ring-2 focus:ring-secondary/10 font-body text-xs font-bold tracking-tight p-4 pr-12 transition-all text-primary" type="text" value="GLOBAL CPD ACCREDITED • NEXT INTAKE: NOV 15TH • LIMITED SEATS REMAINING"/>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-outline-variant" data-icon="edit">edit</span>
</div>
</div>
<div>
<label class="block text-xs font-label uppercase tracking-widest text-on-surface-variant font-bold mb-4">Enrollment Status</label>
<div class="flex p-1 bg-surface-container-low rounded-xl gap-1" id="enrollment-status-toggles">
<button class="status-btn flex-1 py-3 bg-secondary text-white rounded-lg text-[10px] font-bold uppercase tracking-widest shadow-md transition-all active:scale-95" data-status="active">Active</button>
<button class="status-btn flex-1 py-3 text-on-surface-variant hover:text-primary rounded-lg text-[10px] font-bold uppercase tracking-widest transition-all active:scale-95" data-status="waitlist">Waitlist</button>
<button class="status-btn flex-1 py-3 text-on-surface-variant hover:text-primary rounded-lg text-[10px] font-bold uppercase tracking-widest transition-all active:scale-95" data-status="closed">Closed</button>
</div>
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

@endsection