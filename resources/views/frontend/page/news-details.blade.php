@extends('frontend.layout.app')
@section('content')
    <header>
        @include('frontend.layout.headerInner')
    </header>
    <main>
        <div class="container inner-cont">
            <div class="row">
                <div class="col-sm-9">
                    <div class="inner-sec-title-exception text-center">
                        <h2>{{ $news->title }}</h2>
                        <!-- <span class="divider"></span> -->
                    </div>
                </div>
            </div><br>

            <div class="row">
                <!-- Post Bar -->
                <div class="col-sm-9 department">
                    <div class="post-media">
                        <img src="{{ asset($news->image) }}" alt="{{ asset($news->title) }}">
                    </div><br>
                    <div class="col-sm-9 col-lg-9 custom_entity">
                        <p class="text-justify" >
                            {!! $news->description !!}
                        </p>
                    </div>
                </div>
                <!-- Side Menu bar -->
                <div class="col-lg-3 mt-sm-60 col-md-3 col-sm-3 ">
                    <div class="sidebar-widget">
                        <h5>Recent Post</h5>
                        <hr>
                        <ul class="widget-post pt-15">
                            @foreach($recent_news as $item)
                                <li>
                                    <a class="widget-post-media">
                                        <img src="{{asset($item->image)}}" style="width:103px;height:39px;" alt="{{ asset($item->name) }}" >
                                    </a>

                                    <div class="widget-post-info">
                                        <a href="{{route('news-details', $item->id)}}">{{$item->title}}</a>
                                        <div>
                                            {{$item->date}}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </main>
    <footer>
        @include('frontend.layout.footerInner')
    </footer>
@endsection
