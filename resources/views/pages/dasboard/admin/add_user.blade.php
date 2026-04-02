@extends('layouts.admin')
@section('title', 'Add User Directory - Anandham Mindcare')
@section('content')
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#cae7f6",
                        "surface-container-lowest": "#ffffff",
                        "surface-container": "#eceef1",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#f0c12c",
                        "outline-variant": "#c4c6d1",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed-variant": "#2f4a57",
                        "tertiary-fixed-dim": "#aecbda",
                        "secondary-fixed": "#ffdf90",
                        "on-secondary-fixed-variant": "#584400",
                        "inverse-primary": "#acc7ff",
                        "surface-container-highest": "#e0e3e6",
                        "primary-fixed": "#d8e2ff",
                        "tertiary": "#0c2a35",
                        "on-primary-fixed-variant": "#28467b",
                        "primary-container": "#1b3b6f",
                        "on-tertiary-fixed": "#001f2a",
                        "secondary-container": "#fccc38",
                        "secondary": "#755b00",
                        "surface-bright": "#f7f9fc",
                        "inverse-surface": "#2d3133",
                        "surface": "#f7f9fc",
                        "on-primary-container": "#8aa7e1",
                        "on-error": "#ffffff",
                        "surface-variant": "#e0e3e6",
                        "on-tertiary-container": "#8fabba",
                        "on-secondary-fixed": "#241a00",
                        "on-primary-fixed": "#001a41",
                        "primary-fixed-dim": "#acc7ff",
                        "on-surface": "#191c1e",
                        "on-secondary": "#ffffff",
                        "surface-tint": "#415e94",
                        "error": "#ba1a1a",
                        "background": "#f7f9fc",
                        "inverse-on-surface": "#eff1f4",
                        "surface-dim": "#d8dadd",
                        "on-background": "#191c1e",
                        "primary": "#002555",
                        "surface-container-high": "#e6e8eb",
                        "surface-container-low": "#f2f4f7",
                        "outline": "#747780",
                        "on-surface-variant": "#43474f",
                        "on-secondary-container": "#6f5600",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#25404c"
                    },
                    fontFamily: {
                        "headline": ["Newsreader", "serif"],
                        "body": ["Work Sans", "sans-serif"],
                        "label": ["Work Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out forwards',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
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
        body { font-family: 'Work Sans', sans-serif; }
        h1, h2, h3 { font-family: 'Newsreader', serif; }
        
        .premium-input-group:focus-within label {
            color: theme('colors.primary');
        }
        .premium-input-group input:focus {
            background-color: white;
            box-shadow: 0 4px 12px -2px rgba(0, 37, 85, 0.05);
        }
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
    </style>
<div class="pt-28 px-8 pb-12 space-y-12">
<!-- Header Section -->
<div class="mb-14 flex flex-col md:flex-row md:items-end justify-between gap-6 opacity-0 animate-fade-in-up">
<div class="flex-1">
<p class="text-secondary font-label text-xs uppercase tracking-[0.2em] font-bold mb-3">Institutional Stewardship</p>
<h2 class="text-5xl font-headline font-bold text-primary tracking-tight leading-tight">Create Clinical User</h2>
<p class="text-on-surface-variant font-body mt-4 max-w-xl leading-relaxed">Onboard new practitioners to the Mindcare registry. Please ensure all credentials align with the institutional professional standards.</p>
</div>
<div class="hidden lg:block">
<div class="relative">
<img alt="Institutional Detail" class="w-28 h-28 rounded-2xl object-cover shadow-2xl shadow-primary/5 grayscale opacity-80" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhuxLkysiDVMna-fAVwXffkMUQQy_wNQy-_l_Os2n3OApSBAztwCeWLXhHMwZa5KrcafcsaIP7kgunIx1PJg9ME-_Iz3MiLTlDzLslsdcAXVbm7mGR_Ag-upUsLtpucCdr0EAEX4B9vXQgzX98tkNBaNQ4tGaTFnLXdoJ6_HDG8rkNG0O14YbAIqEyG5V6HbHFbVNTD4Ey4K6ERO6HIQ4dIOp7biSVWU65zDdDdXqVWBWBrVEqUxkDYiDVC7QcZ6euLeSJnJiHox-F"/>
<div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-black/5"></div>
</div>
</div>
</div>
<!-- Create User Card -->
<div class="bg-white rounded-2xl border border-outline-variant/30 shadow-sm overflow-hidden opacity-0 animate-fade-in-up stagger-1">
<div class="p-12">
<form class="space-y-14">
<!-- Grouping: Identity & Access -->
<div class="space-y-8">
<div class="flex items-center gap-4 pb-2 border-b border-surface-container">
<span class="material-symbols-outlined text-primary text-xl">person_outline</span>
<h3 class="font-headline text-xl font-bold text-primary">Identity &amp; Access</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
<div class="premium-input-group space-y-2">
<label class="block font-label text-[10px] font-bold text-on-surface-variant tracking-[0.15em] transition-colors" for="full_name">LEGAL FULL NAME</label>
<input class="w-full bg-surface-container-low border-0 border-b border-surface-container-highest focus:border-primary focus:ring-0 transition-all font-body text-lg py-3 px-4 rounded-t-lg" id="full_name" placeholder="e.g. Dr. Sarah Jenkins" type="text"/>
</div>
<div class="premium-input-group space-y-2">
<label class="block font-label text-[10px] font-bold text-on-surface-variant tracking-[0.15em] transition-colors" for="email">INSTITUTIONAL EMAIL</label>
<input class="w-full bg-surface-container-low border-0 border-b border-surface-container-highest focus:border-primary focus:ring-0 transition-all font-body text-lg py-3 px-4 rounded-t-lg" id="email" placeholder="sarah.j@anandham.com" type="email"/>
</div>
</div>
</div>
<!-- Grouping: Clinical Designation -->
<div class="space-y-8 stagger-2 opacity-0 animate-fade-in-up">
<div class="flex items-center gap-4 pb-2 border-b border-surface-container">
<span class="material-symbols-outlined text-primary text-xl">badge</span>
<h3 class="font-headline text-xl font-bold text-primary">Clinical Designation</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
<div class="premium-input-group space-y-2">
<label class="block font-label text-[10px] font-bold text-on-surface-variant tracking-[0.15em] transition-colors" for="role">ORGANIZATIONAL ROLE</label>
<div class="relative">
<select class="w-full bg-surface-container-low border-0 border-b border-surface-container-highest focus:border-primary focus:ring-0 appearance-none transition-all font-body text-lg py-3 px-4 pr-10 cursor-pointer rounded-t-lg" id="role">
<option value="doctor">Consulting Physician</option>
<option value="student">Clinical Resident</option>
<option value="professional">Mental Health Professional</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-3.5 pointer-events-none text-slate-400">unfold_more</span>
</div>
</div>
<div class="premium-input-group space-y-2">
<label class="block font-label text-[10px] font-bold text-on-surface-variant tracking-[0.15em] transition-colors" for="specialization">CORE SPECIALIZATION</label>
<input class="w-full bg-surface-container-low border-0 border-b border-surface-container-highest focus:border-primary focus:ring-0 transition-all font-body text-lg py-3 px-4 rounded-t-lg" id="specialization" placeholder="e.g. Clinical Psychology" type="text"/>
</div>
</div>
</div>
<!-- Status Toggle Section -->
<div class="bg-surface-container-lowest border border-outline-variant/20 p-8 rounded-2xl flex items-center justify-between shadow-sm stagger-3 opacity-0 animate-fade-in-up">
<div class="flex items-center gap-5">
<div class="p-3.5 bg-primary/5 rounded-xl text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">verified_user</span>
</div>
<div>
<h4 class="font-headline text-xl font-bold text-primary">Registry Status</h4>
<p class="font-body text-sm text-on-surface-variant mt-1">Activate user to enable clinical data access and patient assignment.</p>
</div>
</div>
<div class="flex items-center bg-surface p-1.5 rounded-full ring-1 ring-black/5">
<button class="px-5 py-2 rounded-full text-xs font-bold font-label transition-all duration-300 text-on-surface-variant" type="button">INACTIVE</button>
<button class="px-5 py-2 rounded-full text-xs font-bold font-label bg-primary text-white shadow-lg shadow-primary/20 transition-all duration-300" type="button">ACTIVE</button>
</div>
</div>
<!-- Footer Actions -->
<div class="flex flex-col sm:flex-row items-center justify-end gap-6 pt-10 border-t border-surface-container stagger-4 opacity-0 animate-fade-in-up">
<button class="w-full sm:w-auto px-8 py-3 text-on-surface-variant hover:text-primary font-label text-sm font-semibold transition-colors duration-200" type="button">
                                Discard Changes
                            </button>
<button class="w-full sm:w-auto px-12 py-4 bg-primary text-white rounded-xl shadow-xl shadow-primary/20 font-label text-sm font-bold hover:bg-primary/90 hover:-translate-y-0.5 active:translate-y-0 transition-all" type="submit">
                                Finalize Registration
                            </button>
</div>
</form>
</div>
</div>
<!-- Perspective Quote -->
<div class="mt-16 bg-white/40 p-10 rounded-2xl border-l-4 border-primary/20 flex items-center gap-10 opacity-0 animate-fade-in-up stagger-4">
<div class="flex-grow">
<p class="font-headline text-2xl italic text-primary/80 leading-relaxed max-w-2xl">"The digital architecture of care must mirror the precision of our clinical protocols. Security and accessibility are the twin pillars of modern restoration."</p>
<div class="mt-6 flex items-center gap-3">
<span class="h-px w-8 bg-primary/20"></span>
<p class="font-label text-xs font-bold tracking-widest text-on-surface-variant uppercase">Clinical Review Board — 2024</p>
</div>
</div>
<div class="hidden sm:block opacity-10 text-primary">
<span class="material-symbols-outlined text-8xl" style="font-variation-settings: 'FILL' 1;">health_metrics</span>
</div>
</div>
</div>

@endsection