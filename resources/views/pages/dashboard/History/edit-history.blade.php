@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Tambah Sejarah Perjalanan')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sejarah Perjalanan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Edit Sejarah Perjalanan</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Edit Data Sejarah Perjalan</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-history', $data->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="title" class="form-label">Masukan Tahun</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Masukan Tahun Contoh : 2013-2015"
                                        value="{{ old('title', $data->title) }}">
                                    @error('title')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="description" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Masukan Deskripsi" rows="5">{{ old('description', $data->description) }}</textarea>
                                    @error('description')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-submit-data py-2 py-2" type="submit">UPDATE DATA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
