<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Movie,Trailer};

class TrailerController extends Controller
{
    // get trailer by movie id
    public function getTrailerbyMovieId($movie_id)
    {
        $movie = Movie::findOrFail($movie_id);
        $trailer = $movie->trailer;
        $trailer->trailer_url = 'http://localhost/Laravel%20Projects/webmovies/public/Videos/'.$trailer->trailer_url;
        return response()->json(
            $trailer
        );
        
    }
}
