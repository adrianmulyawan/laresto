@extends('layouts.main-layout')
@section('title', 'Baginda Catering - Blog')

@section('header')
    <!-- Banner -->
    <div class="banner-blog">
        <h1 class="text-center text-capitalize">Blog</h1>
    </div>
@endsection

@section('content')
    <section class="section-menu-list" id="sectionMenuList">
        <div class="container">
            <div class="row row-provide-list justify-content-start my-5">
                @php
                    $duration = 0;
                @endphp
                @forelse ($blogs as $blog)
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4" data-aos="fade-up"
                        data-aos-duration="{{ $duration += 100 }}">
                        <div class="card card-news text-dark card-has-bg click-col"
                            style="background-image:url('{{ Storage::url($blog->image_header) }}'); background-size:cover;">
                            <img class="card-img d-none" src="{{ Storage::url($blog->image_header) }}"
                                alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="card-body">
                                    <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                    <h4 class="card-title mt-0 ">
                                        <a class="text-dark text-decoration-none"
                                            href="{{ route('detail-blog', $blog->slug) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h4>
                                    <small><i class="far fa-clock"></i>
                                        {{ $blog->created_at->format('M d, Y') }}
                                    </small>
                                </div>
                                <div class="card-footer">
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="my-0 text-dark d-block">
                                                {{ $blog->user->name }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h5 class="text-center text-danger" data-aos="fade-up">
                        Belum Menambahkan Blog Apapun!
                    </h5>
                @endforelse
            </div>
            <div class="row justify-content-center my-3">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>
@endsection
