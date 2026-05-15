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
<div class="max-w-5xl mx-auto">

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
        <div class="space-y-8">

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

            <div class="mb-4">
                <label class="flex items-center gap-2 text-sm text-gray-700">
                    <input type="checkbox" id="tagConfirm" class="w-4 h-4">

                    @if(count($tagNames))
                        I confirm I belong to 
                        <span class="font-semibold text-primary">
                            {{ implode(' / ', array_map('ucfirst', $tagNames)) }}
                        </span>
                        category
                    @else
                        I confirm I meet the course eligibility
                    @endif
                </label>
            </div>

            <!-- QR + PRICE -->
            <div id="qrSection" class="flex gap-6 items-center mb-8 hidden">

                <!-- QR -->
                <div class="p-3 border rounded-xl">
                    <img 
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-0ufG4JFtGRisSfArbMQAayKgKhFuaAV0saktWrptPqQ85Zz4EX_IfQ861qLmgsuAdt9Ng9sUEtBpVpjsLqN9-IZ8TdvVmYWqH15uMF7K7GG3ItGZ9lmeBj4JnNnKsXPwjaJVM1yIo1pgUxm3TnYPebWhvJkMmgFdmyCujHQUa9RM2jV0cTO0PFzQVA1bayXMGeAlQ2QvRHsCUWNmW2V8zFqiGmpzaRH5UYtfiecgGC0WUVKzpBP23_y8ftvd6cJRYSE1DVxC5k"
                        class="w-36 h-36 object-contain"
                    >
                </div>

                <!-- PRICE -->
                <div class="flex-1 text-base space-y-3">
                    <div class="flex justify-between">
                        <span>Fee</span>
                        <span class="font-semibold">₹ {{ number_format($course->fee ?? 0) }}</span>
                    </div>

                    <div class="flex justify-between text-xl font-bold border-t pt-3">
                        <span>Total</span>
                        <span class="text-secondary">₹ {{ number_format($course->fee ?? 0) }}</span>
                    </div>

                    <p class="text-xs text-green-600 flex items-center gap-1">
                        ● Waiting for payment
                    </p>
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