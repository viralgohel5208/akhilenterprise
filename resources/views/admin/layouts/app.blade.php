<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Akhil Enterprise') }}</title>

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('admin/css/apex-charts.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/css/datatables.bootstrap5.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/css/responsive.bootstrap5.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/css/datatables.checkboxes.css') }}" />
        <!-- Page CSS -->

        <link rel="stylesheet" href="{{ asset('admin/css/app-logistics-dashboard.css') }}" />

        <!-- Helpers -->
        <script src="{{ asset('admin/js/helpers.js')}}"></script>
        <script src="{{ asset('admin/js/config.js')}}"></script>

        @yield('styles') 
    </head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->

                @include('admin.layouts.sidebar')
                <!-- / Menu -->

                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
                        @include('admin.layouts.navbar')
                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                            @yield('content')
                        <!-- / Content -->

                        <!-- Footer -->
                            <footer class="content-footer footer bg-footer-theme">
                                <div class="container-xxl">
                                    <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-column">
                                        <div class="text-body mb-2 mb-md-0">
                                            © <script>document.write(new Date().getFullYear());</script>
                                            , made with <span class="text-danger"><i class="tf-icons ri-heart-fill"></i></span> by
                                            <a href="#" target="_blank" class="footer-link">Akhil Enterprise</a>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        <!-- / Footer -->
                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <div class="layout-overlay layout-menu-toggle"></div>
            <div class="drag-target"></div>
        </div>
        <!-- / Layout wrapper -->

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
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ asset('admin/js/apexcharts.js')}}"></script>
        <script src="{{ asset('admin/js/datatables-bootstrap5.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @endif

            @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
            @endif

            @if(Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
            @endif

            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
            @endif
        </script>

        <!-- Main JS -->
        <script src="{{ asset('admin/js/main.js')}}"></script>
        @yield('script') 
    </body>
</html>
