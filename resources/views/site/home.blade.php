
@extends('site.master')

@section('title', 'Home |' . env('APP_NAME'))

@php
$name = 'name_' . app()->currentLocale();
@endphp

@section('maysara')



<!-- Topbar Start -->
<div class="container-fluid bg-primary text-white d-none d-lg-flex">
    <div class="container py-3">
        <div class="d-flex align-items-center">
            <a href="index.html">
                <h2 class="text-white fw-bold m-0">Maysara</h2>
            </a>
            <div class="ms-auto d-flex align-items-center">
                <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Gaza, Gzaz, Palestine</small>
                <small class="ms-4"><i class="fa fa-envelope me-3"></i>m.aljauar@gmail.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+972-59-484-1338</small>
                <div class="ms-3 d-flex">
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://github.com/maysara2"><i
                            class="fab fa-github"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://twitter.com/mfj_100"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.linkedin.com/in/maysara-aljauar-98a849217/"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="index.html" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">Maysara</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="project.html" class="nav-item nav-link">Projects</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Quotation</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div> -->
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="" class="btn btn-primary rounded-pill py-2 px-3"><i class="bi bi-globe"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->







    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('siteasset/img/png.jpeg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7  text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to
                                        <strong>  My website</strong>
                                    </p>
                                    <h2 class="display-1 text-white mb-4 animated slideInRight">Unlock Your Business
                                        Growth</h2>
                                    <a href="mycv.pdf"
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        </div>

    <!-- Carousel End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('siteasset/img/icon/icon-1.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Award Winning</h5>
                        <p class="mb-0">I have many certificates and experiences in my specialty that indicate my skills</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('siteasset/img/icon/icon-2.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Professional Staff</h5>
                        <p class="mb-0">Complete the required work with skill, speed, and the latest technology</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('siteasset/img/icon/icon-3.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Fair Prices</h5>
                        <p class="mb-0">I offer you the best price in the market in return for professional work</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('siteasset/img/icon/icon-4.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">24/7 Support</h5>
                        <p class="mb-0">I provide you with support around the clock and provide you with all the required modifications at any time</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->



    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <!-- <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com" data-bs-target="#videoModal">
                            <span></span>
                        </button>

                    </div> -->
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <p class="fs-5 fw-medium text-primary">About My</p>
                        <h1 class="display-6 mb-4">The best place to make your own website</h1>
                        <p class="mb-4">I am a web developer with 3+ years of experience developing web applications using the Laravel framework. I have extensive experience designing and developing complex web
                             applications using modern web languages such as HTML, CSS, JavaScript and PHP.</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="{{ asset('siteasset/img/icon/icon-5.png') }}" alt="">
                                <h5 class="mb-3">Managed Services</h5>
                                <span>Everything related to website service</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="{{ asset('siteasset/img/icon/icon-2.png') }}" alt="">
                                <h5 class="mb-3">Dedicated Expert</h5>
                                <span>In developing back-end interfaces and databases</span>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">My Services</p>
                <!-- <h1 class="display-5 mb-5">Digital Marketing Services that We Offer</h1> -->
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('siteasset/img/icon/laravel.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Laravel</h4>
                                <p class="mb-0">Create and develop web applications using the Laravel programming language</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('siteasset/img/icon/api.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Api</h4>
                                <p class="mb-0">Mobile application development using the Laravel framework and API programming.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('siteasset/img/icon/database (1).png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Databases</h4>
                                <p class="mb-0">Dealing with and preserving databases of all kinds and ensuring that they are not leaked or lost</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('siteasset/img/icon/front-end (1).png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Front End</h4>
                                <p class="mb-0">The work of the front end of the sites with the latest technology</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('siteasset/img/icon/web-maintenance.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Maintenance</h4>
                                <p class="mb-0">We maintain active sites and databases and provide technical support around the clock</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('siteasset/img/icon/admin.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Admin panels</h4>
                                <p class="mb-0">Create a control panel that makes the site manager control all the site and the powers for the employees and add Google statistics so that he knows the visitor data</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Project Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">We've Done Lot's of Awesome Projects</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('siteasset/img/project-1.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('siteasset/img/project-1.jpg') }}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Data Analytics & Insights</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('siteasset/img/project-2.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('siteasset/img/project-2.jpg') }}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Marketing Content Strategy</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('siteasset/img/project-3.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('siteasset/img/project-3.jpg') }}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Business Target Market</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('siteasset/img/project-4.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('siteasset/img/project-4.jpg') }}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Social Marketing Strategy</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
            </div>

                <div class="position-relative">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <a href="" class="btn btn-primary
                        rounded-pill py-3 px-5 animated
                        slideInRight">ExploreMore</a>
                    </div>
                </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-primary">Get A Quote</p>
                    <h1 class="display-5 mb-4">Do you need any question? we are here!</h1>
                    <h6>Pleased with your nice passage, if you have any inquiries, questions or suggestions that you would like to share with me, do not hesitate to contact me via e-mail or the contact form on my personal website.</h6>
                    <h6 class="mb-4">I look forward to hearing your comments and feedback and working with you to improve your experience with my services. Thank you for visiting my personal website!</h6>
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="tel:00972594841338">
                        <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </span>
                        <span class="fs-5 fw-medium mx-4">+972-59-484-1338</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Quote Start -->
