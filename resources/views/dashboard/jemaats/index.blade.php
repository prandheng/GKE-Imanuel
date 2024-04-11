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
      <a href="/dashboard/jemaat/create" class="btn btn-primary mb-3"><span data-feather="file-plus" class="align-text-bottom"></span> Tambah Jemaat</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Alamat</th>
              <th scope="col">Phone</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($jemaats as $jemaat)      
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $jemaat->name }}</td>
              <td>{{ $jemaat->jabatan->name }}</td>
              <td>{{ $jemaat->address }}</td>
              <td>{{ $jemaat->phone }}</td>
              <td>
                <a href="/dashboard/jemaat/{{ $jemaat->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/jemaat/{{ $jemaat->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Data akan dihapus! Anda yakin?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection