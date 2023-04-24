@extends('layouts.app')

<html>
<body style="background-color:#FFFF;">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            @include('home.partials.sidebar')
        </div>
        <div class="col-8">
            <h1><font face = "Comic Sans MS" size = "6">IZMENI OGLAS </font></h1>
            <form action="/home/singleAd/{{ $singleAd->id }}/edit" method="POST" enctype="multipart/form-data" >
                @csrf
                <input type="text" name="title" value="{{ $singleAd->title }}" class="form-control"><br>
                <textarea name="body"  class="form-control" cols="30" rows="10"> {{ $singleAd->body }} </textarea><br>
                <input type="number" name="price" value="{{ $singleAd->price }}" class="form-control"><br>
                <input type="file" name="image1" placeholder="slika1" class="form-control">
                <input type="file" name="image2" placeholder="slika2" class="form-control">
                <input type="file" name="image3" placeholder="slika3" class="form-control"><br>
                <select name="category" class="form-control">
                    @foreach ($categories as $cat)
                        <option value="{{ $singleAd->category }}">{{ $cat->name }}</option>
                    @endforeach
                </select><br>
                <button type="submit" style="font-family: Comic Sans MS" class="btn btn-dark form-control">IZMENI OGLAS</button>
            </form>
        </div>  
    </div>
</div>
@endsection