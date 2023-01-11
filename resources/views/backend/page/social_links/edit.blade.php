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
                <li class="active">Edit Social Links</li>
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
                                                <i class="fa fa-edit"></i> <span class="hide-in-sm">Edit Social Links</span>
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

                                                <form action="{{ route('social_links.update',$social_link->id) }}" id="Form" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-md-10 col-md-offset-1">

                                                            <!-- Edit Name -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Name <sup class="text-danger">*</sup><span class="label-required"></span><br>
                                                                    </span>
                                                                    <input type="text" class="form-control @error('name') has-error @enderror" name="name" id="name"
                                                                        value="{{ old('name',$social_link->name) }}">
                                                                    @error('name')
                                                                        <span class="text-danger">
                                                                            {{ $message }}
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <!-- SLUG -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100">
                                                                    <span class="input-group-addon width-30" style="text-align: left">Url <sup class="text-danger">*</sup></span>
                                                                    <input class="form-control slug" id="url" type="text" name="url" autocomplete="off"
                                                                        value="{{ old('url',$social_link->url) }}" placeholder="http:// or https://" required />
                                                            </div><br>

                                                            <!-- Icon -->
                                                            <div class="form-group pr">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Icon
                                                                        ( <i class="me-1 mr-1"></i> )
                                                                    </span>

                                                                    <input class="form-control fontawesome" id="icon" type="text" name="icon" autocomplete="off"
                                                                        value="{{ old('icon'), $social_link->icon}}" placeholder="Icon" />
                                                                </div>
                                                            </div>

                                                            <!-- Edit Status -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Status
                                                                    </span>
                                                                    <label style="margin: 5px 0 0 8px">
                                                                        <input name="status" class="ace ace-switch ace-switch-6" type="checkbox" {{ $social_link->status == 1 ? 'checked' : '' }}>
                                                                        <span class="lbl"></span>
                                                                    </label>
                                                                </div><br>
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
