@extends('layouts.default')

@section('content')

    <div class="container-fluid sectors img-text">
        <div class="row">
            <div class="col-md-6 col-12 order-sm-2 order-md-1">
                <img src="img/join.jpeg" class=""/>
            </div>
            <div class="col-md-6 col-12 order-sm-1 order-md-2">
                <div class="text-left title-big">
                    <span>@lang('pages.sectors.automotive')</span>
                </div>
                <div class="text-left">
                    <p class="bold">@lang('pages.group.ethics-text')</p>
                    <p class="text-p2">@lang('pages.group.ethics-text')</p>
                    <p></p>
                    <button type="button" class="btn btn-more">@lang('pages.sectors.more')</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid help others sectors">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2 text-center">
                    <div class="title-big text-center">
                        <span class="">@lang('pages.sectors.others')</span>
                    </div>
                    <p class="text-center bold">@lang('pages.group.open')</p>
                    <p class="text-center">@lang('pages.group.open')</p>
                    <button type="button" class="btn btn-more">@lang('pages.sectors.contact')</button>
                </div>
            </div>
        </div>
    </div>



@endsection
