@extends('layouts.hosp')

@section('content')

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary-fixed-dim": "#acc7ff",
              "surface-container-lowest": "#ffffff",
              "error": "#ba1a1a",
              "on-surface-variant": "#43474f",
              "primary-fixed": "#d8e2ff",
              "on-surface": "#191c1e",
              "surface-container-high": "#e6e8eb",
              "inverse-on-surface": "#eff1f4",
              "surface-container-low": "#f2f4f7",
              "surface": "#f7f9fc",
              "background": "#f7f9fc",
              "error-container": "#ffdad6",
              "inverse-primary": "#acc7ff",
              "surface-tint": "#415e94",
              "tertiary": "#0c2a35",
              "secondary": "#755b00",
              "on-primary": "#ffffff",
              "on-tertiary-fixed-variant": "#2f4a57",
              "on-primary-fixed": "#001a41",
              "surface-variant": "#e0e3e6",
              "inverse-surface": "#2d3133",
              "tertiary-fixed": "#cae7f6",
              "outline-variant": "#c4c6d1",
              "on-secondary": "#ffffff",
              "secondary-fixed": "#ffdf90",
              "on-tertiary-fixed": "#001f2a",
              "secondary-fixed-dim": "#f0c12c",
              "outline": "#747780",
              "on-error-container": "#93000a",
              "surface-container-highest": "#e0e3e6",
              "on-tertiary": "#ffffff",
              "tertiary-fixed-dim": "#aecbda",
              "surface-container": "#eceef1",
              "on-primary-fixed-variant": "#28467b",
              "surface-dim": "#d8dadd",
              "surface-bright": "#f7f9fc",
              "on-secondary-container": "#6f5600",
              "primary": "#1B3B6F",
              "on-error": "#ffffff",
              "secondary-container": "#fccc38",
              "on-tertiary-container": "#8fabba",
              "on-secondary-fixed-variant": "#584400",
              "primary-container": "#1b3b6f",
              "on-secondary-fixed": "#241a00",
              "on-background": "#191c1e",
              "on-primary-container": "#8aa7e1",
              "tertiary-container": "#25404c"
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
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .hero-overlay {
            background: linear-gradient(to right, rgba(27, 59, 111, 0.85), rgba(27, 59, 111, 0.4));
        }
        .perspective-quote {
            border-left: 4px solid #fccc38;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
        .animate-fade-in-up {
            opacity: 0;
            animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary-fixed-dim": "#acc7ff",
              "surface-container-lowest": "#ffffff",
              "error": "#ba1a1a",
              "on-surface-variant": "#43474f",
              "primary-fixed": "#d8e2ff",
              "on-surface": "#191c1e",
              "surface-container-high": "#e6e8eb",
              "inverse-on-surface": "#eff1f4",
              "surface-container-low": "#f2f4f7",
              "surface": "#f7f9fc",
              "background": "#f7f9fc",
              "error-container": "#ffdad6",
              "inverse-primary": "#acc7ff",
              "surface-tint": "#415e94",
              "tertiary": "#0c2a35",
              "secondary": "#755b00",
              "on-primary": "#ffffff",
              "on-tertiary-fixed-variant": "#2f4a57",
              "on-primary-fixed": "#001a41",
              "surface-variant": "#e0e3e6",
              "inverse-surface": "#2d3133",
              "tertiary-fixed": "#cae7f6",
              "outline-variant": "#c4c6d1",
              "on-secondary": "#ffffff",
              "secondary-fixed": "#ffdf90",
              "on-tertiary-fixed": "#001f2a",
              "secondary-fixed-dim": "#f0c12c",
              "outline": "#747780",
              "on-error-container": "#93000a",
              "surface-container-highest": "#e0e3e6",
              "on-tertiary": "#ffffff",
              "tertiary-fixed-dim": "#aecbda",
              "surface-container": "#eceef1",
              "on-primary-fixed-variant": "#28467b",
              "surface-dim": "#d8dadd",
              "surface-bright": "#f7f9fc",
              "on-secondary-container": "#6f5600",
              "primary": "#1B3B6F",
              "on-error": "#ffffff",
              "secondary-container": "#fccc38",
              "on-tertiary-container": "#8fabba",
              "on-secondary-fixed-variant": "#584400",
              "primary-container": "#1b3b6f",
              "on-secondary-fixed": "#241a00",
              "on-background": "#191c1e",
              "on-primary-container": "#8aa7e1",
              "tertiary-container": "#25404c"
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
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .hero-overlay {
            background: linear-gradient(to right, rgba(27, 59, 111, 0.85), rgba(27, 59, 111, 0.4));
        }
        .perspective-quote {
            border-left: 4px solid #fccc38;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
        .animate-fade-in-up {
            opacity: 0;
            animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>

<section class="relative h-[550px] flex items-center overflow-hidden animate-fade-in">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="Modern high-fidelity mental healthcare hospital interior with bright restorative windows and professional design" src="https://lh3.googleusercontent.com/aida/ADBb0uiz4aSSrom6B5RBj3sLiJiqa1c-dsHFc0_CzXkSLBHItdvSchblbM84OA8JxGnZF_R_yBaxpdyMxdsB8xCfzEKRo3xp-SaLtNsBe_aTjhXrkp7lUeKWea7da1a-nahjjQVoM7N4kyr_p6Q-An0lufetuhLI6dpAmIECmK17gZq7NqKgkkawpnVd-v_d388r3S1xQ7-x-6ns575K1wbTn8zJCJ0P6cNmU7ZsNx-8s_xNZzo8NsZSsMX1gKD7"/>
<div class="absolute inset-0 hero-overlay"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-2xl">
<h1 class="font-headline text-5xl md:text-7xl text-white mb-6 leading-tight">Connect with Our Experts</h1>
<p class="font-body text-xl text-primary-fixed max-w-lg leading-relaxed">
                        A restorative environment for clinical excellence and mental well-being. Our specialized team is available for consultations, academic queries, and support.
                    </p>
</div>
</div>
</section>
<!-- Contact Info Cards -->
<section class="py-24 max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Phone -->
<div class="group p-10 bg-surface-container-lowest border border-outline-variant/30 rounded-xl transition-all duration-500 hover:shadow-2xl hover:border-primary/20 hover:-translate-y-2 hover:scale-[1.02] animate-fade-in-up" style="animation-delay: 0.1s;">
<div class="w-14 h-14 rounded-full bg-primary/5 flex items-center justify-center mb-8 group-hover:bg-primary group-hover:text-white transition-all duration-500">
<span class="material-symbols-outlined text-primary text-2xl group-hover:text-white" data-icon="call">call</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Clinical Hotline</h3>
<p class="text-on-surface-variant font-body mb-6 text-sm leading-relaxed">Direct support line for urgent clinical inquiries and appointment scheduling.</p>
<a class="text-secondary font-bold text-lg hover:text-primary transition-colors inline-block" href="tel:+1234567890">+1 (234) 567-890</a>
</div>
<!-- Location -->
<div class="group p-10 bg-surface-container-lowest border border-outline-variant/30 rounded-xl transition-all duration-500 hover:shadow-2xl hover:border-primary/20 hover:-translate-y-2 hover:scale-[1.02] animate-fade-in-up" style="animation-delay: 0.2s;">
<div class="w-14 h-14 rounded-full bg-primary/5 flex items-center justify-center mb-8 group-hover:bg-primary group-hover:text-white transition-all duration-500">
<span class="material-symbols-outlined text-primary text-2xl group-hover:text-white" data-icon="location_on">location_on</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Visit the Center</h3>
<p class="text-on-surface-variant font-body mb-6 text-sm leading-relaxed">Our main psychiatric institute is located in the heart of the medical district.</p>
<p class="text-secondary font-bold text-lg">123 Wellness Way, Medical Park, TN</p>
</div>
<!-- Email -->
<div class="group p-10 bg-surface-container-lowest border border-outline-variant/30 rounded-xl transition-all duration-500 hover:shadow-2xl hover:border-primary/20 hover:-translate-y-2 hover:scale-[1.02] animate-fade-in-up" style="animation-delay: 0.3s;">
<div class="w-14 h-14 rounded-full bg-primary/5 flex items-center justify-center mb-8 group-hover:bg-primary group-hover:text-white transition-all duration-500">
<span class="material-symbols-outlined text-primary text-2xl group-hover:text-white" data-icon="mail">mail</span>
</div>
<h3 class="font-headline text-2xl text-primary mb-3">Secure Email</h3>
<p class="text-on-surface-variant font-body mb-6 text-sm leading-relaxed">Confidential portal for patient records, referrals, and academic collaborations.</p>
<a class="text-secondary font-bold text-lg hover:text-primary transition-colors inline-block" href="mailto:care@anandham.com">care@anandham.com</a>
</div>
</div>
</section>
<!-- Interactive Map Section -->
<section class="w-full h-[450px] bg-surface-container-low overflow-hidden animate-fade-in" style="animation-delay: 0.4s;">
<div class="w-full h-full grayscale hover:grayscale-0 transition-all duration-1000">
<iframe data-location="Chennai" frameborder="0" height="100%" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?q=Chennai&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%"></iframe>
</div>
</section>
<!-- Enquiry Form & Editorial Image -->
<section class="py-24 bg-white">
<div class="max-w-7xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-12 gap-16">
<div class="lg:col-span-5 space-y-10 animate-fade-in-up" style="animation-delay: 0.5s;">
<div class="relative rounded-xl overflow-hidden shadow-xl">
<img class="w-full h-[650px] object-cover" data-alt="Refined psychiatrist office" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjbhHEtAN3knORD8mTcScWDvq5HnNCPc_YwBUHqLaZBqfjBUsqYL1NXNm8RtxK2j6orI_gxl1V5JdAL3HqFeSUAUoUXeckzZbTnRJaEt44rZL3AUQBwV4p5YFYzP_E__jVcJjsWFtpUomUz5J55cV_K3svlXIYyAuH8lP6qPR0yB0sx2ytwP27AswbcbDmWCPjQvmUEAXIoJQO__RjWZt5OapxYM2kYb5s9lm20dpZjserpgQzq25-U3LHkjh6Esgeqe8FRu1J71lv"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent"></div>
<div class="absolute bottom-0 left-0 right-0 p-8">
<div class="perspective-quote bg-white/10 backdrop-blur-md p-6 rounded-r-lg border-l-4 border-secondary-container">
<p class="font-headline italic text-xl text-white leading-relaxed">"True healing begins with an environment of trust, science, and empathy."</p>
<p class="font-label text-secondary-container mt-4 text-xs tracking-widest uppercase font-bold">DR. S. RAJESH, FOUNDER</p>
</div>
</div>
</div>
</div>
<div class="lg:col-span-7 flex flex-col justify-center animate-fade-in-up" style="animation-delay: 0.6s;">
<div class="max-w-xl">
<h2 class="font-headline text-4xl text-primary mb-4">Request a Consultation</h2>
<p class="font-body text-on-surface-variant mb-12">Submit your enquiry below. Our clinical coordinator will prioritize your request and respond within one business day.</p>
<form class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-10">
<div class="relative border-b-2 border-outline-variant focus-within:border-primary transition-all duration-300">
<label class="block text-[11px] font-bold uppercase tracking-wider text-on-surface-variant mb-1 group-focus-within:text-primary">Full Name</label>
<input class="w-full bg-transparent border-none p-0 pb-3 focus:ring-0 text-primary font-body placeholder:text-outline/30 focus:placeholder:opacity-0 transition-all" placeholder="Jane Smith" type="text"/>
</div>
<div class="relative border-b-2 border-outline-variant focus-within:border-primary transition-all duration-300">
<label class="block text-[11px] font-bold uppercase tracking-wider text-on-surface-variant mb-1 group-focus-within:text-primary">Service Required</label>
<select class="w-full bg-transparent border-none p-0 pb-3 focus:ring-0 text-primary font-body cursor-pointer appearance-none">
<option>General Consultation</option>
<option>Child Psychiatry</option>
<option>Therapy &amp; Counseling</option>
<option>Academic Research</option>
</select>
</div>
<div class="relative border-b-2 border-outline-variant focus-within:border-primary transition-all duration-300 md:col-span-2">
<label class="block text-[11px] font-bold uppercase tracking-wider text-on-surface-variant mb-1 group-focus-within:text-primary">Email Address</label>
<input class="w-full bg-transparent border-none p-0 pb-3 focus:ring-0 text-primary font-body placeholder:text-outline/30 focus:placeholder:opacity-0 transition-all" placeholder="jane.smith@example.com" type="email"/>
</div>
<div class="relative border-b-2 border-outline-variant focus-within:border-primary transition-all duration-300 md:col-span-2">
<label class="block text-[11px] font-bold uppercase tracking-wider text-on-surface-variant mb-1 group-focus-within:text-primary">Message</label>
<textarea class="w-full bg-transparent border-none p-0 pb-3 focus:ring-0 text-primary font-body placeholder:text-outline/30 focus:placeholder:opacity-0 transition-all resize-none" placeholder="Please describe your needs briefly..." rows="3"></textarea>
</div>
<div class="md:col-span-2 pt-4">
<button class="w-full py-5 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg transition-all duration-500 flex items-center justify-center gap-3 shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/30 active:scale-[0.98] group" type="submit">
                                    Submit Enquiry
                                    <span class="material-symbols-outlined transition-transform duration-300 group-hover:translate-x-1" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</form>
</div>
</div>
</div>
</section>
@endsection