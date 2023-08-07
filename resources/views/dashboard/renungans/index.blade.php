@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>{{ $title }}</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
        </div>   
    @endif
    <div class="table-responsive">
        <a href="/dashboard/renungan/create" class="btn btn-primary mb-3"><span data-feather="file-plus" class="align-text-bottom"></span> Tambah Renungan</a>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Title</th>
                {{-- <th scope="col">Excerpt</th> --}}
            </tr>
            </thead>
            <tbody>
            @foreach ($renungans as $renungan)      
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $renungan->title }}</td>
                {{-- <td>{{ $renungan->excerpt }}</td> --}}
                <td>
                <a href="/dashboard/renungan/{{ $renungan->slug }}" class="badge bg-primary"><span data-feather="eye"></span></a>
                <a href="/dashboard/renungan/{{ $renungan->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/renungan/{{ $renungan->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Post akan dihapus! Anda yakin?')"><span data-feather="x-circle"></span></button>
                </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection