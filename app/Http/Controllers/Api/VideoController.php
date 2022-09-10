<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Video, Movie, Episode, Seriesmovie, Featuremovie };
use EpisodeController;

class VideoController extends Controller
{
    public function getVideobyMovieId(Request $request)
    {
        $movie_id = $request->id;
        $movie = Movie::find($movie_id);

        // if ($movie->featuremovies) {
        //     return response()->json([
        //         'movie' => $movie,
        //         'f' => $movie->featuremovies
        //     ]);
        // } else {
        //     return response()->json([
        //         'movie' => $movie,
        //         's' => $movie->seriesmovies
        //     ]);
        // }

        if ($movie->category->name == 'phim lẻ') {
            $video = $movie->featuremovies->video;
            $url['url'] = 'http://localhost/Laravel Projects/webmovies/public/Videos/'.$video->video_url;
            return response()->json([
                'data' => $url
            ]);
        } else
        {
            $episode = Episode::where('seriesmovie_id',$movie->seriesmovies->id)
                                ->orderBy('updated_at', 'asc')
                                ->first();
            // $video = $episode->video ?: null;
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
