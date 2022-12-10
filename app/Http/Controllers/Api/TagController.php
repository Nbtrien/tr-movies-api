<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Movie, Image, Trailer, Country, Categories, Genre, GenreinMovie, Actor, ActorinMovie, 
    Director, Episode, MovieinTag, Tag, MovieinSeries, Series, DirectorinMovie};
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\AppResource;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tags = Tag::get();

        return AppResource::collection($tags);
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
        $tag = New Tag;
        $tag->name = $request->name;

        $result = $tag->save();

        return response()->json([
            'status' => $result
        ]);
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
        $tag = Tag::find($id);
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'bail|required'
        ]);

        if ($validator->fails()) {
            return response([
                'status' => false,
                'message' => $validator->errors()
            ]);
        }

        $tag->name = $request->name;
        $result = $tag->save();

        return response()->json([
            'status' => $result
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $tags_id = $request->id;

        foreach ($tags_id as $id) {
            $tag = tag::find($id);
            $tag->delete();
        }
        return response()->json([
            'status' => true
        ]);
    }
}
