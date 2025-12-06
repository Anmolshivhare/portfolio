@extends('front.layouts.app')

@section('content')
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ Vite::asset('resources/images/Uttarakhandbanner.webp') }}" alt="New York"
                    class="d-block w-100 carousel-img-responsive">

            </div>
            <div class="carousel-item ">
                <img src="{{ Vite::asset('resources/images/banner2.webp') }}" alt="Los Angeles"
                    class="d-block w-100 carousel-img-responsive">

            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/images/banner3.webp') }}" alt="Chicago"
                    class="d-block w-100 carousel-img-responsive">

            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/images/banner1.webp') }}" alt="Chicago"
                    class="d-block w-100 carousel-img-responsive">

            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/images/banner4.webp') }}" alt="Chicago"
                    class="d-block w-100 carousel-img-responsive">

            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/images/banner5.webp') }}" alt="Chicago"
                    class="d-block w-100 carousel-img-responsive">

            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/images/banner6.webp') }}" alt="Chicago"
                    class="d-block w-100 carousel-img-responsive">

            </div>
        </div>

        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button> --}}
    </div>
    <!-- Carousel nd-->
            <!-- HERO -->
<section id="home" class="hero d-flex align-items-center text-center">
    <div class="container" data-aos="fade-up">
        <h3 class="mb-3">Hello, I'm</h3>
        <h1>Your Name</h1>
        <p class="lead">A Passionate Web Developer & IT Professional</p>
        <a href="#contact" class="btn btn-primary btn-lg mt-3">Hire Me</a>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="py-5">
    <div class="container" data-aos="fade-right">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="img-fluid rounded-4 shadow">
            </div>
            <div class="col-md-8">
                <h2 class="fw-bold">About Me</h2>
                <p>
                    I am a dedicated IT professional with expertise in web development, UI/UX,
                    system management, and backend technologies. I love creating modern, clean, and fast websites.
                </p>
                <p><strong>Experience:</strong> 2+ years</p>
                <p><strong>Specialization:</strong> Laravel, PHP, Bootstrap, JavaScript, MySQL</p>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5" data-aos="fade-up">What I Do</h2>

        <div class="row g-4">
            <div class="col-md-4" data-aos="zoom-in">
                <div class="service-box shadow-sm">
                    <i class="fa-solid fa-code fa-3x text-primary mb-3"></i>
                    <h4>Web Development</h4>
                    <p>I build fast, secure, SEO-friendly and responsive websites using modern technologies.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in">
                <div class="service-box shadow-sm">
                    <i class="fa-solid fa-laptop-code fa-3x text-danger mb-3"></i>
                    <h4>IT Solutions</h4>
                    <p>Providing complete IT support, system optimization, and technical solutions.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in">
                <div class="service-box shadow-sm">
                    <i class="fa-solid fa-brain fa-3x text-success mb-3"></i>
                    <h4>UI/UX Design</h4>
                    <p>Designing smooth, clean, and modern user interfaces with best user experience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SKILLS -->
<section id="skills" class="py-5">
    <div class="container" data-aos="fade-left">
        <h2 class="fw-bold mb-4">Skills</h2>

        <div class="mb-3">
            <label class="fw-bold">HTML / CSS</label>
            <div class="progress"><div class="progress-bar" style="width: 95%"></div></div>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Bootstrap</label>
            <div class="progress"><div class="progress-bar" style="width: 90%"></div></div>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Laravel / PHP</label>
            <div class="progress"><div class="progress-bar" style="width: 88%"></div></div>
        </div>

        <div class="mb-3">
            <label class="fw-bold">JavaScript</label>
            <div class="progress"><div class="progress-bar" style="width: 75%"></div></div>
        </div>
    </div>
</section>

<!-- PORTFOLIO -->
<section id="portfolio" class="portfolio py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5" data-aos="fade-up">My Projects</h2>

        <div class="row g-4">
            <div class="col-md-4" data-aos="zoom-in">
                <img src="https://source.unsplash.com/400x300/?website" class="img-fluid shadow">
            </div>
            <div class="col-md-4" data-aos="zoom-in">
                <img src="https://source.unsplash.com/400x300/?coding" class="img-fluid shadow">
            </div>
            <div class="col-md-4" data-aos="zoom-in">
                <img src="https://source.unsplash.com/400x300/?technology" class="img-fluid shadow">
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="py-5">
    <div class="container" data-aos="fade-up">
        <h2 class="fw-bold mb-4">Contact Me</h2>

        <form class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="col-12">
                <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-primary btn-lg">Send Message</button>
            </div>
        </form>
    </div>
</section>


    {{-- testimonialCarousel --}}

    <section id="testimonials" class="py-5">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="text-primary fw-bolder">Customer Reviews</h1>
                <div class="border-bottom border-danger border-3 line-width mt-3 mx-auto mt-2"></div>
            </div>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="text-center col-md-8 col-lg-6">
                                <i class="bi bi-quote display-1 text-danger"></i>
                                <p class="lead fst-italic my-4 text-start text-primary text-justify lh-sm">"The Rajasthan
                                    package was flawless!

                                    perfectly
                                    organized, and the guides were exceptionally knowledgeable. Highly recommend Primos
                                    Travellers for unforgettable
                                    Holidays! Truly a <span class="fw-bolder text-danger">5-star experience. </span> "</p>
                                <img src="{{ Vite::asset('resources/images/Mask group1.webp') }}"
                                    class="rounded-circle mb-2" alt="Client 1"
                                    style="width: 80px; height: 80px; object-fit: cover;">
                                <h5 class="fw-bolder text-primary my-2">Anjali Sharma</h5>
                                <p class="text-muted">Rajasthan</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="text-center col-md-8 col-lg-6">
                                <i class="bi bi-quote display-1 text-danger"></i>
                                <p class="lead fst-italic my-4 lh-sm">"Our romantic trip to Rishikesh was unforgettable.
                                    The
                                    service
                                    was top-notch, from booking to the final day. Truly a <span
                                        class="fw-bolder text-danger">5-star experience. </span> "</p>
                                <img src="{{ Vite::asset('resources/images/me-100x100.webp') }}"
                                    class="rounded-circle mb-2" alt="Client 2"
                                    style="width: 80px; height: 80px; object-fit: cover;">
                                <h5 class="fw-bolder text-primary my-2">Rinki Verma</h5>
                                <p class="text-muted">Rishikesh</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="text-center col-md-8 col-lg-6">
                                <i class="bi bi-quote display-1 text-danger"></i>
                                <p class="lead fst-italic my-4 lh-sm">"My trip to Himachal was unforgettable. The service was excellent from the moment I booked until the last day. Truly a <span
                                        class="fw-bolder text-danger">5-star experience. </span> "</p>
                                <img src="{{ Vite::asset('resources/images/Mask group.webp') }}"
                                    class="rounded-circle mb-2" alt="Client 2"
                                    style="width: 80px; height: 80px; object-fit: cover;">
                                <h5 class="fw-bolder text-primary my-2">Hemant Chaudhary</h5>
                                <p class="text-muted">Himachal</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="text-center col-md-8 col-lg-6">
                                <i class="bi bi-quote display-1 text-danger"></i>
                                <p class="lead fst-italic my-4 lh-sm">"My trip to Maharashtra was unforgettable. The service was excellent from the moment I booked until the last day. Truly a <span
                                        class="fw-bolder text-danger">5-star experience. </span> "</p>
                                <img src="{{ Vite::asset('resources/images/sanskar.webp') }}"
                                    class="rounded-circle mb-2" alt="Client 2"
                                    style="width: 80px; height: 80px; object-fit: cover;">
                                <h5 class="fw-bolder text-primary my-2">Sanskar Shivhare</h5>
                                <p class="text-muted">Maharashtra</p>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    {{-- testimonialCarousel --}}
@endsection
