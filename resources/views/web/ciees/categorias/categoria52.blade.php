@extends('layout.ciees')
@section('content')
    <!-- Main -->
    <ar class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <!--botones-->
                <ul class="col-lg-12 col-md-12 col-sm-12">


                    <p>
                        <button class="btn btn-success" type="button" onclick="cargarDatos('44')">Administración<p>escolar</p></button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('45')">Servicios de<p>bienestar estudiantil</p> </button>
                    <button class="btn btn-success" type="button"onclick="cargarDatos('46')">Becas y apoyos<p>estudiantiles</p> </button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('47')">Gestión de los servicios <p>de transporte</p> </button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('48')">Servicio de<p> cafetería</p> </button>

                    <button class="btn btn-success" type="button" onclick="ocultarDatos()">Ocultar Elemento<p><br></p></button>
                    </p>

                    <div class="row">
                        <div id="mostrarDatos">

                        </div>

                    </div>

                </ul>

            </div>

        </article>


        </div>

        </div>

    </ar>
    <br>
    <br>
    <script>
        function cargarDatos(indicador) {
            document.getElementById('mostrarDatos').style.display="block";
            $("#mostrarDatos").load('/datos/' + indicador);


        }
        function ocultarDatos() {
            document.getElementById('mostrarDatos').style.display="none";

        }
    </script>

    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection