<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Libraries Stylesheet   -->
    <link href="{{ asset('siteasset/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('siteasset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('siteasset/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('siteasset/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('siteasset/css/style.css') }}" rel="stylesheet">


</head>
{{--  @if (app()->currentLocale() =='ar')
<style>
    body{
        direction: rtl;
        text-align: right;
    }
</style>
    @endif  --}}
@yield('styles')
<body>
    <!-- Spinner Start -->


    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 5rem; height: 5rem;"></div>
    </div>

    <!-- Spinner End -->





   @yield('maysara')





    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-3">
                    <h4 class="text-white mb-3"> Contact With Me</h4>

                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:00972594841338">+972-59-484-1338</a></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:m.aljauar@gmail.com">m.aljauar@gmail.com</a>                    </p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" target="_blank" href="https://twitter.com/mfj_100"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" target="_blank" href="https://www.facebook.com/profile.php?id=100010813418794"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" target="_blank" href="https://www.instagram.com/mfj.100/"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" target="_blank" href="https://www.linkedin.com/in/maysara-aljauar-98a849217/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{ route('site.about') }}">About Ms</a>
                    <a class="btn btn-link" href="{{ route('site.index') }}">Contact Ms</a>
                    <a class="btn btn-link" href="{{ route('site.services') }}">My Services</a>
                    <a class="btn btn-link" href="{{ route('site.projects') }}">Projects</a>
                </div>
                <div class="col-lg-4 col-md-3">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-md-center mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="{{ route('admin.index') }}">Maysara Aljayyar</a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('siteasset/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('siteasset/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('siteasset/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('siteasset/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('siteasset/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('siteasset/js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
