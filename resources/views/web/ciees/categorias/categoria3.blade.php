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
                                aria-expanded="false" aria-controls="multiCollapseExample2">Estrategias de  <p>difución y promoción</p></button>
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample3"
                            aria-expanded="false" aria-controls="multiCollapseExample3">Procedimiento de ingreso <p>de los estudiantes</p> </button>
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample4"
                            aria-expanded="false" aria-controls="multiCollapseExample4">Programas de regularización, <p>acciones de nivelación o apoyo </p> </button>

                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target=".multi-collapse"
                            aria-expanded="false" aria-controls=" multiCollapseExample2 multiCollapseExample3
                                multiCollapseExample4 ">Ocultar Elementos<p><br></p></button>
                    </p>

                    <div class="row">
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.T.Cinco1')

                                    </div>
                                </div>
                            </div>
                        </article>

                        <!--dos-->
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample3">
                                    <div class="card card-body">

                                        @include ('web.ciees.indicadores.T.Cinco2')

                                    </div>

                                </div>
                            </div>
                        </article>




                        <!--tres-->
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample4">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.T.Cinco3')

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