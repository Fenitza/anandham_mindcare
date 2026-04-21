@extends('layouts.admin')
@section('title', 'Group Management')

@section('content')

<div class="pt-24 px-6 pb-10 max-w-7xl mx-auto space-y-8">

    <!-- HEADER + STATS -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-3xl font-bold text-primary">Group Management</h2>
            <p class="text-sm text-on-surface-variant mt-1">
                Manage clinical groups and user assignments
            </p>
        </div>

        <div class="flex gap-4">
            <div class="bg-white px-4 py-2 rounded-xl shadow-sm border text-sm">
                <span class="text-slate-400">Groups</span>
                <div class="font-bold text-primary">{{ $groups->count() }}</div>
            </div>
            <div class="bg-white px-4 py-2 rounded-xl shadow-sm border text-sm">
                <span class="text-slate-400">Users</span>
                <div class="font-bold text-primary">{{ $users->count() }}</div>
            </div>
        </div>
    </div>

    <!-- CREATE GROUP -->
    <div class="bg-gradient-to-r from-primary/5 to-transparent border border-primary/10 rounded-2xl p-5 flex items-center gap-4">

        <form method="POST" action="{{ route('admin.groups.store') }}" class="flex gap-3 w-full">
            @csrf

            <input type="text" name="name" placeholder="Create new group..."
                class="flex-1 bg-white border border-outline-variant/20 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-primary outline-none">

            <button class="px-5 py-2 bg-primary text-white rounded-lg text-sm font-medium hover:scale-105 transition">
                + Create
            </button>
        </form>

    </div>

    <!-- GROUP GRID -->
    <div class="grid md:grid-cols-2 gap-6">

        @foreach($groups as $group)

        <div class="group bg-white/80 backdrop-blur border border-outline-variant/10 rounded-2xl p-5 shadow-sm hover:shadow-lg transition-all duration-300">

            <!-- TOP BAR -->
            <div class="flex items-center justify-between mb-4">

                <!-- NAME EDIT -->
                <form method="POST" action="{{ route('admin.groups.update', $group->id) }}" class="flex items-center gap-2 flex-1">
                    @csrf

                    <input type="text" name="name"
                        value="{{ $group->name }}"
                        class="font-semibold text-lg text-primary bg-transparent border-b border-transparent focus:border-primary outline-none w-full">

                    <!-- SAVE -->
                    <button class="ml-2 opacity-0 group-hover:opacity-100 text-xs px-2 py-1 rounded-md bg-primary/10 text-primary hover:bg-primary/20 transition">
                        Save
                    </button>
                </form>

                <!-- ACTIONS -->
                <div class="flex items-center gap-3 ml-4">

                    <!-- DIVIDER -->
                    <div class="w-px h-4 bg-slate-300"></div>

                    <!-- DELETE -->
                    <form method="POST" action="{{ route('admin.groups.delete', $group->id) }}">
                        @csrf
                        <button class="opacity-0 group-hover:opacity-100 text-xs px-2 py-1 rounded-md text-red-500 hover:bg-red-50 transition">
                            Delete
                        </button>
                    </form>

                </div>

            </div>

            <!-- MEMBERS -->
            <div class="mb-4">
                <div class="text-xs text-slate-400 mb-2">
                    {{ $group->users->count() }} members
                </div>

                <div class="flex flex-wrap gap-2">

                    @forelse($group->users as $user)

                    <div class="flex items-center gap-2 bg-primary/10 px-2.5 py-1 rounded-full text-xs text-primary">

                        <!-- Avatar -->
                        <div class="w-5 h-5 rounded-full bg-primary/30 flex items-center justify-center text-[10px] font-bold">
                            {{ strtoupper(substr($user->name,0,1)) }}
                        </div>

                        <span>{{ $user->name }}</span>

                        <form method="POST" action="{{ route('admin.groups.removeUser', [$group->id, $user->id]) }}"method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-[10px] hover:text-red-500">
                                ✕
                            </button>
                        </form>

                    </div>

                    @empty
                        <span class="text-xs text-slate-400">No members yet</span>
                    @endforelse

                </div>
            </div>

            <!-- ADD USERS -->
            <form method="POST" action="{{ route('admin.groups.assign', $group->id) }}" class="space-y-2">

                @csrf

                <div class="text-xs text-slate-500">Add Members</div>

                <div class="border border-outline-variant/20 rounded-xl p-2 bg-surface-container-lowest max-h-32 overflow-y-auto">

                    @foreach($users as $user)
                        <label class="flex items-center gap-2 text-sm px-2 py-1 rounded hover:bg-primary/5 cursor-pointer">
                            <input type="checkbox" name="user_ids[]" value="{{ $user->id }}"
                                class="accent-primary">
                            {{ $user->name }}
                        </label>
                    @endforeach

                </div>

                <div class="flex justify-end">
                    <button class="px-3 py-1.5 bg-primary text-white rounded-md text-xs hover:bg-primary-container transition">
                        Add Users
                    </button>
                </div>

            </form>

        </div>

        @endforeach

    </div>

</div>

@endsection
