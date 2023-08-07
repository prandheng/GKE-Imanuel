@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>Posted by <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none" style="color:rgb(152, 152, 40)">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none" style="color:rgb(152, 152, 40)">{{ $post->category->name }}</a></p>
                @if ($post->image)
                <div style="max-height: 400px; overflow:hidden">
                    <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-3">   
                    {!! $post->body !!}
                </article>
                <div class="btn btn-success">
                    <a href="/posts" class="d-block">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>
@endsection
