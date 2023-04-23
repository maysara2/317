@extends('site.master')

@section('title', 'Project |' . env('APP_NAME'))

@section('maysara')

<!-- Topbar Start -->
<div class="container-fluid bg-primary text-white d-none d-lg-flex">
 <div class="container py-3">
     <div class="d-flex align-items-center">
         <a href="{{ route('site.index') }}">
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
            <h1 class="display-2 text-white mb-4 animated slideInDown">{{ $project->name_en }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('site.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="">Projects</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">{{ $project->name_en }}</li>
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
                <p class="fs-5 fw-medium text-primary">{{ __('site.img') }}</p>
                <h1 class="display-5 mb-5" >{{ __('site.site') }}</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">


                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img width="200px" height="200px" class="img-fluid" src="{{ asset('uploads/project/'.$project->image_a) }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('uploads/project/'.$project->image_a) }}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>

                        </div>
                    </div>
                </div>

                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img width="200px" height="200px" class="img-fluid" src="{{ asset('uploads/project/'.$project->image_b) }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('uploads/project/'.$project->image_b) }}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>

                        </div>
                    </div>

                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img width="200px" height="200px" class="img-fluid" src="{{ asset('uploads/project/'.$project->image_c) }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('uploads/project/'.$project->image_c) }}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>

                        </div>
                    </div>

                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img width="200px" height="200px" class="img-fluid" src="{{ asset('uploads/project/'.$project->image_d) }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('uploads/project/'.$project->image_d) }}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->

  <div class="position-relative">
        <div class="position-absolute top-0 start-50 translate-middle">
                <a href="{{ url($project->link) }}" target="_blank" class="btn btn-primary   rounded-pill py-3 px-5 animated slideInRight">{{ __('site.look') }}</a>
        </div>
    </div>
