
<!doctype html>
<html lang="en">


<!-- Mirrored from web.asgaralihospital.com/pportal by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 10:40:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Patient Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Portal">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">


    <link href="{{asset('frontend/diagnosticReport/main.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/diagnosticReport/assets/vendor/sweetalert/sweet-alert.css')}}" rel="stylesheet" />
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100 bg-plum-plate bg-animation">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <div class="mx-auto app-login-box col-md-8">

                    <div class="modal-dialog w-100 mx-auto">
                        <form  class="needs-validation" id="form1" novalidate>
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="app-logo mx-auto mb-3 "></div>
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Welcome</div>
                                            <span>Sign (with HCN & MR No)</span>
                                        </h4>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group"><input name="_hcn_" id="_hcn_"  minlength="9" placeholder="HCN here..." type="text" required class="form-control">
                                                <div class="invalid-feedback"> Please enter valid HCN</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative form-group"><input name="_mrno_" id="_mrno_" minlength="9" placeholder="MR No here..." type="text" required class="form-control">
                                                <div class="invalid-feedback"> Please enter valid MR. No</div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="divider"></div>
                                    <!--<h6 class="mb-0">No account? <a href="javascript:void(0);" class="text-primary">Sign up now</a></h6>-->
                                </div>
                                <div class="modal-footer clearfix">
                                    <!--<div class="float-left"><a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a></div>-->
                                    <div class="float-right">
                                        <button id="_login_" class="btn btn-primary btn-lg" type="submit">Login</button>

                                    </div>
                                </div>

                            </div>
                        </form>

                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function () {
                                'use strict';
                                window.addEventListener('load', function () {
                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                        var forms = document.getElementsByClassName('needs-validation');


                                        // Loop over them and prevent submission
                                        var validation = Array.prototype.filter.call(forms, function (form) {


                                            form.addEventListener('submit', function (event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();

                                                    } else {

                                                        //if (typeof (Android) != 'undefined') {
                                                        //    sessionStorage.setItem("userid", "aloke");
                                                        //    sessionStorage.setItem("username", "Aloke Sikder");
                                                        //    // Android.loadurl("formsvalidation.html");
                                                        $().BusyLoader('open')
                                                        new log().Init();
                                                        event.preventDefault();
                                                        event.stopPropagation();

                                                        //}


                                                        //  window.location = "forms-validation.html";
                                                        //    Android.createSession("aloke", "Aloke Sikder");
                                                        //    Android.loadurl("forms-validation.html");
                                                        //}
                                                    }
                                                    form.classList.add('was-validated');
                                                    //sessionStorage.setItem("userid", "aloke");
                                                    //sessionStorage.setItem("username", "Aloke Sikder");
                                                    //window.location = "forms-validation.html";
                                                    //event.preventDefault();
                                                    //event.stopPropagation();

                                                },



                                                false);
                                        });
                                    },


                                    false);
                            })();




                        </script>











                    </div>
                    <!--<div class="text-center text-white opacity-8 mt-3">Copyright © ArchitectUI 2019</div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="busy_load"></div>

<script src="{{asset('frontend/diagnosticReport/assets/scripts/main.js')}}"></script>
<script src="{{asset('frontend/diagnosticReport/assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/diagnosticReport/assets/vendor/sweetalert/sweet-alert.min.js')}}"></script>
<script src="{{asset('frontend/diagnosticReport/assets/vendor/LinkJS/LINQ_JS_MIN.js')}}"></script>

<script>
    document.write("<script type='text/javascript' src='{{asset('frontend/diagnosticReport/assets/scripts/user.js?v=')}}" + Date.now() + "'><\/script>");

</script>









</body>

<!-- Mirrored from web.asgaralihospital.com/pportal by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 10:40:49 GMT -->
</html>
