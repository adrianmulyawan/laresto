@extends('layouts.dashboard-layout')

@section('title', 'Baginda Catering - Edit Menu Catering')

@push('custom-style')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endpush

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Menu Catering</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Edit Menu Catering</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Edit Data Menu Catering</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-menu-catering', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="image" class="form-label">Gambar</label> <br>
                                    <img src="{{ Storage::url($data->image) }}" alt="menu-image" width="220px"
                                        class="my-2 img-fluid">
                                    <input type="file" class="form-control" id="image" name="image">
                                    <small class="text-muted">Jangan upload gambar bila tidak ingin mengganti</small>
                                    @error('image')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Menu</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukan Nama Kategori Catering" value="{{ old('name', $data->name) }}">
                                    @error('name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="price" class="form-label">Harga Menu</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        placeholder="Masukan Harga Menu" value="{{ old('price', $data->price) }}">
                                    @error('price')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="category_id" class="form-label">Kategori Menu</label>
                                    <select class="form-select" id="category_id" name="category_id">
                                        <option value="{{ $data->category->id }}" selected disabled>
                                            {{ $data->category->name }} (Kategori Sekarang)
                                        </option>
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
                                        placeholder="Masukan Minimal Order"
                                        value="{{ old('minimal_order', $data->minimal_order) }}">
                                    @error('minimal_order')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="description" class="form-label">Deskripsi Menu</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Masukan Deskripsi" rows="5">{{ old('description', $data->description) }}</textarea>
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
