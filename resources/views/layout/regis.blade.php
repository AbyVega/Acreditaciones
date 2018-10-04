<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <title>SIGECE</title>
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
    <script src="{{asset('estilo/js/bootstrap.js')}}"></script>
    <script src="{{asset('estilo/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('estilo/js/npm.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('estilo/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('estilo/css/bootstrap-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('estilo/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('estilo/css/bootstrap-theme.min.css')}}">

</head>
<body>

<body class="left-sidebar is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Inner -->
        <div class="inner">
            <header>
                <h1><a href="index.html" id="logo">SIGECE</a></h1>
            </header>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="Index">Inicio</a></li>
                   </ul>
        </nav>

    </div>
@yield('content')



<!-- Footer -->
    <div id="footer">
        <div class="containerF">

            <!-- Contact -->
            <section class="contact">
                <header>
                    <h3></h3>
                </header>
                <p><img src="images/Redd.png" height="80" width="280"><br>
                    CENTRO UNIVERSITARIO DE LOS VALLES<br>
                    Carretera Guadalajara - Ameca Km. 45.5, C.P. 46600, Ameca, Jalisco, México.<br>
                    Telefono: +52 (375) 7580 500 extensión. 9</p>

            </section>

            <!-- Copyright -->
            <div class="copyright">
                <ul class="menu">
                    <li>&copy; Centro Universitario de los Valles</li><li>2018 <a href="/">SIGECE</a></li>
                </ul>
            </div>

        </div>


    </div>
</div>

</div>
</body>
</html>
