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
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        All Department
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach($departments as $department)
                        <a class="dropdown-item" href="#">{{ $department->department_name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search your consultant"
                           aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-3"></div>


        </div>
        @foreach($doctor->chunk(8) as $allDoctors)
            <br>
            <div class="row mt-lg-5">
                @foreach($allDoctors->chunk(10) as $doctors)
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="medical-departments-carousel">
                        @foreach($doctors as $item)
                            <!--Start single item-->
                                <div class="single-item text-center team-block-two wow fadeInUp animated animated animated">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><a href="#"><img src="{{ asset($item->image) }}" alt="" ></a></figure>
                                        </div>
                                        <div class="info-box">
                                            <h5 class="name"><a href="#">{{$item->name}}</a></h5>
                                            <div class="des-div"><span
                                                    class="designation">{{$item->position}}</span></div>
                                            <p class="text-center info-box-dept-name">{{$item->department}}</p>
                                            <p class="app-time text-center" style="text-transform:uppercase;">
                                                @php
                                                    $created_at = new DateTime($item->visit_start_time);
                                                    echo date_format($created_at,'h:ia');@endphp
                                                to
                                            @php
                                                $created_at = new DateTime($item->visit_end_time);
                                                echo date_format($created_at,'h:ia');@endphp
                                            <div class="text-center">
                                                <a href="https://web.asgaralihospital.com/selecteddoctor?docid=1674"
                                                   target="_blank">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        Appointment
                                                    </button>
                                                </a>
                                                <button type="button" onclick="doctorDetails(this)"
                                                        data-image="{{$item->image}}" data-name="{{$item->name}}"
                                                        data-degree="{{$item->degree}}"
                                                        data-department="{{$item->department}}"
                                                        data-position="{{$item->position}}"
                                                        data-details="{{$item->details}}"
                                                        class="btn btn-info btn-sm" data-toggle="modal"
                                                        data-target=".bd-example-modal-lg">Doctor Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        </div>

                        <!-- Docotor Details Modal Starts -->
                        <!-- Modal -->

                        <div class="doc-profile-modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                             aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                                <img class="doc-img" id="doc-image" src="" alt="">
                                                <h3 class="doc-name" id="doc-name"></h3>
                                            </div>
                                            <div class="col-sm-8 doc-details">
                                                <p id="doc-degree"></p>
                                                <p id="doc-department"></p>
                                                <p id="doc-position"></p>
                                                <p id="doc-details"><img
                                                        src="{{ asset('frontend/images/footer/hc-icon.png') }}"
                                                        alt=""></p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="https://web.asgaralihospital.com/appointment">
                                            <button type="button" class="btn btn-primary btn-sm">Make An Appointment
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-secondary doc-close" data-dismiss="modal">
                                            Close
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Details Modal Ends -->


                    </div>
                @endforeach
            </div>
        @endforeach


    </div>
</section>


<script>
    <!--End Medical Departments area-->
    //-----------------------DETAILS OF DOCTOR-----------------
    function doctorDetails(element) {
        let image = $(element).attr("data-image");
        let name = $(element).attr("data-name");
        let degree = $(element).attr("data-degree");
        let department = $(element).attr("data-department");
        let position = $(element).attr("data-position");
        let details = $(element).attr("data-details");
        document.getElementById('doc-image').src = image;
        document.getElementById('doc-name').innerHTML = name;
        document.getElementById('doc-degree').innerHTML = degree;
        document.getElementById('doc-department').innerHTML = department;
        document.getElementById('doc-position').innerHTML = position;
        document.getElementById('doc-details').innerHTML = details;
    }
</script>
