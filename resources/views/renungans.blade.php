@extends('layouts.main')
@section('container')
    <section class="renungan text-center container">
        <div class="row py-lg-4">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="border-bottom">Renungan Jemaat</h1>
            <h6 class="lead text-muted">"Aku berkata kepadamu: Demikian juga akan ada sukacita di sorga karena satu orang berdosa yang bertobat, lebih dari pada sukacita karena sembilan puluh sembilan orang benar yang tidak memerlukan pertobatan". Lukas 15:7</h6>
        </div>
        </div>
    </section>
    @if ($renungans->count())
    <div class="renungan-con">
        @foreach ($renungans as $renungan)
          <div class="card h-100">
            @if ($renungan->image)
              <img src="{{ asset('storage/'. $renungan->image) }}" alt="{{ $renungan->title }}" class="card-img-top">
            @else  
              <img src="https://source.unsplash.com/500x400/?{{ $renungan->title }}" class="card-img-top" alt="{{ $renungan->title }}">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $renungan->title }}</h5>
              <p class="card-text">{{ $renungan->excerpt }}</p>
              <small class="text-body-secondary">
                Posted at {{ $renungan->created_at->diffForHumans() }} by Admin</a>
              </small>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary btn-sm"><a href="/renungans/{{ $renungan->slug }}">read more..</a></button>
            </div>
          </div>
        @endforeach
    </div>
    @else
      <p class="text-center fs-4">No Meditation Found.</p>
    @endif
      <div class="d-flex justify-content-end mt-4">
        {{ $renungans->links() }}
      </div>
@endsection