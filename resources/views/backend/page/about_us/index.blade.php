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
                    <li class="active">AboutUs List</li>
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
            <div class="page-content">
                <!-- DYNAIC CONTENT FROM VIEWS -->

                <div class="widget-box">


                    <!-- header -->
                    <div class="widget-header">
                        <h4 class="widget-title"> <i class="fa fa-info-circle"></i> AboutUs
                        </h4>
                        <span class="widget-toolbar">
                            <!--------------- CREATE---------------->
                            <a href="{{ route('about_us.create') }}" class="">
                                <i class="fa fa-plus"></i> Add <span class="hide-in-sm">New</span>
                            </a>
                        </span>
                    </div>



                    <!-- body -->
                    <div class="widget-body">
                        <div class="widget-main">

                            <!-- Searching -->


                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="table-responsive" style="border: 1px #cdd9e8 solid;">
                                        <table id="dynamic-table"
                                            class="table table-striped table-bordered table-hover new-table">
                                            <thead>
                                            <tr>
                                                <th width="5%" class="hide-in-sm">Sl</th>
                                                <th width="35%">Image</th>
                                                <th width="20%">Title</th>
                                                <th width="25%">Description</th>
                                                <th width="5%">Status</th>
                                                <th width="10%" class="text-center" style="width: 120px">Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                @forelse ($about_us as $item)
                                                    <tr>
                                                        <td class="hide-in-sm"><span class="span">{{ $loop->iteration }}</span></td>
                                                        <td class="text-center">
                                                            @if (file_exists($item->image) && $item->image == './default-about_us.webp')
                                                                <img src="{{ asset('default-about_us.webp') }}" alt="{{ $item->title }}"
                                                                    width="300" height="200">
                                                            @elseif (file_exists($item->image) && $item->image != './default-about_us.webp')
                                                                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}"
                                                                        width="300" height="200">
                                                            @endif
                                                        </td>
                                                        <td><span class="span">{{ $item->title }}</span></td>
                                                        <td><span class="text"> {!! $item->description !!}</span></td>
                                                        <td class="text-center">
                                                            <!--------------- STATUS---------------->
                                                            <span class="span">
                                                                <x-status status="{{ $item->status }}" id="{{ $item->id }}" table="{{ $table }}" />
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group btn-corner @if (file_exists($item->image)) action-span @endif">
                                                                <!--------------- EDIT about_us---------------->
                                                                    <a href="{{ route('about_us.edit', $item->id) }}" role="button"
                                                                        class="btn btn-xs btn-success bs-tooltip" title="Edit">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>

                                                                <!--------------- DELETE about_us---------------->
                                                                    <button type="button"
                                                                        onclick="delete_item(`{{ route('about_us.destroy', $item->id) }}`)"
                                                                        class="btn btn-xs btn-danger bs-tooltip" title="Delete">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="30" class="text-center text-danger py-3"
                                                            style="background: #eaf4fa80 !important; font-size: 18px">
                                                            <strong>No records found!</strong>
                                                        </td>
                                                    </tr>
                                                @endforelse

                                            </tbody>
                                        </table>
                                        @include('partials._paginate',['data'=> $about_us])

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
