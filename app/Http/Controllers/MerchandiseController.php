<?php

namespace App\Http\Controllers;
use App\Models\Merchandise;

use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('merchandise.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $merchandise = Merchandise::all();
        return view('welcome3', compact('merchandise'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image_merch' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image_merch')) {
            $path = $request->file('image_merch')->store('images', 'public');
            $validateData['image_merch'] = $path;
        }

        Merchandise::create($validateData);
        return redirect('/--');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $merchandise = Merchandise::findOrFail($id);
        return view('merchandise.show', compact('merchandise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merchandise = Merchandise::findOrFail($id);
        return view('merchandise.edit', compact('merchandise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $merchandise = Merchandise::findOrFail($id);

        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image_merch' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_merch')) {
            $path = $request->file('image_merch')->store('images', 'public');
            $validateData['image_merch'] = $path;
        }

        $merchandise->update($validateData);
        return redirect('/--');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $merchandise = Merchandise::findOrFail($id);
        $merchandise->delete();
        return redirect('/--');
    }
}
