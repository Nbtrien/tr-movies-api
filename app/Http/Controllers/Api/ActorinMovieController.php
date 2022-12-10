<?php

namespace App\Http\Controllers\api;

use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Actor, Image, Movie, Actorinmovie};
use App\Http\Resources\AppResource;

class ActorinMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie_id = $request->movie_id;
        $actors = $request->actors;
        $actorinmovies = [];
        foreach ($actors as $actor) {
            $actorinmovie = Actorinmovie::where('movie_id','=',$movie_id)->where('actor_id','=',$actor)->first();
            if (!$actorinmovie) {
                $newActorinmovie = new Actorinmovie;
                $newActorinmovie->movie_id = $movie_id;
                $newActorinmovie->actor_id = $actor;
                $newActorinmovie->save();
            }
        }
        return response()->json(['status'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
