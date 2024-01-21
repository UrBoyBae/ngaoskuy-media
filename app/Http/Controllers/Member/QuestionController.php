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
        $kitab = Kitab::with(['bab'])->get();
        return view('components.templates.member.question.index', [
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
        $myquestion = Question::where('id_user', $user->id)->first();
        $kitab = Kitab::with(['bab'])->get();
        return view('components.templates.member.question.show', [
            'title' => 'Question',
            'user' => $user,
            'question' => $question,
            'myquestion' => $myquestion,
            'kitab' => $kitab,
        ]);
    }

    public function create()
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        return view('member.quesstion', [
            'title' => 'Craete Question',
            'user' => $user,
            'kitab' => $kitab,
        ]);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        // $request->validate([
        //     // 'id_user'    => 'required|exists:users,id',
        //     'question'   => 'required',
        //     'status'     => 'required',
        // ]);
        Question::create([
            'id_user'    => $user->id,
            'subject'   => $request->subject,
            'question'   => $request->pertanyaan,
            'tipe'     => $request->tipe,
            'status'     => $request->status,
        ]);
        $question = Question::where('id_user', $user->id)->where('subject', $request->subject)->first();
        // dd($question);

        Chat::create([
            'id_question' => $question->id,
            'id_user' => $user->id,
        ]);

        return to_route('member.home.index')->with('success', 'Question created succesfully');
    }
}
