@extends('layouts.dashboard-layout')
@section('title', 'Baginda Catering - Tambah Informasi Catering')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Info Catering</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Form Tambah Info Catering</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Tambah Info Catering</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Catering</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukan Nama Catering">
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email Catering</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Masukan Email Catering">
                                </div>
                                <div class="mb-4">
                                    <label for="phone_number" class="form-label">Nomor Telpon</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number"
                                        placeholder="Masukan Kontak Catering">
                                </div>
                                <div class="mb-4">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Masukan Alamat Catering">
                                </div>
                                <div class="mb-4">
                                    <label for="history_info" class="form-label">Sejarah Catering</label>
                                    <textarea class="form-control" id="history_info" name="history_info" placeholder="Masukan Sejarah Catering"
                                        rows="5"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="description_info" class="form-label">Deskripsi Catering</label>
                                    <textarea class="form-control" id="description_info" name="description_info" placeholder="Masukan Deskripsi Catering"
                                        rows="5"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="logo" class="form-label">Logo Catering</label>
                                    <input class="form-control" type="file" id="logo" name="logo">
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-submit-data py-2" type="submit">SIMPAN DATA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
