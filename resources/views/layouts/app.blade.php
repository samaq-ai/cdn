<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sama') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>


    <link rel="manifest" href="{{ asset('iOS/manifest.json') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <link rel="apple-touch-icon" href="{{ asset('images/sbs-img.png') }}" />
    <link rel="apple-touch-startup-image" href="{{ asset('images/800x600.gif') }}">
    <meta name="apple-mobile-web-app-title" content="SBS Portal">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="icon" href="{{ asset('images/sbs-img.png') }}">

    <!-- Add to Homescreen -->
    <link rel="stylesheet" type="text/css" href="{{ asset('iOS/addtohomescreen.css') }}">
    <script src="{{ asset('iOS/addtohomescreen.js') }}"></script>
    <script>
    addToHomescreen.removeSession();
    instance.clearSession();
    addToHomescreen();
    addToHomescreen({
        detectHomescreen: true
    });
    var a = addToHomescreen({
        onAdd: function () {
            alert('Welcome to Sama Business Services Portal.');
        }
    });
    </script>
    <!-- Add to Homescreen -->




</head>
<body>
    <div id="app">
        <nav style="background-color:#000111" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Sama') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    </div>
</body>


<hr>
<footer class="modal-footer" style="float:left;background-color:#ffffff">
	<div class="row">
		<div class="col-lg-8">
            <div class="modal-container">
                                            <div id="ftr-wrap">
                                                <div class="ftr-links">
                                                    <ul class="ml-auto" style="float:right">                   
                                                    <span><a style="font-size:10px;" href="#">Terms</a></span>&nbsp;&nbsp;  | &nbsp;&nbsp;
                                                    <span><a style="font-size:10px;" href="#">Privacy Policy</a></span>&nbsp;&nbsp; | &nbsp;&nbsp;     
                                                    <span><a style="font-size:10px;" href="">Sitemap</a></span>     
                                                    </ul>
                                                    <div class="col-lg-6">
                                                        <div class="copyright-samabusinessservices">
                                                            <?='<span style="font-size:10px; float:left;padding-left:0px;">Copyright &copy; ' . date("Y") . ' <a href="/">Sama Business Servies Co.</a>.</span><span style="font-size:10px" class="copyright"> SA, Jeddah. C.R. 4030375691</span>';?>
                                                        </div>     
                                                    </div>     
                                                </div>
                                            </div>
        
            </div>
        </div>

        <div class="col-lg-12">
            
            
            <div class="container">

                    <span style="float:right">
                        <img width="90px" height="90px" src="{{ asset('images/cr.png') }}" />
                        <img style="margin-left:20px" width="75px" height="75px" src="{{ asset('images/sbs-img.png') }}" />
                        <!--            <img width="90px" height="85px" src="{{ asset('images/web.png') }}" />-->
                        <img width="110px" height="90px" src="{{ asset('images/800x600.gif') }}" />
                    </span>
            </div>
        </div>
    </div>
</footer>


</html>
