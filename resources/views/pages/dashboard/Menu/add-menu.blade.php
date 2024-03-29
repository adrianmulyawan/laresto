@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Tambah Menu Catering')

@push('custom-style')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endpush

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Menu Catering</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Tambah Menu Catering</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Tambah Data Menu Catering</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('store-menu-catering') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="image" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @error('image')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Menu</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukan Nama Kategori Catering" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="price" class="form-label">Harga Menu</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        placeholder="Masukan Harga Menu" value="{{ old('price') }}">
                                    @error('price')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="category_id" class="form-label">Kategori Menu</label>
                                    <select class="form-select" id="category_id" name="category_id">
                                        <option selected disabled>Pilih Kategori Menu</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="minimal_order" class="form-label">Minimal Order</label>
                                    <input type="text" class="form-control" id="minimal_order" name="minimal_order"
                                        placeholder="Masukan Minimal Order" value="{{ old('minimal_order') }}">
                                    @error('minimal_order')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="description" class="form-label">Deskripsi Menu</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Masukan Deskripsi" rows="5">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary py-2" type="submit">SIMPAN DATA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('custom-script')
    <script>
        ClassicEditor.create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
