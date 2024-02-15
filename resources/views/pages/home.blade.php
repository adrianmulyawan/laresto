@extends('layouts.main-layout')
@section('title', 'Baginda Catering - Home')

@section('header')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('frontend/images/1.png') }}" class="d-block w-100 img-carousel" alt="carouse-image">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/images/2.png') }}" class="d-block w-100 img-carousel" alt="carouse-image">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/images/3.png') }}" class="d-block w-100 img-carousel" alt="carouse-image">
            </div>
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
                            Katering kami mempersembahkan lebih dari sekadar hidangan lezat. Kami menghadirkan
                            pengalaman kuliner yang unik, memadukan keahlian dalam menciptakan hidangan beragam dengan
                            kehangatan pelayanan prima. Tidak hanya sekadar menyajikan makanan yang lezat, tetapi juga
                            menciptakan momen berharga di setiap acara. Tim kami yang berdedikasi siap memastikan setiap
                            detail terpenuhi, menjadikan acara Anda tak terlupakan. Dengan sentuhan kreatif dan
                            profesionalisme, kami menyajikan lebih dari sekadar katering; kami menciptakan pengalaman
                            yang menggoda selera dan memanjakan setiap tamu.
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
                        <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="100">
                            <div class="card card-service-list p-4">
                                <img src="{{ asset('frontend/images/cake-icon-1.svg') }}" alt="card-icon" width="60px">
                                <h5 class="text-start text-capitalize">Pesta Ulang Tahun</h5>
                                <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="200">
                            <div class="card card-service-list p-4">
                                <img src="{{ asset('frontend/images/building-icon-1.svg') }}" alt="card-icon"
                                    width="60px">
                                <h5 class="text-start text-capitalize">Acara Perusahaan</h5>
                                <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="300">
                            <div class="card card-service-list p-4">
                                <img src="{{ asset('frontend/images/meeting-icon-1.svg') }}" alt="card-icon" width="60px">
                                <h5 class="text-start text-capitalize">Rapat Kantor</h5>
                                <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="400">
                            <div class="card card-service-list p-4">
                                <img src="{{ asset('frontend/images/glass-drinks-icon-1') }}.svg" alt="card-icon"
                                    width="60px">
                                <h5 class="text-start text-capitalize">Arisan</h5>
                                <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="500">
                            <div class="card card-service-list p-4">
                                <img src="{{ asset('frontend/images/wedding-bride-icon-1') }}.svg" alt="card-icon"
                                    width="60px">
                                <h5 class="text-start text-capitalize">Pernikahan</h5>
                                <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="600">
                            <div class="card card-service-list p-4">
                                <img src="{{ asset('frontend/images/wedding-rings-icon-1') }}.svg" alt="card-icon"
                                    width="60px">
                                <h5 class="text-start text-capitalize">Lamaran</h5>
                                <p class="text-stat text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Dicta culpa nam placeat maiores, corrupti reprehenderit?</p>
                            </div>
                        </div>
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
                    <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="100">
                        <div class="card card-service-list p-4">
                            <img src="{{ asset('frontend/images/home-icon-1.svg') }}" alt="card-icon" width="60px">
                            <h5 class="text-start text-capitalize">Katering Harian</h5>
                            <p class="text-stat text-capitalize">Katering harian dengan menu spesial setiap hari.</p>
                            <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                                Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="200">
                        <div class="card card-service-list p-4">
                            <img src="{{ asset('frontend/images/dish-cap-icon-1.svg') }}" alt="card-icon"
                                width="60px">
                            <h5 class="text-start text-capitalize">Nasi Box</h5>
                            <p class="text-stat text-capitalize">Nasi box lezat dan bergizi, pilihan praktis Anda.</p>
                            <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                                Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="300">
                        <div class="card card-service-list p-4">
                            <img src="{{ asset('frontend/images/food-cart-icon-1.svg') }}" alt="card-icon"
                                width="60px">
                            <h5 class="text-start text-capitalize">Prasmanan</h5>
                            <p class="text-stat text-capitalize">Prasmanan lezat dengan menu spesial pilihan terbaik.
                            </p>
                            <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                                Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="300">
                        <div class="card card-service-list p-4">
                            <img src="{{ asset('frontend/images/plus-round-icon-1.svg') }}" alt="card-icon"
                                width="60px">
                            <h5 class="text-start text-capitalize">Lainnya</h5>
                            <p class="text-stat text-capitalize">Jelajahi menu istimewa dari pilihan layanan katering
                                kami.</p>
                            <a href="/" class="text-start my-1 text-decoration-none" style="color: #cd9c49">
                                Lihat Menu <i class="fa-solid fa-angles-right" style="color: #cd9c49;"></i>
                            </a>
                        </div>
                    </div>
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
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <img src="{{ asset('frontend/images/brand/Property 1=Kemhan.svg') }}" class="img-fluid"
                            alt="logo" width="200px" data-aos="fade-up" data-aos-duration="100">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <img src="{{ asset('frontend/images/brand/Property 1=Kimia Farma.svg') }}" class="img-fluid"
                            alt="logo" width="200px" data-aos="fade-up" data-aos-duration="200">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <img src="{{ asset('frontend/images/brand/Property 1=Mandiri.svg') }}" class="img-fluid"
                            alt="logo" width="200px" data-aos="fade-up" data-aos-duration="300">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <img src="{{ asset('frontend/images/brand/Property 1=Pertamina.svg') }}" class="img-fluid"
                            alt="logo" width="200px" data-aos="fade-up" data-aos-duration="400">
                    </div>
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
                        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="100">
                            <div class="card card-service-list p-4">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp"
                                    class="rounded-circle user-photo mx-auto d-block" alt="card-icon">
                                <h5 class="text-start text-capitalize text-center">Putri Indah</h5>
                                <p class="text-stat text-capitalize text-center">
                                    "<i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quod, quas
                                        architecto tenetur similique enim!</i>"
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="200">
                            <div class="card card-service-list p-4">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp"
                                    class="rounded-circle user-photo mx-auto d-block" alt="card-icon">
                                <h5 class="text-start text-capitalize text-center">Putri Indah</h5>
                                <p class="text-stat text-capitalize text-center">
                                    "<i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quod, quas
                                        architecto tenetur similique enim!</i>"
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="300">
                            <div class="card card-service-list p-4">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp"
                                    class="rounded-circle user-photo mx-auto d-block" alt="card-icon">
                                <h5 class="text-start text-capitalize text-center">Putri Indah</h5>
                                <p class="text-stat text-capitalize text-center">
                                    "<i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quod, quas
                                        architecto tenetur similique enim!</i>"
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="400">
                            <div class="card card-service-list p-4">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp"
                                    class="rounded-circle user-photo mx-auto d-block" alt="card-icon">
                                <h5 class="text-start text-capitalize text-center">Putri Indah</h5>
                                <p class="text-stat text-capitalize text-center">
                                    "<i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quod, quas
                                        architecto tenetur similique enim!</i>"
                                </p>
                            </div>
                        </div>
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
                        <form method="post" action="/">
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email Anda">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nama Anda">
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Kontak WhatsApp</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number"
                                    placeholder="Kontak WhatsApp Anda">
                            </div>
                            <div class="mb-3">
                                <label for="question" class="form-label">Pertanyaan Anda</label>
                                <textarea class="form-control" id="question" name="question" placeholder="Pertanyaan Anda..." rows="3"></textarea>
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
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapseOne" aria-expanded="true"
                                        aria-controls="faqCollapseOne">
                                        Apa saja menu katering yang tersedia?
                                    </button>
                                </h2>
                                <div id="faqCollapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Kami menyediakan beragam menu katering, mulai dari hidangan tradisional
                                            hingga makanan internasional. Lihat daftar lengkap menu kami di halaman
                                            "Menu" untuk pilihan yang memuaskan selera Anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapseTwo" aria-expanded="false"
                                        aria-controls="faqCollapseTwo">
                                        Bagaimana cara memesan layanan katering?
                                    </button>
                                </h2>
                                <div id="faqCollapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Pemesanan dapat dilakukan melalui situs web kami atau dengan menghubungi tim
                                            layanan pelanggan. Detail langkah-langkah pemesanan dan informasi lebih
                                            lanjut tersedia di halaman "Cara Pemesanan."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapseThree" aria-expanded="false"
                                        aria-controls="faqCollapseThree">
                                        Apakah tersedia layanan katering untuk acara khusus?
                                    </button>
                                </h2>
                                <div id="faqCollapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Tentu! Kami menyediakan layanan katering untuk berbagai acara khusus, seperti
                                            pernikahan, ulang tahun, seminar, dan lainnya. Hubungi kami untuk membahas
                                            kebutuhan khusus Anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapseFour" aria-expanded="false"
                                        aria-controls="faqCollapseFour">
                                        Bagaimana dengan opsi diet khusus?
                                    </button>
                                </h2>
                                <div id="faqCollapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Kami dapat menyediakan menu khusus untuk diet vegetarian, vegan, bebas
                                            gluten, dan lainnya. Sampaikan kebutuhan diet Anda kepada kami saat
                                            melakukan pemesanan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapseFive" aria-expanded="false"
                                        aria-controls="faqCollapseFive">
                                        Bagaimana sistem pembayaran dan kebijakan pembatalan?
                                    </button>
                                </h2>
                                <div id="faqCollapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="faqHeadingFive" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Informasi lengkap mengenai sistem pembayaran dan kebijakan pembatalan dapat
                                            ditemukan di halaman "Syarat dan Ketentuan." Kami menerima pembayaran
                                            melalui berbagai metode untuk kenyamanan Anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapseSix" aria-expanded="false"
                                        aria-controls="faqCollapseSix">
                                        Apakah tersedia layanan pengiriman?
                                    </button>
                                </h2>
                                <div id="faqCollapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="faqHeadingSix" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Kami menyediakan layanan pengiriman untuk pesanan katering. Informasi lebih
                                            lanjut, termasuk area pengiriman dan biaya tambahan, dapat ditemukan di
                                            halaman "Layanan Pengiriman."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapseSeven" aria-expanded="false"
                                        aria-controls="faqCollapseSeven">
                                        Apakah menerima pesanan last-minute?
                                    </button>
                                </h2>
                                <div id="faqCollapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="faqHeadingSeven" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Kami berusaha untuk memenuhi pesanan last-minute, tetapi ketersediaan dapat
                                            terbatas. Hubungi tim layanan pelanggan kami segera untuk informasi lebih
                                            lanjut dan konfirmasi ketersediaan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapseEight" aria-expanded="false"
                                        aria-controls="faqCollapseEight">
                                        Bagaimana saya dapat mengajukan pertanyaan atau memberikan umpan balik?
                                    </button>
                                </h2>
                                <div id="faqCollapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="faqHeadingEight" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Kami senang menerima pertanyaan dan umpan balik dari pelanggan kami. Kunjungi
                                            halaman "Hubungi Kami" untuk informasi cara menghubungi kami atau mengisi
                                            formulir pertanyaan secara online.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
