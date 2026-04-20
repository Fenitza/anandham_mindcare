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

<!-- Tailwind Config -->
<script>
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        primary: "#002555",
        secondary: "#755b00",
        "surface-container": "#eceef1",
        "surface-container-lowest": "#ffffff",
        "on-surface-variant": "#43474f"
      },
      fontFamily: {
        headline: ["Newsreader"],
        body: ["Work Sans"]
      }
    }
  }
}
</script>

<style>
.material-symbols-outlined {
  font-variation-settings: 'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 24;
}

/* smooth active button */
.filter-btn.active {
  transform: scale(1.05);
  box-shadow: 0 6px 20px rgba(0, 37, 85, 0.15);
}
</style>

<main class="pt-20">

<!-- HERO -->
<section class="max-w-7xl mx-auto px-8 mb-20">

  <h1 class="font-headline text-7xl md:text-4xl text-primary font-bold mb-6">
    Institutional Gallery
  </h1>

</section>

<!-- FILTER -->
<section class="max-w-7xl mx-auto px-8 mb-16">
  <div class="flex flex-wrap gap-3">

    <button data-filter="all"
      class="filter-btn active px-5 py-2 rounded-full text-xs font-semibold bg-primary text-white transition">
      All
    </button>

    @foreach($categories as $cat)
      <button data-filter="{{ $cat }}"
        class="filter-btn px-5 py-2 rounded-full text-xs font-semibold bg-surface-container text-on-surface-variant hover:bg-primary/10 hover:text-primary transition">
        {{ $cat }}
      </button>
    @endforeach

  </div>
</section>

<!-- GALLERY -->
<section class="max-w-7xl mx-auto px-8 pb-20">

<div id="galleryGrid"
     class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

@foreach($galleries as $item)

<div class="gallery-item"
     data-category="{{ $item->category }}">

  <div class="group relative rounded-2xl overflow-hidden bg-white shadow-md hover:shadow-2xl transition">

    <!-- IMAGE FIXED SIZE -->
    <div class="w-full h-[260px] md:h-[300px] overflow-hidden">

      @if($item->media)
        @php $ext = pathinfo($item->media, PATHINFO_EXTENSION); @endphp

        @if($ext === 'mp4')
          <video class="w-full h-full object-cover" controls>
            <source src="{{ asset('storage/'.$item->media) }}">
          </video>
        @else
          <img 
            src="{{ asset('storage/'.$item->media) }}"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
          />
        @endif
      @endif

    </div>

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition">

      <div class="absolute bottom-0 p-5 translate-y-6 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">

        <span class="text-[10px] text-yellow-300 font-bold uppercase">
          {{ $item->category ?? 'General' }}
        </span>

        <h3 class="text-white font-bold text-lg">
          {{ $item->name }}
        </h3>

        <p class="text-white/80 text-xs">
          {{ $item->description }}
        </p>

      </div>

    </div>

  </div>

</div>

@endforeach

</div>
</section>

<!-- QUOTE -->
<section class="max-w-5xl mx-auto px-8 mb-32 text-center">
  <h2 class="font-headline text-3xl md:text-4xl italic text-primary">
    "We curate environments where the soul feels safe enough to heal."
  </h2>
</section>

</main>

<!-- FILTER SCRIPT (ONLY ONCE) -->
<script>
const buttons = document.querySelectorAll('.filter-btn');
const items = document.querySelectorAll('.gallery-item');

buttons.forEach(btn => {
  btn.addEventListener('click', () => {

    const filter = btn.dataset.filter;

    // Active UI
    buttons.forEach(b => {
      b.classList.remove('bg-primary','text-white','active');
      b.classList.add('bg-surface-container','text-on-surface-variant');
    });

    btn.classList.add('bg-primary','text-white','active');
    btn.classList.remove('bg-surface-container','text-on-surface-variant');

    // Filter logic
    items.forEach(item => {
      if (filter === 'all' || item.dataset.category === filter) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });

  });
});
</script>

@endsection