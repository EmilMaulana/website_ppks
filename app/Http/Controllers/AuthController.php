<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Cek apakah email pengguna sudah terdaftar
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Jika email sudah terdaftar, login pengguna
            auth()->login($existingUser, true);
        } else {
            // Jika email belum terdaftar, buat akun baru
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->google_id = $user->id;
            $newUser->save();

            // Login pengguna
            auth()->login($newUser, true);
        }

        // Redirect ke halaman setelah login sukses
        return redirect()->route('home');
    }
}
