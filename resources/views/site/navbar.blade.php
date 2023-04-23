







<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top" @if (app()->currentLocale() =='ar')style="direction: rtl;" @endif>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{ route('site.index') }}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">Maysara</h1>
                {{--  <img src="{{ asset('siteasset/img/logo-no-background.png') }}" alt="">  --}}
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('site.index') }}" class="nav-item nav-link active">{{ __('site.homett') }}</a>
                    <a href="{{ route('site.about') }}" class="nav-item nav-link">{{ __('site.aboutt') }}</a>
                    <a href="{{ route('site.services') }}" class="nav-item nav-link">{{ __('site.serttt') }}</a>
                    <a href="{{ route('site.projects') }}" class="nav-item nav-link">{{__('site.porttt')}}</a>
                    <a href="{{ route('site.contact') }}" class="nav-item nav-link">{{ __('site.conttt') }}</a>
                </div>

            </div>
            <div class="ms-auto d-none d-lg-block">
                {{--  <a href="" class="btn btn-primary rounded-pill py-2 px-3"><i class="bi bi-globe"></i></a>
                  --}}
                  @foreach(LaravelLocalization::getSupportedLocales()
                  as $localeCode => $properties)
                      {{-- {{ $localeCode }} --}}
                      @if (app()->currentLocale()!=$localeCode)
                      <div class="nav-item">
                          <a class="nav-link" rel="alternate"
                           hreflang="{{ $localeCode }}"
                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null,
                            [], true) }}">
                            {{--  <img width="20" src="{{ asset('siteasset/img/'.$properties['flag']) }}" alt="">  --}}
                            <img width="40" src="{{ asset('siteasset/img/'.$properties['gg']) }}" alt="22">
                          </a>
                        </div>
                      @endif

                  @endforeach

                </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
