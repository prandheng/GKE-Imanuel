@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Moment</h1>
</div>
<a href="/dashboard/galleries" class="btn btn-primary mb-4"><span data-feather="arrow-left" class="align-text-bottom"></span> Kembali</a>
<div class="col-lg-8">
    <form method="post" action="/dashboard/galleries/{{ $gallery->id }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $gallery->title) }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>  
          @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required value="{{ old('description', $gallery->description) }}">
          @error('description')
          <div class="invalid-feedback">
            {{ $message }}
          </div>  
          @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <input type="hidden" name="oldImage" value="{{ $gallery->image }}">
            @if ($gallery->image)
              <img src="{{ asset('storage/' . $gallery->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
              <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary"><span data-feather="save" class="align-text-bottom"></span> Update Moment</button>
      </form>
</div>
@endsection