<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ]);

        $savedMessage = Message::query()->create($validated);

        Log::info('Feedback message captured (email simulation).', [
            'message_id' => $savedMessage->id,
            'email' => $savedMessage->email,
        ]);

        return redirect()->route('home')->with('status', 'Спасибо! Ваше сообщение отправлено.');
    }
}
