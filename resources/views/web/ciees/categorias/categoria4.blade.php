@extends('layout.ciees')
@section('content')
    <!-- Main -->
    <ar class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <!--botones-->
                <ul class="col-lg-12 col-md-12 col-sm-12">


                    <p>
                        <button class="btn btn-success" type="button" onclick="cargarDatos('25')">Resultados en exámenes<p> de egresoexternos</p></button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('26')"> Nivel de dominio de <p>otras lenguas </p> </button>
                    <button class="btn btn-success" type="button"onclick="cargarDatos('27')">Participación <p>en   concursos</p> </button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('28')">Trabajos emblemáticos de <p>los estudiantes</p> </button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('29')">Certificaciones<p> externas obtenidas</p> </button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('30')">Cumplimiento del <p> perfil de egreso</p> </button>
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