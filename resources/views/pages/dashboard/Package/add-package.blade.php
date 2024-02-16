@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Paket Catering')

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
                            <form action="#" method="post">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Paket Katering</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukan Nama Paket Katering">
                                </div>
                                <div class="mb-4">
                                    <label for="price" class="form-label">Harga Mulai Paket Katering</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        placeholder="Masukan Harga Paket Katering">
                                </div>
                                <div class="mb-4">
                                    <label for="image_header" class="form-label">Gambar Header Paket Katering</label>
                                    <input type="file" class="form-control" id="image_header" name="image_header">
                                </div>
                                <div class="mb-4">
                                    <label for="image_package" class="form-label">Gambar List Menu Katering</label>
                                    <input type="file" class="form-control" id="image_package" name="image_package">
                                </div>
                                <div class="mb-4">
                                    <label for="description" class="form-label">Deskripsi Lengkap Paket Katering</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Masukan Deskripsi" rows="5"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="simple_description" class="form-label">Deskripsi Singkat Paket
                                        Katering</label>
                                    <textarea class="form-control" id="simple_description" name="simple_description" placeholder="Masukan Deskripsi"
                                        rows="5"></textarea>
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
