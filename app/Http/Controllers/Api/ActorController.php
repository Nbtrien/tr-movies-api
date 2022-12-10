<?php

namespace App\Http\Controllers\Api;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Actor, Image, Movie, Actorinmovie};
use App\Http\Resources\AppResource;

class ActorController extends Controller
{
    public function index(Request $request)
    {
        $actors = Actor::get();

        foreach ($actors as $actor) {
            $movies = [];
            foreach ($actor->actorinmovies as $actorinmovie) {
                $movies[] = $actorinmovie->movie->only('id','name');
            }
            $actor['movies'] = $movies;
            $actor->image;
        }

        return AppResource::collection($actors);
    }

    // Get video by id
    public function getActorbyId(Request $request)
    {
        $id = $request->id;
        $actor = Actor::find($id);
        $actor->image;
        $actor->country;
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
        $actor = new Actor;
        
        $profileimage = $request->get('profileimage')['file'];
        $image_url = $this->storeFiletoDrive($profileimage);

        $imagepro = new Image;
        $imagepro->image_url = $image_url;
        $imagepro->save();
        $image_id = $imagepro->id;

        $actor->name = $request->name;
        $actor->birthday = $request->birthday;
        $actor->gender = $request->gender;
        $actor->story = $request->story;
        $actor->country_id = $request->country;
        $actor->image_id = $image_id;

        $result = $actor->save();
        return response()->json([
            'status' => $result
        ]);
    }

}
