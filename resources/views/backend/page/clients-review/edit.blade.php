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
                <li class="active">Edit Review</li>
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
                                                <i class="fa fa-edit"></i> <span class="hide-in-sm">Edit Review</span>
                                            </h4>

                                            <span class="widget-toolbar">
                                                <!--------------- Review List---------------->
                                                <a href="{{ route('clients_reviews.index') }}" class="">
                                                    <i class="fa fa-list"></i> Clients Review <span class="hide-in-sm">List</span>
                                                </a>
                                            </span>
                                        </div>


                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <form class="form-horizontal mt-2" action="{{ route('clients_reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    @include('backend.partials._alert_message')

                                                    <div class="row">

                                                        <!-- Left side -->

                                                        <div class="col-md-10 col-md-offset-1">

                                                            <!-- Name -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-20" style="text-align: left">
                                                                        Name <sup class="text-danger">*</sup><span class="label-required"></span><br>
                                                                    </span>
                                                                    <input type="text" class="form-control @error('name') has-error @enderror"
                                                                        name="name" id="name" value="{{ old('name',$review->name) }}">

                                                                </div>
                                                            </div>

                                                            <!-- Age -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-20" style="text-align: left">
                                                                        Age <sup class="text-danger">*</sup><span class="label-required"></span><br>
                                                                    </span>
                                                                    <input type="number" class="form-control @error('age') has-error @enderror"
                                                                        name="age" id="age" value="{{ old('age', $review->age) }}">

                                                                </div>
                                                            </div>

                                                            <!-- Designation -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-20" style="text-align: left">
                                                                        Designation
                                                                    </span>
                                                                    <input type="text" class="form-control @error('designation') has-error @enderror"
                                                                        name="designation" id="designation" value="{{ old('designation', $review->designation) }}">

                                                                </div>
                                                            </div>

                                                            <!-- Review -->
                                                            <div class="form-group">
                                                                <div>
                                                                    <span class="input-group-addon" style="text-align: left">
                                                                        Review
                                                                    </span>
                                                                    <textarea name="review" class="form-control summernote"
                                                                    placeholder="Clients review">{!! old('review', $review->review) !!}</textarea>

                                                                </div>
                                                                @error('review')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                                @enderror
                                                            </div>

                                                            <!-- Image -->
                                                            <div class="form-group">
                                                                <div class="col-sm-12 col-md-6 input-group width-100">
                                                                    <span class="input-group-addon width-20" style="text-align: left">
                                                                        Image
                                                                    </span>
                                                                    <input type="file" class="form-control @error('image') has-error @enderror" name="image" id="image">

                                                                </div>
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-20" style="background-color: transparent !important; border:none !important;"></span>
                                                                    <small style="margin-left: 13px;"><b>Image size '1350 X 680'. </b><b style="color: red"> (NB: Slider "height" must be 680px)</b></small>
                                                                </div>
                                                            </div>

                                                            {{-- Previous Image --}}
                                                            <div class="form-group">
                                                                <div class="input-group width-100">
                                                                    <span class="input-group-addon width-30" style="background-color: transparent !important; border:none !important; text-align: left">Previous Image:</span>
                                                                    <img class="pt-1" src="{{ asset($review->image) }}" width="200" height="200" style="margin-left: 13px;">
                                                                </div>
                                                            </div>

                                                            {{-- Status --}}

                                                            <div class="form-group">
                                                                <div class="input-group width-100">
                                                                    <span class="input-group-addon width-20" style="text-align: left">
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
                                                                            <i class="fa fa-save"></i> Update
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

