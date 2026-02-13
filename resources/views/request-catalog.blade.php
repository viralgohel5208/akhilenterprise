@extends('layouts.app')

@if(!empty($data->seo_title))
    @section('title', $data->seo_title)
@else
    @section('title', 'Request Catalog - Akhil Enterprise')
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

<div class="contact-us-section contact-inquiry-section">
    <div class="container">
        <section class="text body-font relative">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="form-contact rounded-lg col-lg-12 col-md-12 p-4">
                        <h2 class="h5 text-dark mb-3 font-weight-bold text-center contact-form-heading">Request A Catalog</h2>
                        <form id="contactForm" class="contactForm">
                            <div class="row pt-5 pb-1">
                                <div class="col">
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" />
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" />
                                </div>
                            </div>
                            <div class="row pt-5 pb-5">
                                <div class="col">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                                </div>
                                <div class="col">
                                    <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Phone" />
                                </div>
                            </div>
                            <button type="submit" class="btn submit-btn bg-dark text-white">Submit</button>
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
@stop