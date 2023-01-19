<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at')->get();
        return view('todo', compact([
            'posts'
        ]));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        Post::create($request->all());

        return redirect()->back()->with('status','Post added!');
    }

    public function delete($id) {
        Post::findOrFail($id)->delete();

        return redirect()->route('/')->with('status','Post deleted!');
    }

    public function edit($id) {
        $post = Post::findOrFail($id);

        return view('edit', compact([
            'post'
        ]));
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect()->back()->with('status','Post updated!');
    }
}

