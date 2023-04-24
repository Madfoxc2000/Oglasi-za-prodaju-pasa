<nav class="navbar navbar-expand-md   shadow-sm" style="background-color: #009900">
    <div class="container-fluid">
    <a href="{{ route('welcome') }}" style="font-family:Comic Sans MS; color:aliceblue;"  class="navbar-brand " margin: 20px;>
        <img src="/ad_images/dog.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        <b>Prodaja pasa</b></a>

    <ul class="navbar-nav ms-auto  ">
        @if (Route::has('login'))
            @auth 
                <li class="nav-item">
                    <a href="{{ route('home',['name'=>Auth::user()->name])}}" style="font-family:Comic Sans MS; color:aliceblue; " class="nav-link text-light"><b>MOJ PROFIL</b></a>
                </li>

            @else
                <li class="nav-time">
                    <a href="{{ route('login') }}" style="font-family:Comic Sans MS; color:aliceblue; " class="nav-link text-light"><b>ULOGUJ SE</b></a>
                </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}" style="font-family:Comic Sans MS; color:aliceblue;" class="nav-link text-light"><b>REGISTRUJ SE</b></a>
                </li>
            @endif
            @endauth
        @endif
    </ul>
    </div>
</nav>