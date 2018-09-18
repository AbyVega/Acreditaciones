@extends('layout.ciees')
@section('content')
    <!-- Main -->
    <ar class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <!--botones-->
                <ul class="col-lg-12 col-md-12 col-sm-12">


                    <p>
                        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample2"
                                aria-expanded="false" aria-controls="multiCollapseExample2">Control del desempeño de los  <p>estudiantes dentro del programa</p></button>
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample3"
                            aria-expanded="false" aria-controls="multiCollapseExample3">Servicios de tutoría <p>y asesoría académica</p> </button>
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample4"
                            aria-expanded="false" aria-controls="multiCollapseExample4">Prácticas, estancias o visitas <p>en el sector empleador</p> </button>

                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target=".multi-collapse"
                            aria-expanded="false" aria-controls=" multiCollapseExample2 multiCollapseExample3
                                multiCollapseExample4 multiCollapseExample5 ">Ocultar Elementos<p><br></p></button>
                    </p>

                    <div class="row">
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.T.Seis1')

                                    </div>
                                </div>
                            </div>
                        </article>

                        <!--dos-->
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample3">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.T.Seis2')

                                    </div>

                                </div>
                            </div>
                        </article>




                        <!--tres-->
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample4">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.T.Seis3')

                                    </div>
                                </div>
                            </div>
                        </article>




                        <!--fin-->
                    </div>

                </ul>

            </div>

        </article>


        </div>

        </div>

    </ar>
    <br>
    <br>

    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection