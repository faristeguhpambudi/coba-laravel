@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2>{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success mt-2">Back To My Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mt-2">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                <button type="submit" class="btn btn-danger mt-2 border-0" onclick="return confirm('yakin hapus data?')">Delete</button>
            </form>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-2" alt="...">
                <h5>{{ $post->body }}</h5>
                
        </div>
    </div>
</div>


      
@endsection