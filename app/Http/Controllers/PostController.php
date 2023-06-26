<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Todos os posts.
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    // Visualizar post.
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
