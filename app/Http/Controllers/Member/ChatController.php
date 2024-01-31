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
    protected $roles;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->roles = auth()->check() ? auth()->user()->getRoleNames() : [];

            return $next($request);
        });
    }
    public function index($id)
    {
        $user = auth()->user();
        $question = Question::where('id', $id)->first();
        $chat = Chat::where('id', $id)->first();
        $chatdetail = ChatDetail::with(['chat'])->where('id_chat', $chat->id)->get();
        $kitab = Kitab::with(['bab'])->get();
        return view('components.templates.member.chat.index',[
            'title' => 'Chat',
            'user' => $user,
            'question' => $question,
            'chatdetail' => $chatdetail,
            'kitab' => $kitab,
            'roles'=>$this->roles,
        ]);
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

        return to_route('components.templates.member.chat.index')->with('success', 'Chat created succesfully');
    }
}
