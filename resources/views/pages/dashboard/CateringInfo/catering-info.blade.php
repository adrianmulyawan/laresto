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
                                <a href="{{ route('add-catering-info') }}" class="btn btn-add text-end mx-2 px-3">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Info
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center my-2">
                                <h5 class="text-center text-danger">Anda Belum Menambahkan Informasi Mengenai Catering Anda!
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
