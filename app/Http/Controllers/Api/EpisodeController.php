<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\{Movie, Episode, Seriesmovie };

class EpisodeController extends Controller
{
    public function getEpisodesbyMovie(Request $request)
    {
        $movie_id = $request->id;
        $current_episode = $request->ep ?: null;

        $seriesmovie = Seriesmovie::where('movie_id', $movie_id)->first();

        $episodes = Episode::select('id', 'episode')
        ->where('seriesmovie_id', $seriesmovie->id)
        ->get();

        return response()->json([
            'episode' => $current_episode,
            'data' => $episodes ?: null
        ]);
    }

}
