<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Anandham Mind Care Foundation | Clinical Sanctuary</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary-fixed-dim": "#fdbc13",
                        "on-tertiary-fixed": "#261900",
                        "surface-container-highest": "#e0e3e6",
                        "surface-tint": "#415e94",
                        "on-tertiary": "#ffffff",
                        "on-surface": "#191c1e",
                        "on-error-container": "#93000a",
                        "outline-variant": "#c4c6d1",
                        "on-tertiary-container": "#d59d00",
                        "on-error": "#ffffff",
                        "tertiary-fixed": "#ffdea3",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#4f3800",
                        "on-secondary-fixed": "#002020",
                        "surface-container-low": "#f2f4f7",
                        "primary-fixed": "#d8e2ff",
                        "primary": "#002555",
                        "on-primary": "#ffffff",
                        "surface": "#f7f9fc",
                        "surface-container": "#eceef1",
                        "on-secondary-container": "#006e6e",
                        "secondary-fixed-dim": "#76d6d5",
                        "surface-variant": "#e0e3e6",
                        "secondary-fixed": "#93f2f2",
                        "inverse-on-surface": "#eff1f4",
                        "on-primary-fixed-variant": "#28467b",
                        "outline": "#747780",
                        "error-container": "#ffdad6",
                        "on-tertiary-fixed-variant": "#5d4200",
                        "inverse-primary": "#acc7ff",
                        "background": "#f7f9fc",
                        "on-background": "#191c1e",
                        "error": "#ba1a1a",
                        "on-surface-variant": "#43474f",
                        "inverse-surface": "#2d3133",
                        "tertiary": "#342300",
                        "secondary-container": "#90efef",
                        "surface-dim": "#d8dadd",
                        "surface-container-high": "#e6e8eb",
                        "primary-container": "#1b3b6f",
                        "on-primary-container": "#8aa7e1"
                    },
                    fontFamily: {
                        "headline": ["Newsreader", "serif"],
                        "body": ["Work Sans", "sans-serif"],
                        "label": ["Work Sans", "sans-serif"]
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/hospital.css') }}">
</head>

<body class="bg-surface text-on-surface font-body">

@include('partials.header')

<div class="flex pt-16 min-h-screen">
<!-- SideNavBar -->
<aside class="fixed left-0 top-16 hidden lg:flex flex-col h-[calc(100vh-64px)] w-64 py-6 px-4 bg-slate-50 border-r border-slate-200/15 overflow-y-auto">
<div class="mb-8 px-2">
<h3 class="text-xs uppercase tracking-widest text-slate-400 font-bold mb-1">Specializations</h3>
<p class="text-[10px] text-slate-500 font-label">Clinical Filters</p>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 text-blue-900 font-bold border-r-4 border-yellow-700 bg-white/50 transition-all scale-98 duration-200" href="#">
<span class="material-symbols-outlined text-xl">psychology</span>
<span class="text-sm font-label">Psychiatry</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 transition-all font-label" href="#">
<span class="material-symbols-outlined text-xl">neurology</span>
<span class="text-sm">Neurology</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 transition-all font-label" href="#">
<span class="material-symbols-outlined text-xl">self_care</span>
<span class="text-sm">Holistic Care</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 transition-all font-label" href="#">
<span class="material-symbols-outlined text-xl">child_care</span>
<span class="text-sm">Pediatrics</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 transition-all font-label" href="#">
<span class="material-symbols-outlined text-xl">biotech</span>
<span class="text-sm">Research Methods</span>
</a>
</nav>
<div class="mt-auto pt-6 border-t border-slate-200/50 space-y-1">
<button class="w-full mb-4 py-2 px-4 bg-primary text-white text-xs font-bold rounded-lg hover:opacity-90 transition-opacity uppercase tracking-wider">
                    Request Curriculum
                </button>
<a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 transition-all font-label text-sm" href="#">
<span class="material-symbols-outlined text-xl">help</span>
<span>Support</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 transition-all font-label text-sm" href="#">
<span class="material-symbols-outlined text-xl">settings</span>
<span>Settings</span>
</a>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 ml-0 lg:ml-64 mr-0 xl:mr-80 p-8 lg:p-12">
<!-- Editorial Header -->
<section class="max-w-4xl mb-16">
<span class="text-secondary font-semibold tracking-widest text-xs uppercase mb-4 block">Academic Curriculum 2024</span>
<h1 class="text-5xl lg:text-6xl text-primary font-headline font-bold leading-tight mb-8">Clinical Pathways</h1>
<!-- Category Tabs -->
<div class="flex gap-8 border-b border-outline-variant/15 overflow-x-auto hide-scrollbar">
<button class="pb-4 text-sm font-bold border-b-2 border-secondary text-primary transition-all">All Courses</button>
<button class="pb-4 text-sm font-medium text-on-surface-variant hover:text-primary transition-all">Free Modules</button>
<button class="pb-4 text-sm font-medium text-on-surface-variant hover:text-primary transition-all">Premium Tracks</button>
<button class="pb-4 text-sm font-medium text-on-surface-variant hover:text-primary transition-all">Specialised Fellowships</button>
</div>
</section>
<!-- Timeline Feed -->
<div class="max-w-4xl relative">
<!-- Vertical Line -->
<div class="absolute left-6 top-0 bottom-0 w-[1px] bg-outline-variant/30 hidden md:block"></div>
<!-- Q1 Marker -->
<div class="relative flex items-center mb-12">
<div class="w-12 h-12 rounded-full bg-primary-container flex items-center justify-center z-10 mr-8 hidden md:flex">
<span class="text-white font-bold text-xs">Apr'25</span>
</div>
<h2 class="text-2xl font-serif text-primary font-bold">Foundation &amp; Integrative Basics</h2>
</div>
<!-- Timeline Course Card -->
<div class="mb-16 relative">
<div class="md:ml-20 bg-surface-container-lowest rounded-xl p-0 overflow-hidden border border-outline-variant/10 hover:border-outline-variant/30 transition-all flex flex-col md:flex-row shadow-sm">
<div class="w-full md:w-64 h-48 md:h-auto overflow-hidden">
<img class="w-full h-full object-cover" data-alt="professional medical setting with clean blue lighting and medical equipment in soft focus background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8wEQ15jtb8oao30UhNWxZQugSbnUCCJdCP0Ea1TDK5UcbnM9kUO6RuZEaPK3b5l_G0r2dCK9ykTzqvGwUv2GF0tg0FGe1hwOcZzPWdl0ST07MSLmp3Hr42_mNUMMJFG24Wloqylsz4KOJ8RASwOYS6WnxZIBXqeF0b5bsnz0pQ_4XVf_pH-1lx8LgrgM6cw4pO8wzqNxz5X_t68cJECKyCRry-ImZmslGA-K9662SIyfjI5aJFishMXlJgSw3LSk7yd1IrB42H0U4"/>
</div>
<div class="flex-1 p-8">
<div class="flex justify-between items-start mb-4">
<span class="text-[10px] font-bold uppercase tracking-widest text-secondary bg-secondary-fixed px-2 py-0.5 rounded">Core Psychiatry</span>
<span class="text-xs text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-sm">schedule</span> 12 Weeks
                                </span>
</div>
<h3 class="text-2xl font-headline font-bold text-primary mb-3 leading-snug">Neural Correlates of Cognitive Behavioral Therapy</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6 font-light">An advanced exploration of neuroplasticity and the functional changes in the prefrontal cortex following structured clinical interventions.</p>
<div class="flex items-center gap-4">
<button class="bg-primary text-white px-6 py-2 text-xs font-bold rounded hover:bg-primary-container transition-colors">Begin Module</button>
<button class="text-primary text-xs font-bold border-b border-primary/20 hover:border-primary">View Syllabus</button>
</div>
</div>
</div>
</div>
<!-- Q2 Marker -->
<div class="relative flex items-center mb-12 mt-20">
<div class="w-12 h-12 rounded-full bg-tertiary-container flex items-center justify-center z-10 mr-8 hidden md:flex">
<span class="text-white font-bold text-xs">Mar'25</span>
</div>
<h2 class="text-2xl font-serif text-primary font-bold">Clinical Specializations</h2>
</div>
<!-- Timeline Course Card 2 -->
<div class="mb-16 relative">
<div class="md:ml-20 bg-surface-container-lowest rounded-xl p-0 overflow-hidden border border-outline-variant/10 hover:border-outline-variant/30 transition-all flex flex-col md:flex-row shadow-sm">
<div class="w-full md:w-64 h-48 md:h-auto overflow-hidden">
<img class="w-full h-full object-cover" data-alt="microscopic view of neural pathways and synapses in deep indigo and soft neon blue tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDr9LRgjtIWljsy_Ial7ENTUx_snSAyGXlkoVomgkd48Xyw8UC5f6lk3R5fduHwpADotmweox5bX0RGPsdLfwiXStX0eowT6fkNiMSiHeWxBOvejaPa8N5eFakZe67X_zKQ2dCMrOMxNrdkZNCKVzHfivRNt_hzae0F2JfZmvK_rVqS6ZubBzY5LcgEUxQEqmDLKxr9Wz9hjinW-x65fyvFA39ru-niZKhVLtObjxfK88wu9rCZw3beOmVNLiS0SOa-mOq0OxWPygqW"/>
</div>
<div class="flex-1 p-8">
<div class="flex justify-between items-start mb-4">
<span class="text-[10px] font-bold uppercase tracking-widest text-tertiary bg-tertiary-fixed px-2 py-0.5 rounded">Neurology</span>
<span class="text-xs text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-sm">workspace_premium</span> Specialized
                                </span>
</div>
<h3 class="text-2xl font-headline font-bold text-primary mb-3 leading-snug">Psychopharmacology in Pediatric Care</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6 font-light">Protocol-driven approach to pharmacological management in young adults, balancing clinical efficacy with long-term neuro-development.</p>
<div class="flex items-center gap-4">
<button class="bg-primary text-white px-6 py-2 text-xs font-bold rounded hover:bg-primary-container transition-colors">Enroll Now</button>
<button class="text-primary text-xs font-bold border-b border-primary/20 hover:border-primary">Curriculum Overview</button>
</div>
</div>
</div>
</div>
<!-- Q3 Marker (Upcoming) -->
<div class="relative flex items-center mb-12 mt-20 opacity-60">
<div class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center z-10 mr-8 hidden md:flex">
<span class="text-on-surface-variant font-bold text-xs">Mar'25</span>
</div>
<h2 class="text-2xl font-serif text-primary font-bold">Global Research Practicum</h2>
</div>
</div>
</main>
<!-- Right Sidebar: Editorial Path & Circles -->
<aside class="fixed right-0 top-16 hidden xl:flex flex-col h-[calc(100vh-64px)] w-80 py-8 px-6 bg-surface-container-low border-l border-outline-variant/10 overflow-y-auto">
    <!-- Progress Section -->
    <div class="mb-10">
        <h4 class="text-xs font-bold text-primary uppercase tracking-widest mb-6">Your Editorial Path</h4>
        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/10">
            <div class="flex justify-between items-end mb-4">
                <span class="text-3xl font-headline font-bold text-primary">64<span class="text-lg opacity-50">%</span></span>
                <span class="text-[10px] font-bold text-secondary uppercase">Fellowship Level</span>
            </div>
            <div class="w-full h-1.5 bg-surface-container-high rounded-full overflow-hidden mb-4">
                <div class="h-full bg-primary" style="width: 64%"></div>
            </div>
            <p class="text-[11px] text-on-surface-variant leading-relaxed">Completed 8 of 12 core modules in <span class="font-bold">Holistic Psychiatry</span>. 4 modules remaining for Q1 certification.</p>
        </div>
    </div>
    <!-- Clinical Circles -->
    <div class="mb-10">
        <h4 class="text-xs font-bold text-primary uppercase tracking-widest mb-6">Clinical Circles</h4>
        <div class="space-y-4">
            <div class="flex items-center gap-4 group cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-primary font-bold text-xs">RM</div>
                <div>
                    <p class="text-xs font-bold text-on-surface group-hover:text-primary transition-colors">Research Methodology</p>
                    <p class="text-[10px] text-on-surface-variant">12 Active Members • 3 New Papers</p>
                </div>
            </div>
            <div class="flex items-center gap-4 group cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-yellow-100 flex items-center justify-center text-secondary font-bold text-xs">HC</div>
                <div>
                    <p class="text-xs font-bold text-on-surface group-hover:text-primary transition-colors">Holistic Care Group</p>
                    <p class="text-[10px] text-on-surface-variant">45 Active Members • Daily Briefing</p>
                </div>
            </div>
            <div class="flex items-center gap-4 group cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-bold text-xs">PN</div>
                <div>
                    <p class="text-xs font-bold text-on-surface group-hover:text-primary transition-colors">Pediatric Neurology</p>
                    <p class="text-[10px] text-on-surface-variant">28 Active Members • Weekly Seminar</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Editorial Quote -->
    <!-- <div class="mt-auto bg-primary-container p-6 rounded-xl relative overflow-hidden">
        <div class="absolute -right-4 -bottom-4 opacity-10">
            <span class="material-symbols-outlined text-8xl text-white">format_quote</span>
        </div>
        <div class="relative z-10">
            <p class="text-white/80 italic text-sm font-serif leading-relaxed mb-4">"The journey of healing begins with the discipline of clinical observation and the warmth of human empathy."</p>
            <p class="text-white text-[10px] font-bold uppercase tracking-widest">— Dr. A. Anandham</p>
        </div>
    </div> -->
</aside>
</div>
<!-- Mobile Navigation (Suppressed on large screens as per logic) -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 bg-white/95 backdrop-blur-md border-t border-slate-200 z-50 flex justify-around py-3 px-6">
<button class="flex flex-col items-center gap-1 text-primary">
<span class="material-symbols-outlined">school</span>
<span class="text-[10px] font-bold">Academy</span>
</button>
<button class="flex flex-col items-center gap-1 text-slate-400">
<span class="material-symbols-outlined">menu_book</span>
<span class="text-[10px] font-medium">Research</span>
</button>
<button class="flex flex-col items-center gap-1 text-slate-400">
<span class="material-symbols-outlined">group</span>
<span class="text-[10px] font-medium">Community</span>
</button>
<button class="flex flex-col items-center gap-1 text-slate-400">
<span class="material-symbols-outlined">person</span>
<span class="text-[10px] font-medium">Profile</span>
</button>
</nav>



<script src="{{ asset('js/reveal.js') }}"></script>

</body>
</html>