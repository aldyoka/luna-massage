@extends('layouts.admin')

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        + add
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masukan Detai</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row needs-validation" action="/addKonten" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="Text" name="judul"
                                    class="form-control border @error('judul') 
                                            is-invalid                                        
                                        @enderror"
                                    id="judul" placeholder="Judul" style="color: black" value="{{ old('judul') }}">
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="isi" class="form-label">Detail</label>
                                <textarea
                                    class="form-control @error('isi')
                                            is-invalid
                                        @enderror"
                                    name="isi" id="isi" rows="3">{{ old('isi') }}</textarea>
                                @error('isi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Rp.</span>
                                <input type="number" name="harga"
                                    class="form-control border @error('harga') 
                                            is-invalid                                        
                                        @enderror"
                                    id="harga" placeholder="100000" style="color: black" value="{{ old('harga') }}">
                                @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status"
                                    id="statusTrue" value=1>
                                <label class="form-check-label" for="statusTrue">
                                    True
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status"
                                    id="statusFalse" value="0" checked>
                                <label class="form-check-label" for="statusFalse">
                                    False
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Konten Manager --}}
    <div class="mt-2">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Harga</th>
                    <th scope="col" colspan="2">Manage</th>
                </tr>
            </thead>
            @foreach ($data_konten as $isi)
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $isi->judul }}</td>
                        <td>{{ $isi->isi }}</td>
                        <td>Rp. {{ $isi->harga }}</td>
                        <td><a href="#">Edit</a></td>
                        <td><a href="#">Delete</a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    {{-- End Konten Manager --}}
@endsection
