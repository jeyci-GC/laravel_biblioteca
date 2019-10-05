@extends('plantillas.plantilla1')
@section('titulo'.'Libro')
@section('contenido')

	<div class="row">
		<div class="col">
		<br><br>
		<h2>Lista De Libros</h2>
			<table class="table table-hover">
				<tr>
					<th>#</th>
					<th>TÍTULO</th>
					<th>ISBN</th>
					<th>AUTOR</th>
					<th>CATEGORÍA</th>
					<th>CARRERA</th>
					<th>EDITAR</th>
					<th>ELIMINAR</th>
				</tr>

				@foreach($libros as $libro)
				<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$libro->titulo}}</td>
					<td>{{$libro->isbn}}</td>
					<td>{{$libro->autor}}</td>
					<td>{{$libro->categoria_id}}</td>
					<td>{{$libro->carrera_id}}</td>
					<td>
						<a class="btn btn-primary" href="/libros/{{$libro->id}}/edit" role="button">Editar</a>
					</td>
					<td>
							<form method="post" action="/libros/{{$libro->id}}">
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