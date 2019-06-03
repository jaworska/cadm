@extends('layouts.default')

@section('content')
    <div class="jumbotron video_main services career">
        <div class="container-fluid video-text position-absolute">
            <div class="row">
                <div class="col-md-10 col-sm-12 offset-md-1 text-center d-flex justify-content-center">
                    <p class="position-relative">@lang('pages.career.jumbotron')</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid why services career">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-12 padding-container">
                <div class="text-center why_span">
                    <span class="">@lang('pages.career.team')</span>
                </div>
                <div class="text-center why_span-bottom">
                    <p>@lang('pages.career.team-p')</p>
                </div>
            </div>
        </div>
        <div class="container margin-top">
            <div class="row services-row align-items-baseline justify-content-sm-between">
                <div class="col-md-4 col-11 pl-0 pr-0 d-flex justify-content-center click-meet">
                    <div class="text-center why-content d-flex align-items-center justify-content-center col-hover">
                        <span>@lang('pages.career.meet')</span>
                    </div>
                </div>
                <div class="col-md-4 col-11 pl-0 pr-0 d-flex justify-content-center click-application">
                    <div class="text-center why-content col-hover d-flex align-items-center justify-content-center">
                        <span>@lang('pages.career.application')</span>
                    </div>
                </div>
                <div class="col-md-4 col-11 pl-0 pr-0 d-flex justify-content-center click-positions">
                    <div class="text-center why-content col-hover d-flex align-items-center justify-content-center">
                        <span>@lang('pages.career.positions')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid friendly services career">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-12 padding-container">
                <div class="text-center why_span">
                    <span class="">@lang('pages.career.friendly')</span>
                </div>
                <div class="text-center why_span-bottom">
                    <p>@lang('pages.career.friendly-p')</p>
                </div>
            </div>
        </div>
        <div class="container list-friendly">
            <div class="row justify-content-center">
                <div class="col-md-4 col-12">
                    <span class="bold">@lang('pages.career.culture')</span>
                    <ul>
                        <span class="">@lang('pages.career.we')</span>
                        <li>@lang('pages.career.culture1')</li>
                        <li>@lang('pages.career.culture2')</li>
                        <li>@lang('pages.career.culture3')</li>
                        <li>@lang('pages.career.culture4')</li>
                        <li>@lang('pages.career.culture5')</li>
                        <li>@lang('pages.career.culture6')</li>
                        <li>@lang('pages.career.culture7')</li>
                    </ul>
                </div>
                <div class="col-md-3 col-12 pl-4">
                    <span class="bold">@lang('pages.career.financial')</span>
                    <ul>
                        <li>@lang('pages.career.financial1')</li>
                        <li>@lang('pages.career.financial2')</li>
                        <li>@lang('pages.career.financial3')</li>
                        <li>@lang('pages.career.financial4')</li>
                        <li>@lang('pages.career.financial5')</li>
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <span class="bold">@lang('pages.career.non-financial')</span>
                    <ul>
                        <li>@lang('pages.career.non-financial1')</li>
                        <li>@lang('pages.career.non-financial2')</li>
                        <li>@lang('pages.career.non-financial3')</li>
                        <li>@lang('pages.career.non-financial4')</li>
                        <li>@lang('pages.career.non-financial5')</li>
                        <li>@lang('pages.career.non-financial6')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid positions career d-flex justify-content-center">
        @include('career.list')
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
