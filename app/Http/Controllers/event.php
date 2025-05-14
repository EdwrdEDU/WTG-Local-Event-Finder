namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EventController extends Controller
{
    public function fetchEvents($category)
{
    $segmentMap = [
        'music' => 'KZFzniwnSyZfZ7v7nJ',
        'sports' => 'KZFzniwnSyZfZ7v7nE',
        'arts' => 'KZFzniwnSyZfZ7v7na',
        'miscellaneous' => 'KZFzniwnSyZfZ7v7n1',
    ];

    $segmentId = $segmentMap[strtolower($category)] ?? null;

    if (!$segmentId) {
        return response()->json(['events' => []]);
    }

    $response = Http::get('https://app.ticketmaster.com/discovery/v2/events.json', [
        'apikey' => env('TICKETMASTER_API_KEY'),
        'segmentId' => $segmentId,
        'size' => 10,
    ]);

    $events = $response->json()['_embedded']['events'] ?? [];

    // Prepare events data
    $formattedEvents = array_map(function ($event) {
        return [
            'name' => $event['name'],
            'date' => $event['dates']['start']['localDate'] ?? 'N/A',
            'venue' => $event['_embedded']['venues'][0]['name'] ?? 'N/A',
            'url' => $event['url'],
            'imageUrl' => $event['images'][0]['url'] ?? 'https://via.placeholder.com/150',
        ];
    }, $events);

    return response()->json(['events' => $formattedEvents]);
}


}

public function store(Request $request)
    {
        // Validate form input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'organizer' => 'nullable|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|integer',
            'event_type' => 'required|string|in:in-person,online,hybrid',
            'image' => 'required|image|max:2048',
            'start_date' => 'required|date',
            'start_time' => 'required',
            'venue_name' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:500',
            'tickets.name' => 'nullable|string|max:255',
            'tickets.quantity' => 'nullable|integer|min:1',
            'tickets.price' => 'nullable|numeric|min:0',
            'agree_terms' => 'accepted'
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('events', 'public');

        // Create event record
        $event = Event::create([
            'title' => $validated['title'],
            'organizer' => $validated['organizer'] ?? null,
            'description' => $validated['description'],
            'category_id' => $validated['category_id'],
            'event_type' => $validated['event_type'],
            'image_path' => $imagePath,
            'start_date' => $validated['start_date'],
            'start_time' => $validated['start_time'],
            'venue_name' => $validated['venue_name'] ?? null,
            'address' => $validated['address'] ?? null,
            'ticket_name' => $request->input('tickets.name'),
            'ticket_quantity' => $request->input('tickets.quantity'),
            'ticket_price' => $request->input('tickets.price'),
        ]);

        return redirect('/events')->with('success', 'Event created successfully!');
    }