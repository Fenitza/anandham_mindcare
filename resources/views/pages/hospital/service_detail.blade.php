@extends('layouts.hosp')

@section('content')

<section class="bg-surface py-20">
    <div class="max-w-5xl mx-auto px-6">

        <!-- Image -->
        <div class="mb-10">
            <img 
                src="{{ asset($service['image']) }}" 
                alt="{{ $service['title'] }}"
                class="w-full h-80 object-cover rounded-xl shadow-md"
            >
        </div>

        <!-- Page Title -->
        <div class="mb-12 text-center">
            <h1 class="font-headline text-5xl text-primary mb-6">
                {{ $service['title'] }}
            </h1>

            <div class="w-24 h-1 bg-secondary mx-auto rounded-full"></div>
        </div>

        <!-- Description -->
        <div class="bg-white rounded-xl shadow-sm border border-outline-variant/20 p-8 lg:p-12">

            @foreach(explode("\n", trim($service['description'])) as $paragraph)

                @if(trim($paragraph) != '')
                    <p class="text-on-surface-variant text-lg leading-8 mb-6">
                        {{ trim($paragraph) }}
                    </p>
                @endif

            @endforeach

        </div>

    </div>
</section>

@endsection