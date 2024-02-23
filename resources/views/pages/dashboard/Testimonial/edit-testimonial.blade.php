@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Edit Testimoni')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Testimoni</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Edit Testimoni</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Edit Data Testimoni</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-testimonial', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukan Nama" value="{{ old('name', $data->name) }}">
                                    @error('name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="work" class="form-label">Pekerjaaan</label>
                                    <input type="text" class="form-control" id="work" name="work"
                                        placeholder="Masukan Pekerjaan" value="{{ old('work', $data->work) }}">
                                    @error('work')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="testi" class="form-label">Testimoni</label>
                                    <textarea class="form-control" id="testi" name="testi" placeholder="Masukan Testimoni" rows="5">{{ old('testi', $data->testi) }}</textarea>
                                    @error('testi')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="image" class="form-label">Gambar</label> <br>
                                    <img src="{{ Storage::url($data->image) }}" alt="image" class="img-fluid my-3"
                                        width="220px">
                                    <input type="file" class="form-control" id="image" name="image">
                                    <small class="text-muted">Jangan upload gambar bila tidak ingin mengganti</small>
                                    @error('image')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-submit-data py-2 py-2" type="submit">SIMPAN DATA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
