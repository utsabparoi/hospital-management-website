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
                    <h2>Default Page</h2>
                    <hr>
                    <!-- <span class="divider"></span> -->
                </div>
            </div>
            <div class="col-sm-6">
                <p>Asgar Ali Hospital is the Best Hospital in Bangladesh. We are a 250 bedded multi-disciplinary
                    tertiary-care Hospital, situated at Gandaria, Dhaka. It is a concern of the ‘City Group’ (www.citygroup.com.bd)
                    which is one of the top Conglomerates in Bangladesh, started its journey back in 1972 and in a span of four decades,
                    it has grown-up as one of the largest Industrial & Commercial Icons.
                    <br><br>
                    Asgar Ali Hospital offers all-inclusive state-of-the-art medical & healthcare services with up-to-date
                    facilities which are exclusively managed by well-reputed medical professionals, skilled nurses and technicians
                    from home and abroad. It`s main focus is to provide affordable Healthcare Services of International Standard
                    through continuous innovation and improvement of facilities and convenience.
                    <br> <br>
                    In Asgar Ali Hospital, we do believe in ‘Human Touch’ which comes as cherished gift not from our Consultants only but also from every staff around.
                </p>
            </div>
            <div class="col-sm-6 cafeteria1">
                <img src="{{ asset('frontend/images/default.jpg') }}" alt="">
            </div>
        </div>


    </div>
</main>
    <footer>
        @include('frontend.layout.footer')
    </footer>
@endsection
