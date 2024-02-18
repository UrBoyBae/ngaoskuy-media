<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\Question;
use Barryvdh\DomPDF\Facade;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Spatie\Browsershot\Browsershot;
use Spatie\LaravelPdf\Facades\Pdf as FacadesPdf;
use YouTube\Exception\YouTubeException;
use YouTube\YouTubeDownloader;

class DownloadController extends Controller
{
    public function pdf($id)
    {
        $episode = Episode::with('judul')->where("id", $id)->first();
        $details=['episode' => $episode];
        $pdf = Pdf::loadView('components/templates/download/pdf/index',$details );
        // $html = View::make('components.templates.download.pdf.index',['episode' => $episode])->render();
        $nama_file = $episode->judul->name.' | '.$episode->name.'.pdf';
        // return $pdf->stream($episode->judul->name." | ".$episode->name.".pdf");
        // Browsershot::url($html)->save('example.pdf')->setIncludePath('$PATH:/c/Program Files/nodejs/');
        // dd($episode->resume);
        $html = View::make('components.templates.download.pdf.index', compact('episode'))->render();
        // <<<HTML
        // <h2 class="header" >Ngaos Kuy!</h2>
        // <h3 class="slogan">Iman, Ilmu, Bersungguh-sungguh, Maksimal, dan Konsisten.</h3>
        // <hr>
        // <h1 class="title">{$episode->judul->name} | {$episode->name}</h1>
        // <pre class="paragraph" style="font-family: 'Arial';line-height: 0.7cm">
        //     $episode->resume
        // </pre>
        // HTML;
        // dd($html);
        $pdf = Browsershot::html($html)
    ->noSandbox()
    ->setIncludePath('/c/Users/LENOVO/node/node')
    ->format('a4')
    ->pdf();

return Response::make($pdf, 200, [
    'Content-Type' => 'application/pdf',
    'Content-Disposition' => 'attachment; filename="' . $nama_file . '"',
]);

        // FacadesPdf::view('components/templates/download/pdf/index', ['episode' => $episode])
        // ->withBrowsershot(function (Browsershot $browsershot) {
        //     $browsershot->noSandbox();
        //     $browsershot->setIncludePath('/c/Users/LENOVO/node/node');
        // })
        // ->save($episode->judul->name.' | '.$episode->name.'.pdf');
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
