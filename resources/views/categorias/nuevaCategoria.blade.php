@extends('plantillas.plantilla1')
@section('titulo','Nueva Categoria')
@section('contenido')
	<h2>NUEVA CATEGORÍA</h2>
	<DIV class="row">
		<div class="col">
			<form method="post" action="/categorias">
				@csrf
				<br><br>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nombre de la categoría</label>
			    <input type="text" name="nombre" class="form-control" id="categoria">
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</DIV>
@endsection