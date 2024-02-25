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
                                    @php
                                        $number = 0;
                                    @endphp
                                    @forelse ($items as $item)
                                        <tr>
                                            <td class="text-center align-middle">{{ $number += 1 }}</td>
                                            <td class="text-center align-middle">{{ $item->name }}</td>
                                            <td class="text-center align-middle">{{ $item->email }}</td>
                                            <td class="text-center align-middle">{{ $item->contact }}</td>
                                            <td class="text-center align-middle">
                                                <a href="{{ route('show-question', $item->id) }}"
                                                    class="btn btn-info mt-auto mr-2">
                                                    <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="my-3 text-center text-danger">
                                                Belum Ada Data Apapun!
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
