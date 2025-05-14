<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming form data
        $validated = $request->validate([
            'title'         => 'required|string|max:255',
            'organizer'     => 'nullable|string|max:255',
            'description'   => 'required|string',
            'category_id'   => 'required|integer',
            'event_type'    => 'required|string|in:in-person,online,hybrid',
            'image'         => 'required|image|max:2048',
            'start_date'    => 'required|date',
            'start_time'    => 'required',
            'venue_name'    => 'nullable|string|max:255',
            'address'       => 'nullable|string|max:255',
            'tickets'       => 'nullable|array',
            'agree_terms'   => 'required|accepted',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('event-images', 'public');
            $validated['image_path'] = $imagePath;
        }

        if ($request->has('tickets')) {
            $validated['tickets'] = json_encode($request->input('tickets'));
        }

        $validated['is_published'] = true;

        Event::create($validated);

        return redirect()->back()->with('success', 'Event published successfully!');
    }
}
