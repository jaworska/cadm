@extends('layouts.default')

@section('content')
    <div class="container-fluid career breadcrumbs">
        <div class="row">
            <div class="col-md-11 offset-md-1 col-12"">
                <a class="back" href="{{ route('career') }}">@lang('pages.career.back')</a>
            </div>
        </div>
    </div>

    <div class="container-fluid career offer">
        <div class="row">
            <div class="col-md-6 col-12 offer-first">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-p2">@lang('pages.career.cadm-offer')</p>
                    </div>
                    <div class="col-md-12 padding-bottom">
                        <span class="title-big position-relative">{{ $offer -> title }}</span>
                    </div>
                    <div class="col-md-12 details">
                        <h5>@lang('pages.career.location.text'):<strong> @lang('pages.career.location.'.$offer -> location)</strong></h5>
                        <h5>@lang('pages.career.start'):<strong> {{$offer -> start_date}}</strong></h5>
                    </div>
                    <div class="col-md-12 block-offer">
                        <div class="d-flex justify-content-between">
                            <h3>@lang('pages.career.range')</h3>
                            <img src="/img/arrow-right.png" class="more-offer d-md-none d-sm-block" />
                        </div>
                        <div class="range close-offer open-offer">
                            {!! $offer -> range !!}
                        </div>
                    </div>
                    <div class="col-md-12 block-offer">
                        <div class="d-flex justify-content-between">
                            <h3>@lang('pages.career.requirements')</h3>
                            <img src="/img/arrow-right.png" class="more-offer d-md-none d-sm-block" />
                        </div>
                        <div class="requirements  close-offer open-offer">
                            {!! $offer -> requirements !!}
                        </div>
                    </div>
                    <div class="col-md-12 block-offer">
                        <div class="d-flex justify-content-between">
                            <h3>@lang('pages.career.offer')</h3>
                            <img src="/img/arrow-right.png" class="more-offer d-md-none d-sm-block" />
                        </div>
                        <div class="offer  close-offer open-offer">
                            {!! $offer -> offer !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 form-col">
                <form class="needs-validation bg-white d-flex flex-column" novalidate action="{{ route('cv.store') }}" method="post" enctype="multipart/form-data">
                    <span class="title-big-mini">@lang('pages.career.interested')</span>
                    @csrf
                    <input type="hidden" value="{{$offer -> id}}" name="offer_id">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="@lang('pages.career.name')" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            @lang('validation.career.name')
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="@lang('pages.career.phone')" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            @lang('validation.career.phone')
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="@lang('pages.career.email')" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            @lang('validation.career.email')
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="cv_file" name="file">
                            <label class="custom-file-label" for="customFile"><div class="d-flex flex-column"><span class="bigger-upload">@lang('pages.career.attach')</span><span class="small-upload">@lang('pages.career.attach2')</span></div></label>
                        </div>
                        <div class="invalid-feedback" style="width: 100%;">
                            @lang('validation.career.file')
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="term_1" name="term_1" value="1" required>
                        <label class="custom-control-label" for="term_1">{!! trans('pages.career.checkbox1') !!}</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="term_2" name="term_2" value="1" required>
                        <label class="custom-control-label" for="term_2">{!! trans('pages.career.checkbox2') !!}</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="term_3" name="term_3" value="1" required>
                        <label class="custom-control-label" for="term_3">{!! trans('pages.career.checkbox3') !!}</label>
                    </div>
                    <hr class="mb-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary btn-lg" type="submit">@lang('pages.career.apply')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
