@extends('layouts.admin')
@section('title', 'Academic Curriculum - Anandham Mindcare')
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
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Course Card 1 -->
<article class="group relative bg-surface-container-lowest rounded-xl p-6 border border-outline-variant/15 hover:border-outline-variant/40 transition-all duration-300 flex flex-col justify-between">
<div>
<div class="flex justify-between items-start mb-6">
<span class="px-3 py-1 bg-secondary-fixed text-on-secondary-fixed text-[10px] font-bold tracking-widest uppercase rounded-full">Level: Advanced</span>
<div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-surface-container text-primary rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
<button class="p-2 hover:bg-error-container text-error rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
</button>
</div>
</div>
<h3 class="text-2xl font-bold text-primary mb-3 leading-snug">Cognitive Behavioral Foundations</h3>
<p class="text-on-surface-variant text-sm line-clamp-2 mb-6">A deep-dive into the clinical application of CBT within the Anandham holistic framework.</p>
</div>
<div class="pt-6 border-t border-surface-container-low flex justify-between items-center">
<div>
<p class="text-[10px] text-outline uppercase tracking-wider font-bold">Last Modified</p>
<p class="text-sm font-medium text-on-surface">Oct 24, 2023</p>
</div>
<div class="flex -space-x-2">
<div class="w-8 h-8 rounded-full border-2 border-white bg-slate-200 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="portrait of a female academic researcher with glasses smiling slightly in a bright studio" src="https://lh3.googleusercontent.com/aida-public/AB6AXuASAg_-eNkfV3rAygKQOQ72qv9Tgruz0WjSI80Hag485AoUaLOlfPh1w8NTBQOTV9s1x8qg6YvBGsMdUcsfJp3VzJxi6hXId1yzgtK9EKVljZ3-doAshxvapbXiToxDFVBtpQyQRufAIk78b8eEoSDL8nZf3L-xjxyYe2EvtZDX6X0-BPRCp4CDay6k6rVXMzdmilqyWeiulZ35MFDukUOsxT0ont2WQBqjHDGdbQrpq4oCk8d7r0xDCo-cU1enzF7rPyX_ZUIeH5my"/>
</div>
<div class="w-8 h-8 rounded-full border-2 border-white bg-slate-200 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="professional portrait of a senior male doctor with grey hair in a clean clinical setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_GmIqQL1rVRjcGh4ifgH1WvnL80H2ve7XbpiUIlw3lSescYQsxqNcKvx_lTtOlZr5D54z7ulHcMomOBdD83cJ06Up8Nbbit52QPpTtEMH2PHelCC2_SJ2Qv118kan_7yAJyLEUcGlGPU4aWa33mhoJvrEN8am8IKb9uptbAd3XeQ4g_xMPOG5nhbr4XBVE_1TkOL5Eo2qDhc6PcktwQJegv8ACGvoDY29HR6ZDP4oelbUOElyZRG70L0r9-3O0yAfFUixRfndeoFO"/>
</div>
</div>
</div>
</article>
<!-- Course Card 2 -->
<article class="group relative bg-surface-container-lowest rounded-xl p-6 border border-outline-variant/15 hover:border-outline-variant/40 transition-all duration-300 flex flex-col justify-between">
<div>
<div class="flex justify-between items-start mb-6">
<span class="px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-bold tracking-widest uppercase rounded-full">Level: Foundational</span>
<div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-surface-container text-primary rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
<button class="p-2 hover:bg-error-container text-error rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
</button>
</div>
</div>
<h3 class="text-2xl font-bold text-primary mb-3 leading-snug">Restorative Mindfulness Lab</h3>
<p class="text-on-surface-variant text-sm line-clamp-2 mb-6">Practicum-based learning for meditative techniques specifically curated for trauma recovery.</p>
</div>
<div class="pt-6 border-t border-surface-container-low flex justify-between items-center">
<div>
<p class="text-[10px] text-outline uppercase tracking-wider font-bold">Last Modified</p>
<p class="text-sm font-medium text-on-surface">Nov 02, 2023</p>
</div>
<span class="material-symbols-outlined text-secondary" data-icon="verified" style="font-variation-settings: 'FILL' 1;">verified</span>
</div>
</article>
<!-- Course Card 3 (Heroized Card) -->
<article class="group relative bg-primary rounded-xl p-8 overflow-hidden flex flex-col justify-between md:col-span-2 lg:col-span-1 min-h-[320px]">
<div class="absolute inset-0 opacity-10 pointer-events-none">
<img class="w-full h-full object-cover" data-alt="abstract close-up of aged library book pages with elegant typography and golden dust particles" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwUS3W8Ibyl0X_e1Rhy_wwSQ2L7Ld2RlPyuIsOEmgJ-IcYqitpdu7f0m3Uzf44tn_vnUM8gfE1mbD8yZTv1bMcXVwHOnRxkedlt7f9r4BQ2OCcv8_sVRqckrRPyde_0j45Gx4ZBM0_UMO88DEvy54NhXuhoDEND5b2me267bsF5XW2398f4p36BvB4oXDADNKIxsQc795Ozo1lHzTFtb8I3nNy85uTaDAKHRB9M1KBMuFFShQ2o-41oG6bkkNmJZZZ-Up7maCoVJT5"/>
</div>
<div class="relative z-10">
<div class="flex justify-between items-start mb-6">
<span class="px-3 py-1 bg-white/20 text-white text-[10px] font-bold tracking-widest uppercase rounded-full backdrop-blur-md">Level: Masterclass</span>
<div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 bg-white/10 hover:bg-white/20 text-white rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
</div>
</div>
<h3 class="text-3xl font-bold text-white mb-4 newsreader italic">Neuroplasticity &amp; The Mindful Brain</h3>
<p class="text-primary-fixed text-sm">Advanced research integration exploring the biological impacts of sustained mindfulness practices.</p>
</div>
<div class="relative z-10 pt-6 flex justify-between items-end">
<div>
<p class="text-[10px] text-on-primary-container uppercase tracking-wider font-bold">Last Modified</p>
<p class="text-sm font-medium text-white">Oct 12, 2023</p>
</div>
<button class="px-4 py-2 bg-secondary text-white rounded-lg text-xs font-bold uppercase tracking-widest hover:bg-on-secondary-container transition-colors">
                            Manage Curriculum
                        </button>
</div>
</article>
<!-- Course Card 4 -->
<article class="group relative bg-surface-container-lowest rounded-xl p-6 border border-outline-variant/15 hover:border-outline-variant/40 transition-all duration-300 flex flex-col justify-between">
<div>
<div class="flex justify-between items-start mb-6">
<span class="px-3 py-1 bg-surface-container-high text-on-surface-variant text-[10px] font-bold tracking-widest uppercase rounded-full">Level: Introductory</span>
<div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-surface-container text-primary rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
<button class="p-2 hover:bg-error-container text-error rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
</button>
</div>
</div>
<h3 class="text-2xl font-bold text-primary mb-3 leading-snug">Emotional Regulation Basics</h3>
<p class="text-on-surface-variant text-sm line-clamp-2 mb-6">A student-facing entry point for core mental health resilience and self-care patterns.</p>
</div>
<div class="pt-6 border-t border-surface-container-low flex justify-between items-center">
<div>
<p class="text-[10px] text-outline uppercase tracking-wider font-bold">Last Modified</p>
<p class="text-sm font-medium text-on-surface">Sep 28, 2023</p>
</div>
</div>
</article>
<!-- Course Card 5 -->
<article class="group relative bg-surface-container-lowest rounded-xl p-6 border border-outline-variant/15 hover:border-outline-variant/40 transition-all duration-300 flex flex-col justify-between">
<div>
<div class="flex justify-between items-start mb-6">
<span class="px-3 py-1 bg-secondary-fixed text-on-secondary-fixed text-[10px] font-bold tracking-widest uppercase rounded-full">Level: Advanced</span>
<div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-surface-container text-primary rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
<button class="p-2 hover:bg-error-container text-error rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
</button>
</div>
</div>
<h3 class="text-2xl font-bold text-primary mb-3 leading-snug">Narrative Therapy Workshop</h3>
<p class="text-on-surface-variant text-sm line-clamp-2 mb-6">Exploring identity and story reconstruction within individual and group therapy settings.</p>
</div>
<div class="pt-6 border-t border-surface-container-low flex justify-between items-center">
<div>
<p class="text-[10px] text-outline uppercase tracking-wider font-bold">Last Modified</p>
<p class="text-sm font-medium text-on-surface">Aug 15, 2023</p>
</div>
</div>
</article>
<!-- Create New Course Bento Placeholder -->
<button class="group relative border-2 border-dashed border-outline-variant rounded-xl p-6 flex flex-col items-center justify-center text-center hover:bg-surface-container-low transition-all duration-300 hover:border-secondary">
<div class="w-16 h-16 rounded-full bg-surface-container-high flex items-center justify-center mb-4 group-hover:bg-secondary-container transition-colors">
<span class="material-symbols-outlined text-3xl text-primary" data-icon="add_circle">add_circle</span>
</div>
<h3 class="text-xl font-bold text-primary mb-1">Expand Academy</h3>
<p class="text-on-surface-variant text-sm px-8">Draft a new clinical curriculum or foundational mindful path.</p>
</button>
</div>
<!-- Footer Section with Surface Hierarchy -->
<footer class="mt-24 pt-12 border-t border-outline-variant/20 flex flex-col md:flex-row justify-between items-start gap-12 text-on-surface-variant">
<div class="max-w-xs">
<h4 class="newsreader text-2xl font-bold text-primary mb-4">Anandham Mindcare</h4>
<p class="text-sm leading-relaxed">Dedicated to the pursuit of mental clarity and restorative clinical excellence through integrated education.</p>
</div>
<div class="grid grid-cols-2 gap-12">
<div>
<h5 class="text-[10px] font-bold uppercase tracking-[0.2em] text-secondary mb-4">Academic Resources</h5>
<ul class="space-y-2 text-sm">
<li><a class="hover:text-primary transition-colors" href="#">Faculty Directory</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Research Archives</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Ethical Guidelines</a></li>
</ul>
</div>
<div>
<h5 class="text-[10px] font-bold uppercase tracking-[0.2em] text-secondary mb-4">Support</h5>
<ul class="space-y-2 text-sm">
<li><a class="hover:text-primary transition-colors" href="#">Course Catalog</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Admin Portal Help</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Privacy Statement</a></li>
</ul>
</div>
</div>
</footer>
</div>
</div>
@endsection
