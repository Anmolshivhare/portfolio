<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sumit Shivhare | Laravel Developer | Full Stack Web Developer</title>
    <meta name="title" content="Sumit Shivhare | Laravel Developer | Full Stack Web Developer">
    <meta name="description"
        content="Experienced Laravel Developer specializing in PHP, MySQL, JavaScript, Bootstrap & modern web applications. 2+ years of experience building scalable web solutions.">
    <meta name="keywords"
        content="Sumit Shivhare, Laravel Developer, PHP Developer, Full Stack Developer, Web Developer, Noida, India, Bootstrap, jQuery, MySQL, JavaScript, Livewire">
    <meta name="author" content="Sumit Shivhare">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Sumit Shivhare | Laravel Developer">
    <meta property="og:description"
        content="Experienced Laravel Developer specializing in PHP, MySQL, JavaScript & modern web applications.">
    <meta property="og:image" content="{{ Vite::asset('resources/images/portfolio/og-image.jpg') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Sumit Shivhare | Laravel Developer">
    <meta property="twitter:description"
        content="Experienced Laravel Developer specializing in PHP, MySQL, JavaScript & modern web applications.">

    <link rel="icon" type="image/png" href="">

    <link rel="canonical" href="{{ url()->current() }}">

    @vite(['resources/scss/portfolio/portfolio.scss', 'resources/js/portfolio/portfolio.js'])
</head>

<body>
    <div id="app">
        <main>
            <div id="layoutSidenav_content" class="main-content">
                @include('portfolio.layouts.partials.header')
                <div class="main-inner-content">
                    <div class="">
                        <div class="row me-0 ">
                            <div class="col-12 pe-0">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                @include('portfolio.layouts.partials.footer')
            </div>
        </main>
        @stack('scripts')
    </div>
</body>

</html>