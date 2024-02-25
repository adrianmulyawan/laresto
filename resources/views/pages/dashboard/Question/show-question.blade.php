@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Edit FAQ')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pertanyaan Customer</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Detail Pertanyaan Customer</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Pertanyaan Customer</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Customer</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name', $data->name) }}" disabled>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email Customer</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ old('email', $data->email) }}" disabled>
                                </div>
                                <div class="mb-4">
                                    <label for="contact" class="form-label">Kontak Customer</label>
                                    <input type="text" class="form-control" id="contact" name="contact"
                                        value="{{ old('contact', $data->contact) }}" disabled>
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label">Pertanyaan</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Masukan Jawaban" rows="10" disabled>{{ old('message', $data->message) }}</textarea>
                                </div>
                                <div class="d-grid gap-2">
                                    <a href="{{ route('question') }}" class="btn btn-primary py-2 py-2">
                                        KEMBALI
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
