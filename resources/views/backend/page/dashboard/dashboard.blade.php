@extends('backend.layout.app')
@section('title', 'Hospital-Admin')
{{-- @section('content')
    <div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>
                <li class="active">Dashboard</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="nav-search-input"
                           id="nav-search-input" autocomplete="off" />
                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                </span>
                </form>
            </div><!-- /.nav-search -->
        </div>

        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

                <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-navbar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-sidebar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-breadcrumbs" autocomplete="off" />
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"
                                   autocomplete="off" />
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-add-container" autocomplete="off" />
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                    </div><!-- /.pull-left -->

                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"
                                   autocomplete="off" />
                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"
                                   autocomplete="off" />
                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"
                                   autocomplete="off" />
                            <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                        </div>
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="page-header">
                <h1>
                    Dashboard
                    <small>

                    </small>
                </h1>
            </div><!-- /.additional_page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->


                    <div class="hr hr32 hr-dotted"></div>





                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.additional_page-content -->
    </div>
    </div>
@endsection --}}
@section('page-header')
    <i class="fa fa-tachometer"></i> Dashboard
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('/backend/css/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/backend/css/bootstrap-timepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/backend/css/daterangepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/backend/css/bootstrap-datetimepicker.min.css') }}" />
@stop


@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">

                <div class="row">
                    <div class="col-xs-12">

                    @include('backend.partials._alert_message')

                    <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->

                    <br>

                    <div class="col-sm-2">
                        <div class="well well-lg">
                            <h2><i class="fa fa-users green"></i> &nbsp;</h2>
                            <strong class="text-center">Total Patient</strong>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="well well-lg">
                            <h2><i class="fa fa-user-md blue"></i> &nbsp; </h2>
                            <strong class="text-center">Total Doctor</strong>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="well well-lg">
                            <h2><i class="fa fa-list red"></i> &nbsp; </h2>
                            <strong class="text-center">Departments Of Doctor</strong>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="well well-lg">
                            <h2><i class="fa fa-dollar orange"></i> &nbsp; </h2>
                            <strong class="text-center">Health Package</strong>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="well well-lg">
                            <h2><i class="fa fa-exchange green"></i> &nbsp; </h2>
                            <strong class="text-center">Partners</strong>
                        </div>
                    </div>

                </div>

                <br>
                <br>

                <div id="chartContainer" style="height: 370px; width: 100%; margin: 0px auto;"></div>
            </div>

        </div>

    </div>





@endsection

@section('js')

<script>
    window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title: {
            // text: "Report"
        },
        axisX: {
            valueFormatString: "MMM"
        },
        axisY: {
            prefix: "$",
            labelFormatter: addSymbols
        },
        toolTip: {
            shared: true
        },
        legend: {
            cursor: "pointer",
            itemclick: toggleDataSeries
        },
        data: [
        {
            type: "column",
            name: "Actual Sales",
            showInLegend: true,
            xValueFormatString: "MMMM YYYY",
            yValueFormatString: "$#,##0",
            dataPoints: [
                { x: new Date(2016, 0), y: 20000 },
                { x: new Date(2016, 1), y: 30000 },
                { x: new Date(2016, 2), y: 25000 },
                { x: new Date(2016, 3), y: 70000, indexLabel: "High Renewals" },
                { x: new Date(2016, 4), y: 50000 },
                { x: new Date(2016, 5), y: 35000 },
                { x: new Date(2016, 6), y: 30000 },
                { x: new Date(2016, 7), y: 43000 },
                { x: new Date(2016, 8), y: 35000 },
                { x: new Date(2016, 9), y:  30000},
                { x: new Date(2016, 10), y: 40000 },
                { x: new Date(2016, 11), y: 50000 }
            ]
        },
        {
            type: "line",
            name: "Expected Sales",
            showInLegend: true,
            yValueFormatString: "$#,##0",
            dataPoints: [
                { x: new Date(2016, 0), y: 40000 },
                { x: new Date(2016, 1), y: 42000 },
                { x: new Date(2016, 2), y: 45000 },
                { x: new Date(2016, 3), y: 45000 },
                { x: new Date(2016, 4), y: 47000 },
                { x: new Date(2016, 5), y: 43000 },
                { x: new Date(2016, 6), y: 42000 },
                { x: new Date(2016, 7), y: 43000 },
                { x: new Date(2016, 8), y: 41000 },
                { x: new Date(2016, 9), y: 45000 },
                { x: new Date(2016, 10), y: 42000 },
                { x: new Date(2016, 11), y: 50000 }
            ]
        },
        {
            type: "area",
            name: "Profit",
            markerBorderColor: "white",
            markerBorderThickness: 2,
            showInLegend: true,
            yValueFormatString: "$#,##0",
            dataPoints: [
                { x: new Date(2016, 0), y: 5000 },
                { x: new Date(2016, 1), y: 7000 },
                { x: new Date(2016, 2), y: 6000},
                { x: new Date(2016, 3), y: 30000 },
                { x: new Date(2016, 4), y: 20000 },
                { x: new Date(2016, 5), y: 15000 },
                { x: new Date(2016, 6), y: 13000 },
                { x: new Date(2016, 7), y: 20000 },
                { x: new Date(2016, 8), y: 15000 },
                { x: new Date(2016, 9), y:  10000},
                { x: new Date(2016, 10), y: 19000 },
                { x: new Date(2016, 11), y: 22000 }
            ]
        }]
    });
    chart.render();

    function addSymbols(e) {
        var suffixes = ["", "K", "M", "B"];
        var order = Math.max(Math.floor(Math.log(e.value) / Math.log(1000)), 0);

        if(order > suffixes.length - 1)
            order = suffixes.length - 1;

        var suffix = suffixes[order];
        return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
    }

    function toggleDataSeries(e) {
        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        } else {
            e.dataSeries.visible = true;
        }
        e.chart.render();
    }

    }
    </script>





    <script type="text/javascript" src="{{ asset('/backend/custom_js/canvasjs.js') }}"></script>

    <script src="{{ asset('/backend/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('/backend/js/ace.min.js') }}"></script>



@stop

