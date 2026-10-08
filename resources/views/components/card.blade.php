@props(['post'])

<div class="card h-100 shadow-sm">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text text-muted">{{ Str::limit($post->body, 100) }}</p>
        <a href="{{ route('posts.show', $post) }}"
           class="btn btn-primary btn-sm mt-auto align-self-start">Baca selengkapnya</a>
    </div>
    <div class="card-footer text-muted small">
        {{ $post->created_at->diffForHumans() }}
    </div>
</div>