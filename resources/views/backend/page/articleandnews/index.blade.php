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
                <li class="active">Articles & News</li>
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
                    <h4 class="widget-title"> <i class="fa fa-info-circle"></i> Articles&News
                    </h4>
                    <span class="widget-toolbar">
                        <!--------------- CREATE---------------->
                        <a href="{{ route('articles_and_news.create') }}" class="">
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
                                            <th width="30%" class="text-center">Image</th>
                                            <th width="20%" class="text-center">Title</th>
                                            <th width="30%" class="text-center">Description</th>
                                            <th width="5%" class="text-center">Status</th>
                                            <th width="10%" class="text-center" style="width: 120px">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($articles_news as $item)
                                                <tr>
                                                    <td class="hide-in-sm"><span class="span">{{ $loop->iteration }}</span></td>
                                                    <td class="text-center">
                                                        @if (file_exists($item->image) && $item->image == './default-slider.webp')
                                                            <img src="{{ asset('default-slider.webp') }}" alt="{{ $item->name }}"
                                                                width="300" height="200">
                                                        @elseif (file_exists($item->image) && $item->image != './default-slider.webp')
                                                                <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"
                                                                    width="300" height="200">
                                                        @endif
                                                    </td>
                                                    <td><span class="span">{{ $item->title }}</span></td>
                                                    <td><span class="text"> {!! $item->description !!}</span></td>
                                                    <td class="text-center">
                                                        <!--------------- STATUS---------------->
                                                        <div>
                                                            <label>
                                                                <input name="status" class="ace ace-switch" data-id="{{$item->id}}"
                                                                    onclick="statusChange(this)" type="checkbox" id="status"
                                                                        onclick="statusChange()" @php if($item->status == "true"){echo "checked";}  else {echo "";} @endphp >
                                                                <span class="lbl"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-corner @if (file_exists($item->image)) action-span @endif">
                                                            <!--------------- EDIT SLIDER---------------->
                                                                <a href="{{ route('articles_and_news.edit', $item->id) }}" role="button"
                                                                    class="btn btn-xs btn-success bs-tooltip" title="Edit">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>

                                                            <!--------------- DELETE SLIDER---------------->
                                                                <button type="button"
                                                                    onclick="delete_item(`{{ route('articles_and_news.destroy', $item->id) }}`)"
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
                                    @include('partials._paginate',['data'=> $articles_news])

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

    <script>
        function statusChange(element) {
            let slider_id = $(element).attr("data-id");
            let post_url = "/sliderStatusChange";
            let allData = new FormData();
            allData.append("ID", slider_id);
            let configuration = {headers:{"content-type" : "multipart/form-data"},
                onUploadProgress: function (progressEvent) {
                    let uploadProgressPercent = Math.round((progressEvent.loaded*100)/progressEvent.total)
                    document.getElementById("uploadPercent").innerHTML = uploadProgressPercent+'%';
                }
            };
            axios.post(post_url, allData, configuration).then(
                function (response) {
                }
            ).catch(
                function (error) {
                }
            )

        }
    </script>
@endsection

