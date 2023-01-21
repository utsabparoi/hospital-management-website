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
                <li class="active">Edit Health Package Category</li>
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
                                                <i class="fa fa-edit"></i> <span class="hide-in-sm">Edit Package Category</span>
                                            </h4>

                                            <span class="widget-toolbar">
                                                <!--------------- Facility List---------------->
                                                <a href="{{ route('health_package_category.index') }}" class="">
                                                    <i class="fa fa-list"></i> Package Categories <span class="hide-in-sm">List</span>
                                                </a>
                                            </span>
                                        </div>


                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <form action="{{ route('health_package_category.update',$pkg_category->id) }}" id="Form" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-md-10 col-md-offset-1">

                                                            <!-- Edit Name -->
                                                            <div class="form-group">
                                                                <div class="input-group width-100 mb-1">
                                                                    <span class="input-group-addon width-30" style="text-align: left">
                                                                        Name <span class="label-required"></span>
                                                                    </span>
                                                                    <input type="text" class="form-control @error('name') has-error @enderror" name="name" id="name" value="{{ old('name',$pkg_category->name) }}">
                                                                    @error('name')<br>
                                                                        <span class="text-danger">
                                                                            {{ $message }}
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <!-- Edit Description -->
                                                            <div class="form-group">
                                                                <div>
                                                                    <span class="input-group-addon" style="text-align: left">
                                                                        Description
                                                                    </span>
                                                                    <textarea name="description" class="form-control summernote"
                                                                        placeholder="Description">{{ old('description',$pkg_category->description) }}</textarea>
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
                                                                        <input name="status" class="ace ace-switch ace-switch-6" type="checkbox" {{ $pkg_category->status == 1 ? 'checked' : '' }}>
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
