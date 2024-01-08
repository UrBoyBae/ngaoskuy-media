<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\ChatDetail;
use App\Models\Episode;
use App\Models\Kitab;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $question = Question::where('status', 1)->get();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        return [
            'title' => 'Question',
            'user' => $user,
            'question' => $question,
            'kitab' => $kitab,
        ];
    }

    public function show($id)
    {
        $user = auth()->user();
        $question = Question::where('id', $id)->first();
        $chat = Chat::where('id_question', $question->id)->first();
        $chatdetail = ChatDetail::where('id_chat', $chat->id)->get()->sortBy('created_at');
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        return [
            'title' => 'Chat',
            'user' => $user,
            'question' => $question,
            'chat' => $chat,
            'chatdetail' => $chatdetail,
            'kitab' => $kitab,
        ];
    }
}
