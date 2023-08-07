@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Category</h1>
    </div>
    <a href="/dashboard/categories" class="btn btn-primary"><span data-feather="arrow-left" class="align-text-bottom"></span> Kembali</a>
        <div class="col-lg-6 mt-3">
            <form method="post" action="/dashboard/categories/{{ $category->slug }}" class="mb-5">
              @method('put')
              @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Category Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $jemaat->name) }}" required autofocus>
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
                    @error('slug')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>  
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="image" class="form-label">Post Image</label>
                    <input type="hidden" name="oldImage" value="{{ $post->image }}">
                      @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
                <button type="submit" class="btn btn-primary"><span data-feather="save" class="align-text-bottom"></span> Update Category</button>
              </form>
        </div>
<script>
  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection