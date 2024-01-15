<?php

namespace App\Http\Controllers;

use App\Models\Kitab;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function index()
    {

        $user = Auth()->user();
        $kitab = Kitab::with(['bab'])->get();

        return view('components.templates.photo-gallery', [
            'title' => 'Photo Gallery',
            'user' => $user,
            'kitab' => $kitab
        ]);
    }
}
