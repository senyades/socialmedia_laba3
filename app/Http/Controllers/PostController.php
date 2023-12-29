<?php

// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use App\Models\Tag;

class PostController extends Controller
{
    public function postUser($id)
{
    // Получаем пост по его идентификатору
    $post = Post::findOrFail($id);

    // Получаем пользователя, которому принадлежит пост
    $user = $post->user;

    // Возвращаем представление с информацией о пользователе
    return view('post.user', ['user' => $user]);
}

public function allPosts()
    {
        // Получаем все посты из базы данных
        $posts = Post::all();

        // Возвращаем представление с информацией о всех постах
        return view('post.all-posts', ['posts' => $posts]);
    }


    public function postTags($id)
    {
        $post = Post::with('tags')->findOrFail($id);

        return view('post.tags', ['post' => $post]);
    }

    public function addTagsForm($id)
    {
        $post = Post::findOrFail($id);
        $tags = Tag::all();

        return view('post.add-tags', ['post' => $post, 'tags' => $tags]);
    }

    public function addTags(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->tags()->attach($request->input('tags'));

        return back()->with('success', 'Теги успешно добавлены к посту.');
    }
}
