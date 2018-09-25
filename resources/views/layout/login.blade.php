<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <title>SIGECE</title>
        <noscript><link rel="stylesheet" type="text/css" href="{{asset('estilo/css/noscript_log.css')}}"></noscript>
        <link rel="stylesheet" type="text/css" href="{{asset('estilo/css/main_log.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('https://fonts.googleapis.com/css?family=Raleway:300,400,600')}}">

    </head>

      @yield('content') 


    </body>
</html>
