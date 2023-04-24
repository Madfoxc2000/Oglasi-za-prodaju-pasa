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
            <h1><font face = "Comic Sans MS" size = "6">DOPISIVANJE</h1></font>
            <ul style="font-family:Comic Sans MS;" class="list-group">
                @foreach ($messages as $message)
                <li class="list-group-item" style="background-color:#2121215b; font-family:Comic Sans MS;">
                    <p><strong>Pošaljilac: {{ $message->sender->name }} <span class="float-end">{{ $message->created_at->format('d-m-y') }}</span></strong></p>
                    <p><strong>Tekst poruke: {{ $message->text }} </strong></p>
                    <p><strong>Oglas za psa: {{ $message->ad->title }}</strong></p>
                </li>
                @endforeach
                <li class="list-group-item" style="background-color:#2121215b">
                    <form action="{{ route('home.storeReply')}}" method="POST">
                        @csrf
                        <input type="hidden" name="sender_id" value="{{ $sender_id }}">
                        <input type="hidden" name="ad_id" value="{{ $ad_id }}">
                        <textarea name="msg" class="form-control" style="background-color:#dfdfdf" placeholder="Odgovori pošaljiocu: {{ $message->sender->name }}" cols="30" rows="10"></textarea>
                        <button type="submit" style="font-family:Comic Sans MS;" class="btn btn-dark form-control mt-2">Odgovori</button>
                    </form>
                    @if (session()->has('msg'))
                        <div class="alert alert-warning">{{ session()->get('msg') }}</div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection