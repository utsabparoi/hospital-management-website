@extends('frontend.layout.app')
@section('content')
    <header>
        @include('frontend.layout.headerInner')
    </header>
<main>
    <div class="container inner-cont">
        <!-- Hospital Fact Section Two-->
        <section class="fun-fact-section-two" style="margin-top:-20px;">
            <div class="auto-container">
                <div class="row">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <div class="icon-box">
                                <!-- <span class="icon flaticon-user-experience"></span> -->
                                <lord-icon src="/frontend/lord-icon/yearofexperinece.json" trigger="loop"
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
                                <lord-icon src="/frontend/lord-icon/medical-specialist.json" trigger="loop"
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
                                <lord-icon src="/frontend/lord-icon/consultaion-room.json" trigger="loop"
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
                                <lord-icon src="/frontend/lord-icon/happy-patients.json" trigger="loop"
                                    colors="primary:#121331,secondary:#08a88a" style="width:80px;height:80px">
                                </lord-icon>
                            </div>
                            <h4 class="counter-title">Happy Patients</h4>
                            <span class="count-text" data-speed="3000" data-stop="9036">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </section><br>
        <!-- Hospital Fact Section Two -->
        <div class="row">
            <div class="col-sm-12">
                <div class="inner-sec-title-common text-center">
                    <h2>{{$data->title}}</h2>
                    <hr>
                    <!-- <span class="divider"></span> -->
                </div>
            </div>
            <div class="col-sm-6">
                <p>{!!$data->description!!}</p>
            </div>
            <div class="col-sm-6 cafeteria1">
                <img src="{{ asset($data->image) }}" alt="{{$data->title}}">
            </div>
        </div>


    </div>
</main>
    <footer>
        @include('frontend.layout.footer')
    </footer>
@endsection
