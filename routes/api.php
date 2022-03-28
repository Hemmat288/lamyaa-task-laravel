<?php

use App\Http\Controllers\api\ArticleController;
use App\Http\Controllers\api\AuthController;
use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
////////////////////////
// Route::get("/articles",[ArticleController::class ,"index"]);
Route::apiResource("/articles", ArticleController::class);
Route::post("/register", [AuthController::class , "register"]);
Route::post("/login", [AuthController::class, "Login"]);
////////////////
Route::get("/posts", function () {
    $allpost = Post::all();
    return $allpost;
});
