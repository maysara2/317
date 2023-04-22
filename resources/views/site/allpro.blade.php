@extends('site.master')

@section('title', 'Project |' . env('APP_NAME'))

@section('maysara')
@php
$name = 'name_' . app()->currentLocale();
@endphp
@php
$content = 'content_' . app()->currentLocale();
@endphp
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
            <h1 class="display-2 text-white mb-4 animated slideInDown">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Project Start -->

    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">We've Done Lot's of Awesome Projects</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
              @foreach ($lol as $lol)
              <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="{{ asset('uploads/project/'.$lol->image_a) }}" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('uploads/project/'.$lol->image_a) }}"
                            data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">{{ $lol->$name }}</a>
                    <span>{{ $lol->$content }}</span>
                </div>
            </div>
              @endforeach


            </div>
        </div>
    </div>
    <!-- Project End -->

