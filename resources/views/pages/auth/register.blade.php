@extends('layouts.hosp')

@section('content')

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
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }
      .perspective-quote {
        border-left: 4px solid #755b00;
      }
    </style>
</head>
<body class="bg-surface font-body text-on-surface antialiased min-h-screen flex flex-col">
<main class="flex-grow flex flex-col md:flex-row min-h-screen">
<!-- Left Section: Clinical Editorial Branding -->
<section class="hidden md:flex md:w-1/2 relative flex-col justify-between p-16 overflow-hidden">
<!-- Background Image -->
<div class="absolute inset-0 z-0">
<img alt="Inspiring academic medical library with soft sunlight filtering through large windows onto wooden desks" class="w-full h-full object-cover" data-alt="Modern academic medical library with bright natural lighting, rows of medical journals, and a serene scholarly atmosphere in soft morning light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcBLJtlmT03FtgTqO3pqUlqzzMgzCvlYBezy8Wmh0VBn1ZoHyQClwULgCu8jOADcwr6GcGY8XNZ6h4OBKrnpBTafwByh0OObsE3g04flmzdecQzWlIYaoLXe4GkfYEcnomNuOQX41l_RuIkSHs7hg7uGzD8yAqwE5vsKjLOyJzx8ZmmYSM4LivMxCyoDFtKSUD8PU9zhJZ0KHfOA8zmEF8y5dXwoJqYTO-h0wmatLi24jldNKHHwsInGRWEHHTclPeVK57ORa81d_N"/>
<div class="absolute inset-0 bg-primary/40 backdrop-blur-[2px]"></div>
<div class="absolute inset-0 bg-gradient-to-t from-primary via-transparent to-primary/20"></div>
</div>
<!-- Brand Header -->
<!-- <div class="relative z-10">
<div class="flex items-center gap-4">
<img alt="Anandham Mindcare Logo" class="h-16 w-16 rounded-full border-2 border-secondary-fixed/30 bg-white p-1" data-alt="Elegant hospital logo with a minimalist caduceus symbol integrated into a circular crest in deep navy and gold" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZVgNDVxLF-hnNdatfpIuYiL6PDzI7q3LWN8Z3mV4ZM2NDxEeWF4hdS8sKiWvXqNwULvDHT9QHHmgHMte25oh6DEFIkik8HWdz0DjlTTqjnjYTMvD5DOK3ze2_xtUoz89Mc33AJHGTclEeYIreBxvK9e4t1ECz_Rafi6nOWZOkIfR9weI6Xu4QQB2ZpqCDjH20N5vJ7MlajlKal3WJCIbNPcGbUsL0pfv6Q0UTcIxCaviSslCxa8Bel7pr2jDCAACaYeFvZAzeBwSf"/>
<h1 class="font-headline text-3xl font-bold tracking-tight text-white italic">Anandham Mindcare</h1>
</div>
</div> -->
<!-- Academic Sanctuary Quote -->
 <div class="flex items-center justify-center min-h-screen">
<div class="relative z-10 max-w-lg mb-12 mx-auto text-center">
  <div class="bg-surface-container-lowest/10 backdrop-blur-md p-8 rounded-xl perspective-quote border-l-4 border-secondary shadow-2xl">
    
    <p class="font-headline text-3xl text-white leading-snug mb-4">
      "Healing is not merely the absence of illness, but the active pursuit of mental harmony and academic excellence."
    </p>

    <p class="font-label text-sm uppercase tracking-widest text-secondary-fixed-dim font-semibold">
      Clinical Philosophy • Est. 1994
    </p>

  </div>
</div>
</div>
<!-- Footer Meta -->
 
<div class="relative z-10 flex justify-between items-end text-white/70 font-label text-xs uppercase tracking-tighter">
<span>Accredited Clinical Research Institution</span>
<span>Mind &amp; Soul Integration</span>
</div>
</section>
<!-- Right Section: Registration Form -->
<section class="w-full md:w-1/2 bg-surface-bright flex items-center justify-center p-6 md:p-12 overflow-y-auto">
<div class="w-full max-w-md">
<!-- Mobile Logo -->
<div class="md:hidden flex flex-col items-center mb-10">
<img alt="Anandham Mindcare Logo" class="h-14 w-14 mb-4" data-alt="Close-up of a professional medical seal with clinical details in navy blue on a white circular badge" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEuVdG7X2BeFiM60m-AOlhXavSs4fR6YMR6bvyvS1Ov4Js0WqM5--XR0k5A-b1_raDlEcViQMiTuUgG2DRIDCBMcu6nSV1TVpYDXdyicTKYg1TyKCBCw4avbANM1lY32oQavLFKs1RI9Wm-jfxRt2nPEiSKMFmYCNuwBtQLdnUbOtvPlbePVzP5dMB69UljoPyePXvhksqz_99b-jXa4AorDxnipKJcbKEJ68W2dY2f0HP_Ro6Nq46d5xh6rmT7ozqPrghQAYBbkW7"/>
<h2 class="font-headline text-2xl font-bold text-primary">Anandham Mindcare</h2>
</div>
<header class="text-center md:text-left mb-8">
<h2 class="font-headline text-4xl text-primary font-semibold mb-2">Create Account</h2>
<p class="font-body text-on-surface-variant">Join our clinical community for expert mental healthcare.</p>
@include('partials.alerts')
</header>

  <form class="space-y-6" method="POST" action="{{ route('register.store') }}">
    @csrf
  <!-- Full Name -->
<div class="space-y-1">
<label class="block font-label text-[10px] font-bold text-primary uppercase tracking-widest ml-1" for="name">Full Name</label>
<div class="relative">
<input class="w-full px-0 py-2.5 bg-transparent border-0 border-b-2 border-outline-variant focus:border-secondary focus:ring-0 transition-all placeholder:text-outline/30 font-body text-on-surface" id="name" name="name" placeholder="Dr. Jane Smith" type="text"/>
<span class="absolute right-0 top-2.5 text-outline/40 material-symbols-outlined text-xl">person</span>
</div>
</div>
<!-- Email Address -->
<div class="space-y-1">
<label class="block font-label text-[10px] font-bold text-primary uppercase tracking-widest ml-1" for="email">Email Address</label>
<div class="relative">
<input class="w-full px-0 py-2.5 bg-transparent border-0 border-b-2 border-outline-variant focus:border-secondary focus:ring-0 transition-all placeholder:text-outline/30 font-body text-on-surface" id="email" name="email" placeholder="clinical@anandham.com" type="email"/>
<span class="absolute right-0 top-2.5 text-outline/40 material-symbols-outlined text-xl">mail</span>
</div>
</div>
<!-- Phone Number -->
<div class="space-y-1">
<label class="block font-label text-[10px] font-bold text-primary uppercase tracking-widest ml-1" for="phone">Phone Number</label>
<div class="relative">
<input class="w-full px-0 py-2.5 bg-transparent border-0 border-b-2 border-outline-variant focus:border-secondary focus:ring-0 transition-all placeholder:text-outline/30 font-body text-on-surface" id="phone" name="phone" placeholder="+91 00000 00000" type="tel"/>
<span class="absolute right-0 top-2.5 text-outline/40 material-symbols-outlined text-xl">call</span>
</div>
</div>
<!-- Password -->
<div class="space-y-1">
<label class="block font-label text-[10px] font-bold text-primary uppercase tracking-widest ml-1" for="password">Password</label>
<div class="relative">
<input class="w-full px-0 py-2.5 bg-transparent border-0 border-b-2 border-outline-variant focus:border-secondary focus:ring-0 transition-all placeholder:text-outline/30 font-body text-on-surface" id="password" name="password" placeholder="••••••••••••" type="password"/>
<span class="absolute right-0 top-2.5 text-outline/40 material-symbols-outlined text-xl">lock</span>
</div>
</div>

<!-- Passwod Confirmation -->
 <div class="space-y-1">
    <label class="block font-label text-[10px] font-bold text-primary uppercase tracking-widest ml-1" for="password_confirmation">
        Confirm Password
    </label>
    <div class="relative">
        <input 
            id="password_confirmation"
            name="password_confirmation"
            type="password"
            required
            class="w-full px-0 py-2.5 bg-transparent border-0 border-b-2 border-outline-variant focus:border-secondary focus:ring-0"
            placeholder="Re-enter password"
        />
        <span class="absolute right-0 top-2.5 text-outline/40 material-symbols-outlined text-xl">lock</span>
    </div>
</div>
<!-- Terms of Service -->
<div class="flex items-start gap-3 py-2">
<div class="flex items-center h-5">
<input class="w-4 h-4 border-2 border-outline-variant rounded text-secondary focus:ring-secondary/20 focus:ring-offset-0 transition-all" id="terms" name="terms" type="checkbox"/>
</div>
<label class="text-xs text-on-surface-variant font-body leading-normal" for="terms">
                            I agree to the <a class="text-primary font-semibold hover:underline decoration-primary/30" href="#">Terms of Service</a> and <a class="text-primary font-semibold hover:underline decoration-primary/30" href="#">Clinical Privacy Policy</a>.
                        </label>
</div>
<!-- Submit Button -->
<div class="pt-4">
<button class="w-full py-3.5 bg-primary text-white font-label text-xs font-bold uppercase tracking-[0.2em] rounded-lg hover:bg-primary-container transition-all duration-300 shadow-md" type="submit" >
                            Register Profile
                        </button>
</div>
<!-- Alternative Action -->
<div class="text-center pt-6">
<p class="text-sm text-on-surface-variant font-body">
                            Already have an account? 
                            <a class="text-primary font-bold hover:text-secondary transition-colors underline decoration-outline-variant/30 underline-offset-4 ml-1" href="{{ route('signin') }}">Log In</a>
</p>
</div></form>
<!-- Academic Certification Badges -->
<div class="flex justify-center items-center gap-8 opacity-40 grayscale hover:grayscale-0 transition-all mt-10">
<img alt="Medical Certification Logo" class="h-8 object-contain" data-alt="Subtle grey medical accreditation badge for clinical excellence" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDleCpApPQj-2W6CkrIwWy26_MFF-v1zMxilB6PGrqM0DBnLXp1etUyz01qDmwQv_d0N1mLy2sSl819W1j60QbE7rETXLHYN0-xOpv-EOei3kiY2Lf8iLaOFjav0FfIPq_so1byj5ZiclX5BA4eixiAB5BhnJerhi3tSII1otS2aLqms8mfLVeMQtAiikZvCTIwFYm7CdWNkVTSjy5vA3cZMKGTEIEhLsr6AgZaPRiAJ6APwJSg2nckkPGtcmYV0yMtxdfRgnDtuHsF"/>
<img alt="Healthcare Quality Seal" class="h-8 object-contain" data-alt="Seal of international healthcare quality standards in a minimal monochromatic style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAic1K3SIWDoicnHrqLcRpaYUQWi5o-ybWrgWBdBT8xt7ExxyFvkxtuXUAN6ihkUkF9Td2p4FxQVP-LkUdqzQwuIDpN2mg2CLVQJNl8RRJRefQDzIPNcoUCXEUQhgJ44qSZEikUFbFv5OH7cS_NCHrjV4iAh_Xs1Jjxr407rQHjVYdCH4YSEMOBurYHvAi2Fwaabr971YII23DoSkyPfPtU3dc_wMnt6Wr6tJbeAbEB3_o5ad302lfsL7xeeFBRK5ROS6eQsX0oers"/>
</div>

@endsection