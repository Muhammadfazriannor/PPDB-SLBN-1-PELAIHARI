<?php
namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        // Ambil semua data peserta dan urutkan berdasarkan prioritas
        $peserta = Peserta::all()->sortByDesc('prioritas');

        return view('peserta.index', compact('peserta'));
    }

    public function create()
    {
        return view('peserta.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nilai' => 'required|integer',
            'surat_dokter' => 'required|integer',
            'zonasi' => 'required|integer',
            'kelulusan' => 'required|integer',
        ]);

        Peserta::create([
            'nama' => $validated['nama'],
            'nilai' => $validated['nilai'],
            'surat_dokter' => $validated['surat_dokter'],
            'zonasi' => $validated['zonasi'],
            'kelulusan' => $validated['kelulusan'],
        ]);

        return redirect()->route('peserta.index')->with('success', 'Peserta berhasil ditambahkan');
    }

    public function ranking()
    {
        $peserta = Peserta::orderByDesc('prioritas')->get();
        return view('peserta.ranking', compact('peserta'));
    }
}
