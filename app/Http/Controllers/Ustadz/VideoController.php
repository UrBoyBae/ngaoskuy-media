<?php

namespace App\Http\Controllers\Ustadz;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Episode;
use App\Models\Judul;
use App\Models\Kitab;
use App\Models\Question;
use App\Models\SubBab;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    protected $roles;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->roles = auth()->check() ? auth()->user()->getRoleNames() : [];

            return $next($request);
        });
    }
    public function index($id)
    {
        $user = auth()->user();
        $episode = Episode::all();
        $subbab = SubBab::where('id_bab', $id)->first();
        $kitab = Kitab::with(['bab'])->get();
        $judul = Judul::where('id_subbab', $subbab->id)->paginate(5);
        $article  = Article::all();
        return view('components.templates.ustadz.video.index',[
            'title' => 'Home',
            'user' => $user,
            'episode' => $episode,
            'subbab' => $subbab,
            'kitab' => $kitab,
            'judul' => $judul,
            'article' => $article,
            'roles'=>$this->roles
        ]);
    }

    public function show($id)
    {
        $user = auth()->user();
        $judul = Judul::where('id', $id)->first();
        // dd($judul);
        $episode = Episode::where('id_judul', $judul->id)->first();
        $episodevideo = Episode::with(['judul'])->where('id', $id)->first();
        $episodelist = Episode::where('id_judul', $judul->id)->get();
        $subbab = SubBab::where('id_bab', $id)->get();
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::all();
        return view('components.templates.ustadz.video.show',[
            'title' => 'Home',
            'user' => $user,
            'episode' => $episode,
            'episodevideo' => $episodevideo,
            'episodelist' => $episodelist,
            'subbab' => $subbab,
            'kitab' => $kitab,
            'article' => $article,
            'roles' => $this->roles,
        ]);
    }

    public function videos($id)
    {
        $user = auth()->user();
        $judul = Judul::where('id_subbab', $id);
        $episode = Episode::where('id_judul', $judul->id);
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::all();
        return [
            'title' => 'Home',
            'user' => $user,
            'judul' => $judul,
            'episode' => $episode,
            'kitab' => $kitab,
            'article' => $article,
        ];
    }
}
