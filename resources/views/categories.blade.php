
@extends('layouts.main')

@section('container')

<div class="container">
    <h1 class="mb-3">{{ $title }}</h1>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <div class="position-absolute bg-dark px-3 py-2 text-white">
                    <a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-white">
        {{ $category->name }}
                    </a>
    </div>
            <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection