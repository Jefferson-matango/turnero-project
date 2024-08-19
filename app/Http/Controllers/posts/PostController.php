<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use App\Models\posts\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }
    
    public function show($post) {
        $post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        
        return request()->all();

    }

}
