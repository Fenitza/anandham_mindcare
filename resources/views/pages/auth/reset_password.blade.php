@extends('layouts.hosp')

@section('content')

<main class="flex-grow flex items-center justify-center relative px-6 py-12">

<div class="relative z-10 w-full max-w-xl">
<div class="glass-panel rounded-xl border p-10">

<h2 class="text-2xl font-bold text-primary mb-2">Reset Password</h2>
<p class="text-sm text-on-surface-variant mb-6">
Enter your new password below.
</p>

@include('partials.alerts')

<form method="POST" action="{{ route('password.update') }}" class="space-y-6">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <!-- Email -->
    <div>
        <label class="text-xs uppercase text-on-surface-variant">Email</label>
        <input type="email" name="email" required
               class="w-full mt-2 border-b border-outline-variant bg-transparent py-2">
    </div>

    <!-- Password -->
    <div>
        <label class="text-xs uppercase text-on-surface-variant">New Password</label>
        <input type="password" name="password" required
               class="w-full mt-2 border-b border-outline-variant bg-transparent py-2">
    </div>

    <!-- Confirm -->
    <div>
        <label class="text-xs uppercase text-on-surface-variant">Confirm Password</label>
        <input type="password" name="password_confirmation" required
               class="w-full mt-2 border-b border-outline-variant bg-transparent py-2">
    </div>

    <!-- Submit -->
    <button type="submit"
        class="w-full py-3 bg-primary text-white rounded-lg">
        Reset Password
    </button>

</form>

</div>
</div>

</main>

@endsection