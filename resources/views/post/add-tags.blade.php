<!-- resources/views/post/add-tags.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="container">
    <a href="\posts">
            <button>К постам</button>
        </a>
        <h2>Добавление тегов к посту</h2>
        <p>Заголовок поста: {{ $post->title }}</p>
        <p>Контент поста: {{ $post->content }}</p>

        <h3>Существующие теги:</h3>
        @foreach($post->tags as $existingTag)
            <span>{{ $existingTag->name }} </span>
        @endforeach

        <form method="post" action="{{ route('posts.add-tags', ['id' => $post->id]) }}">
            @csrf
            <label for="tags">Выберите теги:</label>
            <select name="tags[]" id="tags" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>

            <br>
            <button type="submit">Добавить теги</button>
        </form>
    </div>
@endsection
