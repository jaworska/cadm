<div class="positions-container pl-0 pr-0">
    <div class="row why-row align-items-center justify-content-sm-between">
        <div class="col-12 text-center">
            <span class="title-big">@lang('pages.career.positions')</span>
        </div>
        <div class="d-md-flex d-none col-md-6 offset-md-3 justify-content-between filters">
            <div><span class="bold choose">@lang('pages.career.choose')</span></div>
            <div data-location="all" class="d-flex align-items-center justify-content-around choose-button active"><span class="bold">@lang('pages.career.all')</span></div>
            <div data-location="1" class="d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.cracow')</span></div>
            <div data-location="2" class="d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.resident')</span></div>
            <div data-location="3" class="d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.other')</span></div>
        </div>
        <div class="d-flex d-md-none col-8 offset-2 justify-content-between filters">
            <div><span class="bold choose">@lang('pages.career.choose')</span></div>
            <div class="dropdown">
                <button class="btn btn-choose dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('pages.career.all')
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div data-location="all" class="dropdown-item d-flex align-items-center justify-content-around choose-button active"><span class="bold">@lang('pages.career.all')</span></div>
                    <div data-location="1" class="dropdown-item d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.cracow')</span></div>
                    <div data-location="2" class="dropdown-item d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.resident')</span></div>
                    <div data-location="3" class="dropdown-item d-flex align-items-center justify-content-center choose-button"><span class="bold">@lang('pages.career.other')</span></div>
                </div>
            </div>
        </div>

    </div>
    <div class="row why-row row-justify justify-content-center align-items-center" id="offers_list">
        @include('career.list_items')
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button type="button" class="btn btn-view" id="more-offers">@lang('pages.career.view')</button>
        </div>
    </div>
</div>
