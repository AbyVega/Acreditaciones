@extends('layout.acred')
@section('content')

	<!-- Main -->

	<div class="wrapper style1">

		<div class="container">

			<div class="col-8 col-12-mobile imp-mobile" id="content">
				<article id="main">
					<form action="{{route('gestion.store')}}" method="POST">
						<header>
							<h3><a>Listado de Programas Acreditados</a></h3>
						</header>
						<header class="table-responsive">
							<table class="table table-striped table-bordered tabled-condensed table-hover">

								<thead>
								<tr>

									<th><h3>Programa educativo</h3></th>
									<th><h3>Organismo Acreditador</h3></th>
									<th><h3>No de Proceso</h3></th>
									<th><h3>Fecha Dictamen</h3></th>
									<th><h3>Fecha Vigencia</h3></th>
									<th><h3>Fecha Visita</h3></th>
									<th><h3>Calificacion</h3></th>
									<th><h3>Total de Observaciones</h3></th>
									<th><h3>Favorable</h3></th>
									<th><h3>Estado del programa</h3></th>
									<th><h3>Acciones_-_</h3></th>
									<th><h3>Asignar Observación</h3></th>

								</tr>
								</thead>
								<tr>
									<td class="bg-success"><select name="programaEducativo_id">
											<option>Selecciona</option>
											@foreach($programas as $programa)
												<option value="{{$programa->id}}">{{$programa->nombre}}</option>
											@endforeach
										</select></td>
									<td class="bg-success"><select name="entiAcreditadora_id">
											<option>Selecciona</option>
											@foreach($entidades as $entidad)
												<option value="{{$entidad->id}}">{{$entidad->nombre}}</option>
											@endforeach
										</select></td>
									<td class="bg-success"><select name="proceso_id">
											<option>Selecciona</option>
											@foreach($procesos as $proceso)
												<option value="{{$proceso->id}}">{{$proceso->id}}</option>
											@endforeach
										</select></td>
									<td class="bg-success"><input type="date"></td>
									<td class="bg-success"><select>
											<option value="volvo">TODOS</option>
											<option value="saab">E1</option>
											<option value="mercedes">E2</option>
											<option value="mercedes">E3</option>
										</select></td>
									<td class="bg-success"><select>
											<option value="volvo">TODOS</option>
											<option value="saab">Vigente</option>
											<option value="mercedes">No vigente</option>
										</select></td>
									<td class="bg-success"><input type="date" name="fecha"></td>
									<td class="bg-success"><select>
											<option value="volvo">TODOS</option>
											<option value="saab">Si</option>
											<option value="mercedes">No</option>
										</select></td>
									<td class="bg-success"><select>
											<option value="volvo">TODOS</option>
											<option value="saab">Si</option>
											<option value="mercedes">No</option>
										</select></td>
									<td class="bg-success"><select>
											<option value="volvo">TODOS</option>
											<option value="saab">E1</option>
											<option value="mercedes">E2</option>
											<option value="mercedes">E3</option>
										</select></td>
									<td class="bg-success">

										<a type="button" class="btn btn-secondary">
											<span class="glyphicon glyphicon-eye-open"></span></a>

										<a type="button" class="btn btn-secondary">
											<span class="glyphicon glyphicon-pencil"></span></a>

										<a type="button" class="btn btn-secondary">
											<span class="glyphicon glyphicon-trash"></span></a>



									</td>
									<td class="bg-success"><a href="{{route('Observacion.index')}}" type="button" class="btn btn-secondary">
											<span class="glyphicon glyphicon-plus"></span></a>

									</td>



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
								</tr>
							</table>

					</form>
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