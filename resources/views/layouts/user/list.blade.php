@include('layouts.user.header')
<div class="page_content">
    <div class="container">
        <div class="row row-lg-eq-height">
            <div class="col-lg-9">
                <div class="main_content">
                    <div class="category">
                        <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                            <div class="section_title">sdsd</div>
                        </div>
                        <div class="section_content">
                            <div class="grid clearfix">

                                {{-- @for ($i = 0; $i < 3; $i++) --}}
                                    <div class="card card_small_with_image grid-item">
                                        <img class="card-img-top" src="{{ asset('avision/images/post_15.jpg') }}"
                                            alt="">
                                        <div class="card-body">
                                            <div class="card-title card-title-small"><a href="post.html">keterangan
                                                    gambar
                                                    </a>
                                            </div>
                                            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at
                                                    9:48 am</span></small>
                                        </div>
                                    </div>
                                    <div class="card card_small_with_image grid-item">
                                        <img class="card-img-top" src="{{ asset('avision/images/post_15.jpg') }}"
                                            alt="">
                                        <div class="card-body">
                                            <div class="card-title card-title-small"><a href="post.html">keterangan
                                                    gambar
                                                </a>
                                            </div>
                                            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at
                                                    9:48 am</span></small>
                                        </div>
                                    </div>
                                {{-- @endfor --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="load_more">
                    <div id="load_more" class="load_more_button text-center trans_200">Load More</div>
                </div>
            </div>
            @include('layouts.user.sidebar')
        </div>
    </div>
</div>
@yield('content')
@include('layouts.user.footer')
