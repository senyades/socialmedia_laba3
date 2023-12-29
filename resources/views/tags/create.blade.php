<!-- resources/views/tags/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="\">
            <button>На главную</button>
        </a>
        <h2>Добавление тегов</h2>

        <form method="post" action="{{ route('tags.store') }}">
            @csrf
            <label for="name">Название тега:</label>
            <input type="text" name="name" id="name" required>

            <br>
            <button type="submit">Добавить тег</button>
        </form>

        <h3>Список тегов:</h3>
        @forelse ($tags as $tag)
            <p>{{ $tag->name }}</p>
            <!-- Дополнительные детали тега -->
        @empty
            <p>Список тегов пуст</p>
        @endforelse
    </div>
@endsection
