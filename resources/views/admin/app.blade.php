<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--plugins-->
    {{-- <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" /> --}}
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />


    <!--Theme Styles-->
    {{-- <link href="{{ asset('assets/css/dark-theme.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('assets/css/light-theme.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('assets/css/semi-dark.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('assets/css/header-colors.css') }}" rel="stylesheet" /> --}}
    @yield('css')
    <title> Admin </title>
    <style>
        /* @media() */
        /* @media screen and (min-width: 480px) { */

        @media screen and (min-width: 780px) {
            #middleimage {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        @include('admin.header')
        @include('admin.sidebar')
        @yield('content')
    </div>
</body>
<!-- Bootstrap bundle JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
{{-- <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script> --}}
<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
{{-- <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script> --}}
<script src="{{ asset('assets/js/pace.min.js') }}"></script>
<!--app-->
<script src="{{ asset('assets/js/app.js') }}"></script>
@yield('js')
