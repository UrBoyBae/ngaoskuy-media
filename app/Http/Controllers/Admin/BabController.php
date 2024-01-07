<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Bab;
use App\Models\Episode;
use App\Models\Kitab;
use App\Models\Question;
use App\Models\SubBab;
use Illuminate\Http\Request;

class BabController extends Controller
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

    public function createSubbab(Request $request, $idbab)
    {
        $bab = Bab::findOrFail($idbab);
        SubBab::create([
            'id_bab' => $bab->id,
            'name' => $request->name,
        ]);
        return to_route('namarute')->with('success', 'SubBab created succesfully');
    }

    public function editSubbab(Request $request, $id)
    {
        $subbab = SubBab::findOrFail($id);
        $subbab->update([
            'name' => $request->name
        ]);
        return to_route('namarute')->with('success', 'SubBab created succesfully');
    }

    public function deleteSubbab($id)
    {
        $subbab = SubBab::findOrFail($id);
        $subbab->delete();
        return to_route('namarute')->with('success', 'SubBab deleted succesfully');
    }
}
