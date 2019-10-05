@extends('plantillas.plantilla1')
@section('titulo','Nueva Carrera')
@section('contenido')

	<div class="row">
		<div class="col">
		
		<br><br>
		<h2>Nueva carrera</h2>
			<form method="post" action="/carreras" enctype="multipart/form-data">
			@csrf
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Nombre</label>
			    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Carrera">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Logo</label>
			    <input type="file" class="form-control" id="logo" name="logo" placeholder="Carrera">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Número</label>
			    <input type="text" class="form-control" id="numero" name="numero" placeholder="Número de carrera">
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection