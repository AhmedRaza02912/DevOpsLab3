<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
    return view('posts.index', ['posts' => Post::all()]);
}

public function create() {
    return view('posts.create');
}

public function store(Request $request) {
    $validated = $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
    ]);
    Post::create($validated);
    return redirect()->route('posts.index');
}

public function edit(Post $post) {
    return view('posts.edit', compact('post'));
}

public function update(Request $request, Post $post) {
    $validated = $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
    ]);
    $post->update($validated);
    return redirect()->route('posts.index');
}

public function destroy(Post $post) {
    $post->delete();
    return redirect()->route('posts.index');
}
}
