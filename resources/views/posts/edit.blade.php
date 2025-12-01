@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="card shadow-lg p-4">
        <h3 class="fw-bold mb-4">
            <i class="fas fa-edit text-warning"></i> Edit Post
        </h3>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Post Title</label>
                <input type="text" name="title" class="form-control form-control-lg" value="{{ $post->title }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="5">{{ $post->content }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" name="author" class="form-control" value="{{ $post->author }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Icon</label>
                <select name="icon" class="form-select">
                    <option value="fas fa-star" {{ $post->icon=='fas fa-star'?'selected':'' }}>⭐ Star</option>
                    <option value="fas fa-heart" {{ $post->icon=='fas fa-heart'?'selected':'' }}>❤️ Heart</option>
                    <option value="fas fa-book" {{ $post->icon=='fas fa-book'?'selected':'' }}>📘 Book</option>
                    <option value="fas fa-user" {{ $post->icon=='fas fa-user'?'selected':'' }}>👤 User</option>
                </select>
            </div>

            <button class="btn btn-warning btn-lg w-100">
                <i class="fas fa-save"></i> Update Post
            </button>
        </form>
    </div>

</div>
@endsection
