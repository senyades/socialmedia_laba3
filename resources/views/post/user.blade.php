<!-- resources/views/post/user.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>User Information</h2>

    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <!-- Добавьте другие поля по необходимости -->
@endsection

<a href="\">
            <button>На главную</button>
        </a>