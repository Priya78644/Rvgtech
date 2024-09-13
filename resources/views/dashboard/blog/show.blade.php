<!-- resources/views/posts/show.blade.php -->
@extends('dashboard.layout.root')

@section('content')
<div class="container">
    <h2>{{ $post->title }}</h2>
    <p class="text-muted">Category: {{ $post->category->name }}</p>
    <p>{{ $post->content }}</p>
    <a href="{{ route('blog.index') }}" class="btn btn-primary">Back to Posts</a>
</div>
@endsection
