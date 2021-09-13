@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2>{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success mt-2">Back To My Posts</a>
            <a href="/posts" class="btn btn-warning mt-2">Edit</a>
            <a href="/posts" class="btn btn-danger mt-2">Delete</a>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-2" alt="...">
                <h5>{{ $post->body }}</h5>
                
        </div>
    </div>
</div>

      
@endsection