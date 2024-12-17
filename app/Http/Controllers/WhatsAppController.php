<?php

namespace App\Http\Controllers;

use App\Services\FoonteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class WhatsAppController extends Controller
{
    protected $foonteService;

    public function __construct(FoonteService $foonteService)
    {
        $this->foonteService = $foonteService;
    }

    // Tampilkan form kirim pesan
    public function index()
    {
        return view('kirimpesan');
    }

    // Kirim pesan ke WhatsApp
    public function sendMessage(Request $request)
    {
        $request->validate([
            'phone' => 'required|regex:/^628[0-9]{9,}$/', // Validasi nomor Indonesia
            'message' => 'required|string|max:500',
        ]);

        try {
            $this->foonteService->sendMessage($request->phone, $request->message);

            return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengirim pesan: ' . $e->getMessage());
        }
    }
}
