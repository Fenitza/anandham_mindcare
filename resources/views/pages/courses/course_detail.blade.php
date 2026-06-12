@extends('layouts.course')

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
                                animation: {
                marquee: "marquee 20s linear infinite",
                "fade-in-up": "fadeInUp 0.8s ease-out forwards",
                "pulse-slow": "pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite",
                pop: "pop 2s ease-in-out infinite"
            },

            keyframes: {
                marquee: {
        "0%": { transform: "translateX(0)" },
        "100%": { transform: "translateX(-100%)" }
    },
                fadeInUp: {
                    "0%": { opacity: "0", transform: "translateY(20px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" }
                },
                pop: {
                    "0%, 100%": { transform: "scale(1)" },
                    "50%": { transform: "scale(1.08)" }
                }
            }
        }
    }
}
</script>
<script>
function toggleModule(index) {
    const content = document.getElementById('content-' + index);
    const icon = document.getElementById('icon-' + index);

    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
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
<!-- Scrolling Marquee (Seamless Infinite) -->
<div class="w-full bg-secondary overflow-hidden py-2 border-b border-secondary-container">

    @php
        $marqueeItems = [];

        if (!empty($course->marquee_text)) {
            $marqueeItems = array_filter(array_map('trim', explode(',', $course->marquee_text)));
        }
    @endphp

    <div class="relative flex overflow-hidden">

        <!-- Track -->
        <div class="flex animate-marquee min-w-max">

            <!-- Repeat content multiple times for seamless loop -->
            @for ($i = 0; $i < 3; $i++)
                <div class="flex items-center gap-10 pr-10">
                    @foreach($marqueeItems as $item)
                        <span class="text-surface font-bold text-xs uppercase tracking-widest flex items-center gap-2 whitespace-nowrap">
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            {{ $item }}
                        </span>
                    @endforeach
                </div>
            @endfor

        </div>

    </div>
</div>


<header class="relative pt-16 md:pt-20 pb-12 md:pb-16 overflow-hidden bg-primary min-h-[55vh] flex items-center">
    <!-- Background -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-primary/95 via-primary/80 to-primary z-10"></div>

        <img 
            class="w-full h-full object-cover scale-110 animate-[pulse_10s_ease-in-out_infinite]"
            src="{{ asset('storage/'.$course->course_image) }}"
        />
    </div>

    <div class="max-w-7xl mx-auto px-8 relative z-20 text-center">

        <!-- Badge -->
        <div class="opacity-0 animate-fade-in-up">
            <span class="inline-block px-4 py-1.5 mb-6 rounded-full bg-secondary text-primary text-[10px] font-bold tracking-widest uppercase shadow-lg shadow-secondary/20">
                {{ $course->course_type ?? 'Course' }}
            </span>
        </div>

        <!-- Title -->
        <h1 class="opacity-0 animate-fade-in-up delay-100 text-4xl md:text-5xl font-bold text-white mb-6 leading-[1.15] max-w-4xl mx-auto">
            {{ $course->title }}
        </h1>

        <!-- Description -->
        <p class="opacity-0 animate-fade-in-up delay-200 text-lg md:text-xl text-white/80 max-w-2xl mx-auto mb-10 font-light leading-relaxed">
            {{ $course->description }}
        </p>

        <!-- SUMMARY CARDS -->
<div class="opacity-0 animate-fade-in-up delay-300 flex flex-col gap-5 max-w-3xl mx-auto mb-10">
{{-- =========================
FEES
========================== --}}

<div class="hero-glass p-5 rounded-2xl text-white">


<div class="flex items-center gap-3 mb-5">

    <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center">
        <span class="material-symbols-outlined text-secondary-container text-2xl">
            payments
        </span>
    </div>

    <div>
        <p class="text-[10px] uppercase tracking-widest opacity-60">
            Course Fees
        </p>

        <h3 class="text-lg font-bold font-headline">
            Pricing
        </h3>
    </div>

</div>

@php

    $indianPricing = is_array($course->indian_pricing)
        ? $course->indian_pricing
        : json_decode($course->indian_pricing, true);

    $indianBaseFee =
        $indianPricing['base_fee']
        ?? $course->fee
        ?? 0;

    $internationalFees = is_array($course->international_pricing)
        ? $course->international_pricing
        : json_decode($course->international_pricing, true);

    $symbols = [
        'USD' => '$',
        'EUR' => '€',
        'GBP' => '£',
        'AUD' => 'A$',
        'CAD' => 'C$',
        'SGD' => 'S$',
        'AED' => 'د.إ',
    ];

@endphp

<div class="max-h-[420px] overflow-y-auto space-y-5 pr-2">

    {{-- INDIA --}}
    <div>

        <div class="bg-white/10 rounded-2xl p-4">

            <div class="flex justify-between items-center">

                <div>

                    <p class="text-xs uppercase tracking-widest opacity-60">
                        India
                    </p>

                    <h4 class="text-2xl font-bold text-secondary-container mt-1">
                        ₹{{ number_format($indianBaseFee) }}
                    </h4>

                </div>

                <span class="text-3xl">
                    🇮🇳
                </span>

            </div>

        </div>

        @if(!empty($indianPricing['offers']))

            <div class="mt-3 ml-3 space-y-2">

                @foreach($indianPricing['offers'] as $savedOffer)

                    @php

                        $offer =
                            \App\Models\Offer::find(
                                $savedOffer['offer_id'] ?? null
                            );

                    @endphp

                    @if($offer)

                        @php

                            $discount =
                                $offer->discount_type === 'percentage'
                                ? ($indianBaseFee * $offer->discount_value) / 100
                                : $offer->discount_value;

                            $finalPrice =
                                max($indianBaseFee - $discount, 0);

                        @endphp

                        <div class="bg-green-500/10 border border-green-400/20 rounded-xl p-3">

                            <div class="flex justify-between items-center">

                                <div>

                                    <p class="font-semibold">
                                        {{ $offer->name }}
                                    </p>

                                    <p class="text-xs text-green-300">

                                        @if($offer->discount_type === 'percentage')
                                            Save {{ $offer->discount_value }}%
                                        @else
                                            Save ₹{{ number_format($discount) }}
                                        @endif

                                    </p>

                                </div>

                                <div class="text-xl font-bold text-green-300">
                                    ₹{{ number_format($finalPrice) }}
                                </div>

                            </div>

                        </div>

                    @endif

                @endforeach

            </div>

        @endif

    </div>

    {{-- INTERNATIONAL --}}
    @if(!empty($internationalFees))

        @foreach($internationalFees as $fee)

            @if(!empty($fee['currency']) && !empty($fee['fee']))

                @php

                    $basePrice = (float) $fee['fee'];

                    $symbol =
                        $symbols[$fee['currency']]
                        ?? '';

                @endphp

                <div>

                    <div class="bg-white/10 rounded-2xl p-4">

                        <div class="flex justify-between items-center">

                            <div>

                                <p class="text-xs uppercase tracking-widest opacity-60">
                                    {{ $fee['currency'] }}
                                </p>

                                <h4 class="text-2xl font-bold text-secondary-container mt-1">
                                    {{ $symbol }}{{ number_format($basePrice) }}
                                </h4>

                            </div>

                            <span class="text-lg font-bold">
                                {{ $fee['currency'] }}
                            </span>

                        </div>

                    </div>

                    @if(!empty($fee['offers']))

                        <div class="mt-3 ml-3 space-y-2">

                            @foreach($fee['offers'] as $savedOffer)

                                @php

                                    $offer =
                                        \App\Models\Offer::find(
                                            $savedOffer['offer_id'] ?? null
                                        );

                                @endphp

                                @if($offer)

                                    @php

                                        $discount =
                                            $offer->discount_type === 'percentage'
                                            ? ($basePrice * $offer->discount_value) / 100
                                            : $offer->discount_value;

                                        $finalPrice =
                                            max($basePrice - $discount, 0);

                                    @endphp

                                    <div class="bg-blue-500/10 border border-blue-400/20 rounded-xl p-3">

                                        <div class="flex justify-between items-center">

                                            <div>

                                                <p class="font-semibold">
                                                    {{ $offer->name }}
                                                </p>

                                                <p class="text-xs text-blue-300">

                                                    @if($offer->discount_type === 'percentage')
                                                        Save {{ $offer->discount_value }}%
                                                    @else
                                                        Save {{ $symbol }}{{ number_format($discount) }}
                                                    @endif

                                                </p>

                                            </div>

                                            <div class="text-xl font-bold text-blue-300">
                                                {{ $symbol }}{{ number_format($finalPrice) }}
                                            </div>

                                        </div>

                                    </div>

                                @endif

                            @endforeach

                        </div>

                    @endif

                </div>

            @endif

        @endforeach

    @endif

</div>


</div>


    {{-- =========================
        DURATION / SCHEDULE
    ========================== --}}
    <div class="hero-glass p-5 rounded-2xl text-white">

        <div class="flex items-center gap-3 mb-4">

            <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-secondary-container text-2xl">
                    calendar_month
                </span>
            </div>

            <div>
                <p class="text-[10px] uppercase tracking-widest opacity-60">
                    Schedule
                </p>

                <h3 class="text-lg font-bold font-headline">
                    Duration
                </h3>
            </div>

        </div>

        <div class="space-y-2">

            <div class="flex items-start justify-between gap-3">

                <span class="text-sm opacity-80">
                    Timeline
                </span>

                <span class="text-right text-sm font-semibold">
                    {{ $course->formatted_schedule }}
                </span>

            </div>

            @if($course->course_time)

                <div class="flex items-start justify-between gap-3">

                    <span class="text-sm opacity-80">
                        Timing
                    </span>

                    <span class="text-right text-sm font-semibold">
                        {{ $course->course_time }}
                    </span>

                </div>

            @endif

            @if($course->venue)

                <div class="flex items-start justify-between gap-3">

                    <span class="text-sm opacity-80">
                        Venue
                    </span>

                    <span class="text-right text-sm font-semibold">
                        {{ $course->venue }}
                    </span>

                </div>

            @endif

        </div>

    </div>


    {{-- =========================
        CAPACITY
    ========================== --}}
    <div class="hero-glass p-5 rounded-2xl text-white">

        <div class="flex items-center gap-3 mb-4">

            <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-secondary-container text-2xl">
                    groups
                </span>
            </div>

            <div>
                <p class="text-[10px] uppercase tracking-widest opacity-60">
                    Enrollment
                </p>

                <h3 class="text-lg font-bold font-headline">
                    Capacity
                </h3>
            </div>

        </div>

        <div class="flex items-center justify-between py-2 border-b border-white/10">

            <span class="text-sm opacity-80">
                Seats Available
            </span>

            <span class="text-lg font-bold">
                {{ $course->capacity ?? 'Limited' }}
            </span>

        </div>

        <div class="flex items-center justify-between py-2">

            <span class="text-sm opacity-80">
                Status
            </span>

            <span class="px-3 py-1 rounded-full text-xs bg-white/10 font-semibold capitalize">
                {{ $course->status }}
            </span>

        </div>

    </div>

</div>

        <!-- CTA -->
        <a href="{{ route('course.enroll.handle', $course->id) }}"

            class="bg-secondary text-surface px-8 py-4 rounded-lg font-bold animate-pop hover:scale-110 transition duration-300 shadow-lg hover:shadow-xl inline-block animate-pop">
                
                🚀 Reserve Your Seat
            </a>

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
<!-- Registration & Contact -->
<section class="py-24 bg-gradient-to-br from-primary to-primary-container text-white relative overflow-hidden">

    <!-- Decorative Blur -->
    <div class="absolute -top-20 -right-20 w-72 h-72 bg-secondary/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-8 relative z-10">

        <!-- Heading -->
        <div class="text-center mb-16">

            <span class="inline-block px-4 py-1 rounded-full bg-white/10 text-xs tracking-[0.3em] uppercase font-bold mb-5">
                Registration Support
            </span>

            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Need Help With Enrollment?
            </h2>

            <p class="max-w-3xl mx-auto text-white/75 text-lg leading-relaxed">
                Our admissions and academic coordination team is available to guide you
                through course registration, international pricing, payment assistance,
                accommodation support, and schedule clarification.
            </p>

        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- Left Card -->
            <div class="bg-white/10 backdrop-blur-xl border border-white/10 rounded-3xl p-10">

                <h3 class="text-2xl font-bold mb-8">
                    Registration Details
                </h3>

                <div class="space-y-6">

                    <!-- Registration -->
                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-xl bg-secondary flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary">
                                how_to_reg
                            </span>
                        </div>

                        <div>
                            <p class="text-sm uppercase tracking-widest opacity-60 mb-1">
                                Enrollment Process
                            </p>

                            <p class="text-lg font-semibold">
                                Online Registration Available
                            </p>

                            <p class="text-white/70 text-sm mt-1 leading-relaxed">
                                Complete your enrollment online securely using UPI,
                                bank transfer, or international payment methods.
                            </p>
                        </div>

                    </div>

                    <!-- Documents -->
                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-xl bg-secondary flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary">
                                description
                            </span>
                        </div>

                        <div>
                            <p class="text-sm uppercase tracking-widest opacity-60 mb-1">
                                Required Documents
                            </p>

                            <p class="text-lg font-semibold">
                                ID / Qualification Proof
                            </p>

                            <p class="text-white/70 text-sm mt-1 leading-relaxed">
                                Participants may be requested to submit educational
                                or professional credentials during verification.
                            </p>
                        </div>

                    </div>

                    <!-- International -->
                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-xl bg-secondary flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary">
                                public
                            </span>
                        </div>

                        <div>
                            <p class="text-sm uppercase tracking-widest opacity-60 mb-1">
                                International Participants
                            </p>

                            <p class="text-lg font-semibold">
                                Global Enrollment Supported
                            </p>

                            <p class="text-white/70 text-sm mt-1 leading-relaxed">
                                Dedicated assistance available for overseas students
                                regarding currency payments and scheduling.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Right Card -->
            <div class="bg-white text-primary rounded-3xl p-10 shadow-2xl">

                <h3 class="text-2xl font-bold mb-8">
                    Contact Admissions
                </h3>

                <div class="space-y-6">

                    <!-- Phone -->
                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">
                                call
                            </span>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-widest text-on-surface-variant mb-1">
                                Phone Support
                            </p>

                            <p class="font-bold text-lg">
                                {{ $course->registration_contact ?? '+91 98765 43210' }}
                            </p>
                        </div>

                    </div>

                    <!-- Email -->
                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">
                                mail
                            </span>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-widest text-on-surface-variant mb-1">
                                Email
                            </p>

                            <p class="font-bold text-lg break-all">
                                admissions@anandhammindcare.org
                            </p>
                        </div>

                    </div>

                    <!-- Location -->
                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">
                                location_on
                            </span>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-widest text-on-surface-variant mb-1">
                                Campus
                            </p>

                            <p class="font-bold text-lg">
                                Anandham Mindcare Foundation
                            </p>

                            <p class="text-sm text-on-surface-variant">
                                Tamil Nadu, India
                            </p>
                        </div>

                    </div>

                </div>

                <!-- CTA -->
                <div class="mt-10 flex flex-col sm:flex-row gap-4">

                    <a href="{{ route('course.enroll.handle', $course->id) }}"
                       class="flex-1 text-center bg-primary text-white px-6 py-4 rounded-xl font-bold hover:scale-105 transition-all">

                        Register Now

                    </a>

                    <a href="https://wa.me/919876543210"
                       target="_blank"
                       class="flex-1 text-center bg-secondary text-primary px-6 py-4 rounded-xl font-bold hover:scale-105 transition-all">

                        WhatsApp Support

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Curriculum -->
<section class="py-20 bg-surface">
    <div class="max-w-4xl mx-auto px-8">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">
                {{ $course->duration ?? 'Course' }} Syllabus
            </h2>

            <p class="text-on-surface-variant text-lg">
                {{ $course->description ?? 'Structured learning experience designed for excellence.' }}
            </p>
        </div>

        <div class="space-y-4">

            @foreach($course->modules->sortBy('module_order') as $index => $module)

                <div class="bg-white rounded-2xl ghost-border p-8 shadow-sm group hover:border-secondary transition-colors">

                    <!-- Header -->
                    <div class="flex justify-between items-center cursor-pointer"
                         onclick="toggleModule({{ $index }})">

                        <div class="flex items-center gap-6">

                            <!-- Day Number -->
                            <span class="w-14 h-14 rounded-xl bg-primary flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-primary/20">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </span>

                            <!-- Module Title -->
                            <h3 class="text-2xl font-bold text-primary">
                                {{ $module->title }}
                            </h3>
                        </div>

                        <!-- Icon -->
                        <span id="icon-{{ $index }}"
                              class="material-symbols-outlined text-on-surface-variant group-hover:text-secondary transition-all duration-300">
                            expand_more
                        </span>
                    </div>

                    <!-- Topics -->
                    <div id="content-{{ $index }}"
                         class="mt-6 pl-20 space-y-3 text-on-surface-variant border-l-2 border-secondary/20 ml-7 hidden">

                        
                    {{-- ✅ MODULE DESCRIPTION (ONLY ONCE) --}}
                    @if($module->description)
                        <p class="text-base text-on-surface-variant font-medium">
                            {{ $module->description }}
                        </p>
                    @endif

                    {{-- ✅ TOPICS --}}
                    @foreach($module->topics as $topic)
                        <p class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                            {{ $topic->name }}
                        </p>
                    @endforeach

                    </div>
                </div>

            @endforeach

        </div>
    </div>
</section>
<!-- Certifications -->
<section class="py-24 bg-primary text-white">
    <div class="max-w-7xl mx-auto px-8">

        <h2 class="text-4xl md:text-5xl font-bold mb-16 text-center text-white">
            Certifications
        </h2>

        <div class="
            grid gap-10
            {{ $course->bonuses->count() == 1
                ? 'grid-cols-1 max-w-2xl mx-auto'
                : 'grid-cols-1 md:grid-cols-2'
            }}
        ">

            @foreach($course->bonuses as $bonus)

                <div class="bg-white/5 border border-white/10 p-10 rounded-2xl flex gap-8 hover:bg-white/10 transition-all group">

                    <!-- Icon -->
                    <div class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center shrink-0 shadow-lg shadow-secondary/10">
                        <span class="material-symbols-outlined text-3xl text-primary">
                            redeem
                        </span>
                    </div>

                    <!-- Content -->
                    <div>

                        <h3 class="text-2xl font-bold mb-2 text-secondary">
                            {{ $bonus->title }}
                        </h3>

                        @if($bonus->value > 0)
                            <p class="text-sm text-white/50 mb-2">
                                Worth ₹{{ number_format($bonus->value) }}
                            </p>
                        @endif

                        <p class="text-white/70 leading-relaxed text-lg">
                            {{ $bonus->description }}
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>
</section>
<!-- Meet Your Mentor -->
@if($course->mentors && $course->mentors->count())

<section class="py-24 bg-surface">
    <div class="max-w-7xl mx-auto px-8">

        <h2 class="text-4xl md:text-5xl font-bold text-primary mb-16 text-center">
            Meet Your Faculty
        </h2>

        @php
            $mentors = $course->mentors ?? collect();
        @endphp

        <div class="
            grid gap-14
            {{ $mentors->count() == 1
                ? 'grid-cols-1 max-w-3xl mx-auto'
                : 'grid-cols-1 lg:grid-cols-2' }}
        ">

            @foreach($mentors as $mentor)

            <div class="flex flex-col items-center text-center">

                <!-- IMAGE -->
                <div class="relative mb-8">

                    <div class="absolute -inset-4 bg-secondary/10 rounded-3xl blur-xl"></div>

                    <img
                        class="relative z-10 w-72 h-72 object-cover rounded-3xl border border-secondary/10 shadow-2xl"
                        src="{{ $mentor->image
                                ? asset('storage/'.$mentor->image)
                                : 'https://via.placeholder.com/600x600' }}"
                        alt="{{ $mentor->name }}"
                    />

                </div>

                <!-- NAME -->
                <h3 class="text-3xl md:text-4xl font-bold text-primary font-headline mb-4">
                    {{ $mentor->name }}
                </h3>

                <!-- QUALIFICATIONS -->
                @if($mentor->qualification)

                    <div class="flex flex-wrap justify-center gap-3 mb-6">

                        @foreach(explode(',', $mentor->qualification) as $qual)

                            <div class="bg-secondary/15 px-5 py-2 rounded-full text-primary font-semibold text-sm">
                                {{ trim($qual) }}
                            </div>

                        @endforeach

                    </div>

                @endif

                <!-- BIO -->
                <p class="text-lg text-on-surface-variant leading-relaxed max-w-2xl">
                    {{ $mentor->bio ?? 'Faculty details will be updated soon.' }}
                </p>

            </div>

            @endforeach

        </div>

    </div>
</section>

@endif
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
<!-- Sticky Footer CTA -->
<div class="fixed bottom-0 left-0 w-full bg-white/95 backdrop-blur-xl py-4 px-8 border-t border-outline-variant/20 shadow-[0_-15px_40px_rgba(0,37,85,0.15)] z-[110] transform translate-y-0 transition-transform">

    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">

        <!-- Course Info -->
        <div class="hidden md:block">

            <!-- Title -->
            <p class="text-primary font-bold text-xl font-headline tracking-tight">
                {{ $course->title }}
            </p>

            <!-- Urgency -->
            <div class="flex items-center gap-2 mt-0.5">
                <span class="inline-block w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span>

                <p class="text-primary/70 text-[10px] font-bold uppercase tracking-widest">
                    @if($course->course_date)
                        Enrollment closing soon • Starts {{ \Carbon\Carbon::parse($course->course_date)->format('M d') }}
                    @else
                        Limited seats available • Enroll now
                    @endif

                    @if($course->capacity)
                        • Only {{ $course->capacity }} seats
                    @endif
                </p>
            </div>

        </div>

        <!-- Price + CTA -->
        <div class="flex items-center gap-8">

            <!-- Price -->
            <div class="text-right hidden sm:block">

                {{-- Optional old price (if you add later) --}}
                @if(!empty($course->original_price))
                    <p class="text-slate-400 line-through text-xs">
                        ₹{{ number_format($course->original_price) }}
                    </p>
                @endif

                <!-- <p class="text-primary font-bold text-2xl">
                    {{ $course->fee > 0 ? '₹'.number_format($course->fee) : 'Free' }}
                </p> -->
            </div>

            <!-- CTA Button -->
            <a href="{{ route('course.enroll.handle', $course->id) }}"
               class="bg-secondary text-surface px-8 py-4 rounded-lg font-bold animate-pop hover:scale-110 transition duration-300 shadow-lg hover:shadow-xl inline-block animate-pop">

                Secure My Seat
            </a>

        </div>
    </div>
</div>


@endsection
