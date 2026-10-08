@extends('layouts.app')

@section('title', 'Tulis Post')

@section('content')
    <h1 class="h3 mb-3">Tulis Post Baru</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                @include('posts._form')
            </form>
        </div>
    </div>
@endsection