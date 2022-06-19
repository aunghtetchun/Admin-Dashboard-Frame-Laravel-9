@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <img src="https://r67.cooltext.com/rendered/cooltext413459663859135.png" alt="logo" width="150" class=" border-0">
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>{{ __('Login ') }}</h4>
{{--                        <a class="text-decoration-none font-weight-bold ml-auto" href="{{ route('register') }}">{{ __(' ( Register )') }}</a>--}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" tabindex="1" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" tabindex="2" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <div class="invalid-feedback" >
                                        <strong>{{ $message}}</strong>
                                    </div>
                                    @enderror

                                    @if (Route::has('password.request'))
                                        <div class="float-right">
                                            <a class="text-small" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>

                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                        <div class="text-center mt-4 mb-3">
                            <div class="text-job text-muted">Login With Social</div>
                        </div>
                        <div class="row sm-gutters">
                            <div class="col-6">
                                <a class="btn btn-block btn-social btn-facebook"><span class="fab fa-facebook"></span> Facebook</a>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-block btn-social btn-twitter"><span class="fab fa-twitter"></span> Twitter</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" text-muted text-center">
                    Don't have an account? <a href="{{ route('register') }}">Create One</a>
                </div>
                <div class="simple-footer">
                    Copyright &copy; CodiePie 2020
                </div>
            </div>
        </div>
    </div>
@endsection
