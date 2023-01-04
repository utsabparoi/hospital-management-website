@extends('backend.layout.app')
@section('title', 'Hospital-Admin')
@section('css')

@endsection
@section('content')
    <div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>
                <li class="active">Edit Slider</li>
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
                                                <i class="fa fa-plus-circle"></i> <span class="hide-in-sm">Create New Slider</span>
                                            </h4>
                                            <span class="widget-toolbar">
                                                <!--------------- Slider List---------------->
                                                <a href="{{ route('sliders.index') }}" class="">
                                                    <i class="fa fa-list"></i> Slider <span class="hide-in-sm">List</span>
                                                </a>
                                            </span>
                                        </div>


                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <form action="{{ route('sliders.update',$slider->id) }}" id="Form" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="widget-body">

                                                        <div class="row pt-2 pr-2">

                                                            <div class="col-sm-12 px-3">

                                                                <!-- NAME -->
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="input-group width-100 mb-1">
                                                                        <span class="input-group-addon width-30" style="text-align: left">
                                                                            Name <span class="label-required"></span>
                                                                        </span>
                                                                        <input type="text" class="form-control @error('title') has-error @enderror" name="name" id="name" value="{{ old('name',$slider->name) }}">
                                                                        @error('title')<br>
                                                                            <span class="text-danger">
                                                                                {{ $message }}
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="input-group width-100">
                                                                        <span class="input-group-addon width-30" style="text-align: left">
                                                                            Image
                                                                        </span>
                                                                        <input type="file" class="form-control @error('image') has-error @enderror" name="image" id="image">
                                                                        @error('image')<br>
                                                                            <span class="text-danger">
                                                                                {{ $message }}
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="input-group width-100 mb-1">
                                                                        <span class="input-group-addon width-30" style="background-color: transparent !important; border:none !important;"></span>
                                                                        <small style="margin-left: 13px;"><b>Image size '1350 X 680'. </b><b style="color: red"> (NB: Slider "height" must be 680px)</b></small>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="input-group width-100">
                                                                        <span class="input-group-addon width-30" style="text-align: left">
                                                                            Status
                                                                        </span>
                                                                        <label style="margin: 5px 0 0 8px">
                                                                            <input name="status" class="ace ace-switch ace-switch-6" type="checkbox" {{ $slider->status == 1 ? 'checked' : '' }}>
                                                                            <span class="lbl"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <div class="input-group width-100 mb-3">
                                                                    <span class="input-group-addon width-30" style="background-color: transparent !important; border:none !important; text-align: left">Previous Image</span>
                                                                    <img class="pt-1" src="{{ asset($slider->image) }}" width="300" height="100" style="margin-left: 13px;">
                                                                </div>
                                                            </div>


                                                            <div class="col-xs-12">
                                                                <!-- Add Page -->
                                                                <h5 class="widget-title">
                                                                    <div class="row" style="margin-top: 10px;padding:5px">
                                                                        <div class="col-md-12 text-right pr-2">
                                                                            <button type="submit" class="btn btn-primary btn-sm btn-block"
                                                                                style="max-width: 150px">
                                                                                <i class="fa fa-save"></i> Update
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="space-10"></div>
                                                                </h5>
                                                            </div>

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

                            function createDepartment() {
                                let departmentName = document.getElementById("departmentName").value;
                                let departmentImage = document.getElementById("departmentImage").files[0];
                                let departmentDescription = CKEDITOR.instances['departmentDescription'].getData();
                                let status = document.getElementById("status").checked;

                                if(departmentName === ""){
                                    alert("Write a Department Name")
                                }
                                else if(departmentImage == null){
                                    alert("Choose an Image")
                                }
                                else if(departmentDescription === ""){
                                    alert("Write Description");
                                }
                                else {
                                    let post_url = "/createDepartment";
                                    let allData = new FormData();
                                    allData.append("DepartmentName", departmentName);
                                    allData.append("DepartmentImage", departmentImage);
                                    allData.append("DepartmentDescription", departmentDescription);
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
                                                alert("Department name exist, Please Change name");
                                            }
                                            else{
                                                alert("New Department Created");
                                                location.href = "/allDepartment";
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




                    </div>
                </div>
                {{-- main content end  --}}
            </div>
        </div>
@endsection
