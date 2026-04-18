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

<p class="text-on-primary-container text-sm font-medium tracking-widest uppercase mb-1">
    Monthly Financial Overview
</p>

<h3 class="serif text-5xl font-semibold mb-6">
    ₹{{ number_format($totalRevenue) }}
</h3>

<div class="flex gap-12">

    <!-- VERIFIED -->
    <div>
        <p class="text-on-primary-container text-xs mb-1">Total Revenue Verified</p>
        <p class="text-xl font-medium">
            ₹{{ number_format($totalVerified) }}
        </p>
    </div>

    <div class="w-px h-10 bg-white/10"></div>

    <!-- PENDING -->
    <div>
        <p class="text-on-primary-container text-xs mb-1">Pending Clearances</p>
        <p class="text-xl font-medium">
            ₹{{ number_format($totalPending) }}
        </p>
    </div>

    <div class="w-px h-10 bg-white/10"></div>

    <!-- SUCCESS RATE -->
    <div>
        <p class="text-on-primary-container text-xs mb-1">Success Rate</p>
        <p class="text-xl font-medium">
            {{ $successRate }}%
        </p>
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
<p class="text-4xl font-bold text-primary mb-2">
    {{ $pendingPayments->count() }}
    <span class="text-lg font-normal text-on-surface-variant">
        requests
    </span>
</p>
</div>
</div>
</section>
<!-- Transaction List -->
<section>
<div class="flex items-center justify-between mb-6">
<h4 class="serif text-2xl text-primary">Pending Transactions</h4>
<div class="flex gap-2 mb-6">
    <button onclick="showTab('pending')" id="tab-pending"
        class="tab-btn px-4 py-2 text-xs font-bold bg-primary text-white rounded-full">
        Pending ({{ $pendingPayments->count() }})
    </button>

    <button onclick="showTab('approved')" id="tab-approved"
        class="tab-btn px-4 py-2 text-xs font-bold bg-gray-200 rounded-full">
        Approved ({{ $approvedPayments->count() }})
    </button>

    <button onclick="showTab('rejected')" id="tab-rejected"
        class="tab-btn px-4 py-2 text-xs font-bold bg-gray-200 rounded-full">
        Rejected ({{ $rejectedPayments->count() }})
    </button>
</div>
</div>
<div class="space-y-4">
    {{-- ===================== PENDING ===================== --}}
<div id="tab-content-pending" class="tab-content">
@forelse($pendingPayments as $payment)
    @include('partials.admin.payment_card', ['payment' => $payment, 'type' => 'pending'])
@empty
    <div class="text-center py-20">No pending payments</div>
@endforelse
</div>


{{-- ===================== APPROVED ===================== --}}
<div id="tab-content-approved" class="tab-content hidden">
@forelse($approvedPayments as $payment)
    @include('partials.admin.payment_card', ['payment' => $payment, 'type' => 'approved'])
@empty
    <div class="text-center py-20">No approved payments</div>
@endforelse
</div>


{{-- ===================== REJECTED ===================== --}}
<div id="tab-content-rejected" class="tab-content hidden">
@forelse($rejectedPayments as $payment)
    @include('partials.admin.payment_card', ['payment' => $payment, 'type' => 'rejected'])
@empty
    <div class="text-center py-20">No rejected payments</div>
@endforelse
</div>


</div>
</section>

    <div id="imageModal" class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50">
    <div class="relative max-w-3xl w-full p-4">
        
        <button onclick="closeImageModal()" 
            class="absolute top-2 right-2 bg-white rounded-full p-2 shadow">
            ✕
        </button>

        <img id="modalImage" class="w-full max-h-[80vh] object-contain rounded-lg shadow-lg">
    </div>
</div>
</div>
<script>
function showTab(tab) {
    document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
    document.getElementById('tab-content-' + tab).classList.remove('hidden');
}

function openImageModal(src) {
    document.getElementById('modalImage').src = src;
    document.getElementById('imageModal').classList.remove('hidden');
    document.getElementById('imageModal').classList.add('flex');
}

function closeImageModal() {
    document.getElementById('imageModal').classList.add('hidden');
    document.getElementById('imageModal').classList.remove('flex');
}
</script>
<script>
function showTab(tab) {
    document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
    document.querySelectorAll('.tab-btn').forEach(el => {
        el.classList.remove('bg-primary', 'text-white');
        el.classList.add('bg-gray-200');
    });

    document.getElementById('tab-content-' + tab).classList.remove('hidden');
    document.getElementById('tab-' + tab).classList.add('bg-primary', 'text-white');
}
</script>

@endsection
