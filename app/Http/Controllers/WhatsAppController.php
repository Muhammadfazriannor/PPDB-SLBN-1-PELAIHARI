<?php

namespace App\Http\Controllers;

use App\Services\FoonteService;
use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    protected $foonteService;

    public function __construct(FoonteService $foonteService)
    {
        $this->foonteService = $foonteService;
    }

    public function index()
    {
        return view('kirimpesan');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'phone' => 'required|regex:/^628[0-9]{9,}$/', // Validasi nomor Indonesia
            'message' => 'required|string|max:500',
        ]);

        try {
            $result = $this->foonteService->sendMessage($request->phone, $request->message);

            return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
