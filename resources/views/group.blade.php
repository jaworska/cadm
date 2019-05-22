@extends('layouts.default')

@section('content')
    <div class="jumbotron video_main group">
        <video id="video-background" preload muted autoplay loop>
            <source src="img/movie.webm" type="video/webm">
        </video>
        <div class="container-fluid video-text position-absolute">
            <div class="row">
                <div class="col-md-10 col-sm-12 offset-md-1 text-center">
                    <p class="position-relative">The highest standards, perfect solutions,<br/> best people</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid why group">
        <div class="container">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="text-center why_span">
                        <span>A symbol of passion, high quality and expertise</span>
                    </div>
                    <div class="text-center symbol">
                        <p>CADM Automotive is a cross-industry provider of comprehensive high-calibre engineering solutions for automotive, railway, maritime and aerospace industries.</p>
                        <p>As a global partner and a local leader, we specialize in development of detailed components, modules as well as entire systems ensuring their functionality and fault free assembly within their surrounding environments. We create and implement innovative solutions to reduce production costs and consumption of materials, and develop smart mobility solutions.</p>
                    </div>
                    <div class="text-center why_span why_span-bottom">
                        <span>Why CADM?</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row why-row align-items-center justify-content-sm-center">
                <div class="col-md-3 col-8 why-content d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>Complexity</span>
                        <p>The ability to undertake projects from concept to final implementation/production.</p>
                    </div>
                </div>
                <div class="col-md-3 col-8 why-content d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>Interdisciplinary</br>approach</span>
                        <p>Coverage of key market sectors.</p>
                    </div>
                </div>
                <div class="col-md-3 col-8 why-content mr-0 d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>Individually fitted business models</span>
                        <p>Based on the nature of the project and customers’ needs.</p>
                    </div>
                </div>
            </div>

            <div class="row why-row align-items-center justify-content-sm-center">
                <div class="col-md-3 col-8 why-content d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>Continuous improvement</span>
                        <p>We are constantly seeking new ways and possibilities to develop and raise our know-how.</p>
                    </div>
                </div>
                <div class="col-md-3 col-8 why-content d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>A wide-range portfolio</span>
                    </div>
                </div>
                <div class="col-md-3 col-8 why-content mr-0 d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>More than 80 customers worldwide</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid group grow">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center title-big">
                        <span>We are constantly growing</span>
                    </div>
                </div>
                <div class="col-6 text-right grow-click empl">
                    <span class="active">Number of employees</span>
                </div>
                <div class="col-6 text-left grow-click proj">
                    <span>Number of projects</span>
                </div>
                <div class="col-8 offset-2 d-flex">
                    <img src="img/group_wykres.JPG" class="img-project d-none"/>
                    <img src="img/group_wykres.JPG" class="img-employee"/>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid logos group">
        <div class="row text-center">
            <div class="col-6 logos-col">
                <div class="col-12">
                    <img src="img/catia.png" srcset="img/catia@2x.png 2x, img/catia@3x.png 3x" class="bw">
                    <img src="img/bw_10.png" srcset="img/bw_10@2x.png 2x, img/bw_10@3x.png 3x" class="bw">
                    <img src="img/bw_11.png" srcset="img/bw_11@2x.png 2x, img/bw_11@3x.png 3x" class="bw">
                    <img src="img/bw_12.png" srcset="img/bw_12@2x.png 2x, img/bw_12@3x.png 3x" class="bw">
                </div>
                <div class="col-12">
                    <img src="img/bw_9.png" srcset="img/bw_9@2x.png 2x, img/bw_9@3x.png 3x" class="bw">
                    <img src="img/bw_7.png" srcset="img/bw_7@2x.png 2x, img/bw_7@3x.png 3x" class="bw">
                    <img src="img/bw_13.png" srcset="img/bw_13@2x.png 2x, img/bw_13@3x.png 3x" class="bw">
                    <img src="img/bw.png" srcset="img/bw@2x.png 2x, img/bw@3x.png 3x" class="bw">
                </div>
                <div class="col-12">
                    <img src="img/bw_13.png" srcset="img/bw_14.png" class="bw">
                    <img src="img/bw_4.png" srcset="img/bw_4@2x.png 2x, img/bw_4@3x.png 3x" class="bw">
                    <img src="img/bw_2.png" srcset="img/bw_2@2x.png 2x, img/bw_2@3x.png 3x" class="bw">
                    <img src="img/bw_13.png" srcset="img/bw_15.png" class="bw">
                </div>
                <div class="col-12">
                    <img src="img/bw_6.png" srcset="img/bw_6@2x.png 2x, img/bw_6@3x.png 3x" class="bw">
                    <img src="img/bw_6.png" srcset="img/bw_6@2x.png 2x, img/bw_6@3x.png 3x" class="bw">
                    <img src="img/bw_5.png" srcset="img/bw_5@2x.png 2x, img/bw_5@3x.png 3x" class="bw">
                    <img src="img/bw_3.png" srcset="img/bw_3@2x.png 2x, img/bw_3@3x.png 3x" class="bw">
                </div>
            </div>
            <div class="col-6 text-logos">
                <div class="text-left title-big">
                    <span>We collaborate worldwide</span>
                </div>
                <div class="text-left">
                    <p class="bold">We offer individually fitted business models, based on the nature of the project and customers’ needs.</p>
                    <p >We conduct both external and in-house projects. We support our customers by placing resident engineers at their sites or in one of our 6 offices (<span class="locations">5 locations in Poland, 1 in Germany</span>), ensuring smooth cooperation and flow of information, effective
                        communication and timely exchange of project data at all times.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid team">
        <div class="container">
            <div class="row d-none d-md-flex">
                <div class="col-6 image-col d-flex flex-column align-items-end">
                    <img src="img/join.jpeg" class="image-triangle"/>
                    <span>Forbes write about us. Read it <a href="#" target="_blank" class="orange-company">here</a></span>
                </div>
                <div class="col-6 d-flex flex-column justify-content-center text-left image-col2">
                    <p class="title-join">Want to be a part of our team?</p>
                    <p class="text-join">Maybe we are looking for someone like you! Check our open positions and get noticed!</p>
                    <button type="button" class="btn btn-login">Join us</button>
                </div>
            </div>
            <div class="row d-sm-block d-md-none">
                <div class="col-12 image-col-responsive2">
                    <p class="title-join">Want to be a part of our team?</p>
                    <img src="img/join.jpeg" class=""/>
                    <span>Forbes write about us. Read it <a href="#" target="_blank" class="orange-company">here</a></span>
                </div>
                <div class="col-12 image-col-responsive">
                    <p class="text-join">Maybe we are looking for someone like you! Check our open positions and get noticed!</p>
                    <button type="button" class="btn btn-login">Join us</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid map-fluid">

        <div id="map"></div>
        <div id="map-container" class="container">
            <div id="map-box" class="position-relative">
                <p class="company-name text-left d-flex align-baseline"><span class="hq">HQ</span>CADM Automotive Sp. z o.o.<p>
                <p class="address">Lindego 1c<br/>30-148 Kraków</p>
                <p class="phone">
                    <img src="img/phone.png"/>+48 12 397 21 82, fax +48 12 397 92<br/>
                    <img src="img/mail.png" class="mail">info@cadm-a.com</p>
            </div>
        </div>
    </div>
@endsection
