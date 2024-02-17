@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Tambah Blog')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Blog</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Tambah Data Blog</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Tambah Data Blog</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="mb-4">
                                    <label for="title" class="form-label">Judul Blog</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Masukan Judul Blog">
                                </div>
                                <div class="mb-4">
                                    <label for="image_header" class="form-label">Gambar Header Blog</label>
                                    <input class="form-control" type="file" id="image_header" name="image_header">
                                </div>
                                <div class="mb-4">
                                    <label for="image_blog" class="form-label">Gambar Blog</label>
                                    <input type="file" class="form-control" id="image_blog" name="image_blog">
                                </div>
                                <div class="mb-4">
                                    <label for="body" class="form-label">Isi Blog</label>
                                    <textarea class="form-control" id="body" name="body" placeholder="Masukan Isi Blog" rows="5"></textarea>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-submit-data py-2 py-2" type="submit">SIMPAN DATA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
