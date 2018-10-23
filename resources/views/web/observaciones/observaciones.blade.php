@extends('layout.acred')
@section('content')
    <!-- Main -->

    <script>
        function cargarFecha() {
        var tiempo = document.getElementById("tiempoSolucion").value;
        var date = new Date();
        if(tiempo==1) {
            date.setFullYear(date.getFullYear() + 1);
        }
            if(tiempo==2) {
                date.setFullYear(date.getFullYear() + 2);
            }
            if(tiempo==3) {
                date.setFullYear(date.getFullYear() + 3);
            }
        console.log(date);
            var fecha = date.toLocaleDateString();
            document.getElementById("fechaCompromiso").value=fecha;
        }
    </script>

    <div class="wrapper style1">

        <div class="container">

            <div class="col-8 col-12-mobile imp-mobile" id="content">
                <article id="main">

    <form action="{{route('Observacion.store')}}" method="POST">


    <header>
        <h2><a href="#">Observaciones</a></h2>
    </header>
    <div class="table-responsive">
        <table class="table table-striped table-bordered tabled-condensed table-hover">
            <thead>

            <th><h3><a>No</a></h3></th>
            <th><h3><a>Categoria</a></h3></th>
            <th><h3><a>Indicador</a></h3></th>
            <th><h3><a>Incidencia</a></h3></th>
            <th><h3><a>Visita</a></h3></th>
            <th><h3><a>Fecha</a></h3></th>
            <th><h3><a>Acciónes a tomar</a></h3></th>
            <th><h3><a>Tiempo de Solución</a></h3></th>
            <th><h3><a>Fecha Compromiso</a></h3></th>
            <th><h3><a>Entidad Responsable</a></h3></th>
            <th><h3><a></a>Estado de Incidencia</h3></th>
            <th></th>

            </tr>
            </thead>
            <tr>
                <td class="bg-success"><input name="proceso_id"type="number" value="{{$id}}" readonly></td>
                <td class="bg-success"><select name="categorias_id" required class="mb-3" >
                        <option>Seleciona</option>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                        @endforeach
                    </select>
                </td>
                <td class="bg-success"><select name="indicador_id" required class="mb-3" >
                <option>Seleciona</option>
                @foreach($puntos as $punto)
                    <option value="{{$punto->id}}">{{$punto->indicador}}</option>
                    @endforeach
                    </select>
                </td>
                <td class="bg-success"><textarea name="observaIncidencia" type="text"></textarea></td>
                <td class="bg-success"><select name="visitas_id" required class="mb-3" >
                        <option>Seleciona</option>
                        @foreach($visitas as $visita)
                            <option value="{{$visita->id}}">{{$visita->visita}}</option>
                        @endforeach
                    </select>
                </td>
                <td class="bg-success"><input  name="fechaObserva" type="date" ></td>
                <td class="bg-success"><textarea name="accionesTomar" type="text"></textarea></td>
                <td class="bg-success"><select  id="tiempoSolucion"name="tiempoSolucion" onchange="cargarFecha()">
                        <option>Seleccione una opcion</option>
                        <option value="1 año">1 año</option>
                        <option value="2 años">2 años</option>
                        <option value="3 años">3 años</option>
                    </select></td>
                <td class="bg-success"><input id="fechaCompromiso" name="fechaCompromiso" type="text"></td>

                <td class="bg-success"><select name="Area_id">
                        @foreach($areas as $area)
                            <option value="{{$area->id}}">{{$area->area}}</option>
                        @endforeach

                    </select></td>
                <td class="bg-success"><select name="estadoIncidencia">
                        <option>Solventada</option>
                        <option>En proceso</option>
                        <option>No iniciada</option>
                    </select></td>

                <td class="bg-success"><button type="submit" class="btn btn-successt">
                        <span class="glyphicon glyphicon-ok"></span></button>
                    <button type="reset" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span></button>
                </td>
            </tr>
            {{csrf_field()}}
            <tr>
                <td colspan="14"><img src="images/formulario.png"  width="1300px" height="2px" /></td>
            </tr>
</form>
@foreach($observaciones as $observacion)
    <tr>


        <td>{{$observacion->id}}</td>
        <td>{{$observacion->Puntos->puntos}}</td>
        <td>{{$observacion->observaIncidencia}}</td>
        <td>{{$observacion->Visitas->visita}}</td>
        <td>{{$observacion->fechaObserva}}</td>
        <td>{{$observacion->fechaCompromiso}}</td>
        <td>{{$observacion->fechaCompromiso}}</td>
        <td>{{$observacion->Area->area}}</td>
        <td>{{$observacion->estadoIncidencia}}</td>
        <td>
            <form id="delete_Observacion" action="{{route('Observacion.destroy', $observacion->id)}}" method="POST" >
                <a href="{{route('Observacion.edit', $observacion->id)}}">
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
            </article>

        </div>



    </div>

    </div>


    </div>
    </body>
    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection