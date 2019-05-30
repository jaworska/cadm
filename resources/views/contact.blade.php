@extends('layouts.default')

@section('content')

    <div class="container-fluid why contact">
        <div class="container">
            <div class="row">
                <div class="col-12 padding-container">
                    <div class="text-center why_span">
                        <span>@lang("pages.contact.locations")</span>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col-md-7 col-12">
                    <div class="position-relative h-100">
                        <div id="map"></div>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline"><span class="hq">HQ</span>CADM Automotive Sp. z o.o. - HQ<p>
                        <p class="address">Lindego 1c<br/>30-148 Kraków</p>
                        <p class="phone">
                            <img src="img/phone.png"/>+48 12 397 21 82, fax +48 12 397 92<br/>
                            <img src="img/mail.png" class="mail">info@cadm-a.com</p>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col-md-4 col-12">
                    <div class="upper-box"></div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">Biuro w Katowicach<p>
                        <p class="address">ks. bpa Herberta Bednorza 2a-6<br/>40-384 Katowice</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="upper-box"></div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">Biuro we Wrocławiu<p>
                        <p class="address">Powstańców Śląskich 48<br/>53-333 Wrocław</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="upper-box"></div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">DES ART Sp. z o.o.<p>
                        <p class="address">Czechosłowacka 3<br/>81-969 Gdynia</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="upper-box"></div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">Biuro w Sanoku<p>
                        <p class="address">Lipińskiego 113<br/>38-500 Sanok</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="upper-box"></div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">Biuro w Lublinie<p>
                        <p class="address">Mariana Rapackiego 25<br/>20-150 Lublin</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="upper-box"></div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">CADM Automotive GmbH<p>
                        <p class="address">Schatzbogen 38<br/>D – 81829 München</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid map-fluid">


    </div>
@endsection
