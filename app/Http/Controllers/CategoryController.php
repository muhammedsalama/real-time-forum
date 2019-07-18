<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index','show']]);
    }

    public function index()
    {
        return Category::latest()->get();
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return response('Category Created',Response::HTTP_CREATED);
    }

    public function show(Category $category)
    {
        return $category;
    }


    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
    }

    public function destroy(Category $category)
    {
        try {
            $category->delete();
        }catch (\Exception $exception){
        }
        return response('Category Deleted',Response::HTTP_NO_CONTENT);
    }
}
