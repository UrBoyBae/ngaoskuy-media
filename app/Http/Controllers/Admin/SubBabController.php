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
    public function index($id)
    {
        $user = auth()->user();
        $subbab = SubBab::where('id_bab', $id)->get();
        $episode = Episode::all();
        $question = Question::all();
        $kitab = Kitab::with(['bab', 'subbab', 'judul', 'episode'])->get();
        $article  = Article::all();

        return [
            'title' => 'Sub Bab',
            'subbab' => $subbab,
            'user' => $user,
            'episode' => $episode,
            'question' => $question,
            'kitab' => $kitab,
            'article' => $article,
        ];
    }

    public function createJudul(Request $request, $idsubbab)
    {
        $subbab = SubBab::findOrFail($idsubbab);
        Judul::create([
            'id_subbab' => $subbab->id,
            'name' => $request->name,
        ]);
        return to_route('namarute')->with('success', 'Judul created succesfully');
    }

    public function editJudul(Request $request, $id)
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
