<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Clinical Pathways</title>

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
@include('partials.header')
<body class="bg-surface font-body text-gray-800">

<div class="flex">

    {{-- SIDEBAR --}}
    <aside class="w-64 min-h-screen bg-white border-r p-5 hidden lg:block">

        <h2 class="text-xs font-bold uppercase text-gray-400 mb-4">Specializations</h2>

        @foreach($specializations as $spec)
            <a href="{{ request()->fullUrlWithQuery(['specialization' => $spec->id]) }}"
               class="flex items-center gap-2 p-2 rounded mb-1
               {{ request('specialization') == $spec->id ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-600' }}">

                <span class="material-symbols-outlined text-sm">{{ $spec->icon }}</span>
                {{ $spec->name }}
            </a>
        @endforeach

    </aside>

    {{-- MAIN --}}
    <main class="flex-1 p-8">

        {{-- HEADER --}}
        <h1 class="text-4xl font-bold text-primary mb-6">Clinical Pathways</h1>

        {{-- TABS --}}
        <div class="flex gap-6 border-b mb-10 overflow-x-auto">

            @php
                $types = ['All Courses', 'Free Modules', 'Premium Tracks', 'Specialised Fellowships'];
            @endphp

            @foreach($types as $type)
                <a href="{{ request()->fullUrlWithQuery(['type' => $type]) }}"
                   class="pb-3 border-b-2 whitespace-nowrap
                   {{ $selectedType == $type ? 'border-yellow-600 text-primary font-bold' : 'border-transparent text-gray-500' }}">
                    {{ $type }}
                </a>
            @endforeach

        </div>

        {{-- TIMELINE --}}
        <div class="relative">

            <div class="absolute left-6 top-0 bottom-0 w-px bg-gray-200 hidden md:block"></div>

            @foreach($timelineGroups as $group)

                <div class="mb-10">

                    {{-- Group Title --}}
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-xs font-bold">
                            {{ $group['label'] }}
                        </div>
                        <h2 class="text-xl font-bold text-primary">
                            {{ $group['title'] }}
                        </h2>
                    </div>

                    {{-- Courses --}}
                    @foreach($group['courses'] as $course)

                        <div class="bg-white border rounded-lg overflow-hidden shadow-sm mb-6 flex flex-col md:flex-row">

                            <img src="{{ asset('storage/' . $course->image) }}"
                            
                                 class="w-full md:w-64 h-48 object-cover">

                            <div class="p-6 flex-1">

                                <div class="flex items-center flex-wrap gap-2 mb-3">

    {{-- Category --}}
    <span class="inline-flex items-center text-xs font-medium bg-yellow-50 text-yellow-700 px-3 py-1 rounded-full border border-yellow-200">
        {{ $course->category }}
    </span>

    {{-- Course Type --}}
    <span class="inline-flex items-center text-xs font-medium bg-blue-50 text-blue-700 px-3 py-1 rounded-full border border-blue-200">
        {{ $course->type }}
    </span>

    {{-- Duration --}}
    <span class="inline-flex items-center gap-1 text-xs text-gray-600 ml-auto">
        <span class="material-symbols-outlined text-sm">schedule</span>
        {{ $course->duration }}
    </span>

</div>

                                <h3 class="text-xl font-bold text-primary mb-2">
                                    {{ $course->title }}
                                </h3>

                                <p class="text-sm text-gray-600 mb-4">
                                    {{ $course->description }}
                                </p>

                                <div class="flex gap-4">

                                <span class="inline-flex items-center text-xs font-medium bg-blue-50 text-blue-700 px-3 py-1 rounded-full border border-blue-200">
                                    {{ $course->price }}
                                </span>   
                                <a href="{{ route('courses.detail', $course->id) }}"
                                       class="bg-primary text-white px-4 py-2 text-xs rounded">
                                        Begin Module
                                    </a>

                                    

                                </div>

                            </div>
                        </div>

                    @endforeach

                </div>

            @endforeach

        </div>

    </main>

</div>

</body>
</html>