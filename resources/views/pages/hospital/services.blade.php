@extends('layouts.hosp')

@section('content')

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:opsz,ital,wght@6..72,0,200..800;6..72,1,200..800&amp;family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .serif-quote::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background-color: #755b00;
        }
    </style>
<!-- Tailwind Configuration -->
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "on-error": "#ffffff",
              "primary-fixed-dim": "#acc7ff",
              "on-primary-fixed-variant": "#28467b",
              "error": "#ba1a1a",
              "primary": "#002555",
              "on-error-container": "#93000a",
              "tertiary-fixed": "#cae7f6",
              "on-tertiary-fixed": "#001f2a",
              "tertiary-container": "#25404c",
              "on-primary-container": "#8aa7e1",
              "surface-dim": "#d8dadd",
              "on-surface-variant": "#43474f",
              "outline": "#747780",
              "primary-fixed": "#d8e2ff",
              "tertiary": "#0c2a35",
              "surface-container-lowest": "#ffffff",
              "surface-bright": "#f7f9fc",
              "on-primary-fixed": "#001a41",
              "surface-container-high": "#e6e8eb",
              "secondary-container": "#fccc38",
              "surface-container-low": "#f2f4f7",
              "tertiary-fixed-dim": "#aecbda",
              "secondary": "#755b00",
              "on-secondary": "#ffffff",
              "secondary-fixed": "#ffdf90",
              "on-secondary-fixed-variant": "#584400",
              "surface-container-highest": "#e0e3e6",
              "background": "#f7f9fc",
              "inverse-surface": "#2d3133",
              "inverse-on-surface": "#eff1f4",
              "on-secondary-container": "#6f5600",
              "inverse-primary": "#acc7ff",
              "on-secondary-fixed": "#241a00",
              "surface": "#f7f9fc",
              "primary-container": "#1b3b6f",
              "surface-container": "#eceef1",
              "on-tertiary-container": "#8fabba",
              "on-tertiary": "#ffffff",
              "surface-tint": "#415e94",
              "surface-variant": "#e0e3e6",
              "outline-variant": "#c4c6d1",
              "on-tertiary-fixed-variant": "#2f4a57",
              "on-background": "#191c1e",
              "on-primary": "#ffffff",
              "error-container": "#ffdad6",
              "on-surface": "#191c1e",
              "secondary-fixed-dim": "#f0c12c"
            },
            fontFamily: {
              "headline": ["Newsreader"],
              "body": ["Work Sans"],
              "label": ["Work Sans"]
            },
            borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
          },
        },
      }
    </script>
<!-- Hero Section -->
<header class="relative overflow-hidden bg-primary py-24 md:py-32">
<div class="absolute inset-0 opacity-20 overflow-hidden">
<img alt="Zen-like environment" class="w-full h-full object-cover" data-alt="Soft focused image of a peaceful mountain lake at dawn with morning mist and calm blue waters reflecting the sky" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXEtXNNo_RDkEqXtWu54D9v-xjPaL6LCimN1f1T7ZliPPZWi_Lgb6DwyuwmYugi5RTHzA2axuFu4103lN8ZDbgAr1FwmOMk88b4P88AhBC1bjNtCg00MUlDMvPDvKLY0FA_LP7drzkJhWmSJFCI1_rsc48Zsm6B4SOvDOIkY5GF0_bhWSh3B2w09ynm1qqAoLpKQ6W7clcYJa2DfD4vOdw_1bY8hycprNEzgpmZehrEulRe7zEryDkpUOFUt99QubU5g59Qz0nIb4n"/>
</div>
<div class="relative max-w-7xl mx-auto px-8">
<div class="max-w-3xl">
<span class="text-secondary font-semibold uppercase tracking-widest text-sm mb-4 block">Clinical Excellence</span>
<h1 class="font-headline text-5xl md:text-7xl text-white leading-tight mb-6">Our Specialized Care Services</h1>
<p class="text-on-primary-container text-lg md:text-xl font-light leading-relaxed mb-8">
                        Comprehensive mental health solutions tailored to individual needs, combining evidence-based clinical practice with compassionate human connection.
                    </p>
<div class="flex gap-4">
<button class="bg-secondary text-white px-8 py-3 rounded-xl font-medium hover:bg-[#8a6c00] transition-colors">View All Disciplines</button>
</div>
</div>
</div>
</header>
<!-- Perspective Quote -->
<section class="bg-surface py-16">
<div class="max-w-4xl mx-auto px-8 text-center">
<div class="relative bg-surface-container-lowest p-12 rounded-xl shadow-sm border border-outline-variant/15 serif-quote">
<p class="font-headline text-2xl italic text-primary leading-relaxed">
                        "Healing is not a linear path; it is a collaborative journey of restoring balance to the mind, body, and spirit within a sanctuary of trust."
                    </p>
<cite class="block mt-6 text-on-surface-variant font-medium">— Clinical Board, Anandham Mindcare Foundation</cite>
</div>
</div>
</section>
<!-- Services Grid -->
<section class="bg-surface py-24 px-8">
<div class="max-w-7xl mx-auto">
<div class="mb-16">
<h2 class="font-headline text-4xl text-primary mb-4">Therapeutic Domains</h2>
<div class="w-24 h-1 bg-secondary"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Service 1 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="no_drinks">no_drinks</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Deaddiction Services</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Specialized recovery programs for alcohol, substance abuse, and modern digital/internet dependencies.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">Explore Program <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
<!-- Service 2 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="mindfulness">mindfulness</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Schizophrenia Care</h3>
<h4 class="text-xs uppercase tracking-widest text-secondary font-bold mb-3">Clinical Management</h4>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Long-term rehabilitation and acute symptom management with a focus on functional independence.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">Care Details <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
<!-- Service 3 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="cloud">cloud</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Depression &amp; Stress</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Integrative therapy for mood disorders and chronic stress using contemporary psychological frameworks.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">Our Approach <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
<!-- Service 4 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="balance">balance</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Bipolar Disorder</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Mood stabilization strategies and psycho-education for patients and families for lifelong wellness.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">Therapy Plan <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
<!-- Service 5 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="repeat">repeat</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">OCD Management</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Evidence-based treatment for Obsessive Compulsive Disorder including Exposure and Response Prevention.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">Interventions <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
<!-- Service 6 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="air">air</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Anxiety Disorders</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Structured care for GAD, social anxiety, and panic disorders through cognitive restructuring.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">View Options <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
<!-- Service 7 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="child_care">child_care</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Childhood Disorders</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Pediatric mental health focusing on developmental, behavioral, and learning challenges.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">Pediatric Care <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
<!-- Service 8 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="person">person</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Personality Disorders</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Complex psychotherapy for personality regulation and interpersonal relationship building.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">Learn More <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
<!-- Service 9 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="quiz">quiz</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">IQ Assessment</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Standardized cognitive evaluation and intellectual profiling for clinical and academic purposes.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">Book Assessment <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
<!-- Service 10 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="bedtime">bedtime</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Sleep Disorders</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Diagnosing and treating insomnia, sleep apnea, and circadian rhythm issues for better cognitive health.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">Restoration <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
<!-- Service 11 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="diversity_3">diversity_3</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Family Counseling</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Strengthening interpersonal dynamics through guided mediation and transgenerational therapy.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">Family Care <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
<!-- Service 12 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="vital_signs">vital_signs</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Bio Feedback</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Advanced physiological monitoring for stress reduction and self-regulation training.</p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="#">Clinical Data <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></a>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="bg-primary-container py-24 px-8 overflow-hidden relative">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between relative z-10">
<div class="md:w-1/2 mb-12 md:mb-0">
<h2 class="font-headline text-4xl text-white mb-6">Need Immediate Clinical Assistance?</h2>
<p class="text-on-primary-container text-lg mb-8">Our expert panel is available for emergency psychiatric evaluations and crisis intervention. Start your healing process today.</p>
<div class="flex flex-wrap gap-4">
<button class="bg-secondary text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 shadow-lg hover:bg-[#8a6c00] transition-all">
<span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span> Book Appointment
                        </button>
<button class="border border-outline-variant/30 text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 hover:bg-white/10 transition-all">
<span class="material-symbols-outlined" data-icon="call">call</span> Emergency Line
                        </button>
</div>
</div>
<div class="md:w-1/3 relative">
<div class="aspect-square rounded-full border-[20px] border-white/5 absolute -top-12 -right-12 animate-pulse"></div>
<img alt="Therapist office" class="rounded-3xl shadow-2xl relative z-10" data-alt="Modern therapist's consultation room with warm wooden furniture, soft textiles, and a large window overlooking green foliage" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDguUBUXqhNy0BxHRoMcSDlJhl-NJIdgJhwyeSTaBnyeHZ1uBqExg3Ela1oC_hxjUqoSNgp5rgxLhvc0Z-IeIMy2KstguGsOlka-PjmxMWDIvHjxwSXCd-WvZvqZYvSWNBxPQ6Btcg2QYDxZWwys2oL0_xN4jYKgp1UbxkdIak-ifFQ-XX4H6cawaUTa9DDtHxulEDrxcGDrbrachlNh_rmmSJ-glLCyXrti5VuEjL-p-TTQsJfWhnY_mR_AbFtL2WAxdHBJklI9AsF"/>
</div>
</div>
</section>

@endsection