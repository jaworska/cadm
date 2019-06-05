@extends('layouts.default')

@section('content')

    <div class="container-fluid sectors img-text automotive-container">
        <div id="automotive" class="sectors-scroll-fix"></div>
        <div class="row">
            <div class="col-md-5 col-12 order-sm-1 order-md-1 pr-0 pl-0 automotive-img">
            </div>
            <div class="col-md-6 offset-md-1 col-12 order-sm-2 order-md-2 pl-0 d-flex flex-column align-self-center col-text">
                <div class="text-md-left text-sm-center title-big">
                    <span>@lang('pages.sectors.automotive')</span>
                </div>
                <div class="text-md-left text-sm-center">
                    <p class="bold">@lang('pages.sectors.automotive-bold')</p>
                    <p class="text-p2 d-none d-md-block">@lang('pages.sectors.automotive-text')</p>
                    <p></p>
                    {{--<button type="button" class="btn btn-more">@lang('pages.sectors.more')</button>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid sectors text-img">
        <div id="rolling-stock" class="sectors-scroll-fix"></div>
        <div class="row">
            <div class="col-md-5 col-12 order-sm-2 order-md-1 d-flex flex-column align-self-center col-text">
                <div class="text-md-left title-big text-sm-center ">
                    <span>@lang('pages.sectors.rolling')</span>
                </div>
                <div class="text-md-left text-sm-center ">
                    <p class="bold">@lang('pages.sectors.rolling-bold')</p>
                    <p class="text-p2 d-none d-md-block">@lang('pages.sectors.rolling-text')</p>
                    <p></p>
                    {{--<button type="button" class="btn btn-more">@lang('pages.sectors.more')</button>--}}
                </div>
            </div>
            <div class="col-md-6 offset-md-1 col-12 order-sm-1 order-md-2 pr-0 rolling-img">
                {{--<img src="img/join.jpeg" class=""/>--}}
            </div>
        </div>
    </div>

    <div class="container-fluid sectors img-text">
        <div id="maritime" class="sectors-scroll-fix"></div>
        <div class="row">
            <div class="col-md-5 col-12 order-sm-1 order-md-1 pr-0 pl-0 maritime-img">
            </div>
            <div class="col-md-6 offset-md-1 col-12 order-sm-2 order-md-2 pl-0 d-flex flex-column align-self-center col-text">
                <div class="text-md-left title-big text-sm-center ">
                    <span>@lang('pages.sectors.maritime')</span>
                </div>
                <div class="text-md-left text-sm-center ">
                    <p class="bold">@lang('pages.sectors.maritime-bold')</p>
                    <p class="text-p2 d-none d-md-block">@lang('pages.sectors.maritime-text')</p>
                    <p></p>
                    {{--<button type="button" class="btn btn-more">@lang('pages.sectors.more')</button>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid sectors text-img">
        <div id="aerospace" class="sectors-scroll-fix"></div>
        <div class="row">
            <div class="col-md-5 col-12 order-sm-2 order-md-1 d-flex flex-column align-self-center col-text">
                <div class="text-md-left title-big text-sm-center ">
                    <span>@lang('pages.sectors.aerospace')</span>
                </div>
                <div class="text-md-left text-sm-center ">
                    <p class="bold">@lang('pages.sectors.aerospace-bold')</p>
                    <p class="text-p2 d-none d-md-block">@lang('pages.sectors.aerospace-text')</p>
                    <p></p>
                    {{--<button type="button" class="btn btn-more">@lang('pages.sectors.more')</button>--}}
                </div>
            </div>
            <div class="col-md-6 offset-md-1 col-12 order-sm-1 order-md-2 pr-0 aerospace-img">
            </div>
        </div>
    </div>

    <div class="container-fluid help others sectors">
        <div id="others" class="sectors-scroll-fix"></div>
        <div class="container padding-others">
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2 text-center">
                    <div class="title-big text-center">
                        <span class="">@lang('pages.sectors.others')</span>
                    </div>
                    <p class="text-center bold">@lang('pages.sectors.others-bold')</p>
                    <p class="text-center text-p2  d-none d-md-block">@lang('pages.sectors.others-text')</p>
                    <a href="{{ route("contact") }}" class="btn btn-more">@lang('pages.sectors.contact')</a>
                </div>
            </div>
        </div>
    </div>



@endsection
