@extends('layout.regis')
@section('content')

    <ar class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <!--botones-->
                <ul class="col-lg-12 col-md-12 col-sm-12">
                    <header>
                        <h3><a>Modificar Entidad Acreditadora</a></h3>
                    </header>

                    <div class="row">
                        <article id="main">
                            <div class="col">

                                <div class="card card-body">
                                    <form action="{{route('Entidad.update', $entidad->id)}}" method="POST" enctype="application/x-www-form-urlencoded">
                                        {{csrf_field()}}
                                        @if(@empty($entidad))
                                        @else
                                            {{method_field('PUT')}}
                                        @endif

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputAddress"><h4>Numero</h4></label>
                                                <input type="text" class="form-control" id="inputAddress" name="id" value="{{$entidad->id}}" readonly>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputEmail4"><h4>Nombre</h4></label>
                                                <input type="text" class="form-control" id="inputEmail4" name="nombre" value="{{$entidad->nombre}}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4"><h4>Matricula</h4></label>
                                                <input type="text" class="form-control" id="inputPassword4" name="subOrganismo" value="{{$entidad->subOrganismo}}">
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