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
    public function index(Request $request)
    {
        $user = auth()->user();
        $question = Question::all()->where('id', $request->id)->first();
        $chat = ChatDetail::with(['chat'])->where('id_chat', $request->id_chat)->get();
        $episode = Episode::while('tag', $request->tag)->get();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        return [
            'title' => 'Question',
            'user' => $user,
            'question' => $question,
            'chat' => $chat,
            'episode' => $episode,
            'kitab' => $kitab,
        ];
    }
}
