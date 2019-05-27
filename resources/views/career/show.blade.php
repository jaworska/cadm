@extends('layouts.default')

@section('content')
    <div class="row mx-auto">
        <div class="col-12">
            <a href="{{ route('career') }}">@lang('career.back')</a>
        </div>

    </div>
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $offer -> title }}</h2>
                </div>
                <div class="col-md-12">
                    <h5>@lang('career.location.text'):<strong> @lang('career.location.'.$offer -> location)</strong></h5>
                    <h5>@lang('career.start_date'):<strong> {{$offer -> start_date}}</strong></h5>
                </div>
                <div class="col-md-12">
                    <h3>@lang('career.range')</h3>
                    <div class="range">
                        {!! $offer -> range !!}
                    </div>
                </div>
                <div class="col-md-12">
                    <h3>@lang('career.requirements')</h3>
                    <div class="requirements">
                        {!! $offer -> requirements !!}
                    </div>
                </div>
                <div class="col-md-12">
                    <h3>@lang('career.offer')</h3>
                    <div class="offer">
                        {!! $offer -> offer !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <form class="needs-validation bg-white" novalidate action="{{ route('cv.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$offer -> id}}" name="offer_id">
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="@lang('career.name')" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        @lang('validation.career.name')
                    </div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="@lang('career.phone')" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        @lang('validation.career.phone')
                    </div>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="@lang('career.email')" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        @lang('validation.career.email')
                    </div>
                </div>

                <div class="mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="cv_file" name="file">
                        <label class="custom-file-label" for="customFile">@lang('career.choose')</label>
                    </div>
                    <div class="invalid-feedback" style="width: 100%;">
                        @lang('validation.career.file')
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="term_1" name="term_1" value="1" required>
                    <label class="custom-control-label" for="term_1">Check this custom checkbox</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="term_2" name="term_2" value="1" required>
                    <label class="custom-control-label" for="term_2">Check this custom checkbox</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="term_3" name="term_3" value="1" required>
                    <label class="custom-control-label" for="term_3">Check this custom checkbox</label>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg" type="submit">@lang('career.submit')</button>
            </form>
        </div>
    </div>

@endsection