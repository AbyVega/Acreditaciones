@extends('layout.ciees')
@section('content')
    <!-- Main -->
    <ar class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <!--botones-->
                <ul class="col-lg-12 col-md-12 col-sm-12">


                    <p>
                        <button class="btn btn-success" type="button" onclick="cargarDatos('31')">Deserción<p>escolar</p></button>
                    <button class="btn btn-success" type="button"onclick="cargarDatos('32')">Eficiencia terminal y <p>eficiencia en la titulación </p> </button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('33')">Empleabilidad de las <p>cohortes recientes</p> </button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('34')">Egresados cursando <p>estudios de posgrado</p> </button>
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample6"
                            aria-expanded="false" aria-controls="multiCollapseExample6">Opinión de<p>los egresados</p> </button>

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