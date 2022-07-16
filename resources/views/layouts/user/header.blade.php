<!DOCTYPE html>
<html lang="en">

<head>
    <title>KMS Suku Dayak</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('avision/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('avision/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('avision/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/responsive.css') }}">
</head>

<body>

    <div class="super_container">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo"><a href="#">KMS Suku Dayak</a></div>
                            <nav class="main_nav">
                                <ul>
                                    <li class="active"><a href="#">Beranda</a></li>
                                    <li><a href="#">Cerita Rakyat</a></li>
                                    <li><a href="#">Sejarah</a></li>
                                    <li><a href="#">Alat Musik</a></li>
                                    <li><a href="#">Adat</a></li>
                                    <li><a href="#">Senjata</a></li>
                                    <li><a href="#">Tradisi</a></li>
                                </ul>
                            </nav>
                            <div class="search_container ml-auto">
                                {{-- <div class="weather">
                                    <div class="temperature">+10°</div>
                                    <img class="weather_icon" src="{{ asset('avision/images/cloud.png') }}" alt="">
                                </div> --}}
                                <form action="#">
                                    <input type="search" class="header_search_input" required="required"
                                        placeholder="Cari...">
                                    <img class="header_search_icon" src="{{ asset('avision/images/search.png') }}"
                                        alt="">
                                </form>

                            </div>
                            <div class="hamburger ml-auto menu_mm">
                                <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>