<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->
<!-- start: HEAD -->

<!-- Mirrored from web.asgaralihospital.com/selecteddoctor?docid= by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 05:45:00 GMT -->
<head>
    <title>Doctor Appointment</title>
    <!-- start: META -->
    <meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" />

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: GOOGLE FONTS -->

    <!-- end: GOOGLE FONTS -->
    <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/Pportal/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('frontend/Pportal/vendors/wJs/styles/jqx.base.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/Pportal/vendors/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Pportal/vendors/themify-icons/themify-icons.min.css') }}">
    <link href="{{ asset('frontend/Pportal/vendors/animate.css/animate.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('frontend/Pportal/vendors/perfect-scrollbar/perfect-scrollbar.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('frontend/Pportal/vendors/switchery/switchery.min.cs') }}s" rel="stylesheet" media="screen">
    <link href="{{ asset('frontend/Pportal/vendors/sweetalert/sweet-alert.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('frontend/Pportal/vendors/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/Pportal/vendors/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('frontend/Pportal/vendors/toastr/toastr.min.css') }}" rel="stylesheet" />
    <!-- end: MAIN CSS -->
    <!-- start: CLIP-TWO CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/Pportal/assets/css/styles.cs') }}s">
    <link rel="stylesheet" href="{{ asset('frontend/Pportal/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Pportal/assets/css/themes/theme-1.css') }}" id="skin_color" />
    <link rel="icon" href="{{ asset('frontend/Pportal/assets/images/asgarali_icon.png') }}" sizes="32x32" />
    <!-- end: CLIP-TWO CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <style>
        #captchaInput {
            width: 2.0em;


        }

    </style>
</head>
<!-- end: HEAD -->
<!-- start: BODY -->


<body class="login">
<!-- start: LOGIN -->




<div class="row">
    <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="logo margin-top-20">
            <img src="{{ asset('frontend/Pportal/assets/images/new-Logo.png') }}" style="height:60px;float:right;" alt="Smart Software Limited" />
        </div>
        <!-- start: LOGIN BOX -->
        <!--<div class="box-login row">-->


        <div class="container-fluid container-fullw bg-white">




            <form action="#" role="form" class="smart-wizard" id="forms">
                <div id="wizard" class="swMain">
                    <!-- start: WIZARD SEPS -->
                    <ul id="_wiz_header">
                        <li>
{{--                            <a href="#step-1" id="_a1">--}}
                                <a href="#step-1" id="_a1" class="selected" isdone="1" rel="1">
                                <div class="stepNumber">
                                    1
                                </div>
                                <span class="stepDesc"><small> Appointment schedule </small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-2" id="_a2">
                                <div class="stepNumber">
                                    2
                                </div>
                                <span class="stepDesc"> <small>Patient Information  </small></span>
                            </a>
                        </li>

                        <li>
                            <a href="#step-3" id="_a3">
                                <div class="stepNumber">
                                    3
                                </div>
                                <span class="stepDesc"> <small> Complete </small> </span>
                            </a>
                        </li>
                    </ul>
                    <!-- end: WIZARD SEPS -->
                    <!-- start: WIZARD STEP 1 -->
                    <div id="step-1">



                        <div class="row">

                            <div class="col-md-12">
                                <fieldset>
                                    <legend>
                                        Appointment Details
                                    </legend>


                                    <div class="form-group" id="_form_group_specialization_">
                                        <label class="control-label text-bold">
                                            Speciality of Doctor <span class="symbol required"></span>

                                        </label>


                                        <div class="form-group">
                                            <select class="form-control" id="_specialization_" name="_specialization_"></select>
                                        </div>


                                    </div>



                                    <div class="form-group">
                                        <label class="control-label text-bold">
                                            Doctor <span class="symbol required"></span>
                                        </label>


                                        <div class="form-group">
                                            <select style="font-size:small;" class="form-control" id="_doctor_"></select>
                                        </div>


                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label class="block text-bold">
                                                    Appointment Date <span class="symbol required"></span>
                                                </label>


                                                <div class="row">


                                                    <div class="col-md-4 col-sm-4">
                                                        <label class="text-small Bold"> Year </label>
                                                        <div class="form-group">

                                                            <select class="form-control" id="_year1_">
                                                                <option value="" disabled>Year</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <label class="text-small Bold"> Month </label>
                                                        <div class="form-group">
                                                            <select class="form-control" id="_month1_">
                                                                <option value="" disabled>Month</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-4">
                                                        <label class="text-small Bold"> Day </label>
                                                        <div class="form-group">
                                                            <select class=" form-control" id="_day1_">
                                                                <option value="" disabled>Day</option>

                                                            </select>
                                                        </div>
                                                    </div>





                                                </div>


                                            </div>


                                        </div>

                                    </div>



                                    <div class="form-group">
                                        <label class="control-label text-bold">
                                            Available schedule Slot <span class="symbol required"></span>
                                        </label>



                                        <select class="form-control" id="_slots_" name="_slots_"></select>



                                    </div>











                                </fieldset>









                                <div class="form-group">
                                    <button class="btn btn-primary btn-o next-step btn-wide pull-right">
                                        Next <i class="fa fa-arrow-circle-right"></i>
                                    </button>
                                </div>












                            </div>
                        </div>





                    </div>


                    <!-- end: WIZARD STEP 1 -->
                    <!-- start: WIZARD STEP 2 -->



                    <div id="step-2" style="display:none;">






                        <div class="row">

                            <div class="col-md-12">

                                <fieldset>
                                    <legend>
                                        Personal Information
                                    </legend>

                                    <label class="label-inverse" style="width:100%;color:white; font-size:medium; margin-top:-8px;padding-bottom:3px; text-align:center;" id="_doctor_caption_">

                                    </label>

                                    <div class="panel-group accordion" id="accordion" style="margin-bottom:0px;">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">
                                                    <!--<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                    <input type="checkbox" />  <i class="icon-arrow"></i> Have a HCN (Health Card No) ?
                                                    </a>-->

                                                    <div class="accordion-toggle collapsed form-group form-inline"><label class="text-bold"> Have a HCN (Health Card No)?</label><span style="margin-left:8px;"><input type="radio" name="is_hcn_" value="1" />&nbsp;Yes</span><span style="margin-left:8px;"><input type="radio" value="0" name="is_hcn_"  checked="checked" />&nbsp;No</span> </div>


                                                </h6>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="_hcn_no" name="_hcn_no" placeholder="Enter your HCN NO ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-bold">
                                                    Full Name <span class="symbol required"></span>
                                                </label>
                                                <input type="text" id="_full_name" placeholder="Enter your Full Name" class="form-control" name="_full_name" />
                                            </div>
                                        </div>



                                        <div class="col-md-6">




                                            <div class="form-group">
                                                <label class="control-label text-bold">
                                                    Gender <span class="symbol required"></span>
                                                </label>
                                                <div class="clip-radio radio-primary">
                                                    <input type="radio" value="F" name="gender" id="gender_female">
                                                    <label for="gender_female">
                                                        Female
                                                    </label>
                                                    <input type="radio" value="M" name="gender" id="gender_male" checked>
                                                    <label for="gender_male">
                                                        Male
                                                    </label>
                                                </div>
                                            </div>








                                        </div>

                                    </div>
                                    <div class="row">




                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label text-bold">
                                                    Mobile No <span class="symbol required"></span>
                                                </label>


                                                <input type="text" placeholder="11 digits Mobile no " maxlength="11" class="form-control" id="_mobile" name="_mobile" />



                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label text-bold">
                                                    Email <!--<span class="symbol required"></span>-->
                                                </label>
                                                <input type="email" placeholder="@email" class="form-control" id="_email" name="_email" />
                                            </div>
                                        </div>





                                    </div>



                                    <div class="row">

                                        <div class="col-sm-6">


                                            <div class="col-sm-2" style=" margin-left:-10px;">

                                                <div class="form-group-sm small">
                                                    <label class="text-small Bold">Age</label>
                                                    <div class="form-group-sm">
                                                        <input type="text" id="_age_in_year" style="min-width:50px;" maxlength="2" class="form-control small" />
                                                    </div>


                                                </div>



                                            </div>






                                            <div class="col-sm-10 margin-left-0" style="margin: 0;">

                                                <div class="form-group-sm">
                                                    <div class="col-sm-2" style="margin:0;">
                                                        <label class="text-small Bold"></label>
                                                        <label class="small" style="font-size: 8px; color: #268933; line-height: 1.0em; padding-top: 10px; "> OR DOB </label>
                                                    </div>

                                                    <div class="col-sm-3" style="margin:0;">
                                                        <label class="text-small Bold">Year</label>
                                                        <input id="_year_birth_date" type="text" maxlength="4" style="min-width:60px;" placeholder="Year" class="form-control small">
                                                    </div>
                                                    <div class="col-sm-3" style="margin:0px;">
                                                        <label class="text-small Bold"> Month </label>
                                                        <input type="text" id="_month_" placeholder="Month" maxlength="2" style="min-width:50px;" class="form-control small">
                                                    </div>
                                                    <div class="col-sm-3" style="margin:0;">
                                                        <label class="text-small Bold">Days</label>
                                                        <input type="text" id="_day_" placeholder="Days" maxlength="2" style="min-width:50px;" class="form-control small">
                                                    </div>



                                                </div>




                                            </div>








                                        </div>



                                        <div class="col-sm-6" style="margin:0;">
                                            <label class="text-small Bold">NID </label>
                                            <input type="text" id="_nid_" style="width:100%;" maxlength="25" placeholder="National ID" class="form-control small">
                                        </div>




                                    </div>











                                    <div class="row margin-top-0">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label text-bold">
                                                    Street
                                                </label>
                                                <textarea  id="_address_" cols="10" rows="2" maxlength="200" style="width:100%; resize:none;">  </textarea>
                                            </div>
                                        </div>



                                    </div>


                                    <div class="row margin-top-0">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label text-bold">
                                                    City
                                                </label>
                                                <input type="text" class="form-control" id="_city" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label text-bold">
                                                    District
                                                </label>
                                                <input type="text" class="form-control" maxlength="100" id="_district" />
                                            </div>
                                        </div>


                                    </div>



























                                    <div class="row">


                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <div class="form-wrapper" style="margin-top:-8px;">

                                                    <label for="divGenerateRandomValues" style="margin-bottom:5px;">Captcha <span class="symbol required"></span> </label>


                                                    <div>
                                                        <div style="float:left" id="divGenerateRandomValues"><input style="text-align: center;width: 90px;border: none;margin-top:-8px;" disabled="true" id='txtNewInput'></input></div><a href="javascript:void(0)" style="float:left;margin-left: 2px;" id="_abcd">
                                                            <img style="margin-top: 4px;" src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QA/wD/AP+gvaeTAAACeElEQVQ4ja2QP0wTYRjGn/vuuzvaawu1GlNpq2AMhYU/CgMJg3GjSZ1q2HQw/omLOhlI9BggDrqqIS5uhk4WmjC5kBjF0GKiYGJMkBZpQltooXdcr999TiWIlMlnepP3/T3P+74CDkjTNJKu9o+IEr1tM7vb5rY7MRERcYxovYg8mm3/wuicqjr8wVCry+3xYOHT5/3B6GiSH2K1xGRknNRhSaKLbW3n2sNdHa5CoWikF9OVw2lDQ4NQnc49IuBFYjIyDgBE0zQiS3Suve2cW2lqIunUkp7P558xm3UrckU5aLBV3MYZv18WCL0ci02LAEDT1f4RVXX4W7wtYmoxrTPOr8xMDH886t7lle/mwMAlZSOXC+5ecMYAvCWiLN0KBFtdmbU1A+DPG8EAxgXgdSaTMYOhgItS6Q4AELvGepqbPShubdkA3jT6dmIyolVt9iqfL5getwc2t3sBgHKbuySJomYxpSQ51hsZAIDT0H9WBeKUZArOuAoARBBJxbJqkCVZdzPz/HEGhuoIUImaVasGIoo7AEBEIiyVSmX4TvoUyvnd6GhSa2QgQrru83pJqVSCQJACAGJZ1stsJrsbCgUUDtwE8OQo+OrY7KAoCPeDZ0OO9ezvHVZjUwBAlR963AjTx5ub+Y6uzrDy9dvyPhTTpmVzzxMSKG4QgT8Id3Y4C4UiM4y9bK+0EH8HgMTj1xg4e5/byFW9J1r+SjWrqik1kaXTp3wP+y72OXVdZ6urv8rcsoc1TbMBgEZHkxqzca+i65if//DP6n09Pep2uYSV5ZUdwzCzjFcjM0+jq/W+cNzXo2NJJhJaFghSrMameqWFeD35v+kPIJgITpwkoaQAAAAASUVORK5CYII=' />
                                                        </a>
                                                        <input style="width:100px; margin-top:5px ;float:left;margin-left: 0px; margin-top: 0px; height: 25px; color:black;font-weight:bold; " autocomplete='off' id="defaultReal" name="defaultReal">

                                                    </div>


                                                    <div class="col-md-12"><span id="Captcha_RequiredFieldValidator1" style="color:Red; display:none;float:left">Required </span></div>


                                                </div>


                                            </div>


                                        </div>



                                    </div>







                                    <div class="row">


                                    </div>




                                </fieldset>



                                <div class="form-group">
                                    <button class="btn btn-primary btn-o back-step btn-wide pull-left">
                                        <i class="fa fa-circle-arrow-left"></i> Back
                                    </button>



                                    <button class="btn btn-primary btn-o next-step btn-wide pull-right">
                                        Confirm <i class="fa fa-arrow-circle-right"></i>
                                    </button>

                                    <!--<div class="form-group-sm inline  pull-right">

                                <input type="submit" id="_submit_" value="Confirm" class="btn btn-primary btn-o next-step btn-wide pull-right">


                        </div>-->

                                </div>








                            </div>
                        </div>















                    </div>



                    <!-- start: WIZARD STEP 4 -->



                    <div id="step-3" style="display:none;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h1 class=" ti-check block text-primary"></h1>
                                    <h2 class="StepTitle">Congratulations!</h2>
                                    <p class="text-large">
                                        Your Appointment is Successfully Completed.
                                    </p>
                                    <div class="col-md-12">
                                        <div class="col-lg-6" style="text-align:right">
                                            Registration Fee
                                        </div>
                                        <div class="col-lg-4" style="text-align:right">
                                            <span id="reg_fee">  </span>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-lg-6" style="text-align:right">
                                            Consultation Fee
                                        </div>
                                        <div class="col-lg-4" style="text-align:right">
                                            <span id="visit_fee">  </span>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>






                                    <div class="col-md-12">
                                        <div class="col-lg-6" style="text-align:right;font-weight:bold;color:black">
                                            Total
                                        </div>
                                        <div class="col-lg-4" style="text-align:right">
                                            <span style="font-weight: bold;color:black;" id="total_fee">  </span>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                    <br/>

                                    <p class="text-small" style="color: #393755;font-weight:bold;">
                                        You will get a confirmation sms very shortly.
                                    </p>

                                    <div class="col-md-12">
                                        <label class="copyright" style="color: #900C3F; margin-left:15%; margin-right: 5px; text-align: left">
                                            <font style="font-weight:bold;clear:both;"> Disclaimer :<br /></font>
                                            <span>
                                                            Asgar Ali Hospital reserves the right to accept or reject any appointment.</br>
                                                For appointment & information, please call our 24-hour HOPELINE 10602.
                                                        </span>
                                        </label>
                                    </div>


                                    <a class="btn btn-primary btn-o go-first" href="javascript:void(0)">
                                        Make a new Appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: WIZARD STEP 4 -->
                </div>

                <input type="hidden" id="_HCNFEES" value="0" />

            </form>
























            <div class="copyright">
                Copyright
                &copy; <span class="current-year">@2020</span><span style="margin-left:10px;" class="text-bold text-uppercase">Smart Software Limited</span>. <span>All rights reserved</span>
            </div>
            <!-- end: COPYRIGHT -->
        </div>
        <!-- end: LOGIN BOX -->









        <div class="row form-horizontal" >
            <table style="width:100%;" cellpadding="0" cellspacing="0" >
                <tr>
                    <td  style="border-top: solid; border-width: 10px; border-color: #5994B9; width: 70%; "> </td>
                    <td  style="border-top: solid; border-width: 10px; border-color: #7ECA7F; width: 30%" > </td>
                </tr>

            </table>

        </div>







    </div>





</div>





<!-- end: LOGIN -->
<!-- start: MAIN JAVASCRIPTS -->



<script src="{{ asset('frontend/Pportal/vendors/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('frontend/Pportal/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/modernizr/modernizredf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/jquery-cookie/jquery.cookieedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/perfect-scrollbar/perfect-scrollbar.minedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/switchery/switchery.minedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/sweetalert/sweet-alert.minedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/select2/select2.minedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/selectFx/classieedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/selectFx/selectFxedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/bootstrap-datepicker/bootstrap-datepicker.minedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/toastr/toastr.minedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/moment/moment.minedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/wJs/_gridedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{ asset('frontend/Pportal/vendors/jquery-smart-wizard/jquery.smartWizardedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/jquery-validation/jquery.validate.minedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<script src="{{ asset('frontend/Pportal/vendors/LinkJS/LINQ_JS_MINedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>

<script src="{{ asset('frontend/Pportal/assets/js/commonedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>











<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src="{{ asset('frontend/Pportal/assets/js/mainedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<!-- start: JavaScript Event Handlers for this page -->
<!--<script src="assets/js/login.js"></script>-->
<script src="{{ asset('frontend/Pportal/vendors/Capcha/jquery.captcha.basic.minedf6.js?ver<%=DateTime.Now.Ticks.ToString()%>') }}"></script>
<!--<script src="DoctorAppointment.js?ver<%=DateTime.Now.Ticks.ToString()%>"></script>-->

<script>
    document.write("<script type='text/javascript' src={{ asset('frontend/Pportal/assets/js/common.js?v=') }}" + Date.now() + "'><\/script>");
    document.write("<script type='text/javascript' src='{{ asset('frontend/Pportal/docapt.js?v=') }}" + Date.now() + "'><\/script>");

</script>



<script>
    $(document).ready(function() {
        Main.init();
        //  $('.datepicker').datepicker({ autoclose: true, todayHighlight: true });
        //	Login.init();
        $("#forms").captcha();
        // FormWizard.init();
        new ap().sp();
    });
</script>
<!-- end: JavaScript Event Handlers for this page -->
<!-- end: CLIP-TWO JAVASCRIPTS -->




<div style="display:none">
    <div id="_temp_data_1234567890">  </div>

    <div id="_temp_slot_1234567890">  </div>

</div>
<div class="busy_load"></div>
</body>


<!-- end: BODY -->

<!-- Mirrored from web.asgaralihospital.com/selecteddoctor?docid= by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 05:45:11 GMT -->
</html>
