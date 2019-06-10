<div class="container">
    <div class="row">
        <div class="col-md-8 col-12 offset-md-2 text-center">
            <div class="title-big text-center">
                <span class="">@lang('pages.career.notfound')</span>
            </div>
            <p class="text-center text-p2">@lang('pages.career.notfound-text')</p>
            <button type="button" class="btn btn-more" data-toggle="modal" data-target="#apply">@lang('pages.career.apply')</button>
        </div>
    </div>
</div>
<div class="modal fade" id="apply" tabindex="-1" role="dialog" aria-labelledby="apply" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0">
            <div class="modal-header border-0 d-flex flex-column align-items-center justify-content-center">
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
                <span class="modal-title title-big-mini">@lang('pages.career.spontaneous')</span>
                <span class="modal-title-mini">@lang('pages.career.spontaneous-span')</span>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-12 form-col">
                            <div class="alert alert-success alert-dismissible fade" id="cv_send_success" role="alert">
                                {!!  trans('pages.career.success') !!}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form class="needs-validation bg-white d-flex flex-column" id="cv_send" novalidate action="{{ route('cv.send') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="@lang('pages.career.name')" value="{{ old('name') }}" required>
                                        <span class="invalid-feedback mt-3" role="alert">
                                                <strong></strong>
                                            </span>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <input type="text" class="form-control" id="surname" name="surname" placeholder="@lang('pages.career.surname')" value="{{ old('surname') }}" required>
                                        <span class="invalid-feedback mt-3" role="alert">
                                                <strong></strong>
                                            </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="@lang('pages.career.email')" value="{{ old('email') }}" required>
                                        <span class="invalid-feedback mt-3" role="alert">
                                                <strong></strong>
                                            </span>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="@lang('pages.career.phone')"  value="{{ old('phone') }}" required>
                                        <span class="invalid-feedback mt-3" role="alert">
                                                <strong></strong>
                                            </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <input type="text" class="form-control" id="type" name="type" placeholder="@lang('pages.career.type')" value="{{ old('type') }}" required>
                                        <span class="invalid-feedback mt-3" role="alert">
                                                <strong></strong>
                                            </span>
                                    </div>
                                    <div class="col-md-6 col-12 mb-4">
                                        <input type="text" class="form-control" id="location" name="location" placeholder="@lang('pages.career.location.text')"  value="{{ old('location') }}" required>
                                        <span class="invalid-feedback mt-3" role="alert">
                                                <strong></strong>
                                            </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 offset-md-3 col-12 mb-3">
                                        <div class="custom-file">
                                            <input type="file" onchange='$(this).siblings().find(".bigger-upload").text($(this).val())'class="custom-file-input @error('file') is-invalid @enderror" id="cv_file" name="file">
                                            <label class="custom-file-label " for="customFile"><div class="d-flex flex-column"><span class="bigger-upload @error('file') text-danger @enderror">@lang('pages.career.attach')</span><span class="small-upload @error('file') text-danger @enderror">@lang('pages.career.attach2')</span></div></label>
                                            <span class="invalid-feedback mt-3" role="alert">
                                                <strong></strong>
                                            </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-10 offset-md-1">
                                        <hr class="mb-4 border-0">
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" @if( old('term_1')) checked="checked" @endif class="custom-control-input @error('term_1') is-invalid @enderror" id="term_1" name="term_1" value="1" required>
                                            <label class="custom-control-label form-check-label @error('term_1') text-danger @enderror" for="term_1">{!! trans('pages.career.checkbox1') !!}</label>
                                            <span class="invalid-feedback mt-0" style="width: 100%;">

                                            </span>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input @error('term_2') is-invalid @enderror"  @if( old('term_2')) checked="checked" @endif id="term_2" name="term_2" value="1">
                                            <label class="custom-control-label @error('term_1') text-danger @enderror " for="term_2">{!! trans('pages.career.checkbox3') !!}</label>
                                            <span class="invalid-feedback mt-0" style="width: 100%;">

                                            </span>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <span class="bold">@lang('pages.career.apply-span')</span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4 border-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary btn-lg" id='submit_btn' type="submit">@lang('pages.career.apply')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
