@extends('layouts.admin')
@section('title', 'Blogs - Anandham Mindcare')
@section('content')
<div class="pt-28 px-8 pb-12 space-y-12">
    @include('partials.alerts')
<!-- Filters Section -->
<div class="bg-surface-container-low rounded-xl p-6 mb-8 flex flex-wrap items-end gap-6 shadow-sm">
<div class="flex-1 min-w-[240px]">
<label class="block text-xs font-bold text-primary uppercase tracking-wider mb-2">Search Registry</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm" data-icon="search">search</span>
<input class="w-full bg-white border-none rounded-lg py-2.5 pl-10 pr-4 focus:ring-2 focus:ring-secondary/30 text-sm font-body outline-none transition-all" placeholder="Patient name or ID..." type="text"/>
</div>
</div>
<div class="w-48">
<label class="block text-xs font-bold text-primary uppercase tracking-wider mb-2">Department</label>
<select class="w-full bg-white border-none rounded-lg py-2.5 px-4 focus:ring-2 focus:ring-secondary/30 text-sm font-body appearance-none cursor-pointer">
<option>All Services</option>
<option>Child Care</option>
<option>Adult Counseling</option>
<option>Diagnostic Psychiatry</option>
</select>
</div>
<div class="w-48">
<label class="block text-xs font-bold text-primary uppercase tracking-wider mb-2">Date Horizon</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm" data-icon="calendar_today">calendar_today</span>
<input class="w-full bg-white border-none rounded-lg py-2.5 pl-10 pr-4 focus:ring-2 focus:ring-secondary/30 text-sm font-body outline-none" type="text" value="Next 7 Days"/>
</div>
</div>
<button class="bg-secondary text-on-secondary font-semibold py-2.5 px-8 rounded-lg hover:bg-on-secondary-fixed-variant transition-all duration-300 shadow-sm flex items-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="filter_list">filter_list</span>
                    Apply Filters
                </button>
</div>
<!-- Appointments Table Container -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden ghost-border shadow-sm">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low/50">
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body">Patient Name</th>
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body">Specialized Service</th>
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body">Consulting Physician</th>
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body">Date &amp; Time</th>
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body">Status</th>
<th class="px-6 py-5 text-xs font-bold text-primary uppercase tracking-widest font-body text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container">
<!-- Table Row 1 -->
<tr class="group hover:bg-surface-container-low transition-colors duration-200">
<td class="px-6 py-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary font-bold text-sm">ES</div>
<div>
<div class="font-semibold text-on-surface">Eleanor Shellstrop</div>
<div class="text-xs text-on-surface-variant">ID: #AM-4921</div>
</div>
</div>
</td>
<td class="px-6 py-6 font-body text-sm text-on-surface">Counseling &amp; Therapy</td>
<td class="px-6 py-6">
<div class="flex items-center gap-2">
<img alt="Dr. Aris Thorne" class="w-6 h-6 rounded-full" data-alt="portrait of a professional male doctor with glasses and a stethoscope in a clinical setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEd89R0XfBN3py_qf-u80Untp9_zYDYKqYnqC6u5-1NO3qSSv5OrIBO-5f5lB8YVqypw6ENebJjAegebW5X0OXKdM4pXYC4H-u7sNZSjL99uYK22gz7964bDl6BVM2kx5JvwAtgEFkR7DY0cN2TPMWS_JeYLh-JKN1SuiwfHVQnjk2zFRmnTc36moZ-GwG2nKR1_jZk9wVmeGr1lxxWz9PUjXU0Q7TRx9VmKLwb-0ah5KWQ-GSN7HjLaKnaOsqLKmpBEbazmkqww0x"/>
<span class="text-sm font-medium text-on-surface">Dr. Aris Thorne</span>
</div>
</td>
<td class="px-6 py-6">
<div class="text-sm font-semibold text-on-surface">Oct 24, 2023</div>
<div class="text-xs text-on-surface-variant">09:30 AM — 10:30 AM</div>
</td>
<td class="px-6 py-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                                    Scheduled
                                </span>
</td>
<td class="px-6 py-6 text-right">
<div class="flex justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-error transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="cancel">cancel</span>
</button>
</div>
</td>
</tr>
<!-- Table Row 2 -->
<tr class="group hover:bg-surface-container-low transition-colors duration-200">
<td class="px-6 py-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed font-bold text-sm">JM</div>
<div>
<div class="font-semibold text-on-surface">Julian Moore</div>
<div class="text-xs text-on-surface-variant">ID: #AM-5102</div>
</div>
</div>
</td>
<td class="px-6 py-6 font-body text-sm text-on-surface">Child Care Psychiatry</td>
<td class="px-6 py-6">
<div class="flex items-center gap-2">
<img alt="Dr. Sarah Jenkins" class="w-6 h-6 rounded-full" data-alt="close-up portrait of a friendly female pediatrician smiling in a warm clinic environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgsi3KqK0mwI4gxCj6TElJ18N9flVaORIwBkobeP2kLIvxB83aJXP03yP89iPkHYyhX3hQV01L30yBAjZFyD5ser7uH0ejlbTPXBOvT63BruyMxAPj-r5Fs8Ezhjb4qdgenEsoXyfmCyWwDAjiOHnQmjs1OLofaq_m7Cldf1-esII7UDCdbh2AR8YO-tJs2A99QzlDBIjzDICNGJoE34F4R-WfftvvK8UI0wRPhI473h-IFUf3_jQwpe2s6Ec7DoXnz6e9fn8Y47-5"/>
<span class="text-sm font-medium text-on-surface">Dr. Sarah Jenkins</span>
</div>
</td>
<td class="px-6 py-6">
<div class="text-sm font-semibold text-on-surface">Oct 24, 2023</div>
<div class="text-xs text-on-surface-variant">11:00 AM — 11:45 AM</div>
</td>
<td class="px-6 py-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-100 text-amber-800">
                                    Pending
                                </span>
</td>
<td class="px-6 py-6 text-right">
<div class="flex justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-error transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="cancel">cancel</span>
</button>
</div>
</td>
</tr>
<!-- Table Row 3 -->
<tr class="group hover:bg-surface-container-low transition-colors duration-200">
<td class="px-6 py-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed font-bold text-sm">KL</div>
<div>
<div class="font-semibold text-on-surface">Kaelen Lousia</div>
<div class="text-xs text-on-surface-variant">ID: #AM-3844</div>
</div>
</div>
</td>
<td class="px-6 py-6 font-body text-sm text-on-surface">Holistic Wellness</td>
<td class="px-6 py-6">
<div class="flex items-center gap-2">
<img alt="Dr. Aris Thorne" class="w-6 h-6 rounded-full" data-alt="confident professional male doctor standing in a hallway of a high-end medical clinic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpWod39uVwFVJq7juB0H2yvaN2PFIik2Mj5zZyOOW1pa7J5afctRKjeUoUTM-f-SgROQZONIEF9vfcFD0HGMKIk_e5-6F_33d7af7hO54NUL8s04gtRP8zT4xoQ17HYQyeBrByNNfRWyjI51sUIdVcW3T9Y9LfhxnbVDXGBmn2K2JtXHmRShJ46JEkAxPnVmAIGzFvdmvrl6UmSSW7os_sXCghCIX5GDvZg61QlU1qcmIEJ2th5vqkbXEAGFK1e7SSfVeHh7s7EuTl"/>
<span class="text-sm font-medium text-on-surface">Dr. Aris Thorne</span>
</div>
</td>
<td class="px-6 py-6">
<div class="text-sm font-semibold text-on-surface">Oct 23, 2023</div>
<div class="text-xs text-on-surface-variant">02:00 PM — 03:00 PM</div>
</td>
<td class="px-6 py-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-slate-100 text-slate-600">
                                    Completed
                                </span>
</td>
<td class="px-6 py-6 text-right">
<div class="flex justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-error transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="cancel">cancel</span>
</button>
</div>
</td>
</tr>
<!-- Table Row 4 -->
<tr class="group hover:bg-surface-container-low transition-colors duration-200">
<td class="px-6 py-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-error-container flex items-center justify-center text-error font-bold text-sm">TW</div>
<div>
<div class="font-semibold text-on-surface">Thomas Wright</div>
<div class="text-xs text-on-surface-variant">ID: #AM-2190</div>
</div>
</div>
</td>
<td class="px-6 py-6 font-body text-sm text-on-surface">Diagnostic Psychiatry</td>
<td class="px-6 py-6">
<div class="flex items-center gap-2">
<img alt="Dr. Samuel Lee" class="w-6 h-6 rounded-full" data-alt="close-up of an Asian male medical professional in a lab coat with a thoughtful expression" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDs9Y7BW_ozODb4rq-DSEFvQ7W8c3NeF1DQB87T-fySj5DptTuAx7dewX7hgWfuQqnl2ryzuQI84sFnclmkuKxJmzWaDFnd8lys5j-uQMPB66vkT6dAugAv9HHF0yW8Eql49bqu7vqANKP7fxFHGmOhRt8ML8Qro0qsB1lC4GRsp4v_DjFgMN4flFsxqMiHZr-81aBCXYAU03ful8xq6Qi2za2YEgSsUU0bkPYSuxwfsMPgdPvAvmCseH0K932Hm_l1dAcrye6mchGA"/>
<span class="text-sm font-medium text-on-surface">Dr. Samuel Lee</span>
</div>
</td>
<td class="px-6 py-6">
<div class="text-sm font-semibold text-on-surface">Oct 22, 2023</div>
<div class="text-xs text-on-surface-variant">04:30 PM — 05:15 PM</div>
</td>
<td class="px-6 py-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-red-100 text-red-800">
                                    Cancelled
                                </span>
</td>
<td class="px-6 py-6 text-right">
<div class="flex justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-error transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="cancel">cancel</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
<!-- Table Footer / Pagination -->
<div class="px-6 py-4 bg-surface-container-low/30 border-t border-surface-container flex items-center justify-between">
<span class="text-sm text-on-surface-variant">Showing <span class="font-bold text-primary">1-4</span> of 48 appointments</span>
<div class="flex gap-2">
<button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-slate-400 hover:bg-white transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="chevron_left">chevron_left</span>
</button>
<button class="w-8 h-8 rounded border border-primary bg-primary text-white flex items-center justify-center text-sm font-bold">1</button>
<button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-slate-600 hover:bg-white transition-colors text-sm">2</button>
<button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-slate-600 hover:bg-white transition-colors text-sm">3</button>
<button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-slate-400 hover:bg-white transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
@endsection