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
        return redirect()->route('/dashboard');
    }
    // Login User

    public function login(Request $request)
    {
        //validate 
        $fields = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required'],
        ]);
        // Try to login user

        if (Auth::attempt($fields, $request->remember)) {
            return redirect()->intended('/dashboard');
        } else {
            return back()->withErrors([
                'failed' => "The credentials do not match"
            ]);
        };
    }
    // Logout

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
