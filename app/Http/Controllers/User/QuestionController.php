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
        $question = Question::with(['user'])->get()->sortBy('status');
        $kitab = Kitab::with(['bab'])->get();
        // dd($question);
        return view('components.templates.user.question.index',[
            'title' => 'Question',
            'user' => $user,
            'question' => $question,
            'kitab' => $kitab,
        ]);
    }

    public function show($id)
    {
        $user = auth()->user();
        $question = Question::where('id', $id)->first();
        $chat = Chat::where('id_question', $id)->first();
        $chatdetail = ChatDetail::with(['user'])->where('id_chat', $chat->id)->get();
        $kitab = Kitab::with(['bab'])->get();
        return view('components.templates.user.question.show', [
            'title' => 'Chat',
            'user' => $user,
            'question' => $question,
            'chat' => $chat,
            'chatdetail' => $chatdetail,
            'kitab' => $kitab,
        ]);
    }
}
