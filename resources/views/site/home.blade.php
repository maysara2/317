
@extends('site.master')

@section('title', 'Home |' . env('APP_NAME'))

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
@foreach ($setting as $setting)
<div class="container-fluid bg-primary text-white d-none d-lg-flex">
    <div class="container py-2">
        <div class="d-flex align-items-center">
            <a style="height: 100% ; max-width: 100%" href="{{ route('site.index') }}">
                <h2 class="text-white fw-bold m-0">Maysara</h2>
                {{--  <img class="w-25 h-25 ml-25 fw-bold" src="{{ asset('siteasset/img/logo-no-background.png') }}" alt="">  --}}

            </a>
            <div class="ms-auto d-flex align-items-right">
                <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>{!! $setting->address !!}</small>
                <small class="ms-4"><i class="fa fa-envelope me-3"></i>{{ $setting->gmail }}</small>
                <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>{{ $setting->phone }}</small>
                <div class="ms-3 d-flex">
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" target="_blank" href="{{ $setting->github }}"><i
                            class="fab fa-github"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2"target="_blank"href="https://twitter.com/mfj_100"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2"target="_blank" href="{{ $setting->linkedin }}"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Topbar End -->



<!-- Navbar Start -->

@include('site.navbar')


<!-- Navbar End -->




    <!-- Carousel Start -->
<div class="container-fluid px-0 mb-5" @if (app()->currentLocale() =='ar') dir="rtl" @endif>
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($setting as $dd)
            <div class="carousel-item active">
                <img class="w-100"  @if (app()->currentLocale() =='ar') src="{{ asset('siteasset/img/png1.jpeg')  }}" @endif src="{{ asset('siteasset/img/png.jpeg')  }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7  text-start  @if (app()->currentLocale() =='ar') text-end @endif">
                                <p class="fs-4 text-white animated slideInRight  @if (app()->currentLocale() =='ar') slideInLeft @endif"> {{ __('site.my') }}
                                    <strong>{{ __('site.myw') }}</strong>
                                </p>
                                <h2 class="display-1 text-white mb-4 animated slideInRight @if (app()->currentLocale() =='ar') slideInLeft @endif">{{ $setting->$contentimage }}</h2>
                                <a target="_blank"  href="{{ asset('siteasset/img/mycv.pdf') }}"
                                    class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight @if (app()->currentLocale() =='ar') slideInLeft @endif">{{ __('site.more') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</div>

    <!-- Carousel End -->


    <!-- Features Start -->
    <div class="container-xxl py-5"  @if (app()->currentLocale() =='ar') dir="rtl" @endif>
        <div class="container">
            <div class="row g-0 feature-row">

@foreach ($ser2 as $ser2)


                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('uploads/service2/'.$ser2->image) }}" alt="Icon">
                        </div>
                        <h5 class="mb-3" @if (app()->currentLocale() =='ar') dir="auto" @endif>{{ $ser2->$title }}</h5>
                        <p class="mb-0"  @if (app()->currentLocale() =='ar') dir="auto" @endif>{{ $ser2->$content }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Features End -->



    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                @if (app()->currentLocale() =='ar')
                <div class="col-lg-6">

                </div>
                 @endif
              @foreach ($about as $about)
              <div class="col-lg-6 pt-lg-5 wow fadeIn " data-wow-delay="0.5s" @if (app()->currentLocale() =='ar')dir="rtl"@endif>
                <div class="bg-white rounded-top p-5 mt-lg-5">
                    <p class="fs-5 fw-medium text-primary" >{{ __('site.about') }}</p>
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
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="
                    {{ route('site.about') }}">{{ __('site.more') }}</a>
                </div>
            </div>
              @endforeach

            </div>
        </div>
    </div>
    <!-- About End -->









    <!-- Service Start -->
    <div class="container-xxl py-5 ">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">{{ __('site.service') }}</p>
                <!-- <h1 class="display-5 mb-5">Digital Marketing Services that We Offer</h1> -->
            </div>
            <div class="row g-4">
                @foreach ($ser as $ser)
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
                            <a class="text-primary fw-medium" href="{{ route('site.services') }}">{{ __('site.read more') }}<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Project Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="pb-5 pb-md-0 text-md-start text-center wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">{{ __('site.project') }}</p>
                <h1 class="display-5 mb-5">{{ __('site.pro') }}</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($project as $gg)
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('uploads/project/'.$gg->image_a) }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('uploads/project/'.$gg->image_a) }}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ route('site.project',$gg->id) }}"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="{{ route('site.project',$gg->id) }} " @if (app()->currentLocale() =='ar')dir="rtl" @endif >{{ $gg->$name }}</a>
                        <span>{{ $gg->$content }}</span>
                    </div>
                </div>
                @endforeach


            </div>

                <div class="position-relative">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <a href="{{ route('site.projects') }}" class="btn btn-primary
                        rounded-pill py-3 px-5 animated
                        slideInRight">{{ __('site.allpro') }}</a>
                    </div>
                </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container ">
            <div class="row g-5" @if (app()->currentLocale() =='ar')dir="rtl" @endif>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-primary">{{ __('site.conn') }}</p>
                    <h1 class="display-5 mb-4">{{ __('site.myy') }}</h1>
                    <h4 class="m-4">{{ __('site.mony') }}</h4>
                    {{--  <h6 class="mb-4">I look forward to hearing your comments and feedback and working with you to improve your experience with my services. Thank you for visiting my personal website!</h6>  --}}

                </div>

                <div class="col-lg-6 wow fadeInUp  " data-wow-delay="0.5s">

                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="https://api.whatsapp.com/send?phone=00972594841338">
                        <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                              <i class="fa fa-phone" style="color: white"></i>


                        </span>
                        <a href="https://api.whatsapp.com/send?phone=00972594841338"><span class="fs-5 fw-medium mx-4">{{ __('site.conn') }}</span></a>
                    </a>
                    <br >
                    <a class="mt-4 d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="mailto:m.aljauar@gmail.com">
                        <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope" style="color: white; width=55;"></i>


                        </span>
                        <a href="mailto:m.aljauar@gmail.com"><span class="fs-5 fw-medium mx-4 ">{{ __('site.conn1') }}</span></a>
                    </a>

                </div>
        </div>
        </div>
    </div>
    <!-- Quote Start -->




















