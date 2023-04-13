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
                                        <th>Name Site</th>
                                        <th>Address</th>
                                        <th>Gmail</th>
                                        <th>Phone</th>
                                        <th>Linkedin</th>
                                        <th>Github</th>
                                        <th>Content</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($setting as $setting)
                                        <th>{{ $setting->id }}</th>
                                        <th>{{ $setting->name_site }}</th>
                                        <th>{{ $setting->address }}</th>
                                        <th>{{ $setting->gmail }}</th>
                                        <th>{{ $setting->phone }}</th>
                                        <th>{{ $setting->linkedin }}</th>
                                        <th>{{ $setting->github }}</th>
                                        <th>{{ $setting->$content }}</th>

                                        <td><img width="80" src="{{ asset('uploads/setting/'.$setting->image) }}" alt=""></td>


                                        <td>
                                            <form class="d-inline" action="{{ route('admin.setting.destroy', $setting->id) }}" method="POST">
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
