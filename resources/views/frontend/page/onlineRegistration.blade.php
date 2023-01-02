<!DOCTYPE html>

<html lang="en">

<!-- Head tag -->


<!-- Mirrored from web.asgaralihospital.com/preg by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 10:36:44 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Patient Registration</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Worlds Best Report, Charts, Tables etc." name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="{{asset('frontend/assets_registration/img/logo.png')}}">

    <!--<link rel="stylesheet" href="OtherProject/Pportal/vendors/bootstrap/css/bootstrap.min.css">-->

    <link href="{{asset('frontend/assets_registration/vendor/toastr/toastr.min.css')}}" rel="stylesheet" />

    <!-- material icons -->
    <link href="{{asset('frontend/assets_registration/vendor/EasyUI/themes/default/easyui.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets_registration/vendor/material-icons/material-icons.css')}}" rel="stylesheet">
    <!-- flags icons -->
    <link href="{{asset('frontend/assets_registration/vendor/flags/css/flag-icon.min.css')}}" rel="stylesheet">
    <!-- daterange picker -->

    <!--<link href="../../assets/css/style-blue-light.css" rel="stylesheet" />-->
    <!--<link href="../../assets/css/style-darkblue-light.css" rel="stylesheet" />-->
    <!--<link href="../../assets/css/style-darkblue-dark.css" rel="stylesheet" id="stylelink">-->

    <link href="{{asset('frontend/assets_registration/css/style-green-light.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets_registration/vendor/sweetalert/sweet-alert.css')}}" rel="stylesheet" />
    <style>
        #toast-container > div {
            opacity: 100;
            background-color: #FF7F8D;
            font-weight:bolder;
        }




    </style>
</head>

<!-- Head tag ends -->

<!-- Body -->

<body class="h-100 no-sidemenu">
<div class="loader container-fluid">
    <div class="row h-100">
        <div class="col-auto align-self-center  mx-auto text-center">
            <div class="loader-ripple"><div></div><div></div></div>
            <a href="#" class="logo">
                <img src="{{asset('frontend/assets_registration/img/logo-inverse.png')}}" style="width:150px;" alt="" class="logo-icon">
                <div class="logo-text center">

                </div>
            </a>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="content shadow-sm position-relative">
        <header class="header">

            <div class="col-md-12 align-self-center " style="overflow:hidden;text-align:center">
                <!--<div class="col-auto align-self-center  mx-auto">-->
                <!--<div class="loader-ripple"><div></div><div></div></div>-->

                <a href="#" class="logo align-self-center ">
                    <img src="{{asset('frontend/assets_registration/img/logo-inverse.png')}}" style="width:250px;" alt="" class="logo-icon">
                    <div class="logo-text center">

                    </div>
                </a>


                <!--</div>-->
            </div>



        </header>






        <!--<div class="background opac">
            <img src="../../assets/img/404.jpg" alt="">
        </div>-->

        <!-- Main container starts -->
        <div class="container main-container" id="main-container">




            <div class="col-12  col-sm-12 col-md-12 col-lg-8 col-xl-6 mx-auto align-self-center mt-2">



                <!--<div class="media">
                    <figure class="avatar avatar-120 mr-2 ml-3">
                        <img src="../../assets/img/upload_avater.png" alt="Generic placeholder image">

                    </figure>

                    <div class="media-body">

                    </div>
                    <div class="d-inline-block">

                    </div>


                </div>

                <div class="card-footer bg-transparent  border-top-0 border-bottom   ml-2 pl-0 py-0">
                    <div class="row ml-0 pl-0">
                        <div class="d-inline"><button class="btn btn-sm btn-link ">Upload(Photo)</button> </div>

                    </div>

                </div>-->






                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-12 ">

                            <div class="row ">





                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Patient Name<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <input type="text" id="_pname" maxlength="150" style="width:100%" class="form-control-sm" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Father's Name<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <input type="text" id="_fname" maxlength="150" style="width:100%" class="form-control-sm" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Mother's Name<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <input type="text" id="_mname" maxlength="150" style="width:100%" class="form-control-sm" placeholder="">
                                    </div>
                                </div>

                            </div>






                            <div class="row ">

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Spouse Name</label>
                                        <input id="_spousename" type="text" maxlength="150" style="width:100%" class="form-control-sm" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Guardian's Name</label>
                                        <input id="_guardianname" type="text" maxlength="150" style="width:100%" class="form-control-sm" placeholder="">
                                    </div>
                                </div>


                            </div>












                            <div class="row ">
                                <div class="col-lg-3 col-md-3">

                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Date&nbsp;of&nbsp;Birth<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <input class="easyui-datebox form-control-sm" id="_dob_" style="width:100%;height:30px;" />
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Gender<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <select class="form-control-sm" style="width:100%" id="_sex">  <option value="M">Male</option><option value="F">Female</option><option value="O">Others</option></select>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group ">
                                        <label class="text-dark text-small font-weight-bolder">Blood&nbsp;Group</label>
                                        <select id="_bg" class="form-control-sm" style="width:100%"><option value="A+">A+</option><option value="A-">A-</option><option value="B+">B+</option><option value="B-">B-</option><option value="O+">O+</option><option value="O-">O-</option><option value="AB+">AB+</option><option value="AB-">AB-</option><option value="--">Unknown</option></select>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group ">
                                        <label   class="text-dark font-weight-bolder">Religion<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <select id="_religion" class="form-control-sm" style="width:100%"><option value="I">Islam</option><option value="H">Hindu</option><option value="C">Christian</option><option value="B">Buddist</option><option value="O">Others</option></select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group ">
                                        <label  class="text-dark font-weight-bolder">Maritial Status<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <select id="_mstatus" class="form-control-sm" style="width:100%"><option value="0">Single</option><option value="1">Married</option><option value="2">Divorced</option><option value="3">Widow</option></select>
                                    </div>
                                </div>
                            </div>





                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder"> Address<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <textarea id="_presadd" rows="5" style="width: 100%; resize: none;"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Permanent Address<span class="text-danger  font-weight-bolder ml-1">*</span><span style="font-size:x-small;" class="ml-2 text-primary"><input class="text-sm-left  pt-0" type="checkbox" id="_chk_issame" /><font style=" position:absolute"> (Same as Address) </font> </span></label>
                                        <textarea id="_peradd" rows="5" style="width:100%; resize:none;"></textarea>
                                    </div>
                                </div>
                            </div>





                            <div class="row ">
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">District<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <select id="_district_cmb" class="form-control-sm" style="width:100%"></select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Thana<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <select id="_thana_cmb" class="form-control-sm" style="width:100%"></select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">P.S</label>
                                        <input id="_ps" type="text" class="form-control-sm" style="width:100%" />
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Postal Code</label>
                                        <input id="_zip" maxlength="10" type="tel" class="form-control-sm" style="width:100%" />
                                    </div>
                                </div>
                            </div>









                            <div class="row ">
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">National ID</label>
                                        <input id="_nid" maxlength="30" type="text" class="form-control-sm" style="width:100%" />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Email</label>
                                        <input  maxlength="50" id="_email" type="email" class="form-control-sm" style="width:100%" />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Mobile<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <input id="_mobile" maxlength="15" type="number" class="form-control-sm" style="width:100%" />
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Phone</label>
                                        <input id="_phone" maxlength="20" type="number" class="form-control-sm" style="width:100%" />
                                    </div>
                                </div>
                            </div>
















                            <div class="row ">


                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Emergency Contact Person Name <span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <input id="_contactp" type="text" maxlength="150" style="width:100%" class="form-control-sm" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group ">
                                        <label class="text-dark font-weight-bolder">Emergency Contact Person Number<span class="text-danger  font-weight-bolder ml-1">*</span></label>
                                        <input id="_contactnumber" type="number" maxlength="20" style="width:100%" class="form-control-sm" placeholder="">
                                    </div>
                                </div>
                            </div>














                            <div class="row ">
                                <div class="col-lg-12 col-md-12">
                                    <button id="_save_" type="button" class="mb-2 btn btn-lg btn-info">Save</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>



            </div>






        </div>
        <!-- Main container ends -->
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md text-center text-md-left align-self-center">
                    <p>All rights reserved by <a href="#">Smart Software Ltd</a></p>
                </div>

            </div>
        </div>
    </footer>

</div>
<!-- wrapper ends -->


<!-- Global js mandatory -->
<script src="{{asset('frontend/assets_registration/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/assets_registration/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets_registration/vendor/bootstrap4beta/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets_registration/vendor/sweetalert/sweet-alert.min.js')}}"></script>
<script src="{{asset('frontend/assets_registration/vendor/toastr/toastr.min.js')}}"></script>


<!--<script src="../../assets/vendor/bootstrap-4.1.1/js/bootstrap.min.js"></script>-->
<!--<script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>-->
<script src="{{asset('frontend/assets_registration/vendor/cookie/jquery.cookie.js')}}"></script>

<!-- Customized template js mandatory -->
<script src="{{asset('frontend/assets_registration/js/main.js')}}"></script>

<!-- theme picker -->
<script src="{{asset('frontend/assets_registration/js/style-picker.js')}}"></script>
<script src="{{asset('frontend/assets_registration/vendor/EasyUI/jquery.easyui.min.js')}}"></script>
<script src="{{asset('frontend/assets_registration/vendor/LinkJS/LINQ_JS.js')}}"></script>
<!--<script src="../assets/common.min.js"></script>-->

<script>
    document.write("<script type='text/javascript' src={{asset('frontend/assets_registration/common.min.js?v=')}}" + Date.now() + "'><\/script>");
</script>




<!-- theme picker ends -->



</body>

<!-- Body ends -->


<!-- Mirrored from web.asgaralihospital.com/preg by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 10:36:50 GMT -->
</html>
