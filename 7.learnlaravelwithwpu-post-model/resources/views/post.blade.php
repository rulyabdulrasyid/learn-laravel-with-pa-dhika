
{{-- @dd($post); --}}

@extends('layouts.main')

@section('container')
    <article>
        <h1 class="mb-5">{{ $post->title }}</h1>
        {{-- {{ $post->body }} --}}

        {!! $post->body !!}
    </article>


    <a href="/blog">Back to Posts</a>
@endsection