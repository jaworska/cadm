@extends('auth.app')

@section('content')
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="col-md-12">
            <h4 class="mb-3">Dodaj nową ofertę</h4>
            <form class="needs-validation" novalidate action="{{ route('offer.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username">Tytuł</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Tytuł" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Tytuł jest wymagany
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description">Opis</label>
                    <textarea name="description" class="form-control" id="description" required></textarea>
                    <div class="invalid-feedback">
                        Opis jest wymagany
                    </div>
                </div>

                <div class="mb-3">
                    <label for="location">Lokalizacja</label>
                    <select name="location" class="custom-select d-block w-100" id="location" required>
                        <option value="">Wybierz</option>
                        <option value="1">Kraków HQ</option>
                        <option value="2">Praca zdalna</option>
                    </select>
                    <div class="invalid-feedback">
                        Proszę wybrać lokalizację
                    </div>
                 </div>
                <div class="mb-3">
                    <label for="range">Zakres obowiązków</label>
                    <textarea name="range" class="form-control" id="range" required></textarea>
                    <div class="invalid-feedback">
                        Zakres obowiązków jest wymagany
                    </div>
                </div>
                <div class="mb-3">
                    <label for="requirements">Wymagania</label>
                    <textarea name="requirements" class="form-control" id="requirements" required></textarea>
                    <div class="invalid-feedback">
                        Wymagania są wymagane
                    </div>
                </div>
                <div class="mb-3">
                    <label for="offer">Oferta</label>
                    <textarea name="offer" class="form-control" id="offer" required></textarea>
                    <div class="invalid-feedback">
                        Oferta jest wymagana
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Zapisz</button>
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
    </script>
@endsection
