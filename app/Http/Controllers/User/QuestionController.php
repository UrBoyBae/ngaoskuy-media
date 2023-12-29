<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\ChatDetail;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $question = Question::all()->where('id', $request)->first();
        $chat = ChatDetail::with(['chat'])->where('id_chat', $request)->get();
        return [
            'title' => 'Chat',
            'user' => $user,
            'question' => $question,
            'chat' => $chat,
        ];
    }
}
