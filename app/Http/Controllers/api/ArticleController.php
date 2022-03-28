<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    function index()
    {
        $allarticles = Article::all();
        // return $allarticles;
        return  ArticleResource::collection($allarticles);
    }
    ///////////////////////////////
    function show(Article $article)
    {
        return $article;
    }
//////////////////////////////////
    function store(Request $request)
    {
        // return $request;
        $input = Article::create($request->all());
        if($input){
            return response()->json(["msg"=>"done"]);
        }
    }
    /////////////////////////////////////
    function update(Request $request,Article $article)
    {
        // return $request;
        $input=$article->update($request->all());
        if ($input) {
            return response()->json(["msg" => "done"]);
        }
    }
    ////////////////////////////////////
    function destroy(Article $article)
    {
        $delete=$article->delete();
        if ($delete) {
            return response()->json(["msg" => "done"]);
        }
    }


}
