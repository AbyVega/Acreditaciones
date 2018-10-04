@extends('layout.ciees')
@section('content')


    <script >
        function cargarAjax() {


            var indicador = document.getElementById("guia").value;
            console.log(":" + indicador);

            $("#Guia").load('/Guia/' + indicador);
        }
    </script>
    <!-- Main -->
    <article class="wrapper style1">

        <article class="container">
            <div class="text-center">


                            <div class="text-center">
                                <div class="text-center">
                                    <header>
                                         <h2>
                                             <a href="#">Autoevaluación de Programas de Educación Superior 2018
                                             </a>
                                         </h2>
                                    </header>
                                 <div class="table-responsive">

                                         <label><h4>Indicador</h4>


                                           <select style="width: 1100px;"  name="indicador" class="form-control" id="guia" onchange="cargarAjax()">
                                               <option value="">seleccione una opcion</option>
                                                  @foreach($indicadores as $indicador)
                                                 <option value="{{$indicador->id}}">{{$indicador->indicador}}</option>
                                                  @endforeach
                                           </select>
                                         </label>

                                  </div>
                                </div>
                            </div>

                <div id="Guia">

                </div>


            </div>
        </article>
    </article>
   
    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection