<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Akhil Enterprise') }}</title>
    <meta content="Miicro description" name="description" />
 -->

    <title>@yield('title', 'Akhil Enterprise')</title>
    <meta name="description" content="@yield('meta_description', 'Akhil Enterprise')">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <!-- <link rel="manifest" href="assets/images/site.webmanifest"> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <!-- Google Fonts -->

    <link rel="stylesheet" href="{{ asset('front/css/modified-bootstrap.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('front/css/footere.css') }}" type="text/css" media="all">
    <style type="text/css">
        .gt_switcher_wrapper {
            padding-top: 5px !important;
        }
    </style>
    @yield('styles')
</head>
<body>
    <div class="loading" style="display: none;">Loading&#8230;</div>
    @include('layouts.header')
    <div id="app">
        <main class="main">
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
    <script src="{{ asset('front/js/jquery.min.js')}}" defer="defer"></script>
    <script src="{{ asset('front/js/bootstrap.bundle.min.js')}}" defer="defer"></script>
    <script src="{{ asset('front/js/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('front/js/global.js')}}" defer="defer"></script>
    @yield('script')
</body>
</html>
