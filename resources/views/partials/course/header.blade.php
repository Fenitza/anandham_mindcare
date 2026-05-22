<style>
/* ===== MARQUEE ===== */
@keyframes marquee {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}



/* ===== BACKGROUND ===== */
@keyframes gradientMove {
  0%,100% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
}

.animate-gradient-x {
  background: linear-gradient(
    270deg,
    #e3f2fd,
    #f3e5f5,
    #e8f5e9,
    #e0f7fa,
    #e3f2fd
  );
  background-size: 300% 300%;
  animation: gradientMove 12s ease infinite;
}

/* ===== CLEAN STICKER BADGE ===== */
.badge-sticker {
  position: relative;
  display: inline-block;
  padding: 3px 8px;
  font-size: 10px;
  font-weight: 700;
  color: #1e293b;
  background: #fff;
  border-radius: 4px;
  line-height: 1;
  z-index: 1;
}

/* controlled burst */
.badge-sticker::before {
  content: "";
  position: absolute;
  inset: -3px;
  z-index: -1;

  background: linear-gradient(
    120deg,
    #ff6ec4,
    #7873f5,
    #4facfe,
    #43e97b,
    #ff6ec4
  );
  background-size: 300% 300%;

  clip-path: polygon(
    50% 0%, 65% 15%, 85% 10%, 80% 30%,
    100% 50%, 80% 70%, 85% 90%, 65% 85%,
    50% 100%, 35% 85%, 15% 90%, 20% 70%,
    0% 50%, 20% 30%, 15% 10%, 35% 15%
  );

  animation: stickerGlow 3s linear infinite;
}

/* soft pop */
.badge-sticker {
  animation: popSoft 2.5s ease-in-out infinite;
}

.group:hover .whatsapp-pulse {
  animation: pulse 1.5s infinite;
}

@keyframes pulse {
  0% { box-shadow: 0 0 0 0 rgba(34,197,94,0.6); }
  70% { box-shadow: 0 0 0 10px rgba(34,197,94,0); }
  100% { box-shadow: 0 0 0 0 rgba(34,197,94,0); }
}

@keyframes stickerGlow {
  0% { background-position: 0% 50%; }
  100% { background-position: 200% 50%; }
}

@keyframes popSoft {
  0%,100% { transform: scale(1); }
  50% { transform: scale(1.08); }


}
</style>
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
        <a href="{{ route('courses.list') }}" class="hover:text-primary">Courses</a>
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
      <a href="{{ route('courses.list') }}">Courses</a>
      <a href="{{ route('contact-us') }}">Contact</a>

      <a href="{{ route('signin') }}" class="mt-4 bg-primary text-white py-2 rounded-lg text-center">
        Sign In
      </a>
    </div>
  </div>

</nav>

<div class="sticky top-20 z-40 overflow-hidden border-b border-outline-variant/10 w-full flex items-center px-8">
    <div class="absolute inset-0 animate-gradient-x opacity-90"></div>

    <div class="relative overflow-hidden w-full">
        <div id="marqueeTrack"
             class="flex whitespace-nowrap will-change-transform w-max">

            <div class="marquee-content flex items-center">
                @foreach($upcomingCourses as $course)
                    <a href="{{ route('courses.detail', $course->id) }}"
                       class="flex items-center px-6 text-sm font-medium text-gray-800 hover:underline">
                        <span class="badge-sticker mr-2">New</span>
                        <span>{{ $course->title }}</span>
                    </a>
                @endforeach
            </div>

        </div>
    </div>
</div>

<div class="fixed right-4 top-1/2 -translate-y-1/2 z-50 flex flex-col gap-3">

    <!-- Book Appointment -->
    <a href="{{ auth()->check() ? route('user.appointments.list') : route('appointment.create.guest') }}"
       class="group flex items-center justify-end">

        <!-- Label (hidden by default) -->
        <span class="mr-2 px-3 py-1 text-sm rounded-md bg-primary text-white opacity-0 group-hover:opacity-100 transition whitespace-nowrap shadow">
            Book Appointment
        </span>

        <!-- Icon -->
        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-primary text-primary shadow hover:bg-primary hover:text-white transition">
            <!-- Calendar Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
        </div>
    </a>

    <!-- Enroll Courses -->
    <a href="{{ route('courses.list') }}"
       class="group flex items-center justify-end">

        <!-- Label -->
        <span class="mr-2 px-3 py-1 text-sm rounded-md bg-primary text-white opacity-0 group-hover:opacity-100 transition whitespace-nowrap shadow">
            Enroll Courses
        </span>

        <!-- Icon -->
        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-primary text-primary shadow hover:bg-primary hover:text-white transition">
            <!-- Book Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253"/>
            </svg>
        </div>
    </a>

    <!-- WhatsApp -->
<a href="https://wa.me/91XXXXXXXXXX" target="_blank"
   class="group flex items-center  whatsapp-pulse justify-end">

    <!-- Label -->
    <span class="mr-2 px-3 py-1 text-sm rounded-md bg-green-600 text-white opacity-0 group-hover:opacity-100 transition whitespace-nowrap shadow">
        Chat on WhatsApp
    </span>

    <!-- Icon -->
    <div class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-green-600 text-green-600 shadow hover:bg-green-600 hover:text-white transition">
        
        <!-- WhatsApp SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path d="M20.52 3.48A11.88 11.88 0 0012.05 0C5.52 0 .2 5.32.2 11.85c0 2.09.55 4.12 1.6 5.9L0 24l6.45-1.68a11.8 11.8 0 005.6 1.43h.01c6.53 0 11.85-5.32 11.85-11.85 0-3.16-1.23-6.13-3.39-8.42zM12.06 21.2h-.01a9.3 9.3 0 01-4.74-1.3l-.34-.2-3.82 1 1.02-3.72-.22-.36a9.27 9.27 0 01-1.43-4.96c0-5.14 4.18-9.32 9.33-9.32 2.49 0 4.83.97 6.59 2.73a9.25 9.25 0 012.73 6.59c0 5.15-4.18 9.33-9.32 9.33zm5.16-6.98c-.28-.14-1.65-.82-1.9-.91-.25-.09-.43-.14-.61.14-.18.28-.7.91-.86 1.1-.16.18-.32.21-.6.07-.28-.14-1.17-.43-2.23-1.36-.82-.73-1.37-1.63-1.53-1.91-.16-.28-.02-.43.12-.57.12-.12.28-.32.42-.48.14-.16.18-.28.28-.46.09-.18.05-.34-.02-.48-.07-.14-.61-1.48-.84-2.03-.22-.53-.45-.46-.61-.47h-.52c-.18 0-.48.07-.73.34-.25.28-.96.94-.96 2.3s.98 2.67 1.11 2.85c.14.18 1.92 2.94 4.65 4.12.65.28 1.16.45 1.56.58.65.21 1.25.18 1.72.11.53-.08 1.65-.67 1.88-1.32.23-.65.23-1.2.16-1.32-.07-.12-.25-.18-.53-.32z"/>
        </svg>
    </div>
</a>

</div>


<script>
  const menuBtn = document.getElementById('menuBtn');
  const mobileMenu = document.getElementById('mobileMenu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const track = document.getElementById("marqueeTrack");
    const original = track.children[0];

    // 🔥 Clone enough times to exceed screen width
    const minWidth = window.innerWidth * 2;
    while (track.scrollWidth < minWidth) {
        track.appendChild(original.cloneNode(true));
    }

    let position = 0;
    let speed = 0.6;

    function animate() {
        position -= speed;

        // 🔥 seamless loop (no jump)
        if (Math.abs(position) >= original.offsetWidth) {
            position += original.offsetWidth;
        }

        track.style.transform = `translateX(${position}px)`;
        requestAnimationFrame(animate);
    }

    // Pause on hover
    track.addEventListener("mouseenter", () => speed = 0);
    track.addEventListener("mouseleave", () => speed = 0.6);

    animate();
});
</script>