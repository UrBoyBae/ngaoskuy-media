<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Bab;
use App\Models\Episode;
use App\Models\Judul;
use App\Models\Kitab;
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
        $bab = Bab::with(['kitab'])->where('id',$subbab->bab->id)->first();
        $judul = Judul::where('id_subbab', $subbab->id)->paginate(5);
        $kitab = Kitab::with(['bab'])->get();
            return view('components.templates.member.video.index',[
            'title' => 'Video',
            'user' => $user,
            'judul' => $judul,
            'subbab' => $subbab,
            'bab' => $bab,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ]);
    }

    public function show($id)
    {
        $user = auth()->user();
        $judul = Judul::where('id', $id)->first();
        $episode = Episode::where('id_judul', $judul->id)->first();
        $episodevideo = Episode::with(['judul'])->where('id', $id)->first();
        $episodelist = Episode::where('id_judul', $judul->id)->get();
        $kitab = Kitab::with(['bab'])->get();
        $subbab = SubBab::where('id', $episode->judul->id_subbab)->first();
        $bab = Bab::with(['kitab'])->where('id',$subbab->id_bab)->first();
        return view('components.templates.member.video.show',[
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
        return view('components.templates.member.video.show',[
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
}
