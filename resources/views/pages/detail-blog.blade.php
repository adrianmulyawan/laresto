@extends('layouts.main-layout')
@section('title', 'Baginda Catering - Detail Blog')


@section('content')
    <section class="section-menu-list" id="sectionMenuList">
        <div class="container">
            <div class="row row-provide-list justify-content-start my-5">
                <div class="col-sm-12 col-md-10 col-lg-10" data-aos="fade-up">
                    <nav class="breadcrumb-link my-3 mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"
                                    class="text-decoration-none text-black">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('blog') }}"
                                    class="text-decoration-none text-black">Blog</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                        </ol>
                    </nav>
                    <h1 class="text-start detail-blog-title my-3">
                        {{ $blog->title }}
                    </h1>
                    <span class="text-start text-upload">
                        Dipositing Oleh :
                    </span>
                    <span class="text-start text-upload">
                        {{ $blog->user->role == 'SUPER_ADMIN' ? 'SUPER ADMIN' : 'ADMIN' }}
                    </span>
                    <span class="text-upload"> | </span>
                    <span class="text-start text-upload">{{ $blog->created_at->format('d M Y') }}</span>
                </div>
                <div class="row justify-content-center align-items-center content-limiter my-5">
                    <hr>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 mb-4">
                    <div class="image-container" data-aos="fade-up">
                        <img src="{{ Storage::url($blog->image_blog) }}" alt="blog-image"
                            class="rounded mx-auto d-block img-fluid" width="800px">
                        <p class="text-center my-3">
                            Sumber Gambar : <a href="https://unsplash.com" class="text-decoration-none">Unsplash</a>
                        </p>
                    </div>
                    <div class="content-container my-3" data-aos="fade-up">
                        {!! $blog->body !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
