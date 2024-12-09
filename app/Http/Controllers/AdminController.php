<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function pengumuman()
    {
        return view('admin.pengumuman');
    }

    public function storePengumuman(Request $request)
    {
        // Logika untuk menyimpan pengumuman
        // Redirect ke halaman dashboard dengan pesan sukses
    }

    public function pendaftar()
    {
        $pendaftar = []; // Ambil data dari database
        return view('admin.pendaftar', compact('pendaftar'));
    }

    public function seleksi()
    {
        return view('admin.seleksi');
    }
}



