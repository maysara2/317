@extends('site.master')

@section('title', 'Services  |' . env('APP_NAME'))


@php
$name = 'name_' . app()->currentLocale();
@endphp
@php
$title = 'title_' . app()->currentLocale();
@endphp
@php
$content = 'content_' . app()->currentLocale();
@endphp

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
            <h1 class="display-2 text-white mb-4 animated slideInDown">My Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('site.index') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">My Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row">

@foreach ($sis as $ser2)


                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('uploads/service2/'.$ser2->image) }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">{{ $ser2->$title }}</h5>
                        <p class="mb-0">{{ $ser2->$content }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
          

            </div>
            <div class="row g-4">
                @foreach ($mom as $ser)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('uploads/service/'.$ser->image) }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">{{ $ser->$name }}</h4>
                                <p class="mb-0">{{ $ser->$content }}</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">{{ __('site.read more') }}<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    <!-- Service End -->





















