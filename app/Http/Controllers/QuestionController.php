<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QuestionController extends Controller
{

    public function index()
    {
        //
        $questions = Question::latest()->get();
        return $questions;
    }

    public function store(Request $request)
    {
       Question::create($request->all());

        //to specify the user_id (if Authentication used)
       // auth()->user()->question()->create($request->all());

       return response('Question Created',Response::HTTP_CREATED);

    }
    public function show(Question $question)
    {
        return $question;
    }

    public function update(Request $request, Question $question)
    {
        $question->update($request->all());
        return response("Question Updated",Response::HTTP_OK);
    }
    public function destroy(Question $question)
    {
        try {
            $question->delete();
        } catch (\Exception $e) {
        }
        return response("Question Deleted",Response::HTTP_NO_CONTENT);
    }
}
