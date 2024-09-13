
@extends('dashboard.layout.root')

@section('content')
<div class="container">
    <h1>Categories</h1>
    <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Create New Category</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('category.delete', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('post')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
