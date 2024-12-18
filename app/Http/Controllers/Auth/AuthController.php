<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => [
                'required',
                'email',
                'regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/', // Validasi email harus @gmail.com
            ],
            'password' => [
                'required',
                'digits:6', // Validasi password harus angka 6 digit
            ],
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
        
            // Arahkan user sesuai dengan role
            if ($user->role == 'admin') {
                return redirect()->route('dashboard'); // Admin diarahkan ke halaman AGRC
            } elseif ($user->role == 'agrc') {
                return redirect()->route('getalldataagrc'); // AGRC juga diarahkan ke halaman AGRC
            } elseif ($user->role == 'pena') {
                return redirect()->route('getalldatapena'); // User diarahkan ke halaman Pena
            } elseif ($user->role == 'himpunan') {
                return redirect()->route('getalldatahimpunan'); 
            } elseif ($user->role == 'poma') {
                return redirect()->route('getalldatapoma'); 
            } elseif ($user->role == 'pmk') {
                return redirect()->route('getalldatapmk'); 
            } elseif ($user->role == 'ldk') {
                return redirect()->route('getalldataldk'); 
            } else {
                abort(403, 'Role tidak dikenali');
            }
        }
    }

    public function logout(Request $request)
    {
        // Melakukan logout
        Auth::logout();
        
        // Invalidate session dan generate token baru
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login dengan status logout
        return redirect(route('login'))->with('status', 'Anda telah berhasil Logout');
    }
}
