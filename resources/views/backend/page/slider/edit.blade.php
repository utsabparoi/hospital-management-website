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
                <li class="active">Edit Slider</li>
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
                                                <i class="fa fa-edit"></i> <span class="hide-in-sm">Edit Slider</span>
                                            </h4>
                                            <span class="widget-toolbar">
                                                <!--------------- Slider List---------------->
                                                <a href="{{ route('sliders.index') }}" class="">
                                                    <i class="fa fa-list"></i> Slider <span class="hide-in-sm">List</span>
                                                </a>
                                            </span>
                                        </div>


                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <form action="{{ route('sliders.update',$slider->id) }}" id="Form" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                        <div class="row">

                                                            <div class="col-md-10 col-md-offset-1">

                                                                <!-- Title -->
                                                                <div class="form-group">
                                                                    <div class="input-group width-100 mb-1">
                                                                        <span class="input-group-addon width-30" style="text-align: left">
                                                                            Title <span class="label-required"></span>
                                                                        </span>
                                                                        <input type="text" class="form-control @error('title') has-error @enderror"
                                                                            name="title" id="title" value="{{ old('title',$slider->title) }}">
                                                                        @error('title')<br>
                                                                            <span class="text-danger">
                                                                                {{ $message }}
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <!-- Sub-Title -->
                                                                <div class="form-group">
                                                                    <div class="input-group width-100 mb-1">
                                                                        <span class="input-group-addon width-30" style="text-align: left">
                                                                            Sub-title <span class="label-required"></span>
                                                                        </span>
                                                                        <input type="text" class="form-control @error('subtitle') has-error @enderror"
                                                                            name="subtitle" id="subtitle" value="{{ old('subtitle',$slider->subtitle) }}">
                                                                        @error('subtitle')<br>
                                                                            <span class="text-danger">
                                                                                {{ $message }}
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Image --}}
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
                                                                        <small style="margin-left: 13px;"><b>Image size '1920 X 1-80'. </b><b style="color: red"> (NB: Slider "height" must be 1080px)</b></small>
                                                                    </div>
                                                                </div>

                                                                {{-- Previous Image --}}
                                                                <div class="input-group width-100 mb-3">
                                                                    <span class="input-group-addon width-30" style="background-color: transparent !important; border:none !important; text-align: left">Previous Image:</span>
                                                                    <img class="pt-1" src="{{ asset($slider->image) }}" width="300" height="200" style="margin-left: 13px;">
                                                                </div><br>

                                                                <!-- Description -->
                                                                <div class="form-group">
                                                                    <div>
                                                                        <span class="input-group-addon" style="text-align: left">
                                                                            Description
                                                                        </span>
                                                                        <textarea name="description" class="form-control summernote"
                                                                        placeholder="Slider description">{!! old('description', $slider->description) !!}</textarea>

                                                                    </div>
                                                                    @error('description')
                                                                    <span class="text-danger">
                                                                        {{ $message }}
                                                                    </span>
                                                                    @enderror
                                                                </div>

                                                                {{-- Status --}}
                                                                <div class="form-group">
                                                                    <div class="input-group width-100">
                                                                        <span class="input-group-addon width-30" style="text-align: left">
                                                                            Status
                                                                        </span>
                                                                        <label style="margin: 5px 0 0 8px">
                                                                            <input name="status" class="ace ace-switch ace-switch-6" type="checkbox" {{ $slider->status == 1 ? 'checked' : '' }}>
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
