@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
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
            <div class="col-md-12">
                @include('admin.errors')
                <form action="{{ route('admin.setting.store') }}"  method="POST" enctype="multipart/form-data" id="step-form-horizontal" class="step-form-horizontal">
                @csrf
                    <div>

                        <h4>Your Address</h4>
                        @include('admin.Settings.form')
                        <button class="btn btn-success px-5">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@stop
