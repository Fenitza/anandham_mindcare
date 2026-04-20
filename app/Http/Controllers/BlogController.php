<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('pages.dasboard.admin.blogs', compact('blogs'));
    }

    public function publicBlogs()
{
    $blogs = Blog::latest()->paginate(6);

    $categories = Blog::select('category')
        ->whereNotNull('category')
        ->distinct()
        ->pluck('category');

    return view('pages.hospital.blogs', compact('blogs','categories'));
}

    public function show($id)
{
    $blog = Blog::findOrFail($id);

    return view('pages.hospital.blogs_show', compact('blog'));
}

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'media' => 'nullable|file|mimes:jpg,jpeg,png,mp4,pdf,webp|max:2048',
            'category' => 'nullable|string|max:255',
        ]);
        // dd($request->all());

        $mediaPath = null;

        if ($request->hasFile('media')) {
            $mediaPath = $request->file('media')->store('blogs', 'public');
        }

        Blog::create([
            'name' => $request->name,
            'description' => $request->description,
            'media' => $mediaPath,
            'category' => $request->category,
        ]);

        return redirect()->back()->with('success', 'Blog created successfully');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.dasboard.admin.add_blog', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'media' => 'nullable|file|mimes:jpg,jpeg,png,mp4,pdf,webp|max:2048',
            'category' => 'nullable|string|max:255',
        ]);

        $blog = Blog::findOrFail($id);
        $mediaPath = $blog->media;

        if ($request->hasFile('media')) {
            $mediaPath = $request->file('media')->store('blogs', 'public');
        }

         $blog->update([
            'name' => $request->name,
            'description' => $request->description,
            'media' => $mediaPath,
            'category' => $request->category,
        ]);

        return redirect()->route('admin.blogs')->with('success', 'Blog updated successfully');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs')->with('success', 'Blog deleted successfully');
    }
}