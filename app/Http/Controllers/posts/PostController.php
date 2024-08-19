<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use App\Models\posts\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('id', 'desc')->paginate(15);

        return view('posts.index', compact('posts'));
    }
    
    public function show(Post $post) {
        
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        
        $post = new Post();

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect()->route('posts.index');

    }

    public function edit(Post $post) {

        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request) {

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy(Post $post) {
        
        $post->delete();

        return redirect()->route('posts.index');
    }
}

