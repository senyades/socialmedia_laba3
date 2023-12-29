<!-- resources/views/users/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h2>Create User</h2>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <!-- Добавьте другие поля, если необходимо -->
            <button type="submit" class="btn btn-primary">Создать пользователя</button>
          
        </form>
        <a href="\">
            <button>На главную</button>
            </a>
    </div>
@endsection

