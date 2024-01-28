<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Bab;
use App\Models\Episode;
use App\Models\Kitab;
use App\Models\Question;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $roles;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->roles = auth()->check() ? auth()->user()->getRoleNames() : [];

            return $next($request);
        });
    }
    public function index()
    {
        $user = auth()->user();
        $episode = Episode::all();
        $question = Question::all();
        $roles = $user->getRoleNames();
        $kitab = Kitab::with(['bab'])->get();
        $article  = Article::all();
        return view('components.templates.admin.dashboard.index', [
            'title' => 'Home',
            'user' => $user,
            'roles' => $roles,
            'episode' => $episode,
            'question' => $question,
            'article' => $article,
            'kitab' => $kitab,
            'roles'=>$this->roles,
        ]);
    }
    //Kitab
    public function createKitab()
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        return [
            'title' => 'Create Kitab',
            'user' => $user,
            'kitab' => $kitab,
            'roles'=>$this->roles,
        ];
    }
    public function storeKitab(Request $request)
    {
        Kitab::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return to_route('namarute')->with('success', 'Kitab created succesfully');
    }
    
    public function editKitab($id)
    {
        $kitab = Kitab::findOrFail($id);
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        return [
            'title' => 'Create Kitab',
            'user' => $user,
            'kitab' => $kitab,
            'roles'=>$this->roles,
        ];
    }
    
    public function updateKitab(Request $request, $id)
    {
        $kitab = Kitab::findOrFail($id);
        $kitab->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return to_route('namarute')->with('success', 'Kitab updated succesfully');
    }
    
    public function deleteKitab($id)
    {
        $kitab = Kitab::findOrFail($id);
        $kitab->delete();
        return to_route('namarute')->with('success', 'Kitab deleted succesfully');
    }
    
    //Bab
    public function createBab()
    {
        $user = auth()->user();
        $kitab = Kitab::with(['bab'])->get();
        return [
            'title' => 'Create Bab',
            'user' => $user,
            'kitab' => $kitab,
            'roles'=>$this->roles,
        ];
    }
    public function storeBab(Request $request, $kitabid)
    {
        $kitab = Kitab::findOrFail($kitabid);
        Bab::create([
            'id_kitab' => $kitab->id,
            'name' => $request->name,
        ]);
        return to_route('namarute')->with('success', 'Bab created succesfully');
    }
    
    public function editBab($id)
    {
        $user = auth()->user();
        $bab = Bab::findOrFail($id);
        $kitab = Kitab::with(['bab'])->get();
        return [
            'title' => 'Create Bab',
            'user' => $user,
            'bab' => $bab,
            'kitab' => $kitab,
            'roles'=>$this->roles,
        ];
    }
    
    public function updateBab(Request $request, $id)
    {
        $bab = Bab::findOrFail($id);
        $bab->update([
            'name' => $request->name,
        ]);
        return to_route('namarute')->with('success', 'Bab updated succesfully');
    }
    
    public function deleteBab($id)
    {
        $bab = Bab::findOrFail($id);
        $bab->delete();
        return to_route('namarute')->with('success', 'Bab deleted succesfully');
    }
}