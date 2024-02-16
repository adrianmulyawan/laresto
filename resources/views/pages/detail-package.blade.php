@extends('layouts.main-layout')
@section('title', 'Baginda Catering - Detail Paket')

@section('content')
    <section class="section-menu-list" id="sectionMenuList">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <h1 class="text-center package-detail-title" data-aos="fade-up">Detail Paket: Paket Silver</h1>

                    <div class="image-package my-3 text-center" data-aos="fade-up">
                        <img class="img-fluid" src="{{ asset('frontend/images/package-image/detail-package-1.jpeg') }}"
                            alt="gambar-paket">
                    </div>

                    <div class="package-description p-3 my-4" data-aos="fade-up">
                        <h3 class="text-start text-description-title text-uppercase">Deskripsi Paket</h3>
                        <p class="package-description mt-3">
                            Lezatnya cita rasa Indonesia terpancar dalam setiap hidangan Paket Silver kami. Dengan harga
                            yang terjangkau,
                            Anda akan menikmati aneka masakan khas Indonesia yang disajikan dengan penuh keahlian. Fitur
                            spesial dan
                            pengalaman kuliner yang tak terlupakan menanti Anda di Paket Silver kami.
                        </p>

                        <div class="menu-list mt-3">
                            <h3 class="text-start text-description-title mb-3">Menu Prasmanan:</h3>
                            <ul>
                                <li>Nasi Putih</li>
                                <li>Aneka Olahan Nasi Goreng</li>
                                <li>Aneka Olahan Sop (Pilih satu):
                                    <ul>
                                        <li>Sup Merah</li>
                                        <li>Sup Kimlo</li>
                                        <li>Sup Ayam Bakso</li>
                                    </ul>
                                </li>
                                <li>Aneka Olahan Ayam:
                                    <ul>
                                        <li>Krengsengan Ayam</li>
                                        <li>Ayam Saus Mentaga</li>
                                        <li>Ayam Bumbu Rujak/Bali</li>
                                    </ul>
                                </li>
                                <li>Aneka Olahan Seafood:
                                    <ul>
                                        <li>Kakap Asam Manis</li>
                                    </ul>
                                </li>
                                <li>Aneka Olahan Sayur/Pendamping:
                                    <ul>
                                        <li>Capcay Merah/Putih</li>
                                        <li>Mie Goreng Asyiva</li>
                                    </ul>
                                </li>
                                <li>Es Buah/Kopyor/Menado</li>
                                <li>Buah Potong</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>

                        <h3 class="mb-3">Harga per porsi:</h3>
                        <ul>
                            <li>50-150 porsi: Rp. 35.000,-</li>
                            <li>160 porsi ke atas: Rp. 33.000,-</li>
                        </ul>

                        <p class="package-details mt-3">
                            - Kelipatan pemesanan per 10 porsi <br>
                            - Maximal pemesanan H-7 dengan kepastian order <br>
                            - Termasuk peralatan saji, piring, sendok, meja, skirting, dekorasi lampu, dan bunga <br>
                            - Gratis pramusaji (pemesanan di atas 100 porsi dengan waktu pelayanan maksimal 4 jam)
                        </p>

                        <p class="package-update mt-3">
                            Update Harga: Paket prasmanan 50 orang mulai Rp. 28.000,-/porsi, Rp. 30.000,-/porsi hingga Rp.
                            40.000,-/porsi.
                            Minimal pemesanan 50 porsi/50 orang.
                        </p>
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
