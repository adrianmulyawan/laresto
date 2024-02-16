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
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="100">
                    <div class="card card-menu-list">
                        <img src="{{ asset('frontend/images/package/chuttersnap-a5Cobl3QB5A-unsplash.jpg') }}"
                            class="img-fluid img-card-img-top" alt="detail-menu-image" width="350px">
                        <div class="card-body">
                            <h5 class="card-title">Paket Silver</h5>
                            <p class="card-text package-description">
                                Sajikan keindahan dalam setiap hidangan dengan Paket Prasmanan Silver, pilihan istimewa
                                untuk acara Anda.
                            </p>
                            <div class="d-grid gap-2">
                                <a href="detail-package.html" target="_blank" class="btn btn-order">
                                    Lihat Paket
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="200">
                    <div class="card card-menu-list">
                        <img src="{{ asset('frontend/images/package/saile-ilyas-SiwrpBnxDww-unsplash.jpg') }}"
                            class="card-img-top" alt="detail-menu-image" width="350px">
                        <div class="card-body">
                            <h5 class="card-title">Paket Gold</h5>
                            <p class="card-text package-description">
                                Hadirkan kemewahan cita rasa dengan Paket Prasmanan Gold, pilihan terbaik untuk acara
                                istimewa Anda.
                            </p>
                            <div class="d-grid gap-2">
                                <a href="detail-package.html" target="_blank" class="btn btn-order">
                                    Lihat Paket
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="300">
                    <div class="card card-menu-list">
                        <img src="{{ asset('frontend/images/package/ulysse-pointcheval-a-8LxEvb4kU-unsplash.jpg') }}"
                            class="card-img-top" alt="detail-menu-image" width="350px">
                        <div class="card-body">
                            <h5 class="card-title">Paket Platinum</h5>
                            <p class="card-text package-description">
                                Kreasikan pengalaman kuliner istimewa dengan Paket Platinum, menyajikan kelezatan yang tak
                                terlupakan.
                            </p>
                            <div class="d-grid gap-2">
                                <a href="detail-package.html" target="_blank" class="btn btn-order">
                                    Lihat Paket
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="400">
                    <div class="card card-menu-list">
                        <img src="{{ asset('frontend/images/package/ye-chen-ZjEEJ-TjJgs-unsplash.jpg') }}"
                            class="card-img-top" alt="detail-menu-image" width="350px">
                        <div class="card-body">
                            <h5 class="card-title">Paket Supreme</h5>
                            <p class="card-text package-description">
                                Nikmati keistimewaan kuliner terbaik dalam Paket Supreme, menyajikan kombinasi cita rasa
                                yang luar biasa untuk acara spesial anda.
                            </p>
                            <div class="d-grid gap-2">
                                <a href="detail-package.html" target="_blank" class="btn btn-order">
                                    Lihat Paket
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
