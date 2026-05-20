@extends('layouts.course')

@section('content')

<style>
.material-symbols-outlined {
    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
}
body { font-family: 'Work Sans', sans-serif; }
h1, h2, h3 { font-family: 'Newsreader', serif; }
</style>

<section class="py-16 px-6">
<div class="max-w-7xl mx-auto">

    <!-- HEADER -->
    <div class="mb-10 text-center">
        <span class="text-secondary font-semibold tracking-widest uppercase text-xs">
            Secure Enrollment
        </span>

        <h1 class="text-4xl md:text-5xl text-primary font-bold mt-3 italic">
            Course Payment
        </h1>
    </div>

    <!-- ALERT -->
    @if(session('enrolled'))
<div class="mb-8 max-w-2xl mx-auto">
    <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6 shadow-sm">

        <div class="flex items-start gap-4">

            <div class="w-12 h-12 rounded-full bg-blue-500 text-white flex items-center justify-center">
                <span class="material-symbols-outlined">hourglass_top</span>
            </div>

            <div>
                <h4 class="text-blue-700 font-bold text-base mb-1">
                    Payment Under Verification
                </h4>

                <p class="text-sm text-blue-600">
                    Your payment proof has been submitted successfully. Verification takes 2–4 hours.
                </p>
                <a href="{{ route('user.course.enrollments') }}"
                class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-lg font-bold text-sm hover:scale-105 transition-all shadow-md hover:shadow-lg">
                    
                    <span class="material-symbols-outlined text-base">school</span>
                    Check Course Enrolllment status
                </a>

                
            </div>

        </div>

    </div>
</div>
@endif

    <!-- GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

        <!-- LEFT -->
        <div class="space-y-7">

            <div>
                <h2 class="text-2xl md:text-3xl text-primary font-bold italic mb-3">
                    {{ $course->title }}
                </h2>

                <p class="text-sm md:text-base text-on-surface-variant leading-relaxed">
                    {{ $course->description }}
                </p>
            </div>

            <!-- META -->
            <div class="flex justify-between text-center text-sm border-y py-4">
                <div>
                    <p class="text-outline uppercase text-xs">Duration</p>
                    <p class="font-bold text-primary text-base">
                        {{ $course->duration ?? $course->course_time }}
                    </p>
                </div>

                <div>
                    <p class="text-outline uppercase text-xs">Certificate</p>
                    <p class="font-bold text-primary text-base">CPD</p>
                </div>

                <div>
                    <p class="text-outline uppercase text-xs">Mentor</p>
                    <p class="font-bold text-primary text-base">
                        {{ $course->mentor->name ?? 'Expert' }}
                    </p>
                </div>
            </div>

            <!-- TRUST -->
            <div class="text-sm space-y-3 text-on-surface-variant">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined">verified_user</span>
                    Accredited program
                </div>

                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined">lock</span>
                    Secure payment
                </div>
            </div>

        </div>

        <!-- RIGHT -->
        <form action="{{ route('course.enroll.submit', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="bg-white p-7 rounded-2xl shadow-md border">

            @php
                $tagNames = $course->tags->pluck('name')->toArray();
            @endphp

            <div class="mb-6">

                <label
                    for="tagConfirm"
                    class="flex items-start gap-4 p-5 rounded-2xl border border-primary/10 bg-primary/[0.03] hover:bg-primary/[0.05] transition-all cursor-pointer"
                >

                    <!-- CHECKBOX -->
                    <div class="pt-1">

                        <input
                            type="checkbox"
                            id="tagConfirm"
                            class="w-5 h-5 rounded border-gray-300 text-primary focus:ring-primary"
                        >

                    </div>

                    <!-- CONTENT -->
                    <div class="flex-1">

                        <!-- TITLE -->
                        <div class="flex items-center gap-2 mb-2">

                            <span class="material-symbols-outlined text-secondary text-lg">
                                verified
                            </span>

                            <h4 class="text-sm font-bold text-primary tracking-wide">
                                Eligibility Confirmation
                            </h4>

                        </div>

                        <!-- DESCRIPTION -->
                        @if(count($tagNames))

                            <p class="text-sm leading-7 text-gray-700">

                                I confirm that I belong to the following professional category:

                                <span class="block mt-3 font-semibold text-primary leading-7">
                                    {{ implode(' • ', array_map('ucfirst', $tagNames)) }}
                                </span>

                            </p>

                        @else

                            <p class="text-sm leading-7 text-gray-700">
                                I confirm that I meet the eligibility criteria for this course.
                            </p>

                        @endif

                    </div>

                </label>

            </div>

            <!-- QR + PAYMENT CARD -->
<div id="qrSection" class="hidden mb-8">

    @php

        $internationalFees = is_array($course->international_pricing)
            ? $course->international_pricing
            : json_decode($course->international_pricing, true);

        $symbols = [
            'USD' => '$',
            'EUR' => '€',
            'GBP' => '£',
            'AUD' => 'A$',
            'CAD' => 'C$',
            'SGD' => 'S$',
            'AED' => 'د.إ',
        ];

    @endphp

    <div class="bg-gradient-to-br from-primary to-[#003b82] text-white rounded-3xl overflow-hidden shadow-2xl">

        <div class="grid lg:grid-cols-[260px_1fr]">

            <!-- LEFT -->
            <div class="bg-white/5 backdrop-blur-sm p-6 flex flex-col items-center justify-center border-b lg:border-b-0 lg:border-r border-white/10">

                <div class="bg-white p-4 rounded-2xl shadow-lg mb-4">

                    <img
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-0ufG4JFtGRisSfArbMQAayKgKhFuaAV0saktWrptPqQ85Zz4EX_IfQ861qLmgsuAdt9Ng9sUEtBpVpjsLqN9-IZ8TdvVmYWqH15uMF7K7GG3ItGZ9lmeBj4JnNnKsXPwjaJVM1yIo1pgUxm3TnYPebWhvJkMmgFdmyCujHQUa9RM2jV0cTO0PFzQVA1bayXMGeAlQ2QvRHsCUWNmW2V8zFqiGmpzaRH5UYtfiecgGC0WUVKzpBP23_y8ftvd6cJRYSE1DVxC5k"
                        class="w-40 h-40 object-contain"
                    >

                </div>

                <div class="text-center">

                    <p class="text-xs uppercase tracking-[0.25em] text-white/50 mb-2">
                        Scan & Pay
                    </p>

                    <p class="text-sm text-white/80 leading-relaxed">
                        Complete your payment using any UPI app and upload the screenshot below.
                    </p>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="p-6 lg:p-8">

                <!-- TOP -->
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 mb-8">

                    <div>

                        <p class="text-xs uppercase tracking-[0.25em] text-white/50 mb-2">
                            Course Enrollment
                        </p>

                        <h3 class="text-3xl font-bold font-headline">
                            Payment Summary
                        </h3>

                    </div>

                    <div class="bg-green-500/15 border border-green-400/20 text-green-200 px-4 py-2 rounded-full text-xs font-semibold flex items-center gap-2 h-fit">

                        <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>

                        Awaiting Payment

                    </div>

                </div>

                <!-- PRICING -->
                <div class="space-y-4">

                    {{-- Indian Pricing --}}
                    @if(($course->fee ?? 0) > 0)

                    <div class="bg-white/5 border border-white/10 rounded-2xl px-5 py-4 flex items-center justify-between">

                        <div>

                            <p class="text-sm text-white/60 mb-1">
                                Indian Registration
                            </p>

                            <h4 class="font-semibold text-lg">
                                INR Pricing
                            </h4>

                        </div>

                        <div class="text-right">

                            <p class="text-2xl font-bold">
                                ₹{{ number_format($course->fee) }}
                            </p>

                            @if(($course->early_bird_fee ?? 0) > 0)

                                <p class="text-xs text-secondary-container mt-1">
                                    Early Bird ₹{{ number_format($course->early_bird_fee) }}
                                </p>

                            @endif

                        </div>

                    </div>

                    @endif

                    {{-- International Pricing --}}
                    @if(!empty($internationalFees))

                        @foreach($internationalFees as $fee)

                            @if(!empty($fee['fee']) && $fee['fee'] > 0)

                            <div class="bg-white/5 border border-white/10 rounded-2xl px-5 py-4 flex items-center justify-between">

                                <div>

                                    <p class="text-sm text-white/60 mb-1">
                                        Abroad Registration
                                    </p>

                                    <h4 class="font-semibold text-lg">
                                        {{ $fee['currency'] }} Pricing
                                    </h4>

                                </div>

                                <div class="text-right">

                                    <p class="text-2xl font-bold">

                                        {{ $symbols[$fee['currency']] ?? $fee['currency'] }}
                                        {{ number_format($fee['fee']) }}

                                    </p>

                                    @if(!empty($fee['early_bird_fee']) && $fee['early_bird_fee'] > 0)

                                        <p class="text-xs text-secondary-container mt-1">

                                            Early Bird
                                            {{ $symbols[$fee['currency']] ?? $fee['currency'] }}
                                            {{ number_format($fee['early_bird_fee']) }}

                                        </p>

                                    @endif

                                </div>

                            </div>

                            @endif

                        @endforeach

                    @endif

                </div>

            </div>

        </div>

    </div>

</div>

            <!-- ERROR -->
            @error('payment_screenshot')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <!-- UPLOAD -->
            <div class="mb-6">
                <label class="text-sm font-semibold text-primary block mb-2">
                    Upload Payment Screenshot
                </label>

                <input type="file" name="payment_screenshot" id="paymentInput"
                    class="text-sm w-full border rounded-lg p-3" required>

                <img id="previewImage" class="mt-4 hidden rounded-lg max-h-36">
            </div>

            <!-- CTA -->
            <button type="submit"
                onclick="return validateCheckbox()"
                class="w-full bg-primary text-white py-4 rounded-lg text-sm font-bold uppercase hover:opacity-90">
                Confirm Payment
            </button>

        </div>
        </form>

    </div>

</div>
</section>

<script>
document.getElementById('paymentInput').addEventListener('change', function (e) {
    const file = e.target.files[0];
    const preview = document.getElementById('previewImage');

    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.classList.remove('hidden');
    }
});
</script>

<script>
const checkbox = document.getElementById('tagConfirm');
const qrSection = document.getElementById('qrSection');

checkbox.addEventListener('change', function () {
    if (this.checked) {
        qrSection.classList.remove('hidden');
    } else {
        qrSection.classList.add('hidden');
    }
});
</script>

@endsection