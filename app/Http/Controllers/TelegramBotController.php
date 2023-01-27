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

    public function telegramWebhook()
    {
        $updates = $this->telegram->getWebhookUpdates();

        if (isset($updates['message'])) {
            $text_pesan = $updates['messages']['text'];
            $chat_id_pesan  =$updates['messages']['from']['id'];
            $this->telegram->sendMessage([
                'chat_id' => $chat_id_pesan,
                'text' => 'ini pesan dari basukarno'
            ]);

        }
        else
        {
            $this->telegram->sendMessage([
                'chat_id' => 5555459519,
                'text' => 'kosong webhook'
            ]);
        }
    }
}
