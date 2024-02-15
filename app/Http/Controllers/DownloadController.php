<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\Question;
use Barryvdh\DomPDF\Facade;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use YouTube\Exception\YouTubeException;
use YouTube\YouTubeDownloader;

class DownloadController extends Controller
{
    public function pdf($id)
    {
        $episode = Episode::with('judul')->where("id", $id)->first();
        $details=['episode' => $episode];
        $pdf = Pdf::loadView('components/templates/download/pdf/index',$details );

        return $pdf->stream($episode->judul->name." | ".$episode->name.".pdf");

    }

    public function video($id)
    {
        $getLink = Episode::with('judul')->where('id', $id)->first()->video_link;
        $youtubeDownloader = new YouTubeDownloader();

        try{
            $videoResolustion = $youtubeDownloader->getDownloadLinks("https://www.youtube.com/watch?v=".$getLink)->getVideoFormats()[2]->url;
            return redirect($videoResolustion);
        }catch(YouTubeException $e){

        }
    }

    public function audio($id)
    {
        $getLink = Episode::with('judul')->where('id', $id)->first()->video_link;
        $youtubeDownloader = new YouTubeDownloader();

        try {
            $audioFormat = $youtubeDownloader->getDownloadLinks("https://www.youtube.com/watch?v=".$getLink)->getAudioFormats()[2]->url;
            return redirect($audioFormat);
        } catch (YouTubeException $e) {

        }
    }

}
