
{{-- @dd($post); --}}

@extends('layouts.main');

@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>by {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>


    <a href="/blog">Back to Posts</a>
@endsection