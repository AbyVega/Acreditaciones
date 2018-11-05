@extends('layout.ciees')
@section('content')
    <!-- Main -->
    <ar class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <!--botones-->
                <ul class="col-lg-12 col-md-12 col-sm-12">


                    <p>
                        <button class="btn btn-success" type="button"  onclick="cargarDatos('1')">Proposito <p>del programa</p></button>
                        <button class="btn btn-success" type="button" onclick="cargarDatos('2')">Fundamentación de la<p>necesidad del programa</p> </button>
                        <button class="btn btn-success" type="button" onclick="cargarDatos('3')">Plan de desarrollo<p>del programa</p> </button>
                        <button class="btn btn-success" type="button" onclick="cargarDatos('4')">Perfil de egreso<p><br></p></button>

                    <button class="btn btn-success" type="button" onclick="ocultarDatos()">Ocultar Elementos<p><br></p></button>
                    </p>

                    <div id="mostrarDatos">

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