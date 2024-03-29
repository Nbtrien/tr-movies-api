<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\{Movie, Comment};
use App\Http\Resources\CommentResource;

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

    public function index(Request $request)
    {
        $comments = Comment::orderBy('movie_id')->get();

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
                    $reply["time"] = $this->customeTime(strtotime($reply["created_at"]));
                    $reply->user;
                }
            }
            
            $comment["replies"] = $replies ?: null;
        }

        return CommentResource::collection($comments);
    }

    // get comments by movie id
    public function commentsbyMovieId(Request $request) {
        // get request
        $movie_id = $request->movie_id;
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
                    $reply["time"] = $this->customeTime(strtotime($reply["created_at"]));
                    $reply->user;
                }
            }
            
            $comment["replies"] = $replies ?: null;
        }
        // $data['title'] = 'data';
        // $data['comment'] = 
        // return response()->json(
        //     $comments
        // );
        return CommentResource::collection($comments);
    }

    // Save Comment
    public function store(Request $request) {


        $data = $request->all();

        $validator = Validator::make($data, [
            'content' => 'bail|required|string'
        ]);

        if ($validator->fails()) {
            return response([
                'status' => false,
                'message' => $validator->errors()
            ]);
        }
        
        $comment = new Comment;
        $comment->user_id = $request->user_id;
        $comment->movie_id = $request->movie_id;
        $comment->content = $request->content;
        $comment->parent_id = $request->parent_id;
        if ($comment->save()) 
        {
            return response()->json([
                'status' => true,
                'message' => "Succsessful"
            ]);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => "failed"
            ]);
        }
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        $result = $comment->delete();
        return response()->json([
            'status' => $result
        ]);
    }
}
