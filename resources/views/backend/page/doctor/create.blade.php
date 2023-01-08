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
                <li class="active">Create Doctor Info</li>
            </ul><!-- /.breadcrumb -->

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
                                                <i class="fa fa-plus-circle"></i> <span class="hide-in-sm">Create Doctor Info</span>
                                            </h4>

                                            <span class="widget-toolbar">
                                                <!--------------- Article&News List---------------->
                                                <a href="{{ route('doctors.index') }}" class="">
                                                    <i class="fa fa-list"></i> Doctors <span class="hide-in-sm">List</span>
                                                </a>
                                            </span>
                                        </div>


                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <form action="{{ route('doctors.store') }}" id="Form" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row">

                                                        <!-- Left side -->

                                                        <div class="col-md-10 col-md-offset-1">

                                                            <!-- Name -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Name <sup class="text-danger">*</sup><span class="label-required"></span><br>
                                                                    </span>
                                                                    <input type="text" class="form-control @error('name') has-error @enderror"
                                                                        name="name" id="name" value="{{ old('name') }}">

                                                                </div>
                                                            </div>

                                                            <!-- Image -->
                                                            <div class="form-group">
                                                                <div class="col-sm-12 col-md-6 input-group width-100">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Image
                                                                    </span>
                                                                    <input type="file" class="form-control @error('image') has-error @enderror" name="image" id="image">

                                                                </div>
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="background-color: transparent !important; border:none !important;"></span>
                                                                    <small style="margin-left: 13px;"><b>Image size '1350 X 680'. </b><b style="color: red"> (NB: Slider "height" must be 680px)</b></small>
                                                                </div>
                                                            </div>

                                                            <!-- Degree -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Degree <sup class="text-danger">*</sup><span class="label-required"></span>
                                                                    </span>
                                                                    <input type="text" class="form-control @error('degree') has-error @enderror"
                                                                        name="degree" id="degree" value="{{ old('degree') }}">

                                                                </div>
                                                            </div>

                                                            <!-- Department -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Department <sup class="text-danger">*</sup><span class="label-required"></span>
                                                                    </span>
                                                                    <select class="form-control @error('department') has-error @enderror" name="department" id="department" >
                                                                        @foreach ($departments as $item)
                                                                            <option value="{{$item->department_name}}">{{$item->department_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    {{-- <input type="text" class="form-control @error('department') has-error @enderror"
                                                                        name="department" id="department" value="{{ old('department') }}"> --}}

                                                                </div>
                                                            </div>

                                                            <!-- Position -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Position <sup class="text-danger">*</sup><span class="label-required"></span>
                                                                    </span>
                                                                    <input type="text" class="form-control @error('position') has-error @enderror"
                                                                        name="position" id="position" value="{{ old('position') }}">

                                                                </div>
                                                            </div>

                                                            <!-- Patient Visiting Time -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <label class="input-group-addon width-30" style="text-align: left">Patient Visiting Time</label>
                                                                    <div class="col-md-3 col-sm-3">
                                                                        <input class="form-control name" type="time" id="visit_start_time" name="visit_start_time">
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 text-center">
                                                                        To
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-3">
                                                                        <input class="form-control name" type="time" id="visit_end_time" name="visit_end_time">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Details -->
                                                            <div class="form-group">
                                                                <div>
                                                                    <span class="input-group-addon" style="text-align: left">
                                                                        Details
                                                                    </span>
                                                                    <textarea name="details" class="form-control summernote"
                                                                    placeholder="Doctor details">{!! old('details') !!}</textarea>

                                                                </div>
                                                                @error('details')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                                @enderror
                                                            </div>

                                                            <!-- Weekday -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Available Weekdays <sup class="text-danger">*</sup><span class="label-required"></span>
                                                                    </span>

                                                                    <select class="form-control name multiselect @error('weekday') has-error @enderror"
                                                                        type="text" name="weekday[]" value="{{ old('weekday') }}" multiple="multiple">
                                                                        <option value="Sat">Saturday</option>
                                                                        <option value="Sun">Sunday</option>
                                                                        <option value="Mon">Monday</option>
                                                                        <option value="Tue">Tuesdays</option>
                                                                        <option value="Wed">Wednessday</option>
                                                                        <option value="Thur">Thursday</option>
                                                                        <option value="Fri">Friday</option>
                                                                    </select>
                                                                    {{-- <input type="text" class="form-control @error('weekday') has-error @enderror"
                                                                        name="weekday" id="weekday" value="{{ old('weekday') }}"> --}}

                                                                </div>
                                                            </div>

                                                            {{-- Status --}}

                                                            <div class="form-group">
                                                                <div class="input-group width-100">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Status
                                                                    </span>
                                                                    <label style="margin: 5px 0 0 8px">
                                                                        <input name="status" class="ace ace-switch ace-switch-6" type="checkbox" checked>
                                                                        <span class="lbl"></span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <!-- Add Page -->
                                                            <h5 class="widget-title">
                                                                <div class="row" style="margin-top: 10px;padding:5px">
                                                                    <div class="col-md-12 text-center pr-2">
                                                                        <button type="submit" class="btn btn-primary btn-sm btn-block"
                                                                            style="max-width: 150px">
                                                                            <i class="fa fa-save"></i> Create
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="space-10"></div>
                                                            </h5>
                                                        </div>

                                                    </div>

                                                </form>
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
@endsection

