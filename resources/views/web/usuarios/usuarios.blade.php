@include('sweetalert::alert')
<form id="delete_form" action="{{route('Usuarios.store')}}" method="POST">



<header>
                            <h3><a>Usuarios</a></h3>
                        </header>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered tabled-condensed table-hover">

                                <thead>
                                <tr>

                                    <th><h3><a>Codigo</a></h3></th>
                                    <th><h3><a>Nombre</a></h3></th>
                                    <th><h3><a>Apellido Paterno</a></h3></th>
                                    <th><h3><a>Apellido Materno</a></h3></th>
                                    <th><h3><a>Tipo de Usuario</a></h3></th>
                                    <th><h3><a>Email</a></h3></th>
                                    <th><h3><a>Area</a></h3></th>
                                    <th colspan="2"><h3><a>Programa Educativo</a></h3></th>
                                </tr>
                                </thead>
                                <tr>
                                    <td class="bg-success"><input name="id" type="number" placeholder="Ej. 214508414" required></td>
                                    <td class="bg-success"><input name="nombre" type="text" placeholder="Ej. Sibel" required></td>
                                    <td class="bg-success"><input name="apePaterno" type="text" placeholder="Ej. Ortiz" required></td>
                                    <td class="bg-success"><input name="apeMaterno" type="text" placeholder="Ej. Ortiz" required></td>
                                    <td class="bg-success">



                                        <select name="tipos_id" required class="mb-3" >
                                            <option>Seleciona</option>
                                            @foreach($tipos as $tipo)
                                                <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="bg-success"><input name="email" type="email" placeholder="Ej. sibel@gmail.com" required></td>

                                    <td class="bg-success"><select name="Area_id" required>
                                            <option>Seleciona</option>
                                            @foreach($areas as $area)
                                                <option value="{{$area->id}}">{{$area->area}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="bg-success"><select name="programaEducativo_id" required>
                                            <option>Selecciona</option>
                                            @foreach($programas as $programa)
                                                <option value="{{$programa->id}}">{{$programa->nombre}}</option>
                                            @endforeach

                                        </select>
                                    </td>
                                    <td class="bg-success"><button type="submit" class="btn btn-success">
                                            <span class="glyphicon glyphicon-ok"></span></button>
                                        <button type="reset" class="btn btn-danger">
                                            <span class="glyphicon glyphicon-remove"></span></button>


                                    </td>
                                    {{csrf_field()}}
                                </tr>
                            </form>
                                <tr>
                                    <td colspan="10"><img src="images/formulario.png"  width="1200px" height="2px" /></td>
                                </tr>

                    @foreach($usuarios as $usuario)
                                    @if(session('alert'))
                                        <div id="message" class="alert alert-success">
                                            <a href="#" onclick="fadeMessage()" class="close" title="close">x</a>
                                            {{session('alert')}}
                                        </div>
                                    @endif
                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->nombre}}</td>
                            <td>{{$usuario->apePaterno}}</td>
                            <td>{{$usuario->apeMaterno}}</td>
                            <td>{{$usuario->Tipos->tipo}}</td>
                            <td>{{$usuario->email}}</td>

                            <td>{{$usuario->Area->area}}</td>
                            <td>{{$usuario->Programa->nombre}}</td>
                            <td><form id="delete_form{{$usuario->id}}"  method="POST" onsubmit="return deleteElement(
              '¿Está seguro de querer eliminar el evento {{$usuario->nombre}}?',
              'delete_form_{{$usuario->id}}', event);
              ">
                                    <a href="{{route('Usuarios.edit', $usuario->id)}}">
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

                        </table>

