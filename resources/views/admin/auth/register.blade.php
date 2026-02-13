<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Akhil Enterprise | Register</title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('admin/images/favicon.ico') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet" />

        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('admin/css/remixicon/remixicon.css') }}" />

        <!-- Menu waves for no-customizer fix -->
        <link rel="stylesheet" href="{{ asset('admin/css/node-waves.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('admin/css/core.css') }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('admin/css/theme-default.css') }}" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('admin/css/perfect-scrollbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/css/typeahead.css') }}" />
        <!-- Vendor -->
        <link rel="stylesheet" href="{{ asset('admin/css/form-validation.css') }}" />

        <!-- Page CSS -->
        <!-- Page -->
        <link rel="stylesheet" href="{{ asset('admin/css/page-auth.css') }}" />
    </head>

    <body>
        <!-- Content -->
        <div class="authentication-wrapper authentication-cover">
            <div class="authentication-inner row m-0">
                <!-- /Left Section -->
                <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-12 pb-2">
                    <img
                        src="{{ asset('admin/images/auth-login-illustration-light.png')}}"
                        class="auth-cover-illustration w-100"
                        alt="auth-illustration"
                        data-app-light-img="{{ asset('admin/images/auth-login-illustration-light.png') }}"
                        data-app-dark-img="{{ asset('admin/images/auth-login-illustration-dark.png') }}"
                    />
                    <img
                        src="{{ asset('admin/images/auth-cover-login-mask-light.png') }}"
                        class="authentication-image"
                        alt="mask"
                        data-app-light-img="{{ asset('admin/images/auth-cover-login-mask-light.png') }}"
                        data-app-dark-img="{{ asset('admin/images/auth-cover-login-mask-dark.png') }}"
                    />
                </div>
                <!-- /Left Section -->

                <!-- Login -->
                <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-12 px-12 py-6" style="background-color: #fff;">
                    <div class="w-px-400 mx-auto pt-5 pt-lg-0">
                        <h4 class="mb-1">Adventure starts here! 👋</h4>
                        <p class="mb-5">Make your app management easy and fun!</p>

                        <form id="formAuthentication" class="mb-5" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-floating form-floating-outline mb-5">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" />
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-5">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                                <label for="email">Email</label>
                            </div>
                            <div class="mb-5 form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" />
                                        <label for="password">Password</label>
                                    </div>
                                    <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100">Sign up</button>
                        </form>
                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="{{ route('admin.login-view') }}">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Login -->
            </div>
        </div>

        <!-- / Content -->

        <!-- Core JS -->
        <script src="{{ asset('admin/js/jquery.js')}}"></script>
        <script src="{{ asset('admin/js/popper.js')}}"></script>
        <script src="{{ asset('admin/js/bootstrap.js')}}"></script>
        <script src="{{ asset('admin/js/node-waves.js')}}"></script>
        <script src="{{ asset('admin/js/perfect-scrollbar.js')}}"></script>
        <script src="{{ asset('admin/js/hammer.js')}}"></script>
        <script src="{{ asset('admin/js/i18n.js')}}"></script>
        <script src="{{ asset('admin/js/typeahead.js')}}"></script>
        <script src="{{ asset('admin/js/menu.js')}}"></script>

        <!-- Vendors JS -->
        <script src="{{ asset('admin/js/popular.js')}}"></script>
        <script src="{{ asset('admin/js/bootstrap5.js')}}"></script>
        <script src="{{ asset('admin/js/auto-focus.js')}}"></script>

        <!-- Main JS -->
        <script src="{{ asset('admin/js/main.js')}}"></script>

        <!-- Page JS -->
        <script src="{{ asset('admin/js/pages-auth.js')}}"></script>
    </body>
</html>
