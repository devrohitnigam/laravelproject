<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 

class AuthController extends Controller
{
    // Show Register Page
    public function showRegister()
    {
        return view('auth.register');
    }

    // Register User
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // IMPORTANT
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully!');
    }

    // Show Login Page
    public function showLogin()
    {
        return view('auth.login');
    }

    // Login User
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        }

        return back()->with('error', 'Invalid email or password');
    }

    // Dashboard
    public function dashboard()
    {
        $totalUsers = User::count();
        $totalBlogs = Blog::count();
        $totalServices = Service::count();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalBlogs',
            'totalServices'
        ));
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully');
    }

    // Forgot Password
    public function showForgotPassword()
    {
        return view('auth.forgot-password');
    }

    
}