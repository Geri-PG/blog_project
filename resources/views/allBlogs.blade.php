@extends('layout')

@section('title', 'All Blogs')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Picture</th>
                <th scope="col">Content</th>
                <th scope="col">Short desc</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <th scope="row">{{ $blog->id }}</th>
                    <td>{{ $blog->title }}</td>
                    <td><img src="{{ $blog->picture }}" alt="Picture" style="width:100px;height:auto;"></td>
                    <td>{{ $blog->content }}</td>
                    <td>{{ $blog->short_description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class="d-flex justify-content-center">
        {{ $blogs->links('pagination::bootstrap-5') }}
    </div>
@endsection
