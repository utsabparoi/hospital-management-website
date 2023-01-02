@extends('frontend.layout.app')
@section('content')
<header>
    @include('frontend.layout.headerInner')
    </header>

    <main>
        <section id="consultant-desktop">
            <div class="container inner-cont">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="inner-sec-title-common text-center">
                            <h2>Our Dedicated Doctors Team</h2>
                            <hr>
                            <!-- <span class="divider"></span> -->
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="custom-tabs">
                                <ul class="nav nav-tabs custom p-relative mb-xl-40">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#start">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#setup">Vascular Surgery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#medium">Thoracic Surgery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#advance">Pain Clinic</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#pro">Physical Medicine and Rehabilitation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#pro1">Accident and Emergency</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#pro2">Critical Care</a>
                                    </li>
                                </ul>
                                <div class="tab-content padding-20 bg-custom-white bx-wrapper">
                                    <div class="tab-pane fade show active" id="start">
                                        <div class="tab-inner px-5 py-3">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-1.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Dr. A B M Sarwar-E-Alam</a></h5>
                                                                <div class="des-div"><span class="designation">Senior Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-danger">Sun</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-2.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Prof. Dr. A.K.M. Mokhlesuzzaman</a></h5>
                                                                <div class="des-div"><span class="designation">Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>

                                                                    <a href="#" class="badge badge-secondary">Mon</a>
                                                                    <a href="#" class="badge badge-danger">Tue</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-4.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Dr. Md Abdul Halim</a></h5>
                                                                <div class="des-div"><span class="designation">Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-danger">Tue</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-3.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Dr. Samira Yasmeen Ahmed</a></h5>
                                                                <div class="des-div"><span class="designation">Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-danger">Mon</a>
                                                                    <a href="#" class="badge badge-secondary">Tue</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>

                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-5.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Prof. Dr. Zabrul SM Haque</a></h5>
                                                                <div class="des-div"><span class="designation">Senior Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Paediatrics, Neonatology, PICU, NICU</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-secondary">Mon</a>
                                                                    <a href="#" class="badge badge-secondary">Tue</a>
                                                                    <a href="#" class="badge badge-danger">Wed</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="setup">
                                        <div class="tab-inner">
                                            <div class="row">

                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-5.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Prof. Dr. Zabrul SM Haque</a></h5>
                                                                <div class="des-div"><span class="designation">Senior Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Paediatrics, Neonatology, PICU, NICU</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-secondary">Mon</a>
                                                                    <a href="#" class="badge badge-secondary">Tue</a>
                                                                    <a href="#" class="badge badge-danger">Wed</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="medium">
                                        <div class="tab-inner">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-3.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Dr. Samira Yasmeen Ahmed</a></h5>
                                                                <div class="des-div"><span class="designation">Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-danger">Mon</a>
                                                                    <a href="#" class="badge badge-secondary">Tue</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="advance">
                                        <div class="tab-inner">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-1.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Dr. A B M Sarwar-E-Alam</a></h5>
                                                                <div class="des-div"><span class="designation">Senior Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-danger">Sun</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-2.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Prof. Dr. A.K.M. Mokhlesuzzaman</a></h5>
                                                                <div class="des-div"><span class="designation">Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>

                                                                    <a href="#" class="badge badge-secondary">Mon</a>
                                                                    <a href="#" class="badge badge-danger">Tue</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-4.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Dr. Md Abdul Halim</a></h5>
                                                                <div class="des-div"><span class="designation">Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-danger">Tue</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro">
                                        <div class="tab-inner">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-1.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Dr. A B M Sarwar-E-Alam</a></h5>
                                                                <span class="designation">Senior Consultant</span>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-danger">Sun</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-2.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Prof. Dr. A.K.M. Mokhlesuzzaman</a></h5>
                                                                <div class="des-div"><span class="designation">Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Mon</a>
                                                                    <a href="#" class="badge badge-danger">Tue</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-4.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Dr. Md Abdul Halim</a></h5>
                                                                <div class="des-div"><span class="designation">Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-danger">Tue</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-1.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Dr. A B M Sarwar-E-Alam</a></h5>
                                                                <span class="designation">Senior Consultant</span>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-danger">Sun</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-4.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Dr. Md Abdul Halim</a></h5>
                                                                <div class="des-div"><span class="designation">Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-danger">Tue</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-2.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Prof. Dr. A.K.M. Mokhlesuzzaman</a></h5>
                                                                <div class="des-div"><span class="designation">Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>

                                                                    <a href="#" class="badge badge-secondary">Mon</a>
                                                                    <a href="#" class="badge badge-danger">Tue</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro1">
                                        <div class="tab-inner">
                                            <div class="row">

                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-5.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Prof. Dr. Zabrul SM Haque</a></h5>
                                                                <span class="designation">Senior Consultant</span>
                                                                <p class="text-center info-box-dept-name">Paediatrics, Neonatology, PICU, NICU</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-secondary">Mon</a>
                                                                    <a href="#" class="badge badge-secondary">Tue</a>
                                                                    <a href="#" class="badge badge-danger">Wed</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro2">
                                        <div class="tab-inner">
                                            <div class="row">

                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-5.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Prof. Dr. Zabrul SM Haque</a></h5>
                                                                <span class="designation">Senior Consultant</span>
                                                                <p class="text-center info-box-dept-name">Paediatrics, Neonatology, PICU, NICU</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-secondary">Mon</a>
                                                                    <a href="#" class="badge badge-secondary">Tue</a>
                                                                    <a href="#" class="badge badge-danger">Wed</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!--Start single item-->
                                                    <div class="single-item text-center team-block-two">
                                                        <div class="inner-box  ">
                                                            <div class="image-box">
                                                                <figure class="image"><a href="#"><img src="images/doctors/team-3.jpg" alt=""></a></figure>
                                                                <!--<ul class="social-links">-->
                                                                <!--    <li><a href="#">Appointment</a></li>-->
                                                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                            <div class="info-box">
                                                                <h5 class="name"><a href="#">Dr. Samira Yasmeen Ahmed</a></h5>
                                                                <div class="des-div"><span class="designation">Consultant</span></div>
                                                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                                                <!-- <div>
                                                                    <a href="#" class="badge badge-secondary">Sat</a>
                                                                    <a href="#" class="badge badge-secondary">Sun</a>
                                                                    <a href="#" class="badge badge-danger">Mon</a>
                                                                    <a href="#" class="badge badge-secondary">Tue</a>
                                                                    <a href="#" class="badge badge-secondary">Wed</a>
                                                                    <a href="#" class="badge badge-secondary">Thu</a>
                                                                </div> -->
                                                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                                                <div class="text-center">
                                                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single item-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Docotor Details Modal Starts -->
                <!-- Modal -->

                <div class="doc-profile-modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- <h5 class="modal-title" id="exampleModalLongTitle">Dr. Md. Jilhaj Uddin
                            </h5> -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img class="doc-img" src="images/doctors/demo-doc.png" alt="">
                                        <h3 class="doc-name">Dr. Md. Jilhaj Uddin</h3>
                                    </div>
                                    <div class="col-sm-8 doc-details">
                                        <p>MBBS, BCS (Health)</p>
                                        <p>MS (Cardiovascular)</p>
                                        <p>Specialist – Vascular Surgery</p>
                                        <p><img src="images/footer/hc-icon.png" alt=""> Dr. Md. Jilhaj Uddin obtained his MBBS degree from Rajshahi Medical College.</p>
                                        <p><img src="images/footer/hc-icon.png" alt=""> He received Trainings on Surgery from ‘Dhaka Medical College Hospital’, ‘Shaheed Suhrawardy Medical College Hospital’ and ‘BSMMU’.</p>
                                        <p><img src="images/footer/hc-icon.png" alt=""> Dr. Jilhaj successfully completed his MS degree in ‘Cardiovascular Surgery’ from ‘National Institute of Cardiovascular Diseases’ (NICVD) and joined in Govt. service through BCS Health.</p>
                                        <p><img src="images/footer/hc-icon.png" alt=""> Later he worked in Vascular Surgery Department of NICVD and enriched himself with Advanced Training on Vascular Surgery, LASER and Endovascular Intervention till June, 2020.</p>
                                        <!-- <p><img src="images/footer/hc-icon.png" alt=""> Presently Dr. Md. Jilhaj Uddin is at Asgar Ali Hospital as Specialist-Vascular Surgery and serving patients regularly.</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Make An Appointment</button></a>
                                <button type="button" class="btn btn-secondary doc-close" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Doctor Details Modal Ends -->

            </div>
        </section>


        <section id="consultant-mobile" class="medical-departments-area area1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="sec-title inner-sec-title-exception text-center mb-4">
                            <h2>Our Dedicated Doctors Team</h2>
                            <!-- <span class="divider"></span> -->
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row  doc-search">
                            <div class="col-sm-5">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All Department
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Internal Medicine</a>
                                        <a class="dropdown-item" href="#">Respiratory Medicine</a>
                                        <a class="dropdown-item" href="#">Gyne & Obs</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">
                            <div class="inner-box  ">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/doctors/team-1.jpg" alt=""></a></figure>
                                    <!--<ul class="social-links">-->
                                    <!--    <li><a href="#">Appointment</a></li>-->
                                    <!--    <li><a href="#">Doctor Details</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="info-box">
                                    <h5 class="name"><a href="#">Dr. A B M Sarwar-E-Alam</a></h5>
                                    <span class="designation">Senior Consultant – Internal Medicine</span>
                                    <div class="text-center">
                                        <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">
                            <div class="inner-box  ">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/doctors/team-2.jpg" alt=""></a></figure>
                                    <!--<ul class="social-links">-->
                                    <!--    <li><a href="#">Appointment</a></li>-->
                                    <!--    <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="info-box">
                                    <h5 class="name"><a href="#">Prof. Dr. A.K.M. Mokhlesuzzaman</a></h5>
                                    <span class="designation">Consultant – Internal Medicine</span>
                                    <div class="text-center">
                                        <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">
                            <div class="inner-box  ">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/doctors/team-3.jpg" alt=""></a></figure>
                                    <!--<ul class="social-links">-->
                                    <!--    <li><a href="#">Appointment</a></li>-->
                                    <!--    <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="info-box">
                                    <h5 class="name"><a href="#">Dr. Samira Yasmeen Ahmed</a></h5>
                                    <span class="designation">Consultant – Internal Medicine</span>
                                    <div class="text-center">
                                        <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">
                            <div class="inner-box  ">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/doctors/team-4.jpg" alt=""></a></figure>
                                    <!--<ul class="social-links">-->
                                    <!--    <li><a href="#">Appointment</a></li>-->
                                    <!--    <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="info-box">
                                    <h5 class="name"><a href="#">Dr. Md Abdul Halim</a></h5>
                                    <span class="designation">Consultant – Internal Medicine </span>
                                    <div class="text-center">
                                        <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">
                            <div class="inner-box  ">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/doctors/team-1.jpg" alt=""></a></figure>
                                    <!--<ul class="social-links">-->
                                    <!--    <li><a href="#">Appointment</a></li>-->
                                    <!--    <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="info-box">
                                    <h5 class="name"><a href="#">Dr. A B M Sarwar-E-Alam</a></h5>
                                    <span class="designation">Senior Consultant – Internal Medicine</span>
                                    <div class="text-center">
                                        <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">
                            <div class="inner-box  ">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/doctors/team-2.jpg" alt=""></a></figure>
                                    <!--<ul class="social-links">-->
                                    <!--    <li><a href="#">Appointment</a></li>-->
                                    <!--    <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="info-box">
                                    <h5 class="name"><a href="#">Prof. Dr. A.K.M. Mokhlesuzzaman</a></h5>
                                    <span class="designation">Consultant – Internal Medicine</span>
                                    <div class="text-center">
                                        <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">
                            <div class="inner-box  ">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/doctors/team-3.jpg" alt=""></a></figure>
                                    <!--<ul class="social-links">-->
                                    <!--    <li><a href="#">Appointment</a></li>-->
                                    <!--    <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="info-box">
                                    <h5 class="name"><a href="#">Dr. Samira Yasmeen Ahmed</a></h5>
                                    <span class="designation">Consultant – Internal Medicine</span>
                                    <div class="text-center">
                                        <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">
                            <div class="inner-box  ">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/doctors/team-4.jpg" alt=""></a></figure>
                                    <!--<ul class="social-links">-->
                                    <!--    <li><a href="#">Appointment</a></li>-->
                                    <!--    <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="info-box">
                                    <h5 class="name"><a href="#">Dr. Md Abdul Halim</a></h5>
                                    <span class="designation">Consultant – Internal Medicine </span>
                                    <div class="text-center">
                                        <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
            <!-- Docotor Details Modal Starts -->
            <!-- Modal -->

            <div class="doc-profile-modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="exampleModalLongTitle">Dr. Md. Jilhaj Uddin
                            </h5> -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="doc-img" src="images/doctors/demo-doc.png" alt="">
                                    <h3 class="doc-name">Dr. Md. Jilhaj Uddin</h3>
                                </div>
                                <div class="col-sm-8 doc-details">
                                    <p>MBBS, BCS (Health)</p>
                                    <p>MS (Cardiovascular)</p>
                                    <p>Specialist – Vascular Surgery</p>
                                    <p><img src="images/footer/hc-icon.png" alt=""> Dr. Md. Jilhaj Uddin obtained his MBBS degree from Rajshahi Medical College.</p>
                                    <p><img src="images/footer/hc-icon.png" alt=""> He received Trainings on Surgery from ‘Dhaka Medical College Hospital’, ‘Shaheed Suhrawardy Medical College Hospital’ and ‘BSMMU’.</p>
                                    <p><img src="images/footer/hc-icon.png" alt=""> Dr. Jilhaj successfully completed his MS degree in ‘Cardiovascular Surgery’ from ‘National Institute of Cardiovascular Diseases’ (NICVD) and joined in Govt. service through BCS Health.</p>
                                    <p><img src="images/footer/hc-icon.png" alt=""> Later he worked in Vascular Surgery Department of NICVD and enriched himself with Advanced Training on Vascular Surgery, LASER and Endovascular Intervention till June, 2020.</p>
                                    <!-- <p><img src="images/footer/hc-icon.png" alt=""> Presently Dr. Md. Jilhaj Uddin is at Asgar Ali Hospital as Specialist-Vascular Surgery and serving patients regularly.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Make An Appointment</button></a>
                            <button type="button" class="btn btn-secondary doc-close" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Doctor Details Modal Ends -->

        </section>
    </main>


<footer>
    @include('frontend.layout.footerInner')
    </footer>
@endsection
