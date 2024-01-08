<?php

namespace App\Http\Controllers\Member;

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
        $question = Question::all();
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
        $myquestion = Question::where('id_user', $user->id)->first();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        return [
            'title' => 'Question',
            'user' => $user,
            'question' => $question,
            'myquestion' => $myquestion,
            'kitab' => $kitab,
        ];
    }

    public function create()
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        return [
            'title' => 'Craete Question',
            'user' => $user,
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
        $question = Question::where('id_user', $user->id)->where('question', $request->question)->first();

        Chat::create([
            'id_question' => $question->id,
            'id_user' => $user,
        ]);

        return to_route('namarute')->with('success', 'Question created succesfully');
    }
}
