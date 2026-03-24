@extends('layouts.admin')
@section('title', 'Bulk Course Assignment - Anandham Mindcare')
@section('content')
<section>
    <div class="card bg-surface-container-high relative overflow-hidden h-full">
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
@endsection
