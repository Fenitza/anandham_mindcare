@extends('layouts.hosp')

@section('content')
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "on-primary": "#ffffff",
              "primary-container": "#1b3b6f",
              "secondary": "#755b00",
              "on-surface-variant": "#43474f",
              "inverse-surface": "#2d3133",
              "surface-tint": "#415e94",
              "on-primary-fixed-variant": "#28467b",
              "inverse-primary": "#acc7ff",
              "on-surface": "#191c1e",
              "secondary-container": "#fccc38",
              "outline-variant": "#c4c6d1",
              "on-error-container": "#93000a",
              "surface": "#f7f9fc",
              "on-tertiary-fixed": "#001f2a",
              "primary-fixed-dim": "#acc7ff",
              "surface-container": "#eceef1",
              "tertiary": "#0c2a35",
              "error-container": "#ffdad6",
              "on-secondary-fixed": "#241a00",
              "on-primary-container": "#8aa7e1",
              "error": "#ba1a1a",
              "primary": "#002555",
              "on-tertiary-container": "#8fabba",
              "surface-container-high": "#e6e8eb",
              "surface-container-highest": "#e0e3e6",
              "on-secondary-fixed-variant": "#584400",
              "on-secondary": "#ffffff",
              "inverse-on-surface": "#eff1f4",
              "surface-bright": "#f7f9fc",
              "surface-container-low": "#f2f4f7",
              "secondary-fixed": "#ffdf90",
              "on-background": "#191c1e",
              "outline": "#747780",
              "surface-container-lowest": "#ffffff",
              "surface-dim": "#d8dadd",
              "surface-variant": "#e0e3e6",
              "tertiary-fixed-dim": "#aecbda",
              "tertiary-container": "#25404c",
              "primary-fixed": "#d8e2ff",
              "on-primary-fixed": "#001a41",
              "secondary-fixed-dim": "#f0c12c",
              "tertiary-fixed": "#cae7f6",
              "on-secondary-container": "#6f5600",
              "background": "#f7f9fc",
              "on-tertiary": "#ffffff",
              "on-tertiary-fixed-variant": "#2f4a57",
              "on-error": "#ffffff"
            },
            fontFamily: {
              "headline": ["Newsreader", "serif"],
              "body": ["Work Sans", "sans-serif"],
              "label": ["Work Sans", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
            animation: {
              'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
              'slow-zoom': 'slowZoom 20s infinite alternate linear',
            },
            keyframes: {
              fadeInUp: {
                '0%': { opacity: '0', transform: 'translateY(30px)' },
                '100%': { opacity: '1', transform: 'translateY(0)' },
              },
              slowZoom: {
                '0%': { transform: 'scale(1)' },
                '100%': { transform: 'scale(1.1)' },
              }
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .editorial-gradient {
            background: linear-gradient(135deg, #002555 0%, #1b3b6f 100%);
        }
        .ghost-border {
            border: 1px solid rgba(196, 198, 209, 0.15);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .reveal {
            opacity: 0;
        }
        .reveal.visible {
            animation: fadeInUp 0.8s ease-out forwards;
        }
    </style>

<section class="relative h-[80vh] w-full overflow-hidden flex items-center justify-center pt-20">
<div class="absolute inset-0 z-0">
<img alt="Restorative Research Environment" class="w-full h-full object-cover animate-slow-zoom" src="https://lh3.googleusercontent.com/aida-public/AB6AXuChdqv0BBe9Eblx2j84uUU8Zb3WOMAs1CaGMJI2OSj2hDm2dka3GmzRQiHYsOUc-Q9nvezPDMs5TY7LRB6XekXqpzr5CQ9YZ8BnpYVREAAnRSZw840aAWfARoZizxzmgTZ2noqTnJvDOPosqCteUZET9IcVSePifC1vvbIAPOM73aH-WBdX4QimAVQhA_o0sC5jZER0YGMQR023pkkNEqFUDIuP6TR7PYiXOeQXelvJHqXBht7PkTQhJFU63FUW5TRRtX08oyZm9eOG"/>
<div class="absolute inset-0 bg-gradient-to-b from-primary/60 via-primary/40 to-surface"></div>
</div>
<div class="relative z-10 max-w-4xl mx-auto px-8 text-center">
<div class="glass-card p-12 rounded-3xl animate-fade-in-up shadow-2xl">
<!-- <nav class="flex items-center justify-center gap-2 text-on-primary/80 text-sm font-label mb-6">
<a class="hover:text-secondary transition-colors" href="#">Home</a>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span class="text-secondary font-semibold">Blogs</span>
</nav> -->
<h1 class="text-6xl md:text-8xl font-headline text-on-primary font-bold tracking-tighter mb-6 leading-tight">
                    Blogs
                </h1>
<div class="w-24 h-1 bg-secondary mx-auto mb-8"></div>
<p class="text-xl text-on-primary/90 font-body leading-relaxed max-w-2xl mx-auto">
                    Exploring the intersections of clinical neuroscience, restorative care, and modern mental wellness through the lens of academic excellence.
                </p>
</div>
</div>
</section>
<div class="pb-40">
<!-- Featured Perspective Quote -->
<section class=" max-w-7xl mx-auto px-8 mt-20 relative z-20 mb-24 reveal">
<div class="bg-white p-12 shadow-xl rounded-xl border-l-4 border-l-secondary relative overflow-hidden">
<span class="material-symbols-outlined text-secondary/10 text-9xl absolute -right-4 -bottom-8 select-none">format_quote</span>
<h2 class="text-2xl md:text-3xl font-headline text-primary italic leading-relaxed relative z-10">
                    "Healing is not merely the absence of distress, but the active cultivation of resilience and the restoration of the human spirit through evidence-based compassion."
                </h2>
<p class="mt-4 font-label text-secondary font-bold tracking-widest uppercase text-xs">— Institutional Philosophy</p>
</div>
</section>
<!-- Clinical Insights Grid -->
<section class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
<!-- Blog Card 1 -->
<article class="reveal group flex flex-col bg-white rounded-xl overflow-hidden border border-slate-200 transition-all duration-500 hover:-translate-y-3 hover:shadow-[0_30px_60px_-15px_rgba(0,37,85,0.15)]">
<div class="h-64 overflow-hidden relative">
<img alt="Clinical environment" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Modern clinical research laboratory with high-tech equipment and soft blue ambient lighting reflecting institutional excellence" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDT0vYMDlkE6nt18be_0-dnvuZ-qqjUhLyT0-RRkOWegzLVY1TgAsJhhRrOjKBkaChqJWkVjccwVHTLI7_2F0PG37BLiZOPrebq1jwkElDJdn7RSqh8DfnAtBtajQcGGp7kwjdyVTdatT6C8Rzrwi_pzY3jizvtR8Cggrfeh4cUqKOA05_-FqnC_FRm7YYEiDDmj1OsKdDv3SEcEyFXEPeut0CA7sEfFF8WhM_WbWBrMUrNS-6xEAn47NngA7G9dWlJkF_MCFpVGdvC"/>
<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-500"></div>
</div>
<div class="p-8 flex flex-col flex-grow">
<span class="text-xs font-bold font-label text-secondary uppercase tracking-widest mb-3">Clinical Research</span>
<h3 class="text-2xl font-headline font-bold text-primary mb-4 leading-snug group-hover:text-secondary transition-colors duration-300">The Future of Restorative Neuro-Psychiatry</h3>
<p class="text-on-surface-variant font-body text-sm leading-relaxed mb-6 flex-grow">
                            Recent breakthroughs in neuroplasticity are reshaping our understanding of long-term recovery in clinical mindcare settings...
                        </p>
<a class="inline-flex items-center gap-2 text-primary font-bold group-hover:gap-4 transition-all duration-300" href="#">
                            Read More 
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
</article>
<!-- Blog Card 2 -->
<article class="reveal group flex flex-col bg-white rounded-xl overflow-hidden border border-slate-200 transition-all duration-500 hover:-translate-y-3 hover:shadow-[0_30px_60px_-15px_rgba(0,37,85,0.15)]" style="animation-delay: 0.1s">
<div class="h-64 overflow-hidden relative">
<img alt="Professional care" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Compassionate healthcare professional talking to a patient in a sunlit modern clinic setting with warm soft tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOJNiy7UveTMOFRqv3aBb55UXRh9XN49oe7oQOVwfVQj7Vm8U967hVhlXGZeqXbh9uUFAdjpajs054o8ajuJBuo66CrV-T_TcJwzGW6I0dDrxo6dwysRCg9Qu7qU9AaOxgMuQGHeWB4HrtB8ovUg-_pF3iTZXEU0w3fgKNTCckrqaII2SFiQTrz9CNACWUnuMFRNnuzxuVQuffxhzZwR69qeK74BDYbnUxuj75yQ1rtrG0anapSx3zjxJZn4BRU1IFvLV4PJLPg4fq"/>
<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-500"></div>
</div>
<div class="p-8 flex flex-col flex-grow">
<span class="text-xs font-bold font-label text-secondary uppercase tracking-widest mb-3">Patient Perspectives</span>
<h3 class="text-2xl font-headline font-bold text-primary mb-4 leading-snug group-hover:text-secondary transition-colors duration-300">Compassionate Care in Acute Settings</h3>
<p class="text-on-surface-variant font-body text-sm leading-relaxed mb-6 flex-grow">
                            Balancing clinical efficiency with the fundamental human need for connection remains the cornerstone of our restorative mission...
                        </p>
<a class="inline-flex items-center gap-2 text-primary font-bold group-hover:gap-4 transition-all duration-300" href="#">
                            Read More 
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
</article>
<!-- Blog Card 3 -->
<article class="reveal group flex flex-col bg-white rounded-xl overflow-hidden border border-slate-200 transition-all duration-500 hover:-translate-y-3 hover:shadow-[0_30px_60px_-15px_rgba(0,37,85,0.15)]" style="animation-delay: 0.2s">
<div class="h-64 overflow-hidden relative">
<img alt="Academic hub" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="High-resolution close-up of medical textbooks and a digital tablet showing brain scans in a bright academic study room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUgXz0AySTvWEhazvCXNkDbR668itEnh1-44GV745eygV2kRUEIFsyATdKSWY45Hc-KGaPxnMch4XMNg23PQGAOrqINWKmqDev9bY_cQBMbd808xIhuQysjdsRe4U84GsBJ3ehIDXbUwYBJ58sPJzVk1ee9LDP0S47l_VftWlN0mN3YClwgXIAy98erOTkLfLXdWdX_zQ76nB8mNcHLxaxLESY6mYSOaxAGwflYvd3kObaU4wJPiVrmh_-cHbxmHn1p_3hjjDvq_Zi"/>
<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-500"></div>
</div>
<div class="p-8 flex flex-col flex-grow">
<span class="text-xs font-bold font-label text-secondary uppercase tracking-widest mb-3">Academic Hub</span>
<h3 class="text-2xl font-headline font-bold text-primary mb-4 leading-snug group-hover:text-secondary transition-colors duration-300">Integrative Models of Mental Wellness</h3>
<p class="text-on-surface-variant font-body text-sm leading-relaxed mb-6 flex-grow">
                            A collaborative review of the latest multidisciplinary approaches to adolescent development and geriatric cognitive health...
                        </p>
<a class="inline-flex items-center gap-2 text-primary font-bold group-hover:gap-4 transition-all duration-300" href="#">
                            Read More 
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
</article>
<!-- Blog Card 4 (Large Featured) -->
<article class="reveal md:col-span-2 group flex flex-col md:flex-row bg-white rounded-xl overflow-hidden border border-slate-200 transition-all duration-500 hover:shadow-[0_30px_60px_-15px_rgba(0,37,85,0.15)]">
<div class="md:w-1/2 overflow-hidden relative">
<img alt="Restorative space" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Serene zen-like garden within a hospital atrium, featuring lush greenery, bamboo, and soft morning light filtering through glass" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMWcC9xDMZc6ALGXTfOmXfD6iyNgP5teZGcBdc8LkejCRkgX1jfXb8UGL0wOekNgmQvdcDRmSKzkLelrGn_khLwpHptcj3NHK1kSk_kDCYgqqPlzPg4EIhMPx3L0UOBF9c7j17nf_xfdSdrSV7QOC_NVTmoSYyCsBIx1-ciU3iwoVxf3FeSd8XbqXIjlLyC6XzZzYRSTYPm6Yir5CksFC9sWaf3bfu3IwAaH7ovbGpAjWTXbib3WLqGusX4PqNkremTCZXARVDFpda"/>
<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/5 transition-colors duration-500"></div>
</div>
<div class="md:w-1/2 p-12 flex flex-col justify-center bg-surface-container-lowest">
<span class="text-xs font-bold font-label text-secondary uppercase tracking-widest mb-3">Architecture of Healing</span>
<h3 class="text-3xl md:text-4xl font-headline font-bold text-primary mb-6 leading-tight group-hover:text-secondary transition-colors duration-300">Environment as Medicine: The Design of Anandham</h3>
<p class="text-on-surface-variant font-body text-md leading-relaxed mb-8">
                            How we designed our clinical spaces to reduce cortisol levels and promote autonomous patient recovery through intentional architectural stimuli.
                        </p>
<a class="inline-flex items-center gap-2 text-primary font-bold group-hover:gap-4 transition-all duration-300 text-lg" href="#">
                            Explore the Full Feature
                            <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
</article>
<!-- Blog Card 5 -->
<article class="reveal group flex flex-col bg-white rounded-xl overflow-hidden border border-slate-200 transition-all duration-500 hover:-translate-y-3 hover:shadow-[0_30px_60px_-15px_rgba(0,37,85,0.15)]">
<div class="h-64 overflow-hidden relative">
<img alt="Child care" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Gentle pediatric care interaction with colorful medical tools and friendly professional staff in a warm child-friendly ward" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCw-a1PWnMsL5YBWjMqx2CM9dluoD_zOUSj9_hdXHFvFP0Glw3ZR51GVbsBtd9WtmHg1f6ZvVHcH-q4ZlcB8SximWhTJ-uVyqEE4LZRGPOF9fxTjI2bmbX4FYgULLeSVquo8CmrRHoMCSbtljgHcUhqNxRyzPV8Wi-6zcYBh8qFK00D-DeBiYWIRd2IfYURFa8ZmUO479zIUYf2nrDqP3dH35KBwO31ymoCZosZxThLAF1hb99PiIen4DUzZcSwhxDg1wLKtI6TB_QA"/>
<div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-colors duration-500"></div>
</div>
<div class="p-8 flex flex-col flex-grow">
<span class="text-xs font-bold font-label text-secondary uppercase tracking-widest mb-3">Child Care</span>
<h3 class="text-2xl font-headline font-bold text-primary mb-4 leading-snug group-hover:text-secondary transition-colors duration-300">Early Intervention in Neuro-Diversity</h3>
<p class="text-on-surface-variant font-body text-sm leading-relaxed mb-6 flex-grow">
                            Identifying the critical windows for developmental support and the impact of early institutional guidance on lifetime wellness...
                        </p>
<a class="inline-flex items-center gap-2 text-primary font-bold group-hover:gap-4 transition-all duration-300" href="#">
                            Read More 
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
</article>
</div>
<!-- Pagination/Load More -->
<div class="mt-20 flex justify-center reveal">
<button class="px-10 py-4 border-2 border-primary text-primary font-bold rounded-lg hover:bg-primary hover:text-on-primary hover:shadow-xl transition-all duration-300 active:scale-95">
                    Load More Insights
                </button>
</div>
</section>
<!-- Newsletter Section -->
<section class="max-w-7xl mx-auto px-8 mt-32 reveal">
<div class="editorial-gradient rounded-3xl p-12 md:p-20 text-center relative overflow-hidden">
<div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -mr-32 -mt-32"></div>
<div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full -ml-48 -mb-48"></div>
<div class="relative z-10">
<h2 class="text-3xl md:text-5xl font-headline text-on-primary font-bold mb-6">Join Our Clinical Discourse</h2>
<p class="text-on-primary/80 text-lg max-w-2xl mx-auto mb-10 font-body">
                        Receive monthly editorial updates, research summaries, and institutional announcements directly from the Anandham Mindcare Board.
                    </p>
<form class="flex flex-col md:flex-row gap-4 max-w-xl mx-auto">
<input class="flex-grow px-6 py-4 rounded-lg bg-white/10 border border-white/20 text-on-primary placeholder:text-on-primary/50 focus:outline-none focus:ring-2 focus:ring-secondary backdrop-blur-sm" placeholder="Institutional Email Address" type="email"/>
<button class="bg-secondary-container text-on-secondary-container px-8 py-4 rounded-lg font-bold hover:bg-secondary-fixed shadow-lg hover:shadow-secondary/20 transition-all active:scale-95" type="submit">Subscribe Now</button>
</form>
</div>
</div>
</section>
</div>



@endsection