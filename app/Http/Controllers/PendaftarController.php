<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Models\Seleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Dompdf\Dompdf;
use Dompdf\Options;

class PendaftarController extends Controller
{
    public function index(): View
    {
        $pendaftars = Pendaftar::latest()->paginate(10);
        return view('pendaftars.index', compact('pendaftars'));
    }

    public function view_pdf(Pendaftar $pendaftar)
    {
        // Konfigurasi opsi Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial'); // Ganti dengan font yang Anda inginkan
        $options->setIsHtml5ParserEnabled(true);
        $options->setIsRemoteEnabled(true); // Jika memuat sumber eksternal seperti CSS
    
        $dompdf = new Dompdf($options);
    
        $html = "
            <h1>Data Pendaftar</h1>
            <p><strong>Nama Lengkap:</strong> {$pendaftar->nama_lengkap}</p>
            <p><strong>Tanggal Lahir:</strong> {$pendaftar->tanggal_lahir}</p>
            <p><strong>Jenis Kelamin:</strong> " . ($pendaftar->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan') . "</p>
            <p><strong>Alamat:</strong> {$pendaftar->alamat}</p>
            <p><strong>Email:</strong> {$pendaftar->email}</p>
            <p><strong>No HP:</strong> {$pendaftar->no_hp}</p>
        ";
    
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        // Tampilkan langsung di browser
        return $dompdf->stream('pendaftar_' . $pendaftar->id . '.pdf');
    }
    

    public function view_all_pdf()
    {
        $pendaftars = Pendaftar::all();

        $dompdf = new Dompdf();
        $html = "
            <h1>Data Semua Pendaftar</h1>
            <table border='1' cellspacing='0' cellpadding='10' style='width:100%; border-collapse: collapse;'>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No HP</th>
                    </tr>
                </thead>
                <tbody>
        ";

        $no = 1;
        foreach ($pendaftars as $pendaftar) {
            $jenis_kelamin = $pendaftar->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan';
            $html .= "
                <tr>
                    <td>{$no}</td>
                    <td>{$pendaftar->nama_lengkap}</td>
                    <td>{$pendaftar->tanggal_lahir}</td>
                    <td>{$jenis_kelamin}</td>
                    <td>{$pendaftar->alamat}</td>
                    <td>{$pendaftar->email}</td>
                    <td>{$pendaftar->no_hp}</td>
                </tr>
            ";
            $no++;
        }

        $html .= "
                </tbody>
            </table>
        ";

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        return $dompdf->stream('data_semua_pendaftar.pdf'); // Tampilkan langsung di browser
    }

    public function create(): View
    {
        return view('pendaftars.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'nama_lengkap' => 'required|min:5',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|min:5',
            'email' => 'required|email',
            'no_hp' => 'required|min:10',
        ]);

        $pendaftar = new Pendaftar($request->except('foto'));

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $pendaftar->foto = $foto->store('public/fotos');
        }

        $pendaftar->save();

        // Tambahkan data ke tabel Seleksi
        Seleksi::create([
            'pendaftar_id' => $pendaftar->id,
            'status' => 'lihat', // Status default, sesuaikan dengan kebutuhan
        ]);

        return redirect()->route('pendaftars.index')->with('success', 'Data Berhasil Disimpan!');
    }

    public function show(Pendaftar $pendaftar): View
    {
        return view('pendaftars.show', compact('pendaftar'));
    }

    public function edit(Pendaftar $pendaftar): View
    {
        return view('pendaftars.edit', compact('pendaftar'));
    }

    public function update(Request $request, Pendaftar $pendaftar): RedirectResponse
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'nama_lengkap' => 'required|min:5',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|min:5',
            'email' => 'required|email',
            'no_hp' => 'required|min:10',
        ]);

        $pendaftar->fill($request->except('foto'));

        if ($request->hasFile('foto')) {
            Storage::delete($pendaftar->foto); // Hapus foto lama jika ada
            $foto = $request->file('foto');
            $pendaftar->foto = $foto->store('public/fotos');
        }

        $pendaftar->save();

        return redirect()->route('pendaftars.index')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy(Pendaftar $pendaftar): RedirectResponse
    {
        Storage::delete($pendaftar->foto); // Hapus foto
        $pendaftar->delete();

        return redirect()->route('pendaftars.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
