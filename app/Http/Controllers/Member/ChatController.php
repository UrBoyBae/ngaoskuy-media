<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\ChatDetail;
use App\Models\Kitab;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index($id)
    {
        $user = auth()->user();
        $question = Question::all()->where('id', $id)->first();
        $chat = Chat::where('id_question', $question->id)->first();
        $chatdetail = ChatDetail::with(['chat'])->where('id_chat', $chat->id)->get();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        return [
            'title' => 'Chat',
            'user' => $user,
            'question' => $question,
            'chatdetail' => $chatdetail,
            'kitab' => $kitab,
        ];
    }

    public function store(Request $request, $id)
    {
        $user = auth()->user();
        $chat = ChatDetail::all()->where('id_chat', $id)->first();
        $request->validate([
            'isi' => 'required|text',
        ]);
        ChatDetail::create([
            'id_chat' => $chat->id,
            'id_user' => $user->id,
            'isi' => $request->isi,
        ]);

        return to_route('namarute')->with('success', 'Chat created succesfully');
    }
}
