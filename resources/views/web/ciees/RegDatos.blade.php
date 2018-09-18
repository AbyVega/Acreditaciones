@extends('layout.ciees')
@section('content')

    <!-- Main -->
    <article class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">


                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <header>
        <h2><a href="#">Autoevaluación de Programas de Educación Superior 2018
            </a></h2>
    </header>
    <div class="table-responsive">

                <h4>Indicador</h4>

        <select  name="indicador" class="form-control" id="guia" onblur="cargar_guia();">
                            @foreach($indicadores as $indicador)
                                <option  value="{{$indicador->id}}">{{$indicador->id}}</option>
                            @endforeach
        </select>
        <div id="guia">


        </div>
    </div>
                                </div>
                            </div>
            </div>
        </article>
        <script>
            function cargar_guia() {
                var indicador = document.getElementById("guia").value;

                console.log("id:"+indicador);

                $("#guia").load('/Guia/1');

            }
        </script>
    </article>
    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="row">

                <!-- Tweets -->
                <section class="col-4 col-12-mobile">
                    <header>
                        <h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
                    </header>
                    <ul class="divided">
                        <li>
                            <article class="tweet">
                                Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                                <span class="timestamp">5 minutes ago</span>
                            </article>
                        </li>
                        <li>
                            <article class="tweet">
                                Hendrerit rutrum quisque.
                                <span class="timestamp">30 minutes ago</span>
                            </article>
                        </li>
                        <li>
                            <article class="tweet">
                                Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
                                <span class="timestamp">3 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class="tweet">
                                Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
                                <span class="timestamp">5 hours ago</span>
                            </article>
                        </li>
                    </ul>
                </section>

                <!-- Posts -->
                <section class="col-4 col-12-mobile">
                    <header>
                        <h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
                    </header>
                    <ul class="divided">
                        <li>
                            <article class="post stub">
                                <header>
                                    <h3><a href="#">Nisl fermentum integer</a></h3>
                                </header>
                                <span class="timestamp">3 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class="post stub">
                                <header>
                                    <h3><a href="#">Phasellus portitor lorem</a></h3>
                                </header>
                                <span class="timestamp">6 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class="post stub">
                                <header>
                                    <h3><a href="#">Magna tempus consequat</a></h3>
                                </header>
                                <span class="timestamp">Yesterday</span>
                            </article>
                        </li>
                        <li>
                            <article class="post stub">
                                <header>
                                    <h3><a href="#">Feugiat lorem ipsum</a></h3>
                                </header>
                                <span class="timestamp">2 days ago</span>
                            </article>
                        </li>
                    </ul>
                </section>

                <!-- Photos -->
                <section class="col-4 col-12-mobile">
                    <header>
                        <h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
                    </header>
                    <div class="row gtr-25">
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="image fit"><img src="images/pic15.jpg" alt="" /></a>
                        </div>
                    </div>
                </section>

            </div>
            <hr />
            <div class="row">
                <div class="col-12">

                    <!-- Contact -->
                    <section class="contact">
                        <header>
                            <h3>Nisl turpis nascetur interdum?</h3>
                        </header>
                        <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                            <li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
                        </ul>
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

    </div>
    </body>
    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection