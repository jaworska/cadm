@extends('auth.app')

@section('content')
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Dodaj nową ofertę
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('admin') }}" class="btn btn-primary">Wróć</a>
            </div>
        </div>
        <div class="kt-portlet__body">
            <form class="needs-validation" novalidate action="{{ route('offer.store') }}" method="post">
                @csrf
                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label class="col-lg-1 col-form-label">Tytuł:</label>
                    <div class="col-lg-3">
                        <input type="text" name="title" id="title" class="form-control" placeholder="Tytuł">
                        <div class="invalid-feedback" style="width: 100%;">
                            Tytuł jest wymagany
                        </div>
                    </div>
                    <label class="col-lg-1 col-form-label">Lokalizacja:</label>
                    <div class="col-lg-3">
                        <select name="location" class="custom-select d-block w-100" id="location" required>
                            <option value="">Wybierz</option>
                            <option value="1">Kraków HQ</option>
                            <option value="2">Pozostałe</option>
                        </select>
                        <div class="invalid-feedback">
                            Proszę wybrać lokalizację
                        </div>
                    </div>
                    <label class="col-lg-1 col-form-label">Data startu:</label>
                    <div class="col-lg-3">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-calendar"></i></span></div>
                            <input type="text" class="form-control" name="start_date" id="start_date" placeholder="" required>
                        </div>
                        <div class="invalid-feedback">
                            Proszę podać datę
                        </div>
                    </div>
                </div>
                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label  class="col-2 col-form-label" for="range">Zakres obowiązków:</label>
                    <div class="col-10">
                        <textarea name="range" class="form-control col" id="range" required></textarea>
                    </div>
                    <div class="invalid-feedback">
                        Zakres obowiązków jest wymagany
                    </div>
                </div>
                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label  class="col-2 col-form-label" for="requirements">Wymagania:</label>
                    <div class="col-10">
                        <textarea name="requirements" class="form-control col" id="requirements" required></textarea>
                    </div>
                    <div class="invalid-feedback">
                        Wymagania są wymagane
                    </div>
                </div>
                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label  class="col-2 col-form-label" for="offer">Oferta:</label>
                    <div class="col-10">
                        <textarea name="offer" class="form-control col" id="offer" required></textarea>
                    </div>
                    <div class="invalid-feedback">
                        Oferta jest wymagana
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row justify-content-end">
                    <button class="btn btn-primary" type="submit">Zapisz</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        (function () {
            'use strict'

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation')

                // Loop over them and prevent submission
                Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
            }, false)
        }())
        $('#requirements').summernote({
            placeholder: 'Wymagania',
            height:100
        });
        $('#offer').summernote({
            placeholder: 'Oferta',
            height:100
        });
        $('#range').summernote({
            placeholder: 'Zakres obowiązków',
            height:100
        });
    </script>
@endsection
