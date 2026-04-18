<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-screen w-64 bg-slate-50 dark:bg-slate-900 flex flex-col py-8 z-50">

    <!-- LOGO -->
    <div class="px-8 mb-12">
        <h1 class="text-xl font-serif font-bold text-blue-900 dark:text-blue-100 font-headline">
            Anandham Mindcare
        </h1>
        <p class="text-xs tracking-widest uppercase text-slate-400 mt-1 font-label">
            Academic Sanctuary
        </p>
    </div>

    <!-- NAV -->
    <nav class="flex-1 space-y-1">

        <!-- MY LEARNING -->
        <a href="#"
           class="flex items-center gap-4 py-3 pl-5 transition-all
           {{ request()->is('dashboard') ? 'text-blue-900 dark:text-blue-200 font-bold border-l-4 border-yellow-500 bg-slate-200 dark:bg-slate-800' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800' }}">
           
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-label">My Learning</span>
        </a>

        <!-- COURSE ENROLLMENT -->
        <a href="{{ route('user.course.enrollments') }}"
           class="flex items-center gap-4 py-3 pl-5 transition-all
           {{ request()->routeIs('user.course.enrollments') ? 'text-blue-900 dark:text-blue-200 font-bold border-l-4 border-yellow-500 bg-slate-200 dark:bg-slate-800' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800' }}">
           
            <span class="material-symbols-outlined">menu_book</span>
            <span class="font-label">Course Enrollment</span>
        </a>

        <!-- APPOINTMENTS -->
        <a href="{{ route('user.appointments.list') }}"
           class="flex items-center gap-4 py-3 pl-5 transition-all
           {{ request()->routeIs('user.appointments.list') ? 'text-blue-900 dark:text-blue-200 font-bold border-l-4 border-yellow-500 bg-slate-200 dark:bg-slate-800' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800' }}">
           
            <span class="material-symbols-outlined">event</span>
            <span class="font-label">My Appointments</span>
        </a>

        <!-- LIVE SESSIONS -->
        <a href="#"
           class="flex items-center gap-4 py-3 pl-5 transition-all
           {{ request()->is('live-sessions*') ? 'text-blue-900 dark:text-blue-200 font-bold border-l-4 border-yellow-500 bg-slate-200 dark:bg-slate-800' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800' }}">
           
            <span class="material-symbols-outlined">live_tv</span>
            <span class="font-label">Live Sessions</span>
        </a>

        <!-- CERTIFICATIONS -->
        <a href="#"
           class="flex items-center gap-4 py-3 pl-5 transition-all
           {{ request()->is('certifications*') ? 'text-blue-900 dark:text-blue-200 font-bold border-l-4 border-yellow-500 bg-slate-200 dark:bg-slate-800' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800' }}">
           
            <span class="material-symbols-outlined">workspace_premium</span>
            <span class="font-label">Certifications</span>
        </a>

        <!-- SETTINGS -->
        <a href="#"
           class="flex items-center gap-4 py-3 pl-5 transition-all mt-auto
           {{ request()->is('settings*') ? 'text-blue-900 dark:text-blue-200 font-bold border-l-4 border-yellow-500 bg-slate-200 dark:bg-slate-800' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800' }}">
           
            <span class="material-symbols-outlined">settings</span>
            <span class="font-label">Settings</span>
        </a>

    </nav>

    <!-- USER PROFILE -->
    <div class="px-8 mt-8 pt-8 border-t border-slate-200 dark:border-slate-800">
        <div class="flex items-center gap-3">

            <!-- Avatar -->
            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>

            <div>
                <p class="text-sm font-bold text-primary">
                    {{ auth()->user()->name }}
                </p>
                <p class="text-xs text-on-surface-variant">
                    {{ ucfirst(auth()->user()->role) }}
                </p>
            </div>

        </div>
    </div>

</aside>