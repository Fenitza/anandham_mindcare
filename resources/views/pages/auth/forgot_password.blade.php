@extends('layouts.hosp')

@section('content')

<main class="flex-grow flex items-center justify-center relative px-6 py-12 overflow-hidden">

<!-- Background -->
<div class="absolute inset-0 z-0">
    <img class="w-full h-full object-cover opacity-40 grayscale-[20%]"
         src="https://lh3.googleusercontent.com/aida-public/AB6AXuDl386Nev3ebvD96LaTtwUaSREnF2EGxU31QVM9I2VA_rBcL9LM-2i-2MDSbZeGU6DZTwJOq6gsyNCBwdtnIUCV9vnI-i-cXzznscaPrPH--S4GPCOvr5elgAkAU3Mpn5aattUCugH6I9uWzP6yDki8qPBC20dP-WcG7EqcbjOo3HlFusFV_91HE5Mp5AmkJG8djTOE2TOegIIGGNddQMXjJYSuFFtNUNecLjZy0Ylm5IX46rkK3_kHidyKh8KHT3kCxQ4buSDL9hnt"/>
</div>

<div class="relative z-10 w-full max-w-xl">
<div class="glass-panel rounded-xl border p-10">

<h2 class="text-2xl font-bold text-primary mb-2">Forgot Password</h2>
<p class="text-sm text-on-surface-variant mb-6">
Enter your email and we’ll send you a reset link.
</p>

@include('partials.alerts')

<form method="POST" action="{{ route('password.email') }}" class="space-y-6">
    @csrf

    <!-- Email -->
    <div>
        <label class="text-xs uppercase text-on-surface-variant">Email</label>
        <input type="email" name="email" required
               class="w-full mt-2 border-b border-outline-variant focus:border-secondary bg-transparent py-2">
    </div>

    <!-- Submit -->
    <button type="submit"
        class="w-full py-3 bg-primary text-white rounded-lg">
        Send Reset Link
    </button>

    <div class="text-center text-sm mt-4">
        <a href="{{ route('signin') }}" class="text-secondary font-semibold">
            Back to Login
        </a>
    </div>

</form>

</div>
</div>
</main>

@endsection