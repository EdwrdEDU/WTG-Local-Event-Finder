<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;  // Assuming your Account model is here

class AccountController extends Controller
{
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:accounts,email', // table name must match!
            'password' => 'required|string|min:8|confirmed',
        ]);

        $account = new Account();
        $account->firstname = $validatedData['firstname'];
        $account->lastname = $validatedData['lastname'];
        $account->email = $validatedData['email'];
        $account->password = bcrypt($validatedData['password']);
        $account->save();

        return redirect('/home')->with('success', 'Account created successfully!');
    }

    // Login method (POST request)
    public function login(Request $request)
    {
        // Validate login form input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // If authentication is successful, redirect to the intended page
            return redirect()->intended('/home');
        }

        // If authentication fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}

