<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ScanController extends Controller
{
    public function scan(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $url = $request->input('url');

        // Simulación simple: phishing si contiene "fake"
        $result = Cache::remember("scan:$url", 3600, function() use ($url) {
            $isPhishing = str_contains($url, 'fake');
            $score = $isPhishing ? 90 : 10;
            return [
                'url' => $url,
                'is_phishing' => $isPhishing,
                'score' => $score
            ];
        });

        return response()->json($result);
    }
}
