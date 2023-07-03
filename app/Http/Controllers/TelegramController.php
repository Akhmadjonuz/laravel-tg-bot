<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TelegramService;

class TelegramController extends Controller
{
    public function handle(Request $request)
    {
        $input = $request->all();

        if (!empty($input['message'])) {
            $message = $input['message'];
            $fid = $message['chat']['id'];
            $text = $message['text'];
        }

        $bot = new TelegramService;

        if ($text == '/start') {
            $bot->sendMessage([
                'chat_id' => $fid,
                'text' => 'ishladi'
            ]);
        }
    }
}
