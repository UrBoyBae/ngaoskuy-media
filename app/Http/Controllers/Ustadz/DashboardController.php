<?php

namespace App\Http\Controllers\Ustadz;

use App\Http\Controllers\Controller;
use App\Models\Article;
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
        $episode = Episode::all();
        $question = Question::all();
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::all();
        return view('components.templates.ustadz.dashboard.index', [
            'title' => 'Home',
            'user' => $user,
            'episode' => $episode,
            'kitab' => $kitab,
            'question' => $question,
            'article' => $article,
            'roles' => $this->roles,
        ]);
    }
}
