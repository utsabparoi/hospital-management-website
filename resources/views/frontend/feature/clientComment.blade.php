<!--Start testimonial area-->
<section class="testimonial-area">
    <div class="container">
        <div class="sec-title mar0auto text-center">
            <h2>What Our Clients Say</h2>
            <!-- <span class="divider"></span> -->
            <!-- <span class="border"></span> -->
            <div class="hr-div">
                <hr>
            </div>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-12">
                <div class="testimonial-carousel">
                    <!--Start single testimonial item-->
                    @foreach ($review as $item)
                        <div class="single-testimonial-item text-center shadow" style="height:350px;">
                            <div class="img-box">
                                <div class="img-holder">
                                    <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"
                                        style="width: 79px;height: 78px; margin-left: auto; margin-right: auto;">
                                </div>
                                <div class="quote-box">
                                    <i class="fas fa-quote-left" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="text-holder">
                                <p>{!! $item->review !!}</p>
                            </div>
                            <div class="name">
                                <h3>{{ $item->name }}</h3>
                                <span>Age: {{ $item->age }} Years</span>
                            </div>
                        </div>
                    @endforeach
                    <!--End single testimonial item-->
                </div>
            </div>
            <!--End single item-->

        </div>
    </div>
</section>
<!--End testimonial area-->
