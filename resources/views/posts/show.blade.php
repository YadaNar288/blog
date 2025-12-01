@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="card shadow-lg p-4">
        
        <div class="d-flex align-items-center mb-3">
            <i class="{{ $post->icon }} fs-1 me-3 text-primary"></i>
            <h2 class="fw-bold">{{ $post->title }}</h2>
        </div>

        <p class="text-muted">
            <i class="fas fa-user"></i> {{ $post->author }} • 
            {{ $post->created_at->format('d M Y H:i A') }}
        </p>

        <hr>

        <p class="fs-5">{{ $post->content }}</p>

        <hr>

        <div class="d-flex justify-content-between">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>

            <div>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Edit
                </a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger" onclick="return confirm('Delete this post?')">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection
