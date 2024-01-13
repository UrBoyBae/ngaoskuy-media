<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Kitab;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        $article = Article::all()->sortBy('updated_at');
        return view('components.templates.user.article.index',[
            'title' => 'Question',
            'user' => $user,
            'kitab' => $kitab,
            'article' => $article
        ]);
    }

    public function show($id)
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        $article = Article::where('id', $id)->first();
        return view('components.templates.user.article.show',[
            'title' => 'Question Show',
            'user' => $user,
            'kitab' => $kitab,
            'article' => $article
        ]);
    }
}
