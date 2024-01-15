<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Episode;
use App\Models\Judul;
use App\Models\Kitab;
use App\Models\Question;
use App\Models\SubBab;
use Illuminate\Http\Request;

class VideoListController extends Controller
{
    public function index($id)
    {
        $user = auth()->user();
        $subbab = SubBab::where('id_bab', $id)->first();
        $judul = Judul::with(['episode'])->where('id_subbab', $subbab->id)->get();
        $kitab = Kitab::with(['bab'])->get();
        $judul->load('episode');
        // dd($judul);
        return view('components.templates.user.video.index',[
            'title' => 'Video',
            'user' => $user,
            'judul' => $judul,
            'subbab' => $subbab,
            'kitab' => $kitab,
        ]);
    }

    public function show($id)
    {
        $user = auth()->user();
        $judul = Judul::where('id_subbab', $id)->get();
        $episode = Episode::where('id_judul', $judul->id)->first();
        $episodelist = Episode::where('id_judul', $judul->id)->get();
        $kitab = Kitab::with(['bab'])->get();
        return view('components.templates.user.video.show',[
            'title' => 'Video Player',
            'user' => $user,
            'judul' => $judul,
            'episode' => $episode,
            'episodelist' => $episodelist,
            'kitab' => $kitab,
        ]);
    }
}
