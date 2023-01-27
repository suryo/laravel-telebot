<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;

class TelegramBotController extends Controller
{
    
    public function __construct()
    {
        $this->telegram = new API(env('TELEGRAM_BOT_TOKEN'));
    }

    public function sendMessages($id)
    {
        return  $this->telegram->sendMessage([
            'chat_id' => $id,
            'text' => 'Hello...Iam SuryoTeleBot'
        ]);
    }

    public function messages()
    {

        return  $this->telegram->getUpdates();
    }
}
