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
            <h1><font face = "Comic Sans MS" size = "6">SVE PORUKE</h1></font>
            <ul style="font-family:Spectral;" class="list-group">
                @foreach ($messages as $message)
                <li class="list-group-item" style="background-color:#2121215b">
                    <p><strong>Pošaljilac: {{ $message->sender->name }} <span class="float-end">{{ $message->created_at->format('d-m-y') }}</span></strong></p>
                    <p><strong>Tekst poruke: {{ $message->text }}</strong></p>
                    <p><strong>Oglas za proizvod: {{ $message->ad->title }}</strong></p>
                    <a href="{{ route('home.replyMessage', ['sender_id'=>$message->sender->id, 'ad_id'=>$message->ad_id]) }}"style="text-decoration: none" class="text-light">Odgovori na poruku</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection 