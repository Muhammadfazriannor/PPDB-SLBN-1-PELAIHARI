<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;
use Carbon\Carbon; // Tambahkan Carbon untuk manipulasi tanggal

class PPDBController extends Controller
{
    // Menampilkan form PPDB
    public function index()
    {
        return view('ppdb.index');
    }

    // Menyimpan data PPDB ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date', // Gunakan validasi date untuk format default
            'jenis_kelamin' => 'required|string|max:10',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Konversi tanggal hanya jika format tidak sesuai MySQL
        $tanggalLahir = $request->input('tanggal_lahir'); // Format input dari browser (Y-m-d)

        // Upload file foto
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->store('public/pendaftars');
        }

        // Simpan data ke dalam tabel pendaftar
        Pendaftar::create([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'tanggal_lahir' => $tanggalLahir, // Format sudah sesuai dengan MySQL
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'no_hp' => $request->input('no_hp'),
            'foto' => $fotoPath,
        ]);

        return redirect()->route('ppdb.index')->with('success', 'Pendaftaran berhasil disimpan.');
    }
}
