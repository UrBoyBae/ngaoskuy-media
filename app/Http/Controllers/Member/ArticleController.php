<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Kitab;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        $article = Article::all()->sortBy('updated_at');
        return [
            'title' => 'Question',
            'user' => $user,
            'kitab' => $kitab,
            'article' => $article
        ];
    }

    public function show($id)
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        $article = Article::where('id', $id)->first();
        return [
            'title' => 'Question',
            'user' => $user,
            'kitab' => $kitab,
            'article' => $article
        ];
    }
}
