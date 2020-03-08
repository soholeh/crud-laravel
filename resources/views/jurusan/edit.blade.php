@extends('layout/main')

@section('title', 'Edit Jurusan')

@section('container')
        <div class="container">
            <div class="row">
                <div class="col-8">
                     <h1 class="mt-4">Form Edit Jurusan</h1>

                     <form method="post" action="/jurusan/{{ $jurusan->id }}">
                     @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control @error('jurusan') is-invalid
                            @enderror" id="jurusan" placeholder="Masukkan Jurusan"
                            name="jurusan" value="{{ $jurusan->jurusan }}">
                            @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                        <a href="{{ route('jurusan.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
@endsection