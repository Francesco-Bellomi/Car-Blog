
@guest
<nav class="navbar navbar-expand-md border-bot-top-main bg-white fixed-top mb-5 d-flex justify-content-between">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('welcome')}}">
            <img src="/img/logo.jpg"  alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "><i class="fas fa-car tc-black fa-2x "></i></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 fs-4 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-5" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-5" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profilo
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-5" aria-current="page" href="{{route('email')}}">Contattaci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@else
<nav class="navbar  navbar-expand-xxl border-bot-top-main bg-white fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand animate__animated animate__bounceInLeft" href="{{route('welcome')}}">
            <img src="/img/logo.jpg" class="pt-4" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon animate__animated animate__bounceInLeft"><i class="fas fa-car tc-black fa-2x "></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto  fs-4 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profilo
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('form-logout').submit();">Logout</a></li>
                        <form method="POST" action="{{route('logout')}}" id="form-logout">
                            @csrf
                        </form>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('car.index')}}">Lista Auto Soci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('car.create')}}">Aggiungi la tua Auto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('gathering.index')}}">Scopri i nostri Eventi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('gathering.create')}}">Organizza un evento nella tua città</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('email')}}">Contattaci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endguest
