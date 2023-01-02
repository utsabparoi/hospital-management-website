@extends('frontend.layout.app')
@section('content')
    <header>
        @include('frontend.layout.headerInner')
    </header>
<main>
    <div class="container inner-cont">
        <div class="row">
            <div class="col-sm-12">
                <div class="inner-sec-title-common text-center">
                    <h2>Our Health Packages</h2>
                    <hr>
                    <p>We provide high-quality <b>full body health check-up package at lowest price</b> ( Call for details: <b>01787683067</b> / <b>01787683387</b> )</p>

                    <!-- <span class="divider"></span> -->
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-2"></div>
            <div class="col-md-4 mt-4">
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
                    <button><a href="regular-health-package.php">view all items</a></button>

                </div>
            </div>
            <div class="col-md-4 mt-4">
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
            <div class="col-md-2"></div>
            <!-- <div class="col-md-4 mt-4">
                <div class="common-health-box">
                    <p>Home Health Screening</p>
                    <ul>
                        <li><img src="images/footer/hc-icon.png" alt=""> On Time Sample Collection</li>
                        <li><img src="images/footer/hc-icon.png" alt=""> Fast & Accurate Report</li>
                        <li><img src="images/footer/hc-icon.png" alt=""> Online report view</li>
                        <li><img src="images/footer/hc-icon.png" alt=""> Skilled Phlebotomist</li>
                        <li><img src="images/footer/hc-icon.png" alt=""> Covid-19 negetive sample callector</li>
                    </ul>
                    <button>view all items</button>

                </div>
            </div> -->

        </div>
    </div>
</main>
<footer>
    @include('frontend.layout.footerInner')
</footer>
@endsection
