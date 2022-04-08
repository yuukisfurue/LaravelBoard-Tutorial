<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $posts = Post::paginate(10);
        return view('index')
            ->with(['posts' => $posts]);
          {
        }
    }

    public function boot()
    {
        Paginator::useBootstrap();
    }
    
    // Implicit Binding
    public function show(Post $post)
    {
        return view('posts.show')
            ->with(['post' => $post]);
       
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $request->validate([
            'name' => 'required|min:4',
        ], [
            'name.required' => '名前は必須です',
            'name.min' => ':min 文字以上入力してください',
        ]);
        
        $post = new Post();
        $post->name = $request->name;
        $post->gender = $request->gender;
        $post->pref = $request->pref;
        $post->jyob = $request->jyob;
        $post->employmentstatus = $request->employmentstatus;
        $post->save();
        
        return redirect()
            ->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit')
            ->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->name = $request->name;
        $post->gender = $request->gender;
        $post->pref = $request->pref;
        $post->jyob = $request->jyob;
        $post->employmentstatus = $request->employmentstatus;
        $post->save();

        return redirect()
            ->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('posts.index');
    }

}