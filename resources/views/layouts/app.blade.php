<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stand Event</title>
    <link rel="icon" type="image/png" href="images/logonya.png">

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" > <!-- Resource style -->
    <script src="{{ URL::asset('js/modernizr.js') }}"></script> <!-- Modernizr -->
    <link href="{{ URL::asset('css/standev.css') }}" rel="stylesheet">
    


</head>
<body style="@yield('styling') z-index: 10;">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="opacity: 0.8;position: relative; z-index: 100;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('login') }}"><img src="{{ URL::asset('images/logo.png') }}" height="35px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Register
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="{{ route('register_event') }}">Register Event</a>
                          <a class="dropdown-item" href="{{ route('register_tenant') }}">Register Tenant</a>
                        </div>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('elist') }}">Event List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('book') }}">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('elist') }}">Event List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post') }}">Posting</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->username }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                                </form>
                            </li>
                            <li class="nav-item">
                               <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                            </li>
                        </ul>
                    </li>
                    <
                    @endguest
                </ul>
            </div>
        </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ URL::asset('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/standev.js') }}"></script>
</body>
</html>
