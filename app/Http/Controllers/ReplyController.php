<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index','show']]);
    }



    public function index()
    {
        $replies = Reply::latest()->get();
        return $replies;
    }

    public function store(Request $request)
    {
        Reply::create($request->all());
        return response('Reply Created',Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $reply)
    {
        //
        return $reply;
    }

    public function update(Request $request, Reply $reply)
    {
        $reply->update($request->all());
        return response('Reply Updated',Response::HTTP_OK);
    }

    public function destroy(Reply $reply)
    {
        try{
            $reply->delete();
        }catch (\Exception $exception){
        }
        return response('Reply Deleted',Response::HTTP_NO_CONTENT);
    }
}
