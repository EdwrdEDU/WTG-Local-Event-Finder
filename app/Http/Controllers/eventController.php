<?php

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

