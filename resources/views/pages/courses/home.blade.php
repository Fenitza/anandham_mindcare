@extends('layouts.hosp')

@section('content')

<header class="relative min-h-[716px] flex items-center overflow-hidden bg-surface py-20 px-8">
<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-7 z-10 reveal">
<div class="inline-flex items-center gap-2 mb-6 text-secondary font-medium tracking-wide uppercase text-xs">
<span class="w-8 h-[1px] bg-secondary"></span>
                    Excellence in Mental Health Education
                </div>
<h1 class="serif-text text-3xl sm:text-4xl md:text-6xl lg:text-7xl xl:text-8xl  text-primary leading-tight mb-8 reveal">
                    Empowering the Next Generation.
                </h1>
<p class="text-xl md:text-2xl text-on-surface-variant font-light max-w-xl mb-10 leading-relaxed reveal">
                    Empowering the Next Generation of Mental Health Professionals through evidence-based clinical training and innovative research.
                </p>
<div class="flex flex-wrap gap-4 reveal">
<button class="bg-primary text-white px-8 py-4 rounded-lg font-medium hover:bg-primary-container transition-colors shadow-lg shadow-primary/10">
                        Explore More
                    </button>
<!-- <button class="px-8 py-4 rounded-lg font-medium text-primary hover:bg-surface-container-low transition-colors border border-outline-variant/30">
                        Download Prospectus
                    </button> -->
</div>
</div>
<div class="lg:col-span-5 relative z-10 reveal">
<div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl relative z-0">
<img class="w-full h-full object-cover" data-alt="Professional clinical setting with warm natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1dGG54lj6HBhBA7yT6pvSVoVDKkZnPKDTZKX3qZUYydcTc9kJj-fCbwXep-OkW49UIUfLXl4ojas2AhRXm5NRbdQp2YgB0wi7R-TvT1drbk_I0_wYdIIhliEGdOQeYXYO11hOpq6IqWPIsnRovBv93DZoqAgEDoYEyL2mb1EbJhsF9Br9_6871LjUNGTcDO24Q5sVp72wlVjvaPNjlzQp7NXA4HDiEtQN7rLgaTjjSQIknjxLWM90S7lZbqz90TeqEIUVxsKR65wh"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
</div>
<div class="absolute -bottom-8 -left-8 bg-white/90 backdrop-blur-md p-8 rounded-xl shadow-xl max-w-xs z-20 border-l-4 border-tertiary-fixed-dim reveal">
<p class="serif-text text-xl italic text-primary">“Healing begins when you allow yourself to be heard.”</p>
<p class="mt-4 text-sm font-bold text-on-surface-variant uppercase tracking-widest">— Director</p>
</div>
</div>
</div>
<!-- Decorative Element -->
<div class="absolute right-0 top-0 w-1/3 h-full bg-surface-container-low -z-10 opacity-50"></div>
</header>

<!-- Upcoming Webinars & Workshops -->
<section class="py-24 px-8 bg-surface-container-low">
<div class="max-w-7xl mx-auto">
<div class="text-center max-w-2xl mx-auto mb-20 reveal">
<h2 class="serif-text text-4xl text-primary mb-4">Upcoming Webinars &amp; Workshops</h2>
<p class="text-on-surface-variant">Stay updated with the latest clinical trends and research breakthroughs through our live interactive sessions.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
<!-- Webinar 1 -->
<div class="bg-surface-container-lowest p-8 rounded-xl flex gap-8 items-start hover:bg-white transition-colors border-l-4 border-secondary shadow-sm reveal">
<div class="hidden sm:flex flex-col items-center bg-surface-container p-4 rounded-lg min-w-[100px]">
<span class="text-secondary font-bold text-2xl">24</span>
<span class="text-on-surface-variant text-xs uppercase font-semibold">Oct 2024</span>
</div>
<div>
<div class="flex items-center gap-2 mb-2">
<span class="material-symbols-outlined text-secondary text-lg">videocam</span>
<span class="text-xs font-bold text-secondary uppercase tracking-widest">Live Free Webinar</span>
</div>
<h4 class="serif-text text-2xl text-primary mb-3">Neuroscience of Trauma Recovery</h4>
<p class="text-on-surface-variant text-sm mb-6 leading-relaxed">Exploring new neural pathway therapies for long-term PTSD patients. Led by Dr. Elena Vance.</p>
<div class="flex items-center gap-6">
<span class="text-xs font-semibold text-on-surface flex items-center gap-1">
<span class="material-symbols-outlined text-sm">schedule</span> 18:00 - 20:00 IST
                            </span>
<a class="text-secondary text-sm font-bold underline" href="#">Reserve Seat</a>
</div>
</div>
</div>
<!-- Webinar 2 -->
<div class="bg-surface-container-lowest p-8 rounded-xl flex gap-8 items-start hover:bg-white transition-colors border-l-4 border-tertiary-fixed-dim shadow-sm reveal">
<div class="hidden sm:flex flex-col items-center bg-surface-container p-4 rounded-lg min-w-[100px]">
<span class="text-tertiary-fixed-dim font-bold text-2xl">08</span>
<span class="text-on-surface-variant text-xs uppercase font-semibold">Nov 2024</span>
</div>
<div>
<div class="flex items-center gap-2 mb-2">
<span class="material-symbols-outlined text-tertiary-fixed-dim text-lg">groups</span>
<span class="text-xs font-bold text-tertiary-fixed-dim uppercase tracking-widest">Premium Workshop</span>
</div>
<h4 class="serif-text text-2xl text-primary mb-3">Advanced Psychometric Assessment</h4>
<p class="text-on-surface-variant text-sm mb-6 leading-relaxed">Hands-on training session on the latest standardized clinical assessment tools.</p>
<div class="flex items-center gap-6">
<span class="text-xs font-semibold text-on-surface flex items-center gap-1">
<span class="material-symbols-outlined text-sm">schedule</span> 10:00 - 16:00 IST
                            </span>
<a class="text-secondary text-sm font-bold underline" href="#">Join Waitlist</a>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Featured Programs - Bento Style -->
<section class="py-24 px-8 max-w-7xl mx-auto">
<div class="flex justify-between items-end mb-16 reveal">
<div>
<h2 class="serif-text text-4xl md:text-5xl text-primary mb-4">Featured Programs</h2>
<div class="h-1.5 w-24 bg-tertiary-fixed-dim"></div>
</div>
<a class="text-secondary font-semibold flex items-center gap-2 hover:underline" href="#">
                View All Courses <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Course Card 1 -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col reveal">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Child and adolescent psychology therapy session illustration" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2oce5KHqmcWjaTFM8TJeru5ZEhlV0-w-ny4-H9VWFBrfXHLDC5ZRlk_cPdnqouwH_RRjsk6EjdV4rKp3hhO_-mv2DPTjgrjIf82cEBG-sobubeWatHDniOCXDZUrWBicPZceY2mdOyjsXX9IRllPz5MbFGTnladHfs7bMC2s5cOnaQrt1MromjqPRGMOxk-G_yOaccZJHJICUgByKmMkbjdJkIVvxJ9TEU-naBIC-lZ6H1tmRPdLDxqnZvTWZL839IVYup2iP6KTq"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded text-xs font-bold text-primary uppercase tracking-tighter">
                        Enrolling Now
                    </div>
</div>
<div class="p-8 flex flex-col flex-grow">
<div class="flex items-center gap-4 text-xs font-semibold text-secondary mb-4 uppercase tracking-widest">
<span>Clinical</span>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span>12 Months</span>
</div>
<h3 class="serif-text text-2xl text-primary mb-4 group-hover:text-secondary transition-colors">Child &amp; Adolescent Mental Health</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-8">A comprehensive specialization focusing on developmental psychopathology and early intervention strategies.</p>
<div class="mt-auto flex items-center justify-between pt-6 border-t border-surface-container">
<span class="text-sm font-medium text-on-surface/60">Duration: 1 Year</span>
<button class="text-primary font-bold text-sm uppercase tracking-widest hover:text-secondary flex items-center gap-1 group/btn">
                            Register <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
<!-- Course Card 2 -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col reveal">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Modern clinical lecture setting with psychological charts" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGwEVjdlruncteFazv4DBOxYapi72p3E3mHUZB8LHPylwbPPWf0A6ECDXnWeu3xAk1WPOiOMf8EdcYiIP_NdEMz8zlev57Bcfq5fFuYZTopwJICgc7af2hK4o_EWVa1mUWmHLthYZPnWC4V5NrMQMTg8CNzfWW1t3PYeWEh2-ukS84qiSICTNIMbP7VJ08gcLSPCaTgWG-_zdq-_dDFuU5vi-VIxaLDz5Kafslgty5rCjnQKfMXppnLpnvE9lM6fbudM9x7E9NHm6M"/>
</div>
<div class="p-8 flex flex-col flex-grow">
<div class="flex items-center gap-4 text-xs font-semibold text-secondary mb-4 uppercase tracking-widest">
<span>Advanced</span>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span>6 Months</span>
</div>
<h3 class="serif-text text-2xl text-primary mb-4 group-hover:text-secondary transition-colors">Clinical Psychology Masterclass</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-8">Advanced diagnostic training and therapeutic techniques for practicing psychologists seeking refinement.</p>
<div class="mt-auto flex items-center justify-between pt-6 border-t border-surface-container">
<span class="text-sm font-medium text-on-surface/60">Duration: 6 Months</span>
<button class="text-primary font-bold text-sm uppercase tracking-widest hover:text-secondary flex items-center gap-1 group/btn">
                            Register <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
<!-- Course Card 3 -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col reveal">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Therapy notes and professional office setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAYwnNTXg00MSwWZ6wQjpJ1e8wxToDUaTUrj5TRYUwu6EzFcIY8pnOFz3TYdPYVM_pnZao0FXUtPkkUxXhKRSj_2omjl26cdcLz3ZYudTmr9CoICcV51fkcPEwZx-1kkoIrr3MZGvrCvuqIZg_egHAXn9Y4PwkBaIMDo5XhTKFUvFgFAx_2vGss54bxX2a_K7axQn5ZURpxmrEwMEqEaWcw8xJqUINO4TZXrufr7_m93TjzIKo7HgrcZ4rJoASzPca2HczTjzf6sb2"/>
</div>
<div class="p-8 flex flex-col flex-grow">
<div class="flex items-center gap-4 text-xs font-semibold text-secondary mb-4 uppercase tracking-widest">
<span>Workshop</span>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span>3 Months</span>
</div>
<h3 class="serif-text text-2xl text-primary mb-4 group-hover:text-secondary transition-colors">Cognitive Behavioral Therapy (CBT) Essentials</h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-8">Hands-on certification in CBT methodologies, case conceptualization, and practical application skills.</p>
<div class="mt-auto flex items-center justify-between pt-6 border-t border-surface-container">
<span class="text-sm font-medium text-on-surface/60">Duration: 3 Months</span>
<button class="text-primary font-bold text-sm uppercase tracking-widest hover:text-secondary flex items-center gap-1 group/btn">
                            Register <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
</section>
<!-- Professional Ethics Highlight (Asymmetric Layout) -->
<section class="bg-primary text-white py-24 overflow-hidden relative">
<div class="max-w-7xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
<div class="relative z-10 reveal">
<span class="text-tertiary-fixed-dim font-bold tracking-[0.2em] uppercase text-xs mb-6 block">Core Curriculum</span>
<h2 class="serif-text text-5xl leading-tight mb-8">Professional Ethics in Clinical Practice</h2>
<p class="text-primary-fixed-dim text-lg mb-10 leading-relaxed font-light">
                    Our cornerstone module designed to navigate the complex legal and moral landscape of modern healthcare. Learn to protect patient integrity while maintaining clinical excellence.
                </p>
<div class="flex items-center gap-8 mb-12">
<div class="flex flex-col">
<span class="text-3xl font-serif text-tertiary-fixed-dim">100%</span>
<span class="text-xs uppercase tracking-widest opacity-60">Compliance Focused</span>
</div>
<div class="w-[1px] h-12 bg-white/10"></div>
<div class="flex flex-col">
<span class="text-3xl font-serif text-tertiary-fixed-dim">Global</span>
<span class="text-xs uppercase tracking-widest opacity-60">Standard Training</span>
</div>
</div>
<button class="bg-tertiary-fixed-dim text-primary px-10 py-4 rounded-lg font-bold hover:brightness-110 transition-all">
                    Register Now
                </button>
</div>
<div class="relative z-10 reveal">
<div class="aspect-square bg-white/5 rounded-full absolute -top-20 -right-20 w-[120%] -z-10 border border-white/10"></div>
<img class="rounded-2xl shadow-2xl relative z-10 w-full h-[500px] object-cover" data-alt="Ethics and law books in a professional medical office" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgiRuJpHVFqx3YnqEVaAbO6fcS0RnhTNCjzIpFaxPBMEU_icHXz7Bm60R3FclEz6HjbZjFZujr5KZOtKs-vailwn3oBgoz4yjrHDUc5HieY6zFGEgU-0WvIsp-Ynpa3YX5LR5agWTcCJoNVpTSkDNFe05EEE1ILb_8lX_WiLLiOPiElFEoVITf9z3cBsMNH4cMlvqesXif3gqDxIhNhC8h7OVZXWNgKOxuvPLfv__zNrW7HcsVQKv4z4UP976VYw5tm-bGYOPGpVPq"/>
</div>
</div>
</section>

<!-- Latest Insights / Academic Journal -->
<section class="py-24 px-8 max-w-7xl mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
<div class="lg:col-span-4 reveal">
<h2 class="serif-text text-5xl text-primary mb-6 leading-tight">Academic Journal</h2>
<p class="text-on-surface-variant mb-10 leading-relaxed">Cutting-edge research, peer-reviewed articles, and clinical perspectives curated by our faculty board.</p>
<button class="flex items-center gap-2 text-primary font-bold tracking-widest text-xs uppercase group">
                    Visit Journal Archive <span class="material-symbols-outlined text-sm group-hover:translate-x-2 transition-transform">east</span>
</button>
</div>
<div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-12">
<article class="reveal">
<div class="aspect-video mb-6 rounded-lg overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover" data-alt="Abstract clinical data visualization" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5GPDmFlq3DINddyBV1VhHw_mVBKKvhwh4LoASqVo9wHk3Aa12hVPM1NHLN6L_vfDMdxGhvwO9PHuVsB0AifQONmfq-nklzHTp3BOxcRRuRNf1jX2rG_eQFXIZ44qb6CWG1s_KlNZ7j3wEupDIRdMtdv8jy9DZKoj1Mg3NnZLlxfQskqcjCBXhoJrBRzyznricQUrzR6cpIVsJfv-I-zAAlD0g92OHKQJi3Hb-FEQAu1zkFGbZMiCbxwH1QkVjESGXXUNdpZJC6W_0"/>
</div>
<span class="text-secondary font-bold text-xs uppercase tracking-widest mb-3 block">Research Paper • Vol 14</span>
<h5 class="serif-text text-2xl text-primary mb-4">Teletherapy Outcomes in Rural Populations</h5>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">A longitudinal study analyzing the effectiveness of digital intervention in regions with limited mental health access.</p>
<a class="text-primary font-semibold text-sm hover:text-secondary" href="#">Read Article</a>
</article>
<article>
<div class="aspect-video mb-6 rounded-lg overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover" data-alt="Brain scan with artistic medical overlay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQAtxOtXRlnxRv8-0dotAerComoENbwf1yPpBzduYe_exzMEqeOfHRnFbzBbFNW-tVi2SDaBumQX6vH2zDmJqtd5YbCMd1w7zHe9DFosqAERnJNCahdMHtmrARdoHnekGvw-0JAEYJtfq90Hxg7ay-xSTSJe3ev5uUR8AqJiH9OOO0OTOuTzdPj6XaQPzhp3SwKOFQzbkZV7Y-Gz_OA_XkJL4REB30OvgJ2r16zEHJtVec6AKstuQA3pGLwwfIjVudUJYHbZdE1NVu"/>
</div>
<span class="text-secondary font-bold text-xs uppercase tracking-widest mb-3 block">Case Study • Oct 2024</span>
<h5 class="serif-text text-2xl text-primary mb-4">Integrative Approaches to Chronic Insomnia</h5>
<p class="text-on-surface-variant text-sm leading-relaxed mb-6">Reviewing multi-modal treatments combining CBT-I with mindfulness-based stress reduction techniques.</p>
<a class="text-primary font-semibold text-sm hover:text-secondary" href="#">Read Article</a>
</article>
</div>
</div>
</section>

@endsection