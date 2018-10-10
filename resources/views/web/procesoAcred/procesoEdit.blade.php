@extends('layout.regis')
@section('content')

    <ar class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <!--botones-->
                <ul class="col-lg-12 col-md-12 col-sm-12">
                    <header>
                        <h3><a>Modificar Procesos de Acreditacion</a></h3>
                    </header>

                    <div class="row">
                        <article id="main">
                            <div class="col">

                                <div class="card card-body">
                                    <form action="{{route('Procesos.update', $proceso->id)}}" method="POST" enctype="application/x-www-form-urlencoded">
                                        {{csrf_field()}}
                                        @if(@empty($proceso))
                                        @else
                                            {{method_field('PUT')}}
                                        @endif

                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="inputAddress"><h4>Numero</h4></label>
                                                <input type="text" class="form-control" id="inputAddress" name="id" value="{{$proceso->id}}" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4"><h4>Estado del programa</h4></label>
                                                <input type="text" class="form-control" id="inputEmail4" name="estadoPrograma" value="{{$proceso->estadoPrograma}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4"><h4>Versión del Instrumento</h4></label>
                                                <input type="text" class="form-control" id="inputPassword4" name="versionInstrumento" value="{{$proceso->versionIntrumento}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4"><h4>Fecha de Inicio</h4></label>
                                                <input type="text" class="form-control" id="inputPassword4" name="fechaInicio" value="{{$proceso->fechaInicio}}">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4"><h4>Entidad Acreditadora</h4></label>
                                            <input type="text" class="form-control" id="inputEmail4" name="entiAcreditadora_id" value="{{$proceso->entiAcreditadora_id}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4"><h4>Programa educativo</h4></label>
                                            <input type="text" class="form-control" id="inputPassword4" name="programaEducativo_id" value="{{$proceso->programaEducativo_id}}">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputCity"><h4>Status Financiero</h4></label>
                                            <input type="text" class="form-control" id="inputCity" name="statusFinanciero" value="{{$proceso->statusFinanciero}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity"><h4>FIP Cuota</h4></label>
                                            <input type="text" class="form-control" id="inputCity" name="FIPCuota" value="{{$proceso->FIPCuota}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity"><h4>Cuota</h4></label>
                                            <input type="text" class="form-control" id="inputCity" name="cuota" value="{{$proceso->cuota}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity"><h4>FIP Viaticos</h4></label>
                                            <input type="text" class="form-control" id="inputCity" name="FIPViaticos" value="{{$proceso->FIPViaticos}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity"><h4>Viaticos</h4></label>
                                            <input type="text" class="form-control" id="inputCity" name="viaticos" value="{{$proceso->viaticos}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity"><h4>Material</h4></label>
                                            <input type="text" class="form-control" id="inputCity" name="material" value="{{$proceso->material}}">
                                        </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
                            <button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                            </form>



        </article>
        </div>
        </ul>
        </div>
        </article>
    </ar>
    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection