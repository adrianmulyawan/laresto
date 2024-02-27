@extends('layouts.main-layout')
@section('title', 'Baginda Catering - Home')

@section('header')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banners as $banner)
                @if ($banner->id == 1)
                    <div class="carousel-item active">
                        <img src="{{ Storage::url($banner->banner_image) }}" class="d-block w-100 img-carousel"
                            alt="carouse-image">
                    </div>
                @endif
                <div class="carousel-item">
                    <img src="{{ Storage::url($banner->banner_image) }}" class="d-block w-100 img-carousel"
                        alt="carouse-image">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection

@section('content')
    <main>
        <section class="section-about">
            <div class="container">
                <div class="row justify-content-center align-items-center featurette">
                    <div class="col-sm-12 com-md-5 col-lg-5" data-aos="fade-right">
                        <img src="{{ asset('frontend/images/about_image.png') }}" alt="about-image"
                            class="img-fluid about-image">
                    </div>
                    <div class="col-sm-12 com-md-6 col-lg-6" data-aos="fade-left">
                        <h5 class="about-heading text-capitalize">
                            Tentang Kami
                        </h5>
                        <h3 class="about-subheading text-capitalize">
                            katering bukan hanya <br> tentang makanan. <br> Ini juga tentang pelayanan prima
                        </h3>
                        <p class="about-description my-3">
                            {!! $organization->description_info
                                ? $organization->description_info
                                : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' !!}
                        </p>
                        <div class="button-learn-more">
                            <a href="{{ route('about') }}" class="btn btn-learn-more btn-success px-4">Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-service">
            <div class="card card-service p-4">
                <div class="container container-service">
                    <div class="row justify-content-center">
                        <h5 class="text-center text-capitalize service-header" data-aos="fade-down">Layanan Kami</h5>
                        <h3 class="text-center text-capitalize service-subheader" data-aos="fade-up">
                            kami menyediakan layanan katering premium
                        </h3>
                        <p class="text-center text-capitalize service-description" data-aos="fade-up">
                            Katering premium kami hadir dengan hidangan lezat dan layanan istimewa untuk setiap acara.
                        </p>
                    </div>
                    <div class="row row-service-list justify-content-center">
                        @php
                            $duration = 100;
                        @endphp
                        @forelse ($services as $service)
                            <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up"
                                data-aos-duration="{{ $duration += 100 }}">
                                <div class="card card-service-list p-4">
                                    <img src="{{ Storage::url($service->icon) }}" alt="card-icon" width="60px">
                                    <h5 class="text-start text-capitalize">{{ $service->name }}</h5>
                                    <p class="text-stat text-capitalize">
                                        {{ $service->description }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <h5 class="text-center text-danger" data-aos="fade-up">
                                Anda Belum Menambahkan Layanan Apapun!
                            </h5>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <section class="section-provide">
            <div class="container">
                <div class="row justify-content-center">
                    <h5 class="text-center service-header text-capitalize" data-aos="fade-down">
                        Kategori Menu
                    </h5>
                    <h3 class="text-center service-subheader text-capitalize" data-aos="fade-up">
                        Kami menyediakan beberapa pilihan layanan Catering
                    </h3>
                    <p class="text-center service-description text-capitalize" data-aos="fade-down">
                        Temukan variasi menu istimewa kami, termasuk prasmanan, wedding catering, nasi box, snack box,
                        dan lain-lain.
                    </p>
                </div>
                <div class="row row-provide-list justify-content-center">
                    @if ($categories->count() < 1)
                        <h5 class="text-center text-danger" data-aos="fade-up">
                            Anda Belum Menambahkan Kategori Apapun!
                        </h5>
                    @else
                        @foreach ($categories as $category)
                            <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="100">
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
                        @endforeach
                        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="300">
                            <div class="card card-service-list p-4">
                                <img src="{{ asset('frontend/images/plus-round-icon-1.svg') }}" alt="card-icon"
                                    width="60px">
                                <h5 class="text-start text-capitalize">Lainnya</h5>
                                <p class="text-stat text-capitalize">Jelajahi menu istimewa dari pilihan layanan katering
                                    kami.</p>
                                <a href="{{ route('menu') }}" class="text-start my-1 text-decoration-none"
                                    style="color: #cd9c49">
                                    Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <section class="section-client">
            <div class="container">
                <div class="row justify-content-center">
                    <h5 class="about-heading text-capitalize text-center" data-aos="fade-down">Klien Kami</h5>
                    <h3 class="about-subheading text-capitalize text-center" data-aos="fade-up">Pernah melayani
                        berbagai instansi</h3>
                    <p class="about-description text-capitalize text-center" data-aos="fade-up">
                        Melayani berbagai instansi dengan layanan katering terbaik, menyajikan hidangan lezat dan
                        profesional tak tertandingi.
                    </p>
                </div>
                <div class="row row-provide-list d-flex justify-content-center align-items-center text-center">
                    @if ($clients->count() > 1)
                        @php
                            $duration = 0;
                        @endphp
                        @foreach ($clients as $client)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <img src="{{ Storage::url($client->image) }}" class="img-fluid" alt="logo"
                                    width="200px" data-aos="fade-up" data-aos-duration="{{ $duration += 100 }}">
                            </div>
                        @endforeach
                    @else
                        <h5 class="text-center text-danger" data-aos="fade-up">
                            Anda Belum Menambahkan Client Apapun!
                        </h5>
                    @endif
                </div>
            </div>
        </section>

        <section class="section-service">
            <div class="card card-service p-4">
                <div class="container container-service">
                    <div class="row justify-content-center">
                        <h5 class="text-center text-capitalize service-header" data-aos="fade-down">Testimoni</h5>
                        <h3 class="text-center text-capitalize service-subheader" data-aos="fade-up">
                            Apa yang mereka katakan tentang kami
                        </h3>
                        <p class="text-center text-capitalize service-description" data-aos="fade-up">
                            Pengalaman positif dari mereka yang telah menikmati layanan kami.
                        </p>
                    </div>
                    <div class="row row-service-list justify-content-center">
                        @if ($testimonials->count() > 1)
                            @php
                                $duration = 0;
                            @endphp
                            @foreach ($testimonials as $testi)
                                <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="100">
                                    <div class="card card-service-list p-4">
                                        <img src="{{ Storage::url($testi->image) }}"
                                            class="rounded-circle user-photo mx-auto d-block" alt="card-icon">
                                        <h5 class="text-start text-capitalize text-center">
                                            {{ $testi->name }}
                                        </h5>
                                        <p class="text-stat text-capitalize text-center">
                                            "<i>{{ $testi->testi }}</i>"
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h5 class="text-center text-danger" data-aos="fade-up">
                                Anda Belum Menambahkan Testimoni Apapun!
                            </h5>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="section-detail-question">
            <div class="container">
                <div class="row justify-content-center align-items-center featurette">
                    <div class="col-sm-12 com-md-5 col-lg-5" data-aos="fade-right">
                        <img src="{{ asset('frontend/images/pic-form.png') }}" alt="about-image"
                            class="img-fluid about-image" width="450px">
                    </div>
                    <div class="col-sm-12 com-md-6 col-lg-6" data-aos="fade-left">
                        <h5 class="about-heading text-capitalize">
                            Kontak Kami
                        </h5>
                        <h3 class="about-subheading text-capitalize my-4">
                            Tanyakan kami untuk informasi lainnya
                        </h3>
                        <form method="post" action="{{ route('store-question') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email Anda" value="{{ old('email') }}">
                                @error('email')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nama Anda" value="{{ old('name') }}">
                                @error('name')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Kontak WhatsApp</label>
                                <input type="text" class="form-control" id="contact" name="contact"
                                    placeholder="Kontak WhatsApp Anda" value="{{ old('contact') }}">
                                @error('contact')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Pertanyaan Anda</label>
                                <textarea class="form-control" id="message" name="message" placeholder="Pertanyaan Anda..." rows="3">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-grid gap-2 my-2">
                                <button type="submit" class="btn btn-send py-2">Kirim Pertanyaan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-provide">
            <div class="container">
                <div class="row justify-content-center">
                    <h5 class="text-center service-header text-capitalize" data-aos="fade-down">
                        frequently asked questions
                    </h5>
                    <h3 class="text-center service-subheader text-capitalize" data-aos="fade-up">
                        Apa saja pertanyaan yang sering diajukan?
                    </h3>
                    <p class="text-center service-description text-capitalize" data-aos="fade-down">
                        Kami telah merangkum pertanyaan umum yang sering diajukan oleh pelanggan kami. Temukan jawaban
                        untuk memahami layanan kami dengan lebih baik.
                    </p>
                </div>
                <div class="row row-provide-list justify-content-center" data-aos="fade-up">
                    <div class="col-sm-12 col-md-12 col-lg-12" data-aos="fade-left">
                        <div class="accordion" id="faqAccordion">
                            @if ($faqs->count() > 1)
                                @foreach ($faqs as $faq)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="faqHeading{{ $faq->id }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#faqCollapse{{ $faq->id }}" aria-expanded="false"
                                                aria-controls="faqCollapse{{ $faq->id }}">
                                                {{ $faq->title }}
                                            </button>
                                        </h2>
                                        <div id="faqCollapse{{ $faq->id }}" class="accordion-collapse collapse"
                                            aria-labelledby="faqHeading{{ $faq->id }}"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>{{ $faq->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h5 class="text-center text-danger" data-aos="fade-up">
                                    Anda Belum Menambahkan FAQ Apapun!
                                </h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
