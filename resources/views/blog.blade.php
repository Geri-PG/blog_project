@extends('layout')
@section('title', 'Create Blog')

@section('content')

    <div class="col-md-4 col-6">
        <form method="POST" action="{{ route('blog.create') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Enter description" name="short_description" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control" rows="10" required></textarea>
            </div>

            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" id="picture" name="picture" class="form-control">
            </div>

            <div class="form-group">
                <label for="published_at">Published At</label>
                <input type="date" id="published_at" name="published_at" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Create Blog</button>

        </form>
    </div>

@endsection
