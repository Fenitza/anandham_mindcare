@extends('layouts.hosp')

@section('content')
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "tertiary": "#0c2a35",
              "on-primary": "#ffffff",
              "secondary-fixed-dim": "#f0c12c",
              "secondary": "#755b00",
              "on-tertiary": "#ffffff",
              "on-primary-fixed": "#001a41",
              "error-container": "#ffdad6",
              "surface-container-high": "#e6e8eb",
              "surface": "#f7f9fc",
              "surface-variant": "#e0e3e6",
              "on-background": "#191c1e",
              "on-secondary-fixed": "#241a00",
              "on-primary-container": "#8aa7e1",
              "inverse-on-surface": "#eff1f4",
              "outline-variant": "#c4c6d1",
              "on-surface-variant": "#43474f",
              "surface-container-lowest": "#ffffff",
              "on-tertiary-container": "#8fabba",
              "inverse-primary": "#acc7ff",
              "surface-dim": "#d8dadd",
              "surface-container": "#eceef1",
              "secondary-fixed": "#ffdf90",
              "on-tertiary-fixed-variant": "#2f4a57",
              "surface-tint": "#415e94",
              "on-secondary-fixed-variant": "#584400",
              "on-secondary-container": "#6f5600",
              "primary-container": "#1b3b6f",
              "on-secondary": "#ffffff",
              "on-error-container": "#93000a",
              "primary-fixed-dim": "#acc7ff",
              "primary": "#002555",
              "inverse-surface": "#2d3133",
              "tertiary-container": "#25404c",
              "background": "#f7f9fc",
              "surface-bright": "#f7f9fc",
              "on-surface": "#191c1e",
              "on-error": "#ffffff",
              "tertiary-fixed": "#cae7f6",
              "tertiary-fixed-dim": "#aecbda",
              "on-tertiary-fixed": "#001f2a",
              "primary-fixed": "#d8e2ff",
              "on-primary-fixed-variant": "#28467b",
              "outline": "#747780",
              "secondary-container": "#fccc38",
              "surface-container-low": "#f2f4f7",
              "surface-container-highest": "#e0e3e6",
              "error": "#ba1a1a"
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
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .masonry-grid {
            column-count: 1;
            column-gap: 2.5rem;
        }
        @media (min-width: 768px) {
            .masonry-grid {
                column-count: 2;
            }
        }
        @media (min-width: 1024px) {
            .masonry-grid {
                column-count: 3;
            }
        }
        .masonry-item {
            break-inside: avoid;
            margin-bottom: 2.5rem;
        }
        .gallery-card-hover .overlay-content {
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .gallery-card-hover:hover .overlay-content {
            transform: translateY(0);
            opacity: 1;
        }
    </style>

<main class="pt-20 ">
<section class="max-w-7xl mx-auto px-8 mb-24">
<div class="max-w-7xl">
<span class="text-secondary font-semibold tracking-[0.2em] uppercase text-xs mb-6 block">Visual Excellence</span>
<h1 class="font-headline text-6xl md:text-7xl text-primary font-bold mb-8 leading-[1.1]">Institutional Gallery</h1>
<p class="text-2xl text-on-surface-variant font-light leading-relaxed max-w-5xl">
                Experience the intersection of architectural precision and psychological healing. Our facilities are designed as active participants in the restorative journey.
            </p>
</div>
</section>
<!-- Category Filter -->
<section class="max-w-7xl mx-auto px-8 mb-16">
<div class="flex flex-wrap items-center gap-3">
<button class="px-8 py-3 bg-primary text-on-primary rounded-full text-sm font-semibold transition-all shadow-md hover:shadow-xl">All Collections</button>
<button class="px-8 py-3 bg-surface-container text-on-surface-variant hover:bg-surface-container-highest hover:text-primary rounded-full text-sm font-semibold transition-all border border-transparent hover:border-primary/20">Clinical Spaces</button>
<button class="px-8 py-3 bg-surface-container text-on-surface-variant hover:bg-surface-container-highest hover:text-primary rounded-full text-sm font-semibold transition-all border border-transparent hover:border-primary/20">Academic Halls</button>
<button class="px-8 py-3 bg-surface-container text-on-surface-variant hover:bg-surface-container-highest hover:text-primary rounded-full text-sm font-semibold transition-all border border-transparent hover:border-primary/20">Wellness Suites</button>
</div>
</section>
<!-- Masonry Gallery Grid -->
<section class="max-w-7xl mx-auto px-8">
<div class="masonry-grid">
<!-- Item 1: Clinical -->
<div class="masonry-item group cursor-zoom-in gallery-card-hover">
<div class="relative overflow-hidden rounded-2xl bg-surface-container-lowest shadow-md group-hover:shadow-2xl transition-all duration-700">
<img class="w-full h-auto object-cover transition-transform duration-1000 ease-out group-hover:scale-110" data-alt="ultra-modern clinical therapy room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYfOTUBk_xIck00hsCo4dJ3rVIPqIraMd2N0db6tTzmF8oNuETZNHt6y1jOp0aZKj49J6Y_d99NR6LMm5TmuNhfGxppWo-fq4t7-Hy_rbBCLNDR3EHpdydpuBVUMlTz0sMzzTCPWCAVfWmiskfclJf9taPnbGoEZVOmM9NqCzQHRcg4-hO-uaTt1J2CsQ1GsnaNfJlN6nY8m8gWRM4gWO0c_3DQ7OpwNPgWnK_ksWlYGVr2IQ1Y3xzLxfZaTcqJcK2JK8EI0c1R-vQ"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<div class="overlay-content">
<span class="text-secondary-fixed text-[10px] font-bold tracking-[0.3em] uppercase mb-2 block">Clinical</span>
<h3 class="font-headline text-2xl text-white font-bold mb-2">Therapeutic Sanctuary</h3>
<p class="text-white/80 text-sm leading-relaxed mb-4">A sensory-optimized environment designed to foster trust and facilitate emotional breakthroughs.</p>
<span class="material-symbols-outlined text-white/50">fullscreen</span>
</div>
</div>
</div>
</div>
<!-- Item 2: Academic (Taller) -->
<div class="masonry-item group cursor-zoom-in gallery-card-hover">
<div class="relative overflow-hidden rounded-2xl bg-surface-container-lowest shadow-md group-hover:shadow-2xl transition-all duration-700">
<img class="w-full h-auto object-cover transition-transform duration-1000 ease-out group-hover:scale-110" data-alt="high-fidelity clinical teaching environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDF2AAPQMAU-sLCRhPbeCZ3tcPGxEVQxb00tpe-y01izZkyUwDuPAIZzfJLSXhhriQ7ioiFsg0P6BrDH8Rp0YcrqGvzt3gUw5pl4waBzj0C81sXDnAY1tjJjW9k32adsIr0AZvOmdOBU1hcAFXBcbH42d9rHviA2qhQl1zNrIVJOm-hFZnDIDk6pLNdYHEp1T6imbKEFSRtgmuMeIVJwkgNKYcMb2txNSZTK7jFJmxVdAXyDftI7NyTKIMRSeFkooOSIZB51fgnTkkz"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<div class="overlay-content">
<span class="text-secondary-fixed text-[10px] font-bold tracking-[0.3em] uppercase mb-2 block">Academic</span>
<h3 class="font-headline text-2xl text-white font-bold mb-2">Pedagogical Excellence</h3>
<p class="text-white/80 text-sm leading-relaxed mb-4">Advanced learning spaces where global medical insights are shared and refined.</p>
<span class="material-symbols-outlined text-white/50">fullscreen</span>
</div>
</div>
</div>
</div>
<!-- Item 3: Wellness -->
<div class="masonry-item group cursor-zoom-in gallery-card-hover">
<div class="relative overflow-hidden rounded-2xl bg-surface-container-lowest shadow-md group-hover:shadow-2xl transition-all duration-700">
<img class="w-full h-auto object-cover transition-transform duration-1000 ease-out group-hover:scale-110" data-alt="quiet meditation space" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCi8ES2o-FT73bUs3PmR8iGjoQiaIFzss2G-OdOplO5peJGCtyJYpv6f4kYl9dNQlL0kodraqzTXhVEE13VH_8HrnCUlpFCYaQDtU3XH3QLl6Pfxe1Cupa0TJQOY9oSN3RClw9KVOk50E-otPU90DY-6-hlXW0FT06lxl6splIz9HdP7bWtXiIjkpb_g7WybMV3o_SzEvN1niv5gfHmsZjHYfm2r4sFi7tkEIRBTwFDSXO7eR_PHCQAY7NViPtlkO8fmZE4zjkRPdAz"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<div class="overlay-content">
<span class="text-secondary-fixed text-[10px] font-bold tracking-[0.3em] uppercase mb-2 block">Wellness</span>
<h3 class="font-headline text-2xl text-white font-bold mb-2">Restorative Suite</h3>
<p class="text-white/80 text-sm leading-relaxed mb-4">Holistic recovery zones designed to realign mind and body through sensory tranquility.</p>
<span class="material-symbols-outlined text-white/50">fullscreen</span>
</div>
</div>
</div>
</div>
<!-- Item 4: Hospital Exterior -->
<div class="masonry-item group cursor-zoom-in gallery-card-hover">
<div class="relative overflow-hidden rounded-2xl bg-surface-container-lowest shadow-md group-hover:shadow-2xl transition-all duration-700">
<img class="w-full h-auto object-cover transition-transform duration-1000 ease-out group-hover:scale-110" data-alt="modern hospital facade" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjDT5rdeQiVyDn3LILjOUY1TST6ROL-hmxrWCP3SxmGBNj_RZGW2_CyltCbLg70n3NMbOrzONa1KxTKZS8c04s0b2wZ_IssWJoXYdX9qSGN-FAd_HYw2PaagMtXJfNx2asQhdw57lvq424aYHX3wH4VCu782FWYViSpGj1NYLC_bZxB1MWBl8fC5kaUGqRB8KToVH0n3YIAfFsWSt00gJ-M3PBPtNDTKu6yygX91X7KyjJu6J6ljDiOXfER6Of2DIT62hs7kYefAxh"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<div class="overlay-content">
<span class="text-secondary-fixed text-[10px] font-bold tracking-[0.3em] uppercase mb-2 block">Clinical</span>
<h3 class="font-headline text-2xl text-white font-bold mb-2">Primary Pavilion</h3>
<p class="text-white/80 text-sm leading-relaxed mb-4">The architectural face of compassionate care and clinical precision.</p>
<span class="material-symbols-outlined text-white/50">fullscreen</span>
</div>
</div>
</div>
</div>
<!-- Item 5: Academic Seminar -->
<div class="masonry-item group cursor-zoom-in gallery-card-hover">
<div class="relative overflow-hidden rounded-2xl bg-surface-container-lowest shadow-md group-hover:shadow-2xl transition-all duration-700">
<img class="w-full h-auto object-cover transition-transform duration-1000 ease-out group-hover:scale-110" data-alt="seminar room with ocean view" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA926V6EdZdzq_dzDCR15BDh0SRjeVNWsJYCP9BI5CMDgNU7WFdvd0h-alQ0UOGddI9-0sMnEMSAWYdbuZ30Qud3J7l-ldmHlNMrGoqhFDCYo-o_y57bp-Lrj_LhUmsvrEQegmoxr_hv499mFPBpM_q8Og0YOTPUEV7rCTkwAr_AKwHwbzUNv_P7eO46-cgGq80VTbUqw2C1UebGMCRmPGKUA7qSbKINAvS8Qss-EoVKoF79iCuUWcWo7GFcIUbB1OO7CtntAWVKtxX"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<div class="overlay-content">
<span class="text-secondary-fixed text-[10px] font-bold tracking-[0.3em] uppercase mb-2 block">Academic</span>
<h3 class="font-headline text-2xl text-white font-bold mb-2">Inquiry Center</h3>
<p class="text-white/80 text-sm leading-relaxed mb-4">Collaborative hubs designed to stimulate deep academic exchange and clinical research.</p>
<span class="material-symbols-outlined text-white/50">fullscreen</span>
</div>
</div>
</div>
</div>
<!-- Item 6: Biophilic Lobby -->
<div class="masonry-item group cursor-zoom-in gallery-card-hover">
<div class="relative overflow-hidden rounded-2xl bg-surface-container-lowest shadow-md group-hover:shadow-2xl transition-all duration-700">
<img class="w-full h-auto object-cover transition-transform duration-1000 ease-out group-hover:scale-110" data-alt="hospital lobby with vertical gardens" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrp8ypDeAYMBDUK8A8b2Pi5MzhIIcU3k_N1ffa7BpuoFPExlQWf00RjJSXXX1NOq5y32ym4Opi9ez755doYzUQyIS12XxBgg0oOvSnRoL02qYdoM456QzJtJE8jMBpWx5E5Ee-paScBUuFcPKDr2ufuME2FTrwkmxedokwv_nRLdb_q75b0V2AqIMt1d92fJS6ZFaetBGnBE9GHfWoZiAC2lUOiAXdo10gVS3XgXrI7v2RVQcIqlsu4AB6iiSjylPX5Pk3alIYL8JD"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<div class="overlay-content">
<span class="text-secondary-fixed text-[10px] font-bold tracking-[0.3em] uppercase mb-2 block">Clinical</span>
<h3 class="font-headline text-2xl text-white font-bold mb-2">Nature Atrium</h3>
<p class="text-white/80 text-sm leading-relaxed mb-4">Biophilic integration that reduces patient anxiety from the moment of arrival.</p>
<span class="material-symbols-outlined text-white/50">fullscreen</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Perspective Quote Section -->
<section class="max-w-6xl mx-auto px-8 mt-40">
<div class="bg-primary/5 p-20 rounded-[2.5rem] relative overflow-hidden text-center border border-primary/10">
<div class="relative z-10 max-w-4xl mx-auto">
<span class="material-symbols-outlined text-primary/20 text-6xl mb-8 block">format_quote</span>
<h2 class="font-headline text-4xl text-primary italic leading-relaxed font-medium">
                    "Architecture is the silent language of care. We don't just build clinics; we curate environments where the soul feels safe enough to heal."
                </h2>
<div class="mt-10 flex flex-col items-center">
<div class="w-16 h-[2px] bg-secondary mb-4"></div>
<p class="font-headline text-lg font-bold text-primary tracking-widest uppercase">The Anandham Design Philosophy</p>
</div>
</div>
<div class="absolute -right-24 -bottom-24 opacity-[0.03] pointer-events-none transform rotate-12">
<span class="material-symbols-outlined text-[30rem] text-primary">healing</span>
</div>
</div>
</section>

</main>
@endsection