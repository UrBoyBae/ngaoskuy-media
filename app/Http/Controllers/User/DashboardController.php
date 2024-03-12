<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Bab;
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
        $question = Question::with(['user'])->paginate(6)->sortBy('status');
        $kitab = Kitab::with(['bab'])->get();
        $bab = Bab::with(['subbab'])->get();
        $article  = Article::all();
        return view('components.templates.user.dashboard.index', [
            'title' => 'Home',
            'user' => $user,
            'episode' => $episode,
            'question' => $question,
            'kitab' => $kitab,
            'bab' => $bab,
            'article' => $article,
            'roles' => $this->roles,
        ]);
    }
}
