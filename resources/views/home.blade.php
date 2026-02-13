@extends('layouts.app')
@section('title', 'Home Page - Akhil Enterprise')
@section('meta_description', 'Akhil Enterprise is leading manufacturing company in precision turned and machined components of Brass, Aluminum Alloys, Iron Alloys and Copper Alloys. ')

@section('styles')
	<style type="text/css">
		label.error {
		    color: red;
		    padding-top: 5px;
		}
		.product-image:before {
		    content: "";
		    display: block;
		    position: absolute;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    background-color: rgba(0, 0, 0, 0.5);
		}
	</style>
@stop

@section('content')
@if(!empty($sliders))
	<div class="contain">
	    <div id="carouselExampleIndicators" class="carousel slide">
	        <div class="carousel-inner">
	        	@foreach($sliders as $value)
		            <div class="carousel-item" style="display: block !important;">
		                <img src="{{ asset('admin/slider_image') }}/{{$value['banner_image']}}" class="d-block w-100" alt="slide1" />
		            </div>
		        @endforeach
	        </div>
	        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
	            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	            <span class="visually-hidden">Previous</span>
	        </button>
	        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
	            <span class="carousel-control-next-icon" aria-hidden="true"></span>
	            <span class="visually-hidden">Next</span>
	        </button>
	    </div>
	</div>
@endif

@if(!empty($coreValues))
	<div class="multicolumn-section">
	    <div class="container">
	        <div class="row justify-content-center mb-5">
	        	@php $i = 1; @endphp
	        	@foreach($coreValues as $card)
		            <div class="card col-md-4 px-4 py-4 @if($i == 2) bg-box-part @endif">
		                <div class="card-body text-center">
		                	@if(!empty($card['image']))
				                <img src="{{ asset('admin/core_value_images') }}/{{ $card['image'] }}" alt="User Icon" class="mb-3" style="width: 50px; height: 50px;" />
				            @endif
		                    @if(!empty($card['heading']))
			                	<h5 class="@if($i == 2) card-title text-white @else text-custom @endif">{!! $card['heading'] !!}</h5>
			               	@endif
			               	@if(!empty($card['short_description']))
			                	<p class="card-text @if($i == 2) card-text-part @endif">{!! $card['short_description'] !!}</p>
			                @endif
		                </div>
		            </div>
	            @php $i++; @endphp
		        @endforeach
	        </div>
	    </div>
	</div>
@endif

@if(!empty($homeData->heading))
	<div class="image-with-text">
	    <div class="container">
	        <div class="row mt-2 pb-5 align-items-center" style="width: 100%;">
	            <div class="col-md-6 text-left-content">
	            	@if(!empty($homeData->pre_heading))
                    	<h6 class="text-custom text-uppercase">{!! $homeData->pre_heading !!}</h6>
                    @endif
                    @if(!empty($homeData->heading))
                    	<h2>{!! $homeData->heading !!}</h2>
                    @endif
	                @if(!empty($homeData->description))
                    	{!! $homeData->description !!}
                    @endif
	                @if(!empty($homeData->button_name))
                    	@if(!empty($homeData->button_link))
                    		<a href="{{ $homeData->button_link }}" class="btn bg-dark text-white">{!! $homeData->button_name !!}</a>
                    	@else
                    		<a href="#" class="btn bg-dark text-white">{!! $homeData->button_name !!}</a>
                    	@endif
                    @endif
	            </div>
	            <div class="col-md-6">
	            	@if(!empty($homeData->image))
	                	<img class="mb-3 rounded-5 border border-primary border-3 custom-width" src="{{ asset('admin/home_page_images') }}/{{ $homeData->image }}" alt="{!! $homeData->heading !!}" />
	                @else
	                	<img class="mb-3 rounded-5 border border-primary border-3 custom-width" src="{{ asset('front/images/quality-img.jpg') }}" alt="{!! $homeData->heading !!}" />
	                @endif
	            </div>
	        </div>
	    </div>
	</div>
@endif

@if(!empty($products))
	<div class="products-section py-5">
	    <div class="container">
	    	@if(!empty($homeData->product_pre_heading))
	        	<h4 class="text-custom product_subheading_part text-center">{!! $homeData->product_pre_heading !!}</h4>
	        @endif
	        @if(!empty($homeData->product_heading))
	        	<h1 class="text product_heading_part text-center mb-5"><strong>{!! $homeData->product_heading !!}</strong></h1>
	        @endif
	        <div class="row">
	        	@foreach($products as $product)
		            <div class="col-lg-4 col-md-6 mb-4">
		            	<a href="{{ route('home') }}/product/{{$product->product_slug}}" class="link">
			                <div class="bg-image position-relative">
			                    <div class="product-image">
			                    	@if(!empty($product['product_image']))
		                            	<img src="{{ asset('admin/product_image') }}/{{ $product->product_image }}" alt="{!! $product['product_title'] !!}" class="w-100" />
		                            @else
		                            	<img src="{{ asset('front/images/quality-img.jpg') }}" alt="{!! $product['product_title'] !!}" class="w-100" />
		                            @endif
			                    </div>
			                    <div class="mask text-light d-flex justify-content-between text-center">
			                        <p class="m-0">{!! $product['product_title'] !!}</p>
			                        <div class="product-heading-icon">
			                            <svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			                                <path d="M0.999998 8L15 8" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
			                                <path d="M8 1L15 8L8 15" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
			                            </svg>
			                        </div>
			                    </div>
			                </div>
			            </a>
		            </div>
	            @endforeach
	        </div>
	    </div>
	</div>
@endif

@if(!empty($homeData->infra_heading))
	<div class="text-with-image">
	    <div class="container">
	        <div class="row justify-content-center mt-5 pb-5 align-items-center">
	            <div class="col-md-6">
	            	@if(!empty($homeData->infra_image))
	                	<img class="mb-3 rounded-5 border border-primary border-3 w-100"  src="{{ asset('admin/home_page_images') }}/{{ $homeData->infra_image }}" alt="{!! $homeData->infra_heading !!}" />
	                @else
	                	<img class="mb-3 rounded-5 border border-primary border-3 w-100"  src="{{ asset('front/images/quality-img.jpg') }}" alt="{!! $homeData->infra_heading !!}" />
	                @endif
	            </div>
	            <div class="col-md-6 pt-2">
	            	@if(!empty($homeData->infra_pre_heading))
	                	<h6 class="text-custom text-uppercase">{!! $homeData->infra_pre_heading !!}</h6>
	                @endif
	                @if(!empty($homeData->infra_heading))
	                	<h1 class="text"><strong>{!! $homeData->infra_heading !!}</strong></h1>
	                @endif
	                @foreach($infrastructure as $data)
                    	<p><strong>{!! $data['heading'] !!} :</strong> {!! $data['short_description'] !!}</p>
                    @endforeach
	            </div>
	        </div>
	    </div>
	</div>
@endif

@include('contact-us-footer-form')
@stop