<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // $posts = DB::table('post')->get();
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        //Post::findOrFail($post);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {
        // $data = $request->validate([
        //     'title' => ['required', 'min:4'],
        //     'body' => ['required'],
        // ],[
        //     // 'title.required' => 'Erro diferente al :attribute'
        // ]);

        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        // Post::create([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body')
        // ]);

        Post::create($request->validated());

        // session()->flash('status', 'Post created..!!');

        return to_route('posts.index')->with('status', 'Post created..!!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(SavePostRequest $request, Post $post)
    {
        // $data = $request->validate([
        //     'title' => ['required', 'min:4'],
        //     'body' => ['required'],
        // ],[
        //     // 'title.required' => 'Erro diferente al :attribute'
        // ]);

        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        // $post->update([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body')
        // ]);

        $post->update($request->validated());

        // session()->flash('status', 'Post updated.!!');

        return to_route('posts.show', compact('post'))->with('status', 'Post updated.!!');
    }

    public function destroy(Post $post)
    {
        $post->delete($post);
        return to_route('posts.index')->with('status', 'Post Deleted..!!');
    }
}
