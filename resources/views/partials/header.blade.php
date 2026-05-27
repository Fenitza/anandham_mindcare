<style>
/* =========================================================
   BACKGROUND ANIMATION
========================================================= */
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

/* =========================================================
   STICKER BADGE
========================================================= */
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
    animation: popSoft 2.5s ease-in-out infinite;
}

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

@keyframes stickerGlow {
    0% { background-position: 0% 50%; }
    100% { background-position: 200% 50%; }
}

@keyframes popSoft {
    0%,100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.08);
    }
}

/* =========================================================
   WHATSAPP PULSE
========================================================= */
.whatsapp-pulse:hover {
    animation: pulse 1.5s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(34,197,94,0.6);
    }

    70% {
        box-shadow: 0 0 0 10px rgba(34,197,94,0);
    }

    100% {
        box-shadow: 0 0 0 0 rgba(34,197,94,0);
    }
}

/* =========================================================
   MARQUEE
========================================================= */
.marquee-wrapper {
    overflow: hidden;
    width: 100%;
    position: relative;
}

.marquee-track {
    display: flex;
    width: max-content;
    will-change: transform;
}

.marquee-content {
    display: flex;
    align-items: center;
    flex-shrink: 0;
}
</style>

<!-- ======================================================
     NAVBAR
======================================================= -->
<nav class="bg-white/90 backdrop-blur-md sticky top-0 z-50 shadow-sm border-b border-outline-variant/10">

    <div class="max-w-7xl mx-auto px-4 md:px-8 h-20 flex items-center">

        <!-- LOGO -->
        <!-- LEFT: LOGO -->
    <a href="{{ route('hospital') }}" class="flex items-center gap-3">
      <img 
        src="{{ asset('assets/logo/academy_logo.jpeg') }}"
        class="w-16 md:w-20 h-16 md:h-20 object-contain rounded-xl bg-white p-1 shadow-md"
      />
      <div class="text-base md:text-xl font-serif italic text-primary leading-tight">
        Anandham Mindcare Foundation

      </div>
    </a>

        <!-- RIGHT -->
        <div class="ml-auto flex items-center gap-6">

            <!-- DESKTOP MENU -->
            <div class="hidden lg:flex items-center gap-6">

                <a href="{{ route('about-us') }}" class="hover:text-primary transition">
                    About
                </a>

                <a href="{{ route('services') }}" class="hover:text-primary transition">
                    Services
                </a>

                <a href="{{ route('gallery') }}" class="hover:text-primary transition">
                    Gallery
                </a>

                <a href="{{ route('blogs') }}" class="hover:text-primary transition">
                    Blogs
                </a>

                <a href="{{ route('courses.list') }}" class="hover:text-primary transition">
                    Courses
                </a>

                <a href="{{ route('contact-us') }}" class="hover:text-primary transition">
                    Contact
                </a>

            </div>

            <!-- SIGN IN -->
            @php
                $isAdmin = Auth::guard('admin')->check();
                $isUser = Auth::guard('web')->check();
            @endphp

            @if($isAdmin || $isUser)

                <a href="{{ $isAdmin ? route('admin.dashboard') : route('user.dashboard') }}"
                   class="hidden sm:flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg text-sm">

                    <span class="material-symbols-outlined text-lg">
                        account_circle
                    </span>

                    My Account

                </a>

            @else

                <a href="{{ route('signin') }}"
                   class="hidden sm:flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg text-sm">

                    <span class="material-symbols-outlined text-lg">
                        login
                    </span>

                    Sign In

                </a>

            @endif

            <!-- MOBILE BUTTON -->
            <button id="menuBtn"
                    class="lg:hidden flex items-center justify-center w-10 h-10 rounded-lg border">

                <span class="material-symbols-outlined">
                    menu
                </span>

            </button>

        </div>

    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu"
         class="hidden lg:hidden px-6 pb-6 bg-white">

        <div class="flex flex-col gap-4 pt-4 border-t">

            <a href="{{ route('hospital') }}">Home</a>

            <a href="{{ route('about-us') }}">About</a>

            <a href="{{ route('services') }}">Services</a>

            <a href="{{ route('courses.list') }}">Courses</a>

            <a href="{{ route('contact-us') }}">Contact</a>

            <a href="{{ route('signin') }}"
               class="mt-4 bg-primary text-white py-2 rounded-lg text-center">

                Sign In

            </a>

        </div>

    </div>

</nav>

<!-- ======================================================
     CONTINUOUS MARQUEE
======================================================= -->
<div class="sticky top-20 z-40 overflow-hidden border-b border-outline-variant/10 w-full px-8">

    <!-- Animated Background -->
    <div class="absolute inset-0 animate-gradient-x opacity-90"></div>

    <div class="relative overflow-hidden w-full">

        <div class="marquee-wrapper">

            <div id="marqueeTrack" class="marquee-track py-2">

                <!-- ORIGINAL -->
                <div class="marquee-content">

                    @foreach($upcomingCourses as $course)

                        <a href="{{ route('courses.detail', $course->id) }}"
                           class="flex items-center px-6 text-sm font-medium text-gray-800 hover:underline whitespace-nowrap">

                            <span class="badge-sticker mr-2">
                                New
                            </span>

                            <span>
                                {{ $course->title }}
                            </span>

                        </a>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ======================================================
     FLOATING ACTIONS
======================================================= -->
<div class="fixed right-4 top-1/2 -translate-y-1/2 z-50 flex flex-col gap-3">

    <!-- BOOK -->
    <a href="{{ auth()->check() ? route('user.appointments.list') : route('appointment.create.guest') }}"
       class="group flex items-center justify-end">

        <span class="mr-2 px-3 py-1 text-sm rounded-md bg-primary text-white opacity-0 group-hover:opacity-100 transition whitespace-nowrap shadow">
            Book Appointment
        </span>

        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-primary text-primary shadow hover:bg-primary hover:text-white transition">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-5 w-5"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>

            </svg>

        </div>

    </a>

    <!-- COURSES -->
    <a href="{{ route('courses.list') }}"
       class="group flex items-center justify-end">

        <span class="mr-2 px-3 py-1 text-sm rounded-md bg-primary text-white opacity-0 group-hover:opacity-100 transition whitespace-nowrap shadow">
            Enroll Courses
        </span>

        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-primary text-primary shadow hover:bg-primary hover:text-white transition">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-5 w-5"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253"/>

            </svg>

        </div>

    </a>

    <!-- WHATSAPP -->
    <a href="https://wa.me/91XXXXXXXXXX"
       target="_blank"
       class="group flex items-center justify-end">

        <span class="mr-2 px-3 py-1 text-sm rounded-md bg-green-600 text-white opacity-0 group-hover:opacity-100 transition whitespace-nowrap shadow">
            Chat on WhatsApp
        </span>

        <div class="whatsapp-pulse w-12 h-12 flex items-center justify-center rounded-full bg-white border border-green-600 text-green-600 shadow hover:bg-green-600 hover:text-white transition">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-5 w-5"
                 viewBox="0 0 24 24"
                 fill="currentColor">

                <path d="M20.52 3.48A11.88 11.88 0 0012.05 0C5.52 0 .2 5.32.2 11.85c0 2.09.55 4.12 1.6 5.9L0 24l6.45-1.68a11.8 11.8 0 005.6 1.43h.01c6.53 0 11.85-5.32 11.85-11.85 0-3.16-1.23-6.13-3.39-8.42z"/>

            </svg>

        </div>

    </a>

</div>

<!-- ======================================================
     SCRIPTS
======================================================= -->
<script>
/* MOBILE MENU */
const menuBtn = document.getElementById('menuBtn');
const mobileMenu = document.getElementById('mobileMenu');

menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});
</script>

<script>
/* =========================================================
   PERFECT CONTINUOUS MARQUEE
========================================================= */
document.addEventListener("DOMContentLoaded", function () {

    const track = document.getElementById("marqueeTrack");

    if (!track) return;

    const original = track.children[0];

    /* Clone MANY TIMES for smooth infinite scroll */
    for (let i = 0; i < 8; i++) {
        track.appendChild(original.cloneNode(true));
    }

    let speed = 0.7;
    let currentX = 0;
    let isPaused = false;

    function animate() {

        if (!isPaused) {

            currentX -= speed;

            /* Seamless reset */
            if (Math.abs(currentX) >= original.offsetWidth) {
                currentX = 0;
            }

            track.style.transform = `translateX(${currentX}px)`;
        }

        requestAnimationFrame(animate);
    }

    track.addEventListener("mouseenter", () => {
        isPaused = true;
    });

    track.addEventListener("mouseleave", () => {
        isPaused = false;
    });

    animate();
});
</script>