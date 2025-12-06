@extends('front.layouts.app')

@section('content')
    <section class="p-0 position-relative" style="height: 300px;">
        <div class="bg-image ripple facts-section">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.5); height: 100%;">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <h1 class="display-4 fw-normal text-center text-white my-5 fw-bolder" style="z-index: 1;">About Us
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container-lg container-md my-5  w-md-75  w-lg-75">
        <div class="my-5">
            <h2 class="text-primary fw-bolder mb-4">Who We Are</h2>
            <p class="text-justify lh-lg text-primary fs-6">
                About us At Primos travellers, we believe travel is more than just visiting new places, where you learn
                about different cultures and nature’s beauty.
                Our Mission: our mission is connect different people with the  and to make travel meaningful.
                Your next great journey starts here. Wherever you dream of going, we’ll take you there.
                Let’s create your next travel story together — we’ll handle the things, you enjoy the adventure.
            </p>
        </div>

        <div class="text-center my-5">
            <h1 class="text-primary fw-bolder">Top Holiday Destinations</h1>
            <div class="border-bottom border-danger border-3 mx-auto line-width mt-3 fw-lighter"></div>
        </div>

        <div id="multiItemCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4  mb-3">
                            <a href="">
                                <div class="card card-destination">
                                    <img src="{{ Vite::asset('resources/images/IMG_1449.webp') }}" class="card-img"
                                        alt="Jaisalmer" height="280">

                                    <div class="card-img-overlay d-flex align-items-end">
                                        <h5 class="card-title text-white fw-bold">Jaisalmer</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4  mb-3">
                            <div class="card card-destination">
                                <img src="{{ Vite::asset('resources/images/IMG_1463.webp') }}" class="card-img"
                                    alt="JaiPur" height="280">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <h5 class="card-title text-white fw-bolder">JaiPur</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4  mb-3">
                            <div class="card card-destination">
                                <img src="{{ Vite::asset('resources/images/IMG_1466.webp') }}" class="card-img"
                                    alt="UdiPur" height="280">

                                <div class="card-img-overlay d-flex align-items-end">
                                    <h5 class="card-title text-white fw-bold">UdiPur</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4  mb-3">
                            <div class="card card-destination">
                                <img src="{{ Vite::asset('resources/images/IMG_1456.WEBP') }}" class="card-img"
                                    alt="Rishikesh" height="280">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <h5 class="card-title text-white fw-bold">Rishikesh</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6  col-lg-4 mb-3">
                            <div class="card card-destination ">
                                <img src="{{ Vite::asset('resources/images/IMG_1459.webp') }}" class="card-img"
                                    alt="Mussorie" height="280">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <h5 class="card-title text-white fw-bold">Mussorie</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4  mb-3">
                            <div class="card card-destination">
                                <img src="{{ Vite::asset('resources/images/IMG_1465.webp') }}" class="card-img"
                                    alt="Lake Of Uaipur" height="280">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <h5 class="card-title text-white fw-bold">Lake Of Uaipur</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#multiItemCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#multiItemCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
@endsection
