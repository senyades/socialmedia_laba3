@extends('layouts.app') 

@section('content')
    <div class="container">
        
        <h2>Все посты</h2>
        <a href="\">
            <button>На главную</button>
        </a>

        @forelse ($posts as $post)
            <div>
                <p>Пользователь:{{ $post->user->name }}</p>
                
                
                <h3>{{ $post->title }}</h3>
                <p>Пост:{{$post->content }}</p>
                <p>Пост ID:{{ $post->id }}</p>
                <!-- Other post details -->

                <p><strong>Теги:</strong>
                    @foreach($post->tags as $tag)
                        {{ $tag->name }}
                    @endforeach
                </p>
                
                <!-- Pass post ID to the function -->
                <a href="{{ url('/posts/' . $post->id . '/comments') }}">
                    <button>Комментари</button>
                </a>
                <a href="{{ url('/posts/' . $post->id . '/add-tags') }}">
                    <button>Добавить тэги</button>
                </a>
            </div>
            <hr>
        @empty
            <p>Посты не найдены.</p>
        @endforelse
    </div>
    <script>
        function redirectToPostComments(postId) {
            var url = '/posts/' + postId + '/comments';
            window.location.href = url;
        }
    </script>
@endsection
