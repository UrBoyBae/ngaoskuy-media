<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Episode;
use App\Models\Kitab;
use Illuminate\Http\Request;

class ArticleController extends Controller
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
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::all()->sortBy('created_at');
        return ([
            'title' => 'Article',
            'user' => $user,
            'episode' => $episode,
            'kitab' => $kitab,
            'article' => $article,
            'roles' => $this->roles,
        ]);
    }
    
    public function show($id)
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::where('id', $id)->first();
        return ([
            'title' => $article->name,
            'user' => $user,
            'kitab' => $kitab,
            'article' => $article,
            'roles' => $this->roles,
        ]);
    }
    
    public function create()
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        return ([
            'title' => 'Create Article',
            'user' => $user,
            'roles' => $this->roles,
            'kitab' => $kitab,
        ]);
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
        $kitab = Kitab::with(['bab'])->get();
        return ([
            'title' => 'Article Edit',
            'user' => $user,
            'roles' => $this->roles,
            'article' => $article,
            'kitab' => $kitab,
        ]);
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
