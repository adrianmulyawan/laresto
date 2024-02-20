@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Edit Banner')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Gallery</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Edit Banner Catering</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Edit Banner Catering</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-banner', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="banner_name" class="form-label">Nama Banner</label>
                                    <input type="text" class="form-control" id="banner_name" name="banner_name"
                                        placeholder="Masukan Nama Banner"
                                        value="{{ old('banner_name', $data->banner_name) }}">
                                    @error('banner_name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="banner_image" class="form-label">Banner</label> <br>
                                    <img src="{{ Storage::url($data->banner_image) }}" alt="image" class="img-fluid my-3"
                                        width="220px">
                                    <input type="file" class="form-control" id="banner_image" name="banner_image">
                                    <small class="text-muted">Jangan upload gambar bila tidak ingin mengganti</small>
                                    @error('banner_image')
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
