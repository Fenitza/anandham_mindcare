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
            Upcoming Courses
        </h1>

        <!-- TABS -->
        <div class="flex gap-4 sm:gap-6 border-b mb-8 overflow-x-auto">

            @php $types = ['All Courses', 'Free', 'Premium', 'Specialised']; @endphp

            @foreach($types as $type)
                <a href="{{ request()->fullUrlWithQuery(['type' => $type]) }}"
                   class="pb-3 border-b-2 whitespace-nowrap text-sm sm:text-base
                   {{ $selectedType == $type ? 'border-yellow-600 text-primary font-bold' : 'border-transparent text-gray-500' }}">
                    {{ $type }}
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
                            <img src="{{ asset('storage/' . $course->image) }}"
                                 class="w-full md:w-64 h-48 md:h-auto object-cover">

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

                                <!-- Footer -->
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">

                                    <span class="text-xs bg-blue-50 text-blue-700 px-3 py-1 rounded">
                                        {{ $course->price }}
                                    </span>

                                    <a href="{{ route('courses.detail', $course->id) }}"
                                       class="bg-primary text-white px-4 py-2 text-xs rounded text-center">
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

<!-- 🔥 SCRIPT -->
<script>
function toggleFilter() {
    const sidebar = document.getElementById('filterSidebar');
    const overlay = document.getElementById('overlay');

    sidebar.classList.toggle('-translate-x-full');
    overlay.classList.toggle('hidden');
}
</script>

</body>
</html>