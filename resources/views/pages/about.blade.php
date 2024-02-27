@extends('layouts.main-layout')
@section('title', 'Baginda Catering - Tentang Kami')

@section('header')
    <!-- Banner -->
    <div class="banner-about">
        <h1 class="text-center text-capitalize">Tentang Kami</h1>
        <p class="text-center text-capitalize my-2" style="line-height: 1.8em;">
            Baginda Catering menyajikan pengalaman kuliner istimewa, <br> pilihan utama untuk acara spesial Anda.
        </p>
    </div>
@endsection

@section('content')
    <section class="section-about-page" id="sectionAboutPage">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 com-md-5 col-lg-5" data-aos="fade-right">
                    <img src="{{ asset('frontend/images/about/pic.png') }}" alt="about-image" class="img-fluid about-image">
                </div>
                <div class="col-sm-12 com-md-7 col-lg-7" data-aos="fade-left">
                    <h5 class="about-heading text-capitalize">
                        Sekilas Tentang Kami
                    </h5>
                    <h3 class="about-subheading text-capitalize">
                        Ketika Rasa Bertemu <br> Dengan Pelayanan Terbaik
                    </h3>
                    <p class="about-description my-3" style="line-height: 1.8em;">
                        {!! $organization->history_info
                            ? $organization->history_info
                            : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-why-me">
        <div class="card card-service py-5">
            <div class="container container-service">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <h3 class="text-capitalize service-header" data-aos="fade-down">Kenapa harus kami</h3>
                        <p class="text-capitalize service-description" data-aos="fade-up">
                            Pilih kami untuk hidangan berkualitas tinggi, layanan terbaik, dan momen tak terlupakan.
                            Keahlian koki kami dan penekanan pada keberlanjutan membuat Baginda Catering menjadi pilihan
                            utama Anda.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="row row-choose justify-content-center align-items-center">
                            @if ($advantages->count() > 1)
                                @php
                                    $duration = 0;
                                @endphp
                                @foreach ($advantages as $advantage)
                                    <div class="col-sm-6 col-md-3 col-lg-3" data-aos="fade-up"
                                        data-aos-duration="{{ $duration += 100 }}">
                                        <img src="{{ Storage::url($advantage->image) }}" alt="{{ $advantage->name }}"
                                            class="img-fluid">
                                    </div>
                                @endforeach
                            @else
                                <h5 class="text-center text-danger" data-aos="fade-up">
                                    Anda Belum Menambahkan Kelebihan Apapun!
                                </h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-about-page" id="sectionAboutPage">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-12 com-md-5 col-lg-5" data-aos="fade-right">
                    <h5 class="about-heading text-capitalize">
                        Sejarah Singkat
                    </h5>
                    <h3 class="about-subheading text-capitalize">
                        Membangun Kejayaan dalam Setiap Suapan
                    </h3>
                    <p class="about-description my-3" style="line-height: 1.8em;">
                        Baginda Catering bermula dari hasrat untuk menghadirkan pengalaman kuliner istimewa. Sejak berdiri,
                        kami terus tumbuh dan menyajikan kelezatan tak terlupakan dengan keahlian koki dan pelayanan
                        terbaik.
                    </p>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7" data-aos="fade-left">
                    <div class="accordion" id="accordionExample">
                        @if ($histories->count() > 1)
                            @foreach ($histories as $history)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="historyHeading{{ $history->id }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#historyCollapse{{ $history->id }}" aria-expanded="false"
                                            aria-controls="historyCollapse{{ $history->id }}">
                                            {{ $history->title }}
                                        </button>
                                    </h2>
                                    <div id="historyCollapse{{ $history->id }}" class="accordion-collapse collapse"
                                        aria-labelledby="historyHeading{{ $history->id }}"
                                        data-bs-parent="#historyAccordion">
                                        <div class="accordion-body">
                                            <p>{{ $history->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h5 class="text-center text-danger" data-aos="fade-up">
                                Anda Belum Menambahkan Sejarah Apapun!
                            </h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-service">
        <div class="container">
            <div class="row justify-content-center">
                <h5 class="text-center service-header text-capitalize" data-aos="fade-down">
                    Gallery
                </h5>
                <h3 class="text-center service-subheader text-capitalize" data-aos="fade-up">
                    Momen indah dan hidangan lezat dalam galeri catering kami.
                </h3>
            </div>
        </div>
        <div class="container-overflow">
            <div class="row row-image-galleries my-5 justify-content-center align-items-stretch">
                @php
                    $duration = 0;
                @endphp
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4 col-md-12 col-sm-12 p-0">
                        <img src="{{ Storage::url($gallery->image) }}" class="w-100 shadow-1-strong img-fluid"
                            alt="image-gallery-{{ $gallery->id }}" data-aos="fade-up"
                            data-aos-duration="{{ $duration += 100 }}" />
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
