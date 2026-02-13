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