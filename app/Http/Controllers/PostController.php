<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Menampilkan daftar post (6 per halaman)
    public function index()
    {
        $posts = Post::latest()->paginate(6);

        return view('posts.index', compact('posts'));
    }

    // Menampilkan form tambah post
    public function create()
    {
        return view('posts.create');
    }

    // Menyimpan post baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'body'  => 'required|min:10',
        ]);

        Post::create($validated);

        return redirect()->route('posts.index')
            ->with('success', 'Post berhasil dibuat!');
    }

    // Menampilkan satu post (Route Model Binding)
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Menampilkan form edit
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Menyimpan perubahan post
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'body'  => 'required|min:10',
        ]);

        $post->update($validated);

        return redirect()->route('posts.show', $post)
            ->with('success', 'Post berhasil diperbarui!');
    }

    // Menghapus post
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post berhasil dihapus!');
    }
}