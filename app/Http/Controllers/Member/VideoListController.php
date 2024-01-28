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
        $judul = Judul::where('id_subbab', $subbab->id)->get();
        $kitab = Kitab::with(['bab'])->get();
        return [
            'title' => 'Video',
            'user' => $user,
            'judul' => $judul,
            'subbab' => $subbab,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ];
    }

    public function show($id)
    {
        $user = auth()->user();
        $judul = Judul::where('id_subbab', $id)->get();
        $episode = Episode::where('id_judul', $judul->id)->first();
        $episodelist = Episode::where('id_judul', $judul->id)->get();
        $kitab = Kitab::with(['bab'])->get();
        return [
            'title' => 'Video Player',
            'user' => $user,
            'judul' => $judul,
            'episode' => $episode,
            'episodelist' => $episodelist,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ];
    }
}
