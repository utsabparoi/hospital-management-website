<!--Start Medical Departments area-->
<section class="medical-departments-area area1">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Our Dedicated Doctors Team</h2>
            <div class="hr-div">
                <hr>
            </div>
            <!-- <span class="divider"></span> -->

        </div>
        <div class="row mb-4 doc-search">
            <div class="col-md-3"></div>
            <div class="col-md-3">
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
            <div class="col-md-4">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search your consultant" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-3"></div>


        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="medical-departments-carousel">
                @foreach($doctor as $doctors)
                    <!--Start single item-->
                        <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">
                            <div class="inner-box  ">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="{{ asset($doctors->image) }}" alt=""></a></figure>
                                </div>
                                <div class="info-box">
                                    <h5 class="name"><a href="#">{{$doctors->name}}</a></h5>
                                    <div class="des-div"><span class="designation">{{$doctors->position}}</span></div>
                                    <p class="text-center info-box-dept-name">{{$doctors->department}}</p>
                                    <p class="app-time text-center" style="text-transform:uppercase;">
                                        @php
                                            $created_at = new DateTime($doctors->visit_start_time);
                                            echo date_format($created_at,'h:ia');@endphp
                                        to
                                    @php
                                        $created_at = new DateTime($doctors->visit_end_time);
                                        echo date_format($created_at,'h:ia');@endphp
                                    <div class="text-center">
                                        <a href="https://web.asgaralihospital.com/selecteddoctor?docid=1674" target="_blank"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>
                                        <button type="button" class="btn btn-info btn-sm">Doctor Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
                <!--End single item-->
                    {{--                    <!--Start single item-->--}}
                    {{--                    <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">--}}
                    {{--                        <div class="inner-box  ">--}}
                    {{--                            <div class="image-box">--}}
                    {{--                                <figure class="image"><a href="#"><img src="{{ asset('frontend/images/doctors/team-2.jpg') }}" alt=""></a></figure>--}}
                    {{--                                <!--<ul class="social-links">-->--}}
                    {{--                                <!--    <li><a href="#">Appointment</a></li>-->--}}
                    {{--                                <!--    <li><a href="#">Doctor Details</a></li>-->--}}
                    {{--                                <!--</ul>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="info-box">--}}
                    {{--                                <h5 class="name"><a href="#">Prof. Dr. A.K.M. Mokhlesuzzaman</a></h5>--}}
                    {{--                                <div class="des-div"><span class="designation">Consultant</span></div>--}}
                    {{--                                <p class="text-center info-box-dept-name">Internal Medicine</p>--}}
                    {{--                                <!-- <div>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sat</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sun</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Mon</a>--}}
                    {{--                                    <a href="#" class="badge badge-danger">Tue</a>--}}
                    {{--                                </div> -->--}}
                    {{--                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>--}}
                    {{--                                <div class="text-center">--}}
                    {{--                                    <a href="https://web.asgaralihospital.com/selecteddoctor?docid=1175" target="_blank"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>--}}
                    {{--                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <!--End single item-->--}}
                    {{--                    <!--Start single item-->--}}
                    {{--                    <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">--}}
                    {{--                        <div class="inner-box  ">--}}
                    {{--                            <div class="image-box">--}}
                    {{--                                <figure class="image"><a href="#"><img src="{{ asset('frontend/images/doctors/team-3.jpg') }}" alt=""></a></figure>--}}
                    {{--                                <!--<ul class="social-links">-->--}}
                    {{--                                <!--    <li><a href="#">Appointment</a></li>-->--}}
                    {{--                                <!--    <li><a href="#">Doctor Details</a></li>-->--}}
                    {{--                                <!--</ul>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="info-box">--}}
                    {{--                                <h5 class="name"><a href="#">Dr. Samira Yasmeen Ahmed</a></h5>--}}
                    {{--                                <div class="des-div"><span class="designation">Consultant</span></div>--}}
                    {{--                                <p class="text-center info-box-dept-name">Internal Medicine</p>--}}
                    {{--                                <!-- <div>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sat</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sun</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Mon</a>--}}
                    {{--                                    <a href="#" class="badge badge-danger">Wed</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Thu</a>--}}
                    {{--                                </div> -->--}}
                    {{--                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>--}}
                    {{--                                <div class="text-center">--}}
                    {{--                                    <a href="https://web.asgaralihospital.com/selecteddoctor?docid=1578" target="_blank"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>--}}
                    {{--                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <!--End single item-->--}}
                    {{--                    <!--Start single item-->--}}
                    {{--                    <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">--}}
                    {{--                        <div class="inner-box  ">--}}
                    {{--                            <div class="image-box">--}}
                    {{--                                <figure class="image"><a href="#"><img src="{{ asset('frontend/images/doctors/team-4.jpg') }}" alt=""></a></figure>--}}
                    {{--                                <!--<ul class="social-links">-->--}}
                    {{--                                <!--    <li><a href="#">Appointment</a></li>-->--}}
                    {{--                                <!--    <li><a href="#">Doctor Details</a></li>-->--}}
                    {{--                                <!--</ul>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="info-box">--}}
                    {{--                                <h5 class="name"><a href="#">Dr. Md Abdul Halim</a></h5>--}}
                    {{--                                <div class="des-div"><span class="designation">Consultant</span></div>--}}
                    {{--                                <p class="text-center info-box-dept-name">Internal Medicine</p>--}}
                    {{--                                <!-- <div>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sat</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sun</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Mon</a>--}}
                    {{--                                    <a href="#" class="badge badge-danger">Tue</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Wed</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Thu</a>--}}
                    {{--                                </div> -->--}}
                    {{--                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>--}}
                    {{--                                <div class="text-center">--}}
                    {{--                                    <a href="https://web.asgaralihospital.com/selecteddoctor?docid=3473" target="_blank"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>--}}
                    {{--                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <!--End single item-->--}}
                    {{--                    <!--Start single item-->--}}
                    {{--                    <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">--}}
                    {{--                        <div class="inner-box  ">--}}
                    {{--                            <div class="image-box">--}}
                    {{--                                <figure class="image"><a href="#"><img src="{{ asset('frontend/images/doctors/team-5.jpg') }}" alt=""></a></figure>--}}
                    {{--                                <!--<ul class="social-links">-->--}}
                    {{--                                <!--    <li><a href="#">Appointment</a></li>-->--}}
                    {{--                                <!--    <li><a href="#">Doctor Details</a></li>-->--}}
                    {{--                                <!--</ul>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="info-box">--}}
                    {{--                                <h5 class="name"><a href="#">Prof. Dr. Zabrul SM Haque</a></h5>--}}
                    {{--                                <div class="des-div"><span class="designation">Senior Consultant</span></div>--}}
                    {{--                                <p class="text-center info-box-dept-name">Paediatrics, Neonatology, PICU, NICU</p>--}}
                    {{--                                <!-- <div>--}}

                    {{--                                    <a href="#" class="badge badge-secondary">Mon</a>--}}
                    {{--                                    <a href="#" class="badge badge-danger">Wed</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Thu</a>--}}
                    {{--                                </div> -->--}}
                    {{--                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>--}}
                    {{--                                <div class="text-center">--}}
                    {{--                                    <a href="https://web.asgaralihospital.com/selecteddoctor?docid=1479" target="_blank"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>--}}
                    {{--                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <!--End single item-->--}}
                    {{--                </div>--}}
                    {{--                <div class="medical-departments-carousel med-carosel2">--}}

                    {{--                    <!--Start single item-->--}}
                    {{--                    <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">--}}
                    {{--                        <div class="inner-box  ">--}}
                    {{--                            <div class="image-box">--}}
                    {{--                                <figure class="image"><a href="#"><img src="{{ asset('frontend/images/doctors/team-1.jpg') }}" alt=""></a></figure>--}}
                    {{--                                <!--<ul class="social-links">-->--}}
                    {{--                                <!--    <li><a href="#">Appointment</a></li>-->--}}
                    {{--                                <!--    <li><a href="#">Doctor Details</a></li>-->--}}
                    {{--                                <!--</ul>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="info-box">--}}
                    {{--                                <h5 class="name"><a href="#">Dr. A B M Sarwar-E-Alam</a></h5>--}}
                    {{--                                <div class="des-div"><span class="designation">Senior Consultant</span></div>--}}
                    {{--                                <p class="text-center info-box-dept-name">Internal Medicine</p>--}}
                    {{--                                <!-- <div>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sat</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sun</a>--}}
                    {{--                                    <a href="#" class="badge badge-danger">Sun</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Wed</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Thu</a>--}}
                    {{--                                </div> -->--}}
                    {{--                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>--}}
                    {{--                                <div class="text-center">--}}
                    {{--                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>--}}
                    {{--                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <!--End single item-->--}}
                    {{--                    <!--Start single item-->--}}
                    {{--                    <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">--}}
                    {{--                        <div class="inner-box  ">--}}
                    {{--                            <div class="image-box">--}}
                    {{--                                <figure class="image"><a href="#"><img src="{{ asset('frontend/images/doctors/team-2.jpg') }}" alt=""></a></figure>--}}
                    {{--                                <!--<ul class="social-links">-->--}}
                    {{--                                <!--    <li><a href="#">Appointment</a></li>-->--}}
                    {{--                                <!--    <li><a href="#">Doctor Details</a></li>-->--}}
                    {{--                                <!--</ul>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="info-box">--}}
                    {{--                                <h5 class="name"><a href="#">Prof. Dr. A.K.M. Mokhlesuzzaman</a></h5>--}}
                    {{--                                <div class="des-div"><span class="designation">Consultant</span></div>--}}
                    {{--                                <p class="text-center info-box-dept-name">Internal Medicine</p>--}}
                    {{--                                <!-- <div>--}}

                    {{--                                    <a href="#" class="badge badge-secondary">Mon</a>--}}
                    {{--                                    <a href="#" class="badge badge-danger">Tue</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Wed</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Thu</a>--}}
                    {{--                                </div> -->--}}
                    {{--                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>--}}
                    {{--                                <div class="text-center">--}}
                    {{--                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>--}}
                    {{--                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <!--End single item-->--}}

                    {{--                    <!--Start single item-->--}}
                    {{--                    <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">--}}
                    {{--                        <div class="inner-box  ">--}}
                    {{--                            <div class="image-box">--}}
                    {{--                                <figure class="image"><a href="#"><img src="{{ asset('frontend/images/doctors/team-4.jpg') }}" alt=""></a></figure>--}}
                    {{--                                <!--<ul class="social-links">-->--}}
                    {{--                                <!--    <li><a href="#">Appointment</a></li>-->--}}
                    {{--                                <!--    <li><a href="#">Doctor Details</a></li>-->--}}
                    {{--                                <!--</ul>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="info-box">--}}
                    {{--                                <h5 class="name"><a href="#">Dr. Md Abdul Halim</a></h5>--}}
                    {{--                                <div class="des-div"><span class="designation">Consultant</span></div>--}}
                    {{--                                <p class="text-center info-box-dept-name">Internal Medicine</p>--}}
                    {{--                                <!-- <div>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sat</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sun</a>--}}
                    {{--                                    <a href="#" class="badge badge-danger">Tue</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Wed</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Thu</a>--}}
                    {{--                                </div> -->--}}
                    {{--                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>--}}
                    {{--                                <div class="text-center">--}}
                    {{--                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>--}}
                    {{--                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <!--End single item-->--}}
                    {{--                    <!--Start single item-->--}}
                    {{--                    <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">--}}
                    {{--                        <div class="inner-box  ">--}}
                    {{--                            <div class="image-box">--}}
                    {{--                                <figure class="image"><a href="#"><img src="{{ asset('frontend/images/doctors/team-3.jpg') }}" alt=""></a></figure>--}}
                    {{--                                <!--<ul class="social-links">-->--}}
                    {{--                                <!--    <li><a href="#">Appointment</a></li>-->--}}
                    {{--                                <!--    <li><a href="#">Doctor Details</a></li>-->--}}
                    {{--                                <!--</ul>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="info-box">--}}
                    {{--                                <h5 class="name"><a href="#">Dr. Samira Yasmeen Ahmed</a></h5>--}}
                    {{--                                <div class="des-div"><span class="designation">Consultant</span></div>--}}
                    {{--                                <p class="text-center info-box-dept-name">Internal Medicine</p>--}}
                    {{--                                <!-- <div>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sat</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sun</a>--}}
                    {{--                                    <a href="#" class="badge badge-danger">Mon</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Tue</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Wed</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Thu</a>--}}
                    {{--                                </div> -->--}}
                    {{--                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>--}}
                    {{--                                <div class="text-center">--}}
                    {{--                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>--}}
                    {{--                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <!--End single item-->--}}
                    {{--                    <!--Start single item-->--}}
                    {{--                    <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">--}}
                    {{--                        <div class="inner-box  ">--}}
                    {{--                            <div class="image-box">--}}
                    {{--                                <figure class="image"><a href="#"><img src="{{ asset('frontend/images/doctors/team-5.jpg') }}" alt=""></a></figure>--}}
                    {{--                                <!--<ul class="social-links">-->--}}
                    {{--                                <!--    <li><a href="#">Appointment</a></li>-->--}}
                    {{--                                <!--    <li><a href="#">Doctor Details</a></li>-->--}}
                    {{--                                <!--</ul>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="info-box">--}}
                    {{--                                <h5 class="name"><a href="#">Prof. Dr. Zabrul SM Haque</a></h5>--}}
                    {{--                                <div class="des-div"><span class="designation">Senior Consultant</span></div>--}}
                    {{--                                <p class="text-center info-box-dept-name">Paediatrics, Neonatology, PICU, NICU</p>--}}
                    {{--                                <!-- <div>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sat</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Sun</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Mon</a>--}}
                    {{--                                    <a href="#" class="badge badge-secondary">Tue</a>--}}
                    {{--                                    <a href="#" class="badge badge-danger">Wed</a>--}}
                    {{--                                </div> -->--}}
                    {{--                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>--}}
                    {{--                                <div class="text-center">--}}
                    {{--                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button" class="btn btn-primary btn-sm">Appointment</button></a>--}}
                    {{--                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Doctor Details</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <!--End single item-->--}}
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
                                        <img class="doc-img" src="{{ asset('frontend/images/doctors/demo-doc.png') }}" alt="">
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
        </div>
    </div>
</section>
<!--End Medical Departments area-->
