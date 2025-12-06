@extends('front.layouts.app')

@section('content')
    <section class="p-0 position-relative mb-5" style="height: 300px;">
        <div class="bg-image ripple facts-section">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.5); height: 100%;">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <h1 class="display-4 fw-normal text-center text-white my-5 fw-bolder" style="z-index: 1;">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-lg-5 col-md-6 mb-4">
                <div class="p-4 bg-white border rounded contact-card-shadow">

                    <h3 class="h5 mb-4 text-primary text-primary fw-bold">Contact Information</h3>

                    <div class="contact-info-item mb-4 d-flex">

                        <div class="me-3">
                            <i class="bi bi-geo-alt-fill  fs-4 text-primary"></i>
                        </div>
                        <div>
                            <p class="mb-1 small text-uppercase text-primary fw-bold">
                                Address
                            </p>
                            <p class="mb-0 text-dark py-2">
                                220, Udyog Vihar Phase 4 rd phase 3rd Udyog Vihar sector 18 gurugram Shahpur Haryana 122019
                            </p>
                        </div>

                    </div>

                    <div class="contact-info-item mb-4 d-flex">
                        <a href="tel:+918445542594">
                            <div class="me-3">
                                <i class="bi bi-telephone-fill  fs-4 text-primary"></i>
                            </div>
                            <div>
                                <p class="mb-1 small text-uppercase text-primary fw-bold">
                                    Phone
                                </p>
                                <p class="mb-0 text-dark py-2">
                                    <a href="tel:+918445542594" class="text-dark">+91-8445542594</a>
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="contact-info-item mb-4 d-flex">
                        <a href="mailto:info@primostravellers.com">
                            <div class="me-3">
                                <i class="bi bi-envelope fs-4 text-primary"></i>
                            </div>
                            <div>
                                <p class="mb-1 small text-uppercase text-primary fw-bold">
                                    Email
                                </p>
                                <p class="mb-0 text-dark py-2">
                                    <a href="mailto:info@primostravellers.com"
                                        class="text-dark">info@primostravellers.com</a>
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="contact-info-item mb-4 d-flex">
                        <a href="https://primostravellers.com">
                            <div class="me-3">
                                <i class="bi bi-globe fs-4 text-primary"></i>
                            </div>
                            <div>
                                <p class="mb-1 small text-uppercase text-primary fw-bold">
                                    Website
                                </p>
                                <p class="mb-0 text-dark py-2">
                                    <a href="https://primostravellers.com" class="text-dark">
                                        www.primostravellers.com
                                    </a>
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="mt-4">
                        <div class="map-placeholder mt-5">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.3809009050046!2d77.0803829905804!3d28.491743976176814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d193e3a6a7905%3A0x5ca3e96c47a011f0!2sTag%20Tower%2C%20220%2C%20Udyog%20Vihar%20Phase%204%20Rd%2C%20Phase%20III%2C%20Udyog%20Vihar%2C%20Sector%2018%2C%20Gurugram%2C%20Shahpur%2C%20Haryana%20122015!5e0!3m2!1sen!2sin!4v1763576348366!5m2!1sen!2sin"
                                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="p-4 bg-white border rounded contact-card-shadow">

                    <h3 class="mb-4 text-primary fw-bold">Let's Get in touch</h3>

                    <div id="responseMessage" class="mt-3"></div>
                    <form id="bookingForm">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="mb-3">
                            <label for="name" class="form-label fs-6">Name</label>
                            <input type="text" class="form-control lh-lg" name="user_name" id="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fs-6">Email</label>
                            <input type="email" class="form-control lh-lg" name="user_email" id="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label fs-6">Phone</label>
                            <input type="tel" class="form-control lh-lg" maxlength="10" name="user_phone" id="phone"
                                pattern="[0-9]{10}" title="Must be exactly 10 digits" required>
                        </div>

                        <div class="mb-3">
                            <label for="state-select" class="form-label fs-6">Select Tour</label>
                            <select class="form-select lh-lg" id="state-select" name="tour" aria-label="State Selection"
                                required>
                                <option selected value="">Select</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="Maharashtra">Maharashtra</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label fs-6">Message</label>
                            <textarea class="form-control" id="message" rows="5" name="message" required></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" id="sendButton"
                                class="btn btn-primary text-white fw-bolder fs-4" data-url="{{ route('front.booking') }}">Send</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
