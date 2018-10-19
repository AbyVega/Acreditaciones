@extends('layout.acred')
@section('content')


			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
							
							<div class="col-lg-12 col-md-12 col-sm-12">
								<article id="main">
									<form action="{{route('ProEdu.store')}}" method="POST">

										<header>
											<h2><a href="#">Reporte de procesos de acreditación</a></h2>
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
			<th><h4>Programa educativo</h4></th>
			<th><h4>Tipo de programa</h4></th>
			<th><h4>Fecha Inicio</h4></th>
			<th><h4>Evaluable CIEES</h4></th>
			<th><h4>Calificación</h4></th>
			<th><h4>Status</h4></th>
			<th><h4>Fecha vigencia</h4></th>
			<th><h4></h4>Calidad</th></th>
			<th><h4>Evaluable COPAES</h4></th>
			<th><h4>Calificación</h4></th>
			<th><h4>Status</h4></th>
			<th><h4>Fecha vigencia</h4></th>
			<th><h4>Calidad</h4></th>
			<th><h4>Organismo acreditador</h4></th>
			<th><h4>Evaluable Internacional</h4></th>
			<th><h4>Calificación</h4></th>
			<th><h4>Status</h4></th>
			<th><h4>Fecha vigencia</h4></th>
			<th><h4>Calidad</h4></th>
			<th><h4>Organismo acreditador</h4></th>
		</tr>
		</thead>
		
		<tr>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td><input type="search"></td>
			<td class="bg-success"><button type="submit" class="btn btn-successt">
					<span class="glyphicon glyphicon-search"></span></button>
				<button type="reset" class="btn btn-danger">
					<span class="glyphicon glyphicon-remove"></span></button>
			</td>
		</tr>
					@foreach($programas as $programa)
		<tr>
			<td>{{$programa->nombre}}</td>
			<td>{{$programa->tipoPrograma}}</td>
			<td>{{$programa->fechaInicio}}</td>
			<td>{{$programa->evaluableCIEES}}</td>
			<td>{{$programa->calificacion}}</td>
			<td>{{$programa->status}}</td>
			<td>{{$programa->fechaVigencia}}</td>
			<td>{{$programa->calidad}}</td>
			<td>{{$programa->evaluableCOPAES}}</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>{{$programa->evaluableInter}}</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
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
<script src="{{asset('estilo/js/jquery.min.js')}}"></script>
        <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
        <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
        <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
        <script src="{{asset('estilo/js/browser.min.js')}}"></script>
        <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
        <script src="{{asset('estilo/js/util.js')}}"></script>
        <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection