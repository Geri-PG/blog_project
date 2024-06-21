@extends('layout')

@section('content')

    <form method="POST" action="{{ route ('blog.save', ['blog'=>$blog->id]) }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input value="{{$blog->title}}" type="text" name="title" class="form-control" id="exampleInputEmail1">
        </div>

        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <input value="{{$blog->short_description}}" type="text" name="short_description" class="form-control"
                   id="exampleInputEmail1">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
