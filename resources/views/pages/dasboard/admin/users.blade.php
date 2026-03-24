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
<span class="text-3xl font-bold text-primary">1,284</span>
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
<span class="text-3xl font-bold text-primary">42</span>
<p class="text-xs text-slate-400 mt-1">Requiring immediate review</p>
</div>
</div>
</div>
<!-- Action Bar -->
<div class="flex flex-wrap items-center justify-between gap-4 mb-8">
<div class="flex items-center gap-3">
<button class="bg-primary hover:bg-primary-container text-white px-6 py-2.5 rounded-lg flex items-center gap-2 transition-all font-medium text-sm">
<span class="material-symbols-outlined text-lg" data-icon="person_add">person_add</span>
                    Add New User
                </button>
<button class="border border-outline-variant/30 hover:bg-surface-container-low px-6 py-2.5 rounded-lg flex items-center gap-2 transition-all font-medium text-sm text-on-surface-variant">
<span class="material-symbols-outlined text-lg" data-icon="filter_list">filter_list</span>
                    Filter View
                </button>
<button class="border border-outline-variant/30 hover:bg-surface-container-low px-4 py-2.5 rounded-lg flex items-center gap-2 transition-all font-medium text-sm text-on-surface-variant">
<span class="material-symbols-outlined text-lg" data-icon="file_download">file_download</span>
                    Export
                </button>
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
<!-- Row 1 -->
<tr class="group hover:bg-surface-container-low/30 transition-colors">
<td class="px-6 py-5">
<div class="flex items-center gap-4">
<img class="w-10 h-10 rounded-full object-cover" data-alt="Close-up portrait of a female doctor in medical attire with a confident expression in a bright clinical setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBb7XBBmSQh_p_MwYfGxTYcEWUjVie-3Tq6Tjm977qITp6KzAwGjbfwt1qql3AL7nH8b35tnddnFGzJExJ3NaEMGSTr40Zbv8UUNskQcCBTlzhSHqE-a5cUtdXdZuytPC-QARUFl4_yF0EX9Vu_xyFxVIErDnvBJK2KGeRV0lrJVDaBbwSKXVd6prjiSyLz_vBo-_Qr4bVi8JCI5pSEExA6BVAEMfHEjGD-qalWafGEt-aZiICO4Q_Nyi0ExJ29qR6EihmSjsh5XQD"/>
<div>
<p class="font-bold text-primary Newsreader text-lg">Dr. Elena Rostova</p>
<p class="text-xs text-slate-400 font-mono tracking-tighter">ID: AM-2024-0892</p>
<p class="text-xs text-slate-500">e.rostova@mindcare.edu</p>
</div>
</div>
</td>
<td class="px-6 py-5">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold">
<span class="material-symbols-outlined text-sm" data-icon="medical_services">medical_services</span>
                                Senior Psychiatrist
                            </span>
</td>
<td class="px-6 py-5">
<span class="inline-flex items-center gap-1 text-green-600 text-xs font-bold uppercase tracking-widest">
<span class="w-2 h-2 rounded-full bg-green-500"></span>
                                Active
                            </span>
</td>
<td class="px-6 py-5">
<p class="text-sm text-slate-600">Today, 09:42 AM</p>
<p class="text-[10px] text-slate-400">Section: Patient Care</p>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-slate-400 hover:text-primary transition-colors" title="View Profile">
<span class="material-symbols-outlined" data-icon="visibility">visibility</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary transition-colors" title="Edit">
<span class="material-symbols-outlined" data-icon="edit_note">edit_note</span>
</button>
<button class="p-2 text-slate-400 hover:text-error transition-colors" title="Deactivate">
<span class="material-symbols-outlined" data-icon="person_off">person_off</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="group hover:bg-surface-container-low/30 transition-colors">
<td class="px-6 py-5">
<div class="flex items-center gap-4">
<img class="w-10 h-10 rounded-full object-cover" data-alt="Portrait of a young woman student with glasses holding a notebook in a library with soft blurred backgrounds" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdRXxbSiuLcz-TOkmciRdDGncvz5M9SQSzXmH965kwxQ6g4PbsS-Epzl6Z4KcbN4i9DO1inrvKvgLoszqjee0xMvSdPhL5UfRQmO60MlkmUe1nbPWZL3-N5ZtZGOIPIoMHt0t_ZfGyX-LuupaT7lC4WINYNof7hnGyNfVj0oEq76O6EYBb50u58fCZN-paIW2N-lLqyYyVr0yE87-aioAn3tWE-udtDZpEIWzzJ5Go5pKv3YzQ4xazFxyFnXfwQ1YcBNeO-nmTARki"/>
<div>
<p class="font-bold text-primary Newsreader text-lg">Maya Chen</p>
<p class="text-xs text-slate-400 font-mono tracking-tighter">ID: AM-2024-4122</p>
<p class="text-xs text-slate-500">m.chen@academy.mindcare</p>
</div>
</div>
</td>
<td class="px-6 py-5">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 text-amber-700 text-xs font-semibold">
<span class="material-symbols-outlined text-sm" data-icon="school">school</span>
                                Post-Grad Student
                            </span>
</td>
<td class="px-6 py-5">
<span class="inline-flex items-center gap-1 text-slate-400 text-xs font-bold uppercase tracking-widest">
<span class="w-2 h-2 rounded-full bg-slate-300"></span>
                                On Leave
                            </span>
</td>
<td class="px-6 py-5">
<p class="text-sm text-slate-600">3 Days Ago</p>
<p class="text-[10px] text-slate-400">Section: Neural Research</p>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-slate-400 hover:text-primary transition-colors" title="View Profile">
<span class="material-symbols-outlined" data-icon="visibility">visibility</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary transition-colors" title="Edit">
<span class="material-symbols-outlined" data-icon="edit_note">edit_note</span>
</button>
<button class="p-2 text-slate-400 hover:text-error transition-colors" title="Deactivate">
<span class="material-symbols-outlined" data-icon="person_off">person_off</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="group hover:bg-surface-container-low/30 transition-colors">
<td class="px-6 py-5">
<div class="flex items-center gap-4">
<img class="w-10 h-10 rounded-full object-cover" data-alt="Portrait of a middle-aged male professional in a smart casual shirt against a clean minimal background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpqEs0hRJcRJwvwQS5LdSq843Dy8GlKB8Sy2Gg5pkpDMmY-je7EQ77FMOzNWcrj_Xuw79nGRPjPb0S_gxdb4Y71nYNu8h17q96ft6SxjCRDULlaj4ybe1nXOfM6JsEaw66mCxZOTYQZav9-ptgSppigQ2P7Hq8P0boWvyKyO_3fu9Gh60gLEYEHtmbE9Mh3HtvydmSOH_IQH_aQ5M9t1wPY08237SSem6lJ0tQTqHC1xlKEQd8FtpnwF_qlDLvKuWkKKTGo_6kQznB"/>
<div>
<p class="font-bold text-primary Newsreader text-lg">Marcus Holloway</p>
<p class="text-xs text-slate-400 font-mono tracking-tighter">ID: AM-2024-0012</p>
<p class="text-xs text-slate-500">m.holloway@mindcare.edu</p>
</div>
</div>
</td>
<td class="px-6 py-5">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs font-semibold">
<span class="material-symbols-outlined text-sm" data-icon="biotech">biotech</span>
                                Research Professional
                            </span>
</td>
<td class="px-6 py-5">
<span class="inline-flex items-center gap-1 text-green-600 text-xs font-bold uppercase tracking-widest">
<span class="w-2 h-2 rounded-full bg-green-500"></span>
                                Active
                            </span>
</td>
<td class="px-6 py-5">
<p class="text-sm text-slate-600">Yesterday, 4:15 PM</p>
<p class="text-[10px] text-slate-400">Section: Lab Admin</p>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-slate-400 hover:text-primary transition-colors" title="View Profile">
<span class="material-symbols-outlined" data-icon="visibility">visibility</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary transition-colors" title="Edit">
<span class="material-symbols-outlined" data-icon="edit_note">edit_note</span>
</button>
<button class="p-2 text-slate-400 hover:text-error transition-colors" title="Deactivate">
<span class="material-symbols-outlined" data-icon="person_off">person_off</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="group hover:bg-surface-container-low/30 transition-colors">
<td class="px-6 py-5">
<div class="flex items-center gap-4">
<img class="w-10 h-10 rounded-full object-cover" data-alt="Headshot of a serious male professional in a white coat with a stethoscope around his neck" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgTEtRBZmH4xAyh8TjKqMzFBqsmU6iMbfvv-ysRCjiylXM6tD2bprbcBW8OzQELHFLdMbRVNmlAzG2C9kEKf87Vz2zB4NtMuvYq1JyfX8eCvm9dYokNkPQb1YBCRrvfH992lV91fPs59VpZ36EjieSJey-hrIWSYnC7gub94M02_y3jJNNnQPnY0_un9NXAMGnaL6JbyXBAD28iN-5wLW3S3FDEe5bYTDKiLI2ddbkgTtKk2tFUFUW3t7KuEFrWMNCCD5ZaoxvN3bb"/>
<div>
<p class="font-bold text-primary Newsreader text-lg">Dr. Simon Vane</p>
<p class="text-xs text-slate-400 font-mono tracking-tighter">ID: AM-2024-9981</p>
<p class="text-xs text-slate-500">s.vane@mindcare.edu</p>
</div>
</div>
</td>
<td class="px-6 py-5">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold">
<span class="material-symbols-outlined text-sm" data-icon="medical_services">medical_services</span>
                                Senior Resident
                            </span>
</td>
<td class="px-6 py-5">
<span class="inline-flex items-center gap-1 text-red-600 text-xs font-bold uppercase tracking-widest">
<span class="w-2 h-2 rounded-full bg-red-500"></span>
                                Inactive
                            </span>
</td>
<td class="px-6 py-5">
<p class="text-sm text-slate-600">2 Weeks Ago</p>
<p class="text-[10px] text-slate-400">Section: External Consult</p>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-slate-400 hover:text-primary transition-colors" title="View Profile">
<span class="material-symbols-outlined" data-icon="visibility">visibility</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary transition-colors" title="Edit">
<span class="material-symbols-outlined" data-icon="edit_note">edit_note</span>
</button>
<button class="p-2 text-slate-400 hover:text-error transition-colors" title="Deactivate">
<span class="material-symbols-outlined" data-icon="person_off">person_off</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
<div class="px-6 py-4 bg-surface-container-low/30 border-t border-outline-variant/10 flex justify-between items-center">
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
</div>
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
