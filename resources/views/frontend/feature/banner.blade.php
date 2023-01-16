<!-- Bnner Section -->
<section class="banner-section">
    <div class="banner-carousel owl-carousel owl-theme default-arrows dark">
        @foreach ($sliders as $item)
            <div class="slide-item" style="background-image: url({{ asset( $item->image )}});">
                <div class="auto-container">
                    <div class="content-outer">
                        <div class="content-box">
                            <span class="title"> {{$item->title}} </span>
                            <h2>{{ $item->subtitle }}</h2>
                            <div>{!! $item->description !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <div class="slide-item" style="background-image: url({{asset( "frontend/images/main-slider/test/1.jpg" )}});">
            <div class="auto-container">
                <div class="content-outer">
                    <div class="content-box">
                        <span class="title">Consultants</span>
                        <h2>We are dedicated to the <span>Ultimate Care</span> of our patients</h2>
                        <div class="text">while improving performance and achieving compliance.</div>
                    </div>
                </div>
            </div>
        </div> --}}


        <!-- New -->
        <!-- Slide Item -->
        <!-- <div class="slide-item" id="vdo-slider">

            <div class="content-outer">

                <div class="example-marquee">
                    <div id="ytbg" data-ytbg-fade-in="true" data-youtube="https://www.youtube.com/watch?v=Jy9AgL-D6H4" class="youtube-background video-background" style="height: 100%; width: 100%; z-index: 0; position: absolute;
                     overflow: hidden; inset: 0px; pointer-events: none;
                    background-image: url(&quot;https://img.youtube.com/vi/Jy9AgL-D6H4/maxresdefault.jpg&quot;); background-size:
                     cover; background-repeat: no-repeat; background-position:
                    center center;">
                        <iframe frameborder="0" allow="autoplay; mute" src="https://www.youtube.com/embed/Jy9AgL-D6H4?&amp;enablejsapi=1&amp;disablekb=1&amp;controls=0&amp;rel=0&amp;
                     iv_load_policy=3&amp;cc_load_policy=0&amp;playsinline=1&amp;showinfo=0&amp;modestbranding=1&amp;fs=0&amp;mute=1&amp;
                     autoplay=1&amp;loop=1" id="Jy9AgL-D6H4-6142" style="top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);
                      position: absolute; opacity: 1; width: 1719px; height: 966.938px;"></iframe>
                    </div>
                    <div class="you-tube-coad"></div>
                </div>
            </div>
        </div> -->

        <!-- Slide Item -->
        {{-- <div class="slide-item" id="vdo-slider">
            <div class="auto-container">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="bg-video-wrap embed-responsive-16by9">
                            <video autoplay muted loop id="myVideo">
                                <source src="{{asset( "frontend/video/landing-vdo.mp4" )}}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- End Bnner Section -->
