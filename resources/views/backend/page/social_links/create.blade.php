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
                <li class="active">Create New Social Link</li>
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
                                                <i class="fa fa-plus-circle"></i> <span class="hide-in-sm">Create New Social Link</span>
                                            </h4>

                                            <span class="widget-toolbar">
                                                <!--------------- New Social Link List---------------->
                                                <a href="{{ route('social_links.index') }}" class="">
                                                    <i class="fa fa-list"></i> SocialLinks <span class="hide-in-sm">List</span>
                                                </a>
                                            </span>
                                        </div>


                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <form action="{{ route('social_links.store') }}" id="Form" method="post" enctype="multipart/form-data">
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

                                                            <!-- SLUG -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">Url <sup class="text-danger">*</sup></span>
                                                                        <input class="form-control slug" id="url" type="text" name="url" autocomplete="off"
                                                                            value="{{ old('url') }}" placeholder="http:// or https://" required />
                                                                </div>
                                                            </div>

                                                            <!-- Icon -->
                                                            <div class="form-group pr">
                                                                <div class="input-group width-100  mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Icon
                                                                        <i class="me-1 mr-1"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control fontawesome" id=""
                                                                        name="icon" autocomplete="off" value="{{ old('icon') }}" placeholder="Icon" />
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

