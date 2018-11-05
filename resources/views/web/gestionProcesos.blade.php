@extends('layout.acred')
@section('content')

	<!-- Main -->

	<div class="wrapper style1">

		<div class="container">

			<div class="col-8 col-12-mobile imp-mobile" id="content">
				<article id="main">
					<form>
						<header>
							<h2><a>Reporte de procesos de acreditación</a></h2>
						</header>
						<header class="table-responsive">
							<table class="table table-striped table-bordered tabled-condensed table-hover">

								<thead>
								<tr>

									<th><h3>Programa educativo</h3></th>
									<th><h3>Organismo Acreditador</h3></th>
									<th><h3>Fecha Dictamen</h3></th>
									<th><h3>Fecha Vigencia</h3></th>
									<th><h3>Fecha Visita</h3></th>
									<th><h3>Calificación</h3></th>
									<th><h3>Total de Observaciones</h3></th>
									<th><h3>Favorable</h3></th>
									<th><h3>Estado del programa</h3></th>
									<!--<th><h3>Acciones</h3></th>-->
									<th><h3>Asignar Observación</h3></th>

								</tr>
								</thead>
								<tr>
									<!--<td  colspan="9" class="bg-success"><input type="search"></td>
									<td class="bg-success"></td>
									<td class="bg-success"></td>-->
								<tr>
									<td colspan="14"><img src="images/formulario.png"  width="1300px" height="2px" /></td>
								</tr>
										</tr>
								@foreach($procesos AS $proceso)

									<?php $size = count($proceso->Observacion);
									?>
								<tr>
									<td>{{$proceso->Programa->nombre}}</td>
									<td>{{$proceso->Entidad->nombre}}</td>
									<td>{{$proceso->Programa->fechaDictamen}}</td>
									<td>{{$proceso->Programa->fechaVigencia}}</td>
									<td>{{$proceso->Programa->fechaInicio}}</td>
									<td>{{$proceso->Programa->calificacion}}</td>
									<td>{{$size}}</td>
									<td>{{$proceso->Programa->calidad}}</td>
									<td>{{$proceso->Programa->status}}</td>
									<!--<td class="bg-success">

										<a type="button" class="btn btn-secondary">
											<span class="glyphicon glyphicon-eye-open"></span></a>
<br>
										<a type="button" class="btn btn-secondary">
											<span class="glyphicon glyphicon-pencil"></span></a>
<br>
										<a type="button" class="btn btn-secondary">
											<span class="glyphicon glyphicon-trash"></span></a>



									</td>-->
									<td class="bg-success"><a href="{{route('Observacion.crearObservacion', $proceso->id)}}" type="button" class="btn btn-secondary">
											<span class="glyphicon glyphicon-plus"></span></a>

									</td>


								</tr>
									@endforeach
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