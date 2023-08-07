@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justtify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $renungan->title }}</h2>
            <p>Posted by admin</p>
            @if ($renungan->image)
            <div style="max-height: 400px; overflow:hidden">
                <img src="{{ asset('storage/'. $renungan->image) }}" alt="" class="img-fluid">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400/?{{ $renungan->title }}" alt="{{ $renungan->title }}" class="img-fluid">
            @endif
            <article class="my-3 fs-5">   
                {!! $renungan->body !!}
            </article>
            <div class="btn btn-success">
                <a href="/renungans" class="d-block">Back to Meditations</a>
            </div>
        </div>
    </div>
</div>
@endsection
