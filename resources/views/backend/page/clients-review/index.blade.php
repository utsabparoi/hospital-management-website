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
                <li class="active">Clients Reviews</li>
            </ul><!-- /.breadcrumb -->

        </div>
        {{-- main content start from here --}}
        <div class="page-content">
            <!-- DYNAIC CONTENT FROM VIEWS -->

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> <i class="fa fa-newspaper-o"></i> Clients Review
                    </h4>
                    <span class="widget-toolbar">
                        <!--------------- CREATE---------------->
                        <a href="{{ route('clients_reviews.create') }}" class="">
                            <i class="fa fa-plus"></i> Add <span class="hide-in-sm">New</span>
                        </a>
                    </span>
                </div>

                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">

                        <div class="row">
                            <div class="col-xs-12">

                                <div class="table-responsive" style="border: 1px #cdd9e8 solid;">
                                    <table id="dynamic-table"
                                           class="table table-striped table-bordered table-hover new-table">
                                        <thead>
                                        <tr>
                                            <th width="5%" class="hide-in-sm">Sl</th>
                                            <th width="25%" class="text-center">Image</th>
                                            <th width="20%" class="text-center">Name</th>
                                            <th width="10%" class="text-center">Age</th>
                                            <th width="25%" class="text-center">Review</th>
                                            <th width="5%" class="text-center">Status</th>
                                            <th width="10%" class="text-center" style="width: 120px">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($reviews as $item)
                                                <tr>
                                                    <td class="hide-in-sm"><span class="span">{{ $loop->iteration }}</span></td>
                                                    <td class="text-center">
                                                        @if (file_exists($item->image) && $item->image == './default-articles_news.webp')
                                                            <img src="{{ asset('default-articles_news.webp') }}" alt="{{ $item->name }}"
                                                                width="200" height="200">
                                                        @elseif (file_exists($item->image) && $item->image != './default-articles_news.webp')
                                                                <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"
                                                                    width="200" height="200">
                                                        @endif
                                                    </td>
                                                    <td><span class="span">{{ $item->name }}</span></td>
                                                    <td class="text-center"><span class="span">{{ $item->age }}</span></td>
                                                    <td><span class="text"> {!! $item->review !!}</span></td>
                                                    <td class="text-center">
                                                        <!--------------- STATUS---------------->
                                                        {{-- <x-status :table="$table" :id="$item->id" :status="$item->status" /> --}}
                                                        <span class="span">
                                                            <x-status status="{{ $item->status }}" id="{{ $item->id }}" table="{{ $table }}" />
                                                        </span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-corner @if (file_exists($item->image)) action-span @endif">
                                                            <!--------------- EDIT SLIDER---------------->
                                                                <a href="{{ route('clients_reviews.edit', $item->id) }}" role="button"
                                                                    class="btn btn-xs btn-success bs-tooltip" title="Edit">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>

                                                            <!--------------- DELETE SLIDER---------------->
                                                                <button type="button"
                                                                    onclick="delete_item(`{{ route('clients_reviews.destroy', $item->id) }}`)"
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
                                    @include('backend.partials._paginate',['data'=> $reviews])

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

