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
                <li class="active">Health Package Facilities</li>
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
                    <h4 class="widget-title"> <i class="fa fa-info-circle"></i> Health Package Facilities
                    </h4>
                    <span class="widget-toolbar">
                        <!--------------- CREATE---------------->
                        <a href="{{ route('health_package_facility.create') }}" class="">
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
                                            <th width="35%" class="text-center">Health Package Facility Name</th>
                                            <th width="40%" class="text-center">Health Package Category Name</th>
                                            <th width="10%" class="text-center">Status</th>
                                            <th width="10%" class="text-center" style="width: 120px">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($pkg_facility as $item)
                                                <tr>
                                                    <td class="hide-in-sm"><span class="span">{{ $loop->iteration }}</span></td>
                                                    <td><span class="span">{{ $item->name }}</span></td>
                                                    <td><span class="span">{{ $item->pkg_category }}</span></td>
                                                    <td class="text-center">
                                                        <!--------------- STATUS---------------->
                                                        <span class="span">
                                                            <x-status status="{{ $item->status }}" id="{{ $item->id }}" table="{{ $table }}" />
                                                        </span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-corner">
                                                            <!--------------- EDIT SLIDER---------------->
                                                                <a href="{{ route('health_package_facility.edit', $item->id) }}" role="button"
                                                                    class="btn btn-xs btn-success bs-tooltip" title="Edit">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>

                                                            <!--------------- DELETE SLIDER---------------->
                                                                <button type="button"
                                                                    onclick="delete_item(`{{ route('health_package_facility.destroy', $item->id) }}`)"
                                                                    class="btn btn-xs btn-danger bs-tooltip" title="Delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                        </div>

                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="30" class="text-center text-danger py-3"
                                                        style="background: #eaf4fa80 !important; font-size: 18px">
                                                        <strong>No records found!</strong>
                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                    @include('backend.partials._paginate',['data'=> $pkg_facility])

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
            let slider_id = $(element).attr("data-id");
            let post_url = "/sliderStatusChange";
            let allData = new FormData();
            allData.append("ID", slider_id);
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
