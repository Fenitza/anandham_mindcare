<!-- Header -->
<nav class="bg-white/90 backdrop-blur-md sticky top-0 z-50 shadow-sm border-b border-outline-variant/10">

  <div class="flex justify-between items-center max-w-7xl mx-auto px-4 md:px-8 h-20">

    <!-- LEFT: LOGO -->
    <a href="{{ route('hospital') }}" class="flex items-center gap-3">
      <img 
        src="{{ asset('assets/logo/hosp_logo.jpeg') }}"
        class="w-12 md:w-16 h-12 md:h-16 object-contain rounded-xl bg-white/80 p-1 shadow border border-white/30"
      />
      <div class="text-lg md:text-2xl font-serif italic text-primary font-headline tracking-tight">
        Anandham Mindcare Foundation
      </div>
    </a>

    <!-- DESKTOP MENU -->
    <div class="hidden lg:flex items-center gap-x-8">
      <!-- <a class="{{ request()->routeIs('hospital') ? 'text-primary font-bold border-b-2 border-secondary pb-1 text-sm tracking-wide' : 'text-on-surface-variant text-sm hover:text-primary' }}" 
        href="{{ route('hospital') }}">
        Home
      </a> -->

      <a class="{{ request()->routeIs('about-us') ? 'text-primary font-bold border-b-2 border-secondary pb-1 text-sm tracking-wide' : 'text-on-surface-variant text-sm hover:text-primary' }}" 
        href="{{ route('about-us') }}">
        About Us
      </a>

      <a class="{{ request()->routeIs('services') ? 'text-primary font-bold border-b-2 border-secondary pb-1 text-sm tracking-wide' : 'text-on-surface-variant text-sm hover:text-primary' }}" 
        href="{{ route('services') }}">
        Services
      </a>

      <a class="{{ request()->routeIs('gallery') ? 'text-primary font-bold border-b-2 border-secondary pb-1 text-sm tracking-wide' : 'text-on-surface-variant text-sm hover:text-primary' }}" 
        href="{{ route('gallery') }}">
        Gallery
      </a>

      <a class="{{ request()->routeIs('blogs') ? 'text-primary font-bold border-b-2 border-secondary pb-1 text-sm tracking-wide' : 'text-on-surface-variant text-sm hover:text-primary' }}" 
        href="{{ route('blogs') }}">
        Blogs
      </a>

      <a class="{{ request()->routeIs('courses') ? 'text-primary font-bold border-b-2 border-secondary pb-1 text-sm tracking-wide' : 'text-on-surface-variant text-sm hover:text-primary' }}" 
        href="{{ route('courses') }}">
        Courses
      </a>

      <a class="{{ request()->routeIs('contact-us') ? 'text-primary font-bold border-b-2 border-secondary pb-1 text-sm tracking-wide' : 'text-on-surface-variant text-sm hover:text-primary' }}" 
        href="{{ route('contact-us') }}">
        Contact Us
      </a>
    </div>

    <!-- RIGHT -->
    <div class="flex items-center gap-3">

      <!-- SIGN IN (HIDE SMALL) -->
      <a href="{{ route('signin') }}" 
        class="hidden sm:flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg text-sm">
        <span class="material-symbols-outlined text-lg">login</span>
        Sign In
      </a>

      <!-- HAMBURGER -->
      <button id="menuBtn" class="lg:hidden flex items-center justify-center w-10 h-10 rounded-lg border">
        <span class="material-symbols-outlined">menu</span>
      </button>

    </div>

  </div>

  <!-- MOBILE MENU -->
  <div id="mobileMenu" class="hidden lg:hidden px-6 pb-6">

    <div class="flex flex-col gap-4 pt-4 border-t">
      <a class="text-primary font-semibold" href="{{ route('hospital') }}">Home</a>
      <a class="text-primary font-semibold" href="{{ route('about-us') }}">About Us</a>
      <a class="text-on-surface-variant" href="{{ route('services') }}">Services</a>
      <a class="text-on-surface-variant" href="{{ route('courses') }}">Courses</a>
      <a class="text-on-surface-variant" href="{{ route('contact-us') }}">Contact Us</a>

      <button class="mt-4 bg-primary text-white py-2 rounded-lg text-sm">
        Sign In
      </button>

    </div>

  </div>

</nav>

<script>
  const menuBtn = document.getElementById('menuBtn');
  const mobileMenu = document.getElementById('mobileMenu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>