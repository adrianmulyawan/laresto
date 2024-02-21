@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Edit Kategori')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kategori Catering</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Edit Kategori Catering</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Edit Kategori Catering</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-category-catering', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukan Nama Kategori" value="{{ old('name', $data->name) }}">
                                    @error('name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="icon" class="form-label">Icon</label> <br>
                                    <img src="{{ Storage::url($data->icon) }}" alt="icon" class="img-fluid my-3"
                                        width="220px">
                                    <input type="file" class="form-control" id="icon" name="icon">
                                    <small class="text-muted">Jangan upload gambar bila tidak ingin mengganti</small>
                                    @error('image')
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
