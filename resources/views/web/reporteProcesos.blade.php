@extends('layout.acred')
@section('content')


			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
							
							<div class="col-lg-12 col-md-12 col-sm-12">
								<article id="main">
									<header>
										<h2><a href="#">Reporte de Procesos</a></h2>
									</header>
			<div class="table-responsive">
			    <table class="table table-striped table-bordered tabled-condensed table-hover">
					<thead>

				<th colspan="4"><h3><a>Datos Generales</a></h3></th>
				<th colspan="5"><h3><a>CIEES</a></h3></th>
				<th colspan="6"><h3><a>COPAES</a></h3></th>
				<th colspan="5"><h3><a>INTERNACIONAL</a></h3></th>
				<th colspan="3"></th>
		<tr>
			<th>Programa educativo</th>
			<th>Tipo de programa</th>
			<th>Fecha Inicio</th>
			<th>Evaluable CIEES</th>
			<th>Calificación</th>
			<th>Status</th>
			<th>Fecha vigencia</th>
			<th>Calidad</th>
			<th>Evaluable COPAES</th>
			<th>Calificación</th>
			<th>Status</th>
			<th>Fecha vigencia</th>
			<th>Calidad</th>
			<th>Organismo acreditador</th>
			<th>Evaluable Internacional</th>
			<th>Calificación</th>
			<th>Status</th>
			<th>Fecha vigencia</th>
			<th>Calidad</th>
			<th>Organismo acreditador</th>
		</tr>
		</thead>
		
		<tr>
			<td><select>
				<option value="volvo">TODOS</option>
  				<option value="volvo">Tecnologias de la Informacion</option>
 				 <option value="saab">Tabajo Social</option>
 				 <option value="mercedes">Turismo</option>
			</select>
		</td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">Nivelación</option>
  <option value="mercedes">Licenciatura</option>
</select>
</td>
			<td> 	
<input type="date" name="fecha"></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">Si</option>
  <option value="mercedes">No</option>
</select></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">E1</option>
  <option value="mercedes">E2</option>
    <option value="mercedes">E3</option>
</select></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">Vigente</option>
  <option value="mercedes">No vigente</option>
</select></td>
			<td><input type="date" name="fecha"></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">Si</option>
  <option value="mercedes">No</option>
</select></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">Si</option>
  <option value="mercedes">No</option>
</select></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">E1</option>
  <option value="mercedes">E2</option>
    <option value="mercedes">E3</option>
</select></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">Vigente</option>
  <option value="mercedes">No vigente</option>
</select></td>
			<td><input type="date" name="fecha"></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">Si</option>
  <option value="mercedes">No</option>
</select></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">ABETt</option>
  <option value="mercedes">CACEB</option>
</select></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">Si</option>
  <option value="mercedes">No</option>
</select></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">E1</option>
  <option value="mercedes">E2</option>
    <option value="mercedes">E3</option>
</select></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">Vigente</option>
  <option value="mercedes">No vigente</option>
</select></td>
			<td><input type="date" name="fecha"></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">Vigente</option>
  <option value="mercedes">No vigente</option>
</select></td>
			<td><select>
  <option value="volvo">TODOS</option>
  <option value="saab">ABETt</option>
  <option value="mercedes">CACEB</option>
</select></td>
<td><input type="submit" name="" value="Enviar"></td>
<td><input type="reset" name="" value="Cancelar"></td>

		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><form id="delete_usuario" action="" method="POST" >
					<a href="">
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

		</tbody>
	</table>
</div>
</article>
</div>
</div>

				</div>
<script src="{{asset('estilo/js/jquery.min.js')}}"></script>
        <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
        <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
        <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
        <script src="{{asset('estilo/js/browser.min.js')}}"></script>
        <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
        <script src="{{asset('estilo/js/util.js')}}"></script>
        <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection