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
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="100">
                    <div class="card card-service-list p-4">
                        <img src="{{ asset('frontend/images/home-icon-1.svg') }}" alt="card-icon" width="60px">
                        <h5 class="text-start text-capitalize">Katering Harian</h5>
                        <p class="text-stat text-capitalize">Katering harian dengan menu spesial setiap hari.</p>
                        <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                            Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="200">
                    <div class="card card-service-list p-4">
                        <img src="{{ asset('frontend/images/dish-cap-icon-1.svg') }}" alt="card-icon" width="60px">
                        <h5 class="text-start text-capitalize">Nasi Box</h5>
                        <p class="text-stat text-capitalize">Nasi box lezat dan bergizi, pilihan praktis Anda.</p>
                        <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                            Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="300">
                    <div class="card card-service-list p-4">
                        <img src="{{ asset('frontend/images/food-cart-icon-1.svg') }}" alt="card-icon" width="60px">
                        <h5 class="text-start text-capitalize">Prasmanan</h5>
                        <p class="text-stat text-capitalize">Prasmanan lezat dengan menu spesial pilihan terbaik.</p>
                        <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                            Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="400">
                    <div class="card card-service-list p-4">
                        <img src="{{ asset('frontend/images/menu/building-icon 2.svg') }}" alt="card-icon" width="60px">
                        <h5 class="text-start text-capitalize">Ketering Perusahaan</h5>
                        <p class="text-stat text-capitalize">Layanan katering eksklusif untuk perusahaan istimewa.</p>
                        <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                            Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="500">
                    <div class="card card-service-list p-4">
                        <img src="{{ asset('frontend/images/menu/goat-icon 1.svg') }}" alt="card-icon" width="60px">
                        <h5 class="text-start text-capitalize">Akikah</h5>
                        <p class="text-stat text-capitalize">Nikmati menu istimewa untuk acara aqiqah yang berkesan.</p>
                        <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                            Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="600">
                    <div class="card card-service-list p-4">
                        <img src="{{ asset('frontend/images/menu/pray-welcome-icon 1.svg') }}" alt="card-icon"
                            width="60px">
                        <h5 class="text-start text-capitalize">Katering Selamatan</h5>
                        <p class="text-stat text-capitalize">Nikmati menu istimewa untuk acara selamatan yang berkesan.</p>
                        <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                            Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="700">
                    <div class="card card-service-list p-4">
                        <img src="{{ asset('frontend/images/menu/tea-hot-icon 1.svg') }}" alt="card-icon" width="60px">
                        <h5 class="text-start text-capitalize">Coffee Break</h5>
                        <p class="text-stat text-capitalize">Nikmati berbagai pilihan menu istimewa untuk coffee break
                            Anda.</p>
                        <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                            Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="800">
                    <div class="card card-service-list p-4">
                        <img src="{{ asset('frontend/images/menu/tree-icon 1.svg') }}" alt="card-icon" width="60px">
                        <h5 class="text-start text-capitalize">Vegetarian</h5>
                        <p class="text-stat text-capitalize">Menu vegetarian, pilihan sehat dan lezat untuk Anda.</p>
                        <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                            Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
