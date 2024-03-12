<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\DetailUser;
use App\Models\Episode;
use App\Models\Kitab;
use App\Models\Question;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
        $userDetail = DetailUser::where('id_user', $user->id)->first();
        session(['full_name' => $userDetail->name]);
        $episode = Episode::all();
        $question = Question::latest()->paginate(4);
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::all();

        return view('components.templates.member.dashboard.index', [
            'title' => 'Home',
            'user' => $user,
            'episode' => $episode,
            'question' => $question,
            'kitab' => $kitab,
            'article' => $article,
            'roles' => $this->roles,
        ]);
    }
}
