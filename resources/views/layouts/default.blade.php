<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="Saquib" content="Blade">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Checkout our layout</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <header class="row">
            @include('includes.header')
        </header>
        <div class="container">
            <div id="main" class="row" style="padding-top: 15px; padding-bottom: 15px">
                @yield('content')
            </div>
            <footer class="row">
                @include('includes.footer')
                @include('includes.scripts.script-modules')
            </footer>
        </div>
    </body>
</html>
