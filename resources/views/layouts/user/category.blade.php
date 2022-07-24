<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kategori {{ $kategori }}</title>
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
</head>

<body>

    <div class="super_container">

        <!-- Header -->
        @include('layouts.user.header')

        <!-- Home -->

        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll"
                data-image-src="{{ asset('avision/images/category.jpg') }}" data-speed="0.8"></div>
        </div>

        <!-- Page Content -->

        <div class="page_content">
            <div class="container">
                <div class="row row-lg-eq-height">

                    <!-- Main Content -->

                    <div class="col-lg-9">
                        <div class="main_content">

                            <!-- Category -->

                            <div class="category">
                                <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                    <div class="section_title">Ketegori</div>
                                    <div class="section_tags ml-auto">
                                        <ul>
                                            <li class="{{ request()->is('*Semua*') ? 'active' : '' }}"><a
                                                    href="{{ route('kategori', 'Semua') }}">semua</a></li>
                                            <li class="{{ request()->is('*CeritaRakyat*') ? 'active' : '' }}"><a
                                                    href="{{ route('kategori', 'CeritaRakyat') }}">cerita rakyat</a>
                                            </li>
                                            <li class="{{ request()->is('*Sejarah*') ? 'active' : '' }}"><a
                                                    href="{{ route('kategori', 'Sejarah') }}">sejarah</a></li>
                                            <li class="{{ request()->is('*AlatMusik*') ? 'active' : '' }}"><a
                                                    href="{{ route('kategori', 'AlatMusik') }}">alat musik</a></li>
                                            <li class="{{ request()->is('*Senjata*') ? 'active' : '' }}"><a
                                                    href="{{ route('kategori', 'Senjata') }}">senjata</a></li>
                                            <li class="{{ request()->is('*Adat*') ? 'active' : '' }}"><a
                                                    href="{{ route('kategori', 'Adat') }}">adat</a></li>
                                        </ul>
                                    </div>
                                    <div class="section_panel_more">
                                        <ul>
                                            <li class="{{ request()->is('*Tradisi*') ? 'active' : '' }}">tradisi
                                                <ul>
                                                    <li><a href="{{ route('kategori', 'TradisiTabuko') }}">tradisi
                                                            tabuko</a></li>
                                                    <li><a href="{{ route('kategori', 'TradisiHudoq') }}">tradisi
                                                            hudoq</a></li>
                                                    <li><a href="{{ route('kategori', 'TradisiNugal') }}">tradisi
                                                            nugal</a></li>
                                                    <li><a href="{{ route('kategori', 'TradisiBelikong') }}">tradisi
                                                            belikong</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="section_content">
                                    <div class="grid clearfix">

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_10.jpg') }}"
                                                alt="">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did van
                                                        Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                                        Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did van
                                                        Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                                        Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_15.jpg') }}"
                                                alt="">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did van
                                                        Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                                        Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_13.jpg') }}"
                                                alt="https://unsplash.com/@jakobowens1">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did van
                                                        Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                                        Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Background -->
                                        <div class="card card_default card_small_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_11.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Background -->
                                        <div class="card card_default card_small_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_16.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_14.jpg') }}"
                                                alt="">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Default Card With Background -->
                                        <div class="card card_default card_default_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_12.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                        <!-- Default Card With Background -->
                                        <div class="card card_default card_default_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_6.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                        <!-- Small Card With Background -->
                                        <div class="card card_default card_small_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_19.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_5.jpg') }}"
                                                alt="">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_10.jpg') }}"
                                                alt="">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_20.jpg') }}"
                                                alt="https://unsplash.com/@jakobowens1">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Background -->
                                        <div class="card card_default card_small_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_4.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Background -->
                                        <div class="card card_default card_small_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_21.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_22.jpg') }}"
                                                alt="">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Default Card With Background -->
                                        <div class="card card_default card_default_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_23.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                        <!-- Default Card With Background -->
                                        <div class="card card_default card_default_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_24.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="post.html">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="load_more">
                            <div id="load_more" class="load_more_button text-center trans_200">Load More</div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    @include('layouts.user.sidebar')
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('layouts.user.footer')
