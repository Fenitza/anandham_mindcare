@extends('layouts.hosp')

@section('content')
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": "#f7f9fc",
                        "on-primary-fixed-variant": "#28467b",
                        "inverse-primary": "#acc7ff",
                        "tertiary-fixed": "#cae7f6",
                        "on-tertiary-container": "#8fabba",
                        "tertiary-container": "#25404c",
                        "surface-container": "#eceef1",
                        "surface-bright": "#f7f9fc",
                        "inverse-surface": "#2d3133",
                        "secondary-container": "#fccc38",
                        "outline": "#747780",
                        "primary": "#002555",
                        "inverse-on-surface": "#eff1f4",
                        "secondary-fixed-dim": "#f0c12c",
                        "primary-fixed-dim": "#acc7ff",
                        "surface-variant": "#e0e3e6",
                        "on-surface": "#191c1e",
                        "surface-container-highest": "#e0e3e6",
                        "surface-tint": "#415e94",
                        "outline-variant": "#c4c6d1",
                        "on-secondary": "#ffffff",
                        "on-secondary-container": "#6f5600",
                        "tertiary-fixed-dim": "#aecbda",
                        "surface-container-low": "#f2f4f7",
                        "primary-fixed": "#d8e2ff",
                        "on-primary": "#ffffff",
                        "on-background": "#191c1e",
                        "on-primary-fixed": "#001a41",
                        "on-secondary-fixed": "#241a00",
                        "on-surface-variant": "#43474f",
                        "on-error": "#ffffff",
                        "surface-dim": "#d8dadd",
                        "background": "#f7f9fc",
                        "secondary-fixed": "#ffdf90",
                        "surface-container-high": "#e6e8eb",
                        "on-secondary-fixed-variant": "#584400",
                        "on-tertiary-fixed": "#001f2a",
                        "tertiary": "#0c2a35",
                        "error": "#ba1a1a",
                        "error-container": "#ffdad6",
                        "surface-container-lowest": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-tertiary-fixed-variant": "#2f4a57",
                        "secondary": "#755b00",
                        "primary-container": "#1b3b6f",
                        "on-primary-container": "#8aa7e1",
                        "on-tertiary": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Newsreader"],
                        "body": ["Work Sans"],
                        "label": ["Work Sans"]
                    },
                    "animation": {
                        "marquee": "marquee 25s linear infinite",
                        "fade-in-up": "fadeInUp 0.8s ease-out forwards",
                        "pulse-slow": "pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite",
                    },
                    "keyframes": {
                        "marquee": {
                            "0%": { transform: "translateX(0%)" },
                            "100%": { transform: "translateX(-50%)" }
                        },
                        "fadeInUp": {
                            "0%": { opacity: "0", transform: "translateY(20px)" },
                            "100%": { opacity: "1", transform: "translateY(0)" }
                        }
                    }
                },
            },
        }
    </script>
<style>
        body { font-family: 'Work Sans', sans-serif; background-color: #f7f9fc; color: #191c1e; }
        h1, h2, h3, h4 { font-family: 'Newsreader', serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-nav { background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(16px); }
        .editorial-shadow { box-shadow: 0 24px 40px -10px rgba(0, 37, 85, 0.08); }
        .ghost-border { border: 1px solid rgba(0, 37, 85, 0.1); }
        .hero-glass { background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.15); }
        .delay-100 { animation-delay: 100ms; }
        .delay-200 { animation-delay: 200ms; }
        .delay-300 { animation-delay: 300ms; }
        .delay-400 { animation-delay: 400ms; }
        .delay-500 { animation-delay: 500ms; }
    </style>

<!-- Scrolling Marquee -->
<div class="fixed top-[68px] w-full bg-secondary z-[90] overflow-hidden whitespace-nowrap py-2 border-b border-secondary-container">
<div class="flex animate-marquee">
<div class="flex items-center space-x-12 px-4">
<span class="text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> Only 4 Seats Remaining for November Cohort</span>
<span class="text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-primary"></span> Global CPD Accredited Certification</span>
<span class="text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> Next Intake Starts: Nov 15th, 2024</span>
<span class="text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-primary"></span> 5.0 Star Rating from 500+ Practitioners</span>
</div>
<!-- Duplicated for seamless loop -->
<div class="flex items-center space-x-12 px-4">
<span class="text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> Only 4 Seats Remaining for November Cohort</span>
<span class="text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-primary"></span> Global CPD Accredited Certification</span>
<span class="text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> Next Intake Starts: Nov 15th, 2024</span>
<span class="text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-primary"></span> 5.0 Star Rating from 500+ Practitioners</span>
</div>
</div>
</div>
<!-- Immersive Hero Section - COMPACTED HEIGHT -->
<header class="relative pt-36 pb-16 md:pt-48 md:pb-24 overflow-hidden bg-primary min-h-[70vh] flex items-center">
<!-- Layered Background -->
<div class="absolute inset-0 z-0">
<div class="absolute inset-0 bg-gradient-to-b from-primary/95 via-primary/80 to-primary z-10"></div>
<img class="w-full h-full object-cover scale-110 animate-[pulse_10s_ease-in-out_infinite]" data-alt="microscopic view of elegant neural networks or cellular structures in soft clinical blue and white tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3CuoXmS8L9Ec8T0ATtDrD6nzKAmj1g3Ak3-Q-vbLscX0x5XKLeY_al44__qwBnmrJbNNbOnCSnNxRkxOu7NyHIx-CGu8qz3jzo-LmzYMjim04A5W3AvBoN6Pe9KnyG0PQGVs1FbnpCRlbdfjKJTxzDOVNmQzDk7DmTsDGcqHLSTCMLEo6sBcFZa_vpgZNJfUQ_Gbxc0s3-LwvfK9L5DumFMOJM_7aPVz9bD3CNBRFp43exw3O7Nao3apeEVe2agN5FUfymZtoDw8W"/>
</div>
<div class="max-w-7xl mx-auto px-8 relative z-20 text-center">
<!-- Badge - Reduced Margin -->
<div class="opacity-0 animate-fade-in-up">
<span class="inline-block px-4 py-1.5 mb-6 rounded-full bg-secondary text-primary text-[10px] font-bold tracking-widest uppercase shadow-lg shadow-secondary/20">
                Advanced Clinical Certification 2024
            </span>
</div>
<!-- Heading - Reduced Size & Margin -->
<h1 class="opacity-0 animate-fade-in-up delay-100 text-4xl md:text-7xl font-bold text-white mb-6 leading-[1.15] max-w-4xl mx-auto">
            Master Clinical <span class="text-secondary italic">Restorative</span> Care
        </h1>
<!-- Subheading - Reduced Size & Margin -->
<p class="opacity-0 animate-fade-in-up delay-200 text-lg md:text-xl text-white/80 max-w-2xl mx-auto mb-10 font-light leading-relaxed">
            Elevate your medical practice with our world-renowned framework for neuro-cognitive rehabilitation and clinical excellence.
        </p>
<!-- Course Summary Boxes - Compact Sizes -->
<div class="opacity-0 animate-fade-in-up delay-300 grid grid-cols-1 md:grid-cols-3 gap-4 max-w-4xl mx-auto mb-10">
<div class="hero-glass p-4 rounded-xl flex flex-col items-center justify-center text-white group hover:bg-white/20 transition-all duration-300">
<span class="text-secondary-container mb-1.5 material-symbols-outlined text-3xl">payments</span>
<p class="text-[10px] uppercase tracking-widest opacity-60 mb-0.5">Tuition Fee</p>
<p class="text-2xl font-bold font-headline">$1,299 <span class="text-xs font-body font-normal opacity-40 line-through ml-1">$1,999</span></p>
</div>
<div class="hero-glass p-4 rounded-xl flex flex-col items-center justify-center text-white group hover:bg-white/20 transition-all duration-300">
<span class="text-secondary-container mb-1.5 material-symbols-outlined text-3xl">schedule</span>
<p class="text-[10px] uppercase tracking-widest opacity-60 mb-0.5">Duration</p>
<p class="text-2xl font-bold font-headline">4 Intensive Days</p>
</div>
<div class="hero-glass p-4 rounded-xl flex flex-col items-center justify-center text-white group hover:bg-white/20 transition-all duration-300">
<span class="text-secondary-container mb-1.5 material-symbols-outlined text-3xl">groups</span>
<p class="text-[10px] uppercase tracking-widest opacity-60 mb-0.5">Limited Cohort</p>
<p class="text-2xl font-bold font-headline">24 Seats Only</p>
</div>
</div>
<!-- CTAs - Compact Padding -->
<div class="opacity-0 animate-fade-in-up delay-400 flex flex-col sm:flex-row justify-center gap-4">
<button class="bg-secondary text-primary px-8 py-4 rounded-lg font-bold text-base shadow-xl hover:scale-105 transition-all flex items-center justify-center gap-2 group">
                Reserve Your Seat Now
                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
<button class="bg-transparent border border-white/30 text-white px-8 py-4 rounded-lg font-bold text-base hover:bg-white/10 transition-all">
                Download Prospectus
            </button>
</div>
</div>
</header>
<!-- Trust Bar -->
<section class="bg-white py-10 border-b border-outline-variant/20 relative z-30">
<div class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
<div class="flex flex-col items-center text-center">
<span class="text-3xl font-bold text-primary font-headline">500+</span>
<span class="text-[9px] text-on-surface-variant uppercase tracking-[0.2em] font-bold mt-1.5">Specialists Trained</span>
</div>
<div class="flex flex-col items-center text-center">
<span class="text-3xl font-bold text-primary font-headline">12+</span>
<span class="text-[9px] text-on-surface-variant uppercase tracking-[0.2em] font-bold mt-1.5">Global Accreditations</span>
</div>
<div class="flex flex-col items-center text-center">
<span class="text-3xl font-bold text-primary font-headline">100%</span>
<span class="text-[9px] text-on-surface-variant uppercase tracking-[0.2em] font-bold mt-1.5">Success Metrics</span>
</div>
<div class="flex flex-col items-center text-center">
<span class="text-3xl font-bold text-primary font-headline">CPD</span>
<span class="text-[9px] text-on-surface-variant uppercase tracking-[0.2em] font-bold mt-1.5">Verified Content</span>
</div>
</div>
</div>
</section>
<!-- Why This Course (Grid) -->
<section class="py-20 bg-surface relative">
<div class="max-w-7xl mx-auto px-8">
<div class="mb-14 text-center">
<h2 class="text-4xl font-bold text-primary mb-4">Core Educational Pillars</h2>
<div class="h-1.5 w-16 bg-secondary mx-auto"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Grid Card 01 -->
<div class="bg-surface-container-lowest p-8 rounded-xl ghost-border editorial-shadow hover:shadow-2xl transition-all duration-300">
<span class="text-secondary font-bold text-2xl mb-4 block opacity-40">01</span>
<h3 class="text-xl font-bold mb-3 text-primary">Diagnostic Precision</h3>
<p class="text-on-surface-variant text-sm leading-relaxed">Bridge the gap between generic symptoms and targeted clinical interventions using our proprietary neuro-mapping tools.</p>
</div>
<!-- Grid Card 02 -->
<div class="bg-surface-container-lowest p-8 rounded-xl ghost-border editorial-shadow hover:shadow-2xl transition-all duration-300">
<span class="text-secondary font-bold text-2xl mb-4 block opacity-40">02</span>
<h3 class="text-xl font-bold mb-3 text-primary">Restorative Flow</h3>
<p class="text-on-surface-variant text-sm leading-relaxed">Implement a seamless workflow that balances pharmacological support with neuro-cognitive restoration techniques.</p>
</div>
<!-- Grid Card 03 -->
<div class="bg-surface-container-lowest p-8 rounded-xl ghost-border editorial-shadow hover:shadow-2xl transition-all duration-300">
<span class="text-secondary font-bold text-2xl mb-4 block opacity-40">03</span>
<h3 class="text-xl font-bold mb-3 text-primary">Evidence-Based</h3>
<p class="text-on-surface-variant text-sm leading-relaxed">Every module is backed by 15+ years of clinical research and published peer-reviewed academic studies.</p>
</div>
<!-- Grid Card 04 -->
<div class="bg-surface-container-lowest p-8 rounded-xl ghost-border editorial-shadow hover:shadow-2xl transition-all duration-300">
<span class="text-secondary font-bold text-2xl mb-4 block opacity-40">04</span>
<h3 class="text-xl font-bold mb-3 text-primary">Patient Retention</h3>
<p class="text-on-surface-variant text-sm leading-relaxed">Learn how to communicate clinical value effectively to increase long-term patient compliance and trust.</p>
</div>
<!-- Grid Card 05 -->
<div class="bg-surface-container-lowest p-8 rounded-xl ghost-border editorial-shadow hover:shadow-2xl transition-all duration-300">
<span class="text-secondary font-bold text-2xl mb-4 block opacity-40">05</span>
<h3 class="text-xl font-bold mb-3 text-primary">Ethical Growth</h3>
<p class="text-on-surface-variant text-sm leading-relaxed">Expand your clinic's therapeutic offerings without compromising the core integrity of patient care.</p>
</div>
<!-- Grid Card 06 -->
<div class="bg-surface-container-lowest p-8 rounded-xl ghost-border editorial-shadow hover:shadow-2xl transition-all duration-300">
<span class="text-secondary font-bold text-2xl mb-4 block opacity-40">06</span>
<h3 class="text-xl font-bold mb-3 text-primary">Global Standards</h3>
<p class="text-on-surface-variant text-sm leading-relaxed">Align your practice with the latest international protocols in restorative mindcare and clinical wellness.</p>
</div>
</div>
</div>
</section>
<!-- Career Transformation -->
<section class="py-24 bg-surface-container-low overflow-hidden">
<div class="max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
<div class="order-2 md:order-1 relative">
<div class="absolute -top-4 -left-4 w-24 h-24 bg-secondary-container/30 rounded-full blur-2xl"></div>
<img class="rounded-2xl shadow-2xl relative z-10" data-alt="a doctor in a clean white coat looking confidently at a digital medical chart with soft natural window lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPx35c6lQc9fjeskIYos6MFKrq9ZTa3NwKD19jvsgl6SxSxdyDJsoajdy2d5CcQBFVrneiqoXo-jEEdYa67FbVbyha7eDOTo9GxZ-sMpdvndEj1KyasHBljptoPJrObcnh4YcDNT5pxPSwkb_Ykpk6AafjAdfpfek1dbu_Fm-14oYQm8BmlLZ-U31trp1BMv3_Pv9J8FDwRicgXhRulyv17kerwtggOD3Vhmc_IGIkYO8o5xuNBDvWqwR3ur8cwWoklgJIAhS2RcQf"/>
<div class="absolute -bottom-4 -right-4 w-32 h-32 bg-primary/10 rounded-full blur-3xl"></div>
</div>
<div class="order-1 md:order-2">
<h2 class="text-4xl md:text-5xl font-bold text-primary mb-8">The Professional Shift</h2>
<div class="space-y-8 text-on-surface-variant text-lg leading-relaxed">
<p>Transition from a standard practitioner to a recognized authority in restorative mindcare. This course fundamentally shifts how you perceive and treat complex cognitive health.</p>
<div class="border-l-4 border-secondary pl-8 py-6 bg-white rounded-r-2xl shadow-sm">
<p class="text-xl italic font-headline text-primary leading-relaxed">"The curriculum provided me with a structured approach I could implement the very next day. My clinical outcomes improved significantly within the first month."</p>
</div>
<p>Gain the confidence to handle complex cases, command higher consultation value, and lead your community toward better outcomes.</p>
</div>
</div>
</div>
</section>
<!-- 4-Day Curriculum -->
<section class="py-24 bg-surface">
<div class="max-w-4xl mx-auto px-8">
<div class="text-center mb-16">
<h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">4-Day Intensive Curriculum</h2>
<p class="text-on-surface-variant text-lg">A deep dive into clinical excellence across 96 hours of immersive learning.</p>
</div>
<div class="space-y-4">
<!-- Day 1 -->
<div class="bg-white rounded-2xl ghost-border p-8 shadow-sm group hover:border-secondary transition-colors">
<div class="flex justify-between items-center cursor-pointer">
<div class="flex items-center gap-6">
<span class="w-14 h-14 rounded-xl bg-primary flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-primary/20">01</span>
<h3 class="text-2xl font-bold text-primary">Foundations of Neuro-Restorative Logic</h3>
</div>
<span class="material-symbols-outlined text-on-surface-variant group-hover:text-secondary transition-colors">expand_more</span>
</div>
<div class="mt-8 pl-20 space-y-4 text-on-surface-variant border-l-2 border-secondary/20 ml-7">
<p class="flex items-center gap-3"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Introduction to Bio-Psycho-Social Mapping</p>
<p class="flex items-center gap-3"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Understanding the Neuroplasticity Threshold</p>
<p class="flex items-center gap-3"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Baseline Diagnostic Standards &amp; KPIs</p>
</div>
</div>
<!-- Day 2 -->
<div class="bg-white rounded-2xl ghost-border p-8 shadow-sm group hover:border-secondary transition-colors opacity-80">
<div class="flex justify-between items-center cursor-pointer">
<div class="flex items-center gap-6">
<span class="w-14 h-14 rounded-xl bg-primary flex items-center justify-center text-white font-bold text-xl">02</span>
<h3 class="text-2xl font-bold text-primary">The Restorative Protocol Stack</h3>
</div>
<span class="material-symbols-outlined text-on-surface-variant">expand_more</span>
</div>
</div>
<!-- Day 3 -->
<div class="bg-white rounded-2xl ghost-border p-8 shadow-sm group hover:border-secondary transition-colors opacity-80">
<div class="flex justify-between items-center cursor-pointer">
<div class="flex items-center gap-6">
<span class="w-14 h-14 rounded-xl bg-primary flex items-center justify-center text-white font-bold text-xl">03</span>
<h3 class="text-2xl font-bold text-primary">Integrative Mindcare Methodologies</h3>
</div>
<span class="material-symbols-outlined text-on-surface-variant">expand_more</span>
</div>
</div>
<!-- Day 4 -->
<div class="bg-white rounded-2xl ghost-border p-8 shadow-sm group hover:border-secondary transition-colors opacity-80">
<div class="flex justify-between items-center cursor-pointer">
<div class="flex items-center gap-6">
<span class="w-14 h-14 rounded-xl bg-primary flex items-center justify-center text-white font-bold text-xl">04</span>
<h3 class="text-2xl font-bold text-primary">Clinical Implementation &amp; Case Labs</h3>
</div>
<span class="material-symbols-outlined text-on-surface-variant">expand_more</span>
</div>
</div>
</div>
</div>
</section>
<!-- High-Value Bonuses -->
<section class="py-24 bg-primary text-white">
<div class="max-w-7xl mx-auto px-8">
<h2 class="text-4xl md:text-5xl font-bold mb-16 text-center text-white">Enrollment High-Value Bonuses</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-10">
<div class="bg-white/5 border border-white/10 p-10 rounded-2xl flex gap-8 hover:bg-white/10 transition-all group">
<div class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center shrink-0 shadow-lg shadow-secondary/10">
<span class="material-symbols-outlined text-3xl text-primary">menu_book</span>
</div>
<div>
<h3 class="text-2xl font-bold mb-4 text-secondary">Clinical Protocol Manuals</h3>
<p class="text-white/70 leading-relaxed text-lg">A complete set of diagnostic templates, patient worksheets, and implementation guides valued at $499, yours free upon enrollment.</p>
</div>
</div>
<div class="bg-white/5 border border-white/10 p-10 rounded-2xl flex gap-8 hover:bg-white/10 transition-all group">
<div class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center shrink-0 shadow-lg shadow-secondary/10">
<span class="material-symbols-outlined text-3xl text-primary">groups</span>
</div>
<div>
<h3 class="text-2xl font-bold mb-4 text-secondary">1-on-1 Strategy Session</h3>
<p class="text-white/70 leading-relaxed text-lg">A 30-minute private consultation with Dr. Selvakodi to review your clinic's specific integration plan and practice goals.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Meet Your Mentor -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
<div>
<h2 class="text-4xl md:text-5xl font-bold text-primary mb-12">Meet Your Mentor</h2>
<div class="relative">
<div class="absolute -inset-4 bg-secondary/10 rounded-3xl blur-xl"></div>
<img class="rounded-2xl ghost-border mb-10 relative z-10 w-full" data-alt="close up portrait of Dr. Helena Selvakodi, a distinguished South Asian female professor in academic attire, warm lighting, study background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7slQFPgZpaMHDAbHeCh34F5tMUcsm8akBr9FDeZaE_CFmXymDWk_qs05jB9kvgygrqYNUwxsjxnJzYWNtvUHNBjlRxRmdx1394ew4HD-NbKjLOTDgYgWFT0Rl2kcdEEsRragvbE7GgUZUWdqOJHnU4DQg2Qy7trLzJW-jrGf8tNlycruACtGW9okXmYphz3j-swiccPVKGscAhLl2rRQ30q6-xQV8F0AbUY5Ypzw3FFsr-7oQz8UiRDLqHnVCHOmkBQjcpNj84R2A"/>
</div>
<div class="flex gap-4">
<div class="bg-secondary/20 px-6 py-2.5 rounded-lg text-primary font-bold text-sm tracking-wide">MD, Psychiatry</div>
<div class="bg-secondary/20 px-6 py-2.5 rounded-lg text-primary font-bold text-sm tracking-wide">PhD, Neuro-Restoration</div>
</div>
</div>
<div class="space-y-8">
<h3 class="text-4xl font-bold text-primary font-headline">Dr. Helena Selvakodi</h3>
<p class="text-xl text-on-surface-variant leading-relaxed">With over 25 years of academic and clinical experience, Dr. Selvakodi has pioneered the "Anandham Framework" for cognitive healing. Her research has been featured in top medical journals and she has served as a lead consultant for global mental health initiatives.</p>
<ul class="space-y-5">
<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary text-2xl">verified</span>
<span class="text-on-surface-variant text-lg">Author of "The Restorative Mind: A Clinical Guide"</span>
</li>
<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary text-2xl">verified</span>
<span class="text-on-surface-variant text-lg">Former Chair of Mindcare Research Council</span>
</li>
<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary text-2xl">verified</span>
<span class="text-on-surface-variant text-lg">Fellow of the International Restorative Academy</span>
</li>
</ul>
<div class="pt-10">
<img class="h-20 opacity-40 grayscale" data-alt="a subtle gold foil embossed academic seal on high quality parchment paper" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAA5xD-2R493aVFopOiE3Epg66ownqcKptFQ_mL0NEA9KtM1gOLSRfizxOaStB5VDKyxOsWgiV9KEVuVKgzHlnl-AmUi6SGVffrZrMBDlhUj-6guQfAz75Ml8f4ummV2liyNpJNUamRgCUspx6GUuUtlwnmaM6xP_Mq5TG3Oc6oFaDVVpgsBz8LRVphNIglsc6L7Q1ZuPDksyEqO7vdfSMHMPstgCYiyOCebXx0mOETQHtPrq7zB50wOt09QZzmyF8NB3vHlbijxSNY"/>
</div>
</div>
</div>
</div>
</section>
<!-- Student Perspectives -->
<section class="py-24 bg-primary-container/10">
<div class="max-w-7xl mx-auto px-8">
<h2 class="text-4xl md:text-5xl font-bold text-primary mb-20 text-center">Practitioner Perspectives</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-10">
<!-- Testimonial 1 -->
<div class="bg-white p-10 rounded-2xl ghost-border editorial-shadow italic hover:-translate-y-2 transition-transform duration-300">
<p class="text-on-surface-variant text-lg mb-10 leading-relaxed">"The level of clinical depth provided here is unparalleled. It's transformed not just my practice, but my entire philosophy of care. The ROI was immediate."</p>
<div class="flex items-center gap-5 not-italic border-t border-outline-variant/10 pt-8">
<div class="w-14 h-14 rounded-full overflow-hidden bg-surface-dim ring-2 ring-secondary/20">
<img class="w-full h-full object-cover" data-alt="profile photo of a smiling professional man in a business casual shirt, clean studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFVcImVJGXMSIoUzs0cZlAjfBHlVLtNUvtv2Rb6W-NyM4Cy2F64lMlZtk5ms9sMkZY8jtJgR2a3fvyn9yD_48koquG514kym1oy-4vTw4ZTq5vYF_ff-HhsdTYEoXxEKZRPrio-ypFHFljGQnW3z90_fFYb87TH8QvS6vvrWobqt9-xFmpoGajlVS3z2w0QmV5RG7_B5cS-waLF_7HkqaLTOsaIhsbiEv5I87KO009IS3KDVVF8EcSIdDBVf0xXgLkVnnxoPAV8zA7"/>
</div>
<div>
<p class="font-bold text-primary text-lg">Dr. Rajesh Kumar</p>
<p class="text-xs text-on-surface-variant uppercase tracking-widest font-semibold">Clinical Psychologist</p>
</div>
</div>
</div>
<!-- Testimonial 2 -->
<div class="bg-white p-10 rounded-2xl ghost-border editorial-shadow italic hover:-translate-y-2 transition-transform duration-300">
<p class="text-on-surface-variant text-lg mb-10 leading-relaxed">"Finally, a course that respects the clinical reality of our daily work while pushing us toward better standards. Truly world-class instruction."</p>
<div class="flex items-center gap-5 not-italic border-t border-outline-variant/10 pt-8">
<div class="w-14 h-14 rounded-full overflow-hidden bg-surface-dim ring-2 ring-secondary/20">
<img class="w-full h-full object-cover" data-alt="profile photo of a confident woman in medical scrubs, professional environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuClHTH_exxhFOlmVhvTJUCg2dVViz4aUewFZ8DUR0YCGkWVF1bUCI6jyOTlegWisgsJNBFRHGGA0Kw7YpnnMdqSgojVggiQN28gEnqt4AsTRmMEWuf5b5fjP_ujWfN8UQG-ctkN19U0ENoEsXMLxPfv6DaZM80zB_Qei8nDh6RY1rLz62XYxjVLV9AK3GBr1rIaIeHv5eTWpIcASELmFHaXj4gieEb6u6Vr89E3d0nZTvJ_mAu6124rzy5h7QJjeUTZgQF01dOfKP3n"/>
</div>
<div>
<p class="font-bold text-primary text-lg">Dr. Sarah Thompson</p>
<p class="text-xs text-on-surface-variant uppercase tracking-widest font-semibold">General Practitioner</p>
</div>
</div>
</div>
<!-- Testimonial 3 -->
<div class="bg-white p-10 rounded-2xl ghost-border editorial-shadow italic hover:-translate-y-2 transition-transform duration-300">
<p class="text-on-surface-variant text-lg mb-10 leading-relaxed">"The 4-day intensive format was perfect. Dense, useful, and immediately applicable. Dr. Selvakodi is a visionary in neuro-rehabilitation."</p>
<div class="flex items-center gap-5 not-italic border-t border-outline-variant/10 pt-8">
<div class="w-14 h-14 rounded-full overflow-hidden bg-surface-dim ring-2 ring-secondary/20">
<img class="w-full h-full object-cover" data-alt="profile photo of a man in an academic suit, thoughtful expression, library background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtczi0eVVztanYGxaIoRzseoAEKWh4W9L2QH3c30vEG4_Girm4SJouiazuho2UTs8iygc1HQPNInk_MFJvYBHpc3in9kXceG7UHTLwgJGkjWpaQSt3w2bHQLqZ3-j262jcHxYIfMFW6ATHc5YE9WPKTJnpA9UL3nAsDOIma73H_g6nYAk8R5cifM4IiwJRRGSUIZAbCurO1SUsuW8aSwMkx_qyFC6ZivbAAtoEa2OuZujKINe6dGcC_L002HJEP_EwmUJFc7nDbyMq"/>
</div>
<div>
<p class="font-bold text-primary text-lg">Prof. Anil Mehta</p>
<p class="text-xs text-on-surface-variant uppercase tracking-widest font-semibold">Neurology Researcher</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- FAQ -->
<section class="py-24 bg-white">
<div class="max-w-3xl mx-auto px-8">
<h2 class="text-4xl font-bold text-primary mb-16 text-center">Frequently Asked Questions</h2>
<div class="space-y-6">
<div class="border-b border-outline-variant/20 pb-6">
<button class="w-full flex justify-between items-center text-left py-4 focus:outline-none group">
<span class="font-bold text-primary text-xl group-hover:text-secondary transition-colors">Is this course certified for CPD/CME credits?</span>
<span class="material-symbols-outlined text-secondary">add</span>
</button>
</div>
<div class="border-b border-outline-variant/20 pb-6">
<button class="w-full flex justify-between items-center text-left py-4 focus:outline-none group">
<span class="font-bold text-primary text-xl group-hover:text-secondary transition-colors">Who is the ideal candidate for this Academy?</span>
<span class="material-symbols-outlined text-secondary">add</span>
</button>
</div>
<div class="border-b border-outline-variant/20 pb-6">
<button class="w-full flex justify-between items-center text-left py-4 focus:outline-none group">
<span class="font-bold text-primary text-xl group-hover:text-secondary transition-colors">Are there any prerequisites for enrollment?</span>
<span class="material-symbols-outlined text-secondary">add</span>
</button>
</div>
<div class="border-b border-outline-variant/20 pb-6">
<button class="w-full flex justify-between items-center text-left py-4 focus:outline-none group">
<span class="font-bold text-primary text-xl group-hover:text-secondary transition-colors">What is the post-course support structure?</span>
<span class="material-symbols-outlined text-secondary">add</span>
</button>
</div>
</div>
</div>
</section>

<!-- Sticky Footer CTA -->
<div class="fixed bottom-0 left-0 w-full bg-white/95 backdrop-blur-xl py-4 px-8 border-t border-outline-variant/20 shadow-[0_-15px_40px_rgba(0,37,85,0.15)] z-[110] transform translate-y-0 transition-transform">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
<div class="hidden md:block">
<p class="text-primary font-bold text-xl font-headline tracking-tight">Master Clinical Restorative Care</p>
<div class="flex items-center gap-2 mt-0.5">
<span class="inline-block w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span>
<p class="text-primary/70 text-[10px] font-bold uppercase tracking-widest">Enrollment closing in 48 hours • Only 4 spots left</p>
</div>
</div>
<div class="flex items-center gap-8">
<div class="text-right hidden sm:block">
<p class="text-slate-400 line-through text-xs">$1,999</p>
<p class="text-primary font-bold text-2xl">$1,299</p>
</div>
<button class="bg-secondary text-primary font-bold px-10 py-3 rounded-lg shadow-lg shadow-secondary/20 hover:scale-105 active:scale-95 transition-all w-full md:w-auto text-base">
                Secure My Seat
            </button>
</div>
</div>
</div>
<!-- Extra Spacing for Sticky CTA -->
<div class="h-24"></div>

@endsection
