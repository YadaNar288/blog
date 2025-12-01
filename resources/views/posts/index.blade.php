@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>📄 Posts Management</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create Post
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
    <tr>
        <th>ID</th>
        <th>Icon</th>
        <th>Title</th>
        <th>Category</th> <!-- new column -->
        <th>Content</th>
        <th>Author</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td><i class="{{ $post->icon }} fs-4"></i></td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name ?? 'N/A' }}</td> <!-- show category -->
        <td style="max-width: 250px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
            {{ $post->content }}
        </td>
        <td>{{ $post->author }}</td>
        <td>{{ $post->created_at->format('d M Y') }}</td>
        <td style="white-space: nowrap;">
            <div class="d-flex gap-1">
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-info text-white">
                    <i class="fas fa-eye"></i> View
                </a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this post?')">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</tbody>

        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links('pagination::bootstrap-5') }}
    </div>

</div>
@endsection
