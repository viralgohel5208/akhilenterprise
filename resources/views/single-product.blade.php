@extends('layouts.app')
@section('title', $meta_title)
@section('meta_description', $product->seo_description)

@section('styles')
    <style type="text/css">
        label.error {
            color: red;
            padding-top: 5px;
        }
    </style>
@stop

@section('content')

@if(!empty($product->product_banner_image1))
<div class="bg-image p-5 text-center shadow-1-strong mb-5 text-white" style="background-image: url('{{ asset("admin/product_image") }}/{{ $product->product_banner_image }}'); box-shadow: inset 0 0 0 100px rgb(0 0 0 / 80%);background-size: cover;">
@else
    <div class="bg-image p-5 text-center shadow-1-strong mb-5 text-white" style="background-image: url('{{ asset("front/images/single-product-banner.jpg") }}'); box-shadow: inset 0 0 0 100px rgb(0 0 0 / 80%);background-size: cover;">
@endif
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center text-white">
            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Products</li>
        </ol>
    </nav>
    @if(!empty($product->product_title))
        <h1 class="mb-3 h1 text-light"><strong>{!! $product->product_title !!}</strong></h1>
    @endif
</div>

<div class="container">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="row">

                @if(!empty($gallery))
                    @foreach($gallery as $value)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-0">
                                <img class="card-img-top" src='{{ asset("admin/product_gallery") }}/{{ $value->gallery_image }}' alt="blog" />
                            </div>
                        </div>
                    @endforeach
                @endif

                @if(!empty($product->main_description))
                    <div class="col-md-12 justify-content-center pt-5 text-center">
                        {!! $product->main_description !!}
                    </div>
                @endif
            </div>
        </div>
    </section>
</div>

@include('contact-us-footer-form')
@stop