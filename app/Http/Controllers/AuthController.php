<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // SHOW LOGIN PAGE
    public function showLogin() {
        return view('auth.login');
    }

    // LOGIN USER
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'Logged in!');
        }

        return back()->withErrors(['email' => 'Invalid login details']);
    }

    // SHOW REGISTER PAGE
    public function showRegister() {
        return view('auth.register');
    }

    // REGISTER USER
    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Account created!');
    }

    // LOGOUT
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
