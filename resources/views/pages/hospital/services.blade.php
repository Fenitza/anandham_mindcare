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
        <span class="material-symbols-outlined text-3xl">psychology</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Behaviour Modification</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Structured therapy to identify and change maladaptive behaviours using evidence-based behavioural techniques.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'behaviour-modification']) }}">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>

<!-- Service 2 -->


<!-- Service 3 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
    <div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
        <span class="material-symbols-outlined text-3xl">pregnant_woman</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Perinatal Psychiatry</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Mental health care during pregnancy and the postpartum period for mothers and families.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'perinatal-psychiatry']) }} ">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>

<!-- Service 4 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
    <div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
        <span class="material-symbols-outlined text-3xl">neurology</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Dementia Management</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Comprehensive assessment, treatment and caregiver support for dementia and cognitive decline.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'dementia-management']) }}   ">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>

<!-- Service 5 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
    <div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
        <span class="material-symbols-outlined text-3xl">diversity_3</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Family Therapy</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Helping families improve communication, resolve conflicts and strengthen relationships.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'family-therapy']) }}">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>

<!-- Service 6 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
    <div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
        <span class="material-symbols-outlined text-3xl">favorite</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Premarital / Marital Counseling</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Professional counselling to build healthy relationships and resolve marital concerns.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'premarital-marital-counseling']) }}">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>

<!-- Service 7 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
    <div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
        <span class="material-symbols-outlined text-3xl">shield</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Fear Management</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Therapeutic care for excessive fears, phobias and anxiety through structured interventions.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'fear-management']) }}">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>

<!-- Service 8 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
    <div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
        <span class="material-symbols-outlined text-3xl">health_and_safety</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Suicidal Management</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Immediate crisis intervention, safety planning and compassionate psychiatric support.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'suicidal-management']) }}">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>

<!-- Service 9 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
    <div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
        <span class="material-symbols-outlined text-3xl">self_improvement</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Stress Management</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Practical strategies and therapy to reduce stress and improve emotional resilience.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'stress-management']) }}">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>

<!-- Service 10 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
    <div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
        <span class="material-symbols-outlined text-3xl">groups</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Child & Adolescent Psychiatry</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Specialized psychiatric care for children and adolescents facing emotional and behavioural challenges.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'child-adolescent-psychiatry']) }}">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>

<!-- Service 11 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
    <div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
        <span class="material-symbols-outlined text-3xl">no_drinks</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Adult Psychiatry (De-addiction)</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Comprehensive treatment for alcohol dependence with counselling and relapse prevention.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'adult-psychiatry']) }}">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>

<!-- Service 12 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
    <div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
        <span class="material-symbols-outlined text-3xl">medication</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Drug De-addiction</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Structured rehabilitation, detoxification and recovery support for substance dependence.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'alcohol-deaddiction']) }}">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>

<!-- Service 13 -->
<div class="group bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
    <div class="w-12 h-12 mb-6 text-secondary bg-surface-container-low rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-white transition-colors">
        <span class="material-symbols-outlined text-3xl">language</span>
    </div>
    <h3 class="font-headline text-2xl text-primary mb-3">Internet & Gambling De-addiction</h3>
    <p class="text-on-surface-variant text-sm leading-relaxed mb-6">Evidence-based treatment for behavioural addictions, improving self-control and healthy habits.</p>
    <a class="text-secondary font-semibold flex items-center gap-2 group-hover:underline" href="{{ route('service.show', ['service' => 'internet-gambling-deaddiction']) }}">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
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
<a href="{{ route('user.appointments.list') }}">
<button class="bg-secondary text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 shadow-lg hover:bg-[#8a6c00] transition-all">
<span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span> Book Appointment
                        </button>
</a>
<a href="{{ route('contact-us') }}">
<button class="border border-outline-variant/30 text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 hover:bg-white/10 transition-all">
<span class="material-symbols-outlined" data-icon="call">call</span> Contact Us
                        </button>
</a>
</div>

</div>
<div class="md:w-1/3 relative">
<div class="aspect-square rounded-full border-[20px] border-white/5 absolute -top-12 -right-12 animate-pulse"></div>
<img alt="Therapist office" class="rounded-3xl shadow-2xl relative z-10" data-alt="Modern therapist's consultation room with warm wooden furniture, soft textiles, and a large window overlooking green foliage" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDguUBUXqhNy0BxHRoMcSDlJhl-NJIdgJhwyeSTaBnyeHZ1uBqExg3Ela1oC_hxjUqoSNgp5rgxLhvc0Z-IeIMy2KstguGsOlka-PjmxMWDIvHjxwSXCd-WvZvqZYvSWNBxPQ6Btcg2QYDxZWwys2oL0_xN4jYKgp1UbxkdIak-ifFQ-XX4H6cawaUTa9DDtHxulEDrxcGDrbrachlNh_rmmSJ-glLCyXrti5VuEjL-p-TTQsJfWhnY_mR_AbFtL2WAxdHBJklI9AsF"/>
</div>
</div>
</section>

<!-- List of Programs -->
<section class="bg-surface py-20 px-6">

    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-16">
            <span class="text-secondary uppercase tracking-[0.3em] text-xs font-semibold">
                Community Outreach
            </span>

            <h2 class="text-4xl md:text-5xl font-serif text-primary mt-4">
                Awareness Programs & Community Initiatives
            </h2>
        </div>

        <!-- Years -->
        <div class="flex justify-center gap-6 mb-12">

            <button class="year-btn active" data-year="2024">2024</button>

            <button class="year-btn" data-year="2025">2025</button>

            <button class="year-btn" data-year="2026">2026</button>

        </div>
        <!-- 2024 -->
        <div class="year-content active" id="year-2024">

            <!-- ALL 2024 CARDS HERE -->
              <!-- Program 1 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    Awareness about Psychological Disorders & Well-being
                </h3>
                <span class="text-secondary text-sm font-medium">
                    5 February 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Conducted an awareness programme on psychological disorders and mental well-being for MGNREGS village workers at Thondamuthur.
            </p>
        </div>

        <!-- Program 2 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    Prevention of Alcohol & Drug Addiction
                </h3>
                <span class="text-secondary text-sm font-medium">
                    20 February 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Motivational awareness session for students and parents at Mettupalayam by Dr. M. Helena Selvakodi focusing on alcohol and drug de-addiction.
            </p>
        </div>

        <!-- Program 3 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    Parent Management Training (PMT)
                </h3>
                <span class="text-secondary text-sm font-medium">
                    February 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Conducted Parent Management Training for parents and caregivers of special children at Dr. APJ Abdul Kalam Dream School, Ramnagar, covering behaviour modification, positive reinforcement, contingency management, token economy, time-out techniques, parenting strategies, relaxation techniques and monitoring internet activities of ADHD children.
            </p>
        </div>

        <!-- Program 4 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    Mental Health Awareness – Tribal Settlement
                </h3>
                <span class="text-secondary text-sm font-medium">
                    15 March 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Conducted a community mental health awareness programme for residents of the tribal settlement area at Kinathukadavu.
            </p>
        </div>

        <!-- Program 5 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    Mental Health Awareness – Chinnavedampatti
                </h3>
                <span class="text-secondary text-sm font-medium">
                    18 March 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Conducted a public mental health awareness programme at Chinnavedampatti.
            </p>
        </div>

        <!-- Program 6 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    Mental Health Awareness – Kovilpalayam
                </h3>
                <span class="text-secondary text-sm font-medium">
                    21 March 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Delivered a public awareness programme on mental health at Kovilpalayam.
            </p>
        </div>

        <!-- Program 7 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    International Day Against Drug Abuse & Illicit Trafficking
                </h3>
                <span class="text-secondary text-sm font-medium">
                    26 July 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Awareness programme for Carmel Gardens School students in collaboration with Don Bosco Anbu Illam and the Child Protection Unit, featuring speeches, role plays and skits on the harmful effects of substance abuse.
            </p>
        </div>

        <!-- Program 8 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    Free Multi-Speciality Medical Camp
                </h3>
                <span class="text-secondary text-sm font-medium">
                    3–5 July 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Participated in a free multi-speciality medical camp at RTU (Reaching the Unreached), Kallupatti, Theni District, benefiting over 1,100 students.
            </p>
        </div>

        <!-- Program 9 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    Mental Health Awareness for Government School Students
                </h3>
                <span class="text-secondary text-sm font-medium">
                    7 August 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Conducted a mental health awareness programme for nearly 1,000 students at Government Higher Secondary School, Ashokapuram.
            </p>
        </div>

        <!-- Program 10 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    Mental Health Awareness – Model School
                </h3>
                <span class="text-secondary text-sm font-medium">
                    9 August 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Delivered a mental health awareness programme for students of Model School.
            </p>
        </div>

        <!-- Program 11 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    Parenting & Substance Abuse Awareness
                </h3>
                <span class="text-secondary text-sm font-medium">
                    24 August 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Conducted awareness on mental health, parenting styles, substance abuse prevention and de-addiction for parents and students of Municipal Government Higher Secondary School, Selvapuram.
            </p>
        </div>

        <!-- Program 12 -->
        <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between flex-wrap gap-2 mb-3">
                <h3 class="font-semibold text-primary text-lg">
                    Maternal Mental Health Awareness
                </h3>
                <span class="text-secondary text-sm font-medium">
                    19 September 2024
                </span>
            </div>
            <p class="text-on-surface-variant leading-7">
                Conducted a mental health awareness programme for antenatal mothers and their family members, highlighting the importance of emotional well-being during pregnancy.
            </p>
        </div>
        <!-- Program 16 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Mental Health Awareness – STAR Special School
        </h3>
        <span class="text-secondary text-sm font-medium">
            8 November 2024
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Mental health awareness programme conducted for students of STAR Special School at St. Anne’s Rehabilitation Centre for differently-abled children.
    </p>
</div>

        </div>

        <!-- 2025 -->
        <div class="year-content hidden" id="year-2025">

            <!-- ALL 2025 CARDS HERE -->
             <!-- Program 17 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Maternal Mental Health Awareness
        </h3>
        <span class="text-secondary text-sm font-medium">
            18 February 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Conducted awareness on maternal mental health for antenatal mothers and families at Negamam Block PHC, Coimbatore.
    </p>
</div>

<!-- Program 18 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Mental Health Awareness – Hindusthan College
        </h3>
        <span class="text-secondary text-sm font-medium">
            19 February 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Mental health awareness session for students of Hindusthan College of Engineering, Malumichampatti, Pollachi.
    </p>
</div>

<!-- Program 19 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Women's Mental Health & Sexual Harassment Awareness
        </h3>
        <span class="text-secondary text-sm font-medium">
            20 February 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Delivered a programme on sustaining women's mental health and handling sexual harassment at Government Polytechnic College, Coimbatore.
    </p>
</div>

<!-- Program 20 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Community Mental Health Training for Psychiatry PG Doctors
        </h3>
        <span class="text-secondary text-sm font-medium">
            1 March 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Trained Psychiatry Postgraduate doctors in community mental health through awareness programmes conducted for tribal settlements and tea estate workers at Valparai.
    </p>
</div>

<!-- Program 21 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Geriatric Mental Health Awareness
        </h3>
        <span class="text-secondary text-sm font-medium">
            6 March 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Conducted a geriatric mental health awareness programme at Eeranenjam Government Old Age Home, Coimbatore.
    </p>
</div>

<!-- Program 22 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Mental Health Awareness – De-addiction Rehabilitation Centre
        </h3>
        <span class="text-secondary text-sm font-medium">
            10 March 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Conducted a mental health awareness programme for individuals undergoing rehabilitation in a de-addiction centre.
    </p>
</div>

<!-- Program 23 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Women's Day Mental Health Awareness – SNS College
        </h3>
        <span class="text-secondary text-sm font-medium">
            10 March 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Resource person for Women's Day programme on "Nurturing Mental Health and Inner Peace" at SNS College.
    </p>
</div>

<!-- Program 24 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Women's Day Celebration – Hindustan College
        </h3>
        <span class="text-secondary text-sm font-medium">
            11 March 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Invited as resource person for Women's Day celebration on "Enlightening Minds and Shaping Tomorrow" at Hindustan College.
    </p>
</div>

<!-- Program 25 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Child Mental Health Awareness – CSI Middle School
        </h3>
        <span class="text-secondary text-sm font-medium">
            13 March 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Conducted a child mental health awareness programme for students of CSI Middle School, Mettupalayam.
    </p>
</div>

<!-- Program 26 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Geriatric Mental Health Talk – St. Thomas Home for the Aged
        </h3>
        <span class="text-secondary text-sm font-medium">
            14 March 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        In collaboration with the Ministry of Social Justice & Empowerment, Government of India, and HelpAge India, delivered a talk on geriatric mental health for senior citizens at St. Thomas Home for the Aged, Coimbatore.
    </p>
</div>

<!-- Program 27 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            International Day of Happiness Symposium
        </h3>
        <span class="text-secondary text-sm font-medium">
            20 March 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Celebrated the International Day of Happiness with a symposium on "Happiness and Well-being" under the theme "Caring and Sharing."
    </p>
</div>

<!-- Program 28 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Mental Health Awareness – TNSTC Staff
        </h3>
        <span class="text-secondary text-sm font-medium">
            26 March 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Conducted mental health awareness for TNSTC conductors and drivers from Coimbatore, Nilgiris, Tiruppur, and Erode at Pollachi TNSTC Training Institute.
    </p>
</div>

<!-- Program 29 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Mental Health Awareness – ITI Polytechnic Students
        </h3>
        <span class="text-secondary text-sm font-medium">
            26 April 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Mental health awareness programme conducted for students of ITI Polytechnic Institute, Valparai.
    </p>
</div>

<!-- Program 30 -->
<div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm">
    <div class="flex justify-between flex-wrap gap-2 mb-3">
        <h3 class="font-semibold text-primary text-lg">
            Free Multi-speciality Medical Camp
        </h3>
        <span class="text-secondary text-sm font-medium">
            26 April 2025
        </span>
    </div>
    <p class="text-on-surface-variant leading-7">
        Organized a free multi-speciality medical camp for the public at Periyanaickenpalayam, Coimbatore.
    </p>
</div>


    <!-- 31 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Mental Health Awareness – Thaliyur Community Health Centre</h3>
            <span class="text-secondary text-sm font-medium">16 May 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Mental health awareness programme conducted for the public at Thaliyur Community Health Centre, promoting early identification and timely psychiatric care.
        </p>
    </div>

    <!-- 32 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Drug Abuse & Suicide Prevention Awareness</h3>
            <span class="text-secondary text-sm font-medium">7 July 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Awareness programme at Government Higher Secondary School, Kalapatti focusing on drug abuse prevention, suicide prevention, and personality disorder awareness.
        </p>
    </div>

    <!-- 33 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Student Mental Health Awareness – Annur</h3>
            <span class="text-secondary text-sm font-medium">9 July 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Mental health awareness programme conducted for students of Government Higher Secondary School, Annur.
        </p>
    </div>

    <!-- 34 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Perinatal, Infant & Adolescent Mental Health – Anganwadi Workers</h3>
            <span class="text-secondary text-sm font-medium">17 July 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Awareness programme for Anganwadi workers at Thondamuthur on perinatal, infant, child and adolescent mental health.
        </p>
    </div>

    <!-- 35 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Adolescent Mental Health – 500 Students</h3>
            <span class="text-secondary text-sm font-medium">18 July 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Mental health awareness programme conducted for over 500 students at Pannimadai Government Higher Secondary School.
        </p>
    </div>

    <!-- 36 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Alcoholics Anonymous 13th Anniversary</h3>
            <span class="text-secondary text-sm font-medium">21 July 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Presided over the 13th Annual Anniversary of Alcoholics Anonymous, Mettupalayam, delivering awareness on biopsychosocial factors of addiction, psychopharmacotherapy and integrated psychotherapy models for over 400 participants.
        </p>
    </div>

    <!-- 37 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Mental Health Awareness – Sri Lankan Refugee Camp</h3>
            <span class="text-secondary text-sm font-medium">21 July 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Mental health awareness programme conducted for residents of the Sri Lankan Refugee Camp at Aliyar.
        </p>
    </div>

    <!-- 38 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Self Love & Child Mental Health Awareness</h3>
            <span class="text-secondary text-sm font-medium">22 July 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Delivered a talk on self-love, perinatal care and child mental health for Anganwadi workers at Saibaba Colony.
        </p>
    </div>

    <!-- 39 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Gender Awareness – Government Arts College</h3>
            <span class="text-secondary text-sm font-medium">25 July 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Delivered a lecture on the psychological aspects of gender awareness for students of Government Arts College, Valparai.
        </p>
    </div>

    <!-- 40 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Perinatal & Child Mental Health – Selvapuram</h3>
            <span class="text-secondary text-sm font-medium">30 July 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Perinatal and child mental health awareness programme conducted for Anganwadi workers of Selvapuram, Coimbatore.
        </p>
    </div>




    <!-- 41 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Mental Health Awareness – Sri Lankan Refugees</h3>
            <span class="text-secondary text-sm font-medium">31 July 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted a mental health awareness programme for Sri Lankan refugees at Mettupalayam, focusing on emotional well-being, resilience, and access to mental healthcare services.
        </p>
    </div>

    <!-- 42 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Gender Sensitization Programme – Liseux International School</h3>
            <span class="text-secondary text-sm font-medium">1 August 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted a gender sensitization programme for students from Classes VI to XII at Liseux International School, Saibaba Colony, encouraging respect, equality, and healthy interpersonal relationships.
        </p>
    </div>

    <!-- 43 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">World Breastfeeding Week – Maternal Mental Health Awareness</h3>
            <span class="text-secondary text-sm font-medium">3 August 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Delivered awareness to antenatal mothers and their families on breastfeeding, maternal mental health, and its impact on child development during the World Breastfeeding Awareness programme at Periyanayakanpalayam Government Hospital in collaboration with Rotary Coimbatore Legend.
        </p>
    </div>

    <!-- 44 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">3-Day Intensive Behaviour Technology Workshop</h3>
            <span class="text-secondary text-sm font-medium">8–10 August 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Anandham Mind Care Foundation, in collaboration with the Global Institute of Behavioral Technology, organized a three-day live workshop on Intensive Behaviour Technology led by Prof. Dr. Vedhagiri Ganesan for mental health professionals and educators.
        </p>
    </div>

    <!-- 45 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Parenting & Child Mental Health Awareness – Papampati</h3>
            <span class="text-secondary text-sm font-medium">22 August 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted an awareness session for parents at the Anganwadi Centre, Papampati on parenting styles and their influence on infant and child mental health.
        </p>
    </div>

    <!-- 46 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Mental Health & Drug Abuse Awareness – 700 Students</h3>
            <span class="text-secondary text-sm font-medium">23 August 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Delivered awareness on child and adolescent mental health, emotional well-being, and drug abuse prevention for over 700 students at Government Higher Secondary School, Mettupalayam.
        </p>
    </div>

    <!-- 47 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">10th Annual Good Luck Alcoholics Anonymous Celebration</h3>
            <span class="text-secondary text-sm font-medium">24 August 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Participated as Founder and Director of Anandham Mind Care Foundation in the 10th Annual Celebration of the Good Luck Alcoholics Anonymous Meeting at Karamadai, promoting recovery and sustained sobriety.
        </p>
    </div>

    <!-- 48 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Adolescent Mental Health Awareness – Pitchanur</h3>
            <span class="text-secondary text-sm font-medium">8 September 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted adolescent mental health awareness for over 400 students of Government Higher Secondary School, Pitchanur, emphasizing emotional resilience and healthy coping skills.
        </p>
    </div>

    <!-- 49 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Suicide Prevention Awareness – Karamadai</h3>
            <span class="text-secondary text-sm font-medium">11 September 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted a public awareness programme at Karamadai focusing on suicide prevention, recognizing warning signs, reducing stigma, and encouraging timely professional support.
        </p>
    </div>

    <!-- 50 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">World Suicide Prevention Day Awareness Programme</h3>
            <span class="text-secondary text-sm font-medium">11 September 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Anandham Mind Care Foundation organized a special awareness programme in observance of World Suicide Prevention Day to promote hope, early intervention, and community support for mental health.
        </p>
    </div>






    <!-- 51 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">2nd Anniversary Celebration – Anandham Mind Care Foundation</h3>
            <span class="text-secondary text-sm font-medium">17 September 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Celebrated the second anniversary of Anandham Mind Care Foundation, reflecting on its continued commitment to promoting mental health awareness, community outreach, and accessible psychiatric care.
        </p>
    </div>

    <!-- 52 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">World Alzheimer's Day Walkathon & Awareness Programme</h3>
            <span class="text-secondary text-sm font-medium">23 September 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Participated as Chief Guest during the World Alzheimer's Day Walkathon organized with Dignity Foundation for Aged and RCC Delite Rotary Club. Addressed students of the Department of Psychology, Kongunadu Arts & Science College, on dementia awareness and healthy ageing.
        </p>
    </div>

    <!-- 53 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Free Medical Camp – Thirumalur</h3>
            <span class="text-secondary text-sm font-medium">30 November 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted a free medical camp for the public at Thirumalur in collaboration with Sri Ramakrishna Mission Vidyalaya College of Arts and Science, providing healthcare services and mental health screening.
        </p>
    </div>

    <!-- 54 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Free Medical Camp – Pala Malai</h3>
            <span class="text-secondary text-sm font-medium">30 November 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Organized a community medical camp at Pala Malai in collaboration with Rotary Club, extending medical consultation and mental health awareness to underserved communities.
        </p>
    </div>

    <!-- 55 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Community Service Visit – Siragugal Old Age Home</h3>
            <span class="text-secondary text-sm font-medium">8 December 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Participated with Rotary members in a community service initiative at Siragugal Old Age Home, offering clothing and spending meaningful time with elderly residents.
        </p>
    </div>

    <!-- 56 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Chief Guest – Abhasa Drug Rehabilitation Centre</h3>
            <span class="text-secondary text-sm font-medium">13 December 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Invited as Chief Guest at Abhasa Drug Rehabilitation Centre, Thondamuthur, where awareness was delivered on addiction recovery, psychiatric rehabilitation, and relapse prevention.
        </p>
    </div>

    <!-- 57 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">New Year Celebration & Laughter Therapy</h3>
            <span class="text-secondary text-sm font-medium">29 December 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Celebrated the New Year with residents of an old age home in collaboration with Rotary Delite Coimbatore, conducting laughter therapy sessions to promote emotional well-being and social connection.
        </p>
    </div>

    <!-- 58 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Team Building Bootcamp for School Leaders</h3>
            <span class="text-secondary text-sm font-medium">30–31 December 2025</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted a two-day residential workshop titled <strong>"Unlocking Academic Leadership Success"</strong> for high and higher secondary school headmasters and teachers of Coimbatore, focusing on leadership development, teamwork, communication, and institutional excellence.
        </p>
    </div>





    

        </div>

        <!-- 2026 -->
        <div class="year-content hidden" id="year-2026">

            <!-- ALL 2026 CARDS HERE -->
             <!-- 59 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Drug Abuse Awareness Training for School Teachers</h3>
            <span class="text-secondary text-sm font-medium">10–12 February 2026</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Delivered a three-day Drug Abuse Awareness Training Programme for school teachers in collaboration with the District Education Department, equipping educators to identify early warning signs, support students, and strengthen school-based prevention initiatives.
        </p>
    </div>
             <!-- 60 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Mental Health Awareness – Tribal Settlement, Surandi Hills</h3>
            <span class="text-secondary text-sm font-medium">22 February 2026</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted a mental health awareness programme at the tribal settlement area of Surandi Hills, Karamadai, in collaboration with Rotary Delite Coimbatore and the Karamadai Block PHC team. New psychiatric cases were identified and referred for appropriate follow-up care.
        </p>
    </div>

    <!-- 61 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Drug Abuse Awareness – Dr. Mahalingam College of Engineering</h3>
            <span class="text-secondary text-sm font-medium">23 February 2026</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted a drug abuse awareness programme for over 100 engineering students at Dr. Mahalingam College of Engineering, Pollachi, followed by an Anti-Drug Pledge promoting a healthy and substance-free lifestyle.
        </p>
    </div>

    <!-- 62 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Mental Health Awareness – Government Boys Hostel</h3>
            <span class="text-secondary text-sm font-medium">24 February 2026</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted a mental health awareness programme for college students residing at the Government Boys Hostel, Vellakinar, benefiting 59 students through interactive discussions on emotional well-being and stress management.
        </p>
    </div>

    <!-- 63 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Exam Stress & Mental Health Awareness – Velliyangadu</h3>
            <span class="text-secondary text-sm font-medium">27 February 2026</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted mental health awareness for students of the Backward Class School Boys Hostel, Velliyangadu, with special emphasis on overcoming examination fear, stress management, and building self-confidence.
        </p>
    </div>

    <!-- 64 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Mental Health Awareness – Government Residential School</h3>
            <span class="text-secondary text-sm font-medium">12 March 2026</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Delivered a comprehensive mental health awareness programme for 80 students of the Government Residential School, Valparai, focusing on adolescent well-being, emotional resilience, and positive coping strategies.
        </p>
    </div>

    <!-- 65 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">World Down Syndrome Day Awareness Programme</h3>
            <span class="text-secondary text-sm font-medium">21 March 2026</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            On the occasion of World Down Syndrome Day, conducted a mental health awareness programme for children with intellectual disabilities at Vidya Vikasini Rehabilitation Home, highlighting inclusion, emotional support, and holistic development.
        </p>
    </div>

    <!-- 66 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Mental Health Awareness – Karamadai Block PHC</h3>
            <span class="text-secondary text-sm font-medium">2 April 2026</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted a mental health awareness programme for outpatients attending Karamadai Block Primary Health Centre, emphasizing early diagnosis, treatment adherence, and reducing stigma surrounding mental illness.
        </p>
    </div>

    <!-- 67 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Assistant Governor's Assembly – Rotary</h3>
            <span class="text-secondary text-sm font-medium">6 April 2026</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Participated in the Assistant Governor's Assembly of Rotary (RCC Delite, Coimbatore) as Founder of Anandham Mind Care Foundation, strengthening collaborations for future community mental health initiatives.
        </p>
    </div>

    <!-- 68 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Mental Health Awareness for Persons with Disabilities</h3>
            <span class="text-secondary text-sm font-medium">14 May 2026</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Conducted a mental health awareness programme for persons with disabilities and their caregivers at Valparai, highlighting psychological well-being, caregiver support, and community inclusion.
        </p>
    </div>

    <!-- 69 -->
    <div class="bg-white border border-outline-variant/20 rounded-xl p-6 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between flex-wrap gap-2 mb-3">
            <h3 class="font-semibold text-primary text-lg">Goal Setting & Career Motivation Seminar</h3>
            <span class="text-secondary text-sm font-medium">12 June 2026</span>
        </div>
        <p class="text-on-surface-variant leading-7">
            Delivered a motivational seminar on <strong>Setting and Achieving Goals in Life</strong> for over 200 students from the Departments of Computer Engineering and Communication & Computer Networking at Natchimuthu Polytechnic College, Pollachi, encouraging personal growth, resilience, and career success.
        </p>
    </div>

        </div>

    </div>

</section>

  <style>   
  .year-btn{
    padding:12px 28px;
    border-radius:999px;
    background:#fff;
    border:1px solid #d6d6d6;
    transition:.3s;
    font-weight:600;
}

.year-btn:hover{
    background:#1e3a8a;
    color:#fff;
}

.year-btn.active{
    background:#1e3a8a;
    color:#fff;
    border-color:#1e3a8a;
}

.year-content{
    display:block;
}

.year-content.hidden{
    display:none;
}
</style>

<script>

const buttons=document.querySelectorAll('.year-btn');
const contents=document.querySelectorAll('.year-content');

buttons.forEach(btn=>{

    btn.addEventListener('click',()=>{

        buttons.forEach(b=>b.classList.remove('active'));

        btn.classList.add('active');

        contents.forEach(c=>c.classList.add('hidden'));

        document
            .getElementById('year-'+btn.dataset.year)
            .classList.remove('hidden');

    });

});

</script>



@endsection