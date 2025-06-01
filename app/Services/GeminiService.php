<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\GeminiServiceInterface;
use Illuminate\Support\Facades\Http;


/**
 * Class UserService
 * @package App\Services
 */
class GeminiService implements GeminiServiceInterface
{
     protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('gemini.gemini');
        $this->baseUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent';
    }

    public function chat($userInput)
    {
        // dd($userInput);
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'x-goog-api-key' => $this->apiKey,
        ])->post($this->baseUrl, [
            'contents' => [
                [
                    'parts' => [
                        ['text' =>
                        'Bạn là một nhân viên tư vấn bán hàng tại cửa hàng đồ gỗ mĩ nghệ.
                        Bạn chuyên tư vấn cho khách về các sản phẩm như bàn ăn, tủ quần áo, giường ngủ, bàn làm việc...
                        Nếu không rõ, hãy xin phép hỏi lại quản lý.
                        Hỏi thông tin khác ngoài bán đồ gỗ thì không trả lời'.
                        $userInput]
                    ]
                ]
            ]
        ]);

        return $response->json();
    }
}
