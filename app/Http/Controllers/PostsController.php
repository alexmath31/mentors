<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {

        $posts = \App\Models\Post::query()
             ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('posts.index', ['posts'=>$posts]);
    }

    public function show($id)
    {

        $post=\App\Models\Post::query()
            ->findOrFail($id);

        if ($post->published_at == null)
        {
            abort ('403', 'Post not published yet');
        }

        return view('posts.show', ['post'=>$post]);
    }
}

