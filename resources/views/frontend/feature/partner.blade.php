<!-- Clients Section -->
<section class="clients-section">
    <img class="wav_0_tb_footer2" src="{{ asset('frontend/images/foot-down-bg.svg') }}" alt="">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Our Corporate Partners</h2>
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
                            <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"
                            style="width: 152px;height: 72px; margin-left: auto; margin-right: auto;">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--End Clients Section -->
