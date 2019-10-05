@extends('plantillas.plantilla1')
@section('titulo','Nuevo Libro')
@section('contenido')
	<h2>NUEVO ROL</h2>
	<DIV class="row">
		<div class="col">
			<form method="post" action="/categorias">
				@csrf
				<br><br>
			  <div class="form-group">
			    <label for="nombre">Nombre del Rol del usuario</label>
			    <input type="text" name="nombre" class="form-control" id="nombre">
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</DIV>
@endsection