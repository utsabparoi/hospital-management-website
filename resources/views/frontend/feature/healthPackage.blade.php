<!-- Health Package Section Starts -->
<section id="health-package">
    <div class="container">
        <div class="sec-title sec-title-2 text-center">
            <h2><a href="health-package.php">Our Health Package</a></h2>
            <div class="hr-div">
                <hr>
            </div>
            <p>we provide high-quality <b>full body health check-up package at lowest price</b> ( Call for details: <b>{{$WebsiteInformation->phone_one}}</b> / <b>{{$WebsiteInformation->phone_two}}</b> )</p>
            <!-- <span class="divider"></span> -->

        </div>
        <div class="row mt-2">
            <div class="col-md-2"></div>
            @foreach ($health_pkg_cat as $item)
                <div class="col-md-4 mt-2">
                    <div class="common-health-box">
                        <p>{{$item->name}}</p>
                        <ul>
                            {{-- @foreach ($hlth_pkg_facility as $fac)
                                <li><i class="fas fa-check"></i> {{$fac->name}}</li>
                            @endforeach --}}
                            <li><i class="fas fa-check"></i> Free Consultation</li>
                            <li><i class="fas fa-check"></i> Fast & Accurate Report</li>
                            <li><i class="fas fa-check"></i> Better Health Care</li>
                            <li><i class="fas fa-check"></i> Complimentary Breakfast</li>
                            <li><i class="fas fa-check"></i> Dedicated Customer Service</li>
                            <li><i class="fas fa-check"></i> Consultation with Physicion</li>
                            <li><i class="fas fa-check"></i> On Time Sample Collection</li>
                            <li><i class="fas fa-check"></i> Diet Consultancy</li>
                        </ul>
                        <button><a href="{{asset('/frontend/page/regular-health-package.php')}}">view all items</a></button>

                    </div>
                </div>
            @endforeach
            {{-- <div class="col-md-2"></div>
            <div class="col-md-4 mt-2">
                <div class="common-health-box">
                    <p>Regular Health Screening</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Free Consultation</li>
                        <li><i class="fas fa-check"></i> Fast & Accurate Report</li>
                        <li><i class="fas fa-check"></i> Better Health Care</li>
                        <li><i class="fas fa-check"></i> Complimentary Breakfast</li>
                        <li><i class="fas fa-check"></i> Dedicated Customer Service</li>
                        <li><i class="fas fa-check"></i> Consultation with Physicion</li>
                        <li><i class="fas fa-check"></i> On Time Sample Collection</li>
                        <li><i class="fas fa-check"></i> Diet Consultancy</li>
                    </ul>
                    <button><a href="{{asset('/frontend/page/regular-health-package.php')}}">view all items</a></button>

                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="common-health-box">
                    <p>Home Health Screening</p>
                    <ul>
                        <li><i class="fas fa-check"></i> On Time Sample Collection</li>
                        <li><i class="fas fa-check"></i> Fast & Accurate Report</li>
                        <li><i class="fas fa-check"></i> Online report view</li>
                        <li><i class="fas fa-check"></i> Skilled Phlebotomist</li>
                        <li><i class="fas fa-check"></i> Covid-19 negetive sample callector</li>
                    </ul>
                    <button><a href="home-health-package.php">view all items</a></button>

                </div>
            </div>
            <div class="col-md-2"></div> --}}
        </div>
    </div>
</section>
<!-- Health Package section Ends -->
