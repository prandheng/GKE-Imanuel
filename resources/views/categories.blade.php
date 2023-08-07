@extends('layouts.main')
@section('container')
    <h3 class="border-bottom text-center">Kategori Berita</h3>
        @if ($categories->count())
        <div class="categories-con">
            @foreach ($categories as $category)
                <div class="category-card">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="category-content">
                        @if ($category->image)
                        <img src="{{ asset('storage/'. $category->image) }}" alt="{{ $category->slug }}">    
                        @else
                        <img src="https://source.unsplash.com/400x300/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        @endif
                        <div class="category-card-img-overlay">
                            <h6 class="category-card-title">{{ $category->name }}</h6>
                        </div>
                    </div>
                </a>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center fs-4">No Category Found.</p>
    @endif
@endsection