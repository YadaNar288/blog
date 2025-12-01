@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="card shadow-lg p-4">
        <h3 class="fw-bold mb-4">
            <i class="fas fa-plus-circle text-primary"></i> Create New Post
        </h3>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Post Title</label>
                <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter title">
            </div>

            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="5" placeholder="Write your content..."></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" name="author" class="form-control" placeholder="Author name">
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category_id" class="form-select">
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Icon (FontAwesome)</label>
                <select name="icon" class="form-select">
                    <option value="fas fa-star">⭐ Star</option>
                    <option value="fas fa-heart">❤️ Heart</option>
                    <option value="fas fa-book">📘 Book</option>
                    <option value="fas fa-user">👤 User</option>
                    <option value="fas fa-bolt">⚡ Bolt</option>
                </select>
            </div>

            <button class="btn btn-primary btn-lg w-100">
                <i class="fas fa-save"></i> Save Post
            </button>
        </form>

    </div>

</div>
@endsection
