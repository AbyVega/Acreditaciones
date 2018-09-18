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