<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'id_login' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt([
            'id_login' => $credentials['id_login'],
            'password' => $credentials['password'],
        ])) {
            return back()->withErrors([
                'id_login' => 'ID Login atau Password salah',
            ]);
        }

        $request->session()->regenerate();

        return redirect('/redirect');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
