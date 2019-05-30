@extends('layouts.default')

@section('content')
    <div class="jumbotron video_main services career team">
        <div id="slides" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/meet-slider.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/meet-slider2.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/meet-slider3.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/meet-slider4.jpg" alt="">
                </div>
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
                <div class="col-md-10 col-sm-12 offset-md-1 text-center">
                    <p class="position-relative">@lang('pages.career.meet')</p>
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

    <div class="container-fluid why services career team d-md-block d-none">
        <div class="row">
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
                        <button type="button" class="btn btn-view">@lang('pages.career.join')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid why services career mobile-team team d-block d-md-none">
        <div class="row row-team position-relative">
            <div class="col-12 mb-4 d-flex justify-content-between">
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/join.jpeg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team active">
                    <div class="team-img"><img src="/img/join.jpeg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
                <div class="d-flex flex-column hover-team">
                    <div class="team-img"><img src="/img/join.jpeg"></div>
                    <div class="d-flex flex-column text-center bottom-team">
                        <span class="bold">Jan Kowalski</span>
                        <span class="text-p2">@lang('pages.career.job')</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="d-flex flex-column hover-team2 justify-content-center align-items-center">
                <div class="d-flex flex-column text-center justify-content-center align-items-center">
                    <span class="bold">{!! trans('pages.career.counting') !!}</span>
                    <span class="text-p2">@lang('pages.career.waiting')</span>
                    <button type="button" class="btn btn-view">@lang('pages.career.join')</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid positions career d-flex justify-content-center">
        <div class="positions-container pl-0 pr-0">
            <div class="row why-row align-items-center justify-content-sm-between">
                <div class="col-12 text-center">
                    <span class="title-big">@lang('pages.career.positions')</span>
                </div>
                <div class="d-md-flex d-none col-md-6 offset-md-3 justify-content-between filters">
                    <div><span class="bold choose">@lang('pages.career.choose')</span></div>
                    <div data-location="all" class="d-flex align-items-center justify-content-around choose-button active"><span class="bold">@lang('pages.career.all')</span></div>
                    <div data-location="1" class="d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.cracow')</span></div>
                    <div data-location="2" class="d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.resident')</span></div>
                    <div data-location="other" class="d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.other')</span></div>
                </div>
                <div class="d-flex d-md-none col-8 offset-2 justify-content-between filters">
                    <div><span class="bold choose">@lang('pages.career.choose')</span></div>
                    <div class="dropdown">
                        <button class="btn btn-choose dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('pages.career.all')
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div data-location="all" class="dropdown-item d-flex align-items-center justify-content-around choose-button active"><span class="bold">@lang('pages.career.all')</span></div>
                            <div data-location="1" class="dropdown-item d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.cracow')</span></div>
                            <div data-location="2" class="dropdown-item d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.resident')</span></div>
                            <div data-location="other" class="dropdown-item d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.other')</span></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row why-row row-justify justify-content-center align-items-center">
                @foreach($offers as $offer)
                    <div data-location="{{$offer-> location}}" class="col-md-3 col-8 why-content d-flex flex-column align-items-center justify-content-between col-hover">
                        <div class="d-flex justify-content-between w-100 location-start">
                            <span class="text-left">{{ trans('pages.career.location.'.$offer-> location) }}</span>
                            <span class="text-right">@lang('pages.career.start') {{ $offer-> start_date }}</span>
                        </div>
                        <div class="text-center title-position">
                            <span>{{ $offer -> title }}</span>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary" href="{{ route('career.show', $offer) }}"> @lang('pages.career.show')</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-view">@lang('pages.career.view')</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid help others sectors career">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2 text-center">
                    <div class="title-big text-center">
                        <span class="">@lang('pages.career.notfound')</span>
                    </div>
                    <p class="text-center text-p2">@lang('pages.career.notfound-text')</p>
                    <button type="button" class="btn btn-more">@lang('pages.career.apply')</button>
                </div>
            </div>
        </div>
    </div>

@endsection
