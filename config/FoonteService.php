<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FoonteService
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.foonte.base_url');
        $this->apiKey = config('services.foonte.api_key');
    }

    public function sendMessage($phone, $message)
    {
        $response = Http::withToken($this->apiKey)
            ->post("{$this->baseUrl}/send-message", [
                'phone' => $phone,
                'message' => $message,
            ]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception("Error: " . $response->body());
    }
}
