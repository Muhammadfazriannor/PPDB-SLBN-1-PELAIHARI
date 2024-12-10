<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman; // Menambahkan model Pengumuman
use App\Models\Pendaftar;  // Menambahkan model Pendaftar
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan dashboard Admin
    public function index()
    {
        // Hitung jumlah pengumuman
        $jumlahPengumuman = Pengumuman::count();

        // Hitung jumlah pendaftar
        $jumlahPendaftar = Pendaftar::count();

        // Kirimkan data ke view dashboard
        return view('admin.dashboard', compact('jumlahPengumuman', 'jumlahPendaftar'));
    }

    // Menampilkan halaman pengumuman
    public function pengumuman()
    {
        return view('admin.pengumuman');
    }

    // Menyimpan pengumuman
    public function storePengumuman(Request $request)
    {
        // Logika untuk menyimpan pengumuman
        // Pengumuman::create($request->all());  // Jika Anda ingin menyimpan pengumuman

        // Redirect ke halaman dashboard dengan pesan sukses
        return redirect()->route('dashboard.dashboard')->with('success', 'Pengumuman berhasil disimpan.');
    }

    // Menampilkan daftar pendaftar
    public function pendaftar()
    {
        $pendaftar = Pendaftar::all();  // Ambil data pendaftar dari database
        return view('admin.pendaftar', compact('pendaftar'));
    }

    // Menampilkan halaman seleksi
    public function seleksi()
    {
        return view('admin.seleksi');
    }
}
