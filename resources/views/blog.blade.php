@extends('layout')

@section('title', 'Create Blog')

@section('content')
    @if (Session::has('error'))
        <h2 class="row justify-content-center mt-2 mb-2 text-danger">{{ Session::get('error') }}</h2>
    @endif
    <div class="row justify-content-center mt-2 mb-2">
        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h3>Create Blog</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('blog.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter title"
                                name="title" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Enter description"
                                name="short_description" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="content">Content</label>
                            <textarea id="content" name="content" class="form-control" rows="10" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="picture">Picture</label>
                            <input type="file" id="picture" name="picture" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mb-3">Create Blog</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
