@extends('layouts.main')
@section('container')
<h1 class="mb-2 mt-4 border-bottom text-center">Data Jemaat</h1>
  <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Alamat</th>
            <th scope="col" style="display: none">No. HP</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($jemaats as $jemaat)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $jemaat->name }}</td>
              <td>{{ $jemaat->jabatan->name }}</td>
              <td>{{ $jemaat->address }}</td>
              <td style="display: none">{{ $jemaat->phone }}</td>
            </tr>
            @endforeach
          </tbody>
      </table>
  </div>
  <div class="d-flex justify-content-end">
        {{ $jemaats->links() }}
  </div>
@endsection