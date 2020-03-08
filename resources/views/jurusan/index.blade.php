@extends('layout/main')

@section('title', 'Daftar Jurusan')

@section('container')
        <div class="container">
            <div class="row">
                <div class="col-8">
                     <h1 class="mt-4">Daftar Jurusan</h1>
                        <a href="/jurusan/create" class="btn btn-primary my-4">Tambah Jurusan</a>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status')}}
                            </div>
                        @endif
                            <ul class="list-group">
                            @foreach( $jurusan as $jurusan )
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $jurusan->jurusan}}
                                <a href="/jurusan/{{ $jurusan->id }}" class="badge badge-info">Detail</a>
                            </li>
                            @endforeach
                            </ul>
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
@endsection