@extends('layout')

@section('title', 'All Blogs')

@section('content')

   @foreach ($blogs as $blog)
       <h1>{{ $blog->short_description }}</h1>
   @endforeach

@endsection