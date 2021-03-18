<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Magic Notes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @auth
            <li><a class="dropdown-item" href="#">Hola {{auth()->user()->name}}</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="{{route('logout')}}" id='form_logout' method="POST" >
            @csrf
            </form>
            <li><a id='logout' class="dropdown-item" href="#">Logout</a></li>
            @endauth
             @guest
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
            @endguest
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>