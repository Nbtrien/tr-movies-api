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
        $movie_id = $request->movie_id;
        $movie = Movie::find($movie_id);

        // check is feature movie
        if ($movie->category->name == 'phim lẻ') {
            // get video from feature movies 
            $video = $movie->featuremovies->video;
            $video->video_url = 'http://192.168.1.6/Laravel Projects/webmovies/public/Videos/'.$video->video_url;
            return response()->json([
                'id' => $video->id, 
                'video_url' => $video->video_url,
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
                $video->video_url = 'http://192.168.1.6/Laravel Projects/webmovies/public/Videos/'.$video->video_url;
            } else {
                $video->video_url = null;
            }
            return response()->json([
                'id' => $video->id, 
                'video_url' => $video->video_url,
            ]);                 
        }
    }

    // Get video by id
    public function getVideobyId(Request $request)
    {
        $id = $request->video_id;
        $video = Video::select('id','video_url')->find($id);
        $video->video_url = 'http://192.168.1.6/Laravel Projects/webmovies/public/Videos/'.$video->video_url;
        
        return response()->json(
            $video
        );
    }

    // get video id by episode
    public function getVideoIdbyEpisode(Request $request){
        $movie_id = $request->movie_id;
        $ep = $request->episode;
        $seriesmovie = Seriesmovie::where('movie_id', $movie_id)->first();

        $episode = Episode::where('seriesmovie_id', $seriesmovie->id)
                            ->where('episode', $ep) 
                            ->first();
        $video_id = $episode->video_id;
        $video['id'] = $video_id;
        return response()->json(
            $video
        );
    }

        // get video by episode
        public function getVideobyEpisode(Request $request){
            $movie_id = $request->movie_id;
            $ep = $request->episode;
            $seriesmovie = Seriesmovie::where('movie_id', $movie_id)->first();
    
            $episode = Episode::where('seriesmovie_id', $seriesmovie->id)
                                ->where('episode', $ep) 
                                ->first();
            $video = $episode->video;
            return response()->json([
                'id' => $video->id, 
                'video_url' => $video->video_url,
            ]);   
        }
}
