<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WeclomContr extends Controller
{
    public function welcome ()
    {
        $feature_mentors = Post::query()
            ->orderBy('published_at', 'desc')->take(3)->get();

        return view ('welcome', ['feature_mentors'=>$feature_mentors]);
    }
}
