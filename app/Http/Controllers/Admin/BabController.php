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
        
        return ([
            'title' => 'Sub Bab',
            'subbab' => $subbab,
            'user' => $user,
            'episode' => $episode,
            'question' => $question,
            'article' => $article,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ]);
    }
    
    public function createSubbab()
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        return ([
            'title' => 'Create Sub-Bab',
            'user' => $user,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ]);
    }
    
    public function storeSubbab(Request $request, $idbab)
    {
        $bab = Bab::findOrFail($idbab);
        SubBab::create([
            'id_bab' => $bab->id,
            'name' => $request->name,
        ]);
        return to_route('namarute')->with('success', 'SubBab created succesfully');
    }
    
    public function editSubbab($id)
    {
        $subbab = SubBab::findOrFail($id);
        $kitab = Kitab::with(['bab'])->get();
        $user = auth()->user();
        return ([
            'title' => 'Create Bab',
            'user' => $user,
            'subbab' => $subbab,
            'kitab' => $kitab,
            'roles' => $this->roles,
        ]);
    }
    
    public function updateSubbab(Request $request, $id)
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
