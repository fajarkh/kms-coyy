<div class="col-lg-3">
    <div class="sidebar">
        <div class="sidebar_background"></div>

        <!-- Top Stories -->

        <div class="sidebar_section">
            <div class="sidebar_title_container">
                <div class="sidebar_title">Info Terbaru</div>
                <div class="sidebar_slider_nav">
                    <div class="custom_nav_container sidebar_slider_nav_container">
                        <div class="custom_prev custom_prev_top">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7px"
                                height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                                <polyline fill="#bebebe"
                                    points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 " />
                            </svg>
                        </div>
                        <ul id="custom_dots" class="custom_dots custom_dots_top">
                            <li class="custom_dot custom_dot_top active"><span></span></li>
                            <li class="custom_dot custom_dot_top"><span></span></li>
                            <li class="custom_dot custom_dot_top"><span></span></li>
                        </ul>
                        <div class="custom_next custom_next_top">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7px"
                                height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                                <polyline fill="#bebebe"
                                    points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 " />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar_section_content">

                <!-- Top Stories Slider -->
                <div class="sidebar_slider_container">
                    <div class="owl-carousel owl-theme sidebar_slider_top">

                        <!-- Top Stories Slider Item -->
                        <div class="owl-item">
                            @foreach (\App\Models\Budaya::first()->getLatestPengetahuan(4) as $item)
                                @php
                                    $model = class_basename($item);
                                    $imageSrc = $item->gambar ? asset('storage/uploads/' . Str::of($model)->snake() . '/' . $item->gambar) : asset('avision/images/no-image.png');
                                @endphp
                                <div class="side_post">
                                    <a href="{{ route('post.show', ['model' => $model, 'id' => $item->id]) }}">
                                        <div
                                            class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                            <div class="side_post_image">
                                                <div><img src="{{ $imageSrc }}"></div>
                                            </div>
                                            <div class="side_post_content">
                                                <div class="side_post_title">
                                                    {{ $item->nama }}
                                                </div>
                                                <small class="post_meta">
                                                    {{ preg_replace('/(?<!\ )[A-Z]/', ' $0', $model) }}
                                                    <br><i class="fa fa-clock-o"></i>
                                                    {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Advertising -->

        {{-- <div class="sidebar_section">
            <div class="advertising">
                <div class="advertising_background"
                    style="background-image:url({{ asset('avision/images/post_17.jpg') }})"></div>
                <div class="advertising_content d-flex flex-column align-items-start justify-content-end">
                    <div class="advertising_perc">-15%</div>
                    <div class="advertising_link"><a href="#">How Did van Gogh’s Turbulent Mind</a>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Newest Videos -->

        {{-- <div class="sidebar_section newest_videos">
            <div class="sidebar_title_container">
                <div class="sidebar_title">Video Terbaru</div>
                <div class="sidebar_slider_nav">
                    <div class="custom_nav_container sidebar_slider_nav_container">
                        <div class="custom_prev custom_prev_vid">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7px"
                                height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                                <polyline fill="#bebebe"
                                    points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 " />
                            </svg>
                        </div>
                        <ul id="custom_dots" class="custom_dots custom_dots_vid">
                            <li class="custom_dot custom_dot_vid active"><span></span></li>
                            <li class="custom_dot custom_dot_vid"><span></span></li>
                            <li class="custom_dot custom_dot_vid"><span></span></li>
                        </ul>
                        <div class="custom_next custom_next_vid">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7px"
                                height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                                <polyline fill="#bebebe"
                                    points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 " />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar_section_content">

                <!-- Sidebar Slider -->
                <div class="sidebar_slider_container">
                    <div class="owl-carousel owl-theme sidebar_slider_vid">
                        <!-- Newest Videos Slider Item -->
                        <div class="owl-item">

                            <!-- Newest Videos Post -->
                            <div class="side_post">
                                <a href="#">
                                    <div
                                        class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div class="side_post_image">
                                            <div><img src="{{ asset('avision/images/vid_1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="side_post_content">
                                            <div class="side_post_title">How Did van Gogh’s
                                                Turbulent Mind</div>
                                            <small class="post_meta">Katy Liu<span>Sep
                                                    29</span></small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Newest Videos Post -->
                            <div class="side_post">
                                <a href="#">
                                    <div
                                        class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div class="side_post_image">
                                            <div><img src="{{ asset('avision/images/vid_2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="side_post_content">
                                            <div class="side_post_title">How Did van Gogh’s
                                                Turbulent Mind</div>
                                            <small class="post_meta">Katy Liu<span>Sep
                                                    29</span></small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Newest Videos Post -->
                            <div class="side_post">
                                <a href="#">
                                    <div
                                        class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div class="side_post_image">
                                            <div><img src="{{ asset('avision/images/vid_3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="side_post_content">
                                            <div class="side_post_title">How Did van Gogh’s
                                                Turbulent Mind</div>
                                            <small class="post_meta">Katy Liu<span>Sep
                                                    29</span></small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Newest Videos Post -->
                            <div class="side_post">
                                <a href="#">
                                    <div
                                        class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div class="side_post_image">
                                            <div><img src="{{ asset('avision/images/vid_4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="side_post_content">
                                            <div class="side_post_title">How Did van Gogh’s
                                                Turbulent Mind</div>
                                            <small class="post_meta">Katy Liu<span>Sep
                                                    29</span></small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Advertising 2 -->
        {{-- <div class="sidebar_section">
            <div class="advertising_2">
                <div class="advertising_background"
                    style="background-image:url({{ asset('avision/images/post_18.jpg') }})"></div>
                <div class="advertising_2_content d-flex flex-column align-items-center justify-content-center">
                    <div class="advertising_2_link"><a href="#">Turbulent <span>Mind</span></a>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Future Events -->

        {{-- <div class="sidebar_section future_events">
            <div class="sidebar_title_container">
                <div class="sidebar_title">Kegiatan</div>
                <div class="sidebar_slider_nav">
                    <div class="custom_nav_container sidebar_slider_nav_container">
                        <div class="custom_prev custom_prev_events">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12"
                                xml:space="preserve">
                                <polyline fill="#bebebe"
                                    points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 " />
                            </svg>
                        </div>
                        <ul id="custom_dots" class="custom_dots custom_dots_events">
                            <li class="custom_dot custom_dot_events active"><span></span></li>
                            <li class="custom_dot custom_dot_events"><span></span></li>
                            <li class="custom_dot custom_dot_events"><span></span></li>
                        </ul>
                        <div class="custom_next custom_next_events">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12"
                                xml:space="preserve">
                                <polyline fill="#bebebe"
                                    points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 " />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar_section_content">

                <!-- Sidebar Slider -->
                <div class="sidebar_slider_container">
                    <div class="owl-carousel owl-theme sidebar_slider_events">
                        <!-- Future Events Slider Item -->
                        <div class="owl-item">

                            <!-- Future Events Post -->
                            <div class="side_post">
                                <a href="#">
                                    <div
                                        class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div
                                            class="event_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="event_day">13</div>
                                            <div class="event_month">apr</div>
                                        </div>
                                        <div class="side_post_content">
                                            <div class="side_post_title">How Did van Gogh’s
                                                Turbulent Mind</div>
                                            <small class="post_meta">Katy Liu<span>Sep
                                                    29</span></small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Future Events Post -->
                            <div class="side_post">
                                <a href="#">
                                    <div
                                        class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div
                                            class="event_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="event_day">27</div>
                                            <div class="event_month">apr</div>
                                        </div>
                                        <div class="side_post_content">
                                            <div class="side_post_title">How Did van Gogh’s
                                                Turbulent Mind</div>
                                            <small class="post_meta">Katy Liu<span>Sep
                                                    29</span></small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Future Events Post -->
                            <div class="side_post">
                                <a href="#">
                                    <div
                                        class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div
                                            class="event_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="event_day">02</div>
                                            <div class="event_month">may</div>
                                        </div>
                                        <div class="side_post_content">
                                            <div class="side_post_title">How Did van Gogh’s
                                                Turbulent Mind</div>
                                            <small class="post_meta">Katy Liu<span>Sep
                                                    29</span></small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Future Events Post -->
                            <div class="side_post">
                                <a href="#">
                                    <div
                                        class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div
                                            class="event_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="event_day">09</div>
                                            <div class="event_month">may</div>
                                        </div>
                                        <div class="side_post_content">
                                            <div class="side_post_title">How Did van Gogh’s
                                                Turbulent Mind</div>
                                            <small class="post_meta">Katy Liu<span>Sep
                                                    29</span></small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div> --}}
    </div>
</div>
