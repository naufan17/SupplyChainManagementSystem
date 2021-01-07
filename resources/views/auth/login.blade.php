@extends('layouts.user')

@section('title', 'Login')

@section('content')
<form method="POST" action="{{ route('login') }}">
    <h1 class="h4 mb-3 font-weight-normal text-center">Login</h1>
    @csrf
    <div class="form-group row">   
        <div class="col-sm-12">
            <label for="username">{{ __('Username') }}</label>
            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-12">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Login') }}
            </button>
        </div>
    </div>
</form>
@endsection
