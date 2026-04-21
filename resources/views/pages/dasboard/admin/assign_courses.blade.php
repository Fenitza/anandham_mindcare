@extends('layouts.admin')
@section('title', 'Assign Specialised Courses')

@section('content')

<div class="pt-28 px-8 pb-12 max-w-5xl mx-auto">

    <!-- HEADER -->
    <div class="mb-10">
        <h2 class="text-3xl font-bold text-primary">Assign Specialised Courses</h2>
        <p class="text-on-surface-variant mt-1">
            Assign curated clinical programs to registered professionals only.
        </p>
    </div>

    <!-- FORM -->
    <form method="POST" action="{{ route('admin.users.assign.submit') }}">
        @csrf

       <!-- ASSIGNMENT ROW -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">

    <!-- ROLE -->
    <div>
        <label class="block text-xs font-semibold mb-2 text-primary uppercase tracking-wider">
            Role
        </label>

        <select name="role"
            class="w-full border border-outline-variant/30 rounded-lg p-3 bg-white text-sm focus:ring-2 focus:ring-primary outline-none">

            <option value="">All Roles</option>
            <option value="doctor">Doctors</option>
            <option value="student">Students</option>

        </select>
    </div>

    <!-- GROUPS -->
    <div>
        <label class="block text-xs font-semibold mb-2 text-primary uppercase tracking-wider">
            Groups
        </label>

        <select name="group_ids[]"
            multiple
            class="w-full border border-outline-variant/30 rounded-lg p-3 bg-white h-28 text-sm focus:ring-2 focus:ring-primary">

            @foreach($groups as $group)
                <option value="{{ $group->id }}">
                    {{ $group->name }} ({{ $group->users->count() }})
                </option>
            @endforeach

        </select>
    </div>

    <!-- USERS -->
    <div>
        <label class="block text-xs font-semibold mb-2 text-primary uppercase tracking-wider">
            Users
        </label>

        <select name="user_ids[]" multiple
            class="w-full border border-outline-variant/30 rounded-lg p-3 bg-white h-28 text-sm focus:ring-2 focus:ring-primary">

            @foreach($users as $user)
                <option value="{{ $user->id }}">
                    {{ $user->name }} ({{ ucfirst($user->role) }})
                </option>
            @endforeach

        </select>

    </div>

</div>

        <!-- COURSES -->
        <div class="mb-10">
            <label class="block text-sm font-semibold mb-3 text-primary">
                Specialised Courses
            </label>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-h-[400px] overflow-y-auto p-4 bg-surface-container-low rounded-xl border border-outline-variant/10">

                @foreach($courses as $course)

                <label class="flex items-start gap-3 p-3 rounded-lg hover:bg-white cursor-pointer border border-transparent hover:border-outline-variant/20 transition">

                    <input type="checkbox"
                        name="course_ids[]"
                        value="{{ $course->id }}"
                        class="mt-1 accent-primary">

                    <div>
                        <p class="font-semibold text-primary">
                            {{ $course->title }}
                        </p>

                        <p class="text-xs text-on-surface-variant">
                            {{ $course->description ?? 'Specialised Module' }}
                        </p>

                        <p class="text-[10px] text-secondary mt-1 uppercase tracking-wider">
                            Capacity: {{ $course->capacity ?? '—' }}
                        </p>
                    </div>

                </label>

                @endforeach

            </div>
        </div>

        <!-- ACTION -->
        <div class="flex justify-end">
            <button type="submit"
                class="px-6 py-3 bg-primary text-white rounded-lg font-medium hover:bg-primary-container transition">

                Assign Courses

            </button>
        </div>

    </form>

</div>

@endsection