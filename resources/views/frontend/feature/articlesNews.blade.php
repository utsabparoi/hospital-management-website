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

        {{-- <div class="row">
            <!--Start single item-->
            <div class="col-md-12">
                <div class="testimonial-carousel">
                    <!--Start single testimonial item-->
                    @foreach ($articles as $item)
                        <div class="single-testimonial-item text-center">
                            <div class="image-box">
                                <figure class="image"><a href="news-details.php"><img src="{{ asset($item->image) }}" alt=""></a></figure>
                                <a href="news-details.php" class="date">{{ $item->date }}</a>
                            </div>
                            <div class="lower-content">
                                <h6><a href="news-details.php">{{ $item->title }}</a></h6>
                                <div class="text">{!! Str::limit(strip_tags($item->description), 110) !!}</div>
                                <br>
                                <a class="readmore" href="#">Read More</a>
                            </div>
                        </div>
                    @endforeach
                    <!--End single testimonial item-->
                </div>
            </div>
            <!--End single item-->

        </div> --}}
        <div class="row">
            <!-- News Block -->
            @foreach ($articles as $item)
                <div class="news-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="news-details.php"><img src="{{ asset($item->image) }}" alt=""></a></figure>
                            <a href="news-details.php" class="date"> {{ $item->date }} </a>
                        </div>
                        <div class="lower-content">
                            <h6><a href="news-details.php">{{ $item->title }}</a></h6>
                            <div class="text">{!! Str::limit(strip_tags($item->description), 110) !!}</div>
                            <br>
                            <a class="readmore" href="#">Read More</a>
                            <!-- <div class="post-info">
                                <div class="post-author">By Admin Rose</div>
                                <ul class="post-option">
                                    <li><a href="news-details.php">0 <i class="fas fa-heart"></i></a></li>
                                    <li><a href="news-details.php">0 <i class="fas fa-comments"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!--End News Section Two -->
