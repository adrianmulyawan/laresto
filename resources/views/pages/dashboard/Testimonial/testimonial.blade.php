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
                                            <form action="{{ route('store-testimonial') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-4">
                                                        <label for="name" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" placeholder="Masukan Nama"
                                                            value="{{ old('name') }}">
                                                        @error('name')
                                                            <div class="form-text text-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="work" class="form-label">Pekerjaaan</label>
                                                        <input type="text" class="form-control" id="work"
                                                            name="work" placeholder="Masukan Pekerjaan"
                                                            value="{{ old('work') }}">
                                                        @error('work')
                                                            <div class="form-text text-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="testi" class="form-label">Testimoni</label>
                                                        <textarea class="form-control" id="testi" name="testi" placeholder="Masukan Testimoni" rows="5">{{ old('testi') }}</textarea>
                                                        @error('testi')
                                                            <div class="form-text text-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="image" class="form-label">Gambar</label>
                                                        <input type="file" class="form-control" id="image"
                                                            name="image">
                                                        @error('image')
                                                            <div class="form-text text-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
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
                                        <th scope="col" class="text-center table-heading">Gambar</th>
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
                                                <img src="{{ Storage::url($item->image) }}" alt="icon" width="80px">
                                            </td>
                                            <td class="text-center align-middle">
                                                {{ $item->name }}
                                            </td>
                                            <td class="text-center align-middle">
                                                <a href="{{ route('edit-testimonial', $item->id) }}"
                                                    class="btn btn-info mt-auto mr-2">
                                                    <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                                </a>
                                                <a href="{{ route('delete-testimonial', $item->id) }}"
                                                    class="btn btn-danger" data-confirm-delete="true">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="my-3 text-center text-danger">
                                                Belum Ada Data Apapun!
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
