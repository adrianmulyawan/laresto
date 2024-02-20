@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Gallery')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Gallery</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Gallery</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Gallery</h5>
                                <a href="{{ route('add-gallery') }}" class="btn btn-add text-end mx-2 px-3">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </a>
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
                                                <img src="{{ Storage::url($item->image) }}" alt="icon" width="200px">
                                            </td>
                                            <td class="text-center align-middle">
                                                {{ $item->name }}
                                            </td>
                                            <td class="text-center align-middle">
                                                <a href="{{ route('edit-gallery', $item->id) }}"
                                                    class="btn btn-info mt-auto mr-2">
                                                    <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                                </a>
                                                <a href="{{ route('delete-gallery', $item->id) }}" class="btn btn-danger"
                                                    data-confirm-delete="true">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="my-3 text-danger text-center" colspan="4">Belum Ada Data Apapun!
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
