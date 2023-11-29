<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\RegisterController;

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

// Login
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');