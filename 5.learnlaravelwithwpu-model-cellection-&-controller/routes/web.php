<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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
    return view('home', [
        "title" => "Home"

    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ruly Abdul Rasyid",
        "email" => "email@gmail.com",
        "image" => "ruly.png"
    ]);
});


// All Posts
Route::get('/blog', [PostController::class,'index']);


// Halaman single posts
Route::get('posts/{slug}', [PostController::class,'show']);