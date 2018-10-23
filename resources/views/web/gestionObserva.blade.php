@extends('layout.acred')
@section('content')

	<!-- Main -->

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

								<th><h3><a>No de proceso</a></h3></th>
								<th><h3><a>Programa educativo</a></h3></th>
								<th><h3><a>Categoria</a></h3></th>
								<th><h3><a>Indicador</a></h3></th>
								<th><h3><a>Incidencia</a></h3></th>
								<th><h3><a>Fecha</a></h3></th>
								<th><h3><a>Accion a tomar</a></h3></th>
								<th><h3><a>Tiempo de Solución</a></h3></th>
								<th><h3><a>Fecha Compromiso</a></h3></th>
								<th><h3><a>Entidad Responsable</a></h3></th>
								<th colspan="2"><h3><a></a>Estado de Incidencia</h3></th>

								</tr>
								</thead>
								<tr>
									<td colspan="13" class="bg-success"><input type="search" ></td>

									<td class="bg-success"><button type="submit" class="btn btn-successt">
											<span class="glyphicon glyphicon-search"></span></button>
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


							<td>{{$observacion->proceso_id}}</td>
							<?php
							$band=0;
							while ($band==0){
							    foreach ($programas as $programa){
							        if($programa->id == $observacion->Procesos->programaEducativo_id){
							            $nombre = $programa->nombre;
							            $band =1;
									}
								}
							}
							?>
							<td>{{$nombre}}</td>
							<td>{{$observacion->Categorias->categoria}}</td>
							<td>{{$observacion->Puntos->indicador}}</td>
							<td>{{$observacion->observaIncidencia}}</td>
							<td>{{$observacion->fechaObserva}}</td>
							<td>{{$observacion->accionesTomar}}</td>
							<td>{{$observacion->fechaCompromiso}}</td>
							<td>{{$observacion->fechaCompromiso}}</td>
							<td>{{$observacion->Area->area}}</td>
							<td>{{$observacion->estadoIncidencia}}</td>
							<td>
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