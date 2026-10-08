<div class="mb-3">
    <label for="title" class="form-label">Judul</label>
    <input type="text" id="title" name="title"
           class="form-control @error('title') is-invalid @enderror"
           value="{{ old('title', $post->title ?? '') }}">
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="body" class="form-label">Isi</label>
    <textarea id="body" name="body" rows="8"
              class="form-control @error('body') is-invalid @enderror">{{ old('body', $post->body ?? '') }}</textarea>
    @error('body')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('posts.index') }}" class="btn btn-secondary">Batal</a>