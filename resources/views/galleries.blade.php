@extends('layouts.main')
@section('container')
  <div class="quote">
    <section class="text-center container">
          <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
              <h3 class="border-bottom mb-3">Album GKE Imanuel Putussibau</h3>
              <h6 class="lead text-muted">"Apapun yang kamu perbuat, perbuatlah dengan segenap hatimu seperti Tuhan dan bukan untuk manusia". Kolose 3:23</h6>
          </div>
          </div>
    </section>
  </div>
  
  @if ($galleries->count())
  <div class="galleries-con">
    @foreach ($galleries as $gallery)
      <div class="gallery-content">
        @if ($gallery->image)
            <img src="{{ asset('storage/'. $gallery->image) }}" alt="" class="img-fluid">
        @else
            <img src="https://source.unsplash.com/800x600/?{{ $gallery->title }}" alt="" class="img-fluid">
        @endif
        <div class="gallery-body">
          <h4>{{ $gallery->title }}</h4>
          <p>{{ $gallery->description }}</p>
        </div>
      </div>
    @endforeach
  </div>
  @else
    <p class="text-center fs-4">No Gallery Found.</p>  
  @endif
{{-- paginate --}}
<div class="d-flex justify-content-end mt-4">
    {{ $galleries->links() }}
</div>

@endsection