<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            session(['name' => $user->name, 'email' => $user->email]);
    
            return redirect()->intended('admin/dashboard');
        }
    
        return redirect()->back()->withErrors(['message' => 'Email atau password salah']);
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
