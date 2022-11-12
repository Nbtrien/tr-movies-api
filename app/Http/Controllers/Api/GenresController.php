<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Movie, Image, Trailer, Country, Categories, Genre, GenreinMovie, Actor, ActorinMovie, 
    Director, Episode, MovieinTag, Tag, MovieinSeries, Series};
use App\Http\Resources\GenresResource;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // get request 
        $request->keyword = $request->keyword ?: 'updated_at';
        $request->orderby = $request->orderby ?: 'desc';
        if ($request->limit == 0) {
            $genres = Genre::orderBy($request->keyword, $request->orderby)->get();
            foreach ($genres as $genre) {
                $genre->image;
            }
            // return response()->json([
            //     "data" => $genres
            // ]);
            return GenresResource::collection($genres);
        } else {
            $limit = $request->limit ?: 12;

            $genres = Genre::orderBy($request->keyword, $request->orderby)
            ->paginate($limit);
             foreach ($genres as $genre) {
                $genre->image;
            }
            // return response()->json(
            //     $genres
            // );
            return GenresResource::collection($genres);
        }
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
        //
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
