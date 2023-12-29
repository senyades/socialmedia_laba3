<!-- resources/views/user/posts.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Posts by {{ $user->name }}</h2>

    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->description }}</p>
            <!-- Добавьте другие поля по необходимости -->
        </div>
    @endforeach
@endsection

<a href="\">
            <button>На главную</button>
        </a>
