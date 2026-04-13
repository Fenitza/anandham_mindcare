@extends('layouts.admin')
@section('title', isset($blog) ? 'Edit Blog - Anandham Mindcare' : 'Create Blog - Anandham Mindcare')

@section('content')

<div class="pt-28 px-8 pb-12 space-y-12">

<form 
    action="{{ isset($blog) ? route('blogs.update', $blog->id) : route('blogs.store') }}"
    method="POST"
    enctype="multipart/form-data"
    class="space-y-6"
>
@csrf
@if(isset($blog))
    @method('PUT')
@endif

<div class="grid md:grid-cols-2 gap-10">

<!-- Blog Title -->
<div class="space-y-2">
<label class="block text-sm font-label font-semibold text-primary uppercase tracking-wider">Blog Title</label>
<input 
    name="name"
    value="{{ old('name', $blog->name ?? '') }}"
    class="w-full bg-surface-container-low border-none border-b-2 border-transparent focus:ring-0 focus:border-secondary transition-all py-3 px-4 font-body text-on-surface placeholder:text-outline/60" 
    placeholder="Enter blog title..." 
    type="text"
/>
@error('name') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
</div>

<!-- Category -->
<div class="space-y-2">
<label class="block text-sm font-label font-semibold text-primary uppercase tracking-wider">Blog Category</label>
<input 
    name="category"
    value="{{ old('category', $blog->category ?? '') }}"
    class="w-full bg-surface-container-low border-none border-b-2 border-transparent focus:ring-0 focus:border-secondary transition-all py-3 px-4 font-body text-on-surface placeholder:text-outline/60" 
    placeholder="Enter blog category..." 
    type="text"
/>
</div>

</div>

<!-- Description -->
<div class="space-y-2">
<label class="block text-sm font-label font-semibold text-primary uppercase tracking-wider">Media Description</label>
<textarea 
    name="description"
    class="w-full bg-surface-container-low border-none border-b-2 border-transparent focus:ring-0 focus:border-secondary transition-all py-3 px-4 font-body text-on-surface placeholder:text-outline/60" 
    placeholder="Detailed captions and clinical context..." 
    rows="4"
>{{ old('description', $blog->description ?? '') }}</textarea>
</div>

<!-- Media Upload -->
<div class="space-y-4">
<div class="flex flex-col items-center mb-10">
    
    <div class="relative group">
        <div class="w-full max-w-3xl h-64 rounded-xl border-2 border-dashed border-outline-variant overflow-hidden flex items-center justify-center bg-surface-container-low">

            <!-- Preview -->
            <img 
            id="blogImagePreview"
            src="{{ isset($blog) && $blog->media 
                    ? asset('storage/'.$blog->media) 
                    : '' }}"
            class="w-full h-full object-cover {{ isset($blog) && $blog->media ? '' : 'hidden' }}"
            />

            <span id="blogImagePlaceholder"
            class="text-outline text-sm {{ isset($blog) && $blog->media ? 'hidden' : '' }}">
            Upload Blog Media
            </span>
        </div>

        <!-- Upload Button -->
        <button type="button"
            id="uploadBlogImageBtn"
            class="absolute bottom-3 right-3 bg-secondary text-white px-4 py-2 rounded-lg text-xs font-bold shadow-lg hover:scale-105 transition">
            Upload
        </button>

        <!-- Hidden Input -->
        <input 
            type="file" 
            name="media"
            id="blogImageInput"
            accept="image/*"
            class="hidden"
        >
    </div>
</div>

{{-- Show existing media (only in edit) --}}
@if(isset($blog) && $blog->media)
<div class="mt-4">
<p class="text-sm text-primary mb-2">Current Media:</p>
<img src="{{ asset('storage/' . $blog->media) }}" class="w-40 rounded shadow">
</div>
@endif

</div>

<!-- Buttons -->
<div class="flex flex-col md:flex-row items-center justify-end gap-6 pt-6">

<button type="button"
class="w-full md:w-auto px-8 py-3 text-on-surface-variant font-label font-semibold hover:text-primary transition-colors border-b border-transparent hover:border-primary">
Discard Draft
</button>

<button type="submit"
class="w-full md:w-auto px-12 py-4 bg-gradient-to-r from-primary to-primary-container text-white font-label font-bold tracking-wide rounded-md shadow-lg shadow-primary/20 hover:scale-[1.02] transition-all duration-200 flex items-center justify-center gap-3">

<span>{{ isset($blog) ? 'Update Entry' : 'Finalize Entry' }}</span>
<span class="material-symbols-outlined text-xl">verified</span>

</button>

</div>

</form>

</div>

@endsection