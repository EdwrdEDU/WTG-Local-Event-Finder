<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function interests()
    {
        return $this->belongsToMany(Interest::class, 'user_interests');
    }
}