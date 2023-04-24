@extends('layouts.app')

<html>
<body style="background-color:#FFff;">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="font-family:Comic Sans MS;" class="card-header">{{ __('Registruj se') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" style="font-family:Comic Sans MS;" class="col-md-4 col-form-label text-md-right"><b>{{ __('Ime') }}</b></label>

                            <div class="col-md-6">
                                <input id="name" style="font-family:Spectral;" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" style="font-family:Comic Sans MS;" class="col-md-4 col-form-label text-md-right"><b>{{ __('E-Mail adresa') }}</b></label>

                            <div class="col-md-6">
                                <input id="email" style="font-family:Spectral;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" style="font-family:Spectral;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" style="font-family:Comic Sans MS;" class="col-md-4 col-form-label text-md-right"><b>{{ __('Ponovi password') }}</b></label>

                            <div class="col-md-6">
                                <input id="password-confirm" style="font-family:Spectral;"   type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" style="font-family:Comic Sans MS; background-color:#009900" class="btn btn-dark ">
                                <b>{{ __('Registruj se') }}</b>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
