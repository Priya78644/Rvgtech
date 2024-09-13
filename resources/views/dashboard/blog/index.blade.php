{{-- @extends('dashboard.root') 
@dd($blogs)
@section('content') --}}
<!-- resources/views/blogs/index.blade.php -->
@extends('dashboard.layout.root')

@section('content')
<div class="container-fluid">
    <h2>Blog List</h2>
    <a href="{{ route('dashboard.blog.create') }}" class="btn btn-primary mb-3">Create New Post</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)

            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->category->name }}</td>
                <td>
                    <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
