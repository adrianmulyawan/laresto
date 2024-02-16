@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Kelebihan Kami')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kelebihan Kami</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Kelebihan Catering</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Kelebihan Kami</h5>
                                <a href="{{ route('add-advantage') }}" class="btn btn-add text-end mx-2 px-3">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center table-heading">No</th>
                                        <th scope="col" class="text-center table-heading">Icon</th>
                                        <th scope="col" class="text-center table-heading">Nama</th>
                                        <th scope="col" class="text-center table-heading">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle">1</td>
                                        <td class="text-center align-middle">
                                            <img src="{{ asset('frontend/images/about/choose-1.png') }}" alt="icon"
                                                width="200px">
                                        </td>
                                        <td class="text-center align-middle">Gratis Ongkir</td>
                                        <td class="text-center align-middle">
                                            <a href="#" class="btn btn-info mt-auto mr-2">
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
                                            <img src="{{ asset('frontend/images/about/choose-2.png') }}" alt="icon"
                                                width="200px">
                                        </td>
                                        <td class="text-center align-middle">100% Halal</td>
                                        <td class="text-center align-middle">
                                            <a href="#" class="btn btn-info mt-auto mr-2">
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
                                            <img src="{{ asset('frontend/images/about/choose-3.png') }}" alt="icon"
                                                width="200px">
                                        </td>
                                        <td class="text-center align-middle">Murah</td>
                                        <td class="text-center align-middle">
                                            <a href="#" class="btn btn-info mt-auto mr-2">
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
                                            <img src="{{ asset('frontend/images/about/choose-4.png') }}" alt="icon"
                                                width="200px">
                                        </td>
                                        <td class="text-center align-middle">Praktis</td>
                                        <td class="text-center align-middle">
                                            <a href="#" class="btn btn-info mt-auto mr-2">
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