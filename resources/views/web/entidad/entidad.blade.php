
<form action="{{route('Entidad.store')}}" method="POST">

    @if(@empty($entidad))
        @else
        {{method_field('PUT')}}
    @endif
    @if(count($errors))
        <div id="message" class="alert alert-danger text-left">
            <a onclick="fadeMessage()" class="close" title="close">x</a>
            <div class="alert-icon">
                <i class="material-icons">error_outline</i>
            </div>
            <span>Ha dejado campos vacíos</span>
        </div>
        @endif


    <header>
        <h2><a href="#">Entidad Acreditadora</a></h2>
    </header>
    <div class="table-responsive">
        <table class="table table-striped table-bordered tabled-condensed table-hover">
            <thead>

            <th><h3><a>Codigo</a></h3></th>
            <th><h3><a>Organismo</a></h3></th>
            <th colspan="2"><h3><a>Dependencia</a></h3></th>
            </tr>
            </thead>
            <tr>
                <td class="bg-success"><input name="id" type="text" value=""></td>
                <td class="bg-success"><input name="nombre" type="text"></td>
                <td class="bg-success"><input name="subOrganismo" type="text"></td>
                <td class="bg-success"><button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-ok"></span></button>
                    <button type="reset" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span></button>
                </td>
            </tr>
            {{csrf_field()}}
            <tr>
                <td colspan="4"><img src="images/formulario.png"  width="700px" height="2px" /></td>
            </tr>
</form>
@foreach($entidades as $entidad)
    <tr>


        <td>{{$entidad->id}}</td>
        <td>{{$entidad->nombre}}</td>
        <td>{{$entidad->subOrganismo}}</td>
        <td><form id="delete_Entidad" action="{{route('Entidad.destroy', $entidad->id)}}" method="POST" >
                <a href="{{route('Entidad.edit', $entidad->id)}}">
                    <button type="button" class="btn btn-secondary">
                        <span class="glyphicon glyphicon-pencil"></span></button>
                    {{csrf_field()}}
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