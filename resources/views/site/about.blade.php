@extends('site.master')

@section('title', 'About  |' . env('APP_NAME'))

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

























    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
              @foreach ($looly as $about)
              <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded-top p-5 mt-lg-5">
                    <p class="fs-5 fw-medium text-primary">{{ __('site.about') }}</p>
                    <h1 class="display-6 mb-4">{{ $about->$bigtitle }}</h1>
                    <p class="mb-4"> {{ $about->$bigcontent }} </p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('uploads/about/'. $about->simage) }}" alt="">
                            <h5 class="mb-3">{{ $about->$stitle}}</h5>
                            <span>{{ $about->$scontent }}</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('uploads/about/'. $about->simage1) }}" alt="">
                            <h5 class="mb-3">{{ __('site.xx') }}</h5>
                            <span>{{ __('site.yy') }}</span>
                        </div>
                    </div>
        
                </div>
            </div>
              @endforeach

            </div>
        </div>
    </div>

    <!-- About End -->


