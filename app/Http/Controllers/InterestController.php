<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterestController extends Controller
{

public function save(Request $request)
{
    $validatedData = $request->validate([
        'interests' => 'required|array',
        'interests.*' => 'string'
    ]);
    
    $user = auth()->user();
    $interestIds = \App\Models\Interest::whereIn('name', $validatedData['interests'])->pluck('id');
    
    // Save user interests
    $user->interests()->sync($interestIds);
    
    return response()->json(['success' => true]);
    // Optionally, you can return the saved interests or a success message
}
}
