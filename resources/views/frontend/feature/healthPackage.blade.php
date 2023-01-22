<!-- Health Package Section Starts -->
<section id="health-package">
    <div class="container">
        <div class="sec-title sec-title-2 text-center">
            <h2><a href="health-package.php">Our Health Package</a></h2>
            <div class="hr-div">
                <hr>
            </div>
            <p>we provide high-quality <b>full body health check-up package at lowest price</b> ( Call for details: <b>{{$WebsiteInformation->phone_one}}</b> / <b>{{$WebsiteInformation->phone_two}}</b> )</p>
            <!-- <span class="divider"></span> -->

        </div>
        <div class="row mt-2">
            <div class="col-md-2"></div>
            @foreach ($health_pkg_cat as $item)
                <div class="col-md-4 mt-2">
                    <div class="common-health-box">
                        <p>{{$item->name}}</p>
                        <ul>
                            @foreach ($health_pkg_fac as $fac)
                                @if ($item->name == $fac->pkg_category)
                                    <li><i class="fas fa-check"></i> {{$fac->name}}</li>
                                @endif
                            @endforeach
                        </ul>
                        <button><a href="{{ route('health_pkg_details', $item->id) }}">view details</a></button>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Health Package section Ends -->
