<!-- Clients Section -->
<section class="clients-section">
    <img class="wav_0_tb_footer2" src="{{ asset('frontend/images/foot-down-bg.svg') }}" alt="">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Our Corporate Partner</h2>
            <!-- <span class="divider"></span> -->
            <div class="hr-div">
                <hr>
            </div>
        </div>

        <!-- Sponsors Outer -->
        <div class="sponsors-outer">
            <!--clients carousel-->
            <ul class="clients-carousel owl-carousel owl-theme">
                @foreach ($partner as $item)
                    <li class="slide-item">
                        <a href="#">
                            {{-- <h5>{{ $item->name }}</h5> --}}
                            <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                        </a>
                    </li>
                @endforeach

            </ul>
            <ul class="clients-carousel owl-carousel owl-theme">
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (21) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (22) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (23) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (24) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (25) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (26) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (27) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (28) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (29) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (30) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (31) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (32) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (33) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (34) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (35) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (36) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (37) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (38) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (39) (Custom).png') }}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{ asset('frontend/images/clients/Corporate1 (40) (Custom).png') }}" alt=""></a> </li>
            </ul>
        </div>
    </div>
</section>
<!--End Clients Section -->
