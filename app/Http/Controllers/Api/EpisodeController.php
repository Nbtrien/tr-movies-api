<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\{Movie, Episode, Seriesmovie };

class EpisodeController extends Controller
{
    // get episodes by movie id
    public function getEpisodesbyMovie(Request $request)
    {
        // get request
        $movie_id = $request->movie_id;
        $current_episode = $request->ep ?: null;

        // get series movie by movie id
        $seriesmovie = Seriesmovie::where('movie_id', $movie_id)->first();

        // get episodes by series
        $episodes = Episode::select('id', 'episode', 'title')
        ->where('seriesmovie_id', $seriesmovie->id)
        ->get();

        return response()->json([
            'episode' => $current_episode,
            'data' => $episodes ?: null
        ]);
    }

}
