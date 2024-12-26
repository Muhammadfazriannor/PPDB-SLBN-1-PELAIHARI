<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            
            // Cari user berdasarkan email
            $user = User::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt('password'), // Password default jika diperlukan
                ]
            );

            // Login user
            Auth::login($user);

            return redirect()->route('home'); // Sesuaikan dengan route tujuan Anda
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Ada masalah dengan login Google!');
        }
    }
}

