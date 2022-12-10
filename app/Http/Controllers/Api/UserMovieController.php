<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Movie, Usermovie};
use App\User;

class UserMovieController extends Controller
{
        // Check movie of user
        public function checkMoviebyUser(Request $request){
            $user_id = $request->user_id;
            $movie_id = $request->movie_id;
            $usermovie = Usermovie::where('user_id', '=', $user_id)->where('movie_id', '=', $movie_id)->count();
            if ($usermovie > 0){
                $result = true;
            }  else {
                $result = false;
            }
            return response()->json([
                'status' => $result
            ]);
        }

    // store
    public function store(Request $request)
    {
        $usermovie = new Usermovie;
        $usermovie->user_id = $request->user_id;
        $usermovie->movie_id = $request->movie_id;
        if ($usermovie->save()) 
        {
            return response()->json([
                'status' => true,
                'message' => "Successful"
            ]);
        }
        else {
            return response()->json([
                'status' => false,
                'message' => "Failed"
            ]);
        }
    }

    // delete
    public function destroy(Request $request)
    {
        $user_id = $request->user_id;
        $movie_id = $request->movie_id;

        $usermovie = Usermovie::where('user_id', '=' ,$user_id)->where('movie_id', '=', $movie_id)->first();

        if ($usermovie->delete()) 
        {
            return response()->json([
                'status' => true,
                'message' => "Successful"
            ]);
        }
        else {
            return response()->json([
                'status' => false,
                'message' => "Failed"
            ]);
        }
    }
}
