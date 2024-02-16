@extends('layouts.dashboard-layout')
@section('title', 'Baginda Catering - Dashboard')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-users fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>10</h3>
                                        <span>Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-user-tie fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>2</h3>
                                        <span>Super Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-user fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>10</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Card II -->
            <div class="row">
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-box-archive fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>16</h3>
                                        <span>Paket Catering</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-utensils fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>8</h3>
                                        <span>Jenis Hidangan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-bowl-food fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>150</h3>
                                        <span>Menu Makanan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Recent Paket Katering and User -->
            <div class="row recent-project-and-user my-4">
                <div class="col-sm-8 col-md-6 col-lg-8">
                    <h5 class="mb-3 recent-header">
                        Paket Katering Terbaru
                    </h5>
                    <!-- Item I -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-solid fa-box-archive"></i>
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Paket Prasmanan Silver
                                </div>
                                <div class="col-md-6 text-capitalize">
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="col-md-1">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item II-->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-solid fa-box-archive"></i>
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Paket Intimate Wedding...
                                </div>
                                <div class="col-md-6 text-capitalize">
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="col-md-1">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item III -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-solid fa-box-archive"></i>
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Paket Lamaran Gold
                                </div>
                                <div class="col-md-6 text-capitalize">
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="col-md-1">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h5 class="mb-3 recent-header">
                        User Terbaru
                    </h5>
                    <!-- Item I -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-solid fa-user fa-lg"></i>
                                </div>
                                <div class="col-md-6 text-capitalize">
                                    Adrian Mulyawan
                                </div>
                                <div class="col-md-5 text-capitalize">
                                    Super Admin
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item II -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-solid fa-user fa-lg"></i>
                                </div>
                                <div class="col-md-6 text-capitalize">
                                    Idzar Raffi
                                </div>
                                <div class="col-md-5 text-capitalize">
                                    Admin
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item III -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-solid fa-user fa-lg"></i>
                                </div>
                                <div class="col-md-6 text-capitalize">
                                    Jodi Akbar
                                </div>
                                <div class="col-md-5 text-capitalize">
                                    Admin
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Food and Category -->
            <div class="row recent-news my-4">
                <div class="col-6">
                    <h5 class="mb-3 recent-header">
                        Jenis Hidangan Terbaru
                    </h5>
                    <!-- Item I -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Snack Box
                                </div>
                                <div class="col-md-4">
                                    David Guetta
                                </div>
                                <div class="col-md-2 d-none d-md-block">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item II -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Katering Harian
                                </div>
                                <div class="col-md-4">
                                    David Guetta
                                </div>
                                <div class="col-md-2 d-none d-md-block">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item III -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Katering Perusahaan
                                </div>
                                <div class="col-md-4">
                                    David Guetta
                                </div>
                                <div class="col-md-2 d-none d-md-block">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h5 class="mb-3 recent-header">
                        Menu Makanan Terbaru
                    </h5>
                    <!-- Item I -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-pepper-hot"></i>
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Nasi Box Ayam
                                </div>
                                <div class="col-md-4">
                                    Katering Harian
                                </div>
                                <div class="col-md-2 d-none d-md-block">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item II -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-pepper-hot"></i>
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Nasi Box Ayam
                                </div>
                                <div class="col-md-4">
                                    Katering Harian
                                </div>
                                <div class="col-md-2 d-none d-md-block">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item III -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-pepper-hot"></i>
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Nasi Box Ayam
                                </div>
                                <div class="col-md-4">
                                    Katering Harian
                                </div>
                                <div class="col-md-2 d-none d-md-block">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Question -->
            <div class="row recent-publications my-4">
                <div class="col-12">
                    <h5 class="mb-3 recent-header">
                        Pertanyaan Customers Terbaru
                    </h5>
                    <!-- Item I -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-regular fa-circle-question"></i>
                                </div>
                                <div class="col-md-2">
                                    08 Januari 2024
                                </div>
                                <div class="col-md-2 text-capitalize">
                                    Budi Gunawan
                                </div>
                                <div class="col-md-4">
                                    budi.gunawan@gmail.com
                                </div>
                                <div class="col-md-2">
                                    082154590559
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item II -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-regular fa-circle-question"></i>
                                </div>
                                <div class="col-md-2">
                                    08 Januari 2024
                                </div>
                                <div class="col-md-2 text-capitalize">
                                    Budi Gunawan
                                </div>
                                <div class="col-md-4">
                                    budi.gunawan@gmail.com
                                </div>
                                <div class="col-md-2">
                                    082154590559
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item III -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-regular fa-circle-question"></i>
                                </div>
                                <div class="col-md-2">
                                    08 Januari 2024
                                </div>
                                <div class="col-md-2 text-capitalize">
                                    Budi Gunawan
                                </div>
                                <div class="col-md-4">
                                    budi.gunawan@gmail.com
                                </div>
                                <div class="col-md-2">
                                    082154590559
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item IV -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-regular fa-circle-question"></i>
                                </div>
                                <div class="col-md-2">
                                    08 Januari 2024
                                </div>
                                <div class="col-md-2 text-capitalize">
                                    Budi Gunawan
                                </div>
                                <div class="col-md-4">
                                    budi.gunawan@gmail.com
                                </div>
                                <div class="col-md-2">
                                    082154590559
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item V -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-regular fa-circle-question"></i>
                                </div>
                                <div class="col-md-2">
                                    08 Januari 2024
                                </div>
                                <div class="col-md-2 text-capitalize">
                                    Budi Gunawan
                                </div>
                                <div class="col-md-4">
                                    budi.gunawan@gmail.com
                                </div>
                                <div class="col-md-2">
                                    082154590559
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <a href="/" class="text-decoration-none">
                                        <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
