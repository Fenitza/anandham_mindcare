@extends('layouts.admin')
@section('title', 'Payment Verifications - Anandham Mindcare')
@section('content')
<div class="pt-28 px-8 pb-12 space-y-12">
    <!-- Dashboard Header & Summary Stats (Editorial Layout) -->
<section class="mb-12">
<div class="flex justify-between items-end mb-8">
<div>
<h2 class="serif text-4xl font-light text-primary mb-2">Payment Verification</h2>
<p class="text-on-surface-variant max-w-xl">Review and authorize pending course fee transactions. All approvals are logged for clinical audit compliance.</p>
</div>
<div class="flex gap-4">
<button class="flex items-center px-4 py-2 bg-surface-container-lowest border border-outline-variant/15 rounded-lg text-sm font-medium hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined mr-2 text-lg">download</span> Export Report
                    </button>
<button class="flex items-center px-5 py-2 bg-primary text-white rounded-lg text-sm font-medium hover:opacity-90 transition-all">
<span class="material-symbols-outlined mr-2 text-lg">history</span> Audit Log
                    </button>
</div>
</div>
<!-- Bento Grid Summary -->
<div class="grid grid-cols-12 gap-6">
<div class="col-span-12 md:col-span-8 bg-primary-container bg-gradient-to-br from-primary to-primary-container p-8 rounded-xl relative overflow-hidden text-white">
<div class="relative z-10">
<p class="text-on-primary-container text-sm font-medium tracking-widest uppercase mb-1">Monthly Financial Overview</p>
<h3 class="serif text-5xl font-semibold mb-6">₹4,82,500.00</h3>
<div class="flex gap-12">
<div>
<p class="text-on-primary-container text-xs mb-1">Total Revenue Verified</p>
<p class="text-xl font-medium">₹3,42,000</p>
</div>
<div class="w-px h-10 bg-white/10"></div>
<div>
<p class="text-on-primary-container text-xs mb-1">Pending Clearances</p>
<p class="text-xl font-medium">₹1,40,500</p>
</div>
<div class="w-px h-10 bg-white/10"></div>
<div>
<p class="text-on-primary-container text-xs mb-1">Success Rate</p>
<p class="text-xl font-medium">94.2%</p>
</div>
</div>
</div>
<!-- Decorative Element -->
<div class="absolute -right-16 -bottom-16 w-64 h-64 bg-secondary/10 rounded-full blur-3xl"></div>
</div>
<div class="col-span-12 md:col-span-4 bg-surface-container-lowest border border-outline-variant/15 p-8 rounded-xl flex flex-col justify-center">
<div class="flex items-center mb-4">
<div class="p-2 bg-secondary/10 rounded-lg mr-3">
<span class="material-symbols-outlined text-secondary">pending_actions</span>
</div>
<span class="text-sm font-bold text-primary uppercase tracking-tight">Pending Approval</span>
</div>
<p class="text-4xl font-bold text-primary mb-2">12 <span class="text-lg font-normal text-on-surface-variant tracking-normal">requests</span></p>
<p class="text-sm text-on-surface-variant italic">Average processing time: 4.2 hrs</p>
</div>
</div>
</section>
<!-- Transaction List -->
<section>
<div class="flex items-center justify-between mb-6">
<h4 class="serif text-2xl text-primary">Pending Transactions</h4>
<div class="flex gap-2">
<button class="px-3 py-1.5 text-xs font-semibold bg-primary text-white rounded-full">All</button>
<button class="px-3 py-1.5 text-xs font-semibold text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors">Bank Transfer</button>
<button class="px-3 py-1.5 text-xs font-semibold text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors">Card Payment</button>
</div>
</div>
<div class="space-y-4">
<!-- Payment Item 1 -->
<div class="group bg-surface-container-lowest hover:bg-white border border-outline-variant/15 p-6 rounded-xl transition-all duration-300 flex items-center shadow-sm hover:shadow-md hover:shadow-primary/5">
<div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center mr-6">
<span class="material-symbols-outlined text-primary">person</span>
</div>
<div class="flex-1 grid grid-cols-4 gap-4 items-center">
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Student Name</p>
<p class="font-bold text-primary">Aditi Rao</p>
<p class="text-xs text-on-surface-variant">ID: AM-2024-089</p>
</div>
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Course Module</p>
<p class="font-medium">Advanced Clinical Psychology</p>
<p class="text-xs text-secondary italic">Instalment 2 of 4</p>
</div>
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Amount</p>
<p class="text-xl font-bold text-primary">₹12,500.00</p>
</div>
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Status</p>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
<span class="w-1.5 h-1.5 rounded-full bg-amber-500 mr-2"></span> Awaiting Verification
                            </span>
</div>
</div>
<div class="flex items-center space-x-3 ml-6">
<button class="px-4 py-2 text-sm font-bold text-error hover:bg-error/5 rounded-lg transition-colors flex items-center">
<span class="material-symbols-outlined text-lg mr-1">close</span> Reject
                        </button>
<button class="px-6 py-2 bg-primary text-white rounded-lg text-sm font-bold hover:opacity-90 shadow-sm transition-all flex items-center">
<span class="material-symbols-outlined text-lg mr-1">check_circle</span> Approve
                        </button>
</div>
</div>
<!-- Payment Item 2 -->
<div class="group bg-surface-container-lowest hover:bg-white border border-outline-variant/15 p-6 rounded-xl transition-all duration-300 flex items-center shadow-sm hover:shadow-md hover:shadow-primary/5">
<div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center mr-6">
<span class="material-symbols-outlined text-primary">person</span>
</div>
<div class="flex-1 grid grid-cols-4 gap-4 items-center">
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Student Name</p>
<p class="font-bold text-primary">Vikram Malhotra</p>
<p class="text-xs text-on-surface-variant">ID: AM-2024-112</p>
</div>
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Course Module</p>
<p class="font-medium">Mindfulness &amp; Meditation Basics</p>
<p class="text-xs text-secondary italic">Full Payment</p>
</div>
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Amount</p>
<p class="text-xl font-bold text-primary">₹8,000.00</p>
</div>
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Status</p>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
<span class="w-1.5 h-1.5 rounded-full bg-amber-500 mr-2"></span> Awaiting Verification
                            </span>
</div>
</div>
<div class="flex items-center space-x-3 ml-6">
<button class="px-4 py-2 text-sm font-bold text-error hover:bg-error/5 rounded-lg transition-colors flex items-center">
<span class="material-symbols-outlined text-lg mr-1">close</span> Reject
                        </button>
<button class="px-6 py-2 bg-primary text-white rounded-lg text-sm font-bold hover:opacity-90 shadow-sm transition-all flex items-center">
<span class="material-symbols-outlined text-lg mr-1">check_circle</span> Approve
                        </button>
</div>
</div>
<!-- Payment Item 3 -->
<div class="group bg-surface-container-lowest hover:bg-white border border-outline-variant/15 p-6 rounded-xl transition-all duration-300 flex items-center shadow-sm hover:shadow-md hover:shadow-primary/5">
<div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center mr-6">
<span class="material-symbols-outlined text-primary">person</span>
</div>
<div class="flex-1 grid grid-cols-4 gap-4 items-center">
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Student Name</p>
<p class="font-bold text-primary">Sarah Kurian</p>
<p class="text-xs text-on-surface-variant">ID: AM-2023-455</p>
</div>
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Course Module</p>
<p class="font-medium">Child Psychology &amp; Development</p>
<p class="text-xs text-secondary italic">Certification Fee</p>
</div>
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Amount</p>
<p class="text-xl font-bold text-primary">₹3,500.00</p>
</div>
<div>
<p class="text-xs text-on-surface-variant font-medium uppercase tracking-tighter mb-1">Status</p>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
<span class="w-1.5 h-1.5 rounded-full bg-amber-500 mr-2"></span> Awaiting Verification
                            </span>
</div>
</div>
<div class="flex items-center space-x-3 ml-6">
<button class="px-4 py-2 text-sm font-bold text-error hover:bg-error/5 rounded-lg transition-colors flex items-center">
<span class="material-symbols-outlined text-lg mr-1">close</span> Reject
                        </button>
<button class="px-6 py-2 bg-primary text-white rounded-lg text-sm font-bold hover:opacity-90 shadow-sm transition-all flex items-center">
<span class="material-symbols-outlined text-lg mr-1">check_circle</span> Approve
                        </button>
</div>
</div>
</div>
<!-- Empty Space Principle -->
<div class="mt-12 text-center p-12 border-2 border-dashed border-outline-variant/20 rounded-2xl bg-surface-container-low/30">
<span class="material-symbols-outlined text-outline-variant text-4xl mb-4">verified_user</span>
<p class="text-on-surface-variant serif text-xl italic">"Excellence in mental healthcare requires precision in every administrative detail."</p>
<p class="text-xs text-outline font-medium uppercase tracking-widest mt-2">— Institutional Governance Directive</p>
</div>
</section>
</div>
@endsection
