@extends('plantillas.plantilla1')
@section('titulo','Carreras')
@section('contenido')

	<div class="row">
		<div class="col">
		<br><br>
		<h2>Lista De Carreras</h2>
			<table class="table table-hover">
				<tr>
					<th>#</th>
					<th>LOGO</th>
					<th>NOMBRE</th>
					<th>EDITAR</th>
					<th>ELIMINAR</th>
				</tr>

				@foreach($carreras as $carrera)
				<tr>
				<td>{{$carrera->numero}}</td>
				<td><img class="img-carrera" src="{{asset('img/'.$carrera->logo)}}"></td>
				<td>{{$carrera->nombre}}</td>
				<td>
					<a class="btn btn-primary" href="/carreras/{{$carrera->id}}/edit" role="button">Editar</a>
				</td>
				<td>
					<form method="post" action="/carreras/{{$carrera->id}}">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Eliminar</button>
					</form>
				</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>

@endsection