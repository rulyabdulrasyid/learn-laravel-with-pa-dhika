
{{-- @dd($post); --}}

@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                {{-- {{ $post->body }} --}}

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid"/>

                <article class="my-3 fs-5">
                 {!! $post->body !!}
                </article>

                 <a href="/blog" class="d-block mt-3 mb-3">Back to Posts</a>
            </div>
        </div>
    </div>


    


    
@endsection