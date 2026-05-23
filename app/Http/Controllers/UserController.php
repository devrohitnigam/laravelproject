<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Show Users List (Admin + Editor)
    public function index()
    {
        if (!in_array(auth()->user()->role, ['admin', 'editor'])) {
            abort(403);
        }

        $users = User::latest()->get();
        return view('admin.users.index', compact('users'));
    }

    // Update Role (ONLY ADMIN)
    public function updateRole(Request $request, $id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return back()->with('success', 'Role updated successfully');
    }

    // Edit User (Admin + Editor)
    public function edit($id)
    {
        if (!in_array(auth()->user()->role, ['admin', 'editor'])) {
            abort(403);
        }

        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    // Update User (Admin + Editor)
    public function update(Request $request, $id)
    {
        if (!in_array(auth()->user()->role, ['admin', 'editor'])) {
            abort(403);
        }

        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'image' => 'nullable|image'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        // Only admin can change role
        if (auth()->user()->role === 'admin') {
            $user->role = $request->role;
        }

        // Image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('profiles', 'public');
            $user->image = $path;
        }

        $user->save();

        return redirect()->route('admin.users')->with('success', 'User updated successfully');
    }

    // Create User (ONLY ADMIN)
    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        return view('admin.users.create');
    }

    // Store User (ONLY ADMIN)
    public function store(Request $request)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
            'image' => 'nullable|image'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('profiles', 'public');
            $user->image = $path;
        }

        $user->save();

        return redirect()->route('admin.users')->with('success', 'User added successfully');
    }

    // Delete User (ONLY ADMIN)
    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $user = User::findOrFail($id);

        // Prevent deleting self
        if ($user->id == auth()->id()) {
            return back()->with('error', 'You cannot delete your own account');
        }

        $user->delete();

        return back()->with('success', 'User deleted successfully');
    }
}