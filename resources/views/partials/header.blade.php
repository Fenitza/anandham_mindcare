<nav class="bg-white/90 backdrop-blur-md sticky top-0 z-50 shadow-sm border-b border-outline-variant/10">

  <div class="max-w-7xl mx-auto px-4 md:px-8 h-20 flex items-center">

    <!-- LEFT: LOGO -->
    <a href="{{ route('hospital') }}" class="flex items-center gap-3">
      <img 
        src="{{ asset('assets/logo/hosp_logo.jpeg') }}"
        class="w-16 md:w-20 h-16 md:h-20 object-contain rounded-xl bg-white p-1 shadow-md"
      />
      <div class="text-base md:text-xl font-serif italic text-primary leading-tight">
        Anandham Mindcare Institute
        <div class="text-base md:text-xl font-serif italic text-primary leading-tight">& Research Foundation</div>
      </div>
    </a>

    <!-- RIGHT: MENU + SIGN IN -->
    <div class="ml-auto flex items-center gap-6">

      <!-- DESKTOP MENU -->
      <div class="hidden lg:flex items-center gap-6">

        <a href="{{ route('about-us') }}" class="hover:text-primary">About</a>
        <a href="{{ route('services') }}" class="hover:text-primary">Services</a>
        <a href="{{ route('gallery') }}" class="hover:text-primary">Gallery</a>
        <a href="{{ route('blogs') }}" class="hover:text-primary">Blogs</a>
        <a href="{{ route('courses') }}" class="hover:text-primary">Courses</a>
        <a href="{{ route('contact-us') }}" class="hover:text-primary">Contact</a>

      </div>

      <!-- SIGN IN -->
      @php
    $isAdmin = Auth::guard('admin')->check();
    $isUser = Auth::guard('web')->check();
@endphp

@if($isAdmin || $isUser)

    <a href="{{ $isAdmin ? route('admin.dashboard') : route('user.dashboard') }}"
       class="hidden sm:flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg text-sm">

        <span class="material-symbols-outlined text-lg">account_circle</span>
        My Account
    </a>

@else

    <a href="{{ route('signin') }}" 
       class="hidden sm:flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg text-sm">

        <span class="material-symbols-outlined text-lg">login</span>
        Sign In
    </a>

@endif

      <!-- HAMBURGER -->
      <button id="menuBtn" class="lg:hidden flex items-center justify-center w-10 h-10 rounded-lg border">
        <span class="material-symbols-outlined">menu</span>
      </button>

    </div>

  </div>

  <!-- MOBILE MENU -->
  <div id="mobileMenu" class="hidden lg:hidden px-6 pb-6 bg-white">
    <div class="flex flex-col gap-4 pt-4 border-t">
      <a href="{{ route('hospital') }}">Home</a>
      <a href="{{ route('about-us') }}">About</a>
      <a href="{{ route('services') }}">Services</a>
      <a href="{{ route('courses') }}">Courses</a>
      <a href="{{ route('contact-us') }}">Contact</a>

      <a href="{{ route('signin') }}" class="mt-4 bg-primary text-white py-2 rounded-lg text-center">
        Sign In
      </a>
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