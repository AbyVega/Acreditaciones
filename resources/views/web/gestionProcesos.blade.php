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



	<!-- Footer -->
	<div id="footer">
		<div class="container">
			<div class="row">

				<!-- Tweets -->
				<section class="col-4 col-12-mobile">
					<header>
						<h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
					</header>
					<ul class="divided">
						<li>
							<article class="tweet">
								Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
								<span class="timestamp">5 minutes ago</span>
							</article>
						</li>
						<li>
							<article class="tweet">
								Hendrerit rutrum quisque.
								<span class="timestamp">30 minutes ago</span>
							</article>
						</li>
						<li>
							<article class="tweet">
								Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
								<span class="timestamp">3 hours ago</span>
							</article>
						</li>
						<li>
							<article class="tweet">
								Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
								<span class="timestamp">5 hours ago</span>
							</article>
						</li>
					</ul>
				</section>

				<!-- Posts -->
				<section class="col-4 col-12-mobile">
					<header>
						<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
					</header>
					<ul class="divided">
						<li>
							<article class="post stub">
								<header>
									<h3><a href="#">Nisl fermentum integer</a></h3>
								</header>
								<span class="timestamp">3 hours ago</span>
							</article>
						</li>
						<li>
							<article class="post stub">
								<header>
									<h3><a href="#">Phasellus portitor lorem</a></h3>
								</header>
								<span class="timestamp">6 hours ago</span>
							</article>
						</li>
						<li>
							<article class="post stub">
								<header>
									<h3><a href="#">Magna tempus consequat</a></h3>
								</header>
								<span class="timestamp">Yesterday</span>
							</article>
						</li>
						<li>
							<article class="post stub">
								<header>
									<h3><a href="#">Feugiat lorem ipsum</a></h3>
								</header>
								<span class="timestamp">2 days ago</span>
							</article>
						</li>
					</ul>
				</section>

				<!-- Photos -->
				<section class="col-4 col-12-mobile">
					<header>
						<h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
					</header>
					<div class="row gtr-25">
						<div class="col-6">
							<a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
						</div>
						<div class="col-6">
							<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
						</div>
						<div class="col-6">
							<a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
						</div>
						<div class="col-6">
							<a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
						</div>
						<div class="col-6">
							<a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
						</div>
						<div class="col-6">
							<a href="#" class="image fit"><img src="images/pic15.jpg" alt="" /></a>
						</div>
					</div>
				</section>

			</div>
			<hr />
			<div class="row">
				<div class="col-12">

					<!-- Contact -->
					<section class="contact">
						<header>
							<h3>Nisl turpis nascetur interdum?</h3>
						</header>
						<p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
						</ul>
					</section>

					<!-- Copyright -->
					<div class="copyright">
						<ul class="menu">
							<li>&copy; Centro Universitario de los Valles.</li><li>2018 <a href="/">SIGECE</a></li>
						</ul>
					</div>

				</div>

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