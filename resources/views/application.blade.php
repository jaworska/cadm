@extends('layouts.default')

@section('content')
    <div class="jumbotron video_main services career application">
        <div class="container-fluid video-text position-absolute">
            <div class="row">
                <div class="col-md-10 col-sm-12 offset-md-1 text-center d-flex justify-content-center">
                    <p class="position-relative">@lang('pages.career.jumbotron-application')</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid career breadcrumbs applications">
        <div class="row">
            <div class="col-md-11 offset-md-1 col-12">
                <a class="position-relative" href="{{ route("career") }}">@lang('pages.career.careers')</a>
                <a class="position-relative" href="{{ route("application") }}">@lang('pages.career.jumbotron-application')</a>
            </div>
        </div>
    </div>
    <div class="container-fluid why services career application d-none d-md-block">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-12 padding-container">
                <div class="text-center why_span">
                    <span class="">@lang('pages.career.how-join')</span>
                </div>
            </div>
        </div>
        <div class="container margin-top">
            <div class="row services-row timeline position-relative align-items-baseline justify-content-sm-between">
                <div class="col-12 d-flex timeline-inactive">
                    <div class="col-md-6 col-11 d-flex flex-column justify-content-end align-items-end col-left">
                        <div class="timeline-element timeline-left text-center why-content apply d-flex align-items-center justify-content-center position-relative timeline2 col-hover3">
                            <span>@lang('pages.career.apply-for')</span>
                        </div>
                        <div class="timeline-element timeline-left text-right why-content f2 d-flex flex-column align-items-end justify-content-center position-relative timeline4 col-hover3">
                            <span class="text-uppercase">@lang('pages.career.f2')</span>
                            <p class="text-p2">@lang('pages.career.f2-text')</p>
                            <p class="text-p2 bold interview-click">@lang('pages.career.f2-text2')</p>
                        </div>
                        <div class="timeline-element timeline-left text-center why-content technical d-flex flex-column align-items-center justify-content-center position-relative timeline6 col-hover3">
                            <span>@lang('pages.career.technical')</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-11 d-flex flex-column justify-content-start col-right">
                        <div class="timeline-element timeline-right text-left why-content mt-0 position-relative find d-flex flex-column align-items-start justify-content-center timeline1 col-hover3">
                            <span>@lang('pages.career.find')</span>
                            <a class="btn btn-see see-positions">@lang('pages.career.see-button')</a>
                        </div>
                        <div class="timeline-element timeline-right text-left why-content position-relative initial d-flex flex-column align-items-start justify-content-center timeline3 col-hover3">
                            <span class="">@lang('pages.career.initial')</span>
                            <p class="text-p2">@lang('pages.career.initial-text')</p>
                            <p class="text-p2 bold friendly-recruitment-click">@lang('pages.career.initial-text2')</p>
                        </div>
                        <div class="timeline-element timeline-right text-left why-content position-relative receive d-flex flex-column align-items-start justify-content-center timeline5 col-hover3">
                            <span>@lang('pages.career.receive')</span>
                            <p class="text-p2">@lang('pages.career.receive-text')</p>
                        </div>
                    </div>
                </div> 
                <div class="col-12 position-absolute overflow-hidden timeline active">
                    <div class="col-12 d-flex">
                        <div class="col-md-6 col-11 d-flex flex-column justify-content-end align-items-end col-left">
                            <div class="bg-transparent text-center why-content apply d-flex align-items-center justify-content-center col-hover2">

                            </div>
                            <div class="bg-transparent text-right why-content f2 d-flex flex-column align-items-end justify-content-center col-hover2">

                            </div>
                            <div class="bg-transparent text-center why-content technical d-flex flex-column align-items-center justify-content-center col-hover2">
                            </div>
                        </div>

                        <div class="col-md-6 col-11 d-flex flex-column justify-content-start col-right">
                            <div id="timeline-start" class="bg-transparent text-left why-content mt-0 col-hover2 find d-flex flex-column align-items-start justify-content-center">
                                <span>@lang('pages.career.find')</span>
                                <a class="btn btn-see see-positions">@lang('pages.career.see-button')</a>
                            </div>
                            <div class="bg-transparent text-left why-content col-hover2 initial d-flex flex-column align-items-start justify-content-center">

                            </div>
                            <div class="bg-transparent text-left why-content col-hover2 receive d-flex flex-column align-items-start justify-content-center">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <div class="welcome position-relative timeline-element">
                        <div class="text-center welcome-cadm d-flex flex-column align-items-center justify-content-center ">
                            <p class="bold">@lang('pages.career.welcome')</p>
                            <p class="text-p2">@lang('pages.career.welcome-text')</p>
                            <p></p>
                            <a href="{{ route("team") }}" class="btn btn-more">@lang('pages.career.meet-button')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid why services career application d-md-none d-block">
        <div class="row">
            <div class="col-12 padding-container">
                <div class="text-center why_span">
                    <span class="">@lang('pages.career.how-join')</span>
                </div>
            </div>
        </div>
        <div id="timeline-start-mobile" class="container margin-top">
            <div class="row after-border services-row align-items-baseline justify-content-sm-between position-relative">
                <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                    <div class="timeline-element text-center why-content mt-0 col-hover2 find d-flex flex-column align-items-center justify-content-center">
                        <span>@lang('pages.career.find')</span>
                        <a class="btn btn-see see-positions">@lang('pages.career.see-button')</a>
                    </div>
                </div>

                <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                    <div class="timeline-element text-center why-content mt-0 col-hover2 apply d-flex flex-column align-items-center justify-content-center">
                        <span>@lang('pages.career.apply-for')</span>
                    </div>
                </div>

                <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                    <div class="timeline-element text-left why-content col-hover2 initial d-flex flex-column align-items-center justify-content-center">
                        <span class="">@lang('pages.career.initial')</span>
                        <p class="text-p2">@lang('pages.career.initial-text')</p>
                        <p class="text-p2 bold">@lang('pages.career.initial-text2')</p>
                    </div>
                </div>

                <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                    <div class="timeline-element text-left why-content col-hover2 f2f d-flex flex-column align-items-center justify-content-center ">
                        <span class="text-uppercase">@lang('pages.career.f2')</span>
                        <p class="text-p2">@lang('pages.career.f2-text')</p>
                        <p class="text-p2 bold">@lang('pages.career.f2-text2')</p>
                    </div>
                </div>

                <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                    <div class="timeline-element text-left why-content col-hover2 receive d-flex flex-column align-items-center justify-content-center ">
                        <span>@lang('pages.career.receive')</span>
                        <p class="text-p2">@lang('pages.career.receive-text')</p>
                    </div>
                </div>

                <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                    <div class="timeline-element text-left why-content col-hover2 technical d-flex flex-column align-items-center justify-content-center ">
                        <span>@lang('pages.career.technical')</span>
                    </div>
                </div>

                <div class="col-12 position-absolute overflow-hidden active-mobile pr-0 pl-0">
                    <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                        <div class="bg-transparent text-center why-content mt-0 col-hover2 find d-flex flex-column align-items-center justify-content-center">
                            <span>@lang('pages.career.find')</span>
                            <a class="btn btn-see see-positions">@lang('pages.career.see-button')</a>
                        </div>
                    </div>

                    <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                        <div class="bg-transparent text-center why-content mt-0 col-hover2 apply d-flex flex-column align-items-center justify-content-center">
                            <span>@lang('pages.career.apply-for')</span>
                        </div>
                    </div>

                    <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                        <div class="bg-transparent text-left why-content col-hover2 initial d-flex flex-column align-items-center justify-content-center">
                            <span class="">@lang('pages.career.initial')</span>
                            <p class="text-p2">@lang('pages.career.initial-text')</p>
                            <p class="text-p2 bold">@lang('pages.career.initial-text2')</p>
                        </div>
                    </div>

                    <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                        <div class="bg-transparent text-left why-content col-hover2 f2f d-flex flex-column align-items-center justify-content-center ">
                            <span class="text-uppercase">@lang('pages.career.f2')</span>
                            <p class="text-p2">@lang('pages.career.f2-text')</p>
                            <p class="text-p2 bold">@lang('pages.career.f2-text2')</p>
                        </div>
                    </div>

                    <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                        <div class="bg-transparent text-left why-content col-hover2 receive d-flex flex-column align-items-center justify-content-center ">
                            <span>@lang('pages.career.receive')</span>
                            <p class="text-p2">@lang('pages.career.receive-text')</p>
                        </div>
                    </div>

                    <div class="col-12 align-items-center justify-content-center d-flex flex-column">
                        <div class="bg-transparent text-left why-content col-hover2 technical d-flex flex-column align-items-center justify-content-center ">
                            <span>@lang('pages.career.technical')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center welcome-timeline">
                <div class="welcome w-100 position-relative timeline-element">
                    <div class="text-center welcome-cadm d-flex flex-column align-items-center justify-content-center">
                        <p class="bold">@lang('pages.career.welcome')</p>
                        <p class="text-p2">@lang('pages.career.welcome-text')</p>
                        <p></p>
                        <a href="{{ route("team") }}" class="btn btn-more">@lang('pages.career.meet-button')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid sectors career overflow-hidden application-block img-text overflow-hidden">
        <div class="row">
            <div class="col-md-5 col-12 order-sm-1 order-md-1 pr-0 pl-0 practical-img">
            </div>
            <div class="col-md-7 col-12 order-sm-2 order-md-2 d-flex flex-column align-self-center col-text">
                <div class="text-md-left text-sm-center title-big">
                    <span>@lang('pages.career.practical')</span>
                </div>
                <div class="text-md-left text-sm-center title-2">
                    <p>@lang('pages.career.practical2')</p>
                </div>
                <div class="d-flex column-list">
                    <div class="col-md-6 col-12 pl-0">
                    <ul>
                        <li>@lang('pages.career.cv1')</li>
                        <li>@lang('pages.career.cv2')</li>
                        <li>@lang('pages.career.cv3')</li>
                        <li>@lang('pages.career.cv4')</li>
                    </ul>
                    </div>
                    <div class="col-md-6 col-12">
                        <ul>
                            <li>@lang('pages.career.cv5')</li>
                            <li>@lang('pages.career.cv6')</li>
                            <li>@lang('pages.career.cv7')</li>
                            <li>@lang('pages.career.cv8')</li>
                        </ul>
                    </div>
                </div>
                <p class="more-text">{!! trans('pages.career.cv9') !!}</p>
            </div>
        </div>
    </div>

    <div id="interview-block" class="container-fluid sectors career overflow-hidden application-block text-img">
        <div class="row">
            <div class="col-md-6 col-12 order-sm-2 order-md-1 d-flex flex-column align-self-center col-text">
                <div class="text-md-left text-sm-center title-2">
                    <p>@lang('pages.career.prepare')</p>
                </div>
                <div class="d-flex">
                    <div class="col-md-10 col-12 pl-0">
                        <ul>
                            <li>@lang('pages.career.prepare1')</li>
                            <li>@lang('pages.career.prepare2')</li>
                            <li>@lang('pages.career.prepare3')</li>
                            <li>@lang('pages.career.prepare4')</li>
                            <li>@lang('pages.career.prepare5')</li>
                        </ul>
                    </div>
                </div>
                <p class="more-text">{!! trans('pages.career.prepare6') !!}</p>
            </div>
            <div class="col-md-6 col-12 order-sm-1 order-md-2 pr-0 prepare-img">
                {{--<img src="img/join.jpeg" class=""/>--}}
            </div>
        </div>
    </div>

    <div id="friendly-recruitment-block" class="container-fluid sectors career overflow-hidden application-block img-text">
        <div class="row">
            <div class="col-md-5 col-12 order-sm-1 order-md-1 pr-0 pl-0 trying-img">
            </div>
            <div class="col-md-7 col-12 order-sm-2 order-md-2 d-flex flex-column align-self-center col-text">
                <div class="text-md-left text-sm-center title-2">
                    <p>@lang('pages.career.trying')</p>
                </div>
                <div class="d-flex">
                    <div class="col-10 pl-0">
                        <ul>
                            <li>@lang('pages.career.trying1')</li>
                            <li>@lang('pages.career.trying2')</li>
                            <li>@lang('pages.career.trying3')</li>
                            <li>@lang('pages.career.trying4')</li>
                            <li>@lang('pages.career.trying5')</li>
                            <li>@lang('pages.career.trying6')</li>
                            <li>@lang('pages.career.trying7')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="open-positions" class="container-fluid positions career d-flex justify-content-center">
        @include('career.list')
    </div>

    <div class="container-fluid help others sectors career position-relative">
        @include('career.apply')
    </div>

@endsection
