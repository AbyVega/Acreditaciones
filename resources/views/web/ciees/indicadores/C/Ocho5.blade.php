<form>
    <header>
        <h2><a href="#">Certificaciones externas obtenidas</a></h2>
    </header>
    <div class="table-responsive">
        <table class="table table-striped table-bordered tabled-condensed table-hover">

            <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Indicador</th>
                <th scope="col">Descripción</th>
                <th scope="col">Intrucciones</th>
                <th scope="col">Valoración de los evaluadores</th>
                <th scope="col">Información adicional</th>
                <th scope="col">Archivos</th>
                <th scope="col" > <a href="{{route('Indica12.store')}}">
                        <button type="button" class="btn btn-secondary">
                            <span class="glyphicon glyphicon-plus"></span></button>
                        {{csrf_field()}}
                    </a></th>
            </tr>
            </thead>
            <tbody>

            @foreach($consultas85 as $consulta85)


                <tr>
                    <th scope="row">{{$consulta85->id}}</th>
                    <td>{{$consulta85->indicador_id}}</td>
                    <td>{{$consulta85->descripcion}}</td>
                    <td>{{$consulta85->instruccion}}</td>
                    <td>{{$consulta85->valoracion}}</td>
                    <td>{{$consulta85->adicional}}</td>
                    <td>{{$consulta85->documentos}}</td>
                    <td>
                        <form id="delete_Entidad" action="{{route('Indica12.destroy', $consulta85->id)}}" method="POST" >
                            <a href="{{route('Indica12.edit', $consulta85->id)}}">
                                <button type="button" class="btn btn-secondary">
                                    <span class="glyphicon glyphicon-pencil"></span></button>
                                {{csrf_field()}}
                            </a>
                            <button type="submit" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span></button>
                            <input name="_method" type="hidden" value="DELETE">
                            {{csrf_field()}}

                        </form></td>
                </tr>

                {{csrf_field()}}
            @endforeach
            </tbody>
        </table>
    </div>
</form>