@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $renungan->title }}</h1>

            <a href="/dashboard/renungan" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
            <a href="/dashboard/renungan/{{ $renungan->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/renungan/{{ $renungan->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Post akan dihapus! Anda yakin?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            
            @if ($renungan->image)
            <div style="max-height: 400px; overflow:hidden">
                <img src="{{ asset('storage/'. $renungan->image) }}" alt="" class="img-fluid mt-3">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400/" alt="" class="img-fluid mt-3">
            @endif

            <article class="my-3 fs-5">   
                {!! $renungan->body !!}
            </article>

        </div>
    </div>
</div>
@endsection