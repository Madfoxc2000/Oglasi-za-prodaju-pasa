@extends('layouts.master')

<html>
<body style="background-color:#FFff;">

@section('main')
    <p></p>
    <p></p>
    <p></p>
    <br>
    <div style="font-family:Spectral;" class="col-12">
        <h1 style="font-size: 40; font-family:Comic Sans MS;" class="display-4">{{ $singleAd->title }} <span style="font-size: 17; font-family:Comic Sans MS; background-color:#009900" class="btn btn-dark">Grupa: {{ $singleAd->category->name }}</span></h1>
        <h5 style="font-family:Comic Sans MS; font-size: 14px"><p><b> Opis: {{ $singleAd->body }}</b></p></h5>
        <p><button style="font-size: 17; font-family:Comic Sans MS; background-color:#009900" class="btn btn-dark me-2">Oglas postavio korisnik: {{ $singleAd->user->name }}</button><button style="font-size: 17; font-family:Comic Sans MS; background-color:#009900" class="btn btn-dark">Cena : {{ $singleAd->price }} €</button></p>
    </div>
    <div class="row">
        <p></p>
        <p></p>
        <p></p>
        @if (isset($singleAd->image1))
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/ad_images/{{ $singleAd->image1 }}" class="img-fluid">
                    </div>
                </div>
            </div>
        @endif
        @if (isset($singleAd->image2))
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <img src="/ad_images/{{ $singleAd->image2 }}" class="img-fluid">
                </div>
            </div>
        </div>
    @endif
    @if (isset($singleAd->image3))
    <div style="font-family:Spectral;" class="col-4">
        <div class="card">
            <div class="card-body">
                <img src="/ad_images/{{ $singleAd->image3 }}" class="img-fluid">
            </div>
        </div>
    </div>
    @endif
    <p></p>
    <p></p>
    <p></p>
    </div>
    @if (auth()->check() && auth()->user()->id !=$singleAd->user_id)
    <div style="font-family:Spectral;" class="row">
        <div class="col-6">
            <form action="{{ route('welcome.sendMessage', ['id'=>$singleAd->id]) }}" method="POST">
                @csrf
                <textarea name="msg" class="form-control" placeholder="Pošalji poruku korisniku: {{ $singleAd->user->name }}" cols="30" rows="10"></textarea>
            <button type="submit" class="btn btn-dark form-control mt-2">Pošalji poruku</button>
            </form>
            @if (session()->has('message'))
            <div class="alert alert-dark">{{ session()->get('message') }}</div>
            @endif
        </div>
    </div>
    @endif
@endsection
