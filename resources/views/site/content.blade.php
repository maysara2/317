@extends('site.master')

@section('title', 'Contact  |' . env('APP_NAME'))

@php
    $contentimage = 'contentimage_'.app()->currentLocale();
@endphp

@php
    $bigtitle = 'bigtitle_'.app()->currentLocale();
@endphp


@php
    $bigcontent = 'bigcontent_'.app()->currentLocale();
@endphp
@php
    $stitle = 'stitle_'.app()->currentLocale();
@endphp

@php
    $scontent = 'scontent_'.app()->currentLocale();
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

@include('site.navbar')


<!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('site.index') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
























    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="row g-5">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-primary">{{ __('site.conn') }}</p>
                    <h1 class="display-5 mb-4">{{ __('site.myy') }}</h1>
                    <h4 class="m-4">{{ __('site.mony') }}</h4>
                    {{--  <h6 class="mb-4">I look forward to hearing your comments and feedback and working with you to improve your experience with my services. Thank you for visiting my personal website!</h6>  --}}

                </div>
                <div class="col-lg-6 wow fadeInUp mx-6" data-wow-delay="0.1s">
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="tel:00972594841338">
                        <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                            {{--  <i class="fa-brands fa-whatsapp"></i>  --}}
                            <img width="55" src="{{ asset('siteasset/img/whatsapp.png') }}" alt="">

                        </span>
                        <a href="https://api.whatsapp.com/send?phone=00972594841338"><span class="fs-5 fw-medium mx-4">{{ __('site.conn') }}</span></a>
                    </a>
                    <br >
                    <a class="mt-4 d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="mailto:m.aljauar@gmail.com">
                        <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                            <img width="55" src="{{ asset('siteasset/img/gmail_logo_media_social_icon.png') }}" alt="">
                        </span>
                        <a href="mailto:m.aljauar@gmail.com"><span class="fs-5 fw-medium mx-4 ">{{ __('site.conn1') }}</span></a>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Start -->

