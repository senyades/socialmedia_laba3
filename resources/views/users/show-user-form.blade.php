@extends('layouts.app') 

@section('content')

<form id="postUserForm" method="GET">
    @csrf
    <div class="form-group">
        <label for="postId">Post ID:</label>
        <input type="text" id="postId" name="postId" class="form-control" required>
    </div>
    <button type="button" class="btn btn-primary" onclick="redirectToPostUser()">Найти пользователя</button>
</form>

<a href="\">
            <button>На главную</button>
        </a>

<script>
    function redirectToPostUser() {
        var postId = $('#postId').val();
        if (postId.trim() !== '') {
            var url = '/posts/' + postId + '/user';
            window.location.href = url;
        }
    }
</script>
@endsection