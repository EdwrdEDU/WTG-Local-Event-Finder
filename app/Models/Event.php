<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'organizer',
        'description',
        'category_id',
        'event_type',
        'image_path',
        'start_date',
        'start_time',
        'venue_name',
        'address',
        'tickets',
        'agree_terms',
        'is_published',
    ];

    protected $casts = [
        'start_date' => 'date',
        'start_time' => 'datetime:H:i',
        'tickets' => 'array',
        'agree_terms' => 'boolean',
        'is_published' => 'boolean',
    ];
}
