
<header class="sticky-top bg-white shadow bg-body-tertiary rounded">
    <div class="d-flex d-none d-md-block d-lg-block align-items-center justify-content-start bg-primary py-3">
        <div class="container d-flex gap-4 align-items-center">

            <p class="text-white mb-2 fs-6"><a href="mailto:info@primostravellers.com" class="text-white" target="_blank"><i
                        class="fas fa-envelope me-1  "></i> info@primostravellers.com </a></p>

            <p class="text-white mb-2 fs-6"> <a href="tel:+918445542594" class="text-white">
                    <i class="fa fa-phone me-1  "></i> +918445542594
                </a>
            </p>
        </div>
    </div>
    <nav class="container navbar navbar-expand-lg  ">
        <div class="container-fluid ">
            <a class="navbar-brand fw-bold logo-container w-auto" href="{{route('home')}}">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Primos Travellers Logo"
                     width="120" height="100">
            </a>
            <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav gap-md-4 d-flex justify-content-center">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('front.tours') }}">Tours</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('front.about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('front.contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="d-flex d-none d-md-block d-lg-block align-items-center justify-content-end">
                <a href="{{route('front.contact')}}" class="btn btn-primary text-white btn-lg fw-bold">Book Now</a>
            </div>
        </div>
    </nav>
</header>
