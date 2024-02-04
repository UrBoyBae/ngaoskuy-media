<?php

namespace App\Http\Controllers;

use App\Models\Kitab;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function index()
    {

        $user = Auth()->user();
        if(Auth()->user() != null){
            $roles = $user->getRoleNames();
        }
        else{
            $roles = null;
        }
        $kitab = Kitab::with(['bab'])->get();

        return view('components.templates.photo-gallery', [
            'title' => 'Photo Gallery',
            'roles' => $roles,
            'user' => $user,
            'kitab' => $kitab
        ]);
    }
}
