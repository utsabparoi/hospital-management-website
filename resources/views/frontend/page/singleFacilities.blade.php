@extends('frontend.layout.app')
@section('content')
    <header>
        @include('frontend.layout.headerInner')
    </header>
<main>
    <div class="container inner-cont">
        <div class="row">
            <div class="col-sm-12">
                <div class="inner-sec-title-common text-center">
                    <h2>{{ $data->title }}</h2>
                    <hr>
                    <!-- <span class="divider"></span> -->
                </div>
            </div>
            <div class="col-sm-6">
                <p>{!!$data->description!!}</p>
            </div>
            <div class="col-sm-6 cafeteria1">
                <img src="{{asset($data->image)}}" alt="{{$data->name}}">
            </div>
        </div>


    </div>
</main>
    <footer>
        @include('frontend.layout.footer')
    </footer>
@endsection
