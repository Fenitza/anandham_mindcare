<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Courses List - Anandham Mindcare Foundation</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@200..800&family=Work+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#002555",
                        secondary: "#755b00",
                        surface: "#f7f9fc"
                    },
                    fontFamily: {
                        headline: ["Newsreader", "serif"],
                        body: ["Work Sans", "sans-serif"]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-surface font-body text-gray-800">

@include('partials.course.header')

<div class="flex">

    <!-- 🔥 MOBILE FILTER BUTTON -->
    <div class="lg:hidden fixed bottom-4 right-4 z-50">
        <button onclick="toggleFilter()"
            class="bg-primary text-white px-4 py-3 rounded-full shadow-lg">
            Filters
        </button>
    </div>

    <!-- 🔷 SIDEBAR -->
    <aside id="filterSidebar"
        class="fixed lg:static top-0 left-0 h-full w-72 bg-white border-r p-5 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-50 overflow-y-auto">

        <!-- Close Button (Mobile) -->
        <div class="flex justify-between items-center mb-6 lg:hidden">
            <h2 class="font-bold text-primary">Filters</h2>
            <button onclick="toggleFilter()">✕</button>
        </div>

        <form method="GET">

            <!-- Clear -->
            <div class="mb-6">
                <a href="{{ route('courses.list') }}"
                   class="block w-full text-center text-sm font-medium text-red-600 border border-red-200 py-2 rounded hover:bg-red-50 transition">
                    Clear All Filters
                </a>
            </div>

            <input type="hidden" name="type" value="{{ request('type') }}">

            <h2 class="text-xs font-bold uppercase text-gray-400 mb-4">Specializations</h2>

            @foreach($specializations as $spec)

                <div class="mb-4">

                    <a href="{{ request()->fullUrlWithQuery(['specialization' => $spec->specialisation]) }}"
                       class="block font-semibold mb-2
                       {{ request('specialization') == $spec->specialisation ? 'text-blue-700' : '' }}">
                        {{ ucfirst($spec->specialisation) }}
                    </a>

                    @if(isset($tagsBySpecialization[$spec->specialisation]))
                        <div class="ml-3 space-y-1">

                            @foreach($tagsBySpecialization[$spec->specialisation] as $tag)
                                <label class="flex items-center gap-2 text-sm text-gray-600">

                                    <input type="checkbox"
                                           name="tags[]"
                                           value="{{ $tag->id }}"
                                           onchange="this.form.submit()"
                                           {{ in_array($tag->id, request('tags', [])) ? 'checked' : '' }}>

                                    {{ ucfirst($tag->name) }}

                                </label>
                            @endforeach

                        </div>
                    @endif

                </div>

            @endforeach

        </form>

    </aside>

    <!-- 🔷 OVERLAY (Mobile) -->
    <div id="overlay"
         onclick="toggleFilter()"
         class="fixed inset-0 bg-black/40 hidden z-40 lg:hidden"></div>

    <!-- 🔷 MAIN -->
    <main class="flex-1 p-4 sm:p-6 lg:p-8">

        <!-- HEADER -->
<h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-primary mb-6">
    Courses List
</h1>

<!-- ENROLLMENT STATUS TABS -->
<div class="flex gap-4 sm:gap-6 border-b mb-8 overflow-x-auto">

    @php
        $statuses = [
            'ongoing' => 'Ongoing',
            'upcoming' => 'Upcoming',
            'completed' => 'Completed'
        ];
    @endphp

    @foreach($statuses as $key => $label)

        <a href="{{ request()->fullUrlWithQuery(['status' => $key]) }}"
           class="pb-3 border-b-2 whitespace-nowrap text-sm sm:text-base transition-all
           {{ $selectedStatus == $key
                ? 'border-yellow-600 text-primary font-bold'
                : 'border-transparent text-gray-500 hover:text-primary' }}">

            {{ $label }}

        </a>

    @endforeach

</div>

        @php
            $hasCourses = collect($timelineGroups)->flatMap(fn($g) => $g['courses'])->isNotEmpty();
        @endphp

        <!-- 🔷 TIMELINE -->
        <div class="relative">

            <!-- Vertical line (desktop only) -->
            <div class="absolute left-6 top-0 bottom-0 w-px bg-gray-200 hidden md:block"></div>

            @foreach($timelineGroups as $group)

                @if(collect($group['courses'])->isEmpty()) @continue @endif

                <div class="mb-10">

                    <!-- Title -->
                    <div class="flex items-center gap-3 sm:gap-4 mb-6">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-blue-100 rounded-full flex items-center justify-center text-xs font-bold">
                            {{ $group['label'] }}
                        </div>
                        <h2 class="text-lg sm:text-xl font-bold text-primary">
                            {{ $group['title'] }}
                        </h2>
                    </div>

                    <!-- Courses -->
                    @foreach($group['courses'] as $course)

                        <div class="bg-white border rounded-lg overflow-hidden shadow-sm mb-6 flex flex-col md:flex-row">

                            <!-- Image -->
                            <img
                                src="{{ asset('storage/' . $course->image) }}"
                                alt="{{ $course->title }}"
                                onclick="openImage(this.src)"
                                class="w-full md:w-64 h-48 md:h-auto object-cover cursor-pointer hover:opacity-90 transition">
                            <!-- Content -->
                            <div class="p-4 sm:p-6 flex-1">

                                <!-- Tags -->
                                <div class="flex flex-wrap gap-2 mb-3">

                                    <span class="text-xs bg-yellow-50 text-yellow-700 px-2 py-1 rounded">
                                        {{ $course->category }}
                                    </span>

                                    <span class="text-xs bg-blue-50 text-blue-700 px-2 py-1 rounded">
                                        {{ $course->type }}
                                    </span>

                                    @foreach($course->tags as $tag)
                                        <span class="text-xs bg-green-50 text-green-700 px-2 py-1 rounded">
                                            {{ ucfirst($tag) }}
                                        </span>
                                    @endforeach

                                </div>

                                <!-- Title -->
                                <h3 class="text-lg sm:text-xl font-bold text-primary mb-2">
                                    {{ $course->title }}
                                </h3>

                                <!-- Description -->
                                <p class="text-sm text-gray-600 mb-4">
                                    {{ Str::limit($course->description, 120) }}
                                </p>

                                <!-- FOOTER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mt-4">

    
    <!-- PRICE SECTION -->
<div class="flex flex-wrap items-center gap-2">

    @php

        $indianPricing = [];

if (!empty($course->indian_pricing)) {

    $indianPricing = is_array($course->indian_pricing)
        ? $course->indian_pricing
        : json_decode($course->indian_pricing, true);
}

$baseFee = (float) (
    $indianPricing['fee']
    ?? 0
);

$internationalFees = [];

if (!empty($course->international_pricing)) {

    $internationalFees = is_array($course->international_pricing)
        ? $course->international_pricing
        : json_decode($course->international_pricing, true);
}

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
 

    {{-- INDIA BASE --}}
    <div class="flex flex-wrap gap-3">

    {{-- INDIA --}}
    <div class="min-w-[180px] rounded-xl border border-primary/10 bg-primary/5 p-3">

        <div class="flex justify-between items-center mb-2">
            <span class="text-xs font-bold uppercase text-primary/60">
                🇮🇳 India
            </span>

            <span class="font-bold text-primary">
                ₹{{ number_format($baseFee) }}
            </span>
        </div>

        @if(!empty($indianPricing['offers']))

            <div class="space-y-1 border-t border-primary/10 pt-2">

                @foreach($indianPricing['offers'] as $savedOffer)

                    @php
                        $offer = \App\Models\Offer::find(
                            $savedOffer['offer_id'] ?? null
                        );
                    @endphp

                    @if($offer)

                        @php
                            $discount =
                                $offer->discount_type === 'percentage'
                                ? ($baseFee * $offer->discount_value) / 100
                                : $offer->discount_value;

                            $finalPrice =
                                max($baseFee - $discount, 0);
                        @endphp

                        <div class="flex justify-between text-xs">

                            <span class="text-gray-600">
                                {{ $offer->name }}
                            </span>

                            <span class="font-semibold text-green-700">
                                ₹{{ number_format($finalPrice) }}
                            </span>

                        </div>

                    @endif

                @endforeach

            </div>

        @endif

    </div>

    {{-- INTERNATIONAL --}}
    @foreach($internationalFees as $fee)

        @php
            $symbol =
                $symbols[$fee['currency']]
                ?? $fee['currency'];

            $basePrice =
                (float) ($fee['fee'] ?? 0);
        @endphp

        @if($basePrice > 0)

            <div class="min-w-[180px] rounded-xl border border-yellow-200 bg-yellow-50 p-3">

                <div class="flex justify-between items-center mb-2">

                    <span class="text-xs font-bold uppercase text-yellow-700">
                        {{ $fee['currency'] }}
                    </span>

                    <span class="font-bold text-yellow-800">
                        {{ $symbol }}{{ number_format($basePrice) }}
                    </span>

                </div>

                @if(!empty($fee['offers']))

                    <div class="space-y-1 border-t border-yellow-200 pt-2">

                        @foreach($fee['offers'] as $savedOffer)

                            @php
                                $offer = \App\Models\Offer::find(
                                    $savedOffer['offer_id'] ?? null
                                );
                            @endphp

                            @if($offer)

                                @php
                                    $discount =
                                        $offer->discount_type === 'percentage'
                                        ? ($basePrice * $offer->discount_value) / 100
                                        : $offer->discount_value;

                                    $finalPrice =
                                        max($basePrice - $discount, 0);
                                @endphp

                                <div class="flex justify-between text-xs">

                                    <span class="text-gray-600">
                                        {{ $offer->name }}
                                    </span>

                                    <span class="font-semibold text-green-700">
                                        {{ $symbol }}{{ number_format($finalPrice) }}
                                    </span>

                                </div>

                            @endif

                        @endforeach

                    </div>

                @endif

            </div>

        @endif

    @endforeach

</div>

</div>

                                    {{-- BUTTON --}}
                                    <a href="{{ route('courses.detail', $course->id) }}"
                                    class="bg-primary text-white px-4 py-2 text-xs rounded text-center hover:opacity-90 transition">
                                        Details
                                    </a>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            @endforeach

            <!-- Empty -->
            @if(!$hasCourses)
                <div class="text-center py-20">
                    <span class="material-symbols-outlined text-5xl text-gray-300 mb-4">
                        school
                    </span>

                    <h2 class="text-xl font-semibold text-gray-600 mb-2">
                        No courses available
                    </h2>

                    <p class="text-sm text-gray-500">
                        Try changing filters or check back later.
                    </p>
                </div>
            @endif

        </div>

    </main>

</div>

<!-- Image Preview Modal -->
<div
    id="imageModal"
    class="fixed inset-0 bg-black/95 hidden z-[9999] overflow-auto">

    <!-- Close Button -->
    <button
        onclick="closeImage()"
        class="fixed top-4 right-5 text-white text-5xl z-[10000]">
        &times;
    </button>

    <!-- Image Container -->
    <div
        class="min-h-screen flex items-center justify-center p-4">

        <img
            id="modalImage"
            src=""
            alt=""
            class="max-w-none cursor-zoom-in select-none"
            style="
                transform: scale(1);
                transform-origin: center center;
                transition: transform .2s ease;
            ">
    </div>

</div>

<!-- 🔥 SCRIPT -->
<script>
function toggleFilter() {
    const sidebar = document.getElementById('filterSidebar');
    const overlay = document.getElementById('overlay');

    sidebar.classList.toggle('-translate-x-full');
    overlay.classList.toggle('hidden');
}
</script>

<script>

let currentZoom = 1;

function toggleFilter() {
    const sidebar = document.getElementById('filterSidebar');
    const overlay = document.getElementById('overlay');

    sidebar.classList.toggle('-translate-x-full');
    overlay.classList.toggle('hidden');
}

function openImage(src) {

    currentZoom = 1;

    const modal = document.getElementById('imageModal');
    const image = document.getElementById('modalImage');

    image.src = src;
    image.style.transform = 'scale(1)';

    modal.classList.remove('hidden');

    document.body.style.overflow = 'hidden';
}

function closeImage() {

    document.getElementById('imageModal')
        .classList.add('hidden');

    document.body.style.overflow = 'auto';
}

/*
|--------------------------------------------------------------------------
| Mouse Wheel Zoom
|--------------------------------------------------------------------------
*/

document.addEventListener('DOMContentLoaded', () => {

    const image = document.getElementById('modalImage');

    image.addEventListener('wheel', function(e) {

        e.preventDefault();

        if (e.deltaY < 0) {
            currentZoom += 0.2;
        } else {
            currentZoom -= 0.2;
        }

        currentZoom = Math.max(1, Math.min(currentZoom, 5));

        image.style.transform = `scale(${currentZoom})`;

    });

    /*
    |--------------------------------------------------------------------------
    | Double Click Zoom
    |--------------------------------------------------------------------------
    */

    image.addEventListener('dblclick', () => {

        if (currentZoom === 1) {
            currentZoom = 2;
        } else {
            currentZoom = 1;
        }

        image.style.transform = `scale(${currentZoom})`;
    });

});
</script>

</body>
</html>