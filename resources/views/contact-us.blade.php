@extends('layouts.app')

@if(!empty($data->seo_title))
    @section('title', $data->seo_title)
@else
    @section('title', 'Contact Us - Akhil Enterprise')
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
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
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

    <div class="ratio ratio-16x9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7376.772755334938!2d70.05355159159795!3d22.414478718418465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39576b49c8fba551%3A0x12985e807665c11f!2sG.I.D.C.%20Phase%202%2C%20GIDC%20Phase-2%2C%20Dared%2C%20Jamnagar%2C%20Gujarat%20361006!5e0!3m2!1sen!2sin!4v1727529077356!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
@stop