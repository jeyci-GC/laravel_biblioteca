@extends('plantillas.plantilla1')
@section('titulo','Nueva Categoria')
@section('contenido')
	<h2>NUEVA CATEGORÍA</h2>
	<DIV class="row">
		<div class="col">
			<form method="post" action="/categorias/{{$categoria->id}}">
				@csrf
				<input type="hidden" name="_method" value="PUT">
				<br><br>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nombre de la categoría</label>
			    <input type="text" name="nombre" class="form-control" id="nombre" value="{{$categoria->nombre}}">
			  </div>
			  <button type="submit" class="btn btn-primary">Editar</button>
			</form>
		</div>
	</DIV>
@endsection