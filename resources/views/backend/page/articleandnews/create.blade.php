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
                <li class="active">Create New Article&News</li>
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
                                                <i class="fa fa-plus-circle"></i> <span class="hide-in-sm">Create New Article&News</span>
                                            </h4>

                                            <span class="widget-toolbar">
                                                <!--------------- Article&News List---------------->
                                                <a href="{{ route('articles_and_news.index') }}" class="">
                                                    <i class="fa fa-list"></i> Facility <span class="hide-in-sm">List</span>
                                                </a>
                                            </span>
                                        </div>


                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <form action="{{ route('articles_and_news.store') }}" id="Form" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="widget-body">

                                                        <div class="pt-2 pr-2">

                                                            <!-- Left side -->

                                                            <div class="row px-3">

                                                                <!-- Title -->
                                                                <div class="col-sm-12 col-md-6 ">
                                                                    <div class="input-group width-100 mb-1">
                                                                        <span class="input-group-addon width-30" style="text-align: left">
                                                                            Title <span class="label-required"></span>
                                                                        </span>
                                                                        <input type="text" class="form-control @error('title') has-error @enderror"
                                                                            name="title" id="title" value="{{ old('title') }}">

                                                                    </div>
                                                                </div>

                                                                <!-- Image -->
                                                                <div class="col-sm-12 col-md-6 ">
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

                                                                <!-- Description -->
                                                                <div class="col-sm-12 col-md-6 ">
                                                                    <div>
                                                                        <span class="input-group-addon" style="text-align: center">
                                                                            Description
                                                                        </span>
                                                                        <textarea name="description" class="form-control summernote"
                                                                            placeholder="Article description">{{ old('description') }}</textarea>

                                                                    </div>
                                                                    @error('description')
                                                                        <span class="text-danger">
                                                                            {{ $message }}
                                                                        </span>
                                                                    @enderror
                                                                </div>


                                                                {{-- Status --}}
                                                                <div class="col-sm-12 col-md-6 ">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 col-xs-4 text-left" for="form-field-1-1"> Status </label>
                                                                        <div class="col-sm-3 col-xs-8">
                                                                            <label>
                                                                                <input name="status" class="ace ace-switch ace-switch-6" type="checkbox" checked>
                                                                                <span class="lbl"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>



                                                            <div class="col-xs-12">
                                                                <!-- Add Page -->
                                                                <h5 class="widget-title">
                                                                    <div class="row" style="margin-top: 10px;padding:5px">
                                                                        <div class="col-md-12 text-right pr-2">
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

