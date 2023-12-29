<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;



class CommentController extends Controller
{
    public function postComments($id)
    {
        // Получаем пост по его идентификатору вместе с комментариями
        $post = Post::with('comments')->findOrFail($id);

        // Возвращаем представление с информацией о посте и его комментариях
        return view('post.comments', ['post' => $post]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'post_id' => 'required',
            'content' => 'required',
        ]);

        // Create a new comment
        Comment::create([
            'post_id' => $request->input('post_id'),
            'content' => $request->input('content'),
            // Add other necessary fields
        ]);

        Log::info('post_id: ' . $request->input('post_id'));
        Log::info('content: ' . $request->input('content'));

        return back(); // Redirect back to the post page
    }
}
