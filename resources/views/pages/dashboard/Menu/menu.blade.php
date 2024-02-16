@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Menu Catering')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Menu Catering</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Menu Catering</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Menu Catering</h5>

                                <a href="{{ route('add-menu-catering') }}" class="btn btn-add text-end mx-2 px-3">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center table-heading">No</th>
                                        <th scope="col" class="text-center table-heading">Image</th>
                                        <th scope="col" class="text-center table-heading">Kategori</th>
                                        <th scope="col" class="text-center table-heading">Menu</th>
                                        <th scope="col" class="text-center table-heading">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle">1</td>
                                        <td class="text-center align-middle">
                                            <img src="{{ asset('frontend/images/menu-list/nasi-box-1.jpg') }}"
                                                alt="image-food" width="200px">
                                        </td>
                                        <td class="text-center align-middle">Katering Harian</td>
                                        <td class="text-center align-middle">Paket NTO + Sate</td>
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
                                            <img src="{{ asset('frontend/images/menu-list/ca-creative-aDFj86NuvD8-unsplash.jpg') }}"
                                                alt="image-food" width="200px">
                                        </td>
                                        <td class="text-center align-middle">Snack Box</td>
                                        <td class="text-center align-middle">Snack Box 1</td>
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
                                            <img src="{{ asset('frontend/images/menu-list/nasi-box-2.jpg') }}"
                                                alt="image-food" width="200px">
                                        </td>
                                        <td class="text-center align-middle">Prasmanan</td>
                                        <td class="text-center align-middle">Nasi Goreng Oriental</td>
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
                                            <img src="{{ asset('frontend/images/menu-list/nasi-box-3.jpg') }}"
                                                alt="image-food" width="200px">
                                        </td>
                                        <td class="text-center align-middle">Prasmanan</td>
                                        <td class="text-center align-middle">Paket Nasi Briyani</td>
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
                                            <img src="{{ asset('frontend/images/menu-list/nasi-box-4.jpg') }}"
                                                alt="image-food" width="200px">
                                        </td>
                                        <td class="text-center align-middle">Nasi Box</td>
                                        <td class="text-center align-middle">Paket Nasi Box 5</td>
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
