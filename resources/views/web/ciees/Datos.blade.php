
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <title>SIGECE</title>
    <noscript><link rel="stylesheet" type="text/css" href="{{asset('estilo/css/noscript.css')}}"></noscript>
    <link rel="stylesheet" type="text/css" href="{{asset('estilo/css/main.css')}}">
    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
    <script src="{{asset('estilo/js/bootstrap.js')}}"></script>
    <script src="{{asset('estilo/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('estilo/js/npm.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('estilo/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('estilo/css/bootstrap-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('estilo/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('estilo/css/bootstrap-theme.min.css')}}">

</head>
<body>
    <!-- Main -->
    <article class="wrapper style1">

        <article class="container">
            <div class="row gtr-200">

                <form action="{{route('Indica12.store')}}" method="POST" enctype="application/x-www-form-urlencoded">
                            <div class="form-row">

                      <div class="table-responsive">
                           <table class="table table-striped table-bordered tabled-condensed table-hover">
                               <input type="hidden" value="{{$guia}}" name="guia">
                                        @foreach($guia as $dato)
                                    <thead class="thead-dark">
                                          <tr>
                                                <th scope="col" colspan="2"><h4>Indicador</h4></th>
                                           </tr>
                                    </thead>
                         <tbody>

                              <tr>
                                    <th scope="row" width="550"></th>
                                    <th width="550">
                                        <input type="text" value="{{$id}}" name="indicador_id">
                                    </th>
                              </tr>
                           </tbody>
                                    <thead class="thead-dark">
                                          <tr>
                                               <th scope="col" colspan="2"><h4>Descripción</h4> </th>
                                          </tr>
                                    </thead>
                            <tbody>

                                 <tr>
                                       <th scope="row" width="150">{{$dato->descPunto}}</th>
                                     <th>  <textarea class="form-control" id="inputAddress" name="descripcion"></textarea>
                                       </th>
                                 </tr>
                           </tbody>

            <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="2"><h4>Instrucciones</h4></th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row" width="150">{{$dato->instrPunto}} </th>
                <th> <textarea class="form-control" id="inputAddress" name="instruccion"></textarea>
                </th>
            </tr>
            </tbody>

            <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="2"><h4>Valoración</h4>

                </th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row" width="150">{{$dato->valorPunto}} </th>
                <th><textarea class="form-control" id="inputAddress" name="valoracion"></textarea></th>
            </tr>
            </tbody>


            <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="2"><h4>Informacion Adicional</h4>
                </th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row" width="150"> {{$dato->adiPunto}}</th>
                <th> <textarea  class="form-control" id="inputAddress" name="adicional" ></textarea></th>
            </tr>
            </tbody>
                                   <thead class="thead-dark">
                                   <tr>
                                       <th scope="col" colspan="2"><h4>Asignar responsables</h4></th>
                                   </tr>
                                   </thead>
                                   <tbody>

                                   <tr>
                                       <th scope="row" width="150">
                                           {{$dato->responsables}}

                                       </th>

                                       <th>

                                           <select name="username" required class="mb-3" >
                                               <option>Seleciona</option>
                                               @foreach($usuarios as $usuario)
                                                   <option value="{{$usuario->email}}">{{$usuario->nombre}}</option>
                                               @endforeach
                                           </select>
                                         <button type="submit" class="btn btn-success">
                                                  <span class="glyphicon glyphicon-envelope"></span></button></a> </th>

                                   </tr>
                                   </tbody>
                                   <th>

            <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="2"><h4>Subir archivos</h4></th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <th scope="row" width="150">
                    {{$dato->docPunto}}

                </th>
                <th> <input type="file" class="form-control-file" id="inputAddress" name="documentos"></th>
            </tr>
            </tbody>
<th>
           <th><button type="submit" class="btn btn-success">
                <span class="glyphicon glyphicon-ok"></span></button>
            <button type="reset" class="btn btn-danger">
                <span class="glyphicon glyphicon-remove"></span></button></th>

            {{csrf_field()}}
</tr>
@endforeach
        </table>
    </div>

                            </div>
</form>

            </div>
        </article>
    </article>
</body>
</html>