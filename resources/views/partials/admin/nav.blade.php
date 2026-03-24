<aside class="admin-sidebar fixed left-0 top-0 h-screen w-64 py-6 z-50">
    <div class="px-6 mb-10">
        <h1 class="text-xl font-bold font-headline text-blue-900">Anandham Mindcare</h1>
        <p class="text-xs tracking-wide font-label text-slate-500 mt-1 uppercase">Academic Administration</p>
    </div>
    <nav class="flex-1 space-y-1">
        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center px-6 py-3 font-semibold border-r-4 transition-all opacity-90 {{ Request::is('admin/dashboard') ? 'text-blue-900 border-yellow-700 bg-slate-200' : 'text-slate-600 hover:text-blue-900 hover:bg-slate-200/50 border-transparent' }}">
            <span class="material-symbols-outlined mr-3">dashboard</span>
            <span class="text-sm tracking-wide font-label">Dashboard</span>
        </a>
        <a href="{{ route('admin.users') }}"
           class="flex items-center px-6 py-3 font-semibold border-r-4 transition-all opacity-90 {{ Request::is('admin/users') ? 'text-blue-900 border-yellow-700 bg-slate-200' : 'text-slate-600 hover:text-blue-900 hover:bg-slate-200/50 border-transparent' }}">
            <span class="material-symbols-outlined mr-3">group</span>
            <span class="text-sm tracking-wide font-label">Users</span>
        </a>
        <a href="{{ route('admin.courses') }}"
           class="flex items-center px-6 py-3 font-semibold border-r-4 transition-all opacity-90 {{ Request::is('admin/courses') ? 'text-blue-900 border-yellow-700 bg-slate-200' : 'text-slate-600 hover:text-blue-900 hover:bg-slate-200/50 border-transparent' }}">
            <span class="material-symbols-outlined mr-3">school</span>
            <span class="text-sm tracking-wide font-label">Courses</span>
        </a>
        <a href="{{ route('admin.attendance') }}"
           class="flex items-center px-6 py-3 font-semibold border-r-4 transition-all opacity-90 {{ Request::is('admin/attendance') ? 'text-blue-900 border-yellow-700 bg-slate-200' : 'text-slate-600 hover:text-blue-900 hover:bg-slate-200/50 border-transparent' }}">
            <span class="material-symbols-outlined mr-3">calendar_today</span>
            <span class="text-sm tracking-wide font-label">Attendance</span>
        </a>
        <a href="{{ route('admin.payments') }}"
           class="flex items-center px-6 py-3 font-semibold border-r-4 transition-all opacity-90 {{ Request::is('admin/payments') ? 'text-blue-900 border-yellow-700 bg-slate-200' : 'text-slate-600 hover:text-blue-900 hover:bg-slate-200/50 border-transparent' }}">
            <span class="material-symbols-outlined mr-3">payments</span>
            <span class="text-sm tracking-wide font-label">Payments</span>
        </a>
    </nav>
    <div class="mt-auto px-6 space-y-1 border-t border-slate-200 pt-6">
        <a class="flex items-center py-2 text-slate-600 hover:text-blue-900 transition-colors" href="#">
            <span class="material-symbols-outlined mr-3">settings</span>
            <span class="text-sm tracking-wide font-label">Settings</span>
        </a>
        <a class="flex items-center py-2 text-slate-600 hover:text-blue-900 transition-colors" href="#">
            <span class="material-symbols-outlined mr-3">help</span>
            <span class="text-sm tracking-wide font-label">Support</span>
        </a>
        <div class="flex items-center mt-6 pt-6 gap-3">
            <img alt="Admin User Profile" class="w-10 h-10 rounded-full object-cover ghost-border" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZ8jcPiNgxc6wo8vRlX2_b2fTzJip_8G-Mv8Ti-QNX6SBxzAYeU5ozgo_HFBIlEhj8suPTuzeYrk3FW5ptBwyohTP2v-NXNiK1coGAlR5HYZGRgezc3wGiv3hqV_Gr2vkFYqUlhXjOFGSzwYqfenat6npOZb0G9fWk7REsBTsuSkaoA92i2mELW0OpGiCsaCh9Q5hekTkpnZ5eQNkloPQJCKkUTCEABliZSHOLOL1YvWCCdmF2-Sv15LfcdEZgAhs1ffCHC_aYfDiW" />
            <div class="overflow-hidden">
                <p class="text-sm font-semibold text-primary truncate">Admin User</p>
                <p class="text-xs text-on-surface-variant truncate">Principal Lead</p>
            </div>
        </div>
    </div>
</aside>
