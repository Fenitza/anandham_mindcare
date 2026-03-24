<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "secondary": "#755b00",
              "primary-fixed-dim": "#acc7ff",
              "surface-container-low": "#f2f4f7",
              "secondary-fixed": "#ffdf90",
              "inverse-surface": "#2d3133",
              "background": "#f7f9fc",
              "on-error": "#ffffff",
              "surface-container-high": "#e6e8eb",
              "tertiary-fixed": "#cae7f6",
              "error": "#ba1a1a",
              "on-primary": "#ffffff",
              "outline": "#747780",
              "error-container": "#ffdad6",
              "on-secondary-fixed": "#241a00",
              "outline-variant": "#c4c6d1",
              "surface-tint": "#415e94",
              "surface-container": "#eceef1",
              "secondary-fixed-dim": "#f0c12c",
              "primary": "#002555",
              "on-tertiary": "#ffffff",
              "on-surface-variant": "#43474f",
              "tertiary": "#0c2a35",
              "secondary-container": "#fccc38",
              "surface-container-lowest": "#ffffff",
              "on-tertiary-fixed": "#001f2a",
              "on-background": "#191c1e",
              "surface-variant": "#e0e3e6",
              "on-tertiary-fixed-variant": "#2f4a57",
              "primary-fixed": "#d8e2ff",
              "surface-dim": "#d8dadd",
              "on-surface": "#191c1e",
              "surface-container-highest": "#e0e3e6",
              "on-primary-fixed-variant": "#28467b",
              "inverse-primary": "#acc7ff",
              "tertiary-fixed-dim": "#aecbda",
              "primary-container": "#1b3b6f",
              "on-secondary-container": "#6f5600",
              "on-secondary": "#ffffff",
              "on-secondary-fixed-variant": "#584400",
              "tertiary-container": "#25404c",
              "on-primary-container": "#8aa7e1",
              "on-error-container": "#93000a",
              "surface": "#f7f9fc",
              "on-primary-fixed": "#001a41",
              "inverse-on-surface": "#eff1f4",
              "surface-bright": "#f7f9fc",
              "on-tertiary-container": "#8fabba"
            },
            fontFamily: {
              "headline": ["Newsreader", "serif"],
              "body": ["Work Sans", "sans-serif"],
              "label": ["Work Sans", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .course-card-hover {
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .course-card-hover:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }
        .course-card-hover:hover .material-symbols-outlined {
            transform: scale(1.2) rotate(5deg);
            transition: transform 0.3s ease;
        }

        .tab-indicator {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        html {
            scroll-behavior: smooth;
        }
    </style>

<!-- Carousel Wrapper -->
 <section class="py-24 px-8 bg-surface-container-low">
<div class="flex overflow-x-auto hide-scrollbar gap-8 pb-8 snap-x scroll-smooth" id="carousel">
<!-- Category: Free -->
<div class="reveal-card min-w-[320px] md:min-w-[400px] snap-start bg-surface-container-lowest rounded-xl p-8 border border-outline-variant/15 course-card-hover group">
<div class="flex justify-between items-start mb-6">
<div class="p-4 bg-tertiary-fixed rounded-lg text-on-tertiary-fixed-variant transition-transform group-hover:scale-110">
<span class="material-symbols-outlined">school</span>
</div>
<span class="px-3 py-1 bg-surface-container-high rounded-full text-xs font-bold uppercase tracking-wider">Free Access</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-2">Introductory Webinars</h3>
<p class="text-on-surface-variant mb-6 text-sm leading-relaxed">Essential foundations of mental health awareness and basic clinical vocabulary for newcomers.</p>
<div class="space-y-3 mb-8">
<div class="flex items-center gap-2 text-sm transition-all group-hover:translate-x-1">
<span class="material-symbols-outlined text-secondary text-lg">check_circle</span>
<span>Mental Health Literacy 101</span>
</div>
<div class="flex items-center gap-2 text-sm transition-all group-hover:translate-x-1 delay-75">
<span class="material-symbols-outlined text-secondary text-lg">check_circle</span>
<span>Basics of Self-Regulation</span>
</div>
</div>
<button class="w-full py-3 text-secondary font-semibold border border-secondary/20 rounded-md group-hover:bg-secondary group-hover:text-white transition-all">
                        Enroll Free
                    </button>
</div>
<!-- Category: Premium -->
<div class="reveal-card min-w-[320px] md:min-w-[400px] snap-start bg-primary text-white rounded-xl p-8 shadow-xl relative overflow-hidden course-card-hover group">
<div class="absolute top-0 right-0 p-12 bg-secondary/10 rounded-full -mr-6 -mt-6 transition-transform duration-700 group-hover:scale-150 group-hover:opacity-20"></div>
<div class="relative z-10">
<div class="flex justify-between items-start mb-6">
<div class="p-4 bg-white/10 backdrop-blur rounded-lg transition-transform group-hover:rotate-6">
<span class="material-symbols-outlined text-secondary-fixed">workspace_premium</span>
</div>
<span class="px-3 py-1 bg-secondary-fixed text-on-secondary-fixed rounded-full text-xs font-bold uppercase tracking-wider">Most Popular</span>
</div>
<h3 class="font-headline text-2xl mb-2">CBT Mastery Certification</h3>
<p class="text-primary-fixed-dim mb-6 text-sm leading-relaxed">Advanced clinical techniques and cognitive restructuring frameworks for practicing psychologists.</p>
<div class="space-y-3 mb-8">
<div class="flex items-center gap-2 text-sm transition-all group-hover:translate-x-2">
<span class="material-symbols-outlined text-secondary-fixed-dim text-lg" data-weight="fill">verified</span>
<span>Accredited clinical credits</span>
</div>
<div class="flex items-center gap-2 text-sm transition-all group-hover:translate-x-2 delay-75">
<span class="material-symbols-outlined text-secondary-fixed-dim text-lg" data-weight="fill">verified</span>
<span>1-on-1 Mentorship sessions</span>
</div>
</div>
<button class="w-full py-3 bg-secondary-fixed text-on-secondary-fixed font-semibold rounded-md hover:brightness-110 active:scale-95 transition-all">
                            View Premium Path
                        </button>
</div>
</div>
<!-- Category: Special -->
<div class="reveal-card min-w-[320px] md:min-w-[400px] snap-start bg-surface-container-lowest rounded-xl p-8 border border-outline-variant/15 course-card-hover group">
<div class="flex justify-between items-start mb-6">
<div class="p-4 bg-secondary-fixed rounded-lg text-on-secondary-fixed transition-transform group-hover:-rotate-6">
<span class="material-symbols-outlined">diversity_3</span>
</div>
<span class="px-3 py-1 bg-surface-container-high rounded-full text-xs font-bold uppercase tracking-wider">Institutional</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-2">Corporate Mindfulness</h3>
<p class="text-on-surface-variant mb-6 text-sm leading-relaxed">Tailored workshops designed for organizational leaders and high-stress professional domains.</p>
<div class="space-y-3 mb-8">
<div class="flex items-center gap-2 text-sm transition-all group-hover:translate-x-1">
<span class="material-symbols-outlined text-secondary text-lg">settings_suggest</span>
<span>Customized Curriculum</span>
</div>
<div class="flex items-center gap-2 text-sm transition-all group-hover:translate-x-1 delay-75">
<span class="material-symbols-outlined text-secondary text-lg">settings_suggest</span>
<span>On-site Clinical Support</span>
</div>
</div>
<button class="w-full py-3 text-primary font-semibold border border-primary/20 rounded-md group-hover:bg-primary group-hover:text-white transition-all">
                        Request Quote
                    </button>
</div>
</div>
</div>
</section>
</section>