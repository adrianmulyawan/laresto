<!-- Contact -->
<div class="container-fluid container-contact">
    <div class="contact-section d-none d-md-flex justify-content-between align-items-center flex-row p-3">
        <div class="contact-phone">
            <i class="fa-solid fa-phone fa-lg me-2" style="color: #ffffff;"></i> +6282154590559
        </div>
        <div class="contact-socmed">
            <a href="/" class="text-decoration-none ms-3">
                <i class="fa-brands fa-instagram fa-lg" style="color: #fff;"></i>
            </a>
            <a href="/" class="text-decoration-none ms-3">
                <i class="fa-brands fa-facebook fa-lg" style="color: #fff;"></i>
            </a>
            <a href="/" class="text-decoration-none ms-3">
                <i class="fa-brands fa-twitter fa-lg" style="color: #fff;"></i>
            </a>
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white text-dark border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('frontend/images/logo-web.png') }}" alt="Bootstrap" width="120">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="package.html">Paket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-download px-4 py-2 ms-3" href="/">Download Brosur</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
