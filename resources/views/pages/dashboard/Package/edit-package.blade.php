@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Tambah Paket Catering')

@push('custom-style')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endpush

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Paket Katering</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Tambah Data Paket Katering</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Tambah Data Paket Katering</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-package-catering', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Paket Katering</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukan Nama Paket Katering" value="{{ old('name', $data->name) }}">
                                    @error('name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="price" class="form-label">Harga Mulai Paket Katering</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        placeholder="Masukan Harga Paket Katering" value="{{ old('price', $data->price) }}">
                                    @error('price')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="image_header" class="form-label">Gambar Header Paket Katering</label> <br>
                                    <img src="{{ Storage::url($data->image_header) }}" alt="image" class="my-3 img-fluid"
                                        width="200px">
                                    <input type="file" class="form-control" id="image_header" name="image_header">
                                    <small class="text-muted">Jangan upload gambar bila tidak ingin mengganti</small>
                                    @error('image_header')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="image_package" class="form-label">Gambar List Menu Katering</label> <br>
                                    <img src="{{ Storage::url($data->image_package) }}" alt="package-image"
                                        class="my-3 img-fluid" width="220px">
                                    <input type="file" class="form-control" id="image_package" name="image_package">
                                    <small class="text-muted">Jangan upload gambar bila tidak ingin mengganti</small>
                                    @error('image_package')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="simple_description" class="form-label">Deskripsi Singkat Paket
                                        Katering</label>
                                    <textarea class="form-control" id="simple_description" name="simple_description" placeholder="Masukan Deskripsi"
                                        rows="5">{{ old('simple_description', $data->simple_description) }}</textarea>
                                    @error('simple_description')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="description" class="form-label">Deskripsi Lengkap Paket Katering</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Masukan Deskripsi" rows="5">{{ old('description', $data->description) }}</textarea>
                                    @error('description')
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

@push('custom-script')
    <script>
        ClassicEditor.create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
