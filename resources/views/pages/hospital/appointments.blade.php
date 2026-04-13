@extends('layouts.hosp')

@section('content')

<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .perspective-quote-bar {
            border-left: 4px solid #755b00;
        }
        .ghost-border {
            border: 1px solid rgba(196, 198, 209, 0.15);
        }
    </style>
    <main class="p-12 max-w-7xl mx-auto">

    <header class="mb-20">
<h2 class="font-headline text-5xl text-primary font-bold mb-4">Schedule New Clinical Session</h2>
<div class="perspective-quote-bar pl-6 py-2">
<p class="font-headline text-xl text-on-surface-variant italic">"Healing begins with the intentionality of presence and the structure of care."</p>
</div>
</header>
<form class="space-y-12">
<!-- Section 1: Patient Details (Bento-style Grid) -->
<section class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
<div class="md:col-span-4">
<h3 class="font-headline text-2xl text-primary font-bold">Patient Details</h3>
<p class="text-on-surface-variant text-sm mt-2 leading-relaxed">Identify the recipient of care. Ensure the Patient ID matches the medical records for seamless integration.</p>
</div>
<div class="md:col-span-8 bg-surface-container-lowest p-8 rounded-xl ghost-border space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="relative">
<label class="block text-xs font-semibold text-secondary uppercase tracking-widest mb-1">Full Name</label>
<input class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-secondary focus:ring-0 transition-all px-4 py-3 font-body" placeholder="e.g. Eleanor Vance" type="text"/>
</div>
<div class="relative">
<label class="block text-xs font-semibold text-secondary uppercase tracking-widest mb-1">Patient ID</label>
<input class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-secondary focus:ring-0 transition-all px-4 py-3 font-body" placeholder="AM-992-X" type="text"/>
</div>
</div>
<div class="relative">
<label class="block text-xs font-semibold text-secondary uppercase tracking-widest mb-1">Contact Number</label>
<input class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-secondary focus:ring-0 transition-all px-4 py-3 font-body" placeholder="+1 (555) 000-0000" type="tel"/>
</div>
</div>
</section>
<!-- Section 2: Appointment Scheduling -->
<section class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
<div class="md:col-span-4">
<h3 class="font-headline text-2xl text-primary font-bold">Scheduling</h3>
<p class="text-on-surface-variant text-sm mt-2 leading-relaxed">Define the temporal boundaries of the session. Recurrence ensures continuity in the therapeutic journey.</p>
</div>
<div class="md:col-span-8 bg-surface-container-low p-8 rounded-xl space-y-6">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="relative">
<label class="block text-xs font-semibold text-secondary uppercase tracking-widest mb-1">Date</label>
<input class="w-full bg-surface-container-lowest border-none border-b-2 border-transparent focus:border-secondary focus:ring-0 transition-all px-4 py-3 font-body" type="date"/>
</div>
<div class="relative">
<label class="block text-xs font-semibold text-secondary uppercase tracking-widest mb-1">Start Time</label>
<input class="w-full bg-surface-container-lowest border-none border-b-2 border-transparent focus:border-secondary focus:ring-0 transition-all px-4 py-3 font-body" type="time"/>
</div>
<div class="relative">
<label class="block text-xs font-semibold text-secondary uppercase tracking-widest mb-1">End Time</label>
<input class="w-full bg-surface-container-lowest border-none border-b-2 border-transparent focus:border-secondary focus:ring-0 transition-all px-4 py-3 font-body" type="time"/>
</div>
</div>
<div class="relative">
<label class="block text-xs font-semibold text-secondary uppercase tracking-widest mb-1">Recurrence</label>
<select class="w-full bg-surface-container-lowest border-none border-b-2 border-transparent focus:border-secondary focus:ring-0 transition-all px-4 py-3 font-body appearance-none">
<option>No Recurrence</option>
<option>Weekly (Recommended)</option>
<option>Bi-Weekly</option>
<option>Monthly</option>
</select>
</div>
</div>
</section>
<!-- Section 3: Service Configuration -->
<section class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
<div class="md:col-span-4">
<h3 class="font-headline text-2xl text-primary font-bold">Service Configuration</h3>
<p class="text-on-surface-variant text-sm mt-2 leading-relaxed">Assign the specialized care module and the presiding clinician for this session.</p>
</div>
<div class="md:col-span-8 bg-surface-container-lowest p-8 rounded-xl ghost-border grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="relative">
<label class="block text-xs font-semibold text-secondary uppercase tracking-widest mb-1">Specialized Service</label>
<select class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-secondary focus:ring-0 transition-all px-4 py-3 font-body appearance-none">
<option>Select Service...</option>
<option>Child Care</option>
<option>Adolescent Care</option>
<option>Geriatric Mental Health</option>
<option>Trauma-Informed Therapy</option>
</select>
</div>
<div class="relative">
<label class="block text-xs font-semibold text-secondary uppercase tracking-widest mb-1">Consulting Physician</label>
<select class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-secondary focus:ring-0 transition-all px-4 py-3 font-body appearance-none">
<option>Assign Physician...</option>
<option>Dr. Julian Aristhone</option>
<option>Dr. Sarah Hemlock</option>
<option>Dr. Marcus Vane</option>
</select>
</div>
</div>
</section>
<!-- Section 4: Clinical Context -->
<section class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start pb-24">
<div class="md:col-span-4">
<h3 class="font-headline text-2xl text-primary font-bold">Clinical Context</h3>
<p class="text-on-surface-variant text-sm mt-2 leading-relaxed">Provide preliminary observations and set the triage priority for the intake team.</p>
</div>
<div class="md:col-span-8 space-y-6">
<div class="bg-surface-container-lowest p-8 rounded-xl ghost-border">
<label class="block text-xs font-semibold text-secondary uppercase tracking-widest mb-1">Preliminary Notes</label>
<textarea class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-secondary focus:ring-0 transition-all px-4 py-3 font-body resize-none" placeholder="Summarize patient condition or specific session goals..." rows="4"></textarea>
</div>
<div class="flex items-center justify-between bg-surface-container-low p-6 rounded-xl">
<div>
<h4 class="font-semibold text-primary">Urgency Level</h4>
<p class="text-xs text-on-surface-variant">Priority sessions are flagged for immediate clinician review.</p>
</div>
<div class="flex items-center gap-4 bg-surface-container-lowest p-1 rounded-full border border-outline-variant/30">
<button class="px-6 py-2 rounded-full text-sm font-semibold transition-all bg-primary text-on-primary" type="button">Standard</button>
<button class="px-6 py-2 rounded-full text-sm font-semibold transition-all text-on-surface-variant hover:bg-surface-container-high" type="button">Priority</button>
</div>
</div>
<div class="pt-8 flex justify-end gap-4">
<button class="px-8 py-3 rounded-md border border-outline-variant text-primary font-semibold hover:bg-surface-container-low transition-colors font-body" type="button">Discard Draft</button>
<button class="px-10 py-3 rounded-md bg-gradient-to-r from-primary to-primary-container text-on-primary font-semibold hover:scale-[1.02] transition-transform font-body shadow-lg" type="submit">Confirm Appointment</button>
</div>
</div>
</section>
</form>
</main>
@endsection