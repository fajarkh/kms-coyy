<!DOCTYPE html>
<html lang="en">
{{-- {{dd($post)}} --}}

<head>
    <title>{{ $post->kategori . ' | ' . $post->nama }}</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/post.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/post_responsive.css') }}">
</head>

<body>
    <div class="super_container">

        <!-- Header -->
        @include('layouts.user.header')

        <!-- Home -->

        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll"
                data-image-src="{{ asset('avision/images/post.jpg') }}" data-speed="0.8"></div>
            <div class="home_content">
                <div class="post_title">{{ $post->nama }}</div>
            </div>
        </div>

        <!-- Page Content -->

        <div class="page_content">
            <div class="container">
                <div class="row row-lg-eq-height">

                    <!-- Post Content -->

                    <div class="col-lg-9">
                        <div class="post_content">

                            <!-- Top Panel -->
                            <div
                                class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
                                <div class="author_image">
                                    <div><img src="{{ asset('avision/images/author.jpg') }}" alt=""></div>
                                </div>
                                <div class="post_meta">
                                    <a href="#">{{ $post->budaya->admin->name }}</a>
                                    <span>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM Y') }}</span>
                                </div>
                                <div class="post_share ml-sm-auto">
                                    <span>Bagikan</span>
                                    <ul class="post_share_list">
                                        <li class="post_share_item">
                                            <a href="{{ $shareLink['facebook'] }}">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="post_share_item"><a href="{{ $shareLink['twitter'] }}">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="post_share_item"><a href="{{ $shareLink['whatsapp'] }}">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="post_share_item"><a href="{{ $shareLink['telegram'] }}">
                                                <i class="fa fa-telegram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Post Body -->

                            <div class="post_body">
                                <figure>
                                    @php $imageSrc = $post->gambar ? asset('storage/uploads/' . Str::of($post->kategori)->snake() . '/' . $post->gambar) : asset('avision/images/no-image.png'); @endphp
                                    <img src="{{ $imageSrc }}">
                                    <figcaption>{{ $post->nama }}</figcaption>
                                </figure>
                                <div class="deskripsi">
                                    {!! $post->deskripsi !!}
                                </div>
                                <!-- Post Tags -->
                                {{-- <div class="post_tags">
                                    <ul>
                                        <li class="post_tag"><a href="#">Liberty</a></li>
                                        <li class="post_tag"><a href="#">Manual</a></li>
                                        <li class="post_tag"><a href="#">Interpretation</a></li>
                                        <li class="post_tag"><a href="#">Recommendation</a></li>
                                    </ul>
                                </div> --}}
                            </div>

                            <!-- Bottom Panel -->
                            <div
                                class="post_panel bottom_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="author_image">
                                    <div><img src="{{ asset('avision/images/author.jpg') }}" alt=""></div>
                                </div>
                                <div class="post_meta">
                                    <a href="#">{{ $post->budaya->admin->name }}</a>
                                    <span>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM Y') }}</span>
                                </div>
                                <div class="post_share ml-sm-auto">
                                    <span>Bagikan</span>
                                    <ul class="post_share_list">
                                        <li class="post_share_item">
                                            <a href="{{ $shareLink['facebook'] }}">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="post_share_item"><a href="{{ $shareLink['twitter'] }}">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="post_share_item"><a href="{{ $shareLink['whatsapp'] }}">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="post_share_item"><a href="{{ $shareLink['telegram'] }}">
                                            <i class="fa fa-telegram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Similar Posts -->
                            {{-- <div class="similar_posts">
                                <div class="grid clearfix">

                                    <!-- Small Card With Image -->
                                    <div class="card card_small_with_image grid-item">
                                        <img class="card-img-top" src="{{ asset('avision/images/post_25.jpg') }}"
                                            alt="https://unsplash.com/@jakobowens1">
                                        <div class="card-body">
                                            <div class="card-title card-title-small"><a href="post.html">How Did van
                                                    Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                                    Physics?</a></div>
                                            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017
                                                    at 9:48 am</span></small>
                                        </div>
                                    </div>

                                    <!-- Small Card With Image -->
                                    <div class="card card_small_with_image grid-item">
                                        <img class="card-img-top" src="{{ asset('avision/images/post_2.jpg') }}"
                                            alt="https://unsplash.com/@jakobowens1">
                                        <div class="card-body">
                                            <div class="card-title card-title-small"><a href="post.html">How Did van
                                                    Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                                    Physics?</a></div>
                                            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017
                                                    at 9:48 am</span></small>
                                        </div>
                                    </div>

                                    <!-- Small Card With Image -->
                                    <div class="card card_small_with_image grid-item">
                                        <img class="card-img-top" src="{{ asset('avision/images/post_26.jpg') }}"
                                            alt="https://unsplash.com/@jakobowens1">
                                        <div class="card-body">
                                            <div class="card-title card-title-small"><a href="post.html">How Did van
                                                    Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                                    Physics?</a></div>
                                            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017
                                                    at 9:48 am</span></small>
                                        </div>
                                    </div>

                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Sidebar -->
                    @include('layouts.user.sidebar')
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('layouts.user.footer')
