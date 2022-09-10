<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Movie,Trailer};

class TrailerController extends Controller
{
    //
    public function getTrailerbyMovieId($id)
    {
        $movie = Movie::findOrFail($id);
        $trailer = $movie->trailer;
        $url['url'] = 'http://localhost/Laravel Projects/webmovies/public/Videos/'.$trailer->trailer_url;
        return response()->json([
            'data' => $url
        ]);
        
    }
}
