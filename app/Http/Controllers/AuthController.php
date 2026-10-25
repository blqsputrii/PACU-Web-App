<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showRegister(): View
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,pegawai',
        ]);

        DB::table('users')->insert([
            'user_name' => $request->name,
            'email' => $request->email,
            'password' => request()->password,
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/login')->with('success', 'Registration successful. Please log in.');
    }
}
