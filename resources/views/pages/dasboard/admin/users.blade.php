@extends('layouts.admin')
@section('title', 'User Directory - Anandham Mindcare')
@section('content')

<div class="pt-28 px-8 pb-12 space-y-12">
<!-- Header & Stats Bento -->
<div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-12">
<div class="lg:col-span-2 flex flex-col justify-end">
<nav class="flex gap-2 text-xs text-slate-400 mb-2 uppercase tracking-widest font-semibold">
<span>Portal</span>
<span>/</span>
<span class="text-secondary">Administrative Oversight</span>
</nav>
<h2 class="text-4xl font-bold text-primary headline">Member Identity Registry</h2>
<p class="text-on-surface-variant mt-2 max-w-xl body">An exhaustive directory of medical professionals, students, and research faculty dedicated to clinical excellence.</p>
</div>
<div class="bg-surface-container-lowest p-6 rounded-xl ghost-border flex flex-col justify-between">
<div class="flex justify-between items-start">
<span class="text-sm font-medium text-slate-500">Active Practitioners</span>
<span class="material-symbols-outlined text-secondary" data-icon="clinical_notes">clinical_notes</span>
</div>
<div>
<span class="text-3xl font-bold text-primary">{{ $activeUsers }}</span>
<p class="text-xs text-green-600 mt-1 flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="trending_up">trending_up</span>
                        +4.2% this month
                    </p>
</div>
</div>
<div class="bg-surface-container-lowest p-6 rounded-xl ghost-border flex flex-col justify-between">
<div class="flex justify-between items-start">
<span class="text-sm font-medium text-slate-500">Pending Approvals</span>
<span class="material-symbols-outlined text-secondary" data-icon="hourglass_empty">hourglass_empty</span>
</div>
<div>
<span class="text-3xl font-bold text-primary">{{ $inactiveUsers }}</span>
<p class="text-xs text-slate-400 mt-1">Requiring immediate review</p>
</div>
</div>
</div>
<!-- Action Bar -->
<div class="flex flex-wrap items-center justify-between gap-4 mb-8">
<div class="flex items-center gap-3">
<a href="{{ route('admin.users.add') }}"
   class="bg-primary hover:bg-primary-container text-white px-6 py-2.5 rounded-lg flex items-center gap-2 transition-all font-medium text-sm">
    
    <span class="material-symbols-outlined text-lg">person_add</span>
    Add New User

</a>

<a href="{{ route('admin.users.tag.add') }}"
   class="bg-primary hover:bg-primary-container text-white px-6 py-2.5 rounded-lg flex items-center gap-2 transition-all font-medium text-sm">
    
    <span class="material-symbols-outlined text-lg">person_add</span>
    Add New User Tag

</a>

<a href="{{ route('admin.users.assign') }}"
   class="bg-primary hover:bg-primary-container text-white px-6 py-2.5 rounded-lg flex items-center gap-2 transition-all font-medium text-sm">
    
    <span class="material-symbols-outlined text-lg">school</span>
    Assign Courses

</a>

<a href="{{ route('admin.groups') }}"
   class="bg-primary hover:bg-primary-container text-white px-6 py-2.5 rounded-lg flex items-center gap-2 transition-all font-medium text-sm">
    
    <span class="material-symbols-outlined text-lg">group</span>
    Create Groups

</a>


<!-- <button class="border border-outline-variant/30 hover:bg-surface-container-low px-6 py-2.5 rounded-lg flex items-center gap-2 transition-all font-medium text-sm text-on-surface-variant">
<span class="material-symbols-outlined text-lg" data-icon="filter_list">filter_list</span>
                    Filter View
                </button> -->
<!-- <button class="border border-outline-variant/30 hover:bg-surface-container-low px-4 py-2.5 rounded-lg flex items-center gap-2 transition-all font-medium text-sm text-on-surface-variant">
<span class="material-symbols-outlined text-lg" data-icon="file_download">file_download</span>
                    Export
                </button> -->
</div>
<div class="flex items-center gap-2 bg-surface-container-low p-1 rounded-lg">
<button class="px-4 py-1.5 rounded-md bg-white shadow-sm text-sm font-medium text-primary">All Users</button>
<button class="px-4 py-1.5 rounded-md text-sm font-medium text-slate-500 hover:text-primary">Doctors</button>
<button class="px-4 py-1.5 rounded-md text-sm font-medium text-slate-500 hover:text-primary">Students</button>
</div>
</div>
<!-- Data Table Section -->
<div class="bg-surface-container-lowest rounded-xl ghost-border overflow-hidden">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low/50">
<th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500 border-b border-outline-variant/10">Member Identity</th>
<th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500 border-b border-outline-variant/10">Role</th>
<th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500 border-b border-outline-variant/10">Status</th>
<th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500 border-b border-outline-variant/10">Last Activity</th>
<th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500 border-b border-outline-variant/10 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10">

@forelse($users as $user)

<tr class="group hover:bg-surface-container-low/30 transition-colors">

    <!-- USER INFO -->
    <td class="px-6 py-5">
        <div class="flex items-center gap-4">

            <!-- AVATAR -->
            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>

            <div>
                <p class="font-bold text-primary text-lg">{{ $user->name }}</p>
                <p class="text-xs text-slate-400 font-mono">ID: AM-{{ $user->id }}</p>
                <p class="text-xs text-slate-500">{{ $user->email }}</p>
            </div>

        </div>
    </td>

    <!-- ROLE -->
    <td class="px-6 py-5">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold
            @if($user->role == 'doctor') bg-blue-50 text-blue-700
            @elseif($user->role == 'student') bg-amber-50 text-amber-700
            @else bg-slate-100 text-slate-700
            @endif
        ">
            <span class="material-symbols-outlined text-sm">
                @if($user->role == 'doctor') medical_services
                @elseif($user->role == 'student') school
                @else biotech
                @endif
            </span>

            {{ ucfirst($user->role) }}
        </span>
    </td>

    <!-- STATUS -->
    <td class="px-6 py-5">
        @if($user->status == 1)
            <span class="inline-flex items-center gap-1 text-green-600 text-xs font-bold uppercase">
                <span class="w-2 h-2 rounded-full bg-green-500"></span>
                Active
            </span>
        @else
            <span class="inline-flex items-center gap-1 text-red-600 text-xs font-bold uppercase">
                <span class="w-2 h-2 rounded-full bg-red-500"></span>
                Inactive
            </span>
        @endif
    </td>

    
    <!-- LAST ACTIVITY -->
    <td class="px-6 py-5">
        <div class="flex flex-col">
            
            <!-- Time -->
            <p class="text-sm text-primary font-medium">
        {{ $user->last_activity 
            ? $user->last_activity->timezone('Asia/Kolkata')->format('d M Y, h:i A') 
            : 'No activity' 
        }}
    </p>

    <p class="text-xs text-slate-400">
        {{ $user->last_activity 
            ? $user->last_activity->timezone('Asia/Kolkata')->diffForHumans() 
            : '' 
        }}
    </p>
        <!-- Context -->
        <p class="text-[10px] text-secondary mt-1 italic">
            {{ $user->specialization ?? 'General Practice' }}
        </p>

    </div>
</td>

<!-- ACTIONS -->
<td class="px-6 py-5 text-right">
    <div class="flex justify-end items-center gap-2 opacity-0 group-hover:opacity-100 transition-all duration-200">

        <!-- VIEW -->
        
        <a href="{{ route('admin.users.show', $user->id) }}"
           class="p-2 rounded-lg bg-surface-container-low hover:bg-primary/10 text-slate-500 hover:text-primary transition"
           title="View Profile">
            <span class="material-symbols-outlined text-lg">visibility</span>
        </a>

        <!-- EDIT -->
        <a href="{{ route('admin.users.edit', $user->id) }}"
           class="p-2 rounded-lg bg-surface-container-low hover:bg-secondary/10 text-slate-500 hover:text-secondary transition"
           title="Edit User">
            <span class="material-symbols-outlined text-lg">edit</span>
        </a>

        <!-- STATUS TOGGLE -->
        <form action="{{ route('admin.users.toggle', $user->id) }}" method="POST">
            @csrf
            <button 
                class="p-2 rounded-lg 
                {{ $user->status 
                    ? 'bg-red-50 hover:bg-red-100 text-red-600' 
                    : 'bg-green-50 hover:bg-green-100 text-green-600' 
                }} transition"
                title="{{ $user->status ? 'Deactivate User' : 'Activate User' }}">
                
                <span class="material-symbols-outlined text-lg">
                    {{ $user->status ? 'person_off' : 'person' }}
                </span>

            </button>
        </form>

    </div>
</td>

   

</tr>

@empty

<tr>
    <td colspan="5" class="text-center py-10 text-slate-400">
        No users found
    </td>
</tr>

@endforelse

</tbody>
</table>
<div class="px-6 py-4">
    {{ $users->links() }}
</div>

<!-- <div class="px-6 py-4 bg-surface-container-low/30 border-t border-outline-variant/10 flex justify-between items-center">
<p class="text-xs text-slate-500 font-medium">Showing <span class="text-on-surface">1-4</span> of <span class="text-on-surface">1,284</span> academic members</p>
<div class="flex gap-2">
<button class="p-1.5 rounded-lg border border-outline-variant/20 hover:bg-white text-slate-400 disabled:opacity-30" disabled="">
<span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
</button>
<button class="px-3 py-1 rounded-lg border border-primary bg-white text-primary text-xs font-bold">1</button>
<button class="px-3 py-1 rounded-lg border border-outline-variant/20 hover:bg-white text-slate-500 text-xs font-medium">2</button>
<button class="px-3 py-1 rounded-lg border border-outline-variant/20 hover:bg-white text-slate-500 text-xs font-medium">3</button>
<button class="p-1.5 rounded-lg border border-outline-variant/20 hover:bg-white text-slate-400">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div> -->
</div>
<!-- Footer Editorial Section -->
<div class="mt-16 pt-12 border-t border-outline-variant/10">
<div class="max-w-4xl mx-auto text-center">
<div class="inline-block p-1 mb-6 rounded-full bg-secondary-container/20">
<div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
<span class="material-symbols-outlined" data-icon="verified_user">verified_user</span>
</div>
</div>
<h3 class="text-2xl Newsreader text-primary mb-4">Integrity in Professional Governance</h3>
<p class="text-on-surface-variant body leading-relaxed">
                    At Anandham Mindcare, our administrative portal serves as the structural foundation of our clinical excellence. 
                    Every member identity is curated with precision to ensure that only the most dedicated practitioners and 
                    researchers lead our mission toward holistic mental wellness.
                </p>
<div class="mt-8 flex justify-center gap-12">
<div>
<p class="text-2xl font-bold text-secondary">99.8%</p>
<p class="text-[10px] uppercase tracking-widest text-slate-400">Compliance Rate</p>
</div>
<div>
<p class="text-2xl font-bold text-secondary">24h</p>
<p class="text-[10px] uppercase tracking-widest text-slate-400">Avg. Review Time</p>
</div>
<div>
<p class="text-2xl font-bold text-secondary">ISO 27001</p>
<p class="text-[10px] uppercase tracking-widest text-slate-400">Security Standard</p>
</div>
</div>
</div>
</div>
</div>

@endsection
