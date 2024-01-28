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
    protected $roles;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->roles = auth()->check() ? auth()->user()->getRoleNames() : [];

            return $next($request);
        });
    }
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
            'roles' => $this->roles,
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
            'roles' => $this->roles,
        ]);
    }

    public function create()
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        return view('components.templates.member.question.create', [
            'title' => 'Craete Question',
            'user' => $user,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ]);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'subject' => 'required',
            'pertanyaan' => 'required',
            'tipe' => 'required',
        ]);

        $pertanyaan=Question::create([
            'id_user'    => $user->id,
            'subject'   => $request->subject,
            'question'   => $request->pertanyaan,
            'tipe'     => $request->tipe,
            'status'     => $request->status,
        ]);
        // Create a new question
    $question = Question::create([
        'id_user' => $user->id,
        'subject' => $request->subject,
        'question' => $request->pertanyaan,
        'tipe' => $request->tipe,
        'status' => $request->status,
    ]);

    // Create a chat associated with the new question
    Chat::create([
        'id_question' => $question->id,
        'id_user' => $user->id,
    ]);

    // Redirect to the show page for the newly created question
    return redirect()->route('components.templates.member.question.show', $question->id)
                    ->with('success', 'Question created successfully');
    }
}
