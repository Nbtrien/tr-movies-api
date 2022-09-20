<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\{Movie, Comment};

class CommentController extends Controller
{

    // custome Time function
    public function customeTime($oldTime) {
        // get current date
        $date = getdate();
        $curr = $date['year']."-".$date['mon']."-".$date['mday']." ".date('H:i:s');
        $currTime = strtotime($curr) ; 

        // time in seconds 
        $secs = $currTime - $oldTime;

        if ($secs >= 31536000 ) 
        {
            $time = floor($secs / 31536000)." năm trước";
        }
        elseif ($secs >= 86400 *30) 
        {
            $time = floor($secs / (86400 *30))." tháng trước";
        }
        elseif ($secs > 86400 ) 
        {
            $time = floor($secs / 86400)." ngày trước";
        }
        elseif ($secs > 3600) 
        {
            $time = floor($secs / 3600)." giờ trước";
        }
        elseif ($secs > 60)  
        {
            $time = floor($secs / 60)." phút trước";
        }
        else $time = $secs." giây trước";

        return $time;
    }

    // get comments by movie id
    public function commentsbyMovieId(Request $request) {
        // get request
        $movie_id = $request->id;
        $limit = $request->limit ?: 12;

        // get comments
        $comments = Comment::where('movie_id', '=', $movie_id)
            ->where('parent_id',null)
            ->orderBy('created_at','desc')
            ->paginate($limit);

        // loop through the comments
        foreach ($comments as $comment) {
            $comment->user;
            // custome time 
            $datetime2 = strtotime($comment["created_at"]);

            $comment["time"] = $this->customeTime($datetime2);

            // get reply comments
            $replies = Comment::where('parent_id', $comment->id)->get();
            if ($replies) {
                foreach ($replies as $reply) {
                    // custome time
                    $reply["time"] = $this->customeTime(strtotime($reply["created_at"])) && $reply->user;
                }
            }
            
            $comment["replies"] = $replies ?: null;
        }
        // $data['title'] = 'data';
        // $data['comment'] = 
        return response()->json(
            $comments
        );
    }
}
