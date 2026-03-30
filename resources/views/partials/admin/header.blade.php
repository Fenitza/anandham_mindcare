<header class="admin-header fixed top-0 right-0 w-[calc(100%-16rem)] z-40 bg-white/80 backdrop-blur-md shadow-sm flex justify-between items-center px-8 h-20">
    <div class="flex items-center flex-1 max-w-xl">
        <div class="relative w-full">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
            <input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-xl focus:ring-2 focus:ring-secondary text-sm font-body" placeholder="Search administrative records..." type="text" />
        </div>
    </div>
    <div class="flex items-center gap-6 ml-8">
        <button class="text-slate-500 hover:text-yellow-700 transition-colors relative">
            <span class="material-symbols-outlined">notifications</span>
            <span class="absolute top-0 right-0 w-2 h-2 bg-secondary rounded-full border-2 border-white"></span>
        </button>
        <div class="relative flex items-center gap-3 pl-6 border-l border-slate-200">
    
            <span class="text-sm font-label font-medium text-primary">
                Administrative Portal
            </span>

            <!-- Profile Dropdown -->
            <div class="relative">
                <button onclick="toggleDropdown()" class="flex items-center focus:outline-none">
                    <span class="material-symbols-outlined text-primary text-3xl cursor-pointer">
                        account_circle
                    </span>
                </button>

                <!-- Dropdown Menu -->
                <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-44 bg-white rounded-xl shadow-lg border border-slate-200 z-50">
                    
                    <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">
                        Profile
                    </a>

                    <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">
                        Settings
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                            Logout
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</header>
