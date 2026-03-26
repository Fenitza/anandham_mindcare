@extends('layouts.user')
@section('title', 'User Dashboard - Anandham Mindcare')
@section('content')

<!-- Welcome Header -->
<section class="mb-16">
<div class="flex items-end justify-between">
<div>
<h2 class="text-5xl font-headline font-medium text-primary mb-2">Welcome back, Dr. Aristhanes</h2>
<p class="text-on-surface-variant max-w-2xl text-lg italic">"The art of healing comes from nature, not from the physician. Therefore the physician must start from nature, with an open mind."</p>
</div>
<div class="hidden lg:block">
<span class="text-sm font-label uppercase tracking-widest text-secondary font-bold">Academic Session 2024</span>
</div>
</div>
</section>
<!-- Progress Overview Grid -->
<section class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-16">
<div class="bg-surface-container-lowest p-8 ghost-border rounded-xl">
<div class="flex justify-between items-start mb-6">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="auto_stories">auto_stories</span>
<span class="text-xs font-bold text-secondary uppercase tracking-tighter">Active</span>
</div>
<p class="text-4xl font-headline font-bold text-primary mb-1">2</p>
<p class="text-sm font-label text-on-surface-variant">Courses in Progress</p>
</div>
<div class="bg-surface-container-lowest p-8 ghost-border rounded-xl">
<div class="flex justify-between items-start mb-6">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="videocam">videocam</span>
<span class="text-xs font-bold text-on-tertiary-container uppercase tracking-tighter">Zoom</span>
</div>
<p class="text-4xl font-headline font-bold text-primary mb-1">3</p>
<p class="text-sm font-label text-on-surface-variant">Live Sessions Today</p>
</div>
<div class="bg-surface-container-lowest p-8 ghost-border rounded-xl">
<div class="flex justify-between items-start mb-6">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="task_alt">task_alt</span>
<span class="text-xs font-bold text-on-tertiary-container uppercase tracking-tighter">Verified</span>
</div>
<p class="text-4xl font-headline font-bold text-primary mb-1">14</p>
<p class="text-sm font-label text-on-surface-variant">Courses Completed</p>
</div>
<div class="bg-surface-container-lowest p-8 ghost-border rounded-xl relative overflow-hidden">
<div class="flex justify-between items-start mb-6">
<span class="material-symbols-outlined text-secondary text-3xl" data-icon="verified">verified</span>
<span class="text-xs font-bold text-secondary uppercase tracking-tighter">CME Portfolio</span>
</div>
<div class="flex items-baseline gap-1">
<p class="text-4xl font-headline font-bold text-primary">18.5</p>
<p class="text-lg font-headline text-on-surface-variant">/ 30</p>
</div>
<p class="text-sm font-label text-on-surface-variant">Annual CME Credits</p>
<div class="absolute bottom-0 left-0 w-full h-1 bg-surface-container-highest">
<div class="h-full bg-secondary w-[62%]"></div>
</div>
</div>
</section>
<!-- Active Pathways & Live Widget -->
<section class="mb-24">
<div class="flex items-center gap-4 mb-10">
<h3 class="text-3xl font-headline font-bold text-primary">Active Learning</h3>
<div class="h-[1px] flex-1 bg-outline-variant/20"></div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Featured Active Course -->
<div class="lg:col-span-8 bg-primary rounded-2xl overflow-hidden relative min-h-[480px] flex flex-col justify-end p-10 group">
<img alt="Microscopic view of neurons" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-40 group-hover:scale-105 transition-transform duration-700" data-alt="abstract close-up of neural network connections with soft blue glowing pulses and deep navy background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-hdWJB589r0U9hUgNL4-Twnf2mCf0sP4FRthuB56tJdHu6o8Z0l4bZnY80bL4vTFoYNMV3jbGsa2rgVM-vDHED3R6_k0goY2SD9O426hASLIfp12pPRKKC1tHGbY_3qFwGs6J3UjcNTnTUv-Q4W3nAvzctBJtjRcr0e6SM5cLXzXtFDIxI1b_aNAoiFYChBSmQSIjUoKmDSbvP34cVzuh6_bBF7RZDib-aiL4lqPfXwS0jWBiiocu7Qdgh_OD8FB3oDAv_PUA4NoU"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/60 to-transparent"></div>
<div class="relative z-10">
<div class="flex items-center gap-3 mb-4">
<span class="inline-block px-3 py-1 bg-secondary text-on-secondary-fixed text-[10px] font-bold uppercase tracking-widest rounded-full">Priority Curriculum</span>
<span class="flex items-center gap-1.5 px-3 py-1 bg-white/10 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-widest rounded-full border border-white/20">
<span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span> Live via Zoom
                            </span>
</div>
<h4 class="text-4xl font-headline text-white mb-8">Neural Correlates of Cognitive Behavioral Therapy</h4>
<div class="flex flex-wrap items-center gap-4">
<button class="bg-secondary text-on-secondary-fixed px-8 py-3 rounded-lg font-bold flex items-center gap-2 hover:bg-secondary/90 transition-all font-label">
<span class="material-symbols-outlined" data-icon="videocam">videocam</span>
                                Join Zoom Session
                            </button>
<button class="bg-white/10 backdrop-blur-sm text-white border border-white/30 px-6 py-3 rounded-lg font-bold hover:bg-white/20 transition-colors font-label">
                                Watch Recordings
                            </button>
<div class="flex-1 min-w-[200px] ml-auto">
<div class="flex justify-between text-white/70 text-sm mb-2 font-label">
<span>Progress</span>
<span>65%</span>
</div>
<div class="w-full h-1.5 bg-white/20 rounded-full">
<div class="h-full bg-secondary rounded-full" style="width: 65%"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Upcoming Live Sessions Widget -->
<div class="lg:col-span-4 flex flex-col gap-6">
<div class="bg-surface-container-lowest p-6 ghost-border rounded-xl shadow-sm">
<div class="flex justify-between items-center mb-6">
<h5 class="text-lg font-headline font-bold text-primary">Upcoming Live Sessions</h5>
<span class="text-[10px] font-bold text-secondary uppercase tracking-widest">Zoom Links</span>
</div>
<div class="space-y-4">
<!-- Live Item 1 -->
<div class="group p-4 bg-surface-container-low rounded-lg border-l-4 border-secondary hover:bg-surface-container-high transition-colors">
<div class="flex justify-between items-start mb-1">
<span class="text-[10px] font-bold text-primary/60 uppercase tracking-tighter">Today, 2:00 PM</span>
<span class="material-symbols-outlined text-secondary text-lg" data-icon="link">link</span>
</div>
<p class="text-sm font-bold text-primary mb-3 line-clamp-1">Advanced Neuroplasticity Seminar</p>
<a class="inline-flex items-center gap-2 text-xs font-bold text-secondary hover:underline uppercase tracking-widest" href="#">
                                    Join Zoom Meeting
                                </a>
</div>
<!-- Live Item 2 -->
<div class="group p-4 bg-transparent border border-outline-variant/30 rounded-lg hover:bg-surface-container-low transition-colors">
<div class="flex justify-between items-start mb-1">
<span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-tighter">Tomorrow, 10:30 AM</span>
<span class="material-symbols-outlined text-outline text-lg" data-icon="event">event</span>
</div>
<p class="text-sm font-bold text-primary mb-3 line-clamp-1">Clinical Ethics in Geriatrics</p>
<button class="text-[10px] font-bold text-outline uppercase tracking-widest cursor-default">
                                    Link available in 18h
                                </button>
</div>
<!-- Live Item 3 -->
<div class="group p-4 bg-transparent border border-outline-variant/30 rounded-lg hover:bg-surface-container-low transition-colors">
<div class="flex justify-between items-start mb-1">
<span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-tighter">Aug 24, 4:00 PM</span>
</div>
<p class="text-sm font-bold text-primary mb-3 line-clamp-1">Pharmacotherapy Q&amp;A Session</p>
<button class="text-[10px] font-bold text-outline uppercase tracking-widest cursor-default">
                                    Pre-registration Open
                                </button>
</div>
</div>
<button class="w-full mt-6 py-2 text-xs font-bold text-on-surface-variant uppercase tracking-widest border border-outline-variant/30 rounded-lg hover:bg-surface-container-low transition-colors">
                            View Academy Calendar
                        </button>
</div>
<!-- Quote Block -->
<div class="bg-surface-container-low p-6 perspective-border rounded-r-xl italic text-primary mt-auto">
<p class="text-base font-headline">"True clinical mastery is the bridge between rigorous science and the profound silence of human suffering."</p>
<p class="text-xs font-label mt-3 font-bold not-italic">— Academy Ethos</p>
</div>
</div>
</div>
</section>
<!-- Course Catalog (Bento Grid Style) -->
<section>
<div class="flex items-center justify-between mb-10">
<h3 class="text-3xl font-headline font-bold text-primary">Zoom-Delivered Curricula</h3>
<a class="text-secondary font-bold text-sm uppercase tracking-widest hover:underline" href="#">Explore Full Library</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Course Card 1 -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden ghost-border flex flex-col hover:shadow-xl transition-all duration-300">
<div class="h-48 overflow-hidden relative">
<img alt="Child playing quietly" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="soft-focus image of a young child playing with wooden blocks in a sunlit clinical room with warm earthy tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7fklRD9rrGPGUJqfPd5_s-w4G7gWWQRTIiQSzfJUc4MKf6Mbsk_E-Y98l1hfg_lb93F5fV1qfC9pDUCZUPTwrY3f9I06_sRqm2ur8UF7FpD6vlM4HJE1siqn2sSNYUpYEdmbDdum-tKR5BN3mKaijR8hirUsfFIGfvwTjaDZK3VJZXNg0J_tMiW14oz7YvIZGE41i7Hhohz6ziFyk3V-XC7wnkimXf_04QYzyAlkNMZM9_aFHkWlQ9ETluaBr2-WQ5lirCquZZyeO"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-2 py-1 rounded text-[8px] font-bold text-primary uppercase tracking-widest flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-[10px]" data-icon="videocam">videocam</span> Live
                        </div>
</div>
<div class="p-6 flex-1 flex flex-col">
<span class="text-[10px] font-bold text-secondary uppercase tracking-widest mb-2">Pediatrics</span>
<h6 class="text-xl font-headline font-bold text-primary mb-3">Pediatric Anxiety Manifestations</h6>
<p class="text-sm text-on-surface-variant font-body mb-6 line-clamp-2">Live assessment methodology via secure tele-clinical interfaces.</p>
<div class="mt-auto flex items-center justify-between">
<span class="text-xs font-label text-outline">4.5 CME Credits</span>
<button class="text-primary font-bold text-sm flex items-center gap-2 group-hover:translate-x-1 transition-transform">
                                Enroll <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
</div>
<!-- Course Card 2 -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden ghost-border flex flex-col hover:shadow-xl transition-all duration-300">
<div class="h-48 overflow-hidden relative">
<img alt="Advanced laboratory equipment" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="high-end laboratory setting with futuristic clean lines and glowing blue instrumentation in a sterile environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuARX5LiPJvSIOwJ-47OZ9UtAOwlNtgqLlXYri7hiB726hSqOwDA6HZdgbrjhZfZj0z96hfbgSpaw95KxWCEfAF8viFNNKIGJJ1i5rT8nMmcmT90T5gTzEiF4jVNZXbgmbVqsno0mU35jsR1Ern0OVuL2WHf2GJHfd-qr94ncYjcJPwCslc0NrEE6FmqtWFuQuwQmteFD5igmDrCi2H-A9ehaZWS6APor32Kzvw6mCI4jZmiCerrGJaREf96L1vE7uiHbkv9PagT4Woz"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-2 py-1 rounded text-[8px] font-bold text-primary uppercase tracking-widest flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-[10px]" data-icon="videocam">videocam</span> Live
                        </div>
</div>
<div class="p-6 flex-1 flex flex-col">
<span class="text-[10px] font-bold text-secondary uppercase tracking-widest mb-2">Research</span>
<h6 class="text-xl font-headline font-bold text-primary mb-3">Precision Diagnostics in PTSD</h6>
<p class="text-sm text-on-surface-variant font-body mb-6 line-clamp-2">Weekly interactive Zoom workshops with clinical researchers.</p>
<div class="mt-auto flex items-center justify-between">
<span class="text-xs font-label text-outline">6.0 CME Credits</span>
<button class="text-primary font-bold text-sm flex items-center gap-2 group-hover:translate-x-1 transition-transform">
                                Enroll <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
</div>
<!-- Course Card 3 -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden ghost-border flex flex-col hover:shadow-xl transition-all duration-300">
<div class="h-48 overflow-hidden relative">
<img alt="Stethoscope and journal" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="close-up of a high-end fountain pen resting on a medical journal next to a leather-bound notebook and antique stethoscope" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA37IDDDIVhGXNcWhZYlkojBN_i40gXJTnS7CFAjgAQoSGl0GOru4ie2vH8YNAHc_Bq92bUlbyfVpr1lqArtmZHsjTKevlB6EjkkuEtf1N2jmVIxmrJid21ZT3e4R4tJ3UbkPGCwUVgcrlwZzCAVwKpKtDuYzkd2BnQk23eU56RcUOs1ISAJcMI6Z3EAn1OIbFf9XhdmhFOJCqGRcI_QLF1tiMFtIPx1adHUQaYnvUfcGc2bzYOSOBWxoLdiJTljQc4LLcfi8HclKj7"/>
</div>
<div class="p-6 flex-1 flex flex-col">
<span class="text-[10px] font-bold text-secondary uppercase tracking-widest mb-2">Ethics</span>
<h6 class="text-xl font-headline font-bold text-primary mb-3">Bioethics of Neuro-Intervention</h6>
<p class="text-sm text-on-surface-variant font-body mb-6 line-clamp-2">Self-paced video modules with monthly Live Zoom Q&amp;A sessions.</p>
<div class="mt-auto flex items-center justify-between">
<span class="text-xs font-label text-outline">3.5 CME Credits</span>
<button class="text-primary font-bold text-sm flex items-center gap-2 group-hover:translate-x-1 transition-transform">
                                Enroll <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
</section>

@endsection