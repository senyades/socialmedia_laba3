<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Главная страница</h1>

    <a href="{{ route('user.create') }}">
        <button>Создание пользователя</button>
    </a>

    <a href="{{ route('user.create-post') }}">
        <button>Создание поста</button>
    </a>

    <a href="{{ route('user.show-posts-form') }}">
        <button>Поиск постов</button>
    </a>

    <a href="{{ route('user.show-user-form') }}">
        <button>Поиск пользователя</button>
    </a>

    <a href="{{ route('all.post') }}">
        <button>Все посты</button>
    </a>

    <a href="{{ route('tags.create') }}">
        <button>Редактор тегов</button>
    </a>

    
    
@endsection
