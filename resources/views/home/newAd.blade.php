@extends('layouts.app')

<html>
<body style="background-color:#FFff;">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            @include('home.partials.sidebar')
        </div>
        <div class="col-8">
            <h1><font face = "Comic Sans MS" size = "6">NOVI OGLAS</h1></font>
            <form action="{{ route('home.storeAd') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" placeholder="Naslov oglasa" class="form-control"><br>
                <textarea name="body" placeholder="Text opisa oglasa" class="form-control" cols="30" rows="10"></textarea><br>
                <input type="number" name="price" placeholder="Cena psa" class="form-control"><br>
                <input type="file" name="image1" placeholder="slika1" class="form-control">
                <input type="file" name="image2" placeholder="slika2" class="form-control">
                <input type="file" name="image3" placeholder="slika3" class="form-control"><br>
                <select name="category" class="form-control">
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select><br>
                <button type="submit" class="btn btn-dark form-control" style="font-family: Comic Sans MS">Dodaj oglas</button>
            </form>
        </div>
    </div>
</div>
@endsection