<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Kitab;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        $article = Article::all()->sortByDesc('created_at');
        // $formattedDate = Carbon::parse($article->created_at)->format('F d, Y');
        return view('components.templates.user.article.index',[
            'title' => 'Article',
            'user' => $user,
            'kitab' => $kitab,
            'article' => $article,
            // 'formattedDate' => $formattedDate,
        ]);
    }

    public function show($id)
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        $article = Article::where('id', $id)->first();
        $formattedDate = Carbon::parse($article->created_at)->format('F d, Y');
        return view('components.templates.user.article.show',[
            'title' => 'Article Show',
            'user' => $user,
            'kitab' => $kitab,
            'article' => $article,
            'formattedDate' => $formattedDate,
        ]);
    }
}
