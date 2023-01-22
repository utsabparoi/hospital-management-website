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
                        <h2>{{ $health_pkg_cat->name }}</h2>
                        @foreach ($health_pkg_fac->chunk(4) as $items)
                            <div class="row pkg-titles">
                                <div class="col-sm-12">
                                    <div class="d-flex">
                                        @foreach ($items as $i)
                                            @if ($health_pkg_cat->name == $i->pkg_category)
                                                <p><i class="fas fa-check"></i> {{ $i->name }}</p>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <hr>
                        <div id="animated-example" class="animated fadeInLeft">
                            <!-- <p>We provide high-quality <b>full body health check-up package at lowest price</b> ( Call for details: <b>01787683067</b> / <b>01787683387</b> )</p> -->
                            <h4 class="hp-pkg-caption">Book your schedule today. For Appointment & further query call us on:

                            </h4>
                            <h4 class="hp-caption-2"><span class="hp-phn">{{$WebsiteInformation->phone_one}}</span> or <span class="hp-phn">{{$WebsiteInformation->phone_two}}</span></h4>
                            <!-- <span class="divider"></span> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pkg-cards">
                @foreach ($health_packages as $item)
                    <div class="col-sm-3">
                        <div class="card text-center">
                            <div class="card-header">
                                {{-- {{ dd($health_packages) }} --}}
                                <h5>{{ $item->package_name }}</h5>
                                <p>{{ $item->patient }}</p>
                            </div>
                            <div class="discount-rate">
                                <p>Discounted Package Rate: <span class="bdt">BDT</span>
                                    <span class="bdt-price">
                                        {{ $item->package_cost - ($item->package_cost * ($item->package_discount/100))}}
                                    </span>
                                </p>
                            </div>
                            <div class="discount-rate2">
                                <div>
                                    <p class="pkg-org">Original Investigation<br>Rate:BDT <span class="strike-line">{{ $item->package_cost }}</span></p>
                                </div>
                                <div class="save">
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-8">
                                            <div class="row save-btn">
                                                <div class="col-sm-5 save-btn1">Save</div>
                                                <div class="col-sm-7 save-btn2">{{ $item->package_discount }}%</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @foreach ($health_avl_pkg1 as $pkg1)
                                    @if ($item->package_name == $pkg1->package_name)
                                        <ul>
                                            <li>{{ $pkg1->test_name }}</li>

                                            <!-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Show More
                                            </a> -->
                                            {{-- <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="pkg-panel-body">
                                                    @foreach ($health_avl_pkg2 as $pkg2)
                                                        @if ($item->package_name == $pkg2->package_name)
                                                            <ul>
                                                                <li>{{ $pkg2->test_name }}</li>
                                                            </ul>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="collapse" id="collapseExample">

                                            </div> --}}


                                        </ul>
                                    @endif

                                @endforeach

                            </div>
                            <div class="card-footer">



                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title pkg-price">
                                                <a class="collapsed btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">

                                                </a>
                                            </h4>

                                        </div>

                                    </div>

                                </div>




                                <!-- <div class="pkg-price">
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Show More</a>
                                </div> -->
                            </div>

                            <!-- <div class="card-footer"> -->
                            <!-- <p>Book your schedule today.</p>
                                <p>For Appointment & further query call us on: </p>
                                <p><span class="footer-num">01787683067</span> or <span class="footer-num">10602</span></p> -->
                            <!-- <div class="pkg-price">
                                    <a href="#"><button><i class="fas fa-plus-circle"></i> Show More</button></a>
                                </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
    <footer>
        @include('frontend.layout.footerInner')
    </footer>
@endsection
