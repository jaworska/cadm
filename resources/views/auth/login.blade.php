@extends('auth.layout.login')
@section('content')
    <div class="kt-login__signin">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Sign In To Admin</h3>
        </div>
        <form class="kt-form" action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Email" name="email" value="{{old('email')}}"autocomplete="off">

            </div>
            @error('email')
            <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
            <div class="input-group">
                <input class="form-control" type="password" placeholder="Password" name="password">

            </div>
            @error('password')
            <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror

            <div class="row kt-login__extra">
                <div class="col">
                    <label class="kt-checkbox">
                        <input type="checkbox" name="remember"> Remember me
                        <span></span>
                    </label>
                </div>
                <div class="col kt-align-right">
                    <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
                </div>
            </div>
            <div class="kt-login__actions">
                <button type='submit' class="btn btn-brand btn-elevate kt-login__btn-primary">Sign In</button>
            </div>
        </form>
    </div>
    <div class="kt-login__forgot">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Forgotten Password ?</h3>
            <div class="kt-login__desc">Enter your email to reset your password:</div>
        </div>
        <form class="kt-form"  action="{{ route('password.email') }}" method="post">
            @csrf
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
            <div class="kt-login__actions">
                <button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                <button id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
@endsection