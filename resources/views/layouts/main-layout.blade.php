<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('frontend/styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/styles/aos.css') }}">
    @stack('custom-style')
</head>

<body>
    @include('sweetalert::alert')
    <header data-aos="fade-down">
        <x-nav-menu-component></x-nav-menu-component>

        <!-- Carousel -->
        @yield('header')
    </header>

    <x-contact-component></x-contact-component>
    @yield('content')

    <x-main-footer-component></x-main-footer-component>

    <script src="{{ asset('frontend/scripts/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
    @stack('custom-script')
</body>

</html>
