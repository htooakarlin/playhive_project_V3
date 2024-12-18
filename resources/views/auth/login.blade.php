@extends('layouts.app')

@section('content')
<div class="container login_container_mother">
    <div class="row justify-content-center">
        <div class="card card_form">
            <div class="header">{{ __('PLAYHiVE') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3 email_session input_main">
                        <label for="email" class="label_text">{{ __('Email Address') }}</label>

                        <div class="col-md-6 input">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 password_session input_main">
                        <label for="password" class="label_text">{{ __('Password') }}</label>

                        <div class="col-md-6 input">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 rememberMe_cb">
                        <div class="col-md-6 rememberMe_cb_a">
                            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div> --}}

                            @if (Route::has('password.request'))
                                <a class="btn btn-link link_a" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="row login_btn">
                        <div class="login_btn_a">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Login') }}
                            </button>

                            {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link link_a" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif --}}
                            {{-- <a class="btn btn-link link_a" href="{{ route('register') }}">
                                {{ __("Dont't have an account? Register Now") }}
                            </a> --}}
                        </div>
                    </div>

                    <div class="row mb-3 register_link">
                        <div class="col-md-6 register_link_a">
                            <a class="btn btn-link link_a" href="{{ route('register') }}">
                                {{ __("Dont't have an account? Register Now") }}
                            </a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
