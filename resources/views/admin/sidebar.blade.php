

***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label"><h3>{{ __('admin.dd') }}</h3></li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                   <span class="nav-text"><h5>{{ __('admin.ser') }}</h5></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.service.index') }}"><h6>{{ __('admin.alls') }}</h6></a></li>
                    <li><a href="{{ route('admin.service.create') }}"><h6>{{ __('admin.add') }}</h6></a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                   <span class="nav-text"><h5>{{ __('admin.poj') }}</h5></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.project.index') }}"><h6>{{ __('admin.allp') }}</h6></a></li>
                    <li><a href="{{ route('admin.project.create') }}"><h6>{{ __('admin.add') }}</h6></a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                   <span class="nav-text"><h5>{{ __('admin.about') }}</h5></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.about.index') }}"><h6>{{ __('admin.allp') }}</h6></a></li>
                    <li><a href="{{ route('admin.about.create') }}"><h6>{{ __('admin.add') }}</h6></a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                   <span class="nav-text"><h5>{{ __('admin.services') }}</h5></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.service2.index') }}"><h6>{{ __('admin.allp') }}</h6></a></li>
                    <li><a href="{{ route('admin.service2.create') }}"><h6>{{ __('admin.add') }}</h6></a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                   <span class="nav-text"><h5>{{ __('admin.set') }}</h5></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.setting.index') }}"><h6>{{ __('admin.allp') }}</h6></a></li>
                    <li><a href="{{ route('admin.setting.create') }}"><h6>{{ __('admin.add') }}</h6></a></li>
                </ul>
            </li>
    </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
