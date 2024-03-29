<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;


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
        "title" => "Home",
        "active"=> 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ruly Abdul Rasyid",
        "email" => "email@gmail.com",
        "image" => "ruly.png",
        "active"=> 'about',
    ]);
});


// All Posts
Route::get('/posts', [PostController::class,'index']);
// Halaman single posts
Route::get('/posts/{post:slug}', [PostController::class,'show']);

Route::get('/authors',[AuthorController::class,'index']);
Route::get('/authors/{author:username}', [AuthorController::class,'show']);

// 
Route::get('/categories', function(){
    return view('categories', [
        'title'=> 'Post Categories',
        "active"=> 'categories',
        'categories' => Category::all()
    ]);
});

// post dengan category tertentu
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title'=> "Post by Category: $category->name",
//         "active"=> 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });

// Route::get('/authors/{user}', function(User $user){
//     return view('posts', [
//         'title'=> 'User Posts',
//         'posts' => $user->posts,
//     ]);
// });

