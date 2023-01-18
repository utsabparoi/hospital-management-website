<!--Start facilities Appointment area-->
<section class="facilities-appointment-area ggray" id="faci-id">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="facilities-content-box">
                    <div class="sec-title text-center">
                        <h2>Our Facilities</h2>
                        <div class="hr-div">
                            <hr>
                        </div>
                        <!-- <span class="divider"></span> -->
                        <!-- <span class="divider divider2"></span>
                        <span class="border"></span> -->
                    </div>
                    <!--Start facilities carousel-->
                    <div class="facilities-carousel">
                        <!------Start single facilities item------->
                        @foreach ($facilities->chunk(6) as $items)
                            <div class="single-facilities-item">
                                @foreach($items->chunk(3) as $item)
                                    <div class="row">
                                        @foreach($item as $i)
                                            <!--Start single item-->
                                            <div class="col-md-4">
                                                <div class="single-item">
                                                    <a href="{{ route('singleFacility', $i->id)}}">
                                                        <div class="icon-holder">
                                                            <div class="icon-box">
                                                                <div class="icon">
                                                                    {{-- <img src="{{ asset($i->icon) }}" alt="{{ $i->name }}"
                                                                        style="width: 50px;height: 50px;"> --}}
                                                                    <lord-icon src="{{asset($i->icon)}}" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:70px;height:70px">
                                                                    </lord-icon>
                                                                    {{-- <i class="fa fa-group"></i> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-holder">
                                                            <h3>{{$i->title}}</h3>
                                                            <p>{!! Str::limit(strip_tags($i->description), 110) !!}</p>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                            <!--End single item-->
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                            <!-------End single facilities item------>
                        @endforeach

                    </div>
                    <!--End facilities carousel-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End facilities Appointment area-->
