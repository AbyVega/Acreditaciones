@extends('layout.acred')
@section('content')

<form action="{{ route('acreditacion.store') }}" method="POST">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered tabled-condensed table-hover">
					<thead>
						<th>ID</th>
						<th>TIPO</th>
					</thead>
					
					<tr>
					<td><input type="text" name="id" required></td>
					<td><input type="text" name="tipo" required></td>
					<td><button class="submit">enviar</button></td>
					</tr>
					
				</table>

		</div>
	</div>
											
</form>

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