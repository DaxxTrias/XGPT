<?php

namespace App\src;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NightbotAPI
{
    public function sendMessageByResponseUrl($url, $message)
    {
        Log::info('sendMessageByResponseUrl_message: ' . $message);
        Log::info('sendMessageByResponseUrl_url: ' . $url);
        return $this->request($url, 'POST', [], ['message' => $message]); 
    }

    public function request($url,  $method = 'GET', $parameters = [], $post = [])
    {
        Log::info('request_url: ' . $url);
        return Http::accept('application/json')->post(
            $url,
            $post
        )->json();
    }
}
