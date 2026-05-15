@extends('layouts.hosp')

@section('content')
    <!-- Hero Section: Full Viewport Wrap -->
<section class="relative h-screen w-full flex items-center overflow-hidden">
<div class="video-bg-container">
<!-- Simulated high-quality professional video background using a looping-style high-res clinical atmosphere image -->
<img alt="Serene therapeutic environment with soft natural light" class="w-full h-full object-cover brightness-75 " src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrUy3aY1isJ1-rYve9CuCkygu2-S3_fekLxpUvxHBRriuygd8WFGR7qWCxtnBsW5TtZ2aEokwl53-0o8WMC1hRPBDryJw1uf0mFNrTw-m7vf6DvDRNafhKXmZ5Lh4Qu74N8XzQsiH4Z3bXAh1rN24Ki7tVlztcK4iR4O36hC7tMEAOOhfSsoH-znggg5wqEB_Y7xYzr8NYJ5RfEfQfWqpEuBw9hg-rRKlJXjeeycFfM9b-qTBaZ4sRDs1TnAu2XvtimMemCzGP41nh"/>
<div class="absolute inset-0 hero-gradient-overlay"></div>
</div>
<div class="relative z-10 max-w-screen-2xl mx-auto px-6 w-full text-white">
<div class="max-w-4xl space-y-8 reveal hero-animate">
<h1 class="font-headline text-4xl md:text-6xl lg:text-7xl leading-tight">
                    We are here. <br/>
<span class="italic text-tertiary-fixed-dim">Anandham Mind Care</span> Foundation.
                </h1>
<p class="text-xl md:text-2xl font-light opacity-90 max-w-2xl leading-relaxed">
                    We provide special care for child &amp; Adolescent Mental Health. A sanctuary for healing and cognitive restoration.
                </p>
<div class="flex flex-wrap gap-6 pt-4 reveal stagger-2">
<a href="{{ auth()->check() ? route('user.appointments.list') : route('appointment.create.guest') }}">
        <button class="bg-tertiary-fixed-dim text-on-tertiary-fixed px-8 py-4 rounded-xl font-semibold flex items-center gap-3 hover:scale-105 transition-transform shadow-lg">
                        Book Appointment
                        <span class="material-symbols-outlined">calendar_month</span>
</button>
</a>
<a href= "{{ route('courses.list') }}">
<button class="border border-white/30 backdrop-blur-md bg-white/10 text-white px-8 py-4 rounded-xl font-semibold flex items-center gap-3 hover:bg-white/20 transition-all">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">school</span>
                        Explore Courses
                    </button>
</a>
</div>
</div>
<!-- Floating Stats: Perfectly fits bottom right -->
<div class="absolute bottom-12 right-6 hidden xl:flex gap-8 stats-wrapper">

<div class="stat-card reveal">
    <div class="stat-number" data-target="1000">1000+</div>
    <div class="stat-label">Happy Patients</div>
</div>

<div class="stat-card reveal">
    <div class="stat-number" data-target="15">15+</div>
    <div class="stat-label">Years Exp.</div>
</div>

<div class="stat-card reveal">
    <div class="stat-number">24/7</div>
    <div class="stat-label">Support</div>
</div>

</div>
</section>
<!-- About Section: Editorial Layout -->
<section class="py-32 bg-surface px-6 overflow-hidden">
<div class="max-w-screen-2xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
<div class="lg:col-span-5 relative reveal">
<div class="absolute -top-12 -left-12 w-64 h-64 bg-secondary-container/20 rounded-full blur-3xl -z-10"></div>
<div class="rounded-2xl overflow-hidden editorial-shadow  transition-transform duration-700">
<img alt="Portrait of Dr. M. Helena Selvakodi in a professional clinical setting" class="w-full h-[600px] object-cover" src="{{ asset('assets/images/doctor.jpeg') }}"/>
</div>
<div class="absolute -bottom-8 -right-8 bg-primary p-8 text-white rounded-2xl editorial-shadow max-w-xs reveal stagger-2">
<p class="font-headline italic text-lg leading-relaxed">
                        "Health is a state of complete physical, mental and social well-being."
                    </p>
<footer class="mt-4 text-xs tracking-widest uppercase text-on-primary-container">— World Health Organization</footer>
</div>
</div>
<div class="lg:col-span-7 space-y-8 reveal stagger-1">
<span class="text-secondary font-label font-semibold tracking-widest uppercase text-sm">Our Founder</span>
<h2 class="font-headline text-5xl md:text-6xl text-primary leading-tight">
                    Dr. M. Helena Selvakodi, <span class="text-secondary">DPM(PSY)., M.B.B.S.</span>
</h2>
<div class="space-y-6 text-on-surface-variant text-lg leading-relaxed max-w-2xl">
<p>
                        With over <strong>15+ Years of Clinical Experience</strong>, Dr. Helena has dedicated her career to establishing a sanctuary for mental restoration. At Anandham Mind Care, we don't just treat symptoms; we nurture the whole person.
                    </p>
<p>
                        We provide our best. Help For the Community. Our mission is To Make a Healthy Society through specialized interventions that are both evidence-based and deeply compassionate.
                    </p>
</div>
<div class="pt-6 border-t border-outline-variant/30 flex items-center gap-6">
<div class="flex flex-col">
<span class="text-primary font-bold text-xl">Sanctuary of Healing</span>
<span class="text-sm opacity-60">Licensed Clinical Governance</span>
</div>
<img alt="Medical Council Logo" class="h-12 opacity-40 grayscale" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwUuLXUZv_GSTvOFRfDp6idUMh3XamTncF3rlSOCbCJNnHbm0KSMmMlXwiKMyD-aQzB519uFPHKgSQaD6FL7SXKLr6pDhil3I3rCLUZ93EzFS5L3g8NeNLDc2nTeZA6P2NoHD0GejD6qouz1c5RqwJYkPwh78TXxXexpPn9BgIghY6FupvnfL-mAwqF-C0RIAPu09a5mIsRTtghRfCsTz39F9ybtaQzNEyV-4PSkFFpY0AiTQrHSgnKG3f1eK7X-8QE0Xi9gLY_I2_"/>
</div>
</div>
</div>
</section>
<!-- Specialized Care Programs -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-screen-2xl mx-auto px-6">
<div class="text-center mb-16 space-y-4 reveal">
<h2 class="font-headline text-5xl text-primary">Specialized Care Programs</h2>
<p class="text-on-surface-variant max-w-xl mx-auto">Tailored therapeutic approaches for different stages of development and specific recovery needs.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Child Care -->
<div class="bg-surface-container-lowest p-10 rounded-[2rem] editorial-shadow group hover:-translate-y-2 transition-all duration-300 reveal stagger-1">
<div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-4xl">child_care</span>
</div>
<h3 class="font-headline text-3xl mb-4 text-primary">Child Care</h3>
<p class="text-on-surface-variant leading-relaxed mb-8">
                        Nurturing the youngest minds through play therapy, behavioral assessment, and developmental support in a safe environment.
                    </p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:gap-4 transition-all" href="#">
                        Learn More <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
<!-- Adolescent Care -->
<div class="bg-surface-container-lowest p-10 rounded-[2rem] editorial-shadow group hover:-translate-y-2 transition-all duration-300 reveal stagger-2">
<div class="w-16 h-16 bg-teal-50 text-secondary rounded-2xl flex items-center justify-center mb-8 group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-4xl">psychology_alt</span>
</div>
<h3 class="font-headline text-3xl mb-4 text-primary">Adolescent Care</h3>
<p class="text-on-surface-variant leading-relaxed mb-8">
                        Guiding teenagers through the complexities of mental health, identity, and academic pressure with specialized counseling.
                    </p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:gap-4 transition-all" href="#">
                        Learn More <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
<!-- De-addiction Care -->
<div class="bg-surface-container-lowest p-10 rounded-[2rem] editorial-shadow group hover:-translate-y-2 transition-all duration-300 reveal stagger-3">
<div class="w-16 h-16 bg-amber-50 text-tertiary-container rounded-2xl flex items-center justify-center mb-8 group-hover:bg-tertiary-container group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-4xl">self_improvement</span>
</div>
<h3 class="font-headline text-3xl mb-4 text-primary">De-addiction Care</h3>
<p class="text-on-surface-variant leading-relaxed mb-8">
                        Comprehensive recovery paths for substance abuse and behavioral addictions using clinical detox and cognitive therapy.
                    </p>
<a class="text-secondary font-semibold flex items-center gap-2 group-hover:gap-4 transition-all" href="#">
                        Learn More <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>
<!-- Webinars Section: High Impact -->
<section class="py-32 relative overflow-hidden bg-primary">
<div class="absolute inset-0 opacity-25">
<img alt="Professional workshop setting" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbg-tWvUiLBD4EQ58y0p5Y6LQkVQb1j06nvAi8P5pmCCKITgKrmg2g0Urn8TgB8l8y0xukcRsRAmYfrguNvOLS2NSzVay472zYEpASTNrOPcBS1_Oy2ReU5-zYl3jLSaEsF41RDOpcU9XdvVuf0-NxlZkQq5ErEtqC39peBtNDD0rISN7TSNg5gF87nCIXRb6JH3fdDpagx6X_4m4h9y6prpCATsElBMqMOM9z1s8oseVpY-8ot8cBFRLjlvJ7gi-buCOwwuElVAWM"/>
</div>
<div class="relative z-10 max-w-screen-2xl mx-auto px-6 text-center text-white">
<div class="reveal">
<h2 class="font-headline text-4xl md:text-6xl mb-8 leading-tight max-w-4xl mx-auto">
                    Bring Impactful Workshops to Your Institution
                    
                </h2>
<p class="italic font-headline text-2xl mb-12 text-tertiary-fixed-dim opacity-90">
    Schedule webinars & programs for your school, college, or workplace.
                    
                </p>
                
<div class="flex flex-wrap justify-center gap-6">
<a href="{{ route('contact-us') }}">
<button class="bg-white text-primary px-10 py-4 rounded-xl font-bold hover:bg-tertiary-fixed-dim hover:text-on-tertiary-fixed transition-colors">
                        Contact NOW
                    </button>
</a>
<a href="{{ auth()->check() ? route('user.appointments.list') : route('appointment.create.guest') }}">
<button class="bg-secondary text-white px-10 py-4 rounded-xl font-bold flex items-center gap-3 hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">calendar_month</span>
                        Book Appointment
                    </button>
</a>
</div>
</div>
</div>
</section>
<!-- Social Proof & Blog -->
<section class="py-24 bg-surface">
<div class="max-w-screen-2xl mx-auto px-6">
<!-- Testimonial Highlight -->
<div class="mb-24 flex flex-col lg:flex-row items-center gap-16">
<div class="lg:w-1/2 reveal">
<span class="text-secondary font-label font-bold tracking-widest uppercase text-sm block mb-4">Our Client Feedback</span>
<h2 class="font-headline text-5xl text-primary mb-8 leading-tight">Voices of Recovery</h2>
<div class="bg-white p-12 rounded-[2.5rem] editorial-shadow relative">
<span class="material-symbols-outlined text-6xl text-blue-50 absolute -top-4 -left-4" style="font-variation-settings: 'FILL' 1;">format_quote</span>
<p class="text-2xl font-headline italic text-on-surface-variant leading-relaxed">
                            "The care my son received here was transformative. Dr. Helena and her team understand that healing takes patience and professional expertise in equal measure."
                        </p>
<div class="mt-8 flex items-center gap-4">
<div class="w-12 h-12 bg-surface-container rounded-full overflow-hidden">
<img alt="Parent portrait" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDL7GJoKemfSsBQzDEALs77_2hSMmrQTw51RHGPrTxSTzqQGoGR9GEUkBNgwAisjg9RUEXR449Ygil1GcDekOXa4M_zUKMluxb6HZZKbN3iej_WjDHnSpDxEyXZg6SaY2SWCcKLPnE1puaBAEV7fobnMeCzRzaDMs0OxXjSp-ASNnV5LcaEOR3zlyod5HjbCk5Z32sLNXyXfxPTd7S6Z4I_MirIWFfwQGsb3X83xJI8GF2WirXluSJFU13dK__xtFskqFAETAZbxyQ"/>
</div>
<div>
<div class="font-bold text-primary">Sarah Jenkins</div>
<div class="text-sm opacity-60">Parent of Adolescent Program</div>
</div>
</div>
</div>
</div>
<div class="lg:w-1/2 text-right reveal stagger-2">
<div class="inline-block text-left max-w-md">
<h3 class="font-headline text-3xl text-primary mb-6">Our Goal: Help Needy People Through Specialized Mental Healthcare.</h3>
<p class="text-on-surface-variant mb-8">We believe mental wellness is a basic human right, not a luxury. We strive to provide accessible, premium care to all segments of society.</p>
<img alt="Clinic hallway" class="rounded-3xl shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvfD75eVbfOu8-izcrIcn2W68HH33AqizGxDg4okqO2Rfxezr-vg_qDYLKOegUKYsLi3nIGXYYBVRUNNHHCSHkG4MobrAZFFrD8pNN7Okf7ac50eOfDiGEAKVBOuO_U730Xp3KyU2jirDnsGGyN5TVGiGznZ9AqJJb1Yd1IkPvTfloqqfAMNSY8Gn6vK1NRnRB6hSiJz-ovQ85tmZd7fDHvoQnetYb3n_GhhD0z46eruUVYwNTcw2ysPxG-lcoNpyIwCRxgYzUmOfK"/>
</div>
</div>
</div>
<!-- Blog Section -->
<div>
<div class="flex justify-between items-end mb-12 reveal">
<h2 class="font-headline text-4xl text-primary">Latest From Our Journal</h2>
<a class="text-secondary font-semibold hover:underline" href="#">View All Posts</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<article class="bg-surface-container-low rounded-3xl overflow-hidden hover:bg-white transition-colors duration-300 border border-transparent hover:border-outline-variant/10 reveal stagger-1">
<img alt="Meditation practice" class="w-full h-56 object-cover" src="{{ asset('assets/bg/hosp_hero.png') }}"/>
<div class="p-8">
<time class="text-sm opacity-50 block mb-3 uppercase tracking-widest font-label">Oct 24, 2024</time>
<h3 class="font-headline text-2xl mb-4 text-primary leading-tight">Mindfulness in Modern Childhood</h3>
<p class="text-on-surface-variant line-clamp-2">Exploring how early intervention and mindfulness can shape a healthy adolescent transition.</p>
</div>
</article>
<article class="bg-surface-container-low rounded-3xl overflow-hidden hover:bg-white transition-colors duration-300 border border-transparent hover:border-outline-variant/10 reveal stagger-2">
<img alt="Students in discussion" class="w-full h-56 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2cdiJNILpLdNEEf9BDntVDrjdLRH5D5LdEysWgdKmdgIng5_JYyvXurYWULmXHv4N4nBdIGaTWSpxNDSQwruXtG6UpwyiVLoQjyUMQevxu0XOaBGpgWPIzKVgf9nhwC5cHklBnyo4zIr4IiG5VtrZgV2pKf9HBIKCn-Y6HU6VzOVoeKeU6299cdzEJ_A776sbGG1f9rNXRTx47JsbdXUNplGOU0zv7GFU0veqSoJraHYeqYycyH_QwpFuKMTxeBge64nC53Kyfv8U"/>
<div class="p-8">
<time class="text-sm opacity-50 block mb-3 uppercase tracking-widest font-label">Oct 18, 2024</time>
<h3 class="font-headline text-2xl mb-4 text-primary leading-tight">Digital Detox for Better Sleep</h3>
<p class="text-on-surface-variant line-clamp-2">Practical steps to reclaiming your circadian rhythm in an era of constant connectivity.</p>
</div>
</article>
<article class="bg-surface-container-low rounded-3xl overflow-hidden hover:bg-white transition-colors duration-300 border border-transparent hover:border-outline-variant/10 reveal stagger-3">
<img alt="Peaceful nature" class="w-full h-56 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvrYiiwRAPq-xFt-jjjUO-XASA_KqMrZRAyOZ2MP40FFiI-UIgyBdDN4wJDWE_eAyEER46N2hw4A7JLYo9syKSJU4073rydMkL3CgPSd3xXiIcylw70cnw0EJj0rDuBpRteJjMY78eo5Wvxng-mkeOynwe5E8qSEbQCbjRwFmlQ8J-Ga4QNb5mkc-d700qEfw00xp11W63chAMguRIUuRtVxsxojlYk4h6t-Za2ey4AWHcMdpYumLOMEkdZdQVXtC7LjoeKZLAjrgN"/>
<div class="p-8">
<time class="text-sm opacity-50 block mb-3 uppercase tracking-widest font-label">Oct 12, 2024</time>
<h3 class="font-headline text-2xl mb-4 text-primary leading-tight">Breaking the Stigma: Men's Mental Health</h3>
<p class="text-on-surface-variant line-clamp-2">Why open conversations are the first step toward clinical healing for fathers and young men.</p>
</div>
</article>
</div>
</div>
</div>
</section>
@endsection 