<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TelegramService;

class TelegramController extends Controller
{
    public function handle(Request $request)
    {
        $input = $request->all();

        $bot = new TelegramService;
        $bot->setData($input);

        if ($bot->Text() == '/start') {
            $bot->sendMessage([
                'chat_id' => $bot->ChatID(),
                'text' => 'ishladi ' .  $bot->FirstName()
            ]);
        }
    }
}
