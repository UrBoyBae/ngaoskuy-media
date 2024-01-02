<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Bab;
use App\Models\Episode;
use App\Models\Kitab;
use App\Models\SubBab;
use Illuminate\Http\Request;

class VideoListController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $episode = Episode::orderBy('id_judul')->get();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        return [
            'title' => 'Video',
            'user' => $user,
            'episode' => $episode,
            'kitab' => $kitab,
        ];
    }

    // public function show($id)
    // {
    //     $user = auth()->user();
    //     $episode = Episode::orderBy('id_judul')->get();
    //     $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
    //     $bab = Bab::findOrFail($id);
    //     $subbab = SubBab::where('id_bab', $id)->get();
    //     return [
    //         'title' => 'Video',
    //         'user' => $user,
    //         'episode' => $episode,
    //         'kitab' => $kitab,
    //         'bab' => $bab,
    //         'subbab' => $subbab,
    //     ];
    // }
}
