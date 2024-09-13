@extends('front.index')

@section('content')
<div class="container">
    <h1>{{ $category->name }}</h1>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
</div>
@endsection
