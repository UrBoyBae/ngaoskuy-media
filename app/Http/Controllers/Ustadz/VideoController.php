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
    public function index()
    {
        $user = auth()->user();
        $episode = Episode::all();
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::all();
        return [
            'title' => 'Home',
            'user' => $user,
            'episode' => $episode,
            'kitab' => $kitab,
            'article' => $article,
        ];
    }

    public function show($id)
    {
        $user = auth()->user();
        $episode = Episode::all();
        $subbab = SubBab::where('id_bab', $id)->get();
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::all();
        return [
            'title' => 'Home',
            'user' => $user,
            'episode' => $episode,
            'subbab' => $subbab,
            'kitab' => $kitab,
            'article' => $article,
        ];
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
