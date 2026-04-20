<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('pages.dasboard.admin.gallery', compact('galleries'));
    }

    public function publicGallery()
{
    $galleries = Gallery::latest()->get();

    $categories = Gallery::select('category')
        ->whereNotNull('category')
        ->distinct()
        ->pluck('category');

    return view('pages.hospital.gallery', compact('galleries', 'categories'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'media' => 'nullable|file|mimes:jpg,jpeg,png,mp4,pdf,webp|max:2048',
            'category' => 'nullable|string|max:255',
        ]);

        $mediaPath = null;

        if ($request->hasFile('media')) {
            $mediaPath = $request->file('media')->store('galleries', 'public');
        }

        Gallery::create([
            'name' => $request->name,
            'description' => $request->description,
            'media' => $mediaPath,
            'category' => $request->category,
        ]);

        return redirect()->route('admin.gallery')->with('success', 'Gallery entry created successfully');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('pages.dasboard.admin.add_gallery', compact('gallery'));
    }

    public function update(Request $request, $id)
{
    try {
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'media' => 'nullable|file|mimes:jpg,jpeg,png,mp4,pdf,webp|max:2048',
        'category' => 'nullable|string|max:255',
    ]);

    $gallery = Gallery::findOrFail($id);

    // Handle file upload
    if ($request->hasFile('media')) {

        if ($gallery->media && \Storage::disk('public')->exists($gallery->media)) {
            \Storage::disk('public')->delete($gallery->media);
        }

        $gallery->media = $request->file('media')->store('galleries', 'public');
    }

    // Update other fields
    $gallery->name = $request->name;
    $gallery->description = $request->description;
    $gallery->category = $request->category;

    $gallery->save();

    return redirect()->route('admin.gallery')
        ->with('success', 'Gallery updated successfully');

} catch (\Exception $e) {
    DB::rollback();
         dd($e->getMessage());
}
}
    

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('admin.gallery')->with('success', 'Gallery deleted successfully');
    }
}
