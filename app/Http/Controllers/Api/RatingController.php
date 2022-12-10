<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Movie, Rating};
use App\User;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
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
        $data = $request->all();

        $validator = Validator::make($data, [
            'value' => 'bail|required|numeric'
        ]);

        if ($validator->fails()) {
            return response([
                'status' => false,
                'message' => $validator->errors()
            ]);
        }

        if ($rating = Rating::where('user_id', '=', $request->user_id)->where('movie_id', '=', $request->movie_id)->first()) {
            $rating->value = $request->value;
            $result = $rating->save();
        } else{

            $rating = new Rating;
            $rating->user_id = $request->user_id;
            $rating->movie_id = $request->movie_id;
            $rating->value = $request->value;
    
            $result = $rating->save();
        }

        if ($result == true) {
            $movie = Movie::find($request->movie_id);
            if ($ratings = Rating::where('movie_id', '=', $request->movie_id)->get()) {
                $sum = 0;
                 foreach ($ratings as $rating) 
                 {
                     $sum += $rating->value;
                 }
                $avgrating = $sum/count($ratings);
                $movie->avgrating = $avgrating;

                $return = $movie->save();

                return response()->json([
                    'status' => $return,
                ]);
            }
            
        }

        return response()->json([
            'status' => $result,
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
