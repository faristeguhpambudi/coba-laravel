
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
                <h5>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }} </a> in
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="...">
                <h5>{{ $post->body }}</h5>

                <br class="mt-2">
                <a href="/posts" class="btn btn-success mt-2">Back To Posts</a>
        </div>
    </div>
</div>
    
    {{-- Post::create(
        [
            'title' => 'Judul Ke Empat',
            'category_id' => 2,
            'slug' => 'judul-ke-empat',
            'author' => 'Rahmat Pramuji',
            'excerpt' => 'Lorem ipsum dolor ke empat',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aperiam corporis ad perspiciatis excepturi cumque, perferendis eligendi esse ut dolores quod inventore dolor distinctio impedit quas eaque officiis doloribus animi mollitia nostrum ratione consequuntur cupiditate! Laborum, quibusdam. Minus, esse. Ea, reprehenderit vitae? A, atque, autem excepturi, corrupti aspernatur maxime itaque sapiente amet dicta at ipsam obcaecati eius suscipit. Sequi similique inventore, sed quo tenetur maxime cumque, omnis, culpa in libero reiciendis tempora quasi dicta ratione tempore assumenda odio ex? Voluptatibus, labore? Fugiat maxime nobis dolore non soluta magnam officia quam distinctio, commodi saepe sunt dicta omnis beatae quod ratione, et dignissimos repudiandae nemo reiciendis quo itaque tempora consequatur? Nulla ipsam voluptatibus placeat sequi! Suscipit nobis maiores illo, voluptate doloribus deleniti.'
        ]
    ); --}}

    {{-- Category::create(
        [
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]
    ); --}}
@endsection