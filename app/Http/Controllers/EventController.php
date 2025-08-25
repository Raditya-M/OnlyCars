<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('event.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event = Event::all();
        return view('welcome', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|string',
            'location' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('cover_image')) {
            $Path = $request->file('cover_image')->store('images', 'public');
            $validateData['cover_image'] = $Path;
        }

        Event::create($validateData);
        return redirect('/');       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $event = Event::findOrFail($id);

    $validateData = $request->validate([
        'title' => 'required|string',
        'description' => 'required|string',
        'date' => 'required|string',
        'location' => 'required|string',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ]);

    if ($request->hasFile('cover_image')) {
        $Path = $request->file('cover_image')->store('images', 'public');
        $validateData['cover_image'] = $Path;
    }

    $event->update($validateData);
    return redirect('/');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect('/')->with('success', 'Event deleted successfully.');
    }
}
