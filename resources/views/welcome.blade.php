@extends('layouts.master')
@section('main')

<html>
<body style="background-color:#FFf">
    <style>
    </style> 
<p></p> 
<p></p>
</body>
</html>
<div class="container">
    <div class="row">
        <div class="col-3 " style="background-color:#009900; border-radius: 10px; max-height: 750px;" >
            <ul class="list-group list-group-flush" >
                @foreach ($all_cats as $cat)
                    <li class="list-group-item "  style="background-color:#009900;" >
                     <a style="text-decoration: none; font-family:Comic Sans MS; font-size:14px; color:aliceblue;" href="{{ route('welcome', ['cat'=>$cat->name])}}"><b>{{ $cat->name }}</b></a>
                    </li>
                @endforeach
                <li class="list-group-item " style="background-color: #009900;">
                    <form action="{{ route('welcome') }}" method="GET">
                        <select name="type" style="font-family:Comic Sans MS;" class="form-control">
                            <option value="lower"{{ (isset(request()->type) && request()->type == 'lower')? 'selected' : ''}}><b>Ceni rastuće</b></option>
                            <option value="upper"{{ (isset(request()->type) && request()->type == 'upper')? 'selected' : ''}}><b>Ceni opadajuće</b></option>
                        </select>
                        <button style="font-family:Comic Sans MS;" type="submit" class="btn btn-dark form-control mt-1"><b>SORTIRAJ</b></button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="col-9">
            <ul class="list-group">
                @foreach ($all_ads as $ad)
                <div>
                    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
                        <section id="golf">
                        <div class="fluid-container" >
                            <div class="row no-gutters" style="padding:10px; background-color: aliceblue; margin-bottom:15px " >
                            <div class="col-md">
                                <div class="menu-image h-100 d-flex align-items-start" style="width: 180px;  height: 220px; object-fit: contain;" >
                                    <img src="/ad_images/{{ $ad->image1 }}" class="img-fluid"  >
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="menu-text flex-grow-1 py-4 px-5">
                                <a style="text-decoration: none; font-family:Comic Sans MS; "  href="{{ route('welcome.singleAd', ['id'=>$ad->id]) }}" class="text-dark"><font size="+1"><b>{{ $ad->title }}</b></font></a><p></p>
                                <hr class="hr-style-left" />
                                <div class="menu-content d-flex justify-content-between">
                                    <p class="menu-name text-uppercase font-weight-bold text-dark" style="font-family: Lucida Handwriting;" >Cena</p>
                                    <span class="badge" style="font-family:Comic Sans MS; background-color: #009900"><font size="+1"><b>{{ $ad->price }}€</b></font></span>
                                </div>
                                <div class="menu-content d-flex justify-content-between">
                                    <p></p>
                                    <span class="badge float-end text-dark" style="font-family:Comic Sans MS;"><font size="+1">Broj pregleda: {{ $ad->views }}</font></span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </section>
                 </div>
                 @endforeach
                 
            </ul>
        </div>
     </div>
</div> 
@endsection