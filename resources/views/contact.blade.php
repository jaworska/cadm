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
                        <div id="map" class="map2"></div>
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
                    <div class="upper-box">
                        <div id="map2" class="map2 h-100"></div>
                    </div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">Biuro w Katowicach<p>
                        <p class="address">ks. bpa Herberta Bednorza 2a-6<br/>40-384 Katowice</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="upper-box">
                        <div id="map3" class="map2 h-100"></div>
                    </div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">Biuro we Wrocławiu<p>
                        <p class="address">Powstańców Śląskich 48<br/>53-333 Wrocław</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="upper-box">
                        <div id="map4" class="map2 h-100"></div>
                    </div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">Biuro w Sanoku<p>
                        <p class="address">Lipińskiego 113<br/>38-500 Sanok</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="upper-box">
                        <div id="map5" class="map2 h-100"></div>
                    </div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">Biuro w Lublinie<p>
                        <p class="address">Mariana Rapackiego 25<br/>20-150 Lublin</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="upper-box">
                        <div id="map6" class="map2 h-100"></div>
                    </div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">DES ART Sp. z o.o.<p>
                        <p class="address">Czechosłowacka 3<br/>81-969 Gdynia</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="upper-box">
                        <div id="map7" class="map2 h-100"></div>
                    </div>
                    <div class="position-relative location-box">
                        <p class="company-name text-left d-flex align-baseline">CADM Automotive GmbH<p>
                        <p class="address">Schatzbogen 38<br/>D – 81829 München</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid map-fluid">
        <div id="map8"></div>
        <div id="map-container2" class="container">
            <div id="map-box2" class="position-relative">
                <p class="company-name text-left d-flex align-baseline"><span class="hq">HQ</span>CADM Automotive Sp. z o.o.<p>
                <p class="address">Lindego 1c<br/>30-148 Kraków</p>
                <p class="phone">
                    <img src="/img/phone.png"/>+48 12 397 21 82, fax +48 12 397 92<br/>
                    <img src="/img/mail.png" class="mail">info@cadm-a.com</p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        // Initialize and add the map
        function initMap() {
            // The map, centered at Uluru
            if (jQuery(window).width() > 776) {
                var makeZoom = 15;
                var makeZoom2 = 6;
                var myLat = 51.533909;
                var myLng = 14.731688;

            } else {
                var makeZoom = 8;
                var makeZoom2 = 5;
                var myLat = 49.096167;
                var myLng = 17.024754;
            };

            var myLatKrakow = 50.07856;
            var myLngKrakow = 19.879270;
            var myLatKatowice = 50.263567;
            var myLngKatowice = 19.093314;
            var myLatWroclaw = 51.096167;
            var myLngWroclaw = 17.024754;
            var myLatSanok = 49.546515;
            var myLngSanok = 22.219024;
            var myLatLublin = 51.273985;
            var myLngLublin = 22.564424;
            var myLatGdynia = 54.533146;
            var myLngGdynia = 18.517756;
            var myLatMunchen = 48.134737;
            var myLngMunchen = 11.663307;


            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: makeZoom,
                minZoom: 5,
                center: {lat: myLatKrakow, lng: myLngKrakow },
                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#cfcfcf"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            });
            var map2 = new google.maps.Map(document.getElementById('map2'), {
                zoom: makeZoom,
                minZoom: 5,
                center: {lat: myLatKatowice, lng: myLngKatowice },
                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#cfcfcf"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            });
            var map3 = new google.maps.Map(document.getElementById('map3'), {
                zoom: makeZoom,
                minZoom: 5,
                center: {lat: myLatWroclaw, lng: myLngWroclaw },
                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#cfcfcf"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            });
            var map4 = new google.maps.Map(document.getElementById('map4'), {
                zoom: makeZoom,
                minZoom: 5,
                center: {lat: myLatSanok, lng: myLngSanok },
                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#cfcfcf"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            });
            var map5 = new google.maps.Map(document.getElementById('map5'), {
                zoom: makeZoom,
                minZoom: 5,
                center: {lat: myLatLublin, lng: myLngLublin },
                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#cfcfcf"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            });
            var map6 = new google.maps.Map(document.getElementById('map6'), {
                zoom: makeZoom,
                minZoom: 5,
                center: {lat: myLatGdynia, lng: myLngGdynia },
                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#cfcfcf"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            });
            var map7 = new google.maps.Map(document.getElementById('map7'), {
                zoom: makeZoom,
                minZoom: 5,
                center: {lat: myLatMunchen, lng: myLngMunchen },
                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#cfcfcf"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            });
            var map8 = new google.maps.Map(document.getElementById('map8'), {
                zoom: makeZoom2,
                minZoom: 5,
                center: {lat: myLat, lng: myLng },
                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#cfcfcf"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            });
            setMarkers(map);
            setMarkers2(map2);
            setMarkers3(map3);
            setMarkers4(map4);
            setMarkers5(map5);
            setMarkers6(map6);
            setMarkers7(map7);
            setMarkers8(map8);

        }

        var locations = [
            ['<span class="hq">HQ</span>CADM Automotive Sp. z o.o.', 50.078560, 19.879270,'Lindego 1c','30-148 Kraków','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
            ['CADM Automotive Sp. z o.o.', 51.096167, 17.024754,'Powstańców Śląskich 48','53-333 Wrocław','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
            ['CADM Automotive Sp. z o.o.', 50.263567, 19.093314,'ks. bpa Herberta Bednorza 2a-6','40-384 Katowice','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
            ['DES ART. Sp. z o.o.', 54.533146, 18.517756,'Czechosłowacka 3','81-969 Gdynia','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
            ['CADM Automotive Sp. z o.o.', 49.546515, 22.219024,'Lipińskiego 113','38-500 Sanok','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
            ['CADM Automotive Sp. z o.o.', 51.273985, 22.564424,'Mariana Rapackiego 25','20-150 Lublin','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
            ['CADM Automotive GmbH', 48.134737, 11.663307,'Schatzbogen 38','D – 81829 München','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10]
        ];

        var allMarkers = [];

        function setMarkers(map) {

            var image = {
                url : 'img/dot.png'
            };

            var image2 = {
                url : 'img/dot-2.png'
            };

            var marker, i;
            for (var i = 0; i < locations.length; i++) {

                var location = locations[i];
                var company = locations[i][0];
                var address = locations[i][3];
                var address2 = locations[i][4];
                var phone = locations[i][5];
                var email = locations[i][6];
                var iconIndex = locations[i][7];

                var pin = locations[i];
                var myLatLng = new google.maps.LatLng(pin[1], pin[2]);


                if (i < 1) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        icon: image2,
                        zIndex : iconIndex
                    });
                };


                if (i >= 1) {
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        icon: image,
                        zIndex : iconIndex
                    });
                };


                allMarkers.push(marker);

                google.maps.event.addListener(marker,'click', (function(marker){

                    return function() {

                        allMarkers.forEach(markAsDot);

                        if (marker.icon == 'img/dot-5.png') marker.setIcon("img/dot-2.png");
                        else marker.setIcon("img/dot-4.png");

                        marker.setZIndex(-20);
                    };
                })(marker));

            }
        }

        var allMarkers2 = [];

        function setMarkers2(map2) {

            var image = {
                url : 'img/dot.png'
            };

            var image2 = {
                url : 'img/dot-5.png'
            };

            var image3 = {
                url : 'img/dot-4.png'
            };

            var marker, i;
            for (var i = 0; i < locations.length; i++) {

                var location = locations[i];
                var company = locations[i][0];
                var address = locations[i][3];
                var address2 = locations[i][4];
                var phone = locations[i][5];
                var email = locations[i][6];
                var iconIndex = locations[i][7];

                var pin = locations[i];
                var myLatLng = new google.maps.LatLng(pin[1], pin[2]);


                if (i < 1) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map2,
                        icon: image2,
                        zIndex : iconIndex
                    });
                };


                if (i == 2) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map2,
                        icon: image3,
                        zIndex : iconIndex
                    });
                };


                if (i > 2 || (i >= 1 && i < 2)) {
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map2,
                        icon: image,
                        zIndex : iconIndex
                    });
                };


                allMarkers2.push(marker);

                google.maps.event.addListener(marker,'click', (function(marker){

                    return function() {

                        allMarkers2.forEach(markAsDot);

                        if (marker.icon == 'img/dot-5.png') marker.setIcon("img/dot-2.png");
                        else marker.setIcon("img/dot-4.png");

                        marker.setZIndex(-20);
                    };
                })(marker));

            }
        }

        var allMarkers3 = [];

        function setMarkers3(map3) {

            var image = {
                url : 'img/dot.png'
            };

            var image2 = {
                url : 'img/dot-5.png'
            };

            var image3 = {
                url : 'img/dot-4.png'
            };

            var marker, i;
            for (var i = 0; i < locations.length; i++) {

                var location = locations[i];
                var company = locations[i][0];
                var address = locations[i][3];
                var address2 = locations[i][4];
                var phone = locations[i][5];
                var email = locations[i][6];
                var iconIndex = locations[i][7];

                var pin = locations[i];
                var myLatLng = new google.maps.LatLng(pin[1], pin[2]);


                if (i < 1) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map3,
                        icon: image2,
                        zIndex : iconIndex
                    });
                };


                if (i == 1) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map3,
                        icon: image3,
                        zIndex : iconIndex
                    });
                };


                if (i > 1) {
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map3,
                        icon: image,
                        zIndex : iconIndex
                    });
                };


                allMarkers3.push(marker);

                google.maps.event.addListener(marker,'click', (function(marker){

                    return function() {

                        allMarkers3.forEach(markAsDot);

                        if (marker.icon == 'img/dot-5.png') marker.setIcon("img/dot-2.png");
                        else marker.setIcon("img/dot-4.png");

                        marker.setZIndex(-20);
                    };
                })(marker));

            }
        }

        var allMarkers4 = [];

        function setMarkers4(map4) {

            var image = {
                url : 'img/dot.png'
            };

            var image2 = {
                url : 'img/dot-5.png'
            };

            var image3 = {
                url : 'img/dot-4.png'
            };

            var marker, i;
            for (var i = 0; i < locations.length; i++) {

                var location = locations[i];
                var company = locations[i][0];
                var address = locations[i][3];
                var address2 = locations[i][4];
                var phone = locations[i][5];
                var email = locations[i][6];
                var iconIndex = locations[i][7];

                var pin = locations[i];
                var myLatLng = new google.maps.LatLng(pin[1], pin[2]);


                if (i < 1) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map4,
                        icon: image2,
                        zIndex : iconIndex
                    });
                };


                if (i == 4) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map4,
                        icon: image3,
                        zIndex : iconIndex
                    });
                };


                if (i > 4 || (i < 4 && i >= 1)) {
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map4,
                        icon: image,
                        zIndex : iconIndex
                    });
                };


                allMarkers4.push(marker);

                google.maps.event.addListener(marker,'click', (function(marker){

                    return function() {

                        allMarkers4.forEach(markAsDot);

                        if (marker.icon == 'img/dot-5.png') marker.setIcon("img/dot-2.png");
                        else marker.setIcon("img/dot-4.png");

                        marker.setZIndex(-20);
                    };
                })(marker));

            }
        }

        var allMarkers5 = [];

        function setMarkers5(map5) {

            var image = {
                url : 'img/dot.png'
            };

            var image2 = {
                url : 'img/dot-5.png'
            };

            var image3 = {
                url : 'img/dot-4.png'
            };

            var marker, i;
            for (var i = 0; i < locations.length; i++) {

                var location = locations[i];
                var company = locations[i][0];
                var address = locations[i][3];
                var address2 = locations[i][4];
                var phone = locations[i][5];
                var email = locations[i][6];
                var iconIndex = locations[i][7];

                var pin = locations[i];
                var myLatLng = new google.maps.LatLng(pin[1], pin[2]);


                if (i < 1) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map5,
                        icon: image2,
                        zIndex : iconIndex
                    });
                };


                if (i == 5) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map5,
                        icon: image3,
                        zIndex : iconIndex
                    });
                };


                if (i > 5 || (i < 5 && i >= 1)) {
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map5,
                        icon: image,
                        zIndex : iconIndex
                    });
                };


                allMarkers5.push(marker);

                google.maps.event.addListener(marker,'click', (function(marker){

                    return function() {

                        allMarkers5.forEach(markAsDot);

                        if (marker.icon == 'img/dot-5.png') marker.setIcon("img/dot-2.png");
                        else marker.setIcon("img/dot-4.png");

                        marker.setZIndex(-20);
                    };
                })(marker));

            }
        }

        var allMarkers6 = [];

        function setMarkers6(map6) {

            var image = {
                url : 'img/dot.png'
            };

            var image2 = {
                url : 'img/dot-5.png'
            };

            var image3 = {
                url : 'img/dot-4.png'
            };

            var marker, i;
            for (var i = 0; i < locations.length; i++) {

                var location = locations[i];
                var company = locations[i][0];
                var address = locations[i][3];
                var address2 = locations[i][4];
                var phone = locations[i][5];
                var email = locations[i][6];
                var iconIndex = locations[i][7];

                var pin = locations[i];
                var myLatLng = new google.maps.LatLng(pin[1], pin[2]);


                if (i < 1) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map6,
                        icon: image2,
                        zIndex : iconIndex
                    });
                };


                if (i == 3) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map6,
                        icon: image3,
                        zIndex : iconIndex
                    });
                };


                if (i > 3 || (i < 3 && i >= 1)) {
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map6,
                        icon: image,
                        zIndex : iconIndex
                    });
                };


                allMarkers6.push(marker);

                google.maps.event.addListener(marker,'click', (function(marker){

                    return function() {

                        allMarkers6.forEach(markAsDot);

                        if (marker.icon == 'img/dot-5.png') marker.setIcon("img/dot-2.png");
                        else marker.setIcon("img/dot-4.png");

                        marker.setZIndex(-20);
                    };
                })(marker));

            }
        }

        var allMarkers7 = [];

        function setMarkers7(map7) {

            var image = {
                url : 'img/dot.png'
            };

            var image2 = {
                url : 'img/dot-5.png'
            };

            var image3 = {
                url : 'img/dot-4.png'
            };

            var marker, i;
            for (var i = 0; i < locations.length; i++) {

                var location = locations[i];
                var company = locations[i][0];
                var address = locations[i][3];
                var address2 = locations[i][4];
                var phone = locations[i][5];
                var email = locations[i][6];
                var iconIndex = locations[i][7];

                var pin = locations[i];
                var myLatLng = new google.maps.LatLng(pin[1], pin[2]);


                if (i < 1) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map7,
                        icon: image2,
                        zIndex : iconIndex
                    });
                };


                if (i == 6) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map7,
                        icon: image3,
                        zIndex : iconIndex
                    });
                };


                if (i > 6 || (i < 6 && i>= 1)) {
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map7,
                        icon: image,
                        zIndex : iconIndex
                    });
                };


                allMarkers7.push(marker);

                google.maps.event.addListener(marker,'click', (function(marker){

                    return function() {

                        allMarkers7.forEach(markAsDot);

                        if (marker.icon == 'img/dot-5.png') marker.setIcon("img/dot-2.png");
                        else marker.setIcon("img/dot-4.png");

                        marker.setZIndex(-20);
                    };
                })(marker));

            }
        }

        var allMarkers8 = [];

        function setMarkers8(map8) {

            var image = {
                url : 'img/dot.png'
            };

            var image2 = {
                url : 'img/dot-2.png'
            };

            var marker, i;
            for (var i = 0; i < locations.length; i++) {

                var location = locations[i];
                var company = locations[i][0];
                var address = locations[i][3];
                var address2 = locations[i][4];
                var phone = locations[i][5];
                var email = locations[i][6];
                var iconIndex = locations[i][7];

                var pin = locations[i];
                var myLatLng = new google.maps.LatLng(pin[1], pin[2]);


                if (i < 1) {

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map8,
                        icon: image2,
                        zIndex : iconIndex
                    });
                };


                if (i >= 1) {
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map8,
                        icon: image,
                        zIndex : iconIndex
                    });
                };


                allMarkers8.push(marker);

                if (phone) {
                    var content = '<div id="map-box2"><p class="company-name">' + company + '<p><p class="address">' + address + '<br/>' + address2 + '</p><p class="phone"><img src="img/phone.png"/>' + phone + '<br/><img src="img/mail.png" class="mail">' + email + '</p></div>';
                } else {
                    var content = '<div id="map-box2"><p class="company-name">' + company + '<p><p class="address">' + address + '<br/>' + address2 + '</div>';
                }

                var infoWindow = new google.maps.InfoWindow();



                google.maps.event.addListener(marker,'click', (function(marker,content,infoWindow){

                    return function() {

                        allMarkers8.forEach(markAsDot);

                        // infoWindow.close();
                        document.getElementById('map-container2').innerHTML = content;
                        infoWindow.setContent(content);
                        // infoWindow.open(map,marker);
                        // console.log(jQuery(this));
                        if (marker.icon == 'img/dot-5.png') marker.setIcon("img/dot-2.png");
                        else marker.setIcon("img/dot-4.png");

                        marker.setZIndex(-20);
                    };
                })(marker,content,infoWindow));

            }
        }



        function markAsDot(element, index, array) {

            if (index === 0) {
                element.setIcon("img/dot-5.png");
            }
            else {
                element.setIcon("img/dot.png");
            }

            element.setZIndex(21);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCft8gnloFEwT9u_3Rl8O0w_fDQkqrSWc8&callback=initMap"></script>
@endsection
