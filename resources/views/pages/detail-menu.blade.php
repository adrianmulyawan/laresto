@extends('layouts.main-layout')
@section('title', 'Baginda Catering - Detail Menu')

@section('header')
    <div class="banner-detail-menu">
        <h1 class="text-center text-capitalize">Daftar Menu Snack Box</h1>
        <p class="text-center text-capitalize">
            Pilihlah dari berbagai pilihan Snack Box lezat dan bergizi untuk setiap acara Anda.
        </p>
    </div>
@endsection

@section('content')
    <section class="section-menu-list">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                @forelse ($foods as $menu)
                    <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="100">
                        <div class="card card-menu-list">
                            <img src="{{ Storage::url($menu->image) }}" class="card-img-top" alt="detail-menu-image"
                                width="350px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $menu->name }}</h5>
                                <div class="dropdown py-2">
                                    <button class="btn btn-success dropdown-toggle" type="button"
                                        id="dropdownMenuButton-{{ $menu->id }}" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Lihat Detail Paket
                                    </button>
                                    <ul class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton-{{ $menu->id }}">
                                        <p class="text-price my-2">Harga : Rp
                                            {{ number_format($menu->price, 2, ',', '.') }} / Kotak </p>
                                        <p class="text-price my-2">Minimal Order : {{ $menu->minimal_order }} Kotak </p>
                                        <li class="my-2">
                                            {!! $menu->description !!}
                                        </li>
                                        <li>
                                            <div class="d-grid gap-2"><a href="https://wa.link/1n5yof" target="_blank"
                                                    class="btn btn-order"><i class="fa-brands fa-whatsapp fa-sm"
                                                        style="color: #ffffff;"></i> Pesan Sekarang</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h5 class="text-center text-danger" data-aos="fade-up">
                        Anda Belum Menambahkan Menu Apapun!
                    </h5>
                @endforelse
                {{-- @foreach ($items as $item)
                    @forelse ($item->menus as $menu)
                        <div class="col-sm-12 col-md-6 col-lg-3 my-2" data-aos="fade-up" data-aos-duration="100">
                            <div class="card card-menu-list">
                                <img src="{{ Storage::url($menu->image) }}" class="card-img-top" alt="detail-menu-image"
                                    width="350px">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $menu->name }}</h5>
                                    <div class="dropdown py-2">
                                        <button class="btn btn-success dropdown-toggle" type="button"
                                            id="dropdownMenuButton-{{ $menu->id }}" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Lihat Detail Paket
                                        </button>
                                        <ul class="dropdown-menu p-3"
                                            aria-labelledby="dropdownMenuButton-{{ $menu->id }}">
                                            <p class="text-price my-2">Harga : Rp
                                                {{ number_format($menu->price, 2, ',', '.') }} / Kotak </p>
                                            <p class="text-price my-2">Minimal Order : {{ $menu->minimal_order }} Kotak </p>
                                            <li class="my-2">
                                                {!! $menu->description !!}
                                            </li>
                                            <li>
                                                <div class="d-grid gap-2"><a href="https://wa.link/1n5yof" target="_blank"
                                                        class="btn btn-order"><i class="fa-brands fa-whatsapp fa-sm"
                                                            style="color: #ffffff;"></i> Pesan Sekarang</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h5 class="text-center text-danger" data-aos="fade-up">
                            Anda Belum Menambahkan Menu Apapun!
                        </h5>
                    @endforelse
                @endforeach --}}
            </div>
            <div class="row justify-content-start my-3">
                {{ $foods->links() }}
            </div>
        </div>
    </section>
@endsection
