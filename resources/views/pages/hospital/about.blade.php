@extends('layouts.hosp')

@section('content')


<!-- Hero Banner Section -->
<section class="relative h-[450px] md:h-[550px] flex items-center overflow-hidden animate-fadeInUp">
<div class="absolute inset-0 z-0 scale-105 animate-[scaleIn_1.5s_ease-out_forwards]">
<img alt="Restorative clinical environment" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHcM571cYkNYR2laayqiG0GJHMqyf1ALaTSUDcE0OKWeb4kittrACGFTvfkBMKOhaj44gLl1vt8Gr-4SortZu_oc2u2lKyRs9cJceBEfma1YEPgq0fEFbVpWxj9-sfQNCaHsCQOSXtfl2SUEb_I9tSfVUC9liOL24bglAZdUra0Vl0j5VHFT5_UT6G6ExkMGpTKPc2p1dPnIZtt2cbwFsbXfRSwZMFJtAysHcvLpl9ur4I2EjPzMa7egSOpM3x9M7MpuRtNHashZHo"/>
<div class="absolute inset-0 bg-gradient-to-r from-primary/80 md:from-primary/70 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-6 md:px-8 w-full">
<div class="max-w-2xl">

<span class="text-secondary font-medium tracking-[0.2em] uppercase text-xs mb-3 md:mb-4 block animate-fadeInUp stagger-1">Foundations of Healing</span>
<h1 class="text-5xl md:text-7xl font-serif text-white italic leading-tight animate-fadeInUp stagger-2">About Us</h1>
<p class="text-white/90 text-base md:text-lg mt-4 md:mt-6 font-light max-w-lg leading-relaxed animate-fadeInUp stagger-3">
                    A sanctuary of clinical excellence and restorative healing, dedicated to bridging the gap between advanced psychiatry and human compassion.
                </p>
</div>
</div>
</section>
<!-- Clinical Leadership Section -->
<section class="py-16 md:py-24 bg-surface px-6 md:px-8 reveal">
<div class="max-w-7xl mx-auto flex flex-col lg:grid lg:grid-cols-12 gap-12 md:gap-16 items-center">
<!-- Professional Portrait -->
<div class="w-full lg:col-span-5 order-2 lg:order-1">
<div class="relative group max-w-sm mx-auto lg:max-w-none">
<div class="absolute -inset-4 bg-surface-container rounded-xl -rotate-2 transition-transform duration-500 group-hover:rotate-0"></div>
<div class="relative bg-white p-3 md:p-4 shadow-xl shadow-primary/5 rounded-xl border border-outline-variant/10 overflow-hidden">
<img alt="Dr. M. Helena Selvakodi professional portrait" class="w-full aspect-[4/5] object-cover rounded-lg transition-transform duration-700 group-hover:scale-105" src="{{ asset('assets/images/doctor.jpeg') }}"/>
</div>
<div class="absolute bottom-6 md:bottom-12 -right-4 md:-right-8 bg-primary-container p-4 md:p-6 rounded-xl shadow-2xl max-w-[180px] md:max-w-[240px] transition-transform duration-500 group-hover:translate-x-2">
<p class="text-on-primary-container text-xs md:text-sm leading-relaxed italic">
                            "Restorative care begins with listening to the unspoken narrative of the soul."
                        </p>
</div>
</div>
</div>
<!-- Content Area -->
<div class="w-full lg:col-span-7 order-1 lg:order-2">
<h2 class="text-3xl md:text-5xl font-serif text-primary mb-6 md:mb-8 leading-tight">
                    We provide Psychiatric &amp; <br class="hidden md:block"/><span class="italic text-secondary">Psychotherapeutic services</span>
</h2>
<div class="space-y-6">
<div>
<h3 class="text-2xl md:text-2xl font-serif text-primary-container font-semibold">Dr. M. Helena Selvakodi</h3>
<p class="text-secondary font-medium text-sm tracking-wide mt-1 italic uppercase">DPM(PSY)., M.B.B.S.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="p-4 bg-surface-container-low rounded-lg flex items-start gap-4 transition-all duration-300 hover:bg-surface-container hover:shadow-sm">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">medical_services</span>
<div>
<p class="font-medium text-on-surface text-sm md:text-base">Psychiatrist Govt. Doctor</p>
<p class="text-[11px] md:text-xs text-on-surface-variant uppercase tracking-wider">Clinical Excellence &amp; Public Service</p>
</div>
</div>
<div class="p-4 bg-surface-container-low rounded-lg flex items-start gap-4 transition-all duration-300 hover:bg-surface-container hover:shadow-sm">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">school</span>
<div>
<p class="font-medium text-on-surface text-sm md:text-base">SAMVAD @ NIMHANS</p>
<p class="text-[11px] md:text-xs text-on-surface-variant uppercase tracking-wider">Child and Adolescent Psychiatry</p>
</div>
</div>
<div class="p-4 bg-surface-container-low rounded-lg flex items-start gap-4 md:col-span-2 transition-all duration-300 hover:bg-surface-container hover:shadow-sm">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">psychology</span>
<div>
<p class="font-medium text-on-surface text-sm md:text-base">Positive and Transcultural Psychotherapist</p>
<p class="text-[11px] md:text-xs text-on-surface-variant uppercase tracking-wider">Global standards in psychotherapeutic methodologies</p>
</div>
</div>
</div>
<p class="text-on-surface-variant leading-relaxed text-base md:text-lg">
•	To gain insight for personal development & for preventing mental illness in the community.
•	To guide people towards state of inner calmness& inner strength to find their purpose in life, so that along with healing themselves, they contribute to healing the world.
•	To gain an integrated knowledge of Psychology, Psychiatry & Psychotherapy to provide more efficient treatment to deserving people.
                    </p>
</div>
</div>
</div>
</section>

<!-- Vision -->
 <section class="py-16 md:py-24 bg-surface-container-low px-6 md:px-8 reveal">  
<div class="max-w-5xl mx-auto text-center">
<span class="text-secondary font-medium tracking-[0.2em] uppercase text-xs mb-3 md:mb-4 block">Our Vision</span>
<h2 class="text-3xl md:text-5xl font-serif text-primary mb-6 md:mb-8 leading-tight">
                    A World Where Mental Wellness is Accessible, Compassionate, and Restorative.
                </h2>
<p class="text-on-surface-variant leading-relaxed text-base md:text-lg max-w-2xl mx-auto">
•	To relate to the broader world of Health and Well-being.
•	To promote Academic Resources and Interactions.
•	To gain an Academic standard for our course.
•	 To have mutual support from institutions with similar goals.
                </p>
</div>
</section>

<!-- Mission -->
 <section class="py-16 md:py-24 bg-surface-container-low px-6 md:px-8 reveal">  
<div class="max-w-5xl mx-auto text-center">
<span class="text-secondary font-medium tracking-[0.2em] uppercase text-xs mb-3 md:mb-4 block">Our Mission</span>
<h2 class="text-3xl md:text-5xl font-serif text-primary mb-6 md:mb-8 leading-tight">
                    To Provide Compassionate, Evidence-Based Mental Health Care.
                </h2>
<p class="text-on-surface-variant leading-relaxed text-base md:text-lg max-w-2xl mx-auto">
                    Our mission is to deliver high-quality, accessible mental health services that prioritize the well-being of each individual. We strive to create a supportive environment where patients can heal, grow, and thrive.
                </p>
</div>
</section>

<!-- Our Milestones Section - Mobile Optimized Timeline -->
<section class="py-16 md:py-24 bg-surface-container-low overflow-hidden">
<div class="max-w-6xl mx-auto px-6 md:px-8">
<div class="text-center mb-12 md:mb-16 reveal">
<span class="text-secondary font-medium tracking-[0.3em] uppercase text-[10px] mb-3 block">Institutional Progress</span>
<h2 class="text-3xl md:text-5xl font-serif text-primary italic mb-4">Our Milestones</h2>
<div class="w-12 h-px bg-secondary mx-auto mb-6"></div>
<p class="text-on-surface-variant max-w-lg mx-auto text-sm italic font-light leading-relaxed">Tracing our journey from a dedicated vision to a leading clinical institution of restorative care.</p>
</div>
<div class="relative pl-8 md:pl-0">
<!-- Vertical Line (Mobile & Desktop) -->
<div class="absolute left-0 md:left-1/2 top-0 bottom-0 w-px bg-outline-variant/30 md:-translate-x-1/2">
<div class="w-full bg-primary/40 milestone-line-active h-full"></div>
</div>
<div class="space-y-12 md:space-y-4">
<!-- 2015 -->
<div class="relative flex flex-col md:flex-row items-start md:items-center md:justify-center reveal group stagger-1">
<div class="w-full md:w-1/2 md:pr-12 text-left md:text-right order-2 md:order-1">
<div class="milestone-card bg-white p-5 md:p-6 rounded-xl border border-outline-variant/10 shadow-sm inline-block w-full max-w-sm">
<span class="text-[10px] text-secondary font-semibold uppercase tracking-widest mb-1 block">Founding</span>
<h4 class="text-base md:text-lg font-serif text-primary font-semibold mb-2">The Foundation</h4>
<p class="text-on-surface-variant text-xs md:text-sm leading-relaxed">Establishment of the Anandham vision, focusing on holistic mental wellness in urban landscapes.</p>
</div>
</div>
<div class="absolute -left-8 md:left-1/2 md:-translate-x-1/2 z-10 flex items-center justify-center top-0 md:top-auto">
<div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-white border border-primary/20 flex items-center justify-center shadow-md">
<span class="text-[10px] md:text-xs font-serif text-primary font-bold">15</span>
</div>
</div>
<div class="w-full md:w-1/2 md:pl-12 order-1 md:order-2 flex justify-start md:justify-start mb-2 md:mb-0">
<span class="text-4xl md:text-6xl font-serif text-primary/10 italic select-none">2015</span>
</div>
</div>
<!-- 2018 -->
<div class="relative flex flex-col md:flex-row items-start md:items-center md:justify-center reveal group stagger-2 md:pt-4">
<div class="w-full md:w-1/2 md:pr-12 flex justify-start md:justify-end order-1 mb-2 md:mb-0">
<span class="text-4xl md:text-6xl font-serif text-primary/10 italic select-none">2018</span>
</div>
<div class="absolute -left-8 md:left-1/2 md:-translate-x-1/2 z-10 flex items-center justify-center top-0 md:top-auto">
<div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-white border border-primary/20 flex items-center justify-center shadow-md">
<span class="text-[10px] md:text-xs font-serif text-primary font-bold">18</span>
</div>
</div>
<div class="w-full md:w-1/2 md:pl-12 text-left order-2">
<div class="milestone-card bg-white p-5 md:p-6 rounded-xl border border-outline-variant/10 shadow-sm inline-block w-full max-w-sm">
<span class="text-[10px] text-secondary font-semibold uppercase tracking-widest mb-1 block">Expansion</span>
<h4 class="text-base md:text-lg font-serif text-primary font-semibold mb-2">Clinical Expansion</h4>
<p class="text-on-surface-variant text-xs md:text-sm leading-relaxed">Specialized Child and Adolescent Psychiatry units in partnership with research bodies.</p>
</div>
</div>
</div>
<!-- 2021 -->
<div class="relative flex flex-col md:flex-row items-start md:items-center md:justify-center reveal group stagger-3 md:pt-4">
<div class="w-full md:w-1/2 md:pr-12 text-left md:text-right order-2 md:order-1">
<div class="milestone-card bg-white p-5 md:p-6 rounded-xl border border-outline-variant/10 shadow-sm inline-block w-full max-w-sm">
<span class="text-[10px] text-secondary font-semibold uppercase tracking-widest mb-1 block">Innovation</span>
<h4 class="text-base md:text-lg font-serif text-primary font-semibold mb-2">Digital Healing</h4>
<p class="text-on-surface-variant text-xs md:text-sm leading-relaxed">Pioneering secure tele-psychiatry and digital sanctuary tools for remote patient support.</p>
</div>
</div>
<div class="absolute -left-8 md:left-1/2 md:-translate-x-1/2 z-10 flex items-center justify-center top-0 md:top-auto">
<div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-white border border-primary/20 flex items-center justify-center shadow-md">
<span class="text-[10px] md:text-xs font-serif text-primary font-bold">21</span>
</div>
</div>
<div class="w-full md:w-1/2 md:pl-12 order-1 md:order-2 flex justify-start md:justify-start mb-2 md:mb-0">
<span class="text-4xl md:text-6xl font-serif text-primary/10 italic select-none">2021</span>
</div>
</div>
<!-- 2024 -->
<div class="relative flex flex-col md:flex-row items-start md:items-center md:justify-center reveal group stagger-4 md:pt-8">
<div class="w-full md:w-1/2 md:pr-12 flex justify-start md:justify-end order-1 mb-2 md:mb-0">
<span class="text-5xl md:text-7xl font-serif text-primary/10 italic select-none">2024</span>
</div>
<div class="absolute -left-8 md:left-1/2 md:-translate-x-1/2 z-10 flex items-center justify-center top-0 md:top-auto">
<div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-primary border-2 border-secondary/40 flex items-center justify-center shadow-xl ring-4 ring-white">
<span class="text-[10px] md:text-xs font-serif text-white font-bold">24</span>
</div>
</div>
<div class="w-full md:w-1/2 md:pl-12 text-left order-2">
<div class="milestone-card bg-primary-container p-6 md:p-7 rounded-xl border border-secondary/20 shadow-xl inline-block w-full max-w-md transform md:translate-x-2">
<div class="flex items-center gap-2 mb-2">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">stars</span>
<span class="text-secondary font-medium tracking-widest uppercase text-[10px]">Center of Excellence</span>
</div>
<h4 class="text-lg md:text-xl font-serif text-white italic mb-2">Global Excellence</h4>
<p class="text-white/80 text-xs md:text-sm leading-relaxed">Accreditation as a leading Transcultural Psychotherapy Center, setting international standards for clinical care.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Values Bento Grid -->
<section class="py-16 md:py-24 px-6 md:px-8 bg-surface reveal">
<div class="max-w-7xl mx-auto">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Quote Block -->
<div class="md:col-span-2 bg-white p-8 md:p-12 rounded-2xl border border-outline-variant/20 flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow">
<div>
<h3 class="text-2xl md:text-3xl font-serif text-primary mb-6">The "Perspective" Quote</h3>
<div class="relative pl-6 md:pl-8">
<div class="absolute left-0 top-0 w-1 h-full bg-secondary"></div>
<blockquote class="text-xl md:text-2xl italic font-serif text-primary leading-relaxed">
                                "We do not simply treat symptoms; we restore the architectural integrity of the human mind through evidence-based compassion."
                            </blockquote>
</div>
</div>
<div class="mt-8 flex flex-wrap items-center gap-4 text-secondary font-medium uppercase tracking-widest text-[10px] md:text-xs">
<span>Clinical Research</span>
<span class="hidden md:block w-8 h-px bg-outline-variant"></span>
<span>Restorative Care</span>
</div>
</div>
<!-- Trust Block -->
<div class="bg-primary-container p-8 md:p-12 rounded-2xl flex flex-col justify-center items-center text-center text-white hover:scale-[1.02] transition-transform duration-300">
<span class="material-symbols-outlined text-secondary-fixed text-5xl md:text-6xl mb-4 md:mb-6">verified_user</span>
<h4 class="text-xl md:text-2xl font-serif italic mb-4">Unwavering Trust</h4>
<p class="text-white/70 text-sm">Ensuring patient privacy and ethical excellence in every clinical interaction.</p>
</div>
<!-- Interior Block -->
<!-- <div class="bg-surface-container-high p-8 md:p-12 rounded-2xl flex flex-col justify-between group overflow-hidden">
<p class="text-primary font-serif text-lg md:text-xl italic leading-snug">
                        "A sanctuary designed for clarity and modern research journals."
                    </p>
<div class="overflow-hidden rounded-lg mt-6 md:mt-8">
<img alt="Interior of a calm clinical space" class="w-full h-32 object-cover opacity-60 transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByC4ZumPaIMe3etxLahDjsyVuvIIrOJPx2K5p4GDW3dNzgzzHH_YMBBBNR_cAP750_iSrTcVZZnQ9U7ECyzCfppkxbSU8fxMfn4tURTlUCnzCKAhMi3CTd6PqeEOpQ1p3nCVbrUGLNRaJVMS1T0LmOlRY8D-ogWrAW7tk-AeblufRlpNTdwRJAdyXWGcugiUXlSq05PoW9v7DYdtTWIEK6us9bzrwAKqwtNYm7wRmY0yejQd8gpfJKPZxWyKnt0q7wtLEu-sLkMdfL"/>
</div>
</div> -->
<!-- Ethics Block -->
<!-- <div class="md:col-span-2 bg-secondary p-8 md:p-12 rounded-2xl text-white flex flex-col md:flex-row gap-6 md:gap-8 items-center shadow-lg">
<div class="md:w-2/3 text-center md:text-left">
<h3 class="text-2xl md:text-3xl font-serif mb-4 italic">Commitment to Ethics</h3>
<p class="text-white/90 text-sm md:text-base leading-relaxed">
                            Our medical protocols are governed by a strict Ethics Policy, ensuring that restorative care is delivered with full transparency and institutional integrity.
                        </p>
</div>
<div class="md:w-1/3 w-full">
<button class="w-full bg-white text-primary px-4 md:px-6 py-4 rounded-lg font-semibold hover:bg-opacity-90 transition-all active:scale-95 shadow-lg uppercase tracking-widest text-[10px] md:text-xs">
                            View Annual Reports
                        </button>
</div>
</div>
</div> -->
</div>
</section>
</main>

@endsection