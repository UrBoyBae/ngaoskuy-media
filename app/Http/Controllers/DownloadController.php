<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\Question;
use Barryvdh\DomPDF\Facade;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function pdf($id)
    {
        $episode = Episode::with('judul')->where("id", $id)->first();
        $details=['episode' => $episode];
        $pdf = Pdf::loadView('components/templates/download/pdf/index',$details );

        return $pdf->stream($episode->judul->name." | ".$episode->name.".pdf");
        
    }
    
}
