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
                <li class="active">Create New Facility</li>
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
                                                <i class="fa fa-plus-circle"></i> <span class="hide-in-sm">Create New Facility</span>
                                            </h4>

                                            <span class="widget-toolbar">
                                                <!--------------- Facility List---------------->
                                                <a href="{{ route('facilities.index') }}" class="">
                                                    <i class="fa fa-list"></i> Facility <span class="hide-in-sm">List</span>
                                                </a>
                                            </span>
                                        </div>


                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <form action="{{ route('facilities.update',$facility->id) }}" id="Form" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-md-10 col-md-offset-1">

                                                            <!-- Edit Title -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Title <span class="label-required"></span>
                                                                    </span>
                                                                    <input type="text" class="form-control @error('title') has-error @enderror" name="title" id="title" value="{{ old('title',$facility->title) }}">
                                                                    @error('title')<br>
                                                                        <span class="text-danger">
                                                                            {{ $message }}
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <!-- Edit Image -->
                                                            <div class="form-group">
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
                                                                    <small style="margin-left: 13px;"><b>Image size '1350 X 680'. </b><b style="color: red"> (NB: Facility "height" must be 680px)</b></small>
                                                                </div>
                                                            </div>

                                                            {{-- Previous Image --}}
                                                            <div class="form-group">
                                                                <div class="input-group width-100">
                                                                    <span class="input-group-addon width-30" style="background-color: transparent !important; border:none !important; text-align: left">Previous Image:</span>
                                                                    <img class="pt-1" src="{{ asset($facility->image) }}" width="300" height="200" style="margin-left: 13px;">
                                                                </div>
                                                            </div>
                                                            <!-- Edit Icon -->
                                                            {{-- <div class="form-group ">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">Icon</span>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-inline mr-2">
                                                                            <input type="radio" @if ($facility->icon == 'flaticon-5g') checked @endif name="icon" value="flaticon-5g">
                                                                            <div class="icon-box flaticon-5g d-inline"></div>
                                                                        </div>
                                                                        <div class="d-inline mr-2">
                                                                            <input type="radio" @if ($facility->icon == 'flaticon-8k') checked @endif name="icon" value="flaticon-8k">
                                                                            <div class="icon-box flaticon-8k d-inline"></div>
                                                                        </div>
                                                                        <div class="d-inline mr-2">
                                                                            <input type="radio" @if ($facility->icon == 'flaticon-customer-service') checked @endif name="icon" value="flaticon-customer-service">
                                                                            <div class="icon-box flaticon-customer-service d-inline"></div>
                                                                        </div>
                                                                        <div class="d-inline mr-2">
                                                                            <input type="radio" @if ($facility->icon == 'flaticon-swimming-pool') checked @endif name="icon" value="flaticon-swimming-pool">
                                                                            <div class="icon-box flaticon-swimming-pool d-inline"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                            <!-- Edit Description -->
                                                            <div class="form-group">
                                                                <div>
                                                                    <span class="input-group-addon" style="text-align: left">
                                                                        Description
                                                                    </span>
                                                                    <textarea name="description" class="form-control summernote"
                                                                        placeholder="Description">{{ old('description',$facility->description) }}</textarea>
                                                                </div>
                                                                @error('description')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                                @enderror
                                                            </div>

                                                            <!-- Edit Status -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Status
                                                                    </span>
                                                                    <label style="margin: 5px 0 0 8px">
                                                                        <input name="status" class="ace ace-switch ace-switch-6" type="checkbox" {{ $facility->status == 1 ? 'checked' : '' }}>
                                                                        <span class="lbl"></span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="form-group">
                                                            <!-- Update Page -->
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
