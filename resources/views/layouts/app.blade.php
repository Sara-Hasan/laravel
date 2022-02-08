<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/log.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <label class="logo">
                    <a href="{{ url('/home') }}">
                        Arabiaمرحباً 
                     </a> 
                </label> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
            
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li>
                            <a href="#About" class="nav-link"> Home  </a> 
                        </li>
                        <li> 
                            <a href="#Skill" class="nav-link">  Course </a>
                        </li>
                        <li> 
                            <a href="#service" class="nav-link">  Service </a>
                        </li>
                        <li>
                            <a href="#About" class="nav-link"> About us  </a> 
                        </li>
                        <li>
                            <a class="contact nav-link" href="#Contact">  Contact us </a>
                        </li>
                        <li> 
                            <a href="" class="nav-link">  Instructor </a>
                        </li>
                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('user.login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('user.register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <div class="container">
              <div class="three">
                <div class="item">
                  <h4 class="ftco-heading-2">About</h4>
                  <p> Far far away, behind the word mountains,
                     far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                      <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                  </ul>
                </div>
                <div class="item">
                  <h4 class="ftco-heading-2">​Recent Courses </h4>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block"> Courses </a></li>
                    <li><a href="#" class="py-2 d-block"> Courses </a></li>
                    <li><a href="#" class="py-2 d-block"> Courses </a></li>
                    <li><a href="#" class="py-2 d-block"> Courses </a></li>
                    <li><a href="#" class="py-2 d-block"> Courses </a></li>
                    <li><a href="#" class="py-2 d-block"> Courses </a></li>
                  </ul>
                </div>
                <div class="item">
                  <h4 class="ftco-heading-2">Have a Questions?</h4>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon fa fa-map-marker"></span><span class="text">​ Amman - Jordan </span></li>
                      <li><span class="icon fa fa-phone"></span><span class="text"> +962 777 777 764 </span></li>
                      <li><span class="icon fa fa-paper-plane"></span><span class="text"> info@sarah.com</span></li>
                    </ul>
                  </div>
                </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
          
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
          </div>
          </footer>
    </div>
</body>
</html>
