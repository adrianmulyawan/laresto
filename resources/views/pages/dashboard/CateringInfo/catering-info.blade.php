@extends('layouts.dashboard-layout')
@section('title', 'Info Catering')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Info Catering</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Info Catering</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Info Organisasi</h5>
                                @if (!$data)
                                    <a href="{{ route('add-catering-info') }}" class="btn btn-add text-end mx-2 px-3">
                                        <i class="fa-solid fa-plus fa-sm"></i> Tambah Info
                                    </a>
                                @else
                                    <a href="{{ route('edit-catering-info', $data->id) }}"
                                        class="btn btn-add text-end mx-2 px-3">
                                        <i class="fa-solid fa-plus fa-sm"></i> Edit Data
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center my-2">
                                @if (!$data)
                                    <h5 class="text-center text-danger">
                                        Anda Belum Menambahkan Informasi Mengenai Catering Anda!
                                    </h5>
                                @else
                                    <form action="#" method="post">
                                        <div class="mb-4">
                                            <label for="name" class="form-label">Nama Catering</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Masukan Nama Catering" value="{{ $data->name }}" disabled>
                                        </div>
                                        <div class="mb-4">
                                            <label for="email" class="form-label">Email Catering</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Masukan Email Catering" value="{{ $data->email }}" disabled>
                                        </div>
                                        <div class="mb-4">
                                            <label for="phone_number" class="form-label">Nomor Telpon</label>
                                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                                placeholder="Masukan Kontak Catering" value="{{ $data->phone_number }}"
                                                disabled>
                                        </div>
                                        <div class="mb-4">
                                            <label for="address" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Masukan Alamat Catering" value="{{ $data->address }}" disabled>
                                        </div>
                                        <div class="mb-4">
                                            <label for="history_info" class="form-label">Sejarah Catering</label>
                                            <textarea class="form-control" id="history_info" name="history_info" placeholder="Masukan Sejarah Catering"
                                                rows="5" disabled>{!! $data->history_info !!}</textarea>
                                        </div>
                                        <div class="mb-4">
                                            <label for="description_info" class="form-label">Deskripsi Catering</label>
                                            <textarea class="form-control" id="description_info" name="description_info" placeholder="Masukan Deskripsi Catering"
                                                rows="5" disabled>{!! $data->description_info !!}</textarea>
                                        </div>
                                        <div class="mb-4">
                                            <label for="organization_logo" class="form-label">Logo Organisasi</label> <br>
                                            <img src="{{ Storage::url($data->logo) }}" alt="logo-organisasi"
                                                class="img-fluid" width="120px">
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
