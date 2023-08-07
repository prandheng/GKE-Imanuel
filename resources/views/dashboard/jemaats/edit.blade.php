@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Data Jemaat</h1>
    </div>
    <a href="/dashboard/jemaat" class="btn btn-primary mb-4"><span data-feather="arrow-left" class="align-text-bottom"></span> Kembali</a>
        <div class="col-lg-6">
            <form method="post" action="/dashboard/jemaat/{{ $jemaat->id }}" class="mb-5">
              @method('put')
              @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Jemaat</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $jemaat->name) }}" required autofocus>
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <select class="form-select" name="jabatan_id">
                      @foreach ($jabatans as $jabatan)
                        @if (old('jabatan_id', $jemaat->jabatan_id) == $jabatan->id)
                          <option value="{{ $jabatan->id }}" selected>{{ $jabatan->name }}</option>   
                        @else
                          <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>                           
                        @endif
                      @endforeach
                    </select>
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">Alamat</label>
                  <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $jemaat->address) }}">
                    @error('address')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Nomor Handphone</label>
                  <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $jemaat->phone) }}">
                    @error('phone')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><span data-feather="save" class="align-text-bottom"></span> Update Jemaat</button>
              </form>
        </div>
@endsection