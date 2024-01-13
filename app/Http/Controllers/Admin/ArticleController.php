<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Episode;
use App\Models\Kitab;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $episode = Episode::all();
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::all()->sortBy('created_at');
        return [
            'title' => 'Article',
            'user' => $user,
            'episode' => $episode,
            'kitab' => $kitab,
            'article' => $article,
        ];
    }

    public function show($id)
    {
        $user = auth()->user();
        $article  = Article::where('id', $id)->first();
        return [
            'title' => $article->name,
            'user' => $user,
            'article' => $article,
        ];
    }

    public function create()
    {
        $user = auth()->user();
        return [
            'title' => 'Create Article',
            'user' => $user,
        ];
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);
        Article::create([
            'name' => $request->name,
            'content' => $request->content,
        ]);

        return to_route('namarute')->with('success', 'Article Successfuly Created');
    }
    public function edit($id)
    {
        $user = auth()->user();
        $article = Article::findOrFail($id);
        return [
            'title' => 'Article Edit',
            'user' => $user,
            'article' => $article
        ];
    }
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update([
            'name' => $request->name,
            'content' => $request->content,
        ]);
        return to_route('namarute')->with('success', 'Article Successfuly Edited');
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return to_route('namarute')->with('success', 'Article Successfuly Deleted');
    }
}
