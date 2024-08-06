<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class createAccount extends Controller
{
    // account creation
    public function create(Request $request)
    {

        $apiKey = config('services.prune.api_key');

        // Make the HTTP POST request with API key in headers
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Accept' => 'application/json',
        ])->post('https://dps.accounts.prunepayments.net/v1/accounts/request-account', $request->all());

        return response()->json($response->json());
    }

}
