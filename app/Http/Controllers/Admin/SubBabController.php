<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Bab;
use App\Models\Episode;
use App\Models\Judul;
use App\Models\Kitab;
use App\Models\Question;
use App\Models\SubBab;
use Illuminate\Http\Request;

class SubBabController extends Controller
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
        $subbab = SubBab::where('id_bab', $id)->get();
        $episode = Episode::all();
        $question = Question::all();
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::all();
        
        return [
            'title' => 'Sub Bab',
            'subbab' => $subbab,
            'user' => $user,
            'episode' => $episode,
            'question' => $question,
            'article' => $article,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ];
    }
    
    public function createJudul()
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        return [
            'title' => 'Create Judul',
            'user' => $user,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ];
    }
    
    public function storeJudul(Request $request, $idsubbab)
    {
        $subbab = SubBab::findOrFail($idsubbab);
        Judul::create([
            'id_subbab' => $subbab->id,
            'name' => $request->name,
        ]);
        return to_route('namarute')->with('success', 'Judul created succesfully');
    }
    
    public function editJudul($id)
    {
        $judul = Judul::findOrFail($id);
        $kitab = Kitab::with(['bab'])->get();
        $user = auth()->user();
        return [
            'title' => 'Create Judul',
            'kitab' => $kitab,
            'roles' => $this->roles,
            'user' => $user,
            'judul' => $judul,
        ];
    }
    public function updateJudul(Request $request, $id)
    {
        $judul = Judul::findOrFail($id);
        $judul->update([
            'name' => $request->name
        ]);
        return to_route('namarute')->with('success', 'Judul created succesfully');
    }

    public function deleteJudul($id)
    {
        $judul = Judul::findOrFail($id);
        $judul->delete();
        return to_route('namarute')->with('success', 'Judul deleted succesfully');
    }
}
