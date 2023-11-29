
{{-- @dd($post); --}}

@extends('layouts.main')

@section('container')
    <article>
        <h1 class="mb-5">{{ $post->title }}</h1>
        <p>By. Ruly Abdul Rasyid in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {{-- {{ $post->body }} --}}

        {!! $post->body !!}
    </article>


    <a href="/blog">Back to Posts</a>
@endsection