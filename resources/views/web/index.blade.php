@extends('layout.home')
@section('content')

    @if(session('toast'))
<script>
    toast_top({
        type:'success',
        title:'{{session('toast')}}'

    })
</script>
@endif

    <script type="text/javascript">
        function nobackbutton(){
            window.location.hash="no-back-button";
            window.location.hash="Again-No-back-button" //chrome
            window.onhashchange=function(){window.location.hash="no-back-button";}


        }
    </script>
    <body class="homepage is-preload" onload="nobackbutton();">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Inner -->
            <div class="inner">
                <header>
                    <h1><a href="#" id="logo">SIGECE</a></h1>
                    <hr />

                    <p>Centro Universitario de los Valles</p>

                </header>
                @if(Auth::guest())
                <footer>
                    <a href="{{ route('login') }}" class="button circled scrolly">Entrar</a>
                </footer>
                    @endif
            </div>

            <!-- Nav -->
            @if(!Auth::guest())
            <nav id="nav">
                <ul>
                    @if($usuario[0]->tipos_id == 1)
                    <li><a href="Index">Inicio</a></li>
                    <li><a href="{{ route('acreditacion.Acreditacion')}}">Acreditaciones</a>
                    </li>
                    <!--<li><a href="route('evaluaciones.index'">Evaluaciones</a></li>-->


                    <li><a href="{{ route('ciees.ciees')}}">Ciies</a></li>

                    <li><a href="{{ route('registros.index')}}">Registros</a></li>
                    <li><a href="{{ route('logout') }}">Cerrar</a></li>
                        @endif
                        @if($usuario[0]->tipos_id == 2)

                            <li><a href="{{ route('ciees.ciees')}}">Ciies</a></li>
                            <li><a href="{{ route('Observacion.index')}}">Observaciones</a></li>
                            <li><a href="{{ route('logout') }}">Cerrar</a></li>
                        @endif

                </ul>
            </nav>
            @endif
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
                <h4>Organsmos Evaluadores y acreditadores</h4>
                    Dado que la evaluación y la acreditación nacen como procesos independientes,
                    la evaluación en México, se institucionaliza a partir de la década de los 90 en que
                    se establecen una serie de programas y organismos para evaluar y acreditar a la educación
                    superior en México con diferentes finalidades.

                </p>
                <p><h4>Gestión de procesos de calidad</h4>
                    Se le conoce como gestión de procesos a la planificación, depuración y control de los procesos de trabajo, son las actividades coordinadas para dirigir y controlar una organización en lo relativo a la calidad.
                    La gestión de calidad se centra también en la satisfacción de los clientes y en los medios para obtenerlas, asimismo utiliza el aseguramiento de la calidad y el control de los procesos para obtener una calidad más consistente.
                    La gestión de calidad permite: mejorar los procesos, Reducir desperdicios, bajar costos, facilitar oportunidades de capacitación del personal, genera compromiso entre el personal y establece la dirección adecuada de la organización.
                </p>
                <p><h4>Gestión de Información</h4>
                       se encarga de todo lo relacionado con la obtención de información
                       adecuada, en la forma correcta, para la persona indicada y en el momento oportuno, los objetivos principales de la gestión de la información son: maximizar el valor y los beneficios derivados del uso de la información, minimizar el costo de la adquisición, procesamiento y uso de la información, determinar responsabilidades para el uso efectivo, eficiente y económico de la información.
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
    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection