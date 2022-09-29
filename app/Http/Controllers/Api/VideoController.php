<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Video, Movie, Episode, Seriesmovie, Featuremovie };
use EpisodeController;

class VideoController extends Controller
{
    // get video by movie id
    public function getVideobyMovieId(Request $request)
    {
        // get request
        $movie_id = $request->id;
        $movie = Movie::find($movie_id);

        // check is feature movie
        if ($movie->category->name == 'phim lẻ') {
            // get video from feature movies 
            $video = $movie->featuremovies->video;
            $url['url'] = 'http://localhost/Laravel Projects/webmovies/public/Videos/'.$video->video_url;
            return response()->json([
                'data' => $url
            ]);
        } else
        {
            // is series movie
            
            // get episode   from seriesmovies
            $episode = Episode::where('seriesmovie_id',$movie->seriesmovies->id)
                                ->orderBy('updated_at', 'asc')
                                ->first();
            // $video = $episode->video ?: null;
            // get video from episode
            if ($episode) {
                $video = $episode->video;
                $url['url'] = 'http://localhost/Laravel Projects/webmovies/public/Videos/'.$video->video_url;
            } else {
                $url['url'] = null;
            }
            return response()->json([
                'data' => $url
            ]);                   
        }
    }

    // Get video by id
    public function getVideobyId(Request $request)
    {
        $id = $request->id;
        $video = Video::find($id);
        $url['url'] = 'http://localhost/Laravel Projects/webmovies/public/Videos/'.$video->video_url;
        return response()->json([
            'data' => $url
        ]);
    }

    // get video id by episode
    public function getVideoIdbyEpisode(Request $request){
        $movie_id = $request->id;
        $ep = $request->episode;
        $seriesmovie = Seriesmovie::where('movie_id', $movie_id)->first();

        $episode = Episode::where('seriesmovie_id', $seriesmovie->id)
                            ->where('episode', $ep) 
                            ->first();
        $video_id = $episode->video_id;
        $video['video_id'] = $video_id;
        return response()->json([
            'data' => $video
        ]);
    }
}
