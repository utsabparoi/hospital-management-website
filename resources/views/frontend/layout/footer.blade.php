<!-- Floating Social Media bar Starts -->
<div class="float-sm">

    <div class="fl-fl float-fb concern-logo">
        <p class="verticaltext_content bg-primary">Concern</p>

        <div class="row">
            <div class="col-6">
                <img src="{{ asset('frontend/images/prime.jpeg') }}" style="width:76px; height: 90px;" alt="">
            </div>
            <div class="col-6">
                <img src="{{ asset('frontend/images/prime2.jpg') }}" style="width:76px; height: 90px;" alt="">
            </div>
        </div>
    </div>


    <div class="fl-fl float-tw pl-3">
        <p class="verticaltext_content bg-success">Social Media</p>

        <div class="row">
            <!-- <div class="col-1"></div> -->
            <!-- Add target="_blank" target="_blank" target="_blank" target="_blank" for new tab page -->
            <div class="col-5">
                {{-- <a href="{{ route($social_link->name) }}"> <i class="fab fa-facebook-square"></i></a> --}}
                <a href="https://www.facebook.com/PrimeHospitalsLtd/"> <i class="fab fa-facebook-square"></i></a>
            </div>
            <div class="col-5">
                {{-- <a href=""> <i class="fab fa-twitter-square"></i></a> --}}
                <a href=""> <i class="fab fa-linkedin-in"></i></a>
            </div>


        </div>
        <div class="row">
            <!-- <div class="col-1"></div> -->
            <div class="col-5">
                <a href=""> <i class="fab fa-google-plus-square"></i></a>
            </div>
            <div class="col-5">
                <a href=""> <i class="fab fa-instagram"></i></a>
            </div>
        </div>


    </div>

    <!-- <div class="fl-fl pt-4 pl-2 float-gp fl-fl-exception">
        <p class="verticaltext_content bg-info">Chat with us</p>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-6">
                <a href="#">Send us message!</a>
            </div>
        </div>
        <div class="row fl-fb">
            <div class="col-1"></div>
            <div class="col-6">
                <img src="images/logo/test.png" alt=""> -->
    <!-- <i class="fab fa-facebook-messenger"></i> -->
    <!-- </div>
        </div>



    </div> -->

</div>
</div>
<!-- Floating Social Media bar Ends -->




<!-- Main Footer -->
<footer class="main-footer style-two">
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">

                <div class="col-sm-4 footer-building">
                    <h4>Future Plan</h4>
                    <p>We already started to built our dream software company project which will be biggest private software company of our country. Our aim is to be the best software service provider in Pvt Software Sector in Bangladesh.</p>
                    <img src="{{ asset('frontend/images/footer/footer-building.jpg') }}" alt="">
                </div>
                <div class="col-sm-4">
                    <h4>Countdown of Services</h4>
                    <!-- <p>Outdoor Patients Serve : 325000</p>
                    <p>Indoor Patient Serve : 2000000</p>
                    <p>Others Services : 55000</p> -->
                    <div class="count-box">
                        <span class="count-text">Service 1</span>
                        <h4 class="counter-title">Outdoor Patients Serve</h4>
                    </div>
                    <div class="count-box">
                        <span class="count-text">Service 1</span>
                        <h4 class="counter-title">Indoor Patient Serve</h4>
                    </div>
                    <div class="count-box">
                        <span class="count-text">Service 1</span>
                        <h4 class="counter-title">Others Services</h4>
                    </div>
                </div>

                <div class="col-sm-4 last-div">
                    <h4>Watch Our Videos</h4>
                    <div>
                        <a href="#" target="_blank"><img class="image-center" src="{{ asset('frontend/images/prime2.jpg') }}" style="width: 160px; height:120px;" alt=""></a>
                    </div><br>
                    <div class="footer-logo">
                        <img src="{{ asset('frontend/images/prime.jpeg') }}" style="width:300px; height:200px;" alt="">
                    </div>
                    <p>{{$WebsiteInformation->primary_address}}</p>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-angle-up"></span>
        </div>

        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- <div class="footer-nav">
                      <ul class="clearfix">
                          <li><a href="#">Privacy Policy</a></li>
                          <li><a href="#">Contact</a></li>
                          <li><a href="#">Supplier</a></li>
                      </ul>
                  </div> -->

                <div class="copyright-text">
                    <p>Copyright &copy; {{ date('Y') }} <a href="#">{{$WebsiteInformation->name}}</a>, All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Main Footer -->



</div>
