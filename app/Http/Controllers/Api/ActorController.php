<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Actor, Image, Movie, Actorinmovie};

class ActorController extends Controller
{
    // Get video by id
    public function getActorbyId(Request $request)
    {
        $id = $request->id;
        $actor = Actor::find($id);
        $actor->image;
        $data['actor'] = $actor;
        return response()->json(
            $actor
        );
    }

    public function getActorsbyMovie(Request $request)
    {
        $movie_id = $request->movie_id;
        $movie = Movie::find($movie_id);
        $actors = [];
        foreach ($movie->actorinmovies as $actorinmovie) {
            $actor = $actorinmovie->actor;
            $actor->image;
            $actors[] = $actor;
        }

        return response()->json([
            'data' => $actors
        ]
        );

    }
}
