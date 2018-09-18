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
                                aria-expanded="false" aria-controls="multiCollapseExample2">Programa de titulación u <p>obtención del grado</p></button>
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample3"
                            aria-expanded="false" aria-controls="multiCollapseExample3">Orientación para el tránsito <p>a la vida profesional </p> </button>

                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target=".multi-collapse"
                            aria-expanded="false" aria-controls=" multiCollapseExample2 multiCollapseExample3">Ocultar Elementos<p><br></p></button>
                    </p>

                    <div class="row">
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.T.Siete1')

                                    </div>
                                </div>
                            </div>
                        </article>

                        <!--dos-->
                        <article id="main">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample3">
                                    <div class="card card-body">
                                        @include ('web.ciees.indicadores.T.Siete2')

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