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
                    <h2>Cafeteria</h2>
                    <hr>
                    <!-- <span class="divider"></span> -->
                </div>
            </div>
            <div class="col-sm-6">
                <p>Cafeteria of serves fresh and healthy food. The cafeteria is open daily from 7:00am – 10:00pm,
                    serving patients and visitors. It offers a wide selection of healthy meal, desserts, snacks, bakery, ice-creams,
                    chocolates and beverages. This is located at ground floor of the hospital building.
                    <br><br>
                    Cafeteria of  serves fresh and healthy food. The cafeteria is open daily from 7:00am – 10:00pm,
                    serving patients and visitors. It offers a wide selection of healthy meal, desserts, snacks, bakery, ice-creams,
                    chocolates and beverages. This is located at ground floor of the hospital building.
                    chocolates and beverages.
                    <br> <br>
                    Cafeteria of  serves fresh and healthy food. The cafeteria is open daily from 7:00am – 10:00pm,
                    serving patients and visitors.
                </p>
            </div>
            <div class="col-sm-6 cafeteria1">
                <img src="{{asset('frontend/images/dept/old/web-3.jpg')}}" alt="">
            </div>
        </div>


    </div>
</main>
    <footer>
        @include('frontend.layout.footerInner')
    </footer>
@endsection
