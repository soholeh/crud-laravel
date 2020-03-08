@extends('layout/main')

@section('title', 'Detail Jurusan')

@section('container')
        <div class="container">
            <div class="row">
                <div class="col-8">
                     <h1 class="mt-4">Detail Jurusan</h1>

                        <div class="card" >
                            <div class="card-body">
                                <h5 class="card-title">Jurusan : {{ $jurusan->jurusan }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">ID : {{ $jurusan->id }}</h6>
                                <p class="card-text">Created at : {{ $jurusan->created_at }}</p>
                                <p class="card-text">Updated at : {{ $jurusan->updated_at }}</p>
                                
                                <a href="{{ $jurusan->id }}/edit"type="submit" class="btn btn-primary">Edit</a>
                                
                                <form action="{{ $jurusan->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="/jurusan" class="card-link">Kembali</a>
                            </div>
                        </div>
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
@endsection