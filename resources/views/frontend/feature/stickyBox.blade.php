<!-- Left Sticky Box For Desktop Start -->
{{-- <div id="myID" class="bottomMenu hide">
    <div class="left-sticky-box-new animated slideInDown">
        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <a href="tel:10602">
                        <div class="col-md-2">
                            <lottie-player src="{{ asset('frontend/package/lf20_wmsbdykq.json') }}" background="transparent" speed="1" style="width: 120px; height: 120px;" loop autoplay></lottie-player>
                            <!--<img src="images/icons/24hour.png" alt="">-->
                        </div>
                        <div class="col-md-10 mt-5 pt-2">
                            <p style="margin-top: 13px;margin-left: 30px;">Hopeline 10602</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <div class="row" style="margin-top: -30px; margin-left: 15px;">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-2">
                        <lottie-player src="{{ asset('frontend/package/lf20_uDilo5.json') }}" background="transparent" speed="1" style="width: 60px; height: 60px;" loop autoplay></lottie-player>
                        <!--<img src="images/icons/chat-icon.png" alt="">-->
                    </div>
                    <div class="col-md-10">
                        <p style="margin-top: 15px; margin-left: -50px;">Chat With Us</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}
<div class="left-sticky-box">
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <a href="tel:10602">
                    <div class="col-md-2">
                        <lottie-player src="{{ asset('/frontend/lord-icon/helpline.json') }}" background="transparent" speed="1" style="width: 120px; height: 120px;" loop autoplay></lottie-player>
                        <!--<img src="images/icons/24hour.png" alt="">-->
                    </div>
                    <div class="col-md-10 mt-5 pt-2">
                        <p style="margin-top: 13px;margin-left: 30px;">Hopeline {{$WebsiteInformation->hot_line}}</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <div class="row" style="margin-top: -30px; margin-left: 15px;">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-2">
                    <lottie-player src="{{ asset('/frontend/lord-icon/chat.json') }}" background="transparent" speed="1" style="width: 60px; height: 60px;" loop autoplay></lottie-player>
                    <!--<img src="images/icons/chat-icon.png" alt="">-->
                </div>
                <div class="col-md-10">
                    <p style="margin-top: 15px; margin-left: -50px;">Chat With Us</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Left Sticky Box For Desktop Ends -->

<!-- Left Sticky Box For Mobile Starts -->
<div class="left-sticky-box-mb">
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <a href="tel:10602">
                    <div class="col-md-2">
                        <lottie-player src="{{ asset('/frontend/lord-icon/helpline.json') }}" background="transparent" speed="1" style="width: 90px; height: 90px; margin:0 0 -20px -26px;" loop autoplay></lottie-player>
                        <!--<img src="images/icons/24hour.png" alt="">-->
                    </div>
                    <div class="col-md-10">
                        <p>{{$WebsiteInformation->hot_line}}</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-2">
                    <lottie-player src="{{ asset('/frontend/lord-icon/chat.json') }}" background="transparent" speed="1" style="width: 40px; height: 40px;" loop autoplay></lottie-player>
                    <!--<img src="images/icons/chat-icon.png" alt="">-->
                </div>
                <div class="col-md-10">
                    <p>Chat</p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Left Sticky Box Mobile Ends -->

