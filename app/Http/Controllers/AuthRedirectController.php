<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthRedirectController extends Controller
{
    public function redirect(Request $request)
    {
        $user = $request->user();

        return match ($user->role) {
            'admin' => redirect('/admin/dashboard'),
            'user'  => redirect('/user/dashboard'),
            default => abort(403),
        };
    }
}
