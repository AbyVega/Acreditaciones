@extends('layout.regis')
@section('content')

    <ar class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <!--botones-->
                <ul class="col-lg-12 col-md-12 col-sm-12">
                    <header>
                        <h3><a>Modificar Programa Educativo</a></h3>
                    </header>

                    <div class="row">
                        <article id="main">
                            <div class="col">

                                <div class="card card-body">
                                    <form action="{{route('ProEdu.update', $programas->id)}}" method="POST" enctype="application/x-www-form-urlencoded">
                                        {{csrf_field()}}
                                        @if(@empty($programas))
                                        @else
                                            {{method_field('PUT')}}
                                        @endif

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputAddress"><h4>Numero</h4></label>
                                                <input type="text" class="form-control" id="inputAddress" name="id" value="{{$programas->id}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputEmail4"><h4>Nombre</h4></label>
                                                <input type="text" class="form-control" id="inputEmail4" name="nombre" value="{{$programas->nombre}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4"><h4>Matricula</h4></label>
                                                <input type="text" class="form-control" id="inputPassword4" name="matricula" value="{{$programas->matricula}}">
                                            </div>
                                        </div>
                                        <div class="form-group>
                                            <label for="inputCity"><h4>Tipo de Programa Educativo</h4></label>
                                        <input type="text" class="form-control" id="inputCity" name="tipoPrograma" value="{{$programas->tipoPrograma}}">
                                </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4"><h4>Evaluable por CIEES</h4></label>
                                                <input type="text" class="form-control" id="inputPassword4" name="evaluableCIEES" value="{{$programas->evaluableCIEES}}">
                                            </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4"><h4>Evaluable por COPAES</h4></label>
                                            <input type="text" class="form-control" id="inputEmail4" name="evaluableCOPAES" value="{{$programas->evaluableCOPAES}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4"><h4>Evalueble Internacional</h4></label>
                                            <input type="text" class="form-control" id="inputPassword4" name="evaluableInter" value="{{$programas->evaluableInter}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4"><h4>Status</h4></label>
                                            <input type="text" class="form-control" id="inputPassword4" name="status" value="{{$programas->status}}">
                                        </div>


                                        <div class="form-group col-md-4">
                                            <label for="inputCity"><h4>Fecha de Inicio</h4></label>
                                            <input type="text" class="form-control" id="inputCity" name="fechaInicio" value="{{$programas->fechaInicio}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity"><h4>Calificación </h4></label>
                                            <input type="text" class="form-control" id="inputCity" name="calificacion" value="{{$programas->calificacion}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity"><h4>Fecha de Dictamen</h4></label>
                                            <input type="text" class="form-control" id="inputCity" name="fechaDictamen" value="{{$programas->fechaDictamen}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity"><h4>Fecha de Vigencia</h4></label>
                                            <input type="text" class="form-control" id="inputCity" name="fechaVigencia" value="{{$programas->fechaVijencia}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity"><h4>Calidad</h4></label>
                                            <input type="text" class="form-control" id="inputCity" name="calidad" value="{{$programas->calidad}}">
                                        </div>

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