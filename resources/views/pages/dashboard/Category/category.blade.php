@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Kategori Menu')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kategori Catering</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Kategori Catering</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Kategori Catering</h5>

                                <!-- <a href="add-catering-category.html" class="btn btn-add text-end mx-2 px-3">
                                  <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </a> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-add text-end mx-2 px-3" data-bs-toggle="modal"
                                    data-bs-target="#addCategoryCatering">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="addCategoryCatering" tabindex="-1"
                                    aria-labelledby="addCategoryCateringLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Kategori
                                                    Catering</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="post">
                                                    <div class="mb-4">
                                                        <label for="icon" class="form-label">Gambar</label>
                                                        <input type="file" class="form-control" id="icon"
                                                            name="icon">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="name" class="form-label">Nama Kategori</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" placeholder="Masukan Nama Kategori Catering">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="description" class="form-label">Deskripsi</label>
                                                        <textarea class="form-control" id="description" name="description" placeholder="Masukan Deskripsi" rows="5"></textarea>
                                                    </div>
                                                    <!-- <div class="d-grid gap-2">
                                                                            <button class="btn btn-primary py-2" type="submit">SIMPAN DATA</button>
                                                                        </div> -->
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-submit-data">Simpan Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center table-heading">No</th>
                                        <th scope="col" class="text-center table-heading">Image</th>
                                        <th scope="col" class="text-center table-heading">Nama Kategori</th>
                                        <th scope="col" class="text-center table-heading">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle">1</td>
                                        <td class="text-center align-middle">
                                            <img src="{{ asset('frontend/images/home-icon-1.svg') }}" alt="icon"
                                                width="60px">
                                        </td>
                                        <td class="text-center align-middle">Katering Harian</td>
                                        <td class="text-center align-middle">
                                            <a href="../super-admin/dashboardEditKawasan.html"
                                                class="btn btn-info mt-auto mr-2">
                                                <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                            </a>
                                            <form action="#" method="post" class="d-inline">
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">2</td>
                                        <td class="text-center align-middle">
                                            <img src="{{ asset('frontend/images/dish-cap-icon-1.svg') }}" alt="icon"
                                                width="60px">
                                        </td>
                                        <td class="text-center align-middle">Nasi Box</td>
                                        <td class="text-center align-middle">
                                            <a href="../super-admin/dashboardEditKawasan.html"
                                                class="btn btn-info mt-auto mr-2">
                                                <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                            </a>
                                            <form action="#" method="post" class="d-inline">
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">3</td>
                                        <td class="text-center align-middle">
                                            <img src="{{ asset('frontend/images/food-cart-icon-1.svg') }}" alt="icon"
                                                width="60px">
                                        </td>
                                        <td class="text-center align-middle">Prasmanan</td>
                                        <td class="text-center align-middle">
                                            <a href="../super-admin/dashboardEditKawasan.html"
                                                class="btn btn-info mt-auto mr-2">
                                                <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                            </a>
                                            <form action="#" method="post" class="d-inline">
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">4</td>
                                        <td class="text-center align-middle">
                                            <img src="{{ asset('frontend/images/menu/goat-icon 1.svg') }}" alt="icon"
                                                width="60px">
                                        </td>
                                        <td class="text-center align-middle">Aqiqah</td>
                                        <td class="text-center align-middle">
                                            <a href="../super-admin/dashboardEditKawasan.html"
                                                class="btn btn-info mt-auto mr-2">
                                                <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                            </a>
                                            <form action="#" method="post" class="d-inline">
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">5</td>
                                        <td class="text-center align-middle">
                                            <img src="{{ asset('frontend/images/menu/building-icon 2.svg') }}"
                                                alt="icon" width="60px">
                                        </td>
                                        <td class="text-center align-middle">Katering Perusahaan</td>
                                        <td class="text-center align-middle">
                                            <a href="../super-admin/dashboardEditKawasan.html"
                                                class="btn btn-info mt-auto mr-2">
                                                <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                            </a>
                                            <form action="#" method="post" class="d-inline">
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
