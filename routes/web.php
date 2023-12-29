<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/show-posts-form', [UserController::class, 'showUserPostsForm'])->name('user.show-posts-form');
Route::get('/users/show-user-form', [UserController::class, 'showPostsUserForm'])->name('user.show-user-form');

Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/users/store', [UserController::class, 'store'])->name('user.store');

Route::get('/users/create-post', [UserController::class, 'showCreatePostForm'])->name('user.create-post');
Route::post('/users/create-post', [UserController::class, 'storePost'])->name('user.store-post');

Route::get('/users/{id}/posts', [UserController::class, 'userPosts'])->name('user.posts');
Route::get('/posts/{id}/user', [PostController::class, 'postUser'])->name('post.user');

Route::get('/users/{id}/latest-post', [UserController::class, 'latestPost'])->name('user.latest-post');

Route::get('/posts', [PostController::class, 'allPosts'])->name('all.post');

Route::get('/posts/{id}/comments', [CommentController::class, 'postComments'])->name('post.comments');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/posts/{id}/tags', [PostController::class, 'postTags']);

Route::get('/posts/{id}/add-tags', [PostController::class, 'addTagsForm'])->name('posts.add-tags-form');;
Route::post('/posts/{id}/add-tags', [PostController::class, 'addTags'])->name('posts.add-tags');

Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');;
Route::post('/tags', [TagController::class, 'store'])->name('tags.store');