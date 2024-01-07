<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Episode;
use App\Models\Judul;
use App\Models\Kitab;
use App\Models\Question;
use App\Models\SubBab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EpisodeController extends Controller
{
    private function getYouTubeVideoId($url)
    {
        $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/';
        preg_match($pattern, $url, $matches);

        return $matches[1] ?? null;
    }

    private function getYoutubeDataApi(Request $request)
    {
        $videoLink = $request->video_link;
        $videoId = $this->getYouTubeVideoId($videoLink);
        $key = env('YOUTUBE_API_KEY');
        $youtubeApiUrl = "https://www.googleapis.com/youtube/v3/videos?part=snippet?id=" + $videoId + "&key=" + $key;
        $response = Http::get($youtubeApiUrl);

        return $response->json();
    }

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
        $judul = Judul::findOrFail($idsubbab);
        try {
            $apiData = $this->getYoutubeDataApi($request->video_link);
        } catch (\Throwable $th) {
            return redirect()->route('namarute')->with('failed', $th->getMessage());
        }
        $thumbnails = $apiData['items'][0]['snippet']['thumbnails']['maxres']['url'];
        $videoId = $apiData['items'][0]['id'];
        Episode::create([
            'id_judul' => $judul->id,
            'name' => $request->name,
            'thumbnail' => $thumbnails,
            'video_link' => $videoId,
            'resume' => $request->resume,
            'tag' => $request->tag,
        ]);
        return redirect()->route('namarute')->with('success', 'Episode created succesfully');
    }

    public function editEpisode(Request $request, $id)
    {
        $episode = Episode::findOrFail($id);
        $episode->update([
            'name' => $request->name
        ]);
        return to_route('namarute')->with('success', 'Episode created succesfully');
    }

    public function deleteEpisode($id)
    {
        $episode = Episode::findOrFail($id);
        $episode->delete();
        return to_route('namarute')->with('success', 'Episode deleted succesfully');
    }
}
