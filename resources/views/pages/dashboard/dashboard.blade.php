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
                                        <h3>{{ $user }}</h3>
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
                                        <h3>{{ $super_admin }}</h3>
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
                                        <h3>{{ $admin }}</h3>
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
                                        <h3>{{ $package }}</h3>
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
                                        <h3>{{ $category }}</h3>
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
                                        <h3>{{ $menu }}</h3>
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
                    @forelse ($packages as $package)
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-1">
                                        {{-- <i class="fa-solid fa-box-archive"></i> --}}
                                        <img src="{{ Storage::url($package->image_header) }}" alt="img-menu"
                                            class="img-fluid" width="100px">
                                    </div>
                                    <div class="col-md-4 text-capitalize">
                                        {{ $package->name }}
                                    </div>
                                    <div class="col-md-6 text-capitalize">
                                        Lorem ipsum dolor sit amet consectetur.
                                    </div>
                                    <div class="col-md-1">
                                        <a href="{{ route('package-catering') }}" class="text-decoration-none">
                                            <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-12 align-middle">
                                        Belum Ada Data Apapun!
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h5 class="mb-3 recent-header">
                        User Terbaru
                    </h5>
                    @forelse ($users as $user)
                        <!-- Item I -->
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-1">
                                        <i class="fa-solid fa-user fa-lg"></i>
                                    </div>
                                    <div class="col-md-6 text-capitalize">
                                        {{ $user->name }}
                                    </div>
                                    <div class="col-md-5 text-capitalize">
                                        {{ $user->role }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <!-- Item I -->
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-12 align-middle">
                                        Belum Ada Data Apapun!
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Row Food and Category -->
            <div class="row recent-news my-4">
                <div class="col-6">
                    <h5 class="mb-3 recent-header">
                        Jenis Hidangan Terbaru
                    </h5>

                    @forelse ($categories as $category)
                        <!-- Item I -->
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        {{-- <i class="fa-solid fa-utensils"></i> --}}
                                        <img src="{{ Storage::url($category->icon) }}" alt="img-menu" class="img-fluid"
                                            width="20px">
                                    </div>
                                    <div class="col-md-4 text-capitalize">
                                        {{ $category->name }}
                                    </div>
                                    <div class="col-md-4">
                                        {{ $category->user->name }}
                                    </div>
                                    <div class="col-md-2 d-none d-md-block">
                                        <a href="{{ route('category-catering') }}" class="text-decoration-none">
                                            <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-12 align-middle">
                                        Belum Ada Data Apapun!
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
                <div class="col-6">
                    <h5 class="mb-3 recent-header">
                        Menu Makanan Terbaru
                    </h5>
                    @forelse ($menus as $menu)
                        <!-- Item I -->
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        {{-- <i class="fa-solid fa-pepper-hot"></i> --}}
                                        <img src="{{ Storage::url($menu->image) }}" alt="img-menu" class="img-fluid"
                                            width="100px">
                                    </div>
                                    <div class="col-md-4 text-capitalize">
                                        {{ $menu->name }}
                                    </div>
                                    <div class="col-md-4">
                                        {{ $menu->category->name }}
                                    </div>
                                    <div class="col-md-2 d-none d-md-block">
                                        <a href="{{ route('menu-catering') }}" class="text-decoration-none">
                                            <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <!-- Item I -->
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-12 align-middle">
                                        Belum Ada Data Apapun!
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Row Question -->
            <div class="row recent-publications my-4">
                <div class="col-12">
                    <h5 class="mb-3 recent-header">
                        Pertanyaan Customers Terbaru
                    </h5>
                    @forelse ($questions as $question)
                        <!-- Item I -->
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-1">
                                        <i class="fa-regular fa-circle-question"></i>
                                    </div>
                                    <div class="col-md-2">
                                        {{ $question->created_at ? $question->created_at->format('d M Y') : 'Waktu Tidak Diketahui' }}
                                    </div>
                                    <div class="col-md-2 text-capitalize">
                                        {{ $question->name }}
                                    </div>
                                    <div class="col-md-4">
                                        {{ $question->email }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $question->contact }}
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <a href="{{ route('show-question', $question->id) }}"
                                            class="text-decoration-none">
                                            <i class="fa-solid fa-arrow-right fa-sm" style="color: #000;"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <!-- Item I -->
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-12 align-middle">
                                        Belum Ada Data Apapun!
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </main>
@endsection
