@foreach($offers as $offer)
    <div data-location="{{$offer-> location}}" class="col-md-3 col-8 why-content d-flex flex-column align-items-center justify-content-between col-hover">
        <div class="d-flex justify-content-between w-100 location-start">
            <span class="text-left">{{ $offer-> location_name??trans('pages.career.location.'.$offer-> location) }}</span>
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