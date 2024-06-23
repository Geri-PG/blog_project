@extends('layout')
@section('title', 'Show Blog')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card col-4">
        @if($blog->image)
            <img src="{{ $blog->image }}" class="card-img-top" alt="{{ $blog->title }}">
        @endif
        <div class="card-body">
            <h4 class="card-title">{{ $blog->title }}</h4>
            <hr>
            <p class="card-text">{{ $blog->content }}</p>
        </div>
        <div class="card-footer text-muted">
            Posted on {{ $blog->created_at->format('F j, Y') }} by {{ $blog->user->name }}
        </div>
    </div>
</div>
@endsection
