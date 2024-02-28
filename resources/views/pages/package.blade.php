@extends('layouts.main-layout')
@section('title', 'Baginda Catering - Paket Katering')

@section('header')
    <!-- Banner -->
    <div class="banner-menu">
        <h1 class="text-center text-capitalize">Daftar Paket Makanan</h1>
        <p class="text-center text-capitalize">
            Nikmati berbagai pilihan paket Makanan berkualitas untuk setiap acara spesial Anda.
        </p>
        <a href="#sectionMenuList" class="btn btn-order">
            Lihat Daftar Paket
        </a>
    </div>
@endsection

@section('content')
    <section class="section-menu-list" id="sectionMenuList">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                @php
                    $duration = 0;
                @endphp
                @forelse ($packages as $package)
                    <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up"
                        data-aos-duration="{{ $duration += 100 }}">
                        <div class="card card-menu-list">
                            <img src="{{ Storage::url($package->image_header) }}" class="img-fluid img-card-img-top"
                                alt="detail-menu-image" width="350px">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $package->name }}
                                </h5>
                                <p class="text-price my-2">Harga Mulai Dari Rp
                                    {{ number_format($package->price, 2, ',', '.') }} / Pax </p>
                                <p class="card-text package-description">
                                    {{ $package->simple_description }}
                                </p>
                                <div class="d-grid gap-2">
                                    <a href="{{ route('detail-package', $package->slug) }}" target="_blank"
                                        class="btn btn-order">
                                        Lihat Paket
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h5 class="text-center text-danger" data-aos="fade-up">
                        Anda Belum Menambahkan Paket Apapun!
                    </h5>
                @endforelse
            </div>
            <div class="row justify-content-center my-3">
                {{ $packages->links() }}
            </div>
        </div>
    </section>
@endsection
