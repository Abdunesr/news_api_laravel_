
<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class GemniService
{
    protected $apiKey;
    protected $url;

    public function __construct()
    {
        $this->apiKey = env('GEMINI_API_KEY');
        $this->url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=' . $this->apiKey;
    }

    public function getNewsDetail($newsContent)
    {
        $response = Http::post($this->url, [
            'contents' => [
                ['parts' => [['text' => "Expand and explain this news in detail:\n\n" . $newsContent]]]
            ]
        ]);

        return $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? 'No response from Gemini.';
    }
}
