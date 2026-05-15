@extends('layouts.admin')
@section('title', 'Gallery - Anandham Mindcare')
@section('content')
<div class="pt-28 px-8 pb-12 space-y-12">
    @include('partials.alerts')
<div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
<div class="max-w-2xl">
<h2 class="text-4xl font-['Newsreader'] font-bold text-primary mb-4 leading-tight">Gallery</h2>

</div>
<div>
<a href="{{ route('admin.gallery.add') }}">
<button class="flex items-center space-x-3 bg-primary text-white px-8 py-4 rounded-xl font-['Work_Sans'] font-semibold shadow-xl hover:bg-primary-container transition-all group">
<span class="material-symbols-outlined group-hover:rotate-90 transition-transform" data-icon="add">add</span>
<span>Add New Media</span>
</button>
</a>
</div>
</div>

<!-- Gallery Grid (Bento Style & Layered Cards) -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

@forelse($galleries as $index => $gallery)

    {{-- NORMAL CARDS --}}
    @if($index != 3)
    <div class="group bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant/15 hover:shadow-2xl transition-all duration-500">
        <div class="relative h-64 overflow-hidden">
            <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                 src="{{ $gallery->media ? asset('storage/'.$gallery->media) : 'https://via.placeholder.com/400' }}" />

            <div class="absolute top-4 left-4">
                <span class="bg-primary/90 text-white px-3 py-1 rounded text-xs font-bold uppercase">
                    {{ $gallery->category ?? 'General' }}
                </span>
            </div>
        </div>

        <div class="p-8">
            <h3 class="text-2xl font-['Newsreader'] font-bold text-primary mb-3">
                {{ $gallery->name }}
            </h3>

            <!-- <p class="text-on-surface-variant text-sm font-['Work_Sans'] leading-relaxed mb-6 line-clamp-2">
                {{ $gallery->description }}
            </p> -->

            <div class="flex items-center justify-between pt-6 border-t border-outline-variant/10">
                <div class="flex items-center space-x-4">

                    <a href="{{ route('galleries.edit', $gallery->id) }}">
                        <button class="text-secondary hover:text-primary-container flex items-center space-x-1">
                            <span class="material-symbols-outlined text-lg">edit</span>
                            <span class="text-xs font-bold">Edit</span>
                        </button>
                    </a>

                    <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="text-error/70 hover:text-error flex items-center space-x-1">
                            <span class="material-symbols-outlined text-lg">delete</span>
                            <span class="text-xs font-bold">Delete</span>
                        </button>
                    </form>

                </div>

                <span class="text-[10px] text-outline font-bold uppercase tracking-widest">
                    {{ $gallery->created_at->format('M d') }}
                </span>
            </div>
        </div>
    </div>
    @endif


    {{-- BIG ASYMMETRIC CARD (4th item ONLY) --}}
    @if($index == 3)
    <div class="group bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant/15 hover:shadow-2xl transition-all duration-500 lg:col-span-2 flex flex-col md:flex-row">

        <div class="md:w-1/2 relative h-64 md:h-auto overflow-hidden">
            <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                 src="{{ $gallery->media ? asset('storage/'.$gallery->media) : 'https://via.placeholder.com/400' }}" />

            <div class="absolute top-4 left-4">
                <span class="bg-secondary text-white px-3 py-1 rounded text-xs font-bold uppercase">
                    {{ $gallery->category ?? 'General' }}
                </span>
            </div>
        </div>

        <div class="md:w-1/2 p-10 flex flex-col justify-center">
            <h3 class="text-3xl font-['Newsreader'] font-bold text-primary mb-4 italic">
                {{ $gallery->name }}
            </h3>

            <p class="text-on-surface-variant font-['Work_Sans'] leading-relaxed mb-8">
                {{ $gallery->description }}
            </p>

            <div class="flex items-center justify-between pt-8 border-t border-outline-variant/10 mt-auto">
                <div class="flex items-center space-x-6">

                    <a href="{{ route('galleries.edit', $gallery->id) }}">
                        <button class="text-secondary hover:text-primary-container flex items-center space-x-2">
                            <span class="material-symbols-outlined">edit</span>
                            <span class="font-bold">Edit Entry</span>
                        </button>
                    </a>

                    <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="text-error/70 hover:text-error flex items-center space-x-2">
                            <span class="material-symbols-outlined">delete</span>
                            <span class="font-bold">Remove</span>
                        </button>
                    </form>

                </div>
            </div>
        </div>

    </div>
    @endif

@endforeach


{{-- EMPTY STATE --}}
@if($galleries->isEmpty())
<div class="bg-surface-container-low border-2 border-dashed border-outline-variant/30 rounded-xl flex flex-col items-center justify-center p-12 col-span-3">
    <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center shadow-sm mb-4">
        <span class="material-symbols-outlined text-primary text-3xl">upload</span>
    </div>
    <p class="text-xl font-bold text-primary">No Galleries Yet</p>
    <p class="text-sm text-on-surface-variant mt-2">Start by adding a new gallery</p>
</div>
@endif

</div>
</div>
</div>

@endsection