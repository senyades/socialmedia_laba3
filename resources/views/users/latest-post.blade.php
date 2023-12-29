<!-- resources/views/users/latest-post.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $user->name }} последний пост</h2>
        @if ($latestPost)
            <p>Title: {{ $latestPost->title }}</p>
            <p>Content: {{ $latestPost->content }}</p>
            <!-- Другие детали поста -->
        @else
            <p>{{ $user->name }} нет поста</p>
        @endif
    </div>
    <a href="\">
            <button>На главную</button>
        </a>
@endsection
