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

            <!-- News Block -->
            {{-- @foreach ($article as $item) --}}
                <div class="news-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="news-details.php"><img src="{{ asset('frontend/images/resource/n11.jpg') }}" alt=""></a></figure>
                            <a href="news-details.php" class="date">12th May, 2019</a>
                        </div>
                        <div class="lower-content">
                            <h6><a href="news-details.php">Asgar Ali Hospital commemorated International Nurses Week</a></h6>
                            <div class="text">Asgar Ali Hospital commemorated ‘International Nurses Week’ from 7th- 12th May, 2019. On this occasion</div>
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
            {{-- @endforeach --}}

        </div>
    </div>
</section>
<!--End News Section Two -->
