<?php

namespace App\Http\Controllers\Ustadz;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Bab;
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
        $subbab = SubBab::with(['bab'])->where('id_bab', $id)->first();
        $bab = Bab::with(['kitab'])->where('id',$subbab->bab->id)->first();
        $kitab = Kitab::with(['bab'])->get();
        $judul = Judul::where('id_subbab', $subbab->id)->paginate(5);
        $article  = Article::all();
        return view('components.templates.ustadz.video.index',[
            'title' => 'Home',
            'user' => $user,
            'episode' => $episode,
            'subbab' => $subbab,
            'bab' => $bab,
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
        $subbab = SubBab::where('id', $episode->judul->id_subbab)->first();
        $bab = Bab::with(['kitab'])->where('id',$subbab->id_bab)->first();
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
            'bab' => $bab,
            'article' => $article,
            'roles' => $this->roles,
        ]);
    }
    public function display($id)
    {
        $user = auth()->user();
        $episode = Episode::with(['judul'])->where('id', $id)->first();
        $judul = Judul::where('id',$episode->judul->id)->first();
        $episodevideo = Episode::with(['judul'])->where('id', $id)->first();
        $episodelist = Episode::with(['judul'])->where('id_judul', $judul->id)->get();
        $kitab = Kitab::with(['bab'])->get();
        $subbab = SubBab::where('id', $episode->judul->id_subbab)->first();
        $bab = Bab::with(['kitab'])->where('id',$subbab->id_bab)->first();
        return view('components.templates.ustadz.video.show',[
            'title' => 'Video Player',
            'user' => $user,
            'episode' => $episode,
            'episodevideo' => $episodevideo,
            'episodelist' => $episodelist,
            'kitab' => $kitab,
            'bab' => $bab,
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
