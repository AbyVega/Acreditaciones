<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <title>SIGECE</title>
        <link rel="shortcut icon" src="{{asset('images/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href=src="{{asset('images/favicon.ico')}}" type="image/x-icon">
        <link rel="shortcut icon" src="{{asset('images/favicon.ico')}}">
        <noscript><link rel="stylesheet" type="text/css" href="{{asset('estilo/css/noscript.css')}}"></noscript>
        <link rel="stylesheet" type="text/css" href="{{asset('estilo/css/main.css')}}">
        <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
        <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
        <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
        <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
        <script src="{{asset('estilo/js/browser.min.js')}}"></script>
        <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
        <script src="{{asset('estilo/js/util.js')}}"></script>
        <script src="{{asset('estilo/js/main.js')}}"></script>
        <script src="{{asset('estilo/js/toastr.js')}}"></script>
        <script src="{{asset('estilo/js/toastr.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


    </head>

    <body>

      @yield('content') 


    </body>
</html>
