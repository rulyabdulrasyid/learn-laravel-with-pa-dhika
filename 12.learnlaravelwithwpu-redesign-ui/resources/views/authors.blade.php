@extends('layout.main')


@section('container')
    <h1 class='mb-5'>List Of Author</h1>

    @foreach ($users as $user)

    <ul>
        <li>
            <h2>{{ $user->name }}</h2>
        </li>
    </ul>
        
    @endforeach
@endsection