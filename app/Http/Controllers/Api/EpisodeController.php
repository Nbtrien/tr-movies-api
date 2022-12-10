<?php

namespace App\Http\Controllers\Api;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\AppResource;

use App\Models\{Movie, Episode, Seriesmovie, Image, Video };

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
        $episodes = Episode::where('seriesmovie_id', $seriesmovie->id)
        ->get();

        foreach ($episodes as $episode) {
            $episode->image;
        }

        return response()->json([
            'episode' => $current_episode,
            'data' => $episodes ?: null
        ]);
    }

    public function storeFiletoDrive($file){
        $name = time().'.' . explode('/', explode(':', substr($file, 0, strpos($file, ';')))[1])[1];

        $disk = Storage::disk('google')->put($name, file_get_contents($file));

        $gcs = Storage::disk('google');
        $url = $gcs->url($name);


        return $url;
    }

    // Save the new actor to the database
    public function store(Request $request)
    {
        $episode = new Episode;

        $movie_id = $request->movie_id;
        $movie = Movie::find($movie_id);
        $seriesmovie = $movie->seriesmovies;

        $image = $request->get('image')['file'];
        $image_url = $this->storeFiletoDrive($image);

        $imagepro = new Image;
        $imagepro->image_url = $image_url;
        $imagepro->save();
        $image_id = $imagepro->id;

        $video = new Video;
        $video->video_url = $request->video;
        $video->save();
        $video_id = $video->id;

        
        $episode->episode = $request->episode;
        $episode->title = $request->episode_title;
        $episode->seriesmovie_id = $seriesmovie->id;
        $episode->profileimage_id = $image_id;
        $episode->video_id = $video_id;

        $result = $episode->save();
        return response()->json([
            'status' => $result
        ]);


        // $episode->profileimage_id = $profileimage_id;
        // $episode->video_id = $video_id;
        // $episode->save();
    }



}
