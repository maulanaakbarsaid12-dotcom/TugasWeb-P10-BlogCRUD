@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <article class="card shadow-sm">
        <div class="card-body">
            <h1 class="h3">{{ $post->title }}</h1>
            <p class="text-muted small">Dibuat {{ $post->created_at->format('d M Y, H:i') }}</p>
            <hr>
            <div>{!! nl2br(e($post->body)) !!}</div>
        </div>
        <div class="card-footer d-flex gap-2">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>

            <form method="POST" action="{{ route('posts.destroy', $post) }}"
                  onsubmit="return confirm('Yakin hapus post ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </div>
    </article>
@endsection