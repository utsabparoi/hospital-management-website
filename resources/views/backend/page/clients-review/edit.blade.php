@extends('layouts.master')
@section('title', 'Edit Review')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <h4 class="pl-2"><i class="fa fa-edit"></i> @yield('title')</h4>

                <ul class="breadcrumb mb-1">
                    <li><a href="{{ route('home') }}"><i class="ace-icon fa fa-home"></i></a></li>
                    <li>Inventory</li>
                    <li><a class="text-muted" href="{{ route('website.client-reviews.index') }}">Review</a></li>
                    <li class=""><a href="javascript:void(0)">Edit</a></li>
                </ul>
            </div>


            <div class="widget-body">
                <div class="widget-main">
                    <form class="form-horizontal mt-2" action="{{ route('website.client-reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('partials._alert_message')

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">


                                <!-- NAME -->
                                <div class="form-group">
                                    <div class="input-group width-100">
                                        <span class="input-group-addon width-30" style="text-align: left">Review Name <sup class="text-danger">*</sup></span>
                                        <input type="text" class="form-control" name="name" value="{{ old('name', $review->name) }}" placeholder="Review Name" required>
                                    </div>

                                    @error('name')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>


                                <!-- Dedignation -->
                                <div class="form-group">
                                    <div class="input-group width-100">
                                        <span class="input-group-addon width-30" style="text-align: left">Dedignation <sup class="text-danger">*</sup></span>
                                        <input type="text" class="form-control" name="designation" value="{{ old('designation', $review->designation) }}" placeholder="Dedignation" required>
                                    </div>

                                    @error('designation')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>




                                <!-- IMAGE -->
                                <div class="form-group">
                                    <div class="input-group width-100">
                                        <span class="input-group-addon width-30" style="text-align: left">Image</span>
                                        <input type="file" class="form-control ace-file-upload" name="image">
                                    </div>
                                    <div class="input-group width-100">
                                        <span class="input-group-addon width-30" style="background-color: transparent !important; border:none !important;"></span>
                                        <small style="margin-left: 13px;"><b>Image size '1350 X 480'.</b></small>
                                    </div>
                                    @error('image')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>


                                <div class="input-group width-100 mb-2">
                                    <span class="input-group-addon width-30" style="background-color: transparent !important; border:none !important; text-align: left">Previous Image</span>
                                    <img src="{{ asset($review->image) }}" width="220" height="50" style="margin-left: 11px;">
                                </div>

                                {{-- <div class="input-group width-100">
                                    <span class="input-group-addon width-30" style="background-color: transparent !important; border:none !important;"></span>
                                    <small style="margin-left: 13px;"><b>Image size '1350 X 480'.</b></small>
                                </div> --}}


                                <!-- Review -->
                                <div class="input-group width-100 mb-1">
                                    <span class="input-group-addon width-30" style="text-align: left">
                                        Review <span class="label-required"></span>
                                    </span>
                                    <textarea name="review" class="form-control" rows="3">{{ old('review',$review->review) }}</textarea>

                                </div>



                                <!-- ACTION -->
                                <div class="btn-group pull-right">
                                    <button class="btn btn-sm btn-primary"> <i class="fa fa-save"></i> Update </button>
                                    <a href="{{ route('website.client-reviews.index') }}" class="btn btn-sm btn-secondary"> <i class="fa fa-list"></i> List </a>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
