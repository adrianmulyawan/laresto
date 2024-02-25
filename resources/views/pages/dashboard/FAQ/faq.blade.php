@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - FAQ')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">FAQ</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola FAQ</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar FAQ</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-add text-end mx-2 px-3" data-bs-toggle="modal"
                                    data-bs-target="#addService">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="addService" tabindex="-1" aria-labelledby="addServiceLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah FAQs</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('store-faq') }}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-4">
                                                        <label for="title" class="form-label">Pertanyaan</label>
                                                        <input type="text" class="form-control" id="title"
                                                            name="title" placeholder="Masukan Pertanyaan"
                                                            value="{{ old('title') }}">
                                                        @error('title')
                                                            <div class="form-text text-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="description" class="form-label">Jawaban</label>
                                                        <textarea class="form-control" id="description" name="description" placeholder="Masukan Jawaban" rows="3">{{ old('description') }}</textarea>
                                                        @error('description')
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
                                        <th scope="col" class="text-center table-heading">Pertanyaan</th>
                                        <th scope="col" class="text-center table-heading">Jawaban</th>
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
                                            <td class="text-center align-middle">{{ Str::limit($item->title, 15, '...') }}
                                            </td>
                                            <td class="text-center align-middle">
                                                {{ Str::limit($item->description, 20, '...') }}
                                            </td>
                                            <td class="text-center align-middle">
                                                <a href="{{ route('edit-faq', $item->id) }}"
                                                    class="btn btn-info mt-auto mr-2">
                                                    <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                                </a>
                                                <a href="{{ route('delete-faq', $item->id) }}" class="btn btn-danger"
                                                    data-confirm-delete="true">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="my-3 text-center text-danger">
                                                Belum Ada Data Apapun Disini
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
