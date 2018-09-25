@extends('layout.home')
@section('content')



    <body class="homepage is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Inner -->
            <div class="inner">
                <header>
                    <h1><a href="index.html" id="logo">SIGECE</a></h1>
                    <hr />
                    <p>Centro Universitario de los Valles</p>
                </header>
                <footer>
                    <a href="#banner" class="button circled scrolly">Entrar</a>
                </footer>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="{{ route('acreditacion.index')}}">Acreditaciones</a>
                    </li>
                    <li><a href="{{ route('evaluaciones.index')}}">Evaluaciones</a></li>
                    <li><a href="{{ route('Ciees.index')}}">Ciies</a></li>
                    <li><a href="{{ route('registros.index')}}">Registros</a></li>
                    <li><a href="{{ route('preguntas.index')}}">Contacto</a></li>
                    <li><a href="{{ route('logout') }}">Cerrar</a></li>

                </ul>
            </nav>

        </div>

        <!-- Banner -->
        <section id="banner">
            <header>
                <h2> <strong>SIGECE</strong>.</h2>
                <p>
                   Sistema para la Gestión de las Evaluaciones y Acreditaciones para la Calidad Educativa.
                </p>
            </header>
        </section>

        <!-- Carousel -->
        <section class="carousel">
            <div class="reel">

                <article>
                    <a href="#" class="image featured"><img src="images/cieess.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Proposito</a></h3>
                    </header>
                    <p>Coadyuvar al mejoramiento de la calidad de la educación superior en México.</p>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="images/psicologia.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Lic. en Psicología</a></h3>
                    </header>
                    <p>Los conocimientos que se promueven en el psicólogo se fundamentan en las bases filosóficas,
                        epistemológicas, etc.</p>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="images/social.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Lic. en Trabajo Social</a></h3>
                    </header>
                    <p>Profesionales de las ciencias sociales
                        su objetivo es mejorar la calidad de vida de un individuo.</p>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="images/tecnologias.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Lic. en Tecnologías de la Información</a></h3>
                    </header>
                    <p>Forma profesionistas capacitados para implementar y gestionar tecnologías.</p>
                </article>
                <article>
                    <a href="#" class="image featured"><img src="images/derecho.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Lic. en Derecho</a></h3>
                    </header>
                    <p>Permite desarrollarse profesionalmente en el campo jurídico, con valores y principios ético.</p>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="images/electronica.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Ing. en Electronica y Computación</a></h3>
                    </header>
                    <p>Forma recursos humanos, calificados en desarrollos cientificos.</p>

                </article>



                <article>
                    <a href="#" class="image featured"><img src="images/administracion.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Lic. en Administración</a></h3>
                    </header>
                    <p>Forma profesionales de calidad en el área de la administración con vocación emprendedora.</p>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="images/agronegocios.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Lic. en Agronegocios</a></h3>
                    </header>
                    <p>Conjunto de recursos y procesos que hacen posible el aprovechamiento sustentable de la naturaleza.</p>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="images/biologicos.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Ing. Sistemas Biologicos</a></h3>
                    </header>
                    <p>Adquirir conocimientos científicos y tecnológicos necesarios para transformar
                        materiales biológicos.</p>
                </article>
                <article>
                    <a href="#" class="image featured"><img src="images/conta.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Lic. Contaduria</a></h3>
                    </header>
                    <p>Profesionista dedicado a la captación, proceso, interpretación y proyección de la
                        información financiera.</p>
                </article>
                <article>
                    <a href="#" class="image featured"><img src="images/dise.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Ing. en Diseño Molecular de Materiales</a></h3>
                    </header>
                    <p>Sintetizar y manipular las propiedades de materiales a diferentes escalas.</p>
                </article>
                <article>
                    <a href="#" class="image featured"><img src="images/educacion.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Lic. en Educación</a></h3>
                    </header>
                    <p> forma profesionistas con las competencias esenciales para impactar en el desarrollo social.</p>
                </article>
                <article>
                    <a href="#" class="image featured"><img src="images/enfermeria.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Nivelación Enfermeria</a></h3>
                    </header>
                    <p>Superación académica y profesional de la enfermera(o),
                        ofreciendo un programa formativo de alta calidad.</p>
                </article>
                <article>
                    <a href="#" class="image featured"><img src="images/geofisica.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Ing. en Geofísica</a></h3>
                    </header>
                    <p>Forma profesionales capaces de evaluar y solucionar problemas
                       terrestres.</p>
                </article>
                <article>
                    <a href="#" class="image featured"><img src="images/mecatronica.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Ing. Mecatrónica</a></h3>
                    </header>
                    <p>Disciplina integradora de las áreas de mecánica, electrónica e
                        informática para mejorar procesos y sistemas.</p>
                </article>
                <article>
                    <a href="#" class="image featured"><img src="images/nano.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Ing. en Instrumentación Electrónica y Nanosensores</a></h3>
                    </header>
                    <p>Aplicar conocimientos adquiridos en áreas de instrumentación.</p>
                </article>
                <article>
                    <a href="#" class="image featured"><img src="images/turismo.png" alt="" /></a>
                    <header>
                        <h3><a href="#">Lic. en Turismo</a></h3>
                    </header>
                    <p>Carrera multidisciplinar ya que se sirve de varias disciplinas que van desde
                        las asignaturas cuánticas, sociales, etc.</p>
                </article>

            </div>
        </section>

        <!-- Main -->
        <div class="wrapper style2">

            <article id="main" class="container special">
                <header>
                    <h2><a href="#">SIGECE</a></h2>
                    <p>
                        Sistema para la Gestión de las Evaluaciones y Acreditaciones para la Calidad Educativa.
                    </p>
                </header>
                <p>
                    Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
                    posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                    sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
                    mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
                    lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
                    consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
                    interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
                    natoque aenean scelerisque.
                </p>

            </article>

        </div>



        <!-- Footer -->
        <div id="footer">
            <div class="containerF">

                        <!-- Contact -->
                        <section class="contact">
                            <header>
                                <h3></h3>
                            </header>
                            <p><img src="images/red.png"><br>
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
    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection