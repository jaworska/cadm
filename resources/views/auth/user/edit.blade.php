@extends('auth.app')

@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Edytuj użytkownika
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('user.index') }}" class="btn btn-primary">Wróć</a>
            </div>
        </div>
        <div class="kt-portlet__body">
            <form class="needs-validation" id="edit" novalidate action="{{ route('user.update',$user) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label class="col-lg-1 col-form-label">Nazwa użytkownika:</label>
                    <div class="col-lg-5">
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required placeholder="Imię" value="{{$user -> name}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @else
                            <div class="invalid-feedback" style="width: 100%;">
                                Nazwa użytkownika jest wymagana
                            </div>
                            @enderror
                    </div>
                    <label class="col-lg-1 col-form-label">Email:</label>
                    <div class="col-lg-5">
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required placeholder="Email" value="{{$user -> email}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @else
                            <div class="invalid-feedback" style="width: 100%;">
                                Email jest wymagany
                            </div>
                        @enderror
                    </div>
                </div>
                <hr class="mb-4">
                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label class="col-lg-1 col-form-label">Hasło:</label>
                    <div class="col-lg-5">
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Hasło" >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @else
                            <div class="invalid-feedback" style="width: 100%;">
                                Hasło jest wymagane
                            </div>
                            @enderror
                    </div>
                    <label class="col-lg-1 col-form-label">Potwierdź hasło:</label>
                    <div class="col-lg-5">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Potwierdź hasło">
                        <div class="invalid-feedback" style="width: 100%;">
                            Potwierdzenie jest wymagane
                        </div>
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
        }());
    </script>
@endsection
