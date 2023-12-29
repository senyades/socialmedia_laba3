

@extends('layouts.app') 

@section('content')
    <div class="container">
        <h2>Введите UserID для поиска постов</h2>
        <form id="userPostsForm" method="GET">
    @csrf
    <div class="form-group">
        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" class="form-control" required>
    </div>
    <button type="button" class="btn btn-primary" onclick="redirectToUserPosts()">Показать посты</button>
</form>

<a href="\">
            <button>На главную</button>
            </a>

<script>
    function redirectToUserPosts() {
        var userId = $('#id').val();
        if (userId.trim() !== '') {
            var url = '/users/' + userId + '/posts';
            window.location.href = url;
        }
    }
</script>
@endsection
