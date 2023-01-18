@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.header')
    @include('frontend.feature.banner')
    @include('frontend.feature.stickyBox')
    @include('frontend.feature.service')
    {{-- <br><br><br><br> --}}
    <!-- Fun Fact Section Two-->
    {{-- <section class="fun-fact-section-two">
        <div class="auto-container">
            <div class="sec-title sec-title-2 text-center">
                <h2>Facts of Hospital</h2>
                <!-- <span class="divider"></span> -->
                <div class="hr-div">
                    <hr>
                </div>
            </div>
            <div class="row">
                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="count-box">
                        <div class="icon-box">
                            <!-- <span class="icon flaticon-user-experience"></span> -->
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/nxaaasqe.json" trigger="loop"
                                colors="primary:#121331,secondary:#08a88a" style="width:80px;height:80px">
                            </lord-icon>
                        </div>
                        <h4 class="counter-title">Years of Experience</h4>
                        <span class="count-text" data-speed="3000" data-stop="25">0</span>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="count-box">
                        <div class="icon-box">
                            <!-- <span class="icon flaticon-team"></span> -->
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/hbjlznlo.json" trigger="loop"
                                colors="primary:#121331,secondary:#08a88a" style="width:80px;height:80px">
                            </lord-icon>
                        </div>
                        <h4 class="counter-title">Medical Specialties</h4>
                        <span class="count-text" data-speed="3000" data-stop="470">0</span>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="count-box">
                        <div class="icon-box">
                            <!-- <span class="icon flaticon-hospital"></span> -->
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/gmzxduhd.json" trigger="loop"
                                colors="primary:#121331,secondary:#08a88a" style="width:80px;height:80px">
                            </lord-icon>
                        </div>
                        <h4 class="counter-title">Consultation Rooms</h4>
                        <span class="count-text" data-speed="3000" data-stop="689">0</span>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="count-box">
                        <div class="icon-box">
                            <!-- <span class="icon flaticon-add-friend"></span> -->
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/eszyyflr.json" trigger="loop"
                                colors="primary:#121331,secondary:#08a88a" style="width:80px;height:80px">
                            </lord-icon>
                        </div>
                        <h4 class="counter-title">Happy Patients</h4>
                        <span class="count-text" data-speed="3000" data-stop="9036">0</span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Fun Fact Section Two -->
    @include('frontend.feature.doctorsTeam')
    @include('frontend.feature.department')
    @include('frontend.feature.healthPackage')
    @include('frontend.feature.facilities')
    @include('frontend.feature.articlesNews')
    @include('frontend.feature.clientComment')
    @include('frontend.feature.partner')
    @include('frontend.feature.map')
    @include('frontend.layout.footer')

@endsection
