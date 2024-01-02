<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Episode;
use App\Models\Kitab;
use App\Models\Question;
use Illuminate\Http\Request;

class VideoListController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $episode = Episode::all()->sortBy('id_judul');
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        return [
            'title' => 'Video',
            'user' => $user,
            'episode' => $episode,
            'kitab' => $kitab,
        ];
    }
}
