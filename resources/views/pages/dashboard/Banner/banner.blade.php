@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Klien')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Banner</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Banner</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Banner</h5>
                                <!-- <a href="add-our-gallery.html" class="btn btn-add text-end mx-2 px-3">
                                                                                                                                                                      <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                                                                                                                                                    </a> -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-add text-end mx-2 px-3" data-bs-toggle="modal"
                                    data-bs-target="#addBanner">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="addBanner" tabindex="-1" aria-labelledby="addBannerLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Banner</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('store-banner') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-4">
                                                        <label for="banner_name" class="form-label">Nama Banner</label>
                                                        <input type="text" class="form-control" id="banner_name"
                                                            name="banner_name" placeholder="Masukan Nama Banner"
                                                            value="{{ old('banner_name') }}">
                                                        @error('banner_name')
                                                            <div class="form-text text-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="banner_image" class="form-label">Banner</label>
                                                        <input type="file" class="form-control" id="banner_image"
                                                            name="banner_image">
                                                        @error('banner_image')
                                                            <div class="form-text text-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <!-- <div class="d-grid gap-2">
                                                                                                                                                                                <button class="btn btn-submit-data py-2 py-2" type="submit">SIMPAN DATA</button>
                                                                                                                                                                              </div> -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-submit-data">Simpan Data</button>
                                                </div>
                                            </form>
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
                                        <th scope="col" class="text-center table-heading">Banner</th>
                                        <th scope="col" class="text-center table-heading">Nama</th>
                                        <th scope="col" class="text-center table-heading">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $number = 0;
                                    @endphp
                                    @forelse ($items as $item)
                                        <tr>
                                            <td class="text-center align-middle">{{ $number += 1 }}</td>
                                            <td class="text-center align-middle">
                                                <img src="{{ Storage::url($item->banner_image) }}" alt="icon"
                                                    width="180px">
                                            </td>
                                            <td class="text-center align-middle">
                                                {{ $item->banner_name }}
                                            </td>
                                            <td class="text-center align-middle">
                                                <a href="{{ route('edit-banner', $item->id) }}"
                                                    class="btn btn-info mt-auto mr-2">
                                                    <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                                </a>
                                                <a href="{{ route('delete-banner', $item->id) }}" class="btn btn-danger"
                                                    data-confirm-delete="true">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="my-3 text-center text-danger" colspan="4">
                                                Belum Ada Data Apapun
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
