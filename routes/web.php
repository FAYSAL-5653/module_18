<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::delete('/posts/{id}/delete', [PostController::class, 'destroy']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/categories/{id}/posts', [CategoryController::class, 'getPosts']);
Route::get('/latest-posts', [LatestPostsController::class, 'index']);

