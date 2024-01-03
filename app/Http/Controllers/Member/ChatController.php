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
    public function index(Request $request)
    {
        $user = auth()->user();
        $question = Question::all()->where('id', $request)->first();
        $chat = ChatDetail::with(['chat'])->where('id_chat', $request)->get();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        return [
            'title' => 'Chat',
            'user' => $user,
            'question' => $question,
            'chat' => $chat,
            'kitab' => $kitab,
        ];
    }

    public function chat(Request $request, $id)
    {
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
