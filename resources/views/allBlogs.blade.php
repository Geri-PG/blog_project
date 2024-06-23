@extends('layout')

@section('title', 'All Blogs')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Short desc</th>
                <th scope="col">Picture</th>
                <th scope="col">Username</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            @if (Session::has('error'))
                <h2 class="row justify-content-center mt-2 mb-2 text-danger">{{ Session::get('error') }}</h2>
            @endif
            @foreach ($blogs as $blog)
                <tr>
                    <th scope="row">{{ $blog->id }}</th>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->short_description }}</td>
                    <td><img src="{{ $blog->picture }}" alt="Picture" style="width:100px;height:auto;"></td>
                    <td>{{ $blog->slug }}</td>
                    <td><a href="{{ route('blogs.show', $blog) }}">Read blog</a></td>
                    <td>
                        <a href="{{ route('blog.delete', ['blog' => $blog->id]) }}" class="btn btn-danger">Delete</a>
                        <a href="{{ route('blog.edit', ['blog' => $blog->id]) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class="d-flex justify-content-center">
        {{ $blogs->links('pagination::bootstrap-5') }}
    </div>
@endsection
