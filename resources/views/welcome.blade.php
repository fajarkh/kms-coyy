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
        @include('layouts.user.header')
        <div class="home">
            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">
                    <!-- Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background"
                            style="background-image:url({{ asset('avision/images/home_slider.jpg') }})"></div>
                        <div class="home_slider_content_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_slider_content">
                                            <div class="home_slider_item_title">
                                                <a href="#">SISTEM MANAJEMEN PENGETAHUAN TRADISI SUKU BUDAYA DAYAK BAHAU </a>
                                            </div>
                                            <div class="home_slider_item_link">
                                                <a href="#" class="trans_200">Baca Selengkapnya
                                                    <svg version="1.1" id="link_arrow_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                        y="0px" width="19px" height="13px" viewBox="0 0 19 13"
                                                        enable-background="new 0 0 19 13" xml:space="preserve">
                                                        <polygon fill="#FFFFFF"
                                                            points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 " />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Similar Posts -->
                        <div class="similar_posts_container">
                            <div class="container">
                                <div class="row d-flex flex-row align-items-end">
                                    <!-- Similar Post -->
                                    {{-- <div class="col-lg-3 col-md-6 similar_post_col">
                                        <div class="similar_post trans_200">
                                            <a href="#">How Did van Gogh’s Turbulent Mind Depict One of the
                                                Most</a>
                                        </div>
                                    </div> --}}

                                    <!-- Similar Post -->
                                    {{-- <div class="col-lg-3 col-md-6 similar_post_col">
                                        <div class="similar_post trans_200">
                                            <a href="#">How Did van Gogh’s Turbulent Mind Depict One of the
                                                Most</a>
                                        </div>
                                    </div> --}}

                                    <!-- Similar Post -->
                                    {{-- <div class="col-lg-3 col-md-6 similar_post_col">
                                        <div class="similar_post trans_200">
                                            <a href="#">How Did van Gogh’s Turbulent Mind Depict One of the
                                                Most</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page_content">
            <div class="container">
                <div class="row row-lg-eq-height">

                    <!-- Main Content -->

                    <div class="col-lg-9">
                        <div class="main_content">

                            <!-- Blog Section - Don't Miss -->

                            <div class="blog_section">
                                <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                    <div class="section_title">Beranda</div>
                                    {{-- <div class="section_tags ml-auto">
                                        <ul>
                                            <li class="active"><a href="#">Semua</a></li>
                                            <li><a href="#">History</a></li>
                                        </ul>
                                    </div> --}}
                                    {{-- <div class="section_panel_more">
                                        <ul>
                                            <li>lebih
                                                <ul>
                                                    <li><a href="#">new look 2018</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="section_content">
                                    <div class="grid clearfix">

                                        <!-- Largest Card With Image -->
                                        <div class="card card_largest_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_1.jpg') }}"
                                                alt="https://unsplash.com/@cjtagupa">
                                            <div class="card-body">
                                                <div class="card-title"><a href="#">How Did van Gogh’s
                                                        Turbulent Mind Depict One of the Most Complex Concepts in
                                                        Physics?</a></div>
                                                <p class="card-text">Pick the yellow peach that looks like a
                                                    sunset with its red, orange, and pink coat skin, peel it off with
                                                    your teeth. Sink them into unripened...</p>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
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
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_2.jpg') }}"
                                                alt="https://unsplash.com/@jakobowens1">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_3.jpg') }}"
                                                alt="https://unsplash.com/@jannerboy62">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Default Card No Image -->

                                        <div class="card card_default card_default_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                        <!-- Default Card No Image -->

                                        <div class="card card_default card_default_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                        <!-- Default Card No Image -->

                                        <div class="card card_default card_default_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Blog Section - What's Trending -->

                            <div class="blog_section">
                                <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                    {{-- <div class="section_title">Apa Yang Populer</div> --}}
                                    {{-- <div class="section_tags ml-auto">
                                        <ul>
                                            <li class="active"><a href="#">semua</a></li>
                                            <li><a href="#">history</a></li>
                                        </ul>
                                    </div> --}}
                                    {{-- <div class="section_panel_more">
                                        <ul>
                                            <li>lebih
                                                <ul>
                                                    <li><a href="#">new look 2018</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                                {{-- <div class="section_content">
                                    <div class="grid clearfix">

                                        <!-- Large Card With Background -->
                                        <div class="card card_large_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_8.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title"><a href="#">How Did van Gogh’s
                                                        Turbulent Mind Depict One of the Most Complex Concepts in
                                                        Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Large Card With Image -->
                                        <div class="card grid-item card_large_with_image">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_9.jpg') }}"
                                                alt="">
                                            <div class="card-body">
                                                <div class="card-title"><a href="#">How Did van Gogh’s
                                                        Turbulent Mind Depict One of the Most Complex Concepts in
                                                        Physics?</a></div>
                                                <p class="card-text">Pick the yellow peach that looks like a
                                                    sunset with its red, orange, and pink coat skin, peel it off with
                                                    your teeth. Sink them into unripened...</p>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Default Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_5.jpg') }}"
                                                alt="">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Default Card With Background -->

                                        <div class="card card_default card_default_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_6.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                        <!-- Default Card No Image -->
                                        <div class="card card_default card_default_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                        <!-- Default Card No Image -->
                                        <div class="card card_default card_default_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                        <!-- Default Card With Background -->

                                        <div class="card card_default card_default_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_7.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                    </div>

                                </div> --}}
                            </div>

                            <!-- Blog Section - Videos -->

                            <div class="blog_section">
                                {{-- <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                    <div class="section_title">Video Paling Populer</div>
                                </div> --}}
                                {{-- <div class="section_content">
                                    <div class="row">
                                        <div class="col">
                                            <div class="videos">
                                                <div class="player_container">
                                                    <div id="P1" class="player"
                                                        data-property="{videoURL:'2ScS5kwm7nI',containment:'self',startAt:0,mute:false,autoPlay:false,loop:false,opacity:1}">
                                                    </div>
                                                </div>
                                                <div class="playlist">
                                                    <div class="playlist_background"></div>

                                                    <!-- Video -->
                                                    <div class="video_container video_command active"
                                                        onclick="jQuery('#P1').YTPChangeVideo({videoURL: '2ScS5kwm7nI', mute:false, addRaster:true})">
                                                        <div
                                                            class="video d-flex flex-row align-items-center justify-content-start">
                                                            <div class="video_image">
                                                                <div><img
                                                                        src="{{ asset('avision/images/video_1.jpg') }}"
                                                                        alt=""></div><img class="play_img"
                                                                    src="{{ asset('avision/images/play.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="video_content">
                                                                <div class="video_title">How Did van Gogh’s
                                                                    Turbulent Mind</div>
                                                                <div class="video_info"><span>1.2M
                                                                        views</span><span>Sep 29</span></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Video -->
                                                    <div class="video_container video_command"
                                                        onclick="jQuery('#P1').YTPChangeVideo({videoURL: 'BzMLA8YIgG0', mute:false, addRaster:true})">
                                                        <div
                                                            class="video d-flex flex-row align-items-center justify-content-start">
                                                            <div class="video_image">
                                                                <div><img
                                                                        src="{{ asset('avision/images/video_2.jpg') }}"
                                                                        alt=""></div><img class="play_img"
                                                                    src="{{ asset('avision/images/play.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="video_content">
                                                                <div class="video_title">How Did van Gogh’s
                                                                    Turbulent Mind</div>
                                                                <div class="video_info"><span>1.2M
                                                                        views</span><span>Sep 29</span></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Video -->
                                                    <div class="video_container video_command"
                                                        onclick="jQuery('#P1').YTPChangeVideo({videoURL: 'bpbcSdqvtUQ', mute:false, addRaster:true})">
                                                        <div
                                                            class="video d-flex flex-row align-items-center justify-content-start">
                                                            <div class="video_image">
                                                                <div><img
                                                                        src="{{ asset('avision/images/video_3.jpg') }}"
                                                                        alt=""></div><img class="play_img"
                                                                    src="{{ asset('avision/images/play.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="video_content">
                                                                <div class="video_title">How Did van Gogh’s
                                                                    Turbulent Mind</div>
                                                                <div class="video_info"><span>1.2M
                                                                        views</span><span>Sep 29</span></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Video -->
                                                    <div class="video_container video_command"
                                                        onclick="jQuery('#P1').YTPChangeVideo({videoURL: 'UjYemgbhJF0', mute:false, addRaster:true})">
                                                        <div
                                                            class="video d-flex flex-row align-items-center justify-content-start">
                                                            <div class="video_image">
                                                                <div><img
                                                                        src="{{ asset('avision/images/video_4.jpg') }}"
                                                                        alt=""></div><img class="play_img"
                                                                    src="{{ asset('avision/images/play.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="video_content">
                                                                <div class="video_title">How Did van Gogh’s
                                                                    Turbulent Mind</div>
                                                                <div class="video_info"><span>1.2M
                                                                        views</span><span>Sep 29</span></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                            <!-- Blog Section - Latest -->

                            <div class="blog_section">
                                {{-- <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                    <div class="section_title">Artikel Terbaru</div>
                                </div> --}}
                                {{-- <div class="section_content">
                                    <div class="grid clearfix">

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_10.jpg') }}"
                                                alt="">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_15.jpg') }}"
                                                alt="">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card With Image -->
                                        <div class="card card_small_with_image grid-item">
                                            <img class="card-img-top" src="{{ asset('avision/images/post_13.jpg') }}"
                                                alt="https://unsplash.com/@jakobowens1">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
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
                                                <div class="card-title card-title-small"><a href="#">How Did
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
                                                <div class="card-title card-title-small"><a href="#">How Did
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
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in Physics?</a></div>
                                                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29,
                                                        2017 at 9:48 am</span></small>
                                            </div>
                                        </div>

                                        <!-- Small Card Without Image -->
                                        <div class="card card_default card_small_no_image grid-item">
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
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
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>

                                        <!-- Default Card With Background -->
                                        <div class="card card_default card_default_with_background grid-item">
                                            <div class="card_background"
                                                style="background-image:url({{ asset('avision/images/post_6.jpg') }})">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="#">How Did
                                                        van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                            </div>
                                        </div>
                                    </div>

                                </div> --}}
                            </div>

                        </div>
                        {{-- <div class="load_more">
                            <div id="load_more" class="load_more_button text-center trans_200">Selengkapnya</div>
                        </div> --}}
                    </div>
                    <!-- Sidebar -->
                    @include('layouts.user.sidebar')
                </div>
            </div>
        </div>
        @include('layouts.user.footer')
    </div>
