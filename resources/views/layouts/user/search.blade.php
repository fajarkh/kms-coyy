<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hasil Pencarian : {{ $searchterm }}</title>
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
                                    <div class="section_title">Ada {{ $searchResults->count() }} hasil untuk pencarian
                                        <b>"{{ $searchterm }}"</b>
                                    </div>
                                    <div class="section_tags ml-auto"></div>
                                </div>
                                <div class="section_content">
                                    <div class="grid clearfix">
                                        @if (isset($searchResults))
                                            @if (!$searchResults->isEmpty())
                                                @foreach ($searchResults->chunk(4) as $modelSearchResults)
                                                    @foreach ($modelSearchResults as $searchResults)
                                                        @php
                                                            $item = $searchResults->searchable;
                                                            $imageSrc = $item->gambar ? asset('storage/uploads/' . Str::of($item->kategori)->snake() . '/' . $item->gambar) : asset('avision/images/no-image.png');
                                                        @endphp
                                                        @if ($loop->index == 0)
                                                            <div class="card card_small_with_image grid-item">
                                                                <img class="card-img-top" src="{{ $imageSrc }}"
                                                                    style="filter: brightness(75%)">
                                                                <div class="card-body">
                                                                    <div class="card-title card-title-small">
                                                                        <a
                                                                            href="{{ $searchResults->url }}">{{ $item->nama }}</a>
                                                                    </div>
                                                                    <small class="post_meta">
                                                                        <a href="#">Admin</a>
                                                                        <span>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</span>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        @elseif ($loop->index == 1)
                                                            <div
                                                                class="card card_default card_small_with_background grid-item">
                                                                <div class="card_background"
                                                                    style="background-image:url({{ $imageSrc }}); filter: brightness(75%)">
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="card-title card-title-small">
                                                                        <a
                                                                            href="{{ $searchResults->url }}">{{ $item->nama }}</a>
                                                                    </div>
                                                                    <small class="post_meta">
                                                                        <a href="#">Admin</a>
                                                                        <span>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</span>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        @elseif ($loop->index == 2)
                                                            <div class="card card_small_with_image grid-item">
                                                                <img class="card-img-top" src="{{ $imageSrc }}"
                                                                    style="filter: brightness(75%)">
                                                                <div class="card-body">
                                                                    <div class="card-title card-title-small">
                                                                        <a
                                                                            href="{{ $searchResults->url }}">{{ $item->nama }}</a>
                                                                    </div>
                                                                    <small class="post_meta">
                                                                        <a href="#">Admin</a>
                                                                        <span>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</span>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        @elseif ($loop->index == 3)
                                                            <div class="card card_small_with_image grid-item">
                                                                <img class="card-img-top"src="{{ $imageSrc }}"
                                                                    style="filter: brightness(75%)">
                                                                <div class="card-body">
                                                                    <div class="card-title card-title-small">
                                                                        <a
                                                                            href="{{ $searchResults->url }}">{{ $item->nama }}</a>
                                                                    </div>
                                                                    <small class="post_meta">
                                                                        <a href="#">Admin</a>
                                                                        <span>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</span>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    @include('layouts.user.sidebar')
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('layouts.user.footer')
