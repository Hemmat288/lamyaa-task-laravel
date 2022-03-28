<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\postController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;

// use App\Http\Controllers\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //  <img src="../public/favicon.ico">
    //  <img src="{{URL::asset('/image/propic.png')}}" alt="profile Pic" height="200" width="200">
    return view('layout.navbar');
});
Route::get('/about', function () {
    return view('layout.about');
})->middleware('auth');
Route::get('/contact', function () {
    return view('layout.contact');
});
Route::get('/homeoooo', function () {
    return view('layout.home');
});
Route::get('/itiblog',function(){
    return view('iti');
});

Route::get("/posts", [postController::class,"index"]);


Route::get('/posts/{id}', [postController::class,"show"]);
Route::get('/create', [postController::class, "create"]);
Route::post('/store', [postController::class, "store"]);
Route::get('/edit/{id}', [postController::class,"edit"])->middleware("can:isAdmin");
Route::put('/update/{id}', [postController::class,"update"])->middleware("can:isAdmin");
Route::delete('/delete/{id}', [postController::class, "delete"])->middleware("can:isAdmin");

// Route::resource("/articles", ArticleController::class);
Route::resource("/users", UserController::class);

Route::get("/articlesuser/{user}", [UserController::class, "getArticles"])->name("user.articles");

Route::resource("/comments", CommentController::class);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
