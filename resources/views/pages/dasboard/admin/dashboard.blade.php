@extends('layouts.admin')
@section('title', 'Admin Dashboard - Anandham Mindcare')
@section('content')
<div class="pt-28 px-8 pb-12 space-y-12">
<!-- Hero Stats / Platform Health (Bento Style) -->
<section>
<div class="grid grid-cols-12 gap-6">
<div class="col-span-12 lg:col-span-8 bg-gradient-to-br from-primary to-primary-container p-8 rounded-xl text-white relative overflow-hidden editorial-shadow">
<div class="relative z-10 flex flex-col h-full justify-between">
<div>
<h2 class="font-headline text-3xl mb-2">Platform Integrity Overview</h2>
<p class="text-on-primary-container font-light max-w-md">Real-time health monitoring of course engagement, payment flow, and academic credentials.</p>
</div>
<div class="grid grid-cols-3 gap-8 mt-12">
<div>
<p class="text-xs uppercase tracking-widest text-on-primary-container mb-1">Active Students</p>
<p class="text-4xl font-headline italic">1,284</p>
<span class="text-[10px] text-secondary-fixed">+12% from last month</span>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-on-primary-container mb-1">Course Capacity</p>
<p class="text-4xl font-headline italic">94.2%</p>
<span class="text-[10px] text-secondary-fixed">Optimal threshold</span>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-on-primary-container mb-1">Rev. Health</p>
<p class="text-4xl font-headline italic">Excellent</p>
<span class="text-[10px] text-secondary-fixed">Zero latency in processing</span>
</div>
</div>
</div>
<div class="absolute -right-20 -bottom-20 opacity-10">
<span class="material-symbols-outlined text-[300px]" style="font-variation-settings: 'FILL' 1;">health_and_safety</span>
</div>
</div>
<div class="col-span-12 lg:col-span-4 bg-surface-container-lowest p-8 rounded-xl ghost-border editorial-shadow flex flex-col justify-between">
<div class="flex items-start justify-between">
<h3 class="font-headline text-xl text-primary">Pending Actions</h3>
<span class="bg-error-container text-on-error-container px-2 py-1 text-[10px] font-bold rounded">URGENT</span>
</div>
<div class="space-y-4 mt-6">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-secondary">payments</span>
<div>
<p class="text-sm font-semibold">14 Payment Approvals</p>
<p class="text-xs text-on-surface-variant">Fees awaiting verification</p>
</div>
</div>
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-secondary">assignment_ind</span>
<div>
<p class="text-sm font-semibold">28 Access Requests</p>
<p class="text-xs text-on-surface-variant">Unassigned course groups</p>
</div>
</div>
</div>
<button class="mt-8 w-full py-3 bg-secondary text-on-secondary font-label font-semibold rounded-lg hover:bg-on-secondary-container transition-all text-sm">Review Task List</button>
</div>
</div>
</section>
<!-- Users Section & Data Table -->
<section id="users-section">
<div class="flex items-end justify-between mb-8 border-l-4 border-secondary pl-6">
<div>
<h2 class="font-headline text-3xl text-primary">User Directory</h2>
<p class="text-on-surface-variant text-sm mt-1 italic">Verified academic and clinical community members</p>
</div>
<div class="flex gap-4">
<button class="flex items-center gap-2 px-4 py-2 text-sm font-label font-medium border border-outline-variant rounded-lg hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined text-base">filter_list</span> Filter
                        </button>
<button class="flex items-center gap-2 px-4 py-2 text-sm font-label font-medium bg-primary text-white rounded-lg hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined text-base">person_add</span> Add New User
                        </button>
</div>
</div>
<div class="bg-surface-container-lowest rounded-xl ghost-border editorial-shadow overflow-hidden">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant/30">
<th class="px-8 py-4 font-headline text-primary font-semibold text-sm">Member Identity</th>
<th class="px-6 py-4 font-headline text-primary font-semibold text-sm">Role</th>
<th class="px-6 py-4 font-headline text-primary font-semibold text-sm">Status</th>
<th class="px-6 py-4 font-headline text-primary font-semibold text-sm text-right">Activity</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container">
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-sm">JD</div>
<div>
<p class="text-sm font-semibold text-on-surface">Dr. Julianna Doe</p>
<p class="text-xs text-on-surface-variant">j.doe@mindcare.edu</p>
</div>
</div>
</td>
<td class="px-6 py-5">
<span class="px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant text-[10px] font-bold uppercase tracking-wider">Doctor</span>
</td>
<td class="px-6 py-5">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="text-xs font-label">Active</span>
</div>
</td>
<td class="px-6 py-5 text-right">
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-secondary-fixed text-secondary flex items-center justify-center font-bold text-sm">AS</div>
<div>
<p class="text-sm font-semibold text-on-surface">Arjun Singh</p>
<p class="text-xs text-on-surface-variant">arjun.s@outlook.com</p>
</div>
</div>
</td>
<td class="px-6 py-5">
<span class="px-3 py-1 rounded-full bg-surface-variant text-on-surface-variant text-[10px] font-bold uppercase tracking-wider">Professional</span>
</td>
<td class="px-6 py-5">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="text-xs font-label">Active</span>
</div>
</td>
<td class="px-6 py-5 text-right">
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-tertiary-container text-tertiary-fixed flex items-center justify-center font-bold text-sm">MC</div>
<div>
<p class="text-sm font-semibold text-on-surface">Maya Chen</p>
<p class="text-xs text-on-surface-variant">maya.chen@university.edu</p>
</div>
</div>
</td>
<td class="px-6 py-5">
<span class="px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-[10px] font-bold uppercase tracking-wider">Student</span>
</td>
<td class="px-6 py-5">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-orange-400"></div>
<span class="text-xs font-label">On Leave</span>
</div>
</td>
<td class="px-6 py-5 text-right">
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</section>
<!-- Grid: Course Management & Attendance -->
<div class="grid grid-cols-12 gap-10">
<!-- Course Management -->
<section class="col-span-12 xl:col-span-7 space-y-6">
<div class="flex items-center justify-between">
<h3 class="font-headline text-2xl text-primary">Academic Curriculum</h3>
<button class="text-secondary text-sm font-semibold underline underline-offset-4 hover:text-on-secondary-container">Add Course</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="p-6 bg-surface-container-lowest rounded-xl ghost-border editorial-shadow group hover:border-secondary transition-all">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary text-3xl">psychology</span>
<div class="flex gap-2">
<button class="p-2 text-on-surface-variant hover:text-primary"><span class="material-symbols-outlined text-lg">edit</span></button>
<button class="p-2 text-on-surface-variant hover:text-error"><span class="material-symbols-outlined text-lg">delete</span></button>
</div>
</div>
<h4 class="font-headline text-lg text-primary">Cognitive Behavioral Foundations</h4>
<p class="text-xs text-on-surface-variant mt-2 line-clamp-2">An introductory course on CBT practices for modern therapeutic environments.</p>
<div class="mt-6 pt-4 border-t border-surface-container flex justify-between items-center">
<span class="text-[10px] font-bold text-secondary uppercase tracking-widest">Level 101</span>
<span class="text-[10px] font-label text-on-surface-variant">Modified 2d ago</span>
</div>
</div>
<div class="p-6 bg-surface-container-lowest rounded-xl ghost-border editorial-shadow group hover:border-secondary transition-all">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary text-3xl">mindfulness</span>
<div class="flex gap-2">
<button class="p-2 text-on-surface-variant hover:text-primary"><span class="material-symbols-outlined text-lg">edit</span></button>
<button class="p-2 text-on-surface-variant hover:text-error"><span class="material-symbols-outlined text-lg">delete</span></button>
</div>
</div>
<h4 class="font-headline text-lg text-primary">Restorative Mindfulness Lab</h4>
<p class="text-xs text-on-surface-variant mt-2 line-clamp-2">Practical sessions focusing on clinical mindfulness and stress reduction techniques.</p>
<div class="mt-6 pt-4 border-t border-surface-container flex justify-between items-center">
<span class="text-[10px] font-bold text-secondary uppercase tracking-widest">Level 305</span>
<span class="text-[10px] font-label text-on-surface-variant">Modified 5h ago</span>
</div>
</div>
</div>
</section>
<!-- Attendance Tracking -->
<section class="col-span-12 xl:col-span-5 space-y-6">
<h3 class="font-headline text-2xl text-primary">Attendance Insights</h3>
<div class="bg-primary p-8 rounded-xl editorial-shadow text-white h-full relative overflow-hidden">
<div class="relative z-10">
<div class="space-y-6">
<div class="flex items-center justify-between">
<div>
<p class="text-sm font-headline italic">CBT Foundations</p>
<p class="text-[10px] text-on-primary-container">42 Attendees today</p>
</div>
<div class="w-16 h-1 bg-white/20 rounded-full overflow-hidden">
<div class="w-4/5 h-full bg-secondary"></div>
</div>
</div>
<div class="flex items-center justify-between">
<div>
<p class="text-sm font-headline italic">Mindfulness Lab</p>
<p class="text-[10px] text-on-primary-container">18 Attendees today</p>
</div>
<div class="w-16 h-1 bg-white/20 rounded-full overflow-hidden">
<div class="w-1/3 h-full bg-secondary"></div>
</div>
</div>
<div class="flex items-center justify-between">
<div>
<p class="text-sm font-headline italic">Advanced Diagnostics</p>
<p class="text-[10px] text-on-primary-container">25 Attendees today</p>
</div>
<div class="w-16 h-1 bg-white/20 rounded-full overflow-hidden">
<div class="w-1/2 h-full bg-secondary"></div>
</div>
</div>
</div>
</div>
<div class="mt-12 pt-8 border-t border-white/10 flex justify-between items-end">
<div>
<p class="text-xs text-on-primary-container uppercase tracking-widest">Avg Daily Rate</p>
<p class="text-3xl font-headline">88%</p>
</div>
<span class="material-symbols-outlined text-secondary opacity-50">analytics</span>
</div>
</div>
</section>
</div>
<!-- Footer Grid: Payment Approvals & Grant Access -->
<div class="grid grid-cols-12 gap-10">
<!-- Payment Approvals -->
<section class="col-span-12 lg:col-span-6 space-y-6">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">account_balance_wallet</span>
<h3 class="font-headline text-2xl text-primary">Payment Verifications</h3>
</div>
<div class="space-y-3">
<div class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-lg ghost-border">
<div class="flex items-center gap-4">
<div class="w-2 h-10 bg-secondary-fixed rounded-full"></div>
<div>
<p class="text-sm font-semibold">Liam O'Conner</p>
<p class="text-xs text-on-surface-variant">CBT Module 2 • $149.00</p>
</div>
</div>
<div class="flex gap-2">
<button class="px-3 py-1 text-xs font-bold text-on-secondary-container bg-secondary-fixed rounded">APPROVE</button>
<button class="p-1 text-on-surface-variant hover:text-error"><span class="material-symbols-outlined text-sm">close</span></button>
</div>
</div>
<div class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-lg ghost-border">
<div class="flex items-center gap-4">
<div class="w-2 h-10 bg-secondary-fixed rounded-full"></div>
<div>
<p class="text-sm font-semibold">Sarah Jenkins</p>
<p class="text-xs text-on-surface-variant">Mindfulness Lab • $299.00</p>
</div>
</div>
<div class="flex gap-2">
<button class="px-3 py-1 text-xs font-bold text-on-secondary-container bg-secondary-fixed rounded">APPROVE</button>
<button class="p-1 text-on-surface-variant hover:text-error"><span class="material-symbols-outlined text-sm">close</span></button>
</div>
</div>
</div>
</section>
<!-- Grant Access (Functional Component) -->
<section class="col-span-12 lg:col-span-6">
<div class="bg-surface-container-high p-8 rounded-xl ghost-border relative overflow-hidden h-full">
<h3 class="font-headline text-2xl text-primary mb-6">Bulk Course Assignment</h3>
<div class="space-y-4">
<div>
<label class="text-[10px] font-bold uppercase tracking-widest text-primary block mb-2">Target Group</label>
<select class="w-full bg-surface-container-lowest border-none rounded-lg text-sm font-label focus:ring-secondary py-3">
<option>Select Student Year/Cohort</option>
<option>Third Year Psychology</option>
<option>Professional Trainees - 2024</option>
<option>Doctorate Research Group</option>
</select>
</div>
<div>
<label class="text-[10px] font-bold uppercase tracking-widest text-primary block mb-2">Access Level</label>
<select class="w-full bg-surface-container-lowest border-none rounded-lg text-sm font-label focus:ring-secondary py-3">
<option>Select Course Content</option>
<option>Full Curriculum - Behavioral Sciences</option>
<option>Clinical Practice Only</option>
<option>Reading Materials Only</option>
</select>
</div>
<button class="w-full mt-4 py-3 bg-primary text-white font-label font-semibold rounded-lg shadow-sm hover:opacity-95 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">key</span> Grant Access
                            </button>
</div>
<div class="absolute -right-4 -top-4 opacity-5 pointer-events-none">
<span class="material-symbols-outlined text-[120px]">verified_user</span>
</div>
</div>
</section>
</div>
<!-- Perspective Quote (Design System Signature) -->
<section class="py-12 border-t border-outline-variant/20">
<div class="max-w-4xl mx-auto text-center px-6 py-10 bg-surface-container-lowest rounded-xl ghost-border relative">
<div class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-16 bg-secondary"></div>
<p class="font-headline text-2xl text-primary italic leading-relaxed">
                        "The intersection of clinical rigorousness and compassionate administration is where true academic sanctuary is built."
                    </p>
<p class="mt-4 text-xs font-label uppercase tracking-widest text-on-surface-variant">— Institutional Mandate, Anandham Mindcare</p>
</div>
</section>
</div>
@endsection
