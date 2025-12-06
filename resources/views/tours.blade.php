@extends('front.layouts.app')

@section('content')
    <section class="p-0 position-relative" style="height: 300px;">
        <div class="bg-image ripple facts-section">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.5); height: 100%;">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <h1 class="display-4 fw-normal text-center text-white my-5 fw-bolder" style="z-index: 1;">Tour packages
                    </h1>
                </div>
            </div>
        </div>
    </section>

    {{-- top holiday tour end --}}

    <section id="tours" class="py-5">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="text-primary fw-bolder">Our Top Tour Packages</h1>
                <div class="border-bottom border-danger border-3 line-width mt-3 mx-auto mt-2"></div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card article-card h-100 shadow-sm  ">
                        <a href="{{ route('front.rajasthan') }}">

                            <img src="{{ Vite::asset('resources/images/rajasthan.webp') }}" class="card-img-top"
                                alt="Card Image 1">
                            <div class="card-body p-3">
                                <p class="card-text text-dark small">DECEMBER 10, 2021</p>
                                <h5 class="card-title text-primary fw-bold">Rajasthan Delights Tour Package
                                </h5>
                                 <p class="card-text  article-snippet lh-sm text-dark text-justify">Famous for its royal history, majestic forts, and palaces in cities like Jaipur, Udaipur, and Jaisalmer. Enjoy desert safaris and vibrant Rajput architecture.</p>
                                <a href="{{ route('front.rajasthan') }}"
                                    class="btn btn-danger text-white  text-decoration-none   link-opacity-10 mt-3">Read More
                                </a>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card article-card h-100 shadow-sm">
                        <a href="{{ route('front.himachal') }}">
                            <img src="{{ Vite::asset('resources/images/pexels-photo-131729-700x466.webp') }}"
                                class="card-img-top" alt="Card Image 1">
                            <div class="card-body p-3">
                                <p class="card-text text-dark small">DECEMBER 10, 2021</p>
                                <h5 class="card-title text-primary fw-bold">Himachal Delights Tour Package
                                </h5>
                                 <p class="card-text  article-snippet lh-sm text-dark text-justify">A Himalayan state known for stunning hill stations, snow-capped mountains, and adventure sports. Key destinations are Shimla, Manali, and Spiti Valley, offering trekking and skiing.</p>
                                <a href="{{ route('front.himachal') }}"
                                    class="btn btn-danger text-white  text-decoration-none   link-opacity-10 mt-3">Read
                                    More
                                </a>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card article-card h-100 shadow-sm">
                        <a href="{{ route('front.uttarakhand') }}">
                            <img src="{{ Vite::asset('resources/images/1679308981-1679308981-9046e.webp') }}"
                                class="card-img-top" alt="Card Image 1">
                            <div class="card-body p-3">
                                <p class="card-text text-dark small">DECEMBER 10, 2021</p>
                                <h5 class="card-title text-primary fw-bold">Uttarakhand Delights Tour Package
                                </h5>
                                 <p class="card-text  article-snippet lh-sm text-dark text-justify">A major spiritual and adventure hub. Home to the sacred Char Dham pilgrimage sites, Rishikesh (Yoga Capital), and scenic hill stations like Mussoorie and Nainital.</p>
                                <a href="{{ route('front.uttarakhand') }}"
                                    class="btn btn-danger text-white  text-decoration-none link-opacity-10 mt-3">Read
                                    More
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card article-card h-100 shadow-sm">
                        <a href="{{ route('front.maharashtra') }}">
                            <img src="{{ Vite::asset('resources/images/Mumbai.webp') }}" class="card-img-top"
                                alt="Card Image 1">
                            <div class="card-body p-3">
                                <p class="card-text text-dark small">DECEMBER 10, 2021</p>
                                <h5 class="card-title text-primary fw-bold">Maharashtra Delights Tour Package
                                </h5>
                                <p class="card-text  article-snippet lh-sm text-dark text-justify">A blend of modern cosmopolitan life and rich heritage. Features Mumbai (Financial/Bollywood capital), ancient Ajanta & Ellora Caves (UNESCO sites), historic Maratha forts, and beautiful hill stations.</p>
                                <a href="{{ route('front.maharashtra') }}"
                                    class="btn btn-danger text-white  text-decoration-none   link-opacity-10 mt-3">Read More
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
