<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Periksa apakah user memiliki salah satu role yang diizinkan
        if ($user && in_array($user->role, $roles)) {
            return $next($request);
        }

        // Jika tidak, kembalikan dengan 403 Forbidden
        abort(403, 'Akses tidak diizinkan');
    }
}

