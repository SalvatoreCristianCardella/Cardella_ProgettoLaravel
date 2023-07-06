<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('prodotti')}}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.create')}}">Crea Articolo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">Lista Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contactus')}}">Contact-us</a>
          </li>
          @auth
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('book.create')}}">crea libro</a>
          </li>
          @endauth
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form action='{{route('search')}}' method="GET" class="d-flex" role="search">
          <input name="chiavediricerca" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
      <ul class="navbar-nav mb-2 mb-lg-0">
        @if (Auth::user() != null)
            <li class="nav-item">
                <span class="nav-link text-light">{{ Auth::user()->name }}</span>
            </li>
            <a class="nav-link @if(Route::currentRouteName() == 'user.profile') active @endif" aria-current="page"
                        href="{{ route('user.profile') }}">
                        Profile
            </a>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-warning">LOG-OUT</button>
                </form>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
            </li>
        @endif
    </ul>
    </div>
  </nav>