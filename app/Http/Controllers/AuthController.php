<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function loginForm() {
        return view('auth.login');
    }

    public function registerForm() {
        return view('auth.register');
    }

    public function login(Request $request) {
        if (Auth::attempt($request->only("email", "password"))) {
            return redirect("/dashboard");
        }
        return back()->with("error", "Login gagal");
    }

    public function register(Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]);
        return redirect('/login');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
