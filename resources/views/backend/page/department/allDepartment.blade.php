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
                    <li class="active">All Department</li>
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
            <div class="page-content">

                <!-- DYNAIC CONTENT FROM VIEWS -->


                <div class="widget-box">


                    <!-- header -->
                    <div class="widget-header">
                        <h4 class="widget-title"> <i class="fa fa-info-circle"></i> Department
                        </h4>
                        <span class="widget-toolbar">
                            <!--------------- CREATE---------------->
                            <a href="{{ route('departmentCreate') }}" class="">
                                <i class="fa fa-plus"></i> Add <span class="hide-in-sm">New</span>
                            </a>
                        </span>
                    </div>



                    <!-- body -->
                    <div class="widget-body">
                        <div class="widget-main">

                            <!-- Searching -->

                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="table-responsive" style="border: 1px #cdd9e8 solid;">
                                        <table id="dynamic-table"
                                            class="table table-striped table-bordered table-hover new-table">
                                            <thead>
                                            <tr>
                                                <th width="5%" class="hide-in-sm">Sl</th>
                                                {{-- <th width="35%">Image</th> --}}
                                                <th width="60%">Name</th>
                                                <th width="5%">Status</th>
                                                <th width="10%" class="text-center" style="width: 120px">Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @php $serialNo = 1; @endphp
                                            @foreach($allDepartment as $allDepartments)
                                            <tr>
                                                <td class="hide-in-sm"><span class="span">@php echo $serialNo; @endphp</span></td>
                                                {{-- <td class="text-center">
                                                    <img src="{{$allDepartments->department_image}}" alt="" width="250px" height="100px">
                                                </td> --}}
                                                <td><span class="span">{{$allDepartments->department_name}}</span></td>
                                                <td class="text-center">
                                                            <!--------------- STATUS EDIT---------------->
                                                    <div>
                                                        <label>
                                                            <input name="status" class="ace ace-switch" data-id="{{$allDepartments->id}}"
                                                                onclick="statusChange(this)" type="checkbox" id="status"
                                                                    onclick="statusChange()" @php if($allDepartments->status == "true"){echo "checked";}  else {echo "";} @endphp >
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">

                                                    <!---------------  EDIT---------------->
                                                    <div class="btn-group btn-corner  action-span ">

                                                        <a href="editDepartment/{{$allDepartments->id}}"
                                                        role="button" class="btn btn-xs btn-success bs-tooltip"
                                                        title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>


                                                        <a href="departmentDelete/{{$allDepartments->id}}" role="button" class="btn btn-xs btn-danger bs-tooltip"
                                                        title="Edit">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>

                                                </td>
                                            </tr>
                                            @php $serialNo++; @endphp
                                            @endforeach

                                            </tbody>
                                        </table>
                                        <div align="center">
                                            {{$allDepartment->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            {{-- main content end  --}}
        </div>
    </div>

    <script>
        function statusChange(element) {
            let department_id = $(element).attr("data-id");
            let post_url = "/departmentStatusChange";
            let allData = new FormData();
            allData.append("ID", department_id);
            let configuration = {headers:{"content-type" : "multipart/form-data"},
                onUploadProgress: function (progressEvent) {
                    let uploadProgressPercent = Math.round((progressEvent.loaded*100)/progressEvent.total)
                    document.getElementById("uploadPercent").innerHTML = uploadProgressPercent+'%';
                }
            };
            axios.post(post_url, allData, configuration).then(
                function (response) {
                }
            ).catch(
                function (error) {
                }
            )

        }
    </script>
@endsection
