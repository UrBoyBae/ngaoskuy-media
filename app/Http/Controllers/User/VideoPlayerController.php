<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\Kitab;
use Illuminate\Http\Request;

class VideoPlayerController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $episode = Episode::all()->where('id', $request)->first();
        $episodelist = Episode::all()->sortBy('id_judul');
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        return [
            'title' => 'Video Player',
            'user' => $user,
            'episode' => $episode,
            'episodelist' => $episodelist,
            'kitab' => $kitab,
        ];
    }
}
