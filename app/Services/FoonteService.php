<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FoonteService
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        // Mengambil base URL dan API key dari config
        $this->baseUrl = config('services.foonte.base_url');
        $this->apiKey = config('services.foonte.api_key');
    }

    public function sendMessage($phone, $message)
    {
        try {
            // Log nomor dan pesan untuk debugging
            Log::info('Mengirim pesan ke: ' . $phone . ' dengan pesan: ' . $message);

            // Mengirimkan pesan menggunakan Foonte API
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
            ])->post("{$this->baseUrl}/send", [
                'target' => $phone,
                'message' => $message,
            ]);

            // Log respons dari Foonte API
            Log::info('Respons API Foonte:', ['response' => $response->body()]);

            // Cek apakah respons berhasil
            if ($response->successful()) {
                // Log jika berhasil
                Log::info('Pesan berhasil dikirim ke ' . $phone);
                return $response->json(); // Mengembalikan respons dalam bentuk JSON
            }

            // Jika respons tidak berhasil, log dan throw error
            Log::error('Gagal mengirim pesan', [
                'response' => $response->body(),
                'phone' => $phone,
                'message' => $message,
            ]);
            throw new \Exception("Error: " . $response->body());

        } catch (\Exception $e) {
            // Tangani pengecualian dan log error
            Log::error('Kesalahan pada API Foonte', [
                'error_message' => $e->getMessage(),
                'phone' => $phone,
                'message' => $message,
            ]);
            throw new \Exception("Kesalahan saat mengirim pesan: " . $e->getMessage());
        }
    }
}
