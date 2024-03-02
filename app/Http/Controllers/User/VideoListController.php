<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Bab;
use App\Models\Episode;
use App\Models\Judul;
use App\Models\Kitab;
use App\Models\Question;
use App\Models\SubBab;
use Illuminate\Http\Request;

class VideoListController extends Controller
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
        $subbab = SubBab::where('id_bab', $id)->first();
        // $judul = Judul::with(['episode'])->where('id_subbab', $subbab->id)->get();
        $bab = Bab::with(['kitab'])->where('id',$subbab->id_bab)->first();
        $judul = Judul::with(['episode'])->where('id_subbab', $subbab->id)->paginate(5);
        $kitab = Kitab::with(['bab'])->get();
        // $judul->load('episode')->paginate(5);
        return view('components.templates.user.video.index',[
            'title' => 'Video',
            'user' => $user,
            'judul' => $judul,
            'bab' => $bab,
            'subbab' => $subbab,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ]);
    }

    public function show($id)
    {
        $user = auth()->user();
        $episode = Episode::with(['judul'])->where('id_judul', $id)->first();
        $judul = Judul::where('id',$episode->judul->id)->first();
        $subbab = SubBab::where('id', $judul->subbab->id)->first();
        $bab = Bab::with(['kitab'])->where('id',$subbab->bab->id)->first();
        $episodevideo = Episode::with(['judul'])->where('id', $id)->first();
        $episodelist = Episode::with(['judul'])->where('id_judul', $id)->get();
        $kitab = Kitab::with(['bab'])->get();
        return view('components.templates.user.video.show',[
            'title' => 'Video Player',
            'user' => $user,
            'episode' => $episode,
            'bab' => $bab,
            'episodevideo' => $episodevideo,
            'episodelist' => $episodelist,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ]);
    }
    public function display($id)
    {
        $user = auth()->user();
        $episode = Episode::with(['judul'])->where('id', $id)->first();
        $judul = Judul::where('id',$episode->judul->id)->first();
        $subbab = SubBab::where('id', $judul->subbab->id)->first();
        $bab = Bab::with(['kitab'])->where('id',$subbab->bab->id)->first();
        $episodevideo = Episode::with(['judul'])->where('id', $id)->first();
        $episodelist = Episode::with(['judul'])->where('id_judul', $judul->id)->get();
        $kitab = Kitab::with(['bab'])->get();
        return view('components.templates.user.video.show',[
            'title' => 'Video Player',
            'user' => $user,
            'episode' => $episode,
            'bab' => $bab,
            'episodevideo' => $episodevideo,
            'episodelist' => $episodelist,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ]);
    }
}
