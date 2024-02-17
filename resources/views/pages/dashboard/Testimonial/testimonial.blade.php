@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Testimonial')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Testimoni</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Testimoni</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Testimoni</h5>
                                <!-- <a href="add-our-gallery.html" class="btn btn-add text-end mx-2 px-3">
                      <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                    </a> -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-add text-end mx-2 px-3" data-bs-toggle="modal"
                                    data-bs-target="#addTestimoni">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="addTestimoni" tabindex="-1" aria-labelledby="addTestimoniLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Testimoni
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="post">
                                                    <div class="mb-4">
                                                        <label for="name" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" placeholder="Masukan Nama">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="testi" class="form-label">Testimoni</label>
                                                        <textarea class="form-control" id="testi" name="testi" placeholder="Masukan Testimoni" rows="5"></textarea>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="icon" class="form-label">Gambar</label>
                                                        <input type="file" class="form-control" id="icon"
                                                            name="icon">
                                                    </div>
                                                    <!-- <div class="d-grid gap-2">
                                <button class="btn btn-submit-data py-2 py-2" type="submit">SIMPAN DATA</button>
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
                                        <th scope="col" class="text-center table-heading">Gambar</th>
                                        <th scope="col" class="text-center table-heading">Nama</th>
                                        <th scope="col" class="text-center table-heading">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle">1</td>
                                        <td class="text-center align-middle">
                                            <img src="{{ asset('frontend/images/user/alex-suprun-ZHvM3XIOHoE-unsplash.jpg') }}"
                                                alt="icon" width="80px">
                                        </td>
                                        <td class="text-center align-middle">Yosha Setyawan</td>
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
                                            <img src="{{ asset('frontend/images/user/alexander-hipp-iEEBWgY_6lA-unsplash.jpg') }}"
                                                alt="icon" width="80px">
                                        </td>
                                        <td class="text-center align-middle">Alfred Sunandar</td>
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
                                            <img src="{{ asset('frontend/images/user/foto-sushi-6anudmpILw4-unsplash.jpg') }}"
                                                alt="icon" width="80px">
                                        </td>
                                        <td class="text-center align-middle">Ghyats Lutfi</td>
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
                                            <img src="{{ asset('frontend/images/user/jonas-kakaroto-KIPqvvTOC1s-unsplash.jpg') }}"
                                                alt="icon" width="80px">
                                        </td>
                                        <td class="text-center align-middle">Arnold Purwanto</td>
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
