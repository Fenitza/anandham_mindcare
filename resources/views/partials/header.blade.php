<!-- Header -->
<nav class="bg-white/90 backdrop-blur-md sticky top-0 z-50 shadow-sm border-b border-outline-variant/10">
<div class="flex justify-between items-center max-w-7xl mx-auto px-6 md:px-12 h-20">
<div class="flex items-center gap-4">
<img 
  alt="Anandham Mindcare Logo"
  src="{{ asset('assets/logo/hosp_logo.jpeg') }}"
  class="w-16 md:w-20 h-16 md:h-20 object-contain rounded-xl bg-white/80 backdrop-blur-md p-2 shadow-lg border border-white/30"/>
<div class="text-xl md:text-2xl font-serif italic text-primary font-headline tracking-tight">Anandham Mindcare Foundation</div>
</div>
<div class="hidden lg:flex items-center gap-x-8">
<a class="text-primary font-bold border-b-2 border-secondary pb-1 text-sm tracking-wide transition-colors" href="#">About Us</a>
<a class="text-on-surface-variant font-medium text-sm tracking-wide hover:text-primary transition-colors" href="#">Services</a>
<a class="text-on-surface-variant font-medium text-sm tracking-wide hover:text-primary transition-colors" href="{{ route('courses') }}" >Courses</a>
<a class="text-on-surface-variant font-medium text-sm tracking-wide hover:text-primary transition-colors" href="#">Contact Us</a>
</div>
<button class="flex items-center gap-2 bg-primary text-white px-5 py-2 rounded-lg font-medium transition-all active:scale-95 hover:bg-opacity-90">
<span class="material-symbols-outlined text-lg">login</span>
<span class="text-sm tracking-wide">Sign In</span>
</button>
</div>
</nav> 