<!-- 🔥 Overlay (mobile only) -->
<div id="sidebarOverlay"
     class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden"
     onclick="toggleSidebar()">
</div>

<!-- 🔥 Sidebar -->
<aside id="sidebar"
class="
fixed left-0 top-0 h-screen w-64 
bg-slate-50 flex flex-col py-8 z-50
transform -translate-x-full lg:translate-x-0
transition-transform duration-300 ease-in-out
">

    <!-- ❌ Close button (mobile only) -->
    <div class="px-6 mb-6 flex justify-between items-center lg:hidden">
        <span class="text-sm font-bold text-primary">Menu</span>
        <button onclick="toggleSidebar()">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>

    <!-- LOGO -->
    <div class="px-8 mb-10 hidden lg:block">
        <p class="text-xs tracking-widest uppercase text-slate-400 font-label">
            User Portal
        </p>
    </div>

    <!-- NAV -->
    <nav class="flex-1 space-y-1 overflow-y-auto">

        <!-- My Learning -->
        <a href="{{ route('user.dashboard') }}"
           class="flex items-center gap-4 py-3 pl-5 transition-all
           {{ request()->is('dashboard') ? 'text-blue-900 font-bold border-l-4 border-yellow-500 bg-slate-200' : 'text-slate-500 hover:bg-slate-200' }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-label">My Learning</span>
        </a>

        <!-- Course Enrollment -->
        <a href="{{ route('user.course.enrollments') }}"
           class="flex items-center gap-4 py-3 pl-5 transition-all
           {{ request()->routeIs('user.course.enrollments') ? 'text-blue-900 font-bold border-l-4 border-yellow-500 bg-slate-200' : 'text-slate-500 hover:bg-slate-200' }}">
            <span class="material-symbols-outlined">menu_book</span>
            <span class="font-label">Course Enrollment</span>
        </a>

        <!-- Appointments -->
        <a href="{{ route('user.appointments.list') }}"
           class="flex items-center gap-4 py-3 pl-5 transition-all
           {{ request()->routeIs('user.appointments.list') ? 'text-blue-900 font-bold border-l-4 border-yellow-500 bg-slate-200' : 'text-slate-500 hover:bg-slate-200' }}">
            <span class="material-symbols-outlined">event</span>
            <span class="font-label">My Appointments</span>
        </a>

        <!-- Settings -->
        <a href="{{ route('settings') }}"
           class="flex items-center gap-4 py-3 pl-5 transition-all mt-6
           {{ request()->is('settings*') ? 'text-blue-900 font-bold border-l-4 border-yellow-500 bg-slate-200' : 'text-slate-500 hover:bg-slate-200' }}">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-label">Settings</span>
        </a>

    </nav>

    <!-- USER PROFILE -->
    <div class="px-6 mt-6 pt-6 border-t border-slate-200">
        <div class="flex items-center gap-3">

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

<script>
    function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');

    sidebar.classList.toggle('-translate-x-full');
    overlay.classList.toggle('hidden');
}
</script>