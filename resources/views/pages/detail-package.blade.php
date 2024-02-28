@extends('layouts.main-layout')
@section('title', 'Baginda Catering - Detail Paket')

@section('content')
    <section class="section-menu-list" id="sectionMenuList">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <h1 class="text-center package-detail-title" data-aos="fade-up">Detail Paket: {{ $package->name }}</h1>

                    <div class="image-package my-3 text-center" data-aos="fade-up">
                        <img class="img-fluid" src="{{ Storage::url($package->image_package) }}" alt="gambar-paket">
                    </div>

                    <div class="package-description p-3 my-4" data-aos="fade-up">
                        <h3 class="text-start text-description-title text-uppercase">Deskripsi Paket</h3>
                        <div class="package-description mt-3">
                            {!! $package->description !!}
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <a href="https://wa.link/1n5yof" target="_blank" class="btn btn-order py-3">
                            <i class="fa-brands fa-whatsapp fa-sm" style="color: #ffffff;"></i> Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
