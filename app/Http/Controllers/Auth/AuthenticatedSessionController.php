<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Tampilkan form login.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Proses login pengguna.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('Email atau password salah.'),
            ]);
        }

        $request->session()->regenerate();

        // Redirect berdasarkan role
        $user = Auth::user();

        if ($user->role->name === 'Admin') {
            return redirect()->intended('/admin/dashboard');
        } elseif ($user->role->name === 'PM') {
            return redirect()->intended('/pm/dashboard');
        } elseif ($user->role->name === 'HOD') {
            return redirect()->intended('/hod/dashboard');
        } elseif ($user->role->name === 'Staff') {
            return redirect()->intended('/staff/dashboard');
        }

        // Default fallback jika role tidak dikenali
        Auth::logout();
        Session::flush();
        return redirect('/login')->withErrors(['role' => 'Akses tidak diizinkan.']);
    }

    /**
     * Proses logout pengguna.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
