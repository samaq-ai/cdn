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
    <link href="{{ asset('css/sama.css') }}" rel="stylesheet">
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
