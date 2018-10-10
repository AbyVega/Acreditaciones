@extends('layout.ciees')
@section('content')

    <!-- Main -->
    <article class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <form action="{{route('Fortaleza.update', $fortalezas->id)}}" method="POST" enctype="application/x-www-form-urlencoded">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <header>
                                <h2><a href="#">Autoevaluación de Programas de Educación Superior 2018
                                    </a></h2>
                            </header>
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered tabled-condensed table-hover">

                                    <thead class="thead-dark">
                                    <tr> {{method_field('PUT')}}
                                        <th scope="col" colspan="2"><h4>Categorias</h4></th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <th scope="row" width="550"></th>
                                            <th width="550">
                                                <input type="text" class="form-control" id="inputAddress" name="indicadores_id" value="{{$fortalezas->Categorias->categoria}}" readonly>
                                            </th>
                                        </tr>
                                    </tbody>
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" colspan="2"><h4>Fortalezas</h4></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <th scope="row" width="150"></th>
                                        <th>  <textarea class="form-control" id="inputAddress" name="descripcion">{{$fortalezas->fortalezas}}</textarea>
                                        </th>
                                    </tr>
                                    </tbody>

                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" colspan="2"><h4>Oportunidad de mejora</h4></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <th scope="row" width="150"></th>
                                        <th> <textarea class="form-control" id="inputAddress" name="instruccion">{{$fortalezas->oportunidad}}</textarea>
                                        </th>
                                    </tr>
                                    </tbody>

                                    <tr>

                                    <th><button type="submit" class="btn btn-success">
                                            <span class="glyphicon glyphicon-ok"></span></button>
                                        <button type="reset" class="btn btn-danger">
                                            <span class="glyphicon glyphicon-remove"></span></button></th>

                                    {{csrf_field()}}
                                    </tr>

                                </table>
                            </div>
                </form>

            </div>
        </article>
    </article>


    </div>
    </body>
    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection