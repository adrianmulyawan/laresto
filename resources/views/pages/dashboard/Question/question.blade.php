@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Pertanyaan Customer')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pertanyaan Customer</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Pertanyaan Customer</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Pertanyaan Customer</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center table-heading">No</th>
                                        <th scope="col" class="text-center table-heading">Name</th>
                                        <th scope="col" class="text-center table-heading">Email</th>
                                        <th scope="col" class="text-center table-heading">Kontak</th>
                                        <th scope="col" class="text-center table-heading">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle">1</td>
                                        <td class="text-center align-middle">Adrian Mulyawan</td>
                                        <td class="text-center align-middle">hello.adrianmulyawan@gmail.com</td>
                                        <td class="text-center align-middle">081257099067</td>
                                        <td class="text-center align-middle">
                                            <a href="#" class="btn btn-info mt-auto mr-2">
                                                <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
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
