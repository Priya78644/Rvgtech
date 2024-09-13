@extends('dashboard.layout.root')

@section('content')
<div class="container">
    <h1>Edit Category</h1>
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
