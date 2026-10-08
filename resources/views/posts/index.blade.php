@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Semua Post</h1>
        <span class="text-muted">Total: {{ $posts->total() }} post</span>
    </div>

    <div class="row g-3">
        @forelse ($posts as $post)
            <div class="col-md-6 col-lg-4">
                <x-card :post="$post" />
            </div>
        @empty
            <div class="col-12">
                <x-alert type="info">Belum ada post. Klik "+ Tulis Post" untuk membuat yang pertama.</x-alert>
            </div>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $posts->links() }}
    </div>
@endsection