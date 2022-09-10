<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\{Movie, Comment};

class CommentController extends Controller
{

    public function customeTime($oldTime) {
        $date = getdate();
        $curr = $date['year']."-".$date['mon']."-".$date['mday']." ".date('H:i:s');
        $currTime = strtotime($curr) ; 

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

    public function commentsbyMovieId(Request $request) {
        $movie_id = $request->id;
        $limit = $request->limit ?: 12;

        $comments = Comment::where('movie_id', '=', $movie_id)
            ->where('parent_id',null)
            ->orderBy('created_at','desc')
            ->paginate($limit);

        foreach ($comments as $comment) {
            $comment->user;
            $datetime2 = strtotime($comment["created_at"]);

            $comment["time"] = $this->customeTime($datetime2);

            $replies = Comment::where('parent_id', $comment->id)->get();
            if ($replies) {
                foreach ($replies as $reply) {
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
