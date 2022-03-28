<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Requests\ArticleValidationRequest;
use App\Models\User;
class ArticleController extends Controller
{


    public function __construct()
    {
$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();
        $user = auth()->user()->id;

        return view('articles.index',["data"=>$articles ,"user"=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
// dd(auth()->user());
        $input=$request->all();
        $input['user_id']=auth()->user()->id;
        $request->validate([
                    'title'=>"required | min:6 | max:10",
                     'body'=>"required ",
                      'rate' => "required |numeric "
        ]);
        Article::create($input);
       return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        return view('articles.show', ["data" => $article]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        return view('articles.edit', ["data" => $article]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => "required | min:6 | max:10",
            'body' => "required ",
            'rate' => "required |numeric "
        ]);
        //
        // Article::update($request->all());
        // Article::update($request->all());
        // dd($article);
        $user = Auth::user();
        if($user->can('update',$article)){
        $article->update($request->all());
        return redirect('/articles');
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        if(Gate::allows("isAdmin")){
            $article->delete();
            return redirect('/articles');
        }else{
            dump("not vaild");
        }

    }

}
