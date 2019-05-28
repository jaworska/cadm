@extends('layouts.default')

@section('content')
    <div class="jumbotron video_main services career">
        <video id="video-background" preload muted autoplay loop>
            <source src="img/movie.webm" type="video/webm">
        </video>
        <div class="container-fluid video-text position-absolute">
            <div class="row">
                <div class="col-md-10 col-sm-12 offset-md-1 text-center">
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
                <div class="col-md-4 col-11 pl-0 pr-0 d-flex justify-content-center">
                    <div class="text-center why-content d-flex align-items-center justify-content-center col-hover">
                        <span>@lang('pages.career.meet')</span>
                    </div>
                </div>
                <div class="col-md-4 col-11 pl-0 pr-0 d-flex justify-content-center">
                    <div class="text-center why-content col-hover d-flex align-items-center justify-content-center">
                        <span>@lang('pages.career.application')</span>
                    </div>
                </div>
                <div class="col-md-4 col-11 pl-0 pr-0 d-flex justify-content-center">
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
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">

                </div>
                <div class="col-md-4 col-12">

                </div>
                <div class="col-md-4 col-12">

                </div>
            </div>
        </div>
    </div>

    <div class="row why-row align-items-center justify-content-sm-between">
        <div class="col-12 text-center padding-title-mini">
            <span class="text-uppercase title-big-mini">Our services</span>
        </div>
        @foreach($offers as $offer)
        <div class="col-md-2 col-8 why-content d-flex align-items-center justify-content-center col-hover">
            <div class="text-center">
                <span>{{ $offer -> title }}
                {{ $offer-> start_date }}
                    {{ $offer-> location }}</span>
                <a class="btn btn-primary" href="{{ route('career.show', $offer) }}"> @lang('career.show')</a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="container-fluid help others sectors career">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2 text-center">
                    <div class="title-big text-center">
                        <span class="">@lang('pages.career.notfound')</span>
                    </div>
                    <p class="text-center text-p2  d-none d-md-block">@lang('pages.career.notfound-text')</p>
                    <button type="button" class="btn btn-more">@lang('pages.career.apply')</button>
                </div>
            </div>
        </div>
    </div>

@endsection
