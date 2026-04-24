@extends('layouts.user')
@section('title', 'User Dashboard - Anandham Mindcare')

@section('content')
<div class="max-w-3xl mx-auto py-20 px-6">

<h2 class="text-2xl font-bold text-primary mb-6">My Profile</h2>

@include('partials.alerts')

<form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
@csrf
<div>
    <label class="text-xs uppercase text-on-surface-variant">Name</label>
<input type="text" name="name" value="{{ $user->name }}" placeholder="Name"
    class="w-full border-b py-2 bg-transparent">
</div>

<div>
    <label class="text-xs uppercase text-on-surface-variant">Email</label>

    <input type="email"
        value="{{ $user->email }}"
        disabled
        class="w-full mt-2 border-b border-outline-variant bg-gray-100 py-2 cursor-not-allowed">

    <!-- Hidden field to still pass value if needed -->
    <input type="hidden" name="email" value="{{ $user->email }}">
</div>

<div>
    <label class="text-xs uppercase text-on-surface-variant">Phone</label>
<input type="text" name="phone" value="{{ $user->phone }}" placeholder="Phone"
    class="w-full border-b py-2 bg-transparent">
    </div>

<button class="bg-primary text-white px-6 py-3 rounded-lg">
    Update Profile
</button>

</form>
</div>
@endsection