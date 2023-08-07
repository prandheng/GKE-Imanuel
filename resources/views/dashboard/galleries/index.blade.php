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
    <a href="/dashboard/galleries/create" class="btn btn-primary mb-3"><span data-feather="file-plus" class="align-text-bottom"></span> Create Moment</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Title</th>
            {{-- <th scope="col">Image</th> --}}
            {{-- <th scope="col">Description</th> --}}
          </tr>
        </thead>
        <tbody>
          @foreach ($galleries as $gallery)      
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $gallery->title }}</td>
            {{-- <td>{{ $gallery->image }}</td> --}}
            {{-- <td>{{ $gallery->description }}</td> --}}
            <td>
              <a href="/dashboard/galleries/{{ $gallery->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/galleries/{{ $gallery->id }}" method="post" class="d-inline">
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