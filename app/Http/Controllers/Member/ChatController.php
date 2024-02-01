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
        $user_chat_detail = User::where('id', $chat->id_user)->first();// get sender id
        $chatdetails = ChatDetail::with(['chat'])->where('id_chat', $chat->id)->get();
        $kitab = Kitab::with(['bab'])->get();
        return view('components.templates.member.chat.index',[
            'title' => 'Chat',
            'chat_room' => $id,
            'user_chat' => $chat->id_user,
            'user_chat_detail' => $user_chat_detail,
            'user' => $user,
            'question' => $question,
            'chatdetails' => $chatdetails,
            'kitab' => $kitab,
            'roles'=>$this->roles,
        ]);
    }

    public function store(Request $request, $id)
    {
        $user = auth()->user();
        // $chat = ChatDetail::all()->where('id_chat', $id)->first();
        $request->validate([
            'message' => 'required|string',
        ]);
        ChatDetail::create([
            'id_chat' => $id,
            'id_user' => $user->id,
            'isi' => $request->message,
        ]);
        return to_route('member.chat.index', $id)->with('success', 'Chat created succesfully');
    }
}
