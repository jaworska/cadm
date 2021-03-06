@extends('layouts.default')

@section('content')
    <div class="jumbotron video_main services career team">
        <div id="slides" class="carousel slide position-relative w-100" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                {{--<li data-target="#myCarousel" data-slide-to="3"></li>--}}
            </ol>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/meet-slider.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/meet-slider-2.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/meet-slider-3.jpg" alt="">
                </div>
                {{--<div class="carousel-item">--}}
                    {{--<img src="/img/meet-slider4.jpg" alt="">--}}
                {{--</div>--}}
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slides" data-slide="prev">
                <img src="img/arrow-left.png">
            </a>
            <a class="carousel-control-next" href="#slides" data-slide="next">
                <img src="img/arrow-right.png">
            </a>
        </div>
        <div class="container-fluid video-text position-absolute">
            <div class="row">
                <div class="col-md-10 col-sm-12 offset-md-1 text-center d-flex justify-content-center">
                    <p class="position-relative mb-0">@lang('pages.career.meet')</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid team breadcrumbs">
        <div class="row">
            <div class="col-md-11 offset-md-1 col-12">
                <a class="position-relative" href="{{ route("career") }}">@lang('pages.career.careers')</a>
                <a class="position-relative" href="{{ route("application") }}">@lang('pages.career.meet-button')</a>
            </div>
        </div>
    </div>

    <div class="container-fluid why services career team d-md-flex d-none justify-content-center">
        <div class="row team-row">
            <div class="col-12 mb-4 d-flex justify-content-between padding-container">
               <div class="d-flex flex-column hover-team">
                   <div class="team-img"><img src="/img/team1.jpg"></div>
                   <div class="d-flex flex-column text-center bottom-team">
                       <span class="bold">Jan Kowalski</span>
                       <span class="text-p2">@lang('pages.career.job')</span>
                   </div>
               </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team2.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team1.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team2.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team1.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4 d-flex justify-content-between padding-container">
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team2.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team1.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team2.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team1.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team2.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4 d-flex justify-content-between padding-container">
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team1.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team2.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team1.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team2.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team2 justify-content-center align-items-center">
                    <div class="d-flex flex-column text-center justify-content-center align-items-center">
                        <span class="bold">{!! trans('pages.career.counting') !!}</span>
                        <span class="text-p2">@lang('pages.career.waiting')</span>
                        <button type="button" class="btn btn-view join-us">@lang('pages.career.join')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid why services career team d-block d-md-none">
        {{--<div class="row row-team position-relative">
            <div class="col-12 mb-4 d-flex justify-content-between">
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team1.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team active">
                    <div class="team-img"><img src="/img/team2.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/team1.jpg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
            </div>
        </div>--}}
        <div class="mobile-team-carousel">
            <div class="d-flex flex-column hover-team-mobile">
                <div class="team-img"><img src="/img/team1.jpg"></div>
                <div class="d-flex flex-column text-center bottom-team">
                    <span class="bold">Jan Kowalski</span>
                    <span class="text-p2">@lang('pages.career.job')</span>
                </div>
            </div>
            <div class="d-flex flex-column hover-team-mobile">
                <div class="team-img"><img src="/img/team2.jpg"></div>
                <div class="d-flex flex-column text-center bottom-team">
                    <span class="bold">Jan Kowalski</span>
                    <span class="text-p2">@lang('pages.career.job')</span>
                </div>
            </div>
            <div class="d-flex flex-column hover-team-mobile">
                <div class="team-img"><img src="/img/team1.jpg"></div>
                <div class="d-flex flex-column text-center bottom-team">
                    <span class="bold">Jan Kowalski</span>
                    <span class="text-p2">@lang('pages.career.job')</span>
                </div>
            </div>
            <div class="d-flex flex-column hover-team-mobile">
                <div class="team-img"><img src="/img/team2.jpg"></div>
                <div class="d-flex flex-column text-center bottom-team">
                    <span class="bold">Jan Kowalski</span>
                    <span class="text-p2">@lang('pages.career.job')</span>
                </div>
            </div>
            <div class="d-flex flex-column hover-team-mobile">
                <div class="team-img"><img src="/img/team1.jpg"></div>
                <div class="d-flex flex-column text-center bottom-team">
                    <span class="bold">Jan Kowalski</span>
                    <span class="text-p2">@lang('pages.career.job')</span>
                </div>
            </div>
            <div class="d-flex flex-column hover-team-mobile">
                <div class="team-img"><img src="/img/team2.jpg"></div>
                <div class="d-flex flex-column text-center bottom-team">
                    <span class="bold">Jan Kowalski</span>
                    <span class="text-p2">@lang('pages.career.job')</span>
                </div>
            </div>
            <div class="d-flex flex-column hover-team-mobile">
                <div class="team-img"><img src="/img/team1.jpg"></div>
                <div class="d-flex flex-column text-center bottom-team">
                    <span class="bold">Jan Kowalski</span>
                    <span class="text-p2">@lang('pages.career.job')</span>
                </div>
            </div>
            <div class="d-flex flex-column hover-team-mobile">
                <div class="team-img"><img src="/img/team2.jpg"></div>
                <div class="d-flex flex-column text-center bottom-team">
                    <span class="bold">Jan Kowalski</span>
                    <span class="text-p2">@lang('pages.career.job')</span>
                </div>
            </div>
            <div class="d-flex flex-column hover-team-mobile">
                <div class="team-img"><img src="/img/team1.jpg"></div>
                <div class="d-flex flex-column text-center bottom-team">
                    <span class="bold">Jan Kowalski</span>
                    <span class="text-p2">@lang('pages.career.job')</span>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="d-flex flex-column hover-team2 justify-content-center align-items-center">
                <div class="d-flex flex-column text-center justify-content-center align-items-center">
                    <span class="bold">{!! trans('pages.career.counting') !!}</span>
                    <span class="text-p2">@lang('pages.career.waiting')</span>
                    <button type="button" class="btn btn-view join-us">@lang('pages.career.join')</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid positions career d-flex justify-content-center">
        @include('career.list')
    </div>

    <div class="container-fluid help others sectors career position-relative">
        @include('career.apply')
    </div>

@endsection
