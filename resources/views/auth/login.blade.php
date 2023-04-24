@extends('layouts.app')

<html>
<body style="background-color:#ffff;">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">  
            <div class="card">
                <div style="font-family:Comic Sans MS;" class="card-header">{{ __('Uloguj se') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" style="font-family:Comic Sans MS;" class="col-md-4 col-form-label text-md-right"><b>{{ __('E-Mail adresa') }}</b></label>

                            <div class="col-md-6">
                                <input style="font-family:Spectral;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" style="font-family:Comic Sans MS;" class="col-md-4 col-form-label text-md-right"><b>{{ __('Password') }}</b></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" style="font-family:Spectral;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" style="font-family:Comic Sans MS;" for="remember">
                                        <b>{{ __('Zapamti me') }}</b>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" style="font-family:Comic Sans MS; background-color:#009900" class="btn btn-dark">
                                    <b>{{ __('Uloguj se') }}</b>
                                </button>

                                @if (Route::has('password.request'))
                                    <a style="font-family:Comic Sans MS; background-color:#009900" href="{{ route('password.request') }}" class="btn btn-dark">
                                        <b>{{ __('Zaboravili ste password?') }}</b>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
