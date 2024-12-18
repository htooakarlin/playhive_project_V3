@extends('layouts.app')

@section('content')
<div class="container login_container_mother">
    <div class="row justify-content-center">
        <div class="card card_form">
            <div class="header">{{ __('Register') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3 input_main">
                        <label for="name" class="label_text">{{ __('Name') }}</label>

                        <div class="col-md-6 input">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 input_main">
                        <label for="email" class="label_text">{{ __('Email Address') }}</label>

                        <div class="col-md-6 input">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 input_main">
                        <label for="password" class="label_text">{{ __('Password') }}</label>

                        <div class="col-md-6 input">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 input_main">
                        <label for="password-confirm" class="label_text">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6 input">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row login_btn">
                        <div class="login_btn_a">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>

                    <div class="row mb-3 register_link">
                        <div class="col-md-6 register_link_a">
                            <a class="btn btn-link link_a" href="{{ route('login') }}">
                                {{ __("Already have an account? Login Now") }}
                            </a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
