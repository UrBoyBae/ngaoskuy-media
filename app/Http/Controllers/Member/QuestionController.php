<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
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
        $question = Question::all()->where('id', $request)->first();
        $chat = ChatDetail::with(['chat'])->where('id_chat', $request)->get();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        return [
            'title' => 'Question',
            'user' => $user,
            'question' => $question,
            'chat' => $chat,
            'kitab' => $kitab,
        ];
    }
    public function store(Request $request, $id)
    {
        $user = auth()->user();
        $episode = Episode::findOrFail($id);
        $request->validate([
            'id_user'    => 'required|exists:users,id',
            'id_episode' => 'required|exists:episodes,id',
            'question'   => 'required|string',
            'status'     => 'required|string',
        ]);
        Question::create([
            'id_user'    => $user->id,
            'id_episode' => $episode->id,
            'question'   => $request->question,
            'status'     => $request->status,
        ]);

        return to_route('namarute')->with('success', 'Question created succesfully');
    }
}
