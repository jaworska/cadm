@extends('layouts.default')

@section('content')
    <div class="jumbotron video_main services">
        <video id="video-background" preload muted autoplay loop>
            <source src="img/movie.webm" type="video/webm">
        </video>
        <div class="container-fluid video-text position-absolute">
            <div class="row">
                <div class="col-md-10 col-sm-12 offset-md-1 text-center">
                    <p class="position-relative">@lang('pages.services.jumbotron')</p>
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
                <span>{{ $offer -> title }}</span>
                <a class="btn btn-primary" href="{{ route('career.show', $offer) }}"> @lang('career.show')</a>
            </div>
        </div>
        @endforeach
    </div>

@endsection
