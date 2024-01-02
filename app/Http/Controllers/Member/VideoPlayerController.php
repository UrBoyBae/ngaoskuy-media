<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\Judul;
use App\Models\Kitab;
use Illuminate\Http\Request;

class VideoPlayerController extends Controller
{
    public function index(Request $request, $param)
    {
        $user = auth()->user();
        $episode = Episode::findOrFail($param);
        $judul = Judul::where('id', $episode->id_judul)->first();
        $episodelist = Episode::where('id_judul', $judul->id)->get();
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
