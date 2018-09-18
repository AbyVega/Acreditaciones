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
                                aria-expanded="false" aria-controls="multiCollapseExample2">Aulas y espacios para la <p>docencia, y su equipamiento</p></button>
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample3"
                            aria-expanded="false" aria-controls="multiCollapseExample3">Espacios específicos para la<p>realización de prácticas</p> </button>
                     <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample4"
                            aria-expanded="false" aria-controls="multiCollapseExample4">Otras instalaciones <p>fuera de la sede</p> </button>
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample4"
                            aria-expanded="false" aria-controls="multiCollapseExample5">Biblioteca <p>y acervo</p> </button>
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample4"
                            aria-expanded="false" aria-controls="multiCollapseExample6">Servicios <p>tecnológicos</p> </button>

                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target=".multi-collapse"
                            aria-expanded="false" aria-controls=" multiCollapseExample2 multiCollapseExample3
                                multiCollapseExample4 multiCollapseExample5 multiCollapseExample6 ">Ocultar Elementos<p><br></p></button>
                    </p>

                    <div class="row">
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.CI.Once1')

                                    </div>
                                </div>
                            </div>
                        </article>

                        <!--dos-->
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample3">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.CI.Once2')

                                    </div>

                                </div>
                            </div>
                        </article>




                        <!--tres-->
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample4">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.CI.Once3')

                                    </div>
                                </div>
                            </div>
                        </article>


                        <!--cuatro-->
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample5">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.CI.Once4')
                                    </div>

                                </div>
                            </div>
                        </article>

                        <!--cinco-->
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample6">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.CI.Once5')
                                    </div>

                                </div>
                            </div>
                        </article>

                        <!--seis-->
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample7">
                                    <div class="card card-body">

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