<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Article;
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
        $kitab = Kitab::with(['bab'])->get();
        $article = Article::all()->sortBy('updated_at');
        return [
            'title' => 'Question',
            'user' => $user,
            'kitab' => $kitab,
            'article' => $article,
            'roles'=>$this->roles,
        ];
    }

    public function show($id)
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        $article = Article::where('id', $id)->first();
        return [
            'title' => 'Question',
            'user' => $user,
            'kitab' => $kitab,
            'article' => $article,
            'roles'=> $this->roles,
        ];
    }
}
