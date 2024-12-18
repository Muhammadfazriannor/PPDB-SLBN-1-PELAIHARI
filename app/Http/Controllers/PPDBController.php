<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;
use App\Models\Seleksi; // Tambahkan model Seleksi
use Carbon\Carbon;

class PPDBController extends Controller
{
    // Menampilkan form PPDB
    public function index()
    {
        return view('PPDB.index');
    }

    // Menyimpan data PPDB ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:10',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Upload file foto
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->store('public/pendaftars');
        }

        // Simpan data ke dalam tabel pendaftar
        $pendaftar = Pendaftar::create([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'no_hp' => $request->input('no_hp'),
            'foto' => $fotoPath,
        ]);

        // Simpan data ke dalam tabel seleksi
        Seleksi::create([
            'pendaftar_id' => $pendaftar->id, // ID pendaftar sebagai foreign key
            'status_seleksi' => 'Belum Diproses', // Default status seleksi
        ]);

        return redirect()->route('ppdb.index')->with('success', 'Pendaftaran berhasil disimpan dan masuk ke proses seleksi.');
    }
}
