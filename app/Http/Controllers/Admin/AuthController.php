<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Show login form
     */
    public function showLogin()
    {
        // If already logged in, redirect to dashboard
        if (session()->has('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.auth.login');
    }

    /**
     * Handle login request
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Set session
            session([
                'admin_logged_in' => true,
                'admin_id' => $user->id,
                'admin_name' => $user->name,
                'admin_email' => $user->email,
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Selamat datang, ' . $user->name . '!');
        }

        return back()->with('error', 'Email atau password salah')->withInput();
    }

    /**
     * Handle logout
     */
    public function logout()
    {
        session()->flush();
        return redirect()->route('admin.login')->with('success', 'Berhasil logout');
    }
}
