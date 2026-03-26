@extends('layouts.hosp')

@section('content')

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary-fixed-dim": "#acc7ff",
                        "inverse-surface": "#2d3133",
                        "on-secondary-fixed-variant": "#584400",
                        "on-secondary-fixed": "#241a00",
                        "tertiary-fixed": "#cae7f6",
                        "outline": "#747780",
                        "surface-dim": "#d8dadd",
                        "on-error-container": "#93000a",
                        "primary-fixed": "#d8e2ff",
                        "on-secondary": "#ffffff",
                        "inverse-primary": "#acc7ff",
                        "inverse-on-surface": "#eff1f4",
                        "tertiary": "#0c2a35",
                        "surface-bright": "#f7f9fc",
                        "on-background": "#191c1e",
                        "secondary-fixed": "#ffdf90",
                        "secondary": "#755b00",
                        "tertiary-fixed-dim": "#aecbda",
                        "on-tertiary-fixed-variant": "#2f4a57",
                        "surface": "#f7f9fc",
                        "on-surface-variant": "#43474f",
                        "surface-container-high": "#e6e8eb",
                        "surface-container-lowest": "#ffffff",
                        "background": "#f7f9fc",
                        "tertiary-container": "#25404c",
                        "surface-container-low": "#f2f4f7",
                        "error": "#ba1a1a",
                        "surface-container-highest": "#e0e3e6",
                        "primary": "#002555",
                        "on-primary-container": "#8aa7e1",
                        "on-tertiary-fixed": "#001f2a",
                        "on-primary-fixed": "#001a41",
                        "secondary-fixed-dim": "#f0c12c",
                        "secondary-container": "#fccc38",
                        "outline-variant": "#c4c6d1",
                        "surface-container": "#eceef1",
                        "on-primary": "#ffffff",
                        "primary-container": "#1b3b6f",
                        "on-surface": "#191c1e",
                        "on-secondary-container": "#6f5600",
                        "on-error": "#ffffff",
                        "surface-variant": "#e0e3e6",
                        "on-primary-fixed-variant": "#28467b",
                        "on-tertiary-container": "#8fabba",
                        "surface-tint": "#415e94",
                        "error-container": "#ffdad6",
                        "on-tertiary": "#ffffff"
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
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .editorial-shadow {
            box-shadow: 0 24px 48px -12px rgba(25, 28, 30, 0.04);
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-surface font-body text-on-surface flex flex-col min-h-screen selection:bg-secondary-fixed selection:text-on-secondary-fixed">
<main class="flex-grow flex items-center justify-center relative px-6 py-12 overflow-hidden">
<!-- Background Layer -->
<div class="absolute inset-0 z-0">
<img alt="Professional healthcare office" class="w-full h-full object-cover opacity-40 mix-blend-multiply grayscale-[20%]" data-alt="Soft focused clinical office interior with warm natural light hitting wooden textures and clean medical surfaces, high-trust academic atmosphere" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDl386Nev3ebvD96LaTtwUaSREnF2EGxU31QVM9I2VA_rBcL9LM-2i-2MDSbZeGU6DZTwJOq6gsyNCBwdtnIUCV9vnI-i-cXzznscaPrPH--S4GPCOvr5elgAkAU3Mpn5aattUCugH6I9uWzP6yDki8qPBC20dP-WcG7EqcbjOo3HlFusFV_91HE5Mp5AmkJG8djTOE2TOegIIGGNddQMXjJYSuFFtNUNecLjZy0Ylm5IX46rkK3_kHidyKh8KHT3kCxQ4buSDL9hnt"/>
<div class="absolute inset-0 bg-gradient-to-tr from-surface via-surface/90 to-transparent"></div>
</div>
<!-- Auth Container -->
<div class="relative z-10 w-full max-w-xl">
<div class="glass-panel editorial-shadow rounded-xl border border-outline-variant/15 overflow-hidden flex flex-col">
<!-- Branding Header -->
<div class="pt-12 pb-8 px-10 text-center">
<img alt="Anandham Mindcare Logo" class="h-20 mx-auto mb-6" data-alt="Elegant medical crest logo featuring academic and healing symbols in deep navy and gold metallic tones" src="{{ asset('assets/logo/academy_logo.jpeg') }}"/>
<h1 class="font-headline text-4xl font-semibold text-primary tracking-tight leading-tight">
                        Welcome to Anandham
                    </h1>
<p class="mt-3 text-on-surface-variant font-medium tracking-wide text-sm uppercase">
                        Clinical Excellence &amp; Restorative Care
                    </p>
</div>
<!-- Form Section -->
<form method="POST" action="{{ route('login') }}" class="px-10 pb-12 space-y-6">
    @csrf
<!-- Email Field -->
<div class="space-y-2">
<label class="block text-xs font-semibold text-on-surface-variant tracking-widest uppercase" for="email">
                            Email Address
                        </label>
<div class="relative group">
<span class="absolute left-0 top-1/2 -translate-y-1/2 text-primary/40 material-symbols-outlined">
                                mail
                            </span>
<input class="w-full pl-8 pr-0 py-3 bg-transparent border-0 border-b border-outline-variant focus:border-secondary focus:ring-0 transition-all duration-300 placeholder:text-outline/40 text-on-surface font-medium" id="email" name="email" placeholder="name@clinical.edu" required="" type="email"/>
</div>
</div>
<!-- Password Field -->
<div class="space-y-2">
<div class="flex justify-between items-end">
<label class="block text-xs font-semibold text-on-surface-variant tracking-widest uppercase" for="password">
                                Password
                            </label>
<a class="text-xs font-semibold text-secondary hover:text-on-secondary-fixed-variant transition-colors tracking-tight" href="#">
                                Forgot Password?
                            </a>
</div>
<div class="relative group">
<span class="absolute left-0 top-1/2 -translate-y-1/2 text-primary/40 material-symbols-outlined">
                                lock
                            </span>
<input class="w-full pl-8 pr-0 py-3 bg-transparent border-0 border-b border-outline-variant focus:border-secondary focus:ring-0 transition-all duration-300 placeholder:text-outline/40 text-on-surface font-medium" id="password" name="password" placeholder="••••••••" required="" type="password"/>
</div>
</div>
<!-- CTA Actions -->
<div class="pt-4 space-y-6">
<button class="w-full py-4 px-6 bg-gradient-to-r from-primary to-primary-container text-white font-semibold rounded-lg hover:translate-y-[-1px] active:scale-[0.98] transition-all duration-200 editorial-shadow text-base tracking-wide flex items-center justify-center gap-2" type="submit">
                            Access Portal
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
<div class="relative py-2 flex items-center">
<div class="flex-grow border-t border-outline-variant/30"></div>
<span class="flex-shrink mx-4 text-xs font-medium text-on-surface-variant tracking-widest uppercase">
                                New Practitioners
                            </span>
<div class="flex-grow border-t border-outline-variant/30"></div>
</div>
<div class="text-center">
<p class="text-on-surface-variant text-sm font-medium">
    Don't have an account? 
    <a class="ml-1 text-secondary font-bold hover:underline decoration-secondary/30 transition-all" 
       href="{{ route('register') }}">
        Register
    </a>
</p>
</div>
</div>
</form>
<!-- Status Footer -->
<div class="bg-surface-container-low/50 px-10 py-4 flex items-center justify-center gap-4 text-[10px] text-outline font-semibold tracking-widest uppercase border-t border-outline-variant/10">
<div class="flex items-center gap-1.5">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        Clinical Systems Active
                    </div>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span>Secure Encryption</span>
</div>
</div>
<!-- Academic Footer Text -->
<div class="mt-12 text-center">
<p class="font-headline italic text-on-surface-variant/80 text-lg leading-relaxed max-w-md mx-auto">
                    "The art of healing comes from nature, not from the physician. Therefore the physician must start from nature, with an open mind."
                </p>
<div class="mt-4 flex justify-center gap-8">
<a class="text-[10px] font-bold text-on-surface-variant/60 hover:text-primary tracking-widest uppercase transition-colors" href="#">Privacy Policy</a>
<a class="text-[10px] font-bold text-on-surface-variant/60 hover:text-primary tracking-widest uppercase transition-colors" href="#">Help Desk</a>
<a class="text-[10px] font-bold text-on-surface-variant/60 hover:text-primary tracking-widest uppercase transition-colors" href="#">Institutional Login</a>
</div>
</div>
</div>
</main>

@endsection