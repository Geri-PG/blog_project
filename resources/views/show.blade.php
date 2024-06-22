
@extends('layout')
@section('title', 'Show blog')

@section('content')
<div class="container">
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->content }}</p>
</div>
@endsection
