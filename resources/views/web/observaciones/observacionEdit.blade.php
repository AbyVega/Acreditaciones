@extends('layout.regis')
@section('content')

    <ar class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <!--botones-->
                <ul class="col-lg-12 col-md-12 col-sm-12">
                    <header>
                        <h3><a>Modificar Observaciones</a></h3>
                    </header>

                    <div class="row">
                        <article id="main">
                            <div class="col">

                                <div class="card card-body">
                                    <form action="{{route('Observacion.update', $observacion->id)}}" method="POST" enctype="application/x-www-form-urlencoded">
                                        {{csrf_field()}}
                                        @if(@empty($observacion))
                                        @else
                                            {{method_field('PUT')}}
                                        @endif

                                        <div class="form-row">
                                                <input type="hidden" class="form-control" id="inputAddress" name="id" value="{{$observacion->id}}" readonly>
                                            </div>
                                        <div class="form-row">
                                            <input type="hidden" class="form-control" id="inputAddress" name="fechaObserva" value="{{$observacion->fechaObserva}}" readonly>
                                        </div>
                                        <div class="form-row">
                                            <input type="hidden" class="form-control" id="inputAddress" name="proceso_id" value="{{$observacion->proceso_id}}" readonly>
                                        </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputAddress"><h4>Categoria.</h4></label>
                                                <input type="text" class="form-control" id="inputAddress" name="categorias_id" value="{{$observacion->Categorias->categoria}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4"><h4>Indicador</h4></label>
                                                <input type="text" class="form-control" id="inputPassword4" name="indicador_id" value="{{$observacion->Indicador->indicador}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4"><h4>Visita</h4></label>
                                                <input type="text" class="form-control" id="inputPassword4" name="visitas_id" value="{{$observacion->Visitas->visita}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputPassword4"><h4>Observación de la Incidencia</h4></label>
                                                <input type="text" class="form-control"  name="observaIncidencia" value="{{$observacion->observaIncidencia}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputPassword4"><h4>Acción a tomar</h4></label>
                                                <input type="text" class="form-control"  name="accionesTomar" value="{{$observacion->accionesTomar}}">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputEmail4"><h4>Tiempo de solución</h4></label>
                                            <input type="text" class="form-control" id="inputEmail4" name="tiempoSolucion" value="{{$observacion->tiempoSolucion}}">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4"><h4>Fecha Compromiso</h4></label>
                                            <input type="text" class="form-control" id="inputPassword4" name="fechaCompromiso" value="{{$observacion->fechaCompromiso}}">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4"><h4>Entidad responsable</h4></label>
                                            <input type="text" class="form-control" id="inputPassword4" name="Area_id" value="{{$observacion->Area->area}}">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4"><h4>Estado de la incidencia</h4></label>
                                            <input type="text" class="form-control" id="inputPassword4" name="estadoIncidencia" value="{{$observacion->estadoIncidencia}}">
                                        </div>


                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
                            <button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                            </form>


                    </div>
            </div>
        </article>
        </div>
        </ul>
        </div>
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