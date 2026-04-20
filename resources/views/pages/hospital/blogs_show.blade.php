@extends('layouts.hosp')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-20">

    <h1 class="text-4xl font-bold text-primary mb-6">
        {{ $blog->name }}
    </h1>

    @if($blog->media)
        <img src="{{ asset('storage/'.$blog->media) }}"
             class="w-full rounded-xl mb-6">
    @endif

    <p class="text-on-surface-variant leading-relaxed">
        {{ $blog->description }}
    </p>

</div>

@endsection