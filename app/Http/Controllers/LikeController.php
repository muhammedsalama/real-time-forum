<?php

namespace App\Http\Controllers;

use App\Like;
use App\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    public function like(Reply $reply){
        $reply->likes()->create([
            'user_id'=>'1'
        ]);
        return response('Reply Liked',Response::HTTP_OK);
    }

    public function unlike(Reply $reply){
        $reply->likes()->delete();
        return response('Reply unliked',Response::HTTP_NO_CONTENT);
    }
}
