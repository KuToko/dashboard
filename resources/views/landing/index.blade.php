<!DOCTYPE html>
<html lang="en">

@include('landing.partials.head', ['title' => 'Home'])

<body>
    <!-- header and hero start -->
    <section>
        <header>
            <nav class="navbar navbar-expand-lg topnav-menu navbar-light" data-toggle="sticky">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="./assets/images/logo.png" height="30" class="d-inline-block align-top"
                            alt="" />
                    </a>
                    <a href="#" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#topnav-menu-content3" aria-controls="topnav-menu-content3"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </a>
                    <div class="collapse navbar-collapse" id="topnav-menu-content3">

                        <ul class="navbar-nav align-items-lg-center mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#testimonials">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav">
                            <li class="nav-item m">
                                <a class="btn btn-primary btn-sm" href="{{ url('/app') }}">Dashboard</a>
                            </li>
                        </ul>




                    </div>
                </div>
            </nav>
        </header>
        <section class="position-relative hero-1 pt-7 pt-sm-6 pb-5">
            <div class="container hero-container">
                <div class="row text-center text-md-start">
                    <div class="col-lg-6 pt-2 pt-sm-3">
                        <h1 class="hero-title">
                            Empower Local Businesses with <span
                                class="highlight highlight-warning d-inline-block">KuToko</span> - Discover, Support,
                            Grow!
                        </h1>

                        <p class="mt-3 fs-17 text-muted">
                            KuToko connects you with nearby MSMEs, empowering small businesses. Discover unique
                            offerings, support entrepreneurs, and grow your community. Join KuToko now!
                        </p>

                        <div class="pt-3 pt-sm-5 d-flex align-items-center action-buttons">
                            <a href='https://play.google.com/store/apps/details?id=id.kutoko.app'
                                class="btn btn-primary" data-bs-toggle="smooth-scroll">Download</a>

                            <div class="ms-3">
                                <a class="text-primary d-flex align-items-center" href="https://youtu.be/5Z3Q3qg3Z5E">
                                    <span type="button"
                                        class="btn btn-soft-primary btn-rounded-circle btn-icon me-2 shadow-none">
                                        <i class="icon-xxs icon-dual-primary align-self-center" data-feather="play"></i>
                                    </span>
                                    <span class="fw-semibold">Watch Video</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-2 text-end">
                        <div class="position-relative">
                            <div class="hero-img mt-4 mt-sm-0">
                                <img src="./assets/images/hero/app1.png" alt="" class="img-fluid"
                                    data-bs-aos="zoom-in-up" />
                            </div>

                            <!-- Swiper -->
                            <div class="slider">
                                <div class="swiper-container" data-toggle="swiper"
                                    data-swiper='{"slidesPerView":1, "loop":true, "spaceBetween": 0, "autoplay": {"delay": 5000}, "breakpoints": {"576": {"slidesPerView": 1.2 }, "768": { "slidesPerView": 1 } }, "roundLengths":true}'>

                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="swiper-slide-content shadow bg-white rounded-sm p-3 quote">
                                                <div class="d-flex text-align-start">
                                                    <img src="https://via.placeholder.com/450/DBDBDB?text=Ach"
                                                        alt=""
                                                        class="img-fluid avatar-sm rounded-circle align-self-center me-3">
                                                    <div class="flex-grow-1 fs-14 text-muted">Easy booking, great deals,
                                                        and secure payments. Love it!
                                                        <p class="mb-0">
                                                            <span class="ms-0">
                                                                <i data-feather="star"
                                                                    class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                                <i data-feather="star"
                                                                    class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                                <i data-feather="star"
                                                                    class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                                <i data-feather="star"
                                                                    class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                                <i data-feather="star"
                                                                    class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- swiper-slide End -->

                                        <div class="swiper-slide">
                                            <div class="swiper-slide-content shadow bg-white rounded-sm p-3 quote">
                                                <div class="d-flex">
                                                    <img src="https://via.placeholder.com/450/DBDBDB?text=Sat"
                                                        alt=""
                                                        class="img-fluid avatar-sm rounded-circle align-self-center me-3">
                                                    <div class="flex-grow-1 fs-14 text-muted">KuToko app is my go-to for
                                                        exclusive deals and convenience!
                                                        <p class="mb-0">
                                                            <span class="ms-0">
                                                                <i data-feather="star"
                                                                    class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                                <i data-feather="star"
                                                                    class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                                <i data-feather="star"
                                                                    class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                                <i data-feather="star"
                                                                    class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                                <i data-feather="star"
                                                                    class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- swiper-slide End -->
                                    </div>
                                    <!-- swiper-wrapper End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </section>

    </section>

    <!-- header and hero end -->

    <!-- features start -->
    <section class="position-relative overflow-hidden features-1 py-5" id="features">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Features</span>
                    <h1 class="display-5 fw-semibold">Empower Local Businesses with KuToko</h1>
                    <p class="text-muted mx-auto">
                        Discover, Support, and Grow your business with <span
                            class="text-primary fw-bold">KuToko's</span> features.
                    </p>
                </div>
            </div>
            <div class="row align-items-center mt-0 mt-sm-5">
                <div class="col-lg-5">
                    <div class="img-content position-relative">
                        <div class="img-up">
                            <img src="./assets/images/features/app2.png" alt="app-img" class="img-fluid d-block"
                                data-aos="zoom-in-right" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row mt-5 mt-lg-0 ps-4 ps-sm-5">
                        <div class="col-md-6">
                            <span
                                class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary">
                                <?xml version="1.0" encoding="UTF-8"?>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                    <title>Stockholm-icons / Communication / Mail-opened</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Stockholm-icons-/-Communication-/-Mail-opened" stroke="none"
                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24"
                                            height="24"></rect>
                                        <path
                                            d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                            id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                        <path
                                            d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                            id="Combined-Shape" fill="#335EEA"></path>
                                    </g>
                                </svg>
                            </span>

                            <h4 class="mt-3 mb-2 fw-semibold">Tailored Recommendations</h4>
                            <p class="mb-4 pb-3 text-muted">
                                Find your perfect match with personalized recommendations.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <span
                                class="bg-soft-success avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-success">
                                <?xml version="1.0" encoding="UTF-8"?>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                    <title>Stockholm-icons / General / Shield-check</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Stockholm-icons-/-General-/-Shield-check" stroke="none" stroke-width="1"
                                        fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24"
                                            height="24"></rect>
                                        <path
                                            d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                            id="Path-50" fill="#335EEA" opacity="0.3"></path>
                                        <path
                                            d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z"
                                            id="check-path" fill="#335EEA"></path>
                                    </g>
                                </svg>
                            </span>
                            <h4 class="mt-3 mb-2 fw-semibold">Seamless Booking Experience</h4>
                            <p class="mb-4 pb-3 text-muted">
                                Effortlessly book services with just a few taps.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <span
                                class="bg-soft-orange avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-orange">
                                <?xml version="1.0" encoding="UTF-8"?>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                    <title>Stockholm-icons / General / Thunder-move</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Stockholm-icons-/-General-/-Thunder-move" stroke="none" stroke-width="1"
                                        fill="none" fill-rule="evenodd">
                                        <rect id="Rectangle-10" x="0" y="0" width="24"
                                            height="24"></rect>
                                        <path
                                            d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z"
                                            id="Path-3" fill="#335EEA"></path>
                                        <path
                                            d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z"
                                            id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                    </g>
                                </svg>
                            </span>
                            <h4 class="mt-3 mb-2 fw-semibold">Trusted Community Feedback</h4>
                            <p class="mb-4 pb-3 text-muted">
                                Make informed decisions with trusted reviews and ratings.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <span class="bg-soft-info avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-info">
                                <?xml version="1.0" encoding="UTF-8"?>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                    <title>Stockholm-icons / General / Notification#2</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Stockholm-icons-/-General-/-Notification#2" stroke="none"
                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24"
                                            height="24"></rect>
                                        <path
                                            d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                            id="Combined-Shape" fill="#335EEA"></path>
                                        <circle id="Oval" fill="#335EEA" opacity="0.3" cx="18.5"
                                            cy="5.5" r="2.5">
                                        </circle>
                                    </g>
                                </svg>
                            </span>
                            <h4 class="mt-3 mb-2 fw-semibold">Savings and Rewards</h4>
                            <p class="mb-4 pb-3 text-muted">
                                Unlock great savings with exclusive deals and promotions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->


    <!-- features2 start -->
    <section class="section py-5 features-2 position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">More Features</span>
                    <h1 class="display-5 fw-semibold">Enhance Your Experience with Additional Features</h1>
                    <p class="text-muted mx-auto">
                        <span class="text-primary fw-bold">KuToko</span> offers more features to enhance your shopping
                        and booking experience.
                    </p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-4">
                    <div class="card bg-gray-50 shadow-none shapes" data-aos="fade-up" data-aos-duration="100">
                        <div class="shape1"></div>
                        <div class="shape2"></div>
                        <div class="card-body text-center py-0">
                            <h3 class="fw-semibold mt-0">Save and Organize</h3>
                            <p class="fs-14">
                                Keep track of your favorite products and services by saving them to your wishlist.
                                Easily access and organize your desired items for future reference.
                            </p>

                            <div class="px-2 mt-3">
                                <img src="./assets/images/features/app3.png" alt="" class="img-fluid mt-2" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-gray-50 shadow-none shapes" data-aos="fade-up" data-aos-duration="300">
                        <div class="shape3"></div>
                        <div class="shape4"></div>
                        <div class="card-body text-center py-0">
                            <h3 class="fw-semibold mt-0">Streamlined Checkout</h3>
                            <p class="fs-14">
                                Enjoy a seamless checkout process with KuToko's quick and easy payment options. Complete
                                your purchases efficiently and securely.
                            </p>

                            <div class="px-2 mt-3">
                                <img src="./assets/images/features/app4.png" alt="" class="img-fluid mt-2" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-gray-50 shadow-none shapes" data-aos="fade-up" data-aos-duration="500">
                        <div class="shape5"></div>
                        <div class="shape6"></div>
                        <div class="card-body text-center py-0">
                            <h3 class="fw-semibold mt-0">Track Your Orders</h3>
                            <p class="fs-14">
                                Stay informed about your past orders and track their progress right within the app. Get
                                updates on delivery status and estimated arrival times.
                            </p>

                            <div class="px-2 mt-3">
                                <img src="./assets/images/features/app4.png" alt="" class="img-fluid mt-2" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features2 end -->

    <!-- testimonials start -->
    <section class="section pt-5 pb-6 py-sm-8 mb-5 mb-sm-0 bg-light position-relative" data-aos="fade-up"
        data-aos-duration="500">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container testimonials-1" id="testimonials">
            <div class="row align-items-center">
                <div class="col">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Testimonials</span>
                    <h1 class="display-5 fw-semibold">What people say</h1>
                </div>
                <div class="col-auto text-sm-right pt-2 pt-sm-0">
                    <div class="navigations">
                        <button class="btn btn-link text-normal p-0 swiper-custom-prev">
                            <svg class="bi bi-arrow-left" width="1.75em" height="1.75em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z"
                                    clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                    d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <button class="btn btn-link text-normal p-0 swiper-custom-next">
                            <svg class="bi bi-arrow-right" width="1.75em" height="1.75em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L12.793 8l-2.647-2.646a.5.5 0 010-.708z"
                                    clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M2 8a.5.5 0 01.5-.5H13a.5.5 0 010 1H2.5A.5.5 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mt-sm-5">
                <div class="col">
                    <div class="slider">
                        <div class="swiper-container" data-toggle="swiper"
                            data-swiper='{"loop":true, "spaceBetween": 24, "autoplay": {"delay": 5000}, "breakpoints": {"576": {"slidesPerView": 1 }, "768": { "slidesPerView": 2 } }, "roundLengths":true, "navigation": {"nextEl": ".swiper-custom-next","prevEl": ".swiper-custom-prev"}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card mb-0">
                                        <div class="card-body p-md-5">
                                            <p class="fw-normal mb-4 mt-0">
                                                KuToko app is a game-changer! Easy booking, great deals, and secure
                                                payments. Love it!
                                            </p>
                                            <div class="d-flex text-align-start">
                                                <img class="me-2 rounded-circle"
                                                    src="https://via.placeholder.com/450/DBDBDB?text=Satria"
                                                    alt="" height="36" />
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Satriadinata Ratnanto</h6>
                                                    <p class="my-0 text-muted fs-13">Senior DevOps Engineer</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i data-feather="star"
                                                        class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                        class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                        class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                        class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                        class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mb-0">
                                        <div class="card-body p-md-5">
                                            <p class="fw-normal mb-4 mt-0">
                                                Discovering local businesses made simple. KuToko app is my go-to for
                                                exclusive deals and convenience!
                                            <div class="d-flex text-align-start">
                                                <img class="me-2 rounded-circle"
                                                    src="https://via.placeholder.com/450/DBDBDB?text=Ach"
                                                    alt="" height="36" />
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Ach Fikri</h6>
                                                    <p class="my-0 text-muted fs-13">Senior Backend Engineer</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i data-feather="star"
                                                        class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                        class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                        class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                        class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                    <i data-feather="star"
                                                        class="icon icon-xxs icon-fill-warning text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials end -->

    <!-- cta start -->
    <section class="section pb-0 py-4 pt-sm-6 position-relative" id="section-download" data-aos="fade-up">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="display-5 fw-medium">Stay Connected and Shop Smart</h1>
                    <p class="text-muted mx-auto">
                        Discover local businesses with exclusive deals. Shop and support your <span
                            class="text-primary fw-bold">Business</span>.
                    </p>

                    <div class="text-center mt-5">
                        <a href="https://play.google.com/store/apps/details?id=id.kutoko.app"
                            class="d-block d-sm-inline-flex" target="_blank">
                            <img src="./assets/images/buttons/google.png" alt="google play" height="52" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta end -->

    <!-- footer start -->
    <section class="section pt-lg-5 pt-3 pb-3 position-relative" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    <ul class="list-inline list-with-separator">
                        <li class="list-inline-item me-0"><a href="{{ url('privacy') }}">Privacy</a></li>
                        <li class="list-inline-item me-0"><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                    <p class="mt-2 fs-14">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © KuToko. All rights reserved.
                    </p>

                    <img src="./assets/images/logo.png" height="30" class="mt-2 mb-4" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->

    <!-- back to top -->
    <a class="btn btn-soft-primary shadow-none btn-icon btn-back-to-top" href='#'><i class="icon-xxs"
            data-feather="arrow-up"></i></a>

    <!-- javascript -->
    @include('landing.partials.script')


</body>

</html>
