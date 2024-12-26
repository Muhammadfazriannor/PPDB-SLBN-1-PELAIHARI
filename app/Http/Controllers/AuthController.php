<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth; // Untuk autentikasi pengguna
use Illuminate\Support\Str;


class AuthController extends Controller
{
    // Menampilkan form registrasi
    public function tampilRegistrasi()
    {
        return view('Auth.registrasi');
    }

    // Proses registrasi
    public function submitRegistrasi(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // pastikan ada field 'password_confirmation' di form
        ]);

        // Membuat user baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Encrypt password
        $user->save();

        // Setelah registrasi berhasil, langsung login
        Auth::login($user);

        // Arahkan ke halaman login atau dashboard setelah registrasi
        return redirect()->route('login');
    }

    // Menampilkan form login
    public function tampilLogin()
    {
        return view('Auth.login');
    }

    // Proses login
    public function submitLogin(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Proses autentikasi
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('user.dashboard'); // Arahkan ke halaman dashboard setelah login
        }

        return redirect()->back()->with('error', 'Login gagal, coba lagi!');
    }
        // Mengarahkan pengguna ke Google untuk otentikasi
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Menangani callback dari Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Cek apakah pengguna sudah ada di database
            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
            // Jika user belum ada, buat pengguna baru
            $user = new User();
            $user->name = $googleUser->getName();
            $user->email = $googleUser->getEmail();
            $user->password = bcrypt(Str::random(16)); // Membuat password acak
            $user->save();
            }

            // Login pengguna
            Auth::login($user);

            // Arahkan ke halaman dashboard atau halaman yang diinginkan
            return redirect()->route('user.dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Terjadi kesalahan saat login dengan Google.');
        }
    }

}
