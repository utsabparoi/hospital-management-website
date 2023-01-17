<!--Start Medical Departments area-->
<section class="medical-departments-area area2" id="dept-id">
    <div class="container">
        <div class="sec-title sec-title-2 text-center">
            <h2>Our Departments</h2>
            <!-- <span class="divider"></span> -->
            <div class="hr-div">
                <hr>
            </div>
        </div>
        @foreach ($departments->chunk(8) as $items)
            <div class="row">
                @foreach($items->chunk(12) as $item)
                    <div class="col-lg-12 col-md-12">
                        <div class="medical-departments-carousel">
                        <!--Start single item-->
                            @foreach ($item as $i)
                                <div class="single-item text-center">
                                    <div class="iocn-holder">
                                        <!-- <span class="flaticon-lungs"></span> -->
                                        <img src="{{ asset($i->department_image) }}" alt="{{ $i->department_name }}"
                                            style="width: 100px;height: 100px;">
                                    </div>
                                    <div class="text-holder">
                                        <h3>{{$i->department_name}}</h3>
                                        <p>{!! Str::limit(strip_tags($i->department_description), 110) !!}</p>
                                    </div>
                                    <a class="readmore" href="{{ route('single-department',$i->id) }}">Read More</a>
                                </div>
                            @endforeach
                            <!--End single item-->
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
        <!-- 2nd row ends -->
    </div>
</section>
<!--End Medical Departments area-->
