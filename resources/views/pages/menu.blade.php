@extends('layouts.main-layout')
@section('title', 'Baginda Catering - Menu')

@section('header')
    <!-- Banner -->
    <div class="banner-menu">
        <h1 class="text-center text-capitalize">Daftar Menu</h1>
        <p class="text-center text-capitalize">
            Nikmati hidangan lezat dan berkualitas tinggi kami. <br> Menu pilihan untuk semua selera, disajikan dengan penuh
            kreativitas dan cinta.
        </p>
        <a href="#sectionMenuList" class="btn btn-order">
            Lihat Daftar Menu
        </a>
    </div>
@endsection

@section('content')
    <section class="section-menu-list" id="sectionMenuList">
        <div class="container">
            <div class="row row-provide-list justify-content-start">
                @forelse ($categories as $category)
                    <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="100">
                        <div class="card card-service-list p-4">
                            <img src="{{ Storage::url($category->icon) }}" alt="card-icon" width="60px">
                            <h5 class="text-start text-capitalize">
                                {{ $category->name }}
                            </h5>
                            <p class="text-stat text-capitalize">
                                {{ $category->description }}
                            </p>
                            <a href="{{ route('detail-menu', $category->slug) }}"
                                class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                                Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <h5 class="text-center text-danger" data-aos="fade-up">
                        Anda Belum Menambahkan Kategori Apapun!
                    </h5>
                @endforelse
            </div>
            <div class="row justify-content-start">
                {{ $categories->links() }}
            </div>
        </div>
    </section>
@endsection
