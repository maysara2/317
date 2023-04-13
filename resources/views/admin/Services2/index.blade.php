@extends('admin.master')

@php
    $name = 'title_'.app()->currentLocale();
@endphp
@php
    $content = 'content_'.app()->currentLocale();
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
                                        <th>Name</th>
                                        <th>Content</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($service2 as $service2)
                                        <td>{{ $service2->id }}</td>
                                        <td>{{ $service2->$name }}</td>
                                        <td>{{ $service2->$content }}</td>
                                        <td><img width="80" src="{{ asset('uploads/service2/'.$service2->image) }}" alt=""></td>
                                        <td>
                                            <form class="d-inline" action="{{ route('admin.service2.destroy', $service2->id) }}" method="POST">
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
