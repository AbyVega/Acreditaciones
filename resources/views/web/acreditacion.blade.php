@extends('layout.acred')
@section('content')

			<!-- Main -->
				<div class="wrapper style1">
					
					<div class="container">
						<div >
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<form action="{{route('ProEdu.store')}}" method="POST">
									<header>

									</header>
									<div class="table-responsive">
										<table class="table table-striped table-bordered tabled-condensed table-hover">
											<thead>

											<th><h3><a>Programas Educativos Evaluados</a></h3></th>
											<th></th>
											</tr>
											</thead>
											@foreach($programas as $programa)
											<tr>
												<td class="bg-success"><input name="id" type="text" value="{{$programa->nombre}}"></td>
												<td class="bg-success"><button type="button" class="btn btn-success">
														<span class="glyphicon glyphicon-download"></span></button>
												</td>
											</tr>
											@endforeach
											{{csrf_field()}}

								</form>


								</tbody>
								</table>
							</div>

						</div>
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