<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class postController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    function index(){
        // $posts = [
        //     ["title" => "post1", "description" => "post 1 test"],
        //     ["title" => "post2", "description" => "post 2 test"],
        //     ["title" => "post3", "description" => "post 3 test"],
        // ];
        // $desc = 100;
        $posts=Post::all();
        return view('posts.posts', ["data" => $posts]);
    }
    function show($id){

        // $posts = [
        //     ["title" => "post1", "description" => "post 1 test"],
        //     ["title" => "post2", "description" => "post 2 test"],
        //     ["title" => "post3", "description" => "post 3 test"],
        // ];
        $post = new Post;

        $post = Post::findorfail($id);

        return view('posts.show', ["data" => $post]);
    }
    function create(){
        return view("posts.create");
    }
    function store()
    {
        // dd(request()->all());
        $post=new Post;
        $post->title= request("title");
        $post->body= request("description");
        $post->slug = request("slug");
        $post->save();
        return redirect("/posts");
        // return view("posts.store");
    }
    function edit($id){
        // dd(request()->all());

        $post = Post::findorfail($id);
        return view("posts.edit",["data"=>$post]);

    }
    function update($id)
    {
        //  dd(request()->all());

        $post = Post::findorfail($id);
        $post->title = request("title");
        $post->body = request("description");
        $post->slug = request("slug");
        $post->save();
        return redirect("/posts");

    }
    function delete($id)
    {
        // dd(request()->all());

        $post = Post::findorfail($id);
        $post->delete();
        return redirect("/posts");

    }
}
