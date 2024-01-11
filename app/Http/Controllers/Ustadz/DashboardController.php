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
    public function index()
    {
        $user = auth()->user();
        $episode = Episode::all();
        $question = Question::all();
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::all();
        return view('ustadz.dashboard', [
            'title' => 'Home',
            'user' => $user,
            'episode' => $episode,
            'question' => $question,
            'kitab' => $kitab,
            'article' => $article,
        ]);
    }
}
