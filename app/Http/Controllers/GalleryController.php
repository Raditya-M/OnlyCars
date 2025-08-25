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
        return view('gallery.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gallery = Gallery::all();
        return view('welcome2', compact('gallery'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|string',
            'image_dokumentasi' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image_dokumentasi')) {
            $path = $request->file('image_dokumentasi')->store('images', 'public');
            $validateData['image_dokumentasi'] = $path;
        }

        Gallery::create($validateData);
        return redirect('/-');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery = Gallery::findOrFail($id);

        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'image_dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_dokumentasi')) {
            $path = $request->file('image_dokumentasi')->store('images', 'public');
            $validateData['image_dokumentasi'] = $path;
        }

        $gallery->update($validateData);
        return redirect('/-');
    }

        

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect('/-');
    }
}
