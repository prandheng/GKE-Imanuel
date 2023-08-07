@extends('layouts.main')
@section('container')
<h1 class="text-center border-bottom">{{ $title }}</h1> 
<div class="posts-con">
  <div class="search-con mb-3 justify-content-center">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
          <button class="btn bg-success text-light" type="submit" style="z-index: 0">Search</button>
        </div>
      </form>
    </div>
  </div>
  @if ($posts->count())
    <div class="hero-posts">
      <div class="hero-posts-image">
        @if ($posts[0]->image)
          <center>
            <div class="image-hero">
              <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
            </div>
          </center>
        @else
          <div class="image-hero">
            <img src="https://source.unsplash.com/1200x600/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
          </div>
        @endif
      </div>   
      <div class="card-title-hero">
        <h4>{{ $posts[0]->title }}</h4>
          <h6>
            <small class="text-dark">
                Posted by <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </h6>
      </div>
      <div class="card-body-hero">
        <p class="card-text-hero">{{ $posts[0]->excerpt }}</p>
        <button type="button" class="btn btn-success">
          <a href="/posts/{{ $posts[0]->slug }}">Baca Selengkapnya</a>
        </button>
      </div>
    </div>
  @else
    <p class="text-center fs-4">No Post Found.</p>
  @endif
  <div class="child-posts py-3">
      @foreach ($posts->skip(1) as $post)
        <div class="card h-100">
          @if ($post->image)
            <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="card-img-top">
          @else  
            <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
          @endif
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->excerpt }}</p>
            <small class="text-body-secondary">
              Posted by <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-warning">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }} at <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-warning">{{ $post->category->name }}</a>
            </small>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-primary btn-sm"><a href="/posts/{{ $post->slug }}">read more..</a></button>
          </div>
        </div>
      @endforeach
  </div>
  {{-- paginate --}}
  <div class="d-flex justify-content-end">
    {{ $posts->links() }}
  </div>
</div>
@endsection