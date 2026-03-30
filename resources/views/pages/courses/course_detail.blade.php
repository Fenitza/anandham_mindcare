@extends('layouts.hosp')

@section('content')
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "outline-variant": "#c4c6d1",
              "on-primary-fixed": "#001a41",
              "inverse-surface": "#2d3133",
              "on-secondary-fixed-variant": "#584400",
              "on-tertiary-fixed": "#001f2a",
              "tertiary-fixed-dim": "#aecbda",
              "secondary-fixed": "#ffdf90",
              "primary-container": "#1b3b6f",
              "outline": "#747780",
              "on-secondary": "#ffffff",
              "on-tertiary-container": "#8fabba",
              "on-error": "#ffffff",
              "inverse-primary": "#acc7ff",
              "on-surface": "#191c1e",
              "surface-tint": "#415e94",
              "surface-container-lowest": "#ffffff",
              "on-secondary-container": "#6f5600",
              "surface-variant": "#e0e3e6",
              "background": "#f7f9fc",
              "error": "#ba1a1a",
              "surface-container-high": "#e6e8eb",
              "surface": "#f7f9fc",
              "on-tertiary": "#ffffff",
              "on-tertiary-fixed-variant": "#2f4a57",
              "primary-fixed": "#d8e2ff",
              "tertiary-container": "#25404c",
              "secondary-container": "#fccc38",
              "error-container": "#ffdad6",
              "primary": "#002555",
              "on-surface-variant": "#43474f",
              "surface-dim": "#d8dadd",
              "secondary-fixed-dim": "#f0c12c",
              "on-error-container": "#93000a",
              "surface-container-highest": "#e0e3e6",
              "on-primary": "#ffffff",
              "inverse-on-surface": "#eff1f4",
              "surface-container-low": "#f2f4f7",
              "surface-container": "#eceef1",
              "surface-bright": "#f7f9fc",
              "primary-fixed-dim": "#acc7ff",
              "tertiary-fixed": "#cae7f6",
              "tertiary": "#0c2a35",
              "on-primary-fixed-variant": "#28467b",
              "on-secondary-fixed": "#241a00",
              "on-primary-container": "#8aa7e1",
              "secondary": "#755b00",
              "on-background": "#191c1e"
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
        .hero-gradient {
            background: linear-gradient(to right, rgba(0, 37, 85, 0.95), rgba(27, 59, 111, 0.8));
        }
        .ghost-border {
            border: 1px solid rgba(196, 198, 209, 0.15);
        }
    </style>
<!-- Hero Section -->
<section class="relative h-[716px] min-h-[600px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img alt="Neural correlates visual" class="w-full h-full object-cover" data-alt="High-resolution medical imaging showing detailed neural pathways and brain activity with cool blue and amber light tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCPjnbGAmwiYnEORVy74hVMv1rwUKdbN1vumI9km5zLgu6k_C8lEfDwVkJ3HEPwbNTOTJAii9zM0cE7jeS8P1wMenVLP36XeZsw0PZTlSF2Ed3DVbs-vU09-4QzwIEC0zO3wsf4Br_kHtY1Ps_Rw1Qex-iZ-bm5Jcb-CRKVcNVkmFt-8VU8UUC3vrL7ejBqJPoqfnia8VDtw5PbnpBSK39ye3jJY0WNHnO04AcAY3htOZqGSt2pmp3WdVmcvBhkIal5ZU5pKsM5XXj"/>
<div class="absolute inset-0 hero-gradient"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-3xl">
<div class="flex items-center space-x-4 mb-6">
<span class="bg-secondary/20 text-secondary-fixed-dim border border-secondary/30 px-3 py-1 text-xs font-bold tracking-widest uppercase">Clinical Certification</span>
<span class="text-blue-200 text-sm font-medium flex items-center">
<span class="material-symbols-outlined text-sm mr-2">verified</span>
                            CPD Accredited
                        </span>
</div>
<h1 class="font-headline text-5xl md:text-7xl text-white mb-8 leading-tight">
                        Advanced Clinical Certification: <br/>
<span class="italic font-light">Neural Correlates of Cognitive Behavioral Therapy</span>
</h1>
<div class="grid grid-cols-2 md:grid-cols-4 gap-8 py-8 border-t border-white/10">
<div>
<p class="text-blue-200 text-xs uppercase tracking-widest mb-1">Duration</p>
<p class="text-white font-semibold text-lg">12 Weeks</p>
</div>
<div>
<p class="text-blue-200 text-xs uppercase tracking-widest mb-1">Enrollments</p>
<p class="text-white font-semibold text-lg">1,240+ Practitioners</p>
</div>
<div>
<p class="text-blue-200 text-xs uppercase tracking-widest mb-1">Level</p>
<p class="text-white font-semibold text-lg">Post-Graduate</p>
</div>
<div>
<p class="text-blue-200 text-xs uppercase tracking-widest mb-1">Certification</p>
<p class="text-white font-semibold text-lg">AAM Level IV</p>
</div>
</div>
</div>
</div>
</section>
<!-- Content Grid -->
<section class="max-w-7xl mx-auto px-8 py-24">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
<!-- Main Content Column -->
<div class="lg:col-span-8 space-y-24">
<!-- Philosophy -->
<div class="space-y-8">
<div class="inline-flex items-center space-x-2 text-secondary font-medium tracking-wide">
<span class="w-8 h-[1px] bg-secondary"></span>
<span>Curriculum Focus &amp; Philosophy</span>
</div>
<h2 class="font-headline text-4xl text-primary max-w-xl">Bridging the gap between neurobiology and clinical practice.</h2>
<div class="prose prose-slate max-w-none text-on-surface-variant leading-relaxed space-y-6">
<p class="text-lg">This certification program is designed for senior clinicians seeking to integrate modern neuroscience into their CBT framework. We move beyond behavioral observation into the functional architecture of the mind, examining how neuroplasticity drives the efficacy of cognitive restructuring.</p>
<div class="bg-surface-container-low p-8 relative overflow-hidden">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-secondary"></div>
<p class="font-headline text-2xl text-primary italic leading-snug">"The most effective clinicians are those who understand not just that therapy works, but precisely why it works within the neural landscape of the patient."</p>
</div>
<p>Our methodology emphasizes the prefrontal-amygdala pathway, offering participants a deep dive into the biological markers of anxiety, depression, and trauma recovery. Each module is paired with neuroimaging case studies to ground theoretical concepts in clinical reality.</p>
</div>
</div>
<!-- Lead Instructor -->
<div class="bg-surface-container-lowest p-12 ghost-border rounded-xl">
<div class="flex flex-col md:flex-row gap-12 items-center">
<div class="w-48 h-48 flex-shrink-0 relative">
<img alt="Dr. M. Helena Selvakodi" class="w-full h-full object-cover rounded-full duration-500" data-alt="Professional portrait of a female clinical researcher in a minimalist white medical setting, looking confident and approachable" src="{{ asset('assets/images/doctor.jpeg') }}">
<div class="absolute -bottom-2 -right-2 bg-secondary text-white p-3 rounded-full">
<span class="material-symbols-outlined text-sm">school</span>
</div>
</div>
<div class="space-y-4 text-center md:text-left">
<h3 class="font-headline text-3xl text-primary">Dr. M. Helena Selvakodi</h3>
<p class="text-secondary font-semibold uppercase tracking-widest text-xs">Lead Clinical Neuroscientist</p>
<p class="text-on-surface-variant max-w-md">Former Senior Fellow at the Institute of Cognitive Neuroscience. Specializing in functional MRI interpretation and evidence-based behavioral intervention.</p>
<div class="flex flex-wrap justify-center md:justify-start gap-6 pt-4">
<div>
<p class="text-primary font-bold text-xl">85+</p>
<p class="text-on-surface-variant text-xs uppercase tracking-wider">Publications</p>
</div>
<div>
<p class="text-primary font-bold text-xl">18 yrs</p>
<p class="text-on-surface-variant text-xs uppercase tracking-wider">Experience</p>
</div>
<div>
<p class="text-primary font-bold text-xl">12k</p>
<p class="text-on-surface-variant text-xs uppercase tracking-wider">Students</p>
</div>
</div>
</div>
</div>
</div>
<!-- Student Perspectives -->
<div class="space-y-12">
<div class="text-center">
<h2 class="font-headline text-4xl text-primary">Practitioner Insights</h2>
<p class="text-on-surface-variant mt-2">Verified feedback from our clinical community</p>
</div>
<div class="grid md:grid-cols-2 gap-8">
<div class="bg-white p-8 ghost-border space-y-4">
<div class="flex text-secondary mb-2">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="italic text-on-surface-variant">"The depth of clinical application here is unparalleled. Understanding the neural correlates has completely changed how I explain treatment plans to my patients."</p>
<div class="pt-4 border-t border-surface-container">
<p class="font-bold text-primary">Dr. James Aristhone</p>
<p class="text-xs text-on-surface-variant">Clinical Psychologist, NHS</p>
</div>
</div>
<div class="bg-white p-8 ghost-border space-y-4">
<div class="flex text-secondary mb-2">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="italic text-on-surface-variant">"Dr. Selvakodi's lectures are masterclasses in academic clarity. This isn't just a course; it's a professional evolution for anyone in the mental health field."</p>
<div class="pt-4 border-t border-surface-container">
<p class="font-bold text-primary">Sarah Jenkins</p>
<p class="text-xs text-on-surface-variant">Senior CBT Practitioner</p>
</div>
</div>
</div>
</div>
</div>
<!-- Sidebar / Enrollment -->
<div class="lg:col-span-4 sticky top-28">
<div class="bg-white shadow-xl shadow-blue-900/5 rounded-xl overflow-hidden ghost-border">
<div class="p-8 border-b border-surface-container">
<div class="flex justify-between items-end mb-6">
<div>
<p class="text-on-surface-variant text-xs uppercase tracking-widest font-bold">Investment</p>
<h4 class="text-4xl font-headline text-primary mt-1">$1,250</h4>
</div>
<span class="bg-green-50 text-green-700 text-xs font-bold px-2 py-1 rounded">Open Enrollment</span>
</div>
<ul class="space-y-4 mb-8">
<li class="flex items-start">
<span class="material-symbols-outlined text-secondary text-lg mr-3">check_circle</span>
<span class="text-sm text-on-surface-variant">24 Verifiable CPD Hours</span>
</li>
<li class="flex items-start">
<span class="material-symbols-outlined text-secondary text-lg mr-3">check_circle</span>
<span class="text-sm text-on-surface-variant">Access to proprietary MRI Case Library</span>
</li>
<li class="flex items-start">
<span class="material-symbols-outlined text-secondary text-lg mr-3">check_circle</span>
<span class="text-sm text-on-surface-variant">Quarterly Live Q&amp;A with Dr. Selvakodi</span>
</li>
<li class="flex items-start">
<span class="material-symbols-outlined text-secondary text-lg mr-3">check_circle</span>
<span class="text-sm text-on-surface-variant">Lifetime Clinical Community Access</span>
</li>
</ul>
<button class="w-full bg-primary py-5 rounded-lg text-white font-bold tracking-wide hover:bg-primary-container transition-colors shadow-lg shadow-primary/20 scale-95 active:opacity-90">
                                Proceed to Secure Checkout
                            </button>
</div>
<div class="bg-surface-container-low p-6 space-y-4">
<div class="flex items-center space-x-3 text-xs text-on-surface-variant font-medium">
<span class="material-symbols-outlined text-sm">lock</span>
<span>256-bit Secure Transaction</span>
</div>
<div class="flex items-center space-x-3 text-xs text-on-surface-variant font-medium">
<span class="material-symbols-outlined text-sm">assignment_return</span>
<span>14-Day Academic Satisfaction Guarantee</span>
</div>
</div>
</div>
<!-- Support Card -->
<div class="mt-8 p-6 bg-primary-container text-white rounded-xl">
<h5 class="font-bold mb-2">Corporate Training?</h5>
<p class="text-blue-100 text-sm mb-4">Inquire about institutional licensing and group rates for clinics.</p>
<a class="text-secondary-fixed text-sm font-bold flex items-center group" href="#">
                            Contact Registrar
                            <span class="material-symbols-outlined ml-2 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>

@endsection
