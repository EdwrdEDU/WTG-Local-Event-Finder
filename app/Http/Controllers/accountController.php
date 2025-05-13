<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class accountController extends Controller
{
    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|email|unique:accounts,email', // table name must match!
        'password' => 'required|string|min:8|confirmed',
    ]);

    $account = new \App\Models\Account();
    $account->firstname = $validatedData['firstname'];
    $account->lastname = $validatedData['lastname'];
    $account->email = $validatedData['email'];
    $account->password = bcrypt($validatedData['password']);
    $account->save();

    return redirect('/home')->with('success', 'Account created successfully!');
    }

}
