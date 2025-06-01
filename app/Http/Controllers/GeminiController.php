<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\GeminiServiceInterface;
use Illuminate\Http\Request;

class GeminiController extends Controller
{
    protected $gemini;

    public function __construct(GeminiServiceInterface $gemini)
    {
        $this->gemini = $gemini;
    }

    public function chat(Request $request)
    {
        $userInput = $request->input('message');
        // dd($request);
        $response = $this->gemini->chat($userInput);

        return response()->json($response);
    }

    public function viewChat(){
        return view('client.chat');
    }
}
