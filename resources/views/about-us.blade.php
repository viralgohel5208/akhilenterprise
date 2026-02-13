@extends('layouts.app')
@section('title', 'About Us - Akhil Enterprise')
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
@if(!empty($about->banner_image))
    <div class="bg-image p-5 text-center shadow-1-strong mb-5 text-white" style="background-image: url('{{ asset("admin/about_images") }}/{{ $about->banner_image  }}');">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-white">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
            </ol>
        </nav>
        <h1 class="mb-3 h1 text-light"><strong>About Us</strong></h1>
    </div>
@endif

@if(!empty($about->intro_content))
    <div class="container">
        <div class="row align-items-center pb-5" style="width: 100%;">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                @if(!empty($about->intro_image))
                    <img src="{{ asset('admin/about_images') }}/{!! $about->intro_image !!}" alt="image" class="mb-2 rounded-5 img-fluid" />
                @endif
            </div>
            <div class="col-md-6">
                @if(!empty($about->intro_content))
                    {!! $about->intro_content !!}
                @endif
            </div>
        </div>
    </div>
@endif

@if(!empty($about->heading))
    <div class="image-with-text">
        <div class="container">
            <div class="row mt-2 pb-5 align-items-center" style="width: 100%;">
                <div class="col-md-6 text-left-content">
                    @if(!empty($about->pre_heading))
                        <h6 class="text-custom text-uppercase">{!! $about->pre_heading !!}</h6>
                    @endif
                    @if(!empty($about->heading))
                        <h2>{!! $about->heading !!}</h2>
                    @endif

                    @if(!empty($about->description))
                        {!! $about->description !!}
                    @endif
                    @if(!empty($about->button_name))
                        @if(!empty($about->button_link))
                            <a href="{!! $about->button_link !!}" class="btn bg-dark text-white">{!! $about->button_name !!}</a>
                        @else
                            <a href="#" class="btn bg-dark text-white">{!! $about->button_name !!}</a>
                        @endif
                    @endif
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('admin/about_images') }}/{!! $about->image !!}" alt="thumbs-up Icon" class="mb-3 rounded-5 border border-primary border-3 custom-width" />
                </div>
            </div>
        </div>
    </div>
@endif

@if(!empty($infrastructure))
    <div class="about-us-section">
        <div class="container">
            <section class="text-gray-600 body-font pt-5 pb-5">
                <div class="row justify-content-center mt-2 pb-5" style="width: 100%;">
                    <div class="col-12">
                        <h6 class="text-custom text-uppercase text-center">About Us</h6>
                        <h1 class="text text-center"><strong>Infrastructure</strong></h1>
                    </div>
                </div>
                <div class="container px-5 py-24 mx-auto">
                    <div class="row">
                        @foreach($infrastructure as $value)
                            <div class="col-md-4">
                                <div class="card overflow-hidden">
                                    <img class="card-img-top" src="{{ asset('admin/infrastructure_image') }}/{!! $value['image'] !!}" alt="blog" />
                                    <div class="card-body">
                                        @if($value['heading'])
                                            <h4 class="text-muted text-custom medium mb-1"><strong>{!! $value['heading'] !!}</strong></h4>
                                        @endif
                                        @if($value['short_description'])
                                            <p class="card-text mb-3">{!! $value['short_description'] !!}</p>
                                        @endif
                                        <!-- <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="btn btn-link text-primary"></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
@endif

@include('contact-us-footer-form')
@stop