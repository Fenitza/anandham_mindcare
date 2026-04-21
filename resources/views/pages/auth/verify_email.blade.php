@extends('layouts.hosp')

@section('content')

<main class="flex-grow flex items-center justify-center relative px-6 py-12">

<div class="w-full max-w-xl">
<div class="glass-panel rounded-xl border p-10 text-center">

<h2 class="text-2xl font-bold text-primary mb-3">
    Verify Your Email
</h2>

<p class="text-on-surface-variant text-sm mb-6">
    We’ve sent a verification link to your email address.  
    Please check your inbox and click the link to activate your account.
</p>

@include('partials.alerts')

<!-- Resend -->
<form method="POST" action="{{ route('verification.send') }}">
    @csrf

    <button type="submit"
        class="w-full py-3 bg-primary text-white rounded-lg">
        Resend Verification Email
    </button>
</form>

<!-- Logout -->
<div class="mt-6">
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="text-sm text-secondary font-semibold">
        Logout
    </button>
</form>
</div>

</div>
</div>

</main>

@endsection