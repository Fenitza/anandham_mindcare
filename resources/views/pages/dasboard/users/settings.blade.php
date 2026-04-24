@extends('layouts.user')
@section('title', 'User Dashboard - Anandham Mindcare')

@section('content')
<div class="max-w-3xl mx-auto py-20 px-6">

<h2 class="text-2xl font-bold text-primary mb-6">Account Settings</h2>

@include('partials.alerts')

<form method="POST" action="{{ route('settings.password') }}" class="space-y-6">
@csrf

<input type="password" name="current_password" placeholder="Current Password"
    class="w-full border-b py-2 bg-transparent">

<input type="password" name="password" placeholder="New Password"
    class="w-full border-b py-2 bg-transparent">

<input type="password" name="password_confirmation" placeholder="Confirm Password"
    class="w-full border-b py-2 bg-transparent">

<button class="bg-primary text-white px-6 py-3 rounded-lg">
    Update Password
</button>

</form>

</div>
@endsection