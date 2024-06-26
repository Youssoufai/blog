<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $fields = $request->validate([
            "username" => ['required', 'max:255 '],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);
        // Register
        $user = User::create($fields);
        // Login
        Auth::login($user);
        // Redirect
        return redirect()->route('home');
    }
}
