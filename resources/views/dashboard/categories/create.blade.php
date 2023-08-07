@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Create Category</h1>
    </div>
    <a href="/dashboard/categories" class="btn btn-primary"><span data-feather="arrow-left" class="align-text-bottom"></span> Kembali</a>
      <div class="col-lg-6 mt-3">
            <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Category name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
                      @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                    @error('slug')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>  
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">Post Image</label>
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                  <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                  @error('image')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary"><span data-feather="save" class="align-text-bottom"></span> Create Category</button>
              </form>
      </div>
{{-- belum paham --}}
<script>
    // script sluggable
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
  
    name.addEventListener('change', function() {
      fetch('/dashboard/categories/SlugMaker?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    });
  
    // script preview image
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