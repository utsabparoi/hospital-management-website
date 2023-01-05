@extends('backend.layout.app')
@section('title', 'Hospital-Admin')
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">Insert New Package Information</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                           autocomplete="off" />
                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                </span>
                    </form>
                </div><!-- /.nav-search -->
            </div>
            {{-- main content start from here --}}
            <div class="page-content no-print">
                <div class="row">
                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="page-content">
                                <div class="row p-20">
                                    <div class="col-12">
                                        <div class="widget-box">
                                            <div class="widget-header">
                                                <h4 class="widget-title">
                                                    <i class="fa fa-plus-circle"></i> <span class="hide-in-sm">Insert New Package Information</span>
                                                </h4>
                                                <span class="widget-toolbar">

                    </span>
                                            </div>


                                            <div class="widget-body">
                                                <div class="widget-main">

                                                    <form  class="form-horizontal" >
                                                        @csrf
                                                        <input type="hidden" name="_token" id="name">
                                                        <!--Department Name -->
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3 col-sm-3">Package Name<sup class="text-danger">*</sup>
                                                                :</label>
                                                            <div class="col-md-5 col-sm-5">
                                                                <input class="form-control name" type="text" id="packageName" name="packageName">
                                                            </div>
                                                        </div>

                                                        <!--for who -->
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3 col-sm-3">Package for who<sup class="text-danger">*</sup>
                                                                :</label>
                                                            <div class="col-md-5 col-sm-5">
                                                                <input class="form-control name" type="text" id="packageForWho" name="packageForWho">
                                                            </div>
                                                        </div>

                                                        <!--Select Test -->
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3 col-sm-3">Select Test<sup class="text-danger">*</sup>
                                                                :</label>
{{--                                                            <label for="vehicle1"> CSB</label>--}}
                                                            <div class="col-md-5 col-sm-5">
                                                                @foreach($healthTest as $healthTests)
                                                                <input type="checkbox" id="" name="" value="{{$healthTests->test_name}}">
                                                                <label for="">{{$healthTests->test_name}}</label>&nbsp&nbsp&nbsp&nbsp&nbsp
                                                                @endforeach
                                                            </div>
                                                        </div>


                                                        <!--Department Name -->
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3 col-sm-3">Package Cost(BDT)<sup class="text-danger">*</sup>
                                                                :</label>
                                                            <div class="col-md-5 col-sm-5">
                                                                <input class="form-control name" type="number" id="packageCost" name="packageCost">
                                                            </div>
                                                        </div>

                                                        <!--Department Name -->
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3 col-sm-3">Discount(%)<sup class="text-danger">*</sup>
                                                                :</label>
                                                            <div class="col-md-5 col-sm-5">
                                                                <input class="form-control name" type="number" id="packageDiscount" name="packageDiscount">
                                                            </div>
                                                        </div>

                                                        <!-- Description -->
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3 col-sm-3 align-left">Description<sup class="text-danger">*</sup>
                                                                :</label>
                                                            <div class="col-md-12 col-sm-12">
                                                                <textarea class="form-control slug ckeditor" id="packageDescription" type="text" name="packageDescription" required=""></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3 col-sm-3" for="form-field-1-1"> Status </label>
                                                            <div class="col-sm-3 col-xs-8">
                                                                <label>
                                                                    <input name="status" class="ace ace-switch" type="checkbox" id="status" checked>
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </div>
                                                        </div>




                                                        <!-- Action -->
                                                        <div class="form-group">
                                                            <label class="control-label col-12"></label>
                                                            <div class="col-sm-12 text-center" style="width: 100%">
                                                                <button type="button" class="btn btn-primary" onclick="InsertPackage()">
                                                                    <i class="fa fa-save"></i> Insert
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <script>

                                function InsertPackage() {
                                    let packageName = document.getElementById("packageName").value;
                                    let packageForWho = document.getElementById("packageForWho").value;
                                    let packageCost = document.getElementById("packageCost").value;
                                    let packageDiscount = document.getElementById("packageDiscount").value;
                                    let packageDescription = CKEDITOR.instances['packageDescription'].getData();
                                    let status = document.getElementById("status").checked;

                                    if(packageName === ""){
                                        alert("Write a Package Name")
                                    }
                                    else if(packageForWho === ""){
                                        alert("Write Pckage for who");
                                    }
                                    else if(packageCost === ""){
                                        alert("Give Cost");
                                    }
                                    else if(packageDescription === ""){
                                        alert("Write Description");
                                    }
                                    else {
                                        let post_url = "/insertPackage";
                                        let allData = new FormData();
                                        allData.append("PackageName", packageName);
                                        allData.append("PackageForWho", packageForWho);
                                        allData.append("PackageCost", packageCost);
                                        allData.append("PackageDiscount", packageDiscount);
                                        allData.append("PackageDescription", packageDescription);
                                        allData.append("Status", status);

                                        let configuration = {headers:{"content-type" : "multipart/form-data"},
                                            onUploadProgress: function (progressEvent) {
                                                let uploadProgressPercent = Math.round((progressEvent.loaded*100)/progressEvent.total)
                                                document.getElementById("uploadPercent").innerHTML = uploadProgressPercent+'%';
                                            }
                                        };

                                        axios.post(post_url, allData, configuration).then(
                                            function (response) {
                                                if(response.data == 0){
                                                    alert("Package name exist, Please check name");
                                                }
                                                else{
                                                    alert("New Package Inserted");
                                                    location.href = "/healthPackage";
                                                }
                                            }
                                        ).catch(
                                            function (error) {
                                                alert("Error...try again");
                                                location.reload();
                                            }
                                        )
                                    }

                                }
                            </script>


                            <!--[endif]-->
                            <script type="text/javascript">
                                if('ontouchstart' in document.documentElement) document.write("<script src='https://chunarughat.net/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
                            </script>

                            <script type="text/javascript">
                                function withDefault(value, default_value) {
                                    return value ? value : default_value
                                }
                            </script>

                            <script>
                                // $(document).on('click','a', function(e){
                                //     e.preventDefault();
                                //     var pageURL=$(this).attr('href');

                                //     history.pushState(null, '', pageURL);

                                //     // let url = pageURL;
                                //     // $.ajax({
                                //     //     type: "GET",
                                //     //     url: url,
                                //     //     dataType: "html",
                                //     //     success: function(data) {
                                //     //         $('#pageContent').html(data);
                                //     //     }
                                //     // });
                                // });
                            </script>

                            <!-- js yield -->

                            <script>
                                $('#product_id').change(function() {

                                    $('.price').val($(this).find('option:selected').data('price'))
                                })
                            </script>

                            <script>
                                $('#profile_id').change(function() {
                                    let profile = $(this).find('option:selected');

                                    $('.name').val(profile.text())
                                    $('.mobile').val(profile.data('mobile'))
                                    $('.email').val(profile.data('email'))
                                    $('.age').val(profile.data('age'))
                                    $('.country').val(profile.data('country'))
                                })
                            </script>


                            <script>

                                tinymce.init({
                                    selector: 'textarea.tiny-editor',
                                    plugins: [
                                        'a11ychecker', 'advlist', 'advcode', 'advtable', 'print', 'hr', 'autolink', 'pagebreak', 'checklist', 'export',
                                        'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                                        'powerpaste', 'fullscreen', 'formatpainter', 'image code', 'insertdatetime', 'media', 'code', 'nonbreaking', 'table', 'help',
                                        'wordcount'
                                    ],

                                    toolbar: 'undo redo | styleselect | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | ' +
                                        'bullist numlist checklist outdent indent | image code | link image | print preview media fullscreen | ' +
                                        'forecolor backcolor emoticons | removeformat | code table help | help',
                                    menu: {
                                        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },

                                    images_upload_url: 'postAcceptor.php',

                                    // images_upload_handler: function (blobInfo, success, failure) {
                                    //     setTimeout(function () {
                                    //     success('http://moxiecode.cachefly.net/tinymce/v9/images/logo.png');
                                    //     }, 2000);
                                    // },

                                    menubar: 'favs file edit view insert format tools table help',
                                    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                                });




                            </script>


                            <script type="text/javascript">
                                $('[data-rel=popover]').popover({html:true, container:'body'});
                            </script>

                            <script type="text/javascript">
                                $('.success').fadeIn('slow').delay(10000).fadeOut('slow');
                            </script>

                            <script type="text/javascript">
                                $('.select2').select2();
                            </script>

                            <script type="text/javascript">
                                $('.date-picker').datepicker({
                                    autoclose: true,
                                    todayHighlight: true
                                })


                                $('#color-picker-component').colorpicker();
                                $('.colorpicker-element').colorpicker();
                                // $('.datepicker').datepicker({ dateFormat: 'yy-mm-dd' });
                                // $( ".datepicker2" ).datepicker({
                                //     changeMonth: true,
                                //     changeYear: true,
                                //     dateFormat: "d MM, yy"
                                // });
                            </script>

                            <script type="text/javascript">

                                function showAlertMessage(message, time = 1000, type = 'error')
                                {
                                    swal.fire({
                                        title: type.toUpperCase(),
                                        html: "<b>" + message + "</b>",
                                        type: type,
                                        timer: time
                                    })
                                }




                                function onlyNumber(evnt) {
                                    let keyCode = evnt.charCode
                                    let str = evnt.target.value
                                    let n = str.includes(".")

                                    if (keyCode == 13) {
                                        evnt.preventDefault();
                                    }

                                    if (keyCode == 46 && n) {
                                        return false
                                    }

                                    if (str.length > 12) {
                                        showAlertMessage('Number length out of range', 3000)
                                        return false
                                    }
                                    return (keyCode >= 48 && keyCode <= 57) || keyCode == 13 || keyCode == 46
                                }


                                $('.only-number').keypress(function() {
                                    return onlyNumber(event)
                                })

                            </script>





                            <!-- Toastr -->
                            <script src="https://chunarughat.net/assets/js/toastr.min.js"></script>

                            <!-- custom toster -->
                            <script src="https://chunarughat.net/assets/custom_js/message-display.js"></script>

                            <script>
                            </script>



                            <script>
                                $(document).ready(function() {
                                    $('.summernote').summernote({
                                        placeholder: 'Write Here .....',
                                        height: 200
                                    });
                                });
                            </script>

                            <script type="text/javascript">
                                function delete_check(id)
                                {
                                    Swal.fire({
                                        title: 'Are you sure ?',
                                        html: "<b>You want to delete permanently !</b>",
                                        type: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, delete it!',
                                        width:400,
                                    }).then((result) =>{
                                        if(result.value){
                                            $('#deleteCheck_'+id).submit();
                                        }
                                    })
                                }
                            </script>

                            <script>
                                (function ($) {
                                    'use strict'
                                    $("#name").on('keyup', function(){
                                        let name = $(this).val();
                                        name = name.toLowerCase();
                                        let regExp = /([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g;
                                        name = name.replace(regExp,'-');
                                        $("#slug").val(name);
                                    });

                                    $("#name").on('keyup', function(){
                                        let name = $(this).val();
                                        name = name.toUpperCase();
                                        let regExp = /([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g;
                                        name = name.replace(regExp,'-');
                                        $("#coupon").val(name);
                                    });
                                })(jQuery);
                            </script>

                            <script>
                                (function ($) {
                                    'use strict'
                                    $("#opening_balance").on('keyup', function(){
                                        let val = $(this).val();
                                        val = val.toLowerCase();
                                        let regExp = /([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g;
                                        val = val.replace(regExp,'-');
                                        $("#current_balance").val(val);
                                    });
                                })(jQuery);
                            </script>

                            <script>
                                (function ($) {
                                    'use strict'
                                    $(function () {
                                        $('[data-toggle="popover"]').popover()
                                    })
                                })(jQuery);
                            </script>


                            <script>
                                $(document).on("click", ".updateStatus", function() {

                                    let status = $(this).children("i").attr("status");
                                    let item_id = $(this).attr("item-id");
                                    let url = $(this).attr("item-url");
                                    $.ajax({
                                        type: 'POST',
                                        url: url,
                                        data: {
                                            _token: 'kFe4OrK5mXJYzs8GD0NWUap3DapzrZ1ewPPbUCAm',
                                            status: status,
                                            item_id: item_id
                                        },
                                        success: function(resp) {
                                            if (resp['status'] == 0) {
                                                $("#id-" + item_id).html(
                                                    "<i class='fa fa-toggle-off text-danger status-icon' status='Inactive' style='font-size: 20px'></i>"
                                                );
                                                swal.fire({
                                                    icon: 'success',
                                                    title: "Status Inactive Successfully",
                                                    type: "success",
                                                    timer: 1500
                                                });
                                            } else if (resp['status'] == 1) {
                                                $("#id-" + item_id).html(
                                                    "<i class='fa fa-toggle-on text-success status-icon' status='Active' style='font-size: 20px'></i>"
                                                );
                                                swal.fire({
                                                    icon: 'success',
                                                    title: "Status Active Successfully",
                                                    type: "success",
                                                    timer: 1500
                                                });
                                            }
                                        },
                                        error: function() {
                                            alert("Error");
                                        }
                                    });
                                });



                                // jQuery(function($)
                                // {
                                //     $('#data-table').DataTable({
                                //         "ordering": false,
                                //         "bPaginate": true,
                                //         "lengthChange": false,
                                //         "info": false,
                                //         "pageLength": 25
                                //     });
                                // })
                            </script>


                            <script>
                                window.FontAwesomeConfig = {
                                    searchPseudoElements: true
                                }

                                $('.fontawesome').iconpicker();
                            </script>
                            <script>
                                $('.date-picker').datepicker({
                                    autoclose: true,
                                    format:'yyyy-mm-dd',
                                    viewMode: "days",
                                    minViewMode: "days",
                                })
                            </script>

                        </div>
                    </div>
                    {{-- main content end  --}}
                </div>
            </div>
@endsection
