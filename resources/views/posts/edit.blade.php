@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <h1 class="h3 mb-3">Edit Post</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('posts.update', $post) }}">
                @csrf
                @method('PUT')
                @include('posts._form')
            </form>
        </div>
    </div>
@endsection