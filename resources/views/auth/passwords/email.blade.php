@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8  col-md-6  col-lg-6  col-xl-4 ">
            <div class="login-brand">
                <img src="https://r67.cooltext.com/rendered/cooltext413459663859135.png" alt="logo" width="150" class=" border-0">
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('Reset Password') }}</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">We will send a link to reset your password</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" tabindex="1" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
