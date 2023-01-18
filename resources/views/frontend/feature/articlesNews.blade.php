<!-- News Section Two -->
<section class="news-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title text-center">
            <!-- <span class="title ">OUR latest BLOG</span> -->
            <h2>Articles and News</h2>
            <div class="hr-div">
                <hr>
            </div>
            <!-- <span class="divider text-center"></span> -->
        </div>

        <div class="row">
            <!--Start single item-->
            <div class="col-sm-12">
                <div class="testimonial-carousel">
                    <!--Start single testimonial item-->
                    @foreach ($articles as $item)
                        <div class="single-testimonial news-block shadow">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="news-details.php">
                                            <img src="{{ asset($item->image) }}" alt="" style="width: 300px; height: 200px;">
                                        </a>
                                        <a href="{{route('news-details', $item->id)}}" class="date"> {{ $item->date }} </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h6><a href="{{route('news-details', $item->id)}}">{{ $item->title }}</a></h6>
                                    <div class="text">{!! Str::limit(strip_tags($item->description), 110) !!}</div>
                                    <a class="readmore" href="{{route('news-details', $item->id)}}">Read More</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    <!--End single testimonial item-->
                </div>
            </div>
            <!--End single item-->
    </div>
</section>
<!--End News Section Two -->
