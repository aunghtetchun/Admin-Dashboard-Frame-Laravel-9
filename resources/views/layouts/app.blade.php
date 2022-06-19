<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- index-0.html  Tue, 07 Jan 2020 03:35:33 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aung Htet Chon') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset("assets/modules/bootstrap/css/bootstrap.min.css") }}">
{{--    <link rel="stylesheet" href="{{ asset("assets/modules/fontawesome/css/all.min.css") }}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset("assets/modules/bootstrap-social/bootstrap-social.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/modules/summernote/summernote-bs4.css") }}">

@yield('sample_cs')

<!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset("css/custom.css") }}">

    <link rel="stylesheet" href="{{ asset("assets/css/style.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/components.min.css") }}">


</head>

<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    @auth()
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <!-- Start app top navbar -->
        @include('layouts.nav_bar')
        <!-- Start main left sidebar menu -->
        @include('layouts.left_side_bar')
        <!-- Start app main Content -->
        <div class="main-content">
            @endauth
            <div class="section">
                @yield('content')
            </div>

            @auth()
        </div>

        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                <div class="bullet"></div>  <a href="templateshub.net">Templates Hub</a>
            </div>
            <div class="footer-right">

            </div>
        </footer>
        @endauth

    </div>
</div>

<!-- General JS Scripts -->
<script src="{{ asset("assets/bundles/lib.vendor.bundle.js") }}"></script>
<script src="{{ asset("js/CodiePie.js") }}"></script>

<!-- JS Libraies -->
<script src="{{ asset("assets/modules/apexcharts/apexcharts.min.js") }}"></script>
<script src="{{ asset("assets/modules/summernote/summernote-bs4.js") }}"></script>
<script src="{{ asset("assets/modules/select2/dist/js/select2.full.min.js") }}"></script>

@yield('sample_js')

<!-- Page Specific JS File -->
<script src="{{ asset("js/page/index-0.js") }}"></script>

<!-- Template JS File -->
<script src="{{ asset("js/scripts.js") }}"></script>
<script src="{{ asset("js/custom.js") }}"></script>
</body>

<!-- index-0.html  Tue, 07 Jan 2020 03:35:42 GMT -->
</html>
