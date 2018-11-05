<form action="" method="POST">
    <header>
        <h2>{{$nombre->indicador}}</h2>
    </header>
    <div class="table-responsive">

        @if(!@empty($datos))
        <table class="table table-striped table-bordered tabled-condensed table-hover">

            <thead class="thead-dark">
            <tr>
                <th scope="col">Programa Educativo</th>
                <th scope="col">Indicador</th>
                <th scope="col">Descripción</th>
                <th scope="col">Intrucciones</th>
                <th scope="col">Valoración de los evaluadores</th>
                <th scope="col">Información adicional</th>
                <th scope="col" >Archivos</th>
                <th scope="col" > <a href="{{route('Indica12.store')}}">
                        <button type="button" class="btn btn-secondary">
                            <span class="glyphicon glyphicon-plus"></span></button>
                        {{csrf_field()}}
                    </a></th>
            </tr>
            </thead>
            <tbody>

            @foreach($datos as $dato)


                <tr>
                    <th scope="row">{{$nombrePrograma}}</th>
                    <td>{{$dato->Indicadores->indicador}}</td>
                    <td>{{$dato->descripcion}}</td>
                    <td>{{$dato->instruccion}}</td>
                    <td>{{$dato->valoracion}}</td>
                    <td>{{$dato->adicional}}</td>
                    <td>{{$dato->documentos}}</td>
                    <td>
                        <form id="delete_Entidad" action="{{route('Indica12.destroy', $dato->id)}}" method="POST" >
                            <a href="{{route('Indica12.edit', $dato->id)}}">
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
            @else
        <h2>No hay datos</h2>
        @endif
    </div>
</form>