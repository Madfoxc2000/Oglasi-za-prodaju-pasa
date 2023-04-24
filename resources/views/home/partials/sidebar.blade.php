<a style="font-size: 20; font-family:Comic Sans MS;background-color:#009900;" type="submit" class="btn btn-dark form-control m-3">TRENUTAN DEPOZIT: {{ (Auth::user()->deposit)? Auth::user()->deposit : 0 }}rsd  </a>
<a style="font-size: 20; font-family:Comic Sans MS;background-color:#009900;" href="{{ route ('home.addDeposit') }}" class="btn btn-dark form-control m-3">DODAJ DEPOZIT</a>
<a style="font-size: 20; font-family:Comic Sans MS;background-color:#009900;" href="{{ route('home',['name'=>Auth::user()->name])}}" class="btn btn-dark form-control m-3">SVI MOJI OGLASI</a>
<a style="font-size: 20; font-family:Comic Sans MS;background-color:#009900;" href="{{ route('home.newAd') }}" class="btn btn-dark form-control m-3" style="background-color:#009900;">NOVI OGLAS</a>
<a style="font-size: 20; font-family:Comic Sans MS;background-color:#009900;" href="{{ route('home.showMessage') }}" class="btn btn-dark form-control m-3">PORUKE ({{ Auth::user()->message->count() }})    </a>
 