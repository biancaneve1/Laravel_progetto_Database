


<nav class="navbar navbar-expand-lg " >
  {{-- data-bs-theme="dark" --}}
    <div class="container-fluid ">
     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white mx-3 pt-4" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          {{-- @auth --}}
          <li class="nav-item">
             <a class="nav-link text-white mx-3 pt-4 " href="{{route('sweets.create')}}">Inserisci un dolce</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link text-white mx-3 pt-4 " href="{{route('recipes.create')}}">Inserisci una ricettae</a>
         </li>  

          {{-- @endauth --}}
        
          <li class="nav-item">
            <a class="nav-link text-white mx-3 pt-4" href="{{route('sweets.index')}}">Tutti i dolci</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mx-3 pt-4" href="{{route('recipes.index')}}">Tutte le ricette</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link text-white mx-3 pt-4" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mx-3 pt-4" href="{{route('register')}}">Register</a>
          </li>
          @endguest
         
          @auth
          <li class="nav-item">
            <a class="nav-link text-white mx-3 pt-4" href="{{route('dashboard')}}">Benvenuto {{Auth::user()->name}}</a>
          </li>
          <li class="nav-item">
            {{-- JS inline --}}
            <a class="nav-link text-white mx-3 pt-4" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit()">Logout</a>
            <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">
              @csrf
            </form>
          </li>
          @endauth
         
        </ul>
        <div class="margin"></div>
      </div>
    </div>
  </nav>