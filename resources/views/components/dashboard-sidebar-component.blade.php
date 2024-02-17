<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">MENU</div>

                <!-- Tentang Katering -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#catering"
                    aria-expanded="false" aria-controls="catering">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-building"></i></div>
                    Catering
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="catering" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('catering-info') }}">Info Catering</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('advantage') }}">Kelebihan Kami</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('history') }}">Sejarah Perjalanan</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                    </nav>
                </div>
                <!-- Layanan -->
                <a class="nav-link" href="{{ route('service') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-star"></i></div>
                    Layanan Kami
                </a>
                <!-- Paket Katering -->
                <a class="nav-link" href="{{ route('package-catering') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-utensils"></i></div>
                    Paket Catering
                </a>
                <!-- Catering -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#news"
                    aria-expanded="false" aria-controls="news">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-burger"></i></div>
                    Catering
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="news" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('category-catering') }}">Kategori Catering</a>
                        <a class="nav-link" href="{{ route('menu-catering') }}">Menu Catering</a>
                    </nav>
                </div>
                <!-- Client -->
                <a class="nav-link" href="{{ route('client') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                    Klien
                </a>
                <!-- Testimonial -->
                <a class="nav-link" href="{{ route('testimonial') }}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-comment"></i></div>
                    Testimonial
                </a>
                <!-- Blog -->
                <a class="nav-link" href="{{ route('blog-dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-note-sticky"></i></div>
                    Blog
                </a>
                <!-- FAQs -->
                <a class="nav-link" href="{{ route('faq') }}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-circle-question"></i></div>
                    FAQs
                </a>
                <!-- Pertanyaan Pelanggan -->
                <a class="nav-link" href="{{ route('question') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-person-circle-question"></i></div>
                    Pertanyaan
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Super Admin
        </div>
    </nav>
</div>
