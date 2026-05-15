<header class="
    fixed top-0 right-0 left-0 lg:left-64 
    h-16 sm:h-20 
    bg-white/80 backdrop-blur 
    flex justify-between items-center 
    px-4 sm:px-6 md:px-8 
    z-40 border-b border-slate-100 shadow-sm
">

    <!-- 🔹 Left Section -->
    <div class="flex items-center gap-3 sm:gap-4">

        <!-- ☰ Mobile Menu Button -->
        <button onclick="toggleSidebar()" class="lg:hidden text-primary">
            <span class="material-symbols-outlined text-2xl">menu</span>
        </button>

        <!-- Logo / Title -->
        <span class="text-lg sm:text-xl md:text-2xl font-serif italic text-blue-900 font-headline truncate">
            Anandham Mindcare Academy
        </span>

    </div>

    <!-- 🔹 Right Section -->
    <div class="flex items-center gap-3 sm:gap-4 md:gap-6">

        <!-- 🔔 Notifications -->
        <button class="opacity-80 hover:opacity-100 transition text-primary relative">
            <span class="material-symbols-outlined text-xl sm:text-2xl">
                notifications
            </span>

            <!-- Optional Badge -->
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
        </button>

        <!-- 👤 Profile -->
        <div class="relative">

            <!-- Button -->
            <button onclick="toggleDropdown()" 
                class="opacity-80 hover:opacity-100 transition text-primary focus:outline-none">
                
                <span class="material-symbols-outlined text-2xl sm:text-3xl">
                    account_circle
                </span>

            </button>

            <!-- Dropdown -->
            <div id="profileDropdown" 
                class="hidden absolute right-0 mt-2 w-44 bg-white rounded-xl shadow-lg border border-slate-200 z-50 overflow-hidden">

                <a href="{{ route('profile') }}" 
                   class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">
                    Profile
                </a>

                <a href="{{ route('settings') }}" 
                   class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">
                    Settings
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                        class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                        Logout
                    </button>
                </form>

            </div>

        </div>

    </div>

</header>