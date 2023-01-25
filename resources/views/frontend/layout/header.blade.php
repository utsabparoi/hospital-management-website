<!-- Preloader -->
<div class="preloader"></div>
<div class="top-bar">

</div>

<div class="sticky-new-header">

    <!-- Header Top Starts -->
    <div class="header-top-two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li class="top-addrs">
                            <!-- <i class="flaticon-hospital-1"></i> -->
                            <lord-icon src="{{ asset('frontend/json/zzcjjxew.json') }}" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:50px;height:50px">
                            </lord-icon>
                            {{$WebsiteInformation->primary_address}}
                        </li>
                        <li>
                            {{-- <img src="{{ asset('frontend/images/hopeline1.png') }}" alt="" title=""> --}}
                            <lottie-player src="{{ asset('/frontend/lord-icon/helpline.json') }}" background="transparent" speed="1" style="width: 80px; height: 80px;" loop autoplay></lottie-player>
                            <p class="btn-primary rounded-pill">&nbsp;&nbsp;<strong>Hopeline {{$WebsiteInformation->hot_line}}</strong>&nbsp;&nbsp;</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header top ends -->


    <!-- header start -->
    <header class="header">
        <div class="container">
            <div class="row ">
                <div class="header-item item-left">
                    <a href="/">
                        <div class="logo">
                            <!-- <img src="images/logo/icon-logo.png" class="" alt="" title="">  -->
                            <!-- class="rotate" -->
                            <!-- <img src="images/logo/icon-name.png" class="not-rotate" alt="" title=""> -->

                            <!-- <img src="images/logo/aah-logo.png" class="rotate" alt="" title=""> -->
                            <img src="{{ asset($WebsiteInformation->company_logo) }}" class="" alt="{{$WebsiteInformation->name}}" title="" style="margin:40px 0 0 -2px; ">
                            <p class="logo-text">we create hope</p>
                        </div>
                    </a>
                </div>

                <!-- menu start here -->
                <div class="header-item item-center">
                    <div class="menu-overlay">
                    </div>
                    <nav class="menu">
                        <div class="mobile-menu-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="menu-main">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/consultants">Consultants</a>
                            </li>
                            <!-- <li class="menu-item-has-children">
                                    <a href="#">About us <i class="fas fa-angle-down"></i></a>
                                    <div class="sub-menu single-column-menu">
                                        <ul>
                                            <li><a href="#">Who We Are</a>
                                                <hr>
                                            </li>
                                            <li><a href="#">Mission, Vision, Values</a>
                                                <hr>
                                            </li>
                                            <li><a href="#">Board of Directors</a>
                                                <hr>
                                            </li>
                                            <li><a href="#">Message from CEO</a>
                                                <hr>
                                            </li>
                                            <li><a href="#">Management</a>
                                                <hr>
                                            </li>
                                            <li><a href="#">Corporate Facilities & Services</a>
                                                <hr>
                                            </li>
                                            <li><a href="#">Contact Us</a>
                                                <hr>
                                            </li>
                                        </ul>
                                    </div>
                                </li> -->
                            <li class="menu-item-has-children">
                                <a href="#faci-id">Facilities <i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    <div class="list-item text-center">
                                        <ul>
                                            <li><a href="/singleFacilities">ATM</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Bed Category</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Cafeteria</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Car Parking</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Discharge Protocol</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">In-Patient Services</a>
                                                <hr>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-item text-center">
                                        <ul>
                                            <li><a href="/singleFacilities">Medical Records</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Mortuary</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Pharmacy</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Prayer Room</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">In-Patient Visiting Hour</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">ROP Clinic</a>
                                                <hr>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-item text-center">
                                        <ul>
                                            <li><a href="/singleFacilities">Optical Shop</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Ambulance Service</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Blood Bank</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Central Sterile Supply Department (CSSD)</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Day Care</a>
                                                <hr>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-item text-center">
                                        <ul>
                                            <li><a href="/singleFacilities">Food & Beverage (F&B)</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Gift Corner</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Laundry Service</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleFacilities">Vaccination Center</a>
                                                <hr>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Departments <i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    <div class="list-item text-center">
                                        <ul>
                                            <li><a href="/singleDepartment">Vascular Surgery</a>
                                                <hr>
                                            </li>

                                            <li><a href="/singleDepartment">Thoracic Surgery</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Pain Clinic</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Psychiatry</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Accident and Emergency</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Anaesthesiology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Cardiac Surgery</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Cardiology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Child Development Center</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Critical Care</a>
                                                <hr>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-item text-center">
                                        <ul>
                                            <li><a href="/singleDepartment">Dental and Maxillofacial Surgery</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Endocrinology and Diabetology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Dermatology and Venereology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Dietetics and Nutrition</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">ENT, Head and Neck Surgery</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Gastroenterology and Hepatology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">General and Laparoscopic Surgery</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Haematology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Internal Medicine</a>
                                                <hr>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-item text-center">
                                        <ul>
                                            <li><a href="/singleDepartment">Laboratory Medicine</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Neonatology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Nephrology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Neurology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Neurosurgery</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Obstetrics and Gynaecology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Oncology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Ophthalmology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Orthopaedics and Trauma</a>
                                                <hr>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-item text-center">
                                        <ul>
                                            <li><a href="/singleDepartment">Paediatrics</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Paediatric Surgery</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Physical Medicine and Rehabilitation</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Plastic, Reconstructive and Cosmetic Surgery</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Radiology and Imaging</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Respiratory Medicine</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">TRANSFUSION MEDICINE</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Urology and Andrology</a>
                                                <hr>
                                            </li>
                                            <li><a href="/singleDepartment">Vaccination</a>
                                                <hr>
                                            </li>
                                        </ul>
                                    </div>
                                </div>



                                <!-- <li class="menu-item-has-children">
                                    <a href="#">Concern <i class="fas fa-angle-down"></i></a>
                                    <div class="sub-menu single-column-menu">
                                        <ul>
                                            <li><a href="#">Asgar
                                                    Ali Medical College</a>
                                                <hr>
                                            </li>
                                            <li><a href="#">Fazlur Rahman Nursing Institute</a>
                                                <hr>
                                            </li>
                                        </ul>
                                    </div>
                                </li> -->
                            <li class="menu-item-has-children">
                                <a href="#">Online Services <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>
                                        <li><a href="#">Online Appointment</a>
                                            <hr>
                                        </li>
                                        <li><a href="#">Online Payment</a>
                                            <hr>
                                        </li>
                                        <li><a href="#">Online Registration</a>
                                            <hr>
                                        </li>
                                        <li><a href="#">Online Diagnostics Report</a>
                                            <hr>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Health Package <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>
                                        <li><a href="#">Regular Health Package</a>
                                            <hr>
                                        </li>
                                        <li><a href="#">Home Health Package</a>
                                            <hr>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('about_us')}}">About Us</a>
                            </li>
                            <!-- Small Device Search Bar -->
                            <div class="rou-sc">
                                <div class="round-btn" id="show-search-box">
                                    {{-- <i class="fa fa-search"></i> --}}
                                    <lord-icon src="{{ asset('/frontend/lord-icon/search.json') }}" background="transparent" speed="0.3" style="width: 50px; height: 50px; margin:-6px 0 0 -6px;" trigger="morph"></lord-icon>
                                </div>

                                <form id="hidden-search-box" class="navbar-form hidden-search-box" role="search">
                                    <div class="traingle"></div>
                                    <div class="input-group add-on">
                                        <input class="form-control addon-text-box" placeholder="Search" name="s" type="text">

                                        <button type="submit" class="input-group-btn addon-btn">
                                            {{-- <i class="fa fa-search flip-icon"></i> --}}

                                        </button>
                                    </div>
                                </form>
                            </div>
                        </ul>
                    </nav>
                </div>



                <!-- menu end here -->
                <div class="header-item item-right">

                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>


            </div>
        </div>
    </header>
    <!-- header end -->

</div>
