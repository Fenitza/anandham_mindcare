<!-- TopAppBar Implementation -->
<header class="fixed top-0 right-0 w-[calc(100%-16rem)] h-20 bg-white/80 dark:bg-slate-950/80 backdrop-blur-md flex justify-between items-center px-8 z-40 border-b border-slate-100/15 dark:border-slate-800/15 shadow-sm dark:shadow-none">
<div class="flex items-center gap-4 bg-surface-container-low px-4 py-2 rounded-lg w-96">
<span class="material-symbols-outlined text-outline" data-icon="search">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm w-full font-body" placeholder="Search curriculum or journals..." type="text"/>
</div>
<div class="flex items-center gap-6">
<span class="text-2xl font-serif italic text-blue-900 dark:text-blue-100 font-headline">Mindcare Academy</span>
<div class="flex items-center gap-4 border-l border-outline-variant/30 pl-6">
<button class="opacity-80 hover:opacity-100 transition-opacity text-primary">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<div class="relative inline-block">

    <!-- Account Button -->
    <button onclick="toggleDropdown()" 
        class="opacity-80 hover:opacity-100 transition-opacity text-primary focus:outline-none">
        
        <span class="material-symbols-outlined text-3xl">
            account_circle
        </span>

    </button>

    <!-- Dropdown -->
    <div id="profileDropdown" 
        class="hidden absolute right-0 mt-3 w-44 bg-white rounded-xl shadow-lg border border-slate-200 z-50">

        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Profile
        </a>

        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">
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
</div>
</header>