<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use App\Mail\PostCreateMail;
use App\Models\posts\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $request->validateWithBag('createPost',[
            'title'=> 'required|min:3',
            'slug'=>['required', 'max:255' ,'unique:'.Post::class ],
            'category'=>'required|min:3',
            'content'=>'required|min:3',
        ]);

        $post = Post::create($request->all());

        Mail::to('prueba@prueba.com')->send(new PostCreateMail($post));

        return redirect()->route('posts.index');
    }

    public function edit(Post $post) {

        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request) {
        $request->validateWithBag('updatePost',[
            'title'=> 'required|min:3',
            'slug'=>"required|unique:posts,slug,{$post->id}",
            'category'=>'required|min:3',
            'content'=>'required|min:3',

        ]);

        $post->update($request->all());

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post) {
        
        $post->delete();

        return redirect()->route('posts.index');
    }
}

