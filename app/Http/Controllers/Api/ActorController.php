<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Actor, Image};

class ActorController extends Controller
{
        // Get video by id
        public function getActorbyId(Request $request)
        {
            $id = $request->id;
            $actor = Actor::find($id);
            $actor->image;
            $data['actor'] = $actor;
            return response()->json(
                $actor
            );
        }
}
