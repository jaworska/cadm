@extends('layouts.default')

@section('content')
    <div class="container-fluid career breadcrumbs">
        <div class="row">
            <div class="col-md-11 offset-md-1 col-12">
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
                        <h5>@lang('pages.career.location.text'):<strong> {{ $offer-> location_name??trans('pages.career.location.'.$offer-> location) }}</strong></h5>
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
                @error('success')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {!!  trans('pages.career.success') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                <form class="needs-validation bg-white d-flex flex-column" novalidate action="{{ route('cv.store') }}" method="post" enctype="multipart/form-data">
                    <span class="title-big-mini">@lang('pages.career.interested')</span>
                    @csrf
                    <input type="hidden" value="{{$offer -> id}}" name="offer_id">
                    <div class="mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="@lang('pages.career.name')" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @else
                        <div class="invalid-feedback" style="width: 100%;">
                            @lang('validation.career.name')
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" placeholder="@lang('pages.career.surname')" value="{{ old('surname') }}" required>
                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @else
                        <div class="invalid-feedback" style="width: 100%;">
                            @lang('validation.career.surname')
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="@lang('pages.career.phone')"  value="{{ old('phone') }}"required>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @else
                        <div class="invalid-feedback" style="width: 100%;">
                            @lang('validation.career.phone')
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="@lang('pages.career.email')" value="{{ old('email') }}" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @else
                        <div class="invalid-feedback" style="width: 100%;">
                            @lang('validation.career.email')
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="custom-file">
                            <input type="file" onchange='$(this).siblings().find(".bigger-upload").text($(this).val())'class="custom-file-input @error('file') is-invalid @enderror" id="cv_file" name="file">
                            <label class="custom-file-label " for="customFile"><div class="d-flex flex-column"><span class="bigger-upload @error('file') text-danger @enderror">@lang('pages.career.attach')</span><span class="small-upload @error('file') text-danger @enderror">@lang('pages.career.attach2')</span></div></label>
                            @error('file')
                            <span class="invalid-feedback mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @else
                            <div class="invalid-feedback mt-3" style="width: 100%;">
                                @lang('validation.career.file')
                            </div>
                            @enderror
                        </div>

                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox ">
                        <input type="checkbox" @if( old('term_1')) checked="checked" @endif class="custom-control-input @error('term_1') is-invalid @enderror" id="term_1" name="term_1" value="1" required>
                        <label class="custom-control-label form-check-label @error('term_1') text-danger @enderror" for="term_1"><span class="orange">*</span>{!! trans('pages.career.checkbox1') !!}</label>
                        @error('term_1')
                        <span class="invalid-feedback mt-0" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @else
                        <div class="invalid-feedback mt-0" style="width: 100%;">
                            @lang('validation.career.term_1')
                        </div>
                        @enderror
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" @if( old('term_2')) checked="checked" @endif class="custom-control-input @error('term_2') is-invalid @enderror" id="term_2" name="term_2" value="1" required>
                        <label class="custom-control-label @error('term_2') text-danger @enderror" for="term_2"><span class="orange">*</span>{!! trans('pages.career.checkbox2') !!}</label>
                        @error('term_2')
                        <span class="invalid-feedback mt-0" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @else
                        <div class="invalid-feedback mt-0" style="width: 100%;">
                            @lang('validation.career.term_2')
                        </div>
                        @enderror
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"  @if( old('term_3')) checked="checked" @endif id="term_3" name="term_3" value="1">
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
