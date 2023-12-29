<!-- resources/views/user/create-post.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Create Post</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('user.store-post') }}" method="post">
        @csrf

        <label for="user_id">User:</label>
        <select name="user_id" id="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="content">Description:</label>
        <textarea name="content" id="content" required></textarea>

        <button type="submit">Создать пост</button>
    </form>
    <a href="\">
            <button>На главную</button>
            </a>
@endsection
