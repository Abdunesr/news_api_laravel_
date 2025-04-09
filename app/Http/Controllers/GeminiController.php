<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GemniService;

use Illuminate\Support\Facades\Log;

class GeminiController extends Controller
{
    protected $gemini;

    public function __construct(GemniService $gemini)
    {
        $this->gemini = $gemini;
    }

    
    public function respond(Request $request)
    {
        try {
            \Log::info('Received request', ['news' => $request->input('news')]);
    
            return response()->json(['reply' => 'This is a fake response from the bot.']);
        } catch (\Exception $e) {
            \Log::error('Error in bot-response', ['error' => $e->getMessage()]);
            return response()->json(['reply' => 'Server error: ' . $e->getMessage()], 500);
        }
    }
    
}
