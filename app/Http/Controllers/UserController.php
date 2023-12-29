<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
use App\Models\User;

class UserController extends Controller
{
    public function userPosts($id)
    {
        // Получаем пользователя по его идентификатору
        $user = User::findOrFail($id);

        // Получаем все посты пользователя
        $posts = $user->posts;

        // Возвращаем представление с информацией о пользователе и его постах
        return view('users.posts', ['user' => $user, 'posts' => $posts]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Проверка и валидация входящих данных
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            // Добавьте другие правила валидации по необходимости
        ]);

        // Создание нового пользователя
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Добавьте другие поля в соответствии с вашей моделью User
        ]);

        // Установка флеш-сообщения
        Session::flash('success', 'User created successfully!');

        return redirect('/users/create')->with('success', 'User created successfully!');
    }

    public function showCreatePostForm()
    {
        // Получаем всех пользователей для заполнения селектора
        $users = User::all();

        return view('users.create-post', ['users' => $users]);
    }
    
    public function storePost(Request $request)
    {
        // Проверка и валидация входящих данных
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Создание нового поста
        Post::create([
            'user_id' => $request->input('user_id'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        // Установка флеш-сообщения
        Session::flash('success', 'Post created successfully!');

        return redirect('/users/create-post')->with('success', 'Post created successfully!');
    }

    
        public function showUserPostsForm()
        {
            return view('users.show-posts-form');
        }

        public function showPostsUserForm()
        {
            return view('users.show-user-form');
        }

        public function latestPost($id)
        {
            // Получаем пользователя по его идентификатору
            $user = User::findOrFail($id);
    
            // Получаем последний пост пользователя
            $latestPost = $user->posts()->latest()->first();
    
            // Возвращаем представление с информацией о последнем посте пользователя
            return view('users.latest-post', ['user' => $user, 'latestPost' => $latestPost]);
        }


}
