@extends('layouts.app')


<html>
<body style="background-color:#FFFF;">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            @include('home.partials.sidebar')
        </div>
        <div class="col-9">
            <h1><font face = "Comic Sans MS" size = "6">{{ $singleAd->title }}</h1></font>
            <a href="/home/singleAd/{{ $singleAd->id }}/edit" style="font-size: 17; font-family:Comic Sans MS;" class="btn btn-dark me-2">IZMENI</a> <a href="/home/singleAd/{{ ($singleAd->id) }}/delete" style="font-size: 17; font-family:Comic Sans MS;" class="btn btn-dark me-2">OBRIŠI</a>
      

            <div class="row">
                <div class="col-6 offset-3" style="margin-bottom: 10px">
                    @if (isset($singleAd->image1))
                        <img src="/ad_images/{{ $singleAd->image1 }}" id="main-img" class="img-fluid">
                    @endif
                </div>
                <div class="col-6 offset-3">
                    <div class="row">
                        <div class="col-6">
                            @if (isset($singleAd->image2))
                                <img src="/ad_images/{{ $singleAd->image2 }}" class="img-fluid thumb">
                            @endif
                        </div>
                        <div class="col-6">
                            @if (isset($singleAd->image3))
                                <img src="/ad_images/{{ $singleAd->image3 }}" class="img-fluid thumb">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if (session()->has('message'))
                <button class="alert alert-warning">{{ session()->get('message') }}</button>
            @endif
        </div>
    </div>
</div>
@endsection
@section('page-script')
    <script>
        let thumbs = document.querySelectorAll('.thumb');
        for(i=0; i<thumbs.length; i++){
            const thumb = thumbs[i];
            thumb.addEventListener('click',function(){
            let mainImg = document.querySelector('#main-img');
            let mainImgSrc = mainImg.getAttribute('src');
            let src = this.getAttribute('src');
            mainImg.setAttribute('src', src);
            this.setAttribute('src', mainImgSrc);
            })
        }
    </script>
@endsection
