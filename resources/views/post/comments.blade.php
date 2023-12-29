@extends('layouts.app')

@section('content')
<a href="\posts">
            <button>К постам</button>
        </a>
    <div class="container">
        <h2>Комментарии публикации</h2>
        <p>Заголовок: {{ $post->title }}</p>
        <p>Контент: {{ $post->content }}</p>
        <p>Id публикации: {{ $post->id }}</p>

        <h3>Комментарий:</h3>
        @forelse ($post->comments as $comment)
            <p>{{ $comment->content }}</p>
            <!-- Другие детали комментария -->
        @empty
            <p>Комментариев нет</p>
        @endforelse

        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <input type="text" name="post_id" value="{{ $post->id }}">
            
            <!-- Добавим вывод ошибок валидации -->
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <label for="comment_content">Your Comment:</label>
            <textarea name="content" id="comment_content" rows="4" cols="50"></textarea>
            
            <!-- Добавим вывод ошибок валидации -->
            @error('post_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <br>
            <button type="submit">Отправить комментарий</button>
        </form>
    </div>
@endsection
