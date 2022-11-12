<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Series, Movie}; 

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // get series 
    public function index(Request $request)
    {
        $request->keyword = $request->keyword ?: 'updated_at';
        $request->orderby = $request->orderby ?: 'desc';
        if ($limit = $request->limit) {
            $series = Series::orderBy($request->keyword, $request->orderby)
            ->paginate($limit);
            foreach ($variable as $key => $value) {
                # code...
            }
            // return response()->json(
            //     $series
            // );
            
        } else {
            $series = Series::orderBy($request->keyword, $request->orderby)->get();
            return response()->json([
                "data" => $series
            ]);
        }
    }

    public function getSeriesbyMovie(Request $request) {
        $movie_id = $request->movie_id;
        $movie = Movie::select('id')->find($movie_id);
        $movieinseries = [];
        foreach ($movie->movieinseries as $movieinserie) {
            $series[] = $movieinserie->series;
        }

        return response()->json([
            "data" => $series
        ]);
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
