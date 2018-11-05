@extends('layout.ciees')
@section('content')
    <!-- Main -->
    <ar class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <!--botones-->
                <ul class="col-lg-12 col-md-12 col-sm-12">


                    <p>
                        <button class="btn btn-success" type="button" onclick="cargarDatos('39') ">Aulas y espacios para la <p>docencia, y su equipamiento</p></button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('40')"">Espacios específicos para la<p>realización de prácticas</p> </button>
                     <button class="btn btn-success" type="button" onclick="cargarDatos('41')">Otras instalaciones <p>fuera de la sede</p> </button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('42')">Biblioteca <p>y acervo</p> </button>
                    <button class="btn btn-success" type="button" onclick="cargarDatos('43')"">Servicios <p>tecnológicos</p> </button>

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