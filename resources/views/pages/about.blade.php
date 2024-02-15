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
                        Selamat datang di Baginda Catering, tempat di mana kelezatan dan keunggulan pelayanan menyatu dalam
                        setiap hidangan. Sebagai penyedia layanan katering pilihan, kami berkomitmen untuk menghadirkan
                        pengalaman kuliner istimewa dengan sentuhan khusus.
                        <br>
                        Hidangan kami, hasil dari keahlian koki berbakat, tidak hanya memikat lidah tetapi juga menggugah
                        selera visual. Dengan fokus pada setiap detail, tim kami berdedikasi untuk memberikan pelayanan
                        terbaik dan membuat setiap acara Anda berkesan.
                        <br>
                        Baginda Catering bukan hanya sekadar penyedia makanan, melainkan mitra dalam merencanakan momen
                        berharga Anda. Kami menyediakan menu yang disesuaikan dengan keinginan Anda, menjadikan setiap acara
                        unik dan tak terlupakan.
                        <br>
                        Keberlanjutan adalah filosofi kami. Kami mengutamakan bahan-bahan lokal dan berkelanjutan,
                        menggabungkan kelezatan dengan tanggung jawab lingkungan. Dengan memilih Baginda Catering, Anda
                        tidak hanya menikmati hidangan berkualitas, tetapi juga berkontribusi pada keberlanjutan dunia.
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
                            <div class="col-sm-6 col-md-3 col-lg-3" data-aos="fade-up" data-aos-duration="100">
                                <img src="{{ asset('frontend/images/about/choose-1.png') }}" alt="card-icon"
                                    class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3" data-aos="fade-up" data-aos-duration="200">
                                <img src="{{ asset('frontend/images/about/choose-2.png') }}" alt="card-icon"
                                    class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3" data-aos="fade-up" data-aos-duration="300">
                                <img src="{{ asset('frontend/images/about/choose-3.png') }}" alt="card-icon"
                                    class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3" data-aos="fade-up" data-aos-duration="400">
                                <img src="{{ asset('frontend/images/about/choose-4.png') }}" alt="card-icon"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row row-service-list justify-content-center">
                                      <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="100">
                                        <div class="card card-service-list p-4">
                                          <img src="./frontend/images/cake-icon-1.svg" alt="card-icon" width="60px">
                                          <h5 class="text-start text-capitalize">Pesta Ulang Tahun</h5>
                                          <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                                        </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="200">
                                        <div class="card card-service-list p-4">
                                          <img src="./frontend/images/building-icon-1.svg" alt="card-icon" width="60px">
                                          <h5 class="text-start text-capitalize">Acara Perusahaan</h5>
                                          <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                                        </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="300">
                                        <div class="card card-service-list p-4">
                                          <img src="./frontend/images/meeting-icon-1.svg" alt="card-icon" width="60px">
                                          <h5 class="text-start text-capitalize">Rapat Kantor</h5>
                                          <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                                        </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="400">
                                        <div class="card card-service-list p-4">
                                          <img src="./frontend/images/glass-drinks-icon-1.svg" alt="card-icon" width="60px">
                                          <h5 class="text-start text-capitalize">Arisan</h5>
                                          <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                                        </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="500">
                                        <div class="card card-service-list p-4">
                                          <img src="./frontend/images/wedding-bride-icon-1.svg" alt="card-icon" width="60px">
                                          <h5 class="text-start text-capitalize">Pernikahan</h5>
                                          <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                                        </div>
                                      </div>
                                      <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="600">
                                        <div class="card card-service-list p-4">
                                          <img src="./frontend/images/wedding-rings-icon-1.svg" alt="card-icon" width="60px">
                                          <h5 class="text-start text-capitalize">Lamaran</h5>
                                          <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                                        </div>
                                      </div>
                                    </div> -->
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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    2009 - 2011: Awal Perjalanan
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Sejarah dimulai pada tahun 2009 ketika Baginda Catering berdiri. Dengan dedikasi dan
                                        semangat, kami memperkenalkan layanan katering istimewa yang menggugah selera dan
                                        memberikan pengalaman kuliner tak terlupakan kepada pelanggan kami.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2011 - 2013: Inovasi dan Pertumbuhan
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Pada periode ini, Baginda Catering terus berinovasi dalam menyajikan hidangan
                                        berkualitas tinggi dan meraih pertumbuhan yang signifikan. Kami memperluas jangkauan
                                        menu dan meningkatkan pelayanan untuk memenuhi kebutuhan pelanggan dengan lebih
                                        baik.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    2013 - Sekarang: Keterampilan dan Kepuasan Pelanggan
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Dengan fokus pada keterampilan koki dan kepuasan pelanggan, Baginda Catering terus
                                        menetapkan standar tinggi dalam dunia katering. Kami berkomitmen untuk terus
                                        menyajikan hidangan lezat dan menciptakan momen istimewa dalam setiap acara
                                        pelanggan kami.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    201X - 201Y: Tema Sejarah
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Deskripsi sejarah untuk rentang waktu tertentu, menyoroti tema khusus atau pencapaian
                                        penting dalam perjalanan Baginda Catering.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    201Y - Sekarang: Masa Kini dan Masa Depan
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Melihat ke masa kini dan masa depan, Baginda Catering terus berinovasi, memenuhi
                                        harapan pelanggan, dan menjadi mitra utama dalam setiap perayaan dan acara khusus.
                                    </p>
                                </div>
                            </div>
                        </div>
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
                <div class="col-lg-4 col-md-12 col-sm-12 p-0">
                    <img src="{{ asset('frontend/images/galleries/chasse-sauvage-zlUGL4hBHcw-unsplash.jpg') }}"
                        class="w-100 shadow-1-strong img-fluid" alt="Boat on Calm Water" data-aos="fade-right"
                        data-aos-duration="100" />
                    <img src="{{ asset('frontend/images/galleries/amelia-protiva--5FaEieuX9g-unsplash.jpg') }}"
                        class="w-100 shadow-1-strong img-fluid" alt="Wintry Mountain Landscape" data-aos="fade-right"
                        data-aos-duration="400" />
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 p-0">
                    <img src="{{ asset('frontend/images/galleries/chasse-sauvage-cKupNvXrU4I-unsplash.jpg') }}"
                        class="w-100 shadow-1-strong img-fluid" alt="Mountains in the Clouds" data-aos="fade-down"
                        data-aos-duration="200" />
                    <img src="{{ asset('frontend/images/galleries/zeno-aras-lOW7w5-DMHk-unsplash.jpg') }}"
                        class="w-100 shadow-1-strong img-fluid" alt="Boat on Calm Water" data-aos="fade-up"
                        data-aos-duration="500" />
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 p-0">
                    <img src="{{ asset('frontend/images/galleries/kelly-jean-TclQHtlkzRc-unsplash.jpg') }}"
                        class="w-100 shadow-1-strong img-fluid" alt="Waves at Sea" data-aos="fade-left"
                        data-aos-duration="300" />

                    <img src="{{ asset('frontend/images/galleries/tai-s-captures-O3YpwNTKXkU-unsplash.jpg') }}"
                        class="w-100 shadow-1-strong img-fluid" alt="Yosemite National Park" data-aos="fade-left"
                        data-aos-duration="600" />
                </div>
            </div>
        </div>
    </section>
@endsection
