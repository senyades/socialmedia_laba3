<!-- resources/views/post/tags.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Теги поста</h2>
        <p>Заголовок поста: {{ $post->title }}</p>
        <p>Контент поста: {{ $post->content }}</p>

        <h3>Теги:</h3>
        @forelse ($post->tags as $tag)
            <p>{{ $tag->name }}</p>
            <!-- Дополнительные детали тега -->
        @empty
            <p>Пост не имеет тегов</p>
        @endforelse
    </div>
@endsection
