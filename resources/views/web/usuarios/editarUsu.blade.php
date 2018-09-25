@extends('layout.regis')
@section('content')

    <ar class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <!--botones-->
                <ul class="col-lg-12 col-md-12 col-sm-12">
                    <header>
                        <h3><a>Modificar Usuarios</a></h3>
                    </header>

                    <div class="row">
                        <article id="main">
                            <div class="col">

                                    <div class="card card-body">
                                        <form action="{{route('Usuarios.update', $usuarios->id)}}" method="POST" enctype="application/x-www-form-urlencoded">
                                            {{csrf_field()}}
                                            @if(@empty($usuarios))
                                            @else
                                                {{method_field('PUT')}}
                                            @endif

                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="inputAddress"><h4>Codigo</h4></label>
                                                    <input type="text" class="form-control" id="inputAddress" name="id" required value="{{$usuarios->id}}">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmail4"><h4>Nombre</h4></label>
                                                    <input type="text" class="form-control" id="inputEmail4" name="nombre" required value="{{$usuarios->nombre}}">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputPassword4"><h4>Apellido Paterno</h4></label>
                                                    <input type="text" class="form-control" id="inputPassword4" name="apePaterno" required value="{{$usuarios->apePaterno}}">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputPassword4"><h4>Apellido Materno</h4></label>
                                                    <input type="text" class="form-control" id="inputPassword4" name="apeMaterno" required value="{{$usuarios->apeMaterno}}">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputEmail4"><h4>Tipo de Usuario</h4></label>
                                                <input type="text" class="form-control" id="inputEmail4" name="tipos_id" required value="{{$usuarios->tipos_id}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4"><h4>Area a la que pertenece</h4></label>
                                                <input type="text" class="form-control" id="inputPassword4" name="area" required value="{{$usuarios->area}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4"><h4>Programa educativo</h4></label>
                                                <input type="text" class="form-control" id="inputPassword4" name="programaEducativo_id" required value="{{$usuarios->programaEducativo_id}}">
                                            </div>

                                                <div class="form-group col-md-8">
                                                    <label for="inputCity"><h4>Email</h4></label>
                                                    <input type="email" class="form-control" id="inputCity" name="email" required value="{{$usuarios->email}}">
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label for="inputCity"><h4>Password</h4></label>
                                                        <input type="password" class="form-control" id="inputCity" name="password" required value="{{$usuarios->password}}">
                                                    </div>
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