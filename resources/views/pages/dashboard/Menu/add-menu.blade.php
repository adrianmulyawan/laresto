@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Tambah Menu Catering')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Menu Catering</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Tambah Menu Catering</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Tambah Data Menu Catering</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="mb-4">
                                    <label for="icon" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="icon" name="icon">
                                </div>
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Menu</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukan Nama Kategori Catering">
                                </div>
                                <div class="mb-4">
                                    <label for="category_id" class="form-label">Kategori Menu</label>
                                    <select class="form-select" id="category_id" name="category_id">
                                        <option selected disabled>Pilih Kategori Menu</option>
                                        <option value="1">Prasamanan</option>
                                        <option value="2">Snack Box</option>
                                        <option value="3">Katering Harian</option>
                                        <option value="4">Katering Perusahaan</option>
                                        <option value="5">Aqiqah</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="price" class="form-label">Nama Menu</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        placeholder="Masukan Harga Menu">
                                </div>
                                <div class="mb-4">
                                    <label for="minimal_order" class="form-label">Minimal Order</label>
                                    <input type="text" class="form-control" id="minimal_order" name="minimal_order"
                                        placeholder="Masukan Minimal Order">
                                </div>
                                <div class="mb-4">
                                    <label for="description_menu" class="form-label">Deskripsi Menu</label>
                                    <textarea class="form-control" id="description_menu" name="description_menu" placeholder="Masukan Deskripsi"
                                        rows="5"></textarea>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary py-2" type="submit">SIMPAN DATA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
