<?php

namespace App\Http\Controllers\Ustadz;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Chat;
use App\Models\ChatDetail;
use App\Models\Episode;
use App\Models\Kitab;
use App\Models\Question;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $episode = Episode::all();
        $question = Question::where('status', 1)->get();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        $article  = Article::all();
        return [
            'title' => 'Pertanyaan',
            'user' => $user,
            'episode' => $episode,
            'question' => $question,
            'kitab' => $kitab,
            'article' => $article,
        ];
    }

    public function show($id)
    {
        $user = auth()->user();
        $episode = Episode::all();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        $chat = ChatDetail::where('id_chat', $id)->get();
        return [
            'title' => 'Chat',
            'user' => $user,
            'episode' => $episode,
            'kitab' => $kitab,
            'chat' => $chat,
        ];
    }

    public function create(Request $request, $id)
    {
        $user = auth()->user();
        $user = auth()->user();
        $chat = ChatDetail::all()->where('id_chat', $id)->first();
        $request->validate([
            'isi' => 'required|text',
        ]);
        Chat::create([
            'id_chat' => $chat->id,
            'id_user' => $user->id,
            'isi' => $request->isi,
        ]);

        return to_route('namarute')->with('success', 'Chat created succesfully');
    }
}
