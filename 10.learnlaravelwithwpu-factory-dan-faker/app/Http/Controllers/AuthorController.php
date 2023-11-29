<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors',[
            'title'=>'Authors',
            'authors'=> User::all(),
        ]);
    }
    
    public function show(User $author){
        return view("posts",[
            'title'=> 'User Posts',
            'posts'=> $author->posts,
        ]);
    }
}
