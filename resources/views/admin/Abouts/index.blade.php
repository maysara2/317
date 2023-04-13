@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
@endphp
@php
    $content = 'contentimage_'.app()->currentLocale();
@endphp

@section('title', 'Sevies | ' . env('APP_NAME'))

@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">

        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Services</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Big Title</th>
                                        <th>Big Content</th>
                                        <th>Big Image</th>
                                        <th>Small Title1</th>
                                        <th>Small Title2</th>
                                        <th>Small Content1</th>
                                        <th>Small Content2</th>
                                        <th>Small image1</th>
                                        <th>Small Image2</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($about as $about)
                                        <th>{{ $about->id }}</th>
                                        <th>{{ $about->bigtitle_en }}</th>
                                        <th>{{ $about->bigcontent_en }}</th>
                                        <td><img width="80" src="{{ asset('uploads/about/'.$about->bigimage) }}" alt=""></td>

                                        <th>{{ $about->stitle_en }}</th>
                                        <th>{{ $about->stitle_en1 }}</th>
                                        <th>{{ $about->scontent_en }}</th>
                                        <th>{{ $about->scontent_en1 }}</th>
                                        <td><img width="80" src="{{ asset('uploads/about/'.$about->simage) }}" alt=""></td>


                                        <td><img width="80" src="{{ asset('uploads/about/'.$about->simage1) }}" alt=""></td>


                                        <td>
                                            <form class="d-inline" action="{{ route('admin.about.destroy', $about->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            <button class="btn btn-danger" onclick="return confirm('Are you sure')"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>


                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop
