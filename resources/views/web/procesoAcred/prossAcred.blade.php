<form action="{{route('Procesos.store')}}" method="POST">


    <header>
        <h2><a href="#">Procesos de acreditacion</a></h2>
    </header>
    <div class="table-responsive">
        <table class="table table-striped table-bordered tabled-condensed table-hover">
            <thead>

            <th><h3><a>No</a></h3></th>
            <th><h3><a>Estado del programa</a></h3></th>
            <th><h3><a>Versión del Instrumento</a></h3></th>
            <th><h3><a>Fecha de Inicio</a></h3></th>
            <th><h3><a>Entidad Acreditadora</a></h3></th>
            <th><h3><a>Programa Educativo</a></h3></th>
            <th><h3><a>Visita</a></h3></th>
            <th><h3><a></a>Status Financiero</h3></th>
            <th><h3><a></a>FIP de Cuota</h3></th>
            <th><h3><a>Cuota</a></h3></th>
            <th><h3><a>FIP de Viaticos</a></h3></th>
            <th><h3><a>Viaticos</a></h3></th>
            <th colspan="2"><h3><a>Material</a></h3></th>


            </tr>
            </thead>
            <tr>
                <td class="bg-success"><input name="id" type="hidden"></td>
                <td class="bg-success"><input name="estadoPrograma" type="text"></td>
                <td class="bg-success"><input name="versionIntrumento" type="number"></td>
                <td class="bg-success"><input name="fechaInicio" type="date"></td>
                <td class="bg-success"><select name="entiAcreditadora_id">
                        @foreach($entidades as $entidad)
                            <option value="{{$entidad->id}}">{{$entidad->nombre}}</option>
                        @endforeach
                    </select></td>
                <td class="bg-success"><select name="programaEducativo_id">
                        @foreach($programas as $programa)
                            <option value="{{$programa->id}}">{{$programa->nombre}}</option>
                        @endforeach
                    </select></td>
                <td class="bg-success"><select name="visita_id">
                        @foreach($visitas as $visita)
                            <option value="{{$visita->id}}">{{$visita->visita}}</option>
                        @endforeach
                    </select></td>
                <td class="bg-success"><input name="Fianciero" type="text"></td>
                <td class="bg-success"><input name="FIPCuota" type="number"></td>
                <td class="bg-success"><input name="cuota" type="number"></td>
                <td class="bg-success"><input name="FIPViaticos" type="number"></td>
                <td class="bg-success"><input name="viaticos" type="number"></td>
                <td class="bg-success"><input name="material" type="number"></td>

                <td><button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-ok"></span></button>
                    <button type="reset" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span></button>
                </td>
            </tr>
            {{csrf_field()}}
            <tr>
                <td colspan="14"><img src="images/formulario.png"  width="1500px" height="2px" /></td>
            </tr>
</form>
@foreach($procesos as $proceso)
    <tr>


        <td>{{$proceso->id}}</td>
        <td>{{$proceso->estadoPrograma}}</td>
        <td>{{$proceso->versionIntrumento}}</td>
        <td>{{$proceso->fechaInicio}}</td>
        <td>{{$proceso->Entidad->nombre}}</td>
        <td>{{$proceso->Programa->nombre}}</td>
        <td>{{$proceso->Visitas->visita}}</td>
        <td>{{$proceso->statusFinanciero}}</td>
        <td>{{$proceso->FIPCuota}}</td>
        <td>{{$proceso->cuota}}</td>
        <td>{{$proceso->FIPViaticos}}</td>
        <td>{{$proceso->viaticos}}</td>
        <td>{{$proceso->material}}</td>
        <td><form id="delete_Proceso" action="{{route('Procesos.destroy', $proceso->id)}}" method="POST" >
                <a href="{{route('Procesos.edit', $proceso->id)}}">
                    <button type="button" class="btn btn-secondary">
                        <span class="glyphicon glyphicon-pencil"></span></button>
                </a>
                <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span></button>
                <input name="_method" type="hidden" value="DELETE">
                {{csrf_field()}}

            </form>
        </td>
    </tr>
    @endforeach

    </tbody>
    </table>
    </div>