<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        <header>
            @include('includes.header')
        </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<hr>
@include('includes.footer')
</html>