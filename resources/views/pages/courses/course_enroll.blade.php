@extends('layouts.hosp')

@section('content')

<style>
.material-symbols-outlined {
    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
}
body { font-family: 'Work Sans', sans-serif; }
h1, h2, h3 { font-family: 'Newsreader', serif; }
</style>

<section class="pt-24 pb-20 px-6">
<div class="max-w-6xl mx-auto">

    <!-- HEADER -->
    <div class="mb-12 text-center">
        <span class="text-secondary font-semibold tracking-widest uppercase text-[10px]">
            Secure Enrollment Gateway
        </span>

        <h1 class="text-4xl md:text-5xl text-primary font-bold mt-3 italic leading-tight">
            Course Enrollment & Payment
        </h1>
    </div>

    <!-- GRID -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        @if(session('enrolled'))
<div class="bg-secondary/10 border border-secondary/30 rounded-xl p-5 mb-6 text-center animate-fade-in-up">

    <h4 class="text-primary font-bold text-sm uppercase tracking-wider mb-2">
        Payment Approval Pending
    </h4>

    <p class="text-on-surface-variant text-xs leading-relaxed max-w-md mx-auto">
        We have received your transaction details. Our clinical administration is currently verifying the enrollment. You will receive an email confirmation and access to the modules within 2–4 business hours.
    </p>

</div>
@endif@if(session('enrolled'))
<div class="bg-secondary/10 border border-secondary/30 rounded-xl p-5 mb-6 text-center animate-fade-in-up">

    <h4 class="text-primary font-bold text-sm uppercase tracking-wider mb-2">
        Payment Approval Pending
    </h4>

    <p class="text-on-surface-variant text-xs leading-relaxed max-w-md mx-auto">
        We have received your transaction details. Our clinical administration is currently verifying the enrollment. You will receive an email confirmation and access to the modules within 2–4 business hours.
    </p>

</div>
@endif

        <!-- LEFT SIDE -->
        <div class="space-y-10">

            <!-- COURSE INFO -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="material-symbols-outlined text-secondary">clinical_notes</span>
                    <h2 class="text-2xl text-primary font-bold italic">
                        {{ $course->title ?? 'Course Title' }}
                    </h2>
                </div>

                <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
                    {{ $course->description ?? 'Course description here...' }}
                </p>

                <!-- META -->
                <div class="grid grid-cols-3 gap-6 py-6 border-y border-outline-variant/10 text-center">

                    <div>
                        <p class="text-[10px] uppercase text-outline font-semibold">Duration</p>
                        <p class="font-bold text-primary text-sm">
                            {{ $course->duration ?? $course->course_time }}
                        </p>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase text-outline font-semibold">Certification</p>
                        <p class="font-bold text-primary text-sm">CPD</p>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase text-outline font-semibold">Instructor</p>
                        <p class="font-bold text-primary text-sm">
                            {{ $course->mentor->name ?? 'Expert Mentor' }}
                        </p>
                    </div>

                </div>
            </div>

            <!-- TRUST -->
            <div class="space-y-3 text-sm">
                <div class="flex items-center gap-3 text-on-surface-variant">
                    <span class="material-symbols-outlined text-primary/60 text-lg">verified_user</span>
                    Accredited clinical framework
                </div>

                <div class="flex items-center gap-3 text-on-surface-variant">
                    <span class="material-symbols-outlined text-primary/60 text-lg">lock</span>
                    256-bit secure transactions
                </div>
            </div>

            <!-- HELP -->
            <div class="pt-6 border-t border-outline-variant/10">
                <p class="text-xs text-on-surface-variant mb-3">Need help?</p>

                <div class="flex gap-6 text-sm">
                    <a href="mailto:support@anandham.com" class="text-primary font-semibold hover:underline flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">mail</span>
                        Support
                    </a>

                    <a href="#" class="text-primary font-semibold hover:underline flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">help</span>
                        FAQ
                    </a>
                </div>
            </div>

        </div>

        <!-- RIGHT SIDE -->
        <div class="bg-white p-8 rounded-2xl shadow-md border border-outline-variant/20">

            <div class="mb-6">
                <h3 class="text-lg font-bold text-primary italic">Secure Payment</h3>
                <p class="text-xs text-on-surface-variant">
                    Scan using any UPI app
                </p>
            </div>

            
            <!-- QR -->
            <div class="flex flex-col items-center mb-10">

                <div class="p-6 bg-background rounded-2xl border border-outline-variant/10 shadow-md hover:shadow-lg transition-all">
                    
                    <img 
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-0ufG4JFtGRisSfArbMQAayKgKhFuaAV0saktWrptPqQ85Zz4EX_IfQ861qLmgs uAdt9Ng9sUEtBpVpjsLqN9-IZ8TdvVmYWqH15uMF7K7GG3ItGZ9lmeBj4JnNnKsXPwjaJVM1yIo1pgUxm3TnYPebWhvJkMmgFdmyCujHQUa9RM2jV0cTO0PFzQVA1bayXMGeAlQ2QvRHsCUWNmW2V8zFqiGmpzaRH5UYtfiecgGC0WUVKzpBP23_y8ftvd6cJRYSE1DVxC5k"
                        class="w-56 h-56 md:w-64 md:h-64 object-contain"
                    >
                </div>

                <p class="text-[11px] mt-4 font-bold text-primary uppercase tracking-widest flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                    Waiting for payment...
                </p>

            </div>

            <!-- SUMMARY -->
            <div class="space-y-3 mb-8 text-sm">

                <div class="flex justify-between">
                    <span>Course Fee</span>
                    <span class="font-medium">
                        ₹ {{ number_format($course->fee ?? 0) }}
                    </span>
                </div>

                <div class="flex justify-between">
                    <span>Tax</span>
                    <span>₹ 0</span>
                </div>

                <div class="flex justify-between pt-3 border-t font-bold text-lg">
                    <span>Total</span>
                    <span class="text-secondary">
                        ₹ {{ number_format($course->fee ?? 0) }}
                    </span>
                </div>

            </div>

            <!-- CTA -->
            <button class="w-full bg-primary text-white py-4 rounded-lg font-bold uppercase text-xs tracking-widest hover:scale-105 transition-all">
                Confirm & Enroll
            </button>

            <p class="text-[10px] text-center text-outline mt-4 italic">
                By continuing, you agree to terms
            </p>

        </div>

    </div>

    <!-- BACK -->
    <div class="text-center mt-12">
        <a href="{{ route('courses.detail', $course->id) }}" 
           class="text-primary underline hover:text-secondary text-sm">
           ← Back to Course
        </a>
    </div>

</div>
</section>

@endsection