<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan halaman dashboard pengguna
    public function index()
    {
        return view('user.dashboard');
    }

    // Menampilkan halaman layanan pengguna
    public function tentang()
    {
        return view('user.tentang');
    }
}
