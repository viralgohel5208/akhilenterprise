@extends('layouts.app')
@section('title', 'Quality - Akhil Enterprise')
@section('meta_description', 'Akhil Enterprise is leading manufacturing company in precision turned and machined components of Brass, Aluminum Alloys, Iron Alloys and Copper Alloys. ')

@section('styles')
    <style type="text/css">
        label.error {
            color: red;
            padding-top: 5px;
        }
    </style>
@stop

@section('content')
@if(!empty($quality->banner_image))
    <div class="bg-image p-5 text-center shadow-1-strong mb-5 text-white" style="background-image: url('{{ asset("admin/quality_images") }}/{{ $quality->banner_image  }}');">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-white">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Quality</li>
            </ol>
        </nav>
        <h1 class="mb-3 h1 text-light"><strong>Quality</strong></h1>
    </div>
@endif

@if(!empty($quality->description))
    <div class="content-with-image">
        <div class="container">
            <div class="row justify-content-center pb-5 align-items-center" style="width: 100%;">
                <div class="col-md-6">
                    @if(!empty($quality->description))
                        {!! $quality->description !!}
                    @endif
                </div>
                @if(!empty($quality->image))
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('admin/quality_images') }}/{!! $quality->image !!}" alt="image" class="mb-2 rounded-5 img-fluid" />
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif

@if(!empty($certificates))
    <div class="container">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="row">
                    @foreach($certificates as $value)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-0">
                                <img class="card-img-top" src="{{ asset('admin/certificate_images') }}/{!! $value->image !!}" alt="blog" />
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endif

@include('contact-us-footer-form')
@stop