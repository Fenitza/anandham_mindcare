@extends('layouts.admin')
@section('title', 'Attendance Insights - Anandham Mindcare')
@section('content')

<div class="pt-28 px-8 pb-12 space-y-12">
    <section class="grid grid-cols-1 md:grid-cols-12 gap-6">
<!-- Main Stats Card -->
<div class="md:col-span-8 bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/15 flex flex-col justify-between">
<div class="flex justify-between items-start mb-8">
<div>
<p class="text-sm font-medium text-secondary tracking-wider uppercase">Institutional Performance</p>
<h3 class="text-4xl font-headline mt-2 text-primary">Attendance Insights</h3>
</div>
<div class="flex gap-2">
<span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed text-xs font-bold rounded-full">Weekly +4.2%</span>
</div>
</div>
<div class="grid grid-cols-3 gap-8">
<div class="space-y-2">
<p class="text-sm text-on-surface-variant">Average Daily Rate</p>
<p class="text-5xl font-headline text-primary">92<span class="text-2xl">%</span></p>
<div class="h-1 w-full bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-primary w-[92%]"></div>
</div>
</div>
<div class="space-y-2">
<p class="text-sm text-on-surface-variant">Active Courses</p>
<p class="text-5xl font-headline text-primary">14</p>
<p class="text-xs text-secondary-fixed-dim font-semibold italic">Clinical &amp; Theory</p>
</div>
<div class="space-y-2">
<p class="text-sm text-on-surface-variant">Capacity Util.</p>
<p class="text-5xl font-headline text-primary">78<span class="text-2xl">%</span></p>
<div class="h-1 w-full bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-secondary w-[78%]"></div>
</div>
</div>
</div>
</div>
<!-- Mini Chart Card -->
<div class="md:col-span-4 bg-primary text-white p-8 rounded-xl relative overflow-hidden group">
<div class="relative z-10 flex flex-col h-full justify-between">
<h4 class="text-xl font-headline italic opacity-90">"Restorative Care requires consistent presence."</h4>
<div class="mt-8">
<p class="text-xs font-medium uppercase tracking-widest opacity-60 mb-4">Daily Attendance Volatility</p>
<div class="flex items-end gap-1 h-24">
<div class="w-full bg-on-primary-container/30 h-[40%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container/40 h-[65%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container/60 h-[50%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container h-[90%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container/50 h-[70%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container/80 h-[85%] rounded-t-sm"></div>
<div class="w-full bg-on-primary-container h-[95%] rounded-t-sm"></div>
</div>
</div>
</div>
<div class="absolute -right-12 -top-12 w-48 h-48 bg-primary-container rounded-full mix-blend-multiply filter blur-3xl opacity-50 transition-all group-hover:scale-110"></div>
</div>
</section>
<!-- Calendar & Active Sessions -->
<section class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Left: Upcoming Sessions List -->
<div class="lg:col-span-7 space-y-6">
<div class="flex items-center justify-between">
<h3 class="text-2xl text-primary font-headline">Upcoming Clinical Sessions</h3>
<div class="flex items-center gap-2">
<button class="p-1 hover:bg-surface-container rounded-md"><span class="material-symbols-outlined">chevron_left</span></button>
<span class="text-sm font-medium">May 24, 2024</span>
<button class="p-1 hover:bg-surface-container rounded-md"><span class="material-symbols-outlined">chevron_right</span></button>
</div>
</div>
<div class="space-y-4">
<!-- Session Row -->
<div class="group bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/10 flex items-center justify-between hover:border-secondary transition-all">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined">psychology</span>
</div>
<div>
<h4 class="font-semibold text-on-surface">Cognitive Behavioral Therapy - Advanced</h4>
<p class="text-xs text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-xs">schedule</span> 09:00 AM - 11:30 AM • Hall B
                  </p>
</div>
</div>
<div class="flex items-center gap-8">
<div class="text-right">
<p class="text-xs text-on-surface-variant uppercase font-semibold">Registered</p>
<p class="text-lg font-headline text-primary">28 <span class="text-xs text-outline">/ 30</span></p>
</div>
<button class="px-5 py-2.5 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary-container transition-all">
                  Mark Attendance
                </button>
</div>
</div>
<!-- Session Row -->
<div class="group bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/10 flex items-center justify-between hover:border-secondary transition-all">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined">spa</span>
</div>
<div>
<h4 class="font-semibold text-on-surface">Mindfulness &amp; Stress Management</h4>
<p class="text-xs text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-xs">schedule</span> 01:00 PM - 02:30 PM • Zen Garden
                  </p>
</div>
</div>
<div class="flex items-center gap-8">
<div class="text-right">
<p class="text-xs text-on-surface-variant uppercase font-semibold">Registered</p>
<p class="text-lg font-headline text-primary">12 <span class="text-xs text-outline">/ 15</span></p>
</div>
<button class="px-5 py-2.5 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary-container transition-all">
                  Mark Attendance
                </button>
</div>
</div>
<!-- Session Row -->
<div class="group bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/10 flex items-center justify-between hover:border-secondary transition-all">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined">diversity_3</span>
</div>
<div>
<h4 class="font-semibold text-on-surface">Group Therapy: Trauma Recovery</h4>
<p class="text-xs text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-xs">schedule</span> 04:00 PM - 06:00 PM • Room 402
                  </p>
</div>
</div>
<div class="flex items-center gap-8">
<div class="text-right">
<p class="text-xs text-on-surface-variant uppercase font-semibold">Registered</p>
<p class="text-lg font-headline text-primary">08 <span class="text-xs text-outline">/ 12</span></p>
</div>
<button class="px-5 py-2.5 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary-container transition-all">
                  Mark Attendance
                </button>
</div>
</div>
</div>
</div>
<!-- Right: Calendar View -->
<div class="lg:col-span-5 bg-surface-container-low p-6 rounded-xl space-y-6">
<div class="flex items-center justify-between px-2">
<h4 class="font-headline text-xl text-primary">Academic Calendar</h4>
<span class="text-sm font-bold text-secondary">MAY 2024</span>
</div>
<div class="grid grid-cols-7 gap-1 text-center text-[10px] font-bold tracking-widest text-on-surface-variant opacity-50 uppercase">
<div>Su</div><div>Mo</div><div>Tu</div><div>We</div><div>Th</div><div>Fr</div><div>Sa</div>
</div>
<div class="grid grid-cols-7 gap-1 text-sm font-medium">
<!-- Simplified Calendar Mock -->
<div class="h-10 flex items-center justify-center text-outline-variant">28</div>
<div class="h-10 flex items-center justify-center text-outline-variant">29</div>
<div class="h-10 flex items-center justify-center text-outline-variant">30</div>
<div class="h-10 flex items-center justify-center">1</div>
<div class="h-10 flex items-center justify-center">2</div>
<div class="h-10 flex items-center justify-center">3</div>
<div class="h-10 flex items-center justify-center">4</div>
<div class="h-10 flex items-center justify-center">5</div>
<div class="h-10 flex items-center justify-center">6</div>
<div class="h-10 flex items-center justify-center">7</div>
<div class="h-10 flex items-center justify-center bg-white rounded-full shadow-sm text-primary ring-1 ring-primary/20">8</div>
<div class="h-10 flex items-center justify-center">9</div>
<div class="h-10 flex items-center justify-center">10</div>
<div class="h-10 flex items-center justify-center">11</div>
<div class="h-10 flex items-center justify-center">12</div>
<div class="h-10 flex items-center justify-center">13</div>
<div class="h-10 flex items-center justify-center">14</div>
<div class="h-10 flex items-center justify-center">15</div>
<div class="h-10 flex items-center justify-center relative after:content-[''] after:absolute after:bottom-1 after:w-1 after:h-1 after:bg-secondary after:rounded-full">16</div>
<div class="h-10 flex items-center justify-center">17</div>
<div class="h-10 flex items-center justify-center">18</div>
<div class="h-10 flex items-center justify-center">19</div>
<div class="h-10 flex items-center justify-center">20</div>
<div class="h-10 flex items-center justify-center">21</div>
<div class="h-10 flex items-center justify-center">22</div>
<div class="h-10 flex items-center justify-center bg-secondary text-white rounded-full">23</div>
<div class="h-10 flex items-center justify-center">24</div>
<div class="h-10 flex items-center justify-center">25</div>
</div>
<div class="mt-8 border-t border-outline-variant/20 pt-6">
<h5 class="text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-4">Course Attendance Rate</h5>
<div class="space-y-4">
<div class="flex items-center gap-4">
<span class="text-xs font-medium w-32 truncate">Psychopathology</span>
<div class="flex-1 h-1.5 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-secondary w-[96%]"></div>
</div>
<span class="text-xs font-bold text-primary">96%</span>
</div>
<div class="flex items-center gap-4">
<span class="text-xs font-medium w-32 truncate">Clinical Neurology</span>
<div class="flex-1 h-1.5 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-secondary w-[82%]"></div>
</div>
<span class="text-xs font-bold text-primary">82%</span>
</div>
<div class="flex items-center gap-4">
<span class="text-xs font-medium w-32 truncate">Ethics in Care</span>
<div class="flex-1 h-1.5 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-secondary w-[89%]"></div>
</div>
<span class="text-xs font-bold text-primary">89%</span>
</div>
</div>
</div>
</div>
</section>
<!-- Asymmetric Quote Section -->
<section class="max-w-4xl mx-auto py-12">
<div class="relative bg-surface-container-lowest p-12 border-l-4 border-secondary shadow-sm">
<span class="material-symbols-outlined absolute top-4 left-4 text-secondary-fixed opacity-30 text-5xl">format_quote</span>
<p class="text-2xl font-headline text-primary italic leading-relaxed">
            "At Anandham, every session is a stepping stone toward a more conscious society. Monitoring attendance isn't just about metrics; it's about honoring the commitment each student makes to the healing arts."
          </p>
<div class="mt-6 flex items-center gap-3">
<div class="w-10 h-[1px] bg-secondary"></div>
<p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Clinical Directorate Message</p>
</div>
</div>
</section>

</div>
@endsection
