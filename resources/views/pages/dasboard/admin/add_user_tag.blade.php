@extends('layouts.admin')
@section('title', 'Manage Tags')

@section('content')

<div class="pt-24 px-6 pb-10 max-w-5xl mx-auto">

    <div class="mb-8">
        <h2 class="text-3xl font-bold text-primary">
            Manage Tags
        </h2>

        <p class="text-sm text-on-surface-variant mt-2">
            Create professional categories used for course eligibility.
        </p>
    </div>

    @include('partials.alerts')

    <div class="grid lg:grid-cols-3 gap-6">

        <!-- CREATE TAG -->
        <div class="lg:col-span-1">

            <div class="bg-white rounded-xl border p-6 shadow-sm">

                <h3 class="text-lg font-semibold text-primary mb-4">
                    Add New Tag
                </h3>

                <form action="{{ route('admin.tags.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2">
                            Tag Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            class="w-full border rounded-lg px-4 py-3"
                            placeholder="Doctor"
                            required
                        >
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-primary text-white py-3 rounded-lg font-medium"
                    >
                        Create Tag
                    </button>

                </form>

            </div>

        </div>

        <!-- TAG LIST -->
        <div class="lg:col-span-2">

            <div class="bg-white rounded-xl border shadow-sm overflow-hidden">

                <div class="px-6 py-4 border-b">
                    <h3 class="font-semibold text-primary">
                        Existing Tags
                    </h3>
                </div>

                <table class="w-full">

                    <thead class="bg-gray-50">
    <tr>
        <th class="text-left px-6 py-3 text-sm">ID</th>
        <th class="text-left px-6 py-3 text-sm">Tag Name</th>
        <th class="text-left px-6 py-3 text-sm">Created</th>
        <th class="text-left px-6 py-3 text-sm">Actions</th>
    </tr>
</thead>

                    <tbody>

@forelse($tags as $tag)

<tr class="border-t">

    <td class="px-6 py-4">
        {{ $tag->id }}
    </td>

    <td class="px-6 py-4">

        <form
            action="{{ route('admin.tags.update', $tag->id) }}"
            method="POST"
            class="flex items-center gap-2"
        >
            @csrf
            @method('PUT')

            <input
                type="text"
                name="name"
                value="{{ $tag->name }}"
                class="border rounded-lg px-3 py-2 w-full"
                required
            >

            <button
                type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm"
            >
                Save
            </button>

        </form>

    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        {{ $tag->created_at?->format('d M Y') }}
    </td>

    <td class="px-6 py-4">

        <form
            action="{{ route('admin.tags.destroy', $tag->id) }}"
            method="POST"
            onsubmit="return confirm('Delete this tag?')"
        >
            @csrf
            @method('DELETE')

            <button
                type="submit"
                class="px-4 py-2 bg-red-600 text-white rounded-lg text-sm"
            >
                Delete
            </button>

        </form>

    </td>

</tr>

@empty

<tr>
    <td colspan="4" class="text-center py-8 text-gray-500">
        No tags created yet.
    </td>
</tr>

@endforelse

</tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection