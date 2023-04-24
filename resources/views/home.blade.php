@extends('layouts.app')

<html>
<body style="background-color:#ffff;">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            @include('home.partials.sidebar')
        </div>
        <div class="col-8">
            <h1><font face = "Comic Sans MS" size = "6">MOJI OGLASI</h1></font>
            <ul class="list-group">
                @foreach ($all_ads as $ad)
                    
                    <li class="list-group-item" style="background-color:#212529; margin-bottom:5px" >
                        <a href="{{ route('home.singleAd', ['id'=>$ad->id]) }}" style="text-decoration: none" class="text-light"><font size="+1"><b>{{ $ad->title }}</b></font></a><br>
                    </li>
                @endforeach
            </ul>
            @if (session()->has('message'))
                <p class="alert alert-warning">{{ session()->get('message') }}</p>
            @endif
        </div>
    </div>
</div>
@endsection