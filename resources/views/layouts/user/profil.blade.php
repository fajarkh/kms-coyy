<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profil</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('avision/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('avision/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('avision/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/category.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/category_responsive.css') }}">
    @livewireStyles
</head>

<body>

    <div class="super_container">
        @include('layouts.user.header')
        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll"
                data-image-src="{{ asset('avision/images/profil.jpg') }}" data-speed="0.8"></div>
        </div>
        <div class="page_content">
            <div class="container">
                <div class="row row-lg-eq-height">
                    <!-- Main Content -->
                    @livewire('profil')
                    @include('layouts.user.sidebar')
                </div>
            </div>
            <!-- Footer -->
            @include('layouts.user.footer')
