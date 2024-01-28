<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Kitab;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {

        $user = Auth()->user();
        $roles = $user->getRoleNames();
        $kitab = Kitab::with(['bab'])->get();

        return view('components.templates.about-us', [
            'title' => 'About US',
            'roles' => $roles,
            'user' => $user,
            'kitab' => $kitab,
        ]);

    }
}
