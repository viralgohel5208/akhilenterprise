@extends('layouts.app')

@if(!empty($data->seo_title))
    @section('title', $data->seo_title)
@else
    @section('title', 'Product - Akhil Enterprise')
@endif

@if(!empty($data->seo_description))
    @section('meta_description', $data->seo_description)
@else
    @section('meta_description', 'Akhil Enterprise is leading manufacturing company in precision turned and machined components of Brass, Aluminum Alloys, Iron Alloys and Copper Alloys. ')
@endif

@section('styles')
    <style type="text/css">
        label.error {
            color: red;
            padding-top: 5px;
        }
        li.list-group-item.d-flex.align-items-center.border-0 {
            cursor: pointer;
        }
        #prdList nav div:nth-child(1){
            display: none !important;
        }
        #prdList nav svg{
            width: 32px !important;
        }
        #prdList nav div:nth-child(2){
            margin-top: 40px;
            text-align: right;
        }
        #prdList nav div:nth-child(2) a{
            text-decoration: none !important;
        }
    </style>
@stop

@section('content')
@if(!empty($data->page_banner_image))
    <div class="bg-image p-5 text-center shadow-1-strong mb-5 text-white" style="background-image: url('{{ asset("admin/page_banner") }}/{{ $data->page_banner_image  }}');">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-white">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                @if(!empty($data->page_name))
                    <li class="breadcrumb-item active text-white" aria-current="page">{!! $data->page_name !!}</li>
                @endif
            </ol>
        </nav>
        @if(!empty($data->page_name))
            <h1 class="mb-3 h1 text-light"><strong>{!! $data->page_name !!}</strong></h1>
        @endif
    </div>
@endif

@if(!empty($products))
<div class="product-grid-section">
    <div class="container">
        <div class="row pt-5 justify-content-between">
            @if(!empty($categories))
                <div class="col-md-3">
                    <nav class="navbar navbar-light">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" id="product-search" placeholder="Search" aria-label="Search" />
                        </form>
                    </nav>
                    <div class="py-4">
                        <h6 class="font-weight-bold text-dark mb-4">Shop By Category</h6>
                        <ol class="list-group" id="category-filters">
                            @foreach($categories as $cat)
                                <li class="list-group-item d-flex align-items-center border-0" data-filter="{!! $cat->id !!}">
                                    <span class="bg-dark me-3" style="width: 8px; height: 8px;"></span>
                                    {!! $cat->category_name !!}
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            @endif

            <div class="col-md-9" id="prdList">
                <div class="row" id="product-list">
                    @include('product_list_ajax', ['products' => $products])
                </div>
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endif

@if(!empty($settings->description))
    <div class="contact-us-section">
        <div class="container">
            <section class="text body-font relative">
                <div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="rounded-lg p-2">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <h6 class="text-custom text-uppercase">Get In Touch</h6>
                                        <h1 class="text contact-heading"><strong>CONTACT US</strong></h1>
                                        @if($settings->description)
                                            <p>{!! $settings->description !!}</p>
                                        @endif
                                        
                                        <h2 class="h6 font-weight-bold text-uppercase mt-3 small-heading"><strong>Phone</strong></h2>
                                        @if($settings->phone_number)
                                            <p>{!! $settings->phone_number !!}</p>
                                        @endif
                                        <h2 class="h6 font-weight-bold text-uppercase mt-3 small-heading"><strong>Email</strong></h2>
                                        @if($settings->email)
                                            <a href="mailto:{!! $settings->email !!}" class="text-primary email-part">{!! $settings->email !!}</a>
                                        @endif
                                        <h2 class="h6 font-weight-bold text-uppercase mt-3 small-heading"><strong>Address</strong></h2>
                                        @if($settings->address)
                                            <p>{!! $settings->address !!}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-contact rounded-lg col-lg-6 col-md-6 p-4">
                            <h2 class="h5 text-dark mb-3 font-weight-bold text-center contact-form-heading">Request A Catalog</h2>
                            <form id="contactForm" class="contactForm">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" />
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" />
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Phone" />
                                </div>
                                <button type="submit" class="btn btn-dark btn-lg w-100">Submit</button>
                            </form>
                            <div id="success-message" style="display:none; color:green;">
                                Form submitted successfully!
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endif
@stop

@section('script')
<script src="{{ asset('admin/js/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#contactForm").validate({
            rules: {
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone_number: {
                    required: true
                }
            },
            messages: {
                first_name: {
                    required: "Please enter your first name"
                },
                last_name: {
                    required: "Please enter your last name"
                },
                email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                },
                phone_number: {
                    required: "Please enter your phone number"
                }
            },
            submitHandler: function(form) {
                var first_name = $('#first_name').val();
                var last_name = $('#last_name').val();
                var email = $('#email').val();
                var phone_number = $('#phone_number').val();
                $.ajax({
                    url: "{{ route('contactForm') }}",
                    method: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "first_name": first_name,
                        "last_name": last_name,
                        "email": email,
                        "phone_number": phone_number,
                    },
                    success: function(response) {
                        if (response.success) {
                            $("#success-message").show();
                            $("#contactForm")[0].reset();
                        }
                    },
                    error: function(xhr) {
                        alert("Form submission failed. Please try again.");
                    }
                });
                return false;
            }
        });
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#product-search').on('keyup', function(){
            var query = $(this).val();
            fetchProducts(query);
        });

        $('#category-filters li').on('click', function(){
            var filter = $(this).data('filter');
            fetchProducts($('#product-search').val(), filter);
        });

        function fetchProducts(query = '', filter = '') {
            $('.loading').show();
            $.ajax({
                url: "{{ route('productSearch') }}",
                method: 'GET',
                data: {
                    query: query,
                    filter: filter
                },
                success: function(data) {
                    $('#product-list').html(data);
                    $('.loading').hide();
                }
            });
        }

        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetchProducts($('#product-search').val(), $('#category-filters .active').data('filter'), page);
        });
    });
</script>
@stop
