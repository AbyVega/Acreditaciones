<form action="{{route('ProEdu.store')}}" method="POST">

    <header>
        <h2><a href="#">Programa Educativo</a></h2>
    </header>
    <div class="table-responsive">
        <table class="table table-striped table-bordered tabled-condensed table-hover">
            <thead>

            <th><h3><a>Clave</a></h3></th>
            <th><h3><a>Nombre</a></h3></th>
            <th><h3><a>Matricula</a></h3></th>
            <th><h3><a>Evaluable CIIES</a></h3></th>
            <th><h3><a>Evaluable COPAES</a></h3></th>
            <th><h3><a>Evaluable Internacional</a></h3>
            <th><h3><a>Status</a></h3></th>
            <th><h3><a>Tipo de programa</a></h3></th>
            <th><h3><a>Fecha Inicio</a></h3></th>
            <th><h3><a>Calificación</a></h3></th>
            <th><h3><a>Fecha de dictamen</a></h3></th>
            <th><h3><a>Fecha de vigencia</a></h3></th>
            <th><h3><a>Calidad</a></h3></th>
            <th></th>
            </tr>
            </thead>
            <tr>
                <td class="bg-success"><input name="id" type="text" placeholder="Ej. 214508414" required></td>
                <td class="bg-success"><input name="nombre" type="text" placeholder="Ej. Administracion" required></td>
                <td class="bg-success"><input name="matricula" type="text" placeholder="Ej. 345" required></td>
                <td class="bg-success"><select name="evaluableCIEES" required>
                        <option >Selecciona</option>
                        <option value="si">si</option>
                        <option value="no">no</option>


                    </select>
                </td>
                <td class="bg-success"><select name="evaluableCOPAES" required>
                        <option >Selecciona</option>
                        <option value="si">si</option>
                        <option value="no">no</option>

                    </select>
                </td>
                <td class="bg-success"><select name="evaluableInter" required>
                        <option >Selecciona</option>
                        <option value="si">si</option>
                        <option value="no">no</option>

                    </select></td>
                <td class="bg-success"><select name="status" required>
                        <option >Selecciona</option>
                        <option value="evaluable">Evaluable</option>
                        <option value="no evaluable">No evaluable</option>

                    </select>
                </td>
                <td class="bg-success"><select name="tipoPrograma" required>
                        <option >Selecciona</option>
                        <option value="licenciatura">Licenciatura</option>
                        <option value="Ingieneria">Ingieneria</option>
                        <option value="nivelacion">Nivelación</option>
                    </select>
                </td>
                <td class="bg-success"><input name="fechaInicio" type="date" placeholder="12/05/2018" required></td>
                <td class="bg-success"><select name="calificacion" required>
                        <option >Selecciona</option>
                        <option value="No tiene">No tiene</option>
                        <option value="E1">E1</option>
                        <option value="E2">E2</option>
                        <option value="E3">E3</option>
                    </select>
                </td>
                <td class="bg-success"><input name="fechaDictamen" type="date" required></td>
                <td class="bg-success"><input name="fechaVigencia" type="date" required></td>
                <td class="bg-success"><select name="calidad" required>
                        <option >Seleciona</option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select> </td>
                <td class="bg-success"><button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-ok"></span></button>
                    <button type="reset" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span></button>
                </td>
            </tr>
            <tr>
                <td  colspan="15"><img src="images/formulario.png"  width="1500px" height="2px" /></td>
            </tr>
    {{csrf_field()}}
</form>
@foreach($programas as $programa)

    <tr>
        <td>{{$programa->id}}</td>
        <td>{{$programa->nombre}}</td>
        <td>{{$programa->matricula}}</td>
        <td>{{$programa->evaluableCIEES}}</td>
        <td>{{$programa->evaluableCOPAES}}</td>
        <td>{{$programa->evaluableInter}}</td>
        <td>{{$programa->status}}</td>
        <td>{{$programa->tipoPrograma}}</td>
        <td>{{$programa->fechaInicio}}</td>
        <td>{{$programa->calificacion}}</td>
        <td>{{$programa->fechaDictamen}}</td>
        <td>{{$programa->fechaVigencia}}</td>
        <td>{{$programa->calidad}}</td>
        <td><form id="delete_pE" action="{{route('ProEdu.destroy', $programa->id)}}" method="POST" >

                <a href="{{route('ProEdu.edit', $programa->id)}}">
                    <button type="button" class="btn btn-secondary">
                        <span class="glyphicon glyphicon-pencil"></span></button>
                </a>

                <button type="submit" class="btn btn-dark">
                    <span class="glyphicon glyphicon-trash"></span></button>
                <input name="_method" type="hidden" value="DELETE">
                {{csrf_field()}}

            </form>
        </td>
    </tr>
    @endforeach

    </tr>

    </tbody>
    </table>
    </div>